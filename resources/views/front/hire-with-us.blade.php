@extends('layouts.front')
@push('header-css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/ibet-style.css') }}">
@endpush
@section('content')
    <section style="background: url({{ asset('front/assets/img/Group%2022.svg') }}) center / cover no-repeat;background-color: #ed5d56;font-family: Inter, sans-serif;">
        <div class="container d-flex flex-column justify-content-between" style="padding: 40px 40px 60px;">
            <div class="d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-center" style="padding-top: 40px;padding-bottom: 20px;">
                <h1 class="ctaTitle"  style="font-weight: bold;font-size: 36px;color: rgb(255,255,255);text-align: center;max-width: 720px;margin-bottom: 20px;">Hire with Six Side</h1>
                <p style="font-weight: normal;color: rgba(255,255,255,0.83);text-align: center;">Copywriting here about finding the best candidate for employers</p>
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
        <div class="container mt-5" style="max-width: 600px">
            <form id="hireWithUs" method="POST" action="{{ route('jobs.send-hire') }}">
                @csrf

                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <label for="name" class="text-secondary mb-2">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <label for="company_name" class="text-secondary mb-2">Company Name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter your company name" required>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <label for="email" class="text-secondary mb-2">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <label for="phone_number" class="text-secondary mb-2">Phone Number</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="e.g. 999-999-999" required>
                    </div>
                    <div class="col-12 col-md-12 mb-4">
                        <label for="additional_notes" class="text-secondary mb-2">Additional Notes</label>
                        <textarea class="form-control" name="additional_notes" id="additional_notes" rows="3" placeholder="Enter your additional notes"></textarea>
                        <button class="submit-button btn bg-primary-red mt-4 py-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('footer-script')
    <script>
        $url = "";
        $csrf_token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('front/assets/js/hire-with-us.js') }}"></script>
@endpush