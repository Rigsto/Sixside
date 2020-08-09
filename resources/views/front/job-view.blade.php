@extends('layouts.front')

@push('header-css')
<link rel="stylesheet" href="{{ asset('front/assets/css/ibet-style.css') }}">
@endpush

@section('content')
<section class="job-view">
    <header class="header">
        <div class="header-container" style="position:relative; height:200px"></div>
        <div class="header-content text-center w-100" style="position: absolute">
            <h2 class="font-weight-bold text-white">Job Openings</h2>
            <p class="text-white">Find your areas or specialization and apply for the best job.</p>
        </div>
    </header>


    <div class="filter-container bg-primary-red mb-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-3 col-lg-1 pt-4 pb-4 pr-0">
                    <li class="list-inline-item">Filter By</li>
                </div>
                <div class="col-9 col-lg-11 pt-4 pb-4 pl-lg-5 text-right text-lg-left">
                    <ul class="list-inline fs-15 mb-0">
                        <li class="list-inline-item pr-4 font-weight-medium text-right">
                            <button class="btn p-0" onclick="show_filter_list('location')">
                                Location <i class="fas fa-caret-down"></i></li>
                        </button>
                        <li class="list-inline-item pr-4 font-weight-medium text-right">
                            <button class="btn p-0" onclick="show_filter_list('job_function')">
                                Job Function <i class="fas fa-caret-down"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1">
                    &nbsp;
                </div>
                <div class="col-12 col-lg-11 pl-lg-5">
                    <ul class="filter-list list-inline text-white fs-15 mb-0">
                        {{-- Generated from JS. --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="job-list row">
            {!! $job_items !!}

            
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                {!! $pagination !!}
            </div>
        </div>
    </div>

    <div class="footer bg-primary-red">
        <div class="container py-5 py-lg-6" style="position: relative">
            <img src="{{ asset('front/assets/img/dots-pattern.svg') }}" alt="" style="position:absolute; left:-5%; top:10%" height="50%">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h2 class="font-weight-bold text-white text-center text-lg-left">Improve your resume into a powerful result-oriented document before applying.</h2>
                </div>
                <div class="col-12 col-lg-5 d-flex flex-wrap">
                    <a class="send-resume-button btn mx-auto mt-5 py-3 ml-lg-auto mr-lg-0 my-lg-auto font-weight-medium" href="">Send us your Resume</a>
                    {{-- <h1>Improve your resume</h1> --}}
                </div>
            </div>
        </div>
        
    </div>
</section>

@endsection

@push('footer-script')
    <script>
            $url = "{{route('jobs.get_filter_list')}}";
            $filter_jobs_url = "{{route('jobs.view-jobs')}}";
            $csrf_token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('front/assets/js/job-list.js') }}"></script>
@endpush