@extends('layouts.front')

@push('header-css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/ibet-style.css') }}">
@endpush

@section('header-text')
    <h1 class="hidden-sm-down">{{ ucwords($job->title) }}</h1>
    <h5 class="hidden-sm-down"><i class="icon-map-pin"></i> {{ ucwords($job->location->location) }}</h5>
@endsection

@section('content')
    <div class="navigation fs-15 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 fs-15">
                    <a class="" href="{{ route('jobs.home') }}">@lang('modules.front.jobOpenings')</a>
                    <span> / {{ ucwords($job->category->name) }} / </span>
                    <span class="theme-color">{{ ucwords($job->title) }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-lg-9">
                <p class="category-name d-inline-block fs-13 py-1 px-2 mb-2 font-weight-medium">{{ ucwords($job->category->name) }}</p>
                <h2 class="font-weight-bold mb-2">{{ ucwords($job->title) }}</h2>
                <p class="text-primary-red mb-2">by {{ ucwords($job->company->company_name) }}</p>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-wrap mt-3 mt-lg-0">
                <ul class="list-inline ml-lg-auto my-auto">
                    <li class="list-inline-item">
                        <a 
                        href="{{'https://www.facebook.com/sharer/sharer.php?u=http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']}}" 
                        class="social-media-item py-2 px-3">
                            <i class="fa fa-facebook-square text-secondary" aria-hidden="true"></i> Share
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{'https://twitter.com/intent/tweet?status=http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']}}" 
                        class="social-media-item py-2 px-3">
                            <i class="fa fa-twitter text-secondary" aria-hidden="true"></i> Tweet
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-9 mt-4 mt-lg-5">
                <p class="fs-15">Skills</p>
                <p class="text-primary-red fs-15">
                    @foreach ($job->skills as $idx=>$skill)
                        @if ($idx != count($job->skills)-1)
                            {{ $skill->name }},
                        @else
                            {{ $skill->name }}
                        @endif
                    @endforeach
                </p>
            </div>
            <div class="col-12 col-lg-3 mt-4 mt-lg-5">
                <div class="btn apply-button w-100 d-flex flex-wrap">
                    <a class="font-weight-bold w-100 my-auto text-white" href="{{ route('jobs.jobApply', $job->slug) }}">Apply for this Job</a>
                </div>
                <p class="fs-14 text-secondary text-center">Apply before {{ date_format(date_create($job->end_date),"d F Y") }}</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="container mt-5">
        <h5 class="text-primary-red">Job Description</h5>
        <p class="text-secondary">
            {{ $job->job_description }}
        </p>

        <h5 class="text-primary-red mt-4">Job Requirements</h5>
        <div class="text-secondary">
            {!! $job->job_requirement !!}
        </div>

        <div class="text-center">
            <div class="btn apply-button d-inline-block my-5">
                <div class="d-flex flex-wrap">
                    <a class="font-weight-bold px-5 py-2 my-auto text-white" href="{{ route('jobs.jobApply', $job->slug) }}">Apply for this Job</a>
                </div>
            </div>
            {{-- <a class="btn apply-button font-weight-bold px-5 my-5" href="{{ route('jobs.jobApply', $job->slug) }}">Apply for this Job</a> --}}
        </div>
    </div>
    

@endsection