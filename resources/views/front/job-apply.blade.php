@extends('layouts.front')
@push('header-css')
<link rel="stylesheet" href="{{ asset('front/assets/css/ibet-style.css') }}">
@endpush

@section('content')

<form id="createForm" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_id" value="{{ $job->id }}">

    <div class="navigation fs-15 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 fs-15">
                    <a class="" href="{{ route('jobs.home') }}">@lang('modules.front.jobOpenings')</a>
                    <span> / {{ ucwords($job->category->name) }} / {{ ucwords($job->title) }} /
                        @lang('modules.front.applicationForm')</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="font-weight-bold mb-2">Application Form</h2>
        <p class="text-primary-red mb-2">for {{ ucwords($job->slug) }}</p>

        <div class="application-form mt-5">
            <div class="p-4 p-lg-5">
                <div class="row">
                    <div class="col-12 col-lg-5 mb-4">
                        <h5 class="text-primary-red">Personal Information</h5>
                    </div>
                    <div class="col-12 col-lg-7 mb-5">
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-4">
                                <label class="text-secondary mb-2" for="first_name">First Name</label>
                                <input class="form-control" type="text" id="first_name" name="first_name"
                                    placeholder="Enter your first name" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-4">
                                <label class="text-secondary mb-2" for="last_name">Last Name</label>
                                <input class="form-control" type="text" id="last_name" name="last_name"
                                    placeholder="Enter your last name" required>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="text-secondary mb-2" for="email">Email Address</label>
                                <input class="form-control" type="email" id="email" name="email"
                                    placeholder="Enter your email address" required>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="text-secondary mb-2" for="phone">Phone Number</label>
                                <input class="form-control" type="tel" id="phone" name="phone"
                                    placeholder="Enter your phone number" required>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-secondary mb-2">Photo</p>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label class="file-label text-center py-1 w-100" for="photo">
                                            <i class="fas fa-paperclip text-secondary"></i>
                                            <span class="font-weight-medium w-100 ml-1">Attach File</span>
                                        </label>
                                        <input type="file" class="custom-file-input" name="photo" id="photo" accept="image/*" required>
                                    </div>
                                    <div class="col-12 col-lg-9 d-flex flex-wrap">
                                        <p
                                            class="photo-name text-secondary fs-14 font-weight-light mt-2 my-lg-auto ml-lg-auto">
                                            We accept PNG, JPG, and, JPEG files</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 mb-lg-5">
                        <h5 class="text-primary-red">CV or Resume</h5>
                    </div>
                    <div class="col-12 col-lg-7 mb-5">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <label class="file-label text-center py-1 w-100" for="resume">
                                    <i class="fas fa-paperclip text-secondary"></i>
                                    <span class="font-weight-medium ml-1">Attach File</span>
                                </label>
                                <input type="file" class="custom-file-input" name="resume" id="resume" accept=".pdf" required>
                            </div>
                            <div class="col-12 col-lg-9 d-flex flex-wrap">
                                <p
                                    class="resume-name text-secondary fs-14 font-weight-light mt-2 my-lg-auto ml-lg-auto">
                                    File_name.pdf</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 mb-lg-5">
                        <h5 class="text-primary-red">Cover Letter</h5>
                    </div>
                    <div class="col-12 col-lg-7 mb-4">
                        <textarea class="form-control" id="cover_letter" form="createForm" rows="3"></textarea>
                        <div class="g-recaptcha mt-4" data-sitekey="6Lffeb0ZAAAAAFTJiShpp6AShPpxv4aLcTky0cWk" data-callback="recaptcha_callback"></div>
                        <p class="captcha-empty-state text-red d-none">Please Complete CAPTCHA.</p>
                        <button class="submit-button btn bg-primary-red mt-2 py-2">Submit Application</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('footer-script')
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script>
    $url = "{{ route('jobs.saveApplication') }}"
    console.log($url)
    $view_jobs_url = "{{route('jobs.view-jobs')}}"
    $csrf_token = "{{ csrf_token() }}";
</script>
<script src="{{ asset('front/assets/js/job-apply.js') }}"></script>
@endpush