{{-- @extends('layouts.front')

@section('header-text')
    <h1 class="hidden-sm-down">{{ ucwords($job->title) }}</h1>
<h5 class="hidden-sm-down"><i class="icon-map-pin"></i> {{ ucwords($job->location->location) }}</h5>
@endsection

@push('header-css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/datepicker3.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/node_modules/switchery/dist/switchery.min.css') }}">
@endpush

@section('content')
@php
$gender = [
'male' => __('modules.front.male'),
'female' => __('modules.front.female'),
'others' => __('modules.front.others')
];
@endphp

<form id="createForm" method="POST">
    @csrf
    <input type="hidden" name="job_id" value="{{ $job->id }}">

    <div class="container">
        <div class="row gap-y">
            <div class="col-md-12 fs-12 pt-50 pb-10 bb-1 mb-20">
                <a class="text-dark" href="{{ route('jobs.home') }}">@lang('modules.front.jobOpenings')</a> &raquo; <a
                    class="text-dark" href="{{ route('jobs.jobDetail', $job->slug) }}">{{ ucwords($job->title) }}</a>
                &raquo; <span class="theme-color">@lang('modules.front.applicationForm')</span>
            </div>

            <div class="col-md-4 px-20 pb-30">
                <h5>@lang('modules.front.personalInformation')</h5>
            </div>


            <div class="col-md-8 pb-30">

                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="full_name"
                        placeholder="@lang('modules.front.fullName')" value="@if($user) {{ $user->name }} @endif">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email"
                        placeholder="@lang('modules.front.email')" value="@if($user) {{ $user->email }} @endif">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" type="tel" name="phone"
                        placeholder="@lang('modules.front.phone')">
                </div>

                @if ($job->required_columns['gender'])
                <label class="control-label">@lang('modules.front.gender')</label>
                <div class="form-group">
                    <div class="form-inline">
                        @foreach ($gender as $key => $value)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="{{ $key }}"
                                value="{{ $key }}">
                            <label class="form-check-label" for="{{ $key }}">{{ ucFirst($value) }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if ($job->required_columns['dob'])
                <div class="form-group">
                    <input class="form-control form-control-lg dob" type="text" name="dob"
                        placeholder="@lang('modules.front.dob')" autocomplete="none">
                </div>
                @endif
                @if ($job->required_columns['country'])
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="select2 countries" name="country" id="countryId">
                                <option value="0">@lang('modules.front.selectCountry')</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="select2 states" name="state" id="stateId">
                                <option value="0">@lang('modules.front.selectState')</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="city" id="cityId"
                                placeholder="@lang('modules.front.selectCity')">
                        </div>
                    </div>
                </div>
                @endif
                @if($job->section_visibility['profile_image'] == 'yes')
                <div class="form-group">
                    <h6>@lang('modules.front.photo')</h6>
                    <img src="@if($user) {{ $user->avatar }} @endif">
                    <input type="hidden" name="linkedinPhoto" value="@if($user) {{ $user->avatar }} @endif">
                    @if($user)
                    <input type="hidden" name="apply_type" value="linkedin">
                    @endif
                    <input class="select-file" accept=".png,.jpg,.jpeg" type="file" name="photo"><br>
                    <span>@lang('modules.front.photoFileType')</span>
                </div>
                @endif
            </div>

            @if ($job->section_visibility['resume'] == 'yes')
            <div class="col-md-4 px-20 pb-30 bt-1">
                <h5>@lang('modules.front.resume')</h5>
            </div>
            <div class="col-md-8 py-30 bt-1">
                <div class="form-group">
                    <input class="select-file" accept=".png,.jpg,.jpeg,.pdf,.doc,.docx,.xls,.xlsx,.rtf" type="file"
                        name="resume"><br>
                    <span>@lang('modules.front.resumeFileType')</span>
                </div>
            </div>
            @endif
            @if(count($jobQuestion) > 0)
            <div class="col-md-4 px-20 pb-30 bt-1">
                <h5>@lang('modules.front.additionalDetails')</h5>
            </div>

            <div class="col-md-8 pb-30 bt-1">
                @forelse($jobQuestion as $question)
                <div class="form-group">
                    <label class="control-label" for="answer[{{ $question->id}}]">{{ $question->question }}</label>
                    <input class="form-control form-control-lg" type="text" id="answer[{{ $question->id}}]"
                        name="answer[{{ $question->id}}]" placeholder="@lang('modules.front.yourAnswer')">
                </div>
                @empty
                @endforelse
            </div>
            @endif

            @if ($job->section_visibility['cover_letter'] == 'yes')
            <div class="col-md-4 px-20 pb-30 bt-1">
                <h5>@lang('modules.front.coverLetter')</h5>
            </div>
            <div class="col-md-8 py-30 bt-1">
                <div class="form-group">
                    <textarea class="form-control form-control-lg" name="cover_letter" rows="4"></textarea>
                </div>
            </div>
            @endif

            @if ($job->section_visibility['terms_and_conditions'] == 'yes')
            <div class="col-md-4 px-20 pb-30 bt-1">
                <h5>@lang('modules.front.legalTerm')</h5>
            </div>
            <div class="col-md-8 py-30 bt-1">
                <div class="form-group">
                    <div class="form-control form-control-lg legal-term">
                        {!! $applicationSetting->legal_term !!}
                    </div>
                </div>
                <div class="form-group mt-30">
                    <div class="switchery-demo mr-20 d-inline-block">
                        <input type="checkbox" class="js-switch clearfix" id="agree_term" value="yes" data-size="small"
                            name="term_agreement" data-color="#00c292" />
                        <label for="term_agreement"
                            class="align-top"><b>@lang('modules.front.agreeWithTerm')</b></label>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-md-12 pb-30">
                <div class="row">
                    <div class="col-md-8 offset-md-4">
                        <button class="btn btn-lg btn-primary btn-block theme-background" id="save-form"
                            type="button">@lang('modules.front.submitApplication')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('footer-script')
<script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/node_modules/switchery/dist/switchery.min.js') }}"></script>
<script>
    // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
</script>
<script>
    const fetchCountryState = "{{ route('jobs.fetchCountryState') }}";
        const csrfToken = "{{ csrf_token() }}";
        const selectCountry = "@lang('modules.front.selectCountry')";
        const selectState = "@lang('modules.front.selectState')";
        const selectCity = "@lang('modules.front.selectCity')";
        const pleaseWait = "@lang('modules.front.pleaseWait')";

        let country = "";
        let state = "";
</script>
<script src="{{ asset('front/assets/js/location.js') }}"></script>
<script>
    $('.dob').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            endDate: (new Date()).toDateString(),
        });

        
        $('.select2').select2({
            width: '100%'
        });
        
        $('.form-group span.select2.select2-container').addClass('form-control form-control-lg');

        $('#save-form').click(function () {
            $.easyAjax({
                url: '{{route('jobs.saveApplication')}}',
                container: '#createForm',
                type: "POST",
                file:true,
                redirect: true,
                // data: $('#createForm').serialize(),
                success: function (response) {
                    if(response.status == 'success'){
                        var successMsg = '<div class="alert alert-success my-100" role="alert">' +
                            response.msg + ' <a class="" href="{{ route('jobs.home') }}">@lang("app.view") @lang("modules.front.jobOpenings") <i class="fa fa-arrow-right"></i></a>'
                            '</div>';
                        $('.main-content .container').html(successMsg);
                    }
                },
                error: function (response) {
                   // console.log(response.responseText);
                    handleFails(response);
                }
            })
        });

        function handleFails(response) {
            if (typeof response.responseJSON.errors != "undefined") {
                var keys = Object.keys(response.responseJSON.errors);
                $('#createForm').find(".has-error").find(".help-block").remove();
                $('#createForm').find(".has-error").removeClass("has-error");

                for (var i = 0; i < keys.length; i++) {
                    // Escape dot that comes with error in array fields
                    var key = keys[i].replace(".", '\\.');
                    var formarray = keys[i];

                    // If the response has form array
                    if(formarray.indexOf('.') >0){
                        var array = formarray.split('.');
                        response.responseJSON.errors[keys[i]] = response.responseJSON.errors[keys[i]];
                        key = array[0]+'['+array[1]+']';
                    }

                    var ele = $('#createForm').find("[name='" + key + "']");

                    var grp = ele.closest(".form-group");
                    $(grp).find(".help-block").remove();

                    //check if wysihtml5 editor exist
                    var wys = $(grp).find(".wysihtml5-toolbar").length;

                    if(wys > 0){
                        var helpBlockContainer = $(grp);
                    }
                    else{
                        var helpBlockContainer = $(grp).find("div:first");
                    }
                    if($(ele).is(':radio')){
                        helpBlockContainer = $(grp);
                    }

                    if (helpBlockContainer.length == 0) {
                        helpBlockContainer = $(grp);
                    }

                    helpBlockContainer.append('<div class="help-block">' + response.responseJSON.errors[keys[i]] + '</div>');
                    $(grp).addClass("has-error");
                }

                if (keys.length > 0) {
                    var element = $("[name='" + keys[0] + "']");
                    if (element.length > 0) {
                        $("html, body").animate({scrollTop: element.offset().top - 150}, 200);
                    }
                }
            }
        }
</script>
@endpush --}}

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
                                    File_name.zip</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 mb-lg-5">
                        <h5 class="text-primary-red">Cover Letter</h5>
                    </div>
                    <div class="col-12 col-lg-7 mb-4">
                        <textarea class="form-control" id="cover_letter" form="createForm" rows="3"></textarea>
                        <button class="submit-button btn bg-primary-red mt-4 py-2">Submit Application</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('footer-script')
<script>
    $url = "{{route('jobs.saveApplication')}}";
    $csrf_token = "{{ csrf_token() }}";
</script>
<script src="{{ asset('front/assets/js/job-apply.js') }}"></script>
@endpush