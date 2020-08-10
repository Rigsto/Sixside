@extends('layouts.front')
@push('header-css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/ibet-style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/au-style.css') }}">
@endpush
@section('content')
    <section
            style="background: url({{ asset('front/assets/img/Group%2022.svg') }}) center / cover no-repeat;background-color: #ed5d56;font-family: Inter, sans-serif;">
        <div class="container d-flex flex-column justify-content-between" style="padding: 20px">
            <div class="d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-center"
                 style="padding-top: 40px;padding-bottom: 20px;">
                <h1 class="ctaTitle"
                    style="font-weight: bold;font-size: 36px;color: rgb(255,255,255);text-align: center;max-width: 720px;margin-bottom: 20px;">
                    Upload Resume</h1>
            </div>
        </div>
    </section>

    @if(session('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('Success')}}
        </div>
    @elseif(session('Error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('Error')}}
        </div>
    @elseif(session('Fail') || $errors->any())
        <div class="alert alert-danger alert-dismissible show" role="alert">
            {{ session('Fail') }}
            <ul style="margin-top: 1em;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section>
        <div class="container mt-5">
            <form id="uploadResume" method="POST" enctype="multipart/form-data" action="{{ route('jobs.send-resume') }}">
                @csrf

                <div class="row">
                    <div class="col-12 col-lg-5 mb-4">
                        <div class="row file-resume-box py-20" style="margin: 0;">
                            <div class="box-input mt-4 mb-4 col-12 text-center">
                                <img src="{{ asset('front/assets/img/dragdrop.svg') }}" alt="Drag and drop icon">
                                <div class="d-none d-md-block text-center">
                                    <p class="fs-18 file-resume-text mt-4 box-dragdrop"><b>Drag &amp; Drop Files
                                            Here</b></p>
                                    <p class="fs-14 file-resume-text mt-3">OR</p>
                                </div>
                                <input type="file" name="file" id="file" class="d-none box-file" required accept="application/pdf">
                                <label for="file" class="submit-button btn bg-primary-red mt-3 py-2 box-button">
                                    Choose File
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <label for="first_name" class="text-secondary mb-2">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                       placeholder="Enter your first name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <label for="last_name" class="text-secondary mb-2">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                       placeholder="Enter your last name" required>
                            </div>
                            <div class="col-12 col-md-12 mb-4">
                                <label for="email" class="text-secondary mb-2">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter your email address" required>
                            </div>
                            <div class="col-12 col-md-12 mb-4">
                                <label for="additional_notes" class="text-secondary mb-2">Additional Notes</label>
                                <textarea class="form-control" name="additional_notes" id="additional_notes" rows="3"
                                          placeholder="Enter your additional notes"></textarea>
                                <button class="submit-button btn bg-primary-red mt-4 py-2">Submit Resume</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('footer-script')
    <script src="{{ asset('front/assets/js/resume.js') }}"></script>
@endpush