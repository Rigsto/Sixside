<?php

namespace App\Http\Controllers\Front;

use App\ApplicationSetting;
use App\FooterSetting;
use App\Helper\Files;
use App\Helper\Reply;
use App\Http\Requests\FrontJobApplication;
use App\Job;
use App\JobApplication;
use App\JobApplicationAnswer;
use App\JobCategory;
use App\JobLocation;
use App\Notifications\NewJobApplication;
use App\User;
use Illuminate\Http\Request;
use App\LinkedInSetting;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class FrontJobsController extends FrontBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = __('modules.front.jobOpenings');

        $linkedinSetting = LinkedInSetting::where('status', 'enable')->first();
        $this->linkedinGlobal = LinkedInSetting::first();

        if ($linkedinSetting)
        {
            Config::set('services.linkedin.client_id', $linkedinSetting->client_id);
            Config::set('services.linkedin.client_secret', $linkedinSetting->client_secret);
            Config::set('services.linkedin.redirect', $linkedinSetting->callback_url);
        }
    }

    public function home(){
        return view('front.home', $this->data);
    }

    public function about(){
        return view('front.about-us', $this->data);
    }

    public function employers(){
        return view('front.employers', $this->data);
    }

    public function jobSeeker(){
        return view('front.job-seeker', $this->data);
    }

    public function viewJobs(){
        return view('front.view-jobs');
    }

    public function jobOpenings()
    {
        $this->jobs = Job::activeJobs();
        $this->locations = JobLocation::all();
        $this->categories = JobCategory::all();

        return view('front.job-openings', $this->data);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function customPage($slug)
    {

        $this->customPage = FooterSetting::where('slug', $slug)->where('status', 'active')->first();

        if(is_null($this->customPage)){ abort(404); }

        $this->pageTitle = ucfirst($this->customPage->name);

        return view('front.custom-page', $this->data);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jobDetail($slug)
    {
        $this->job = Job::where('slug', $slug)
            ->whereDate('start_date', '<=', Carbon::now())
            ->whereDate('end_date', '>=', Carbon::now())
            ->where('status', 'active')
            ->firstOrFail();
        Session::put('lastPageUrl', $slug);

        

        $this->pageTitle = $this->job->title . " - " . $this->companyName;
        $this->metaTitle = $this->job->meta_details['title'];
        $this->metaDescription = $this->job->meta_details['description'];
        $this->metaImage = $this->job->company->logo_url;
        $this->pageUrl = request()->url();

        return view('front.job-detail', $this->data);
    }

    /**
     * @param $provider
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function callback($provider, Request $request)
    {
        if ($request->error) {
            $this->errorCode = $request->error;
            $this->error = $request->error_description;
            return view('errors.linkedin', $this->data);
        }
        
        $this->user = Socialite::driver($provider)->user();
        $this->lastPageUrl = Session::get('lastPageUrl');
        Session::put('accessToken', $this->user->token);
        Session::put('expiresIn', $this->user->expiresIn);
        return redirect()->route('jobs.jobApply', $this->lastPageUrl);

    }

    /**
     * @param $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jobApply($slug)
    {
        $this->accessToken = Session::get('accessToken');
        if ($this->accessToken)
        {
            $this->user = Socialite::driver('linkedin')->userFromToken($this->accessToken);
        }
        else{
            $this->user =[];
        }
        $this->job = Job::where('slug', $slug)->first();
        $this->jobQuestion = $this->job->questions;
        $this->applicationSetting = ApplicationSetting::first();
        $this->pageTitle = $this->job->title . ' - ' . $this->companyName;

        return view('front.job-apply', $this->data);
    }

    /**
     * @param FrontJobApplication $request
     * @return mixed
     */
    public function saveApplication(FrontJobApplication $request)
    {
        $jobApplication = new JobApplication();
        $jobApplication->full_name = $request->full_name;
        $jobApplication->job_id = $request->job_id;
        $jobApplication->status_id = 1; //applied status id
        $jobApplication->email = $request->email;
        $jobApplication->phone = $request->phone;

        if ($request->has('gender')) {
            $jobApplication->gender = $request->gender;
        }
        if ($request->has('dob')) {
            $jobApplication->dob = $request->dob;
        }
        if ($request->has('country')) {
            $countriesArray = json_decode(file_get_contents(public_path('country-state-city/countries.json')), true)['countries'];
            $statesArray = json_decode(file_get_contents(public_path('country-state-city/states.json')), true)['states'];

            $jobApplication->country = $this->getName($countriesArray, $request->country);
            $jobApplication->state = $this->getName($statesArray, $request->state);
            $jobApplication->city = $request->city;
        }

        $jobApplication->cover_letter = $request->cover_letter;
        $jobApplication->column_priority = 0;

        if ($request->hasFile('photo')) {
            $jobApplication->photo = Files::upload($request->photo, 'candidate-photos');
        }
        $jobApplication->save();

        if ($request->hasFile('resume')) {
            $hashname = Files::upload($request->resume, 'documents/'.$jobApplication->id, null, null, false);
            $jobApplication->documents()->create([
                'name' => 'Resume',
                'hashname' => $hashname
            ]);
        }

        $linkedin = false;

        if($request->linkedinPhoto)
        {
            $contents = file_get_contents($request->linkedinPhoto);
            $getfilename =  str_replace(' ', '_', $request->full_name);
            $filename = $jobApplication->id.$getfilename.'.png';
            Storage::put('candidate-photos/'.$filename, $contents);
            $jobApplication = JobApplication::find($jobApplication->id);
            $jobApplication->photo = $filename;
            $jobApplication->save();
        }
        
        $users = User::allAdmins();
        if (!empty($request->answer)) {
            foreach ($request->answer as $key => $value) {
                $answer = new JobApplicationAnswer();
                $answer->job_application_id = $jobApplication->id;
                $answer->job_id = $request->job_id;
                $answer->question_id = $key;
                $answer->answer = $value;
                $answer->save();
            }
        }
        if($request->has('apply_type')){
            $linkedin = true;
        }

        // Notification::send($users, new NewJobApplication($jobApplication, $linkedin));

        return Reply::dataOnly(['status' => 'success', 'msg' => __('modules.front.applySuccessMsg')]);
    }

    public function fetchCountryState(Request $request)
    {
        $responseArr = [];

        $response = [
            "status" => "success", 
            "tp" => 1,
            "msg" => "Countries fetched successfully."
        ];

        switch ($request->type) {
            case 'getCountries':
                $countriesArray = json_decode(file_get_contents(public_path('country-state-city/countries.json')), true)['countries'];

                foreach ($countriesArray as $country) {
                    $responseArr = Arr::add($responseArr, $country['id'], $country['name']);
                }
            break;
            case 'getStates':
                $statesArray = json_decode(file_get_contents(public_path('country-state-city/states.json')), true)['states'];
                $countryId = $request->countryId;

                $filteredStates = array_filter($statesArray, function ($value) use ($countryId) {
                    return $value['country_id'] == $countryId;
                });

                foreach ($filteredStates as $state) {
                    $responseArr = Arr::add($responseArr, $state['id'], $state['name']);
                }
            break;
        }
        $response = Arr::add($response, "result", $responseArr);                

        return response()->json($response);
    }

    public function getName($arr, $id)
    {
        $result = array_filter($arr, function ($value) use ($id) {
            return $value['id'] == $id;
        });
        return current($result)['name'];
    }
}
