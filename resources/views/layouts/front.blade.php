<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"            content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"         content="{{ !empty($metaDescription) ? $metaDescription : '' }}">

    <meta property="og:url"          content="{{ !empty($pageUrl) ? $pageUrl : '' }}" />
    <meta property="og:type"         content="website" />
    <meta property="og:title"        content="{{ !empty($metaTitle) ? $metaTitle : '' }}" />
    <meta property="og:description"  content="{{ !empty($metaDescription) ? $metaDescription : '' }}" />
    <meta property="og:image"        content="{{ !empty($metaImage) ? $metaImage : '' }}" />
    <meta property="og:image:width"  content="600" />
    <meta property="og:image:height" content="600" />

    <meta itemprop="name"            content="{{ !empty($metaTitle) ? $metaTitle : '' }}">
    <meta itemprop="description"     content="{{ !empty($metaDescription) ? $metaDescription : '' }}">
    <meta itemprop="image"           content="{{ !empty($metaImage) ? $metaImage : '' }}"> 
    
    <title>{{ $pageTitle }}</title>

    <style>
        :root {
            --main-color: {{ $frontTheme->primary_color }};
        }

        {!! $frontTheme->front_custom_css !!}
    </style>

    <!-- Styles -->
{{--    <link href="{{ asset('froiden-helper/helper.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">--}}

{{--    <link href="{{ asset('front/assets/css/core.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('front/assets/css/thesaas.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('front/assets/css/custom.css') }}" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{ asset('front/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:200,300,400,500,600,700">
    <link rel="stylesheet" href="{{ asset('front/assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">

    @stack('header-css')

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @stack('style')
</head>

<body>
<!-- Start: Navigation with Button -->
<nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="padding-top: 0px;padding-bottom: 0px;margin-bottom: 40px;">
    <div class="container"><a class="navbar-brand" href="{{route('jobs.home')}}"><img src="{{ asset('front/assets/img/sixSideLogo.svg') }}"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="border-color: rgb(237,93,86);"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="border-color: rgb(237,93,86);color: rgb(237,93,86);"></span></button>
        <div
                class="collapse navbar-collapse text-center text-sm-center text-md-center flex-column align-items-stretch flex-sm-column align-items-sm-stretch flex-md-column justify-content-md-center align-items-md-stretch flex-lg-row align-items-lg-center flex-xl-row align-items-xl-center"
                id="navcol-1" style="padding-top: 10px;padding-bottom: 10px;">
            <ul class="nav navbar-nav ml-auto" style="margin-right: 20px;">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('jobs.about')}}" style="font-size: 16px;">About us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('jobs.employers')}}" style="color: rgb(61,79,90);font-size: 16px;">Employers</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('jobs.job-seeker')}}" style="color: rgb(61,79,90);font-size: 16px;">Job Seekers</a></li>
            </ul>
            <span class="d-flex d-sm-flex d-md-flex flex-column justify-content-center justify-content-sm-center flex-lg-row flex-xl-row navbar-text actions">
                <a class="btn btn-primary navBtn" href="{{ route('jobs.view-jobs') }}" style="background-color: rgb(255,255,255);color: rgb(0,0,0);margin-right: 20px;">View Jobs</a>
                <a href="{{route('jobs.hire-with-us')}}" class="btn btn-primary border-white navBtn primaryBtnHovered" style="background-color: #ED5D56; color: white">Hire with us</a>
            </span></div>
    </div>
</nav>
<!-- End: Navigation with Button -->

<!-- Main container -->
<main class="main-content">

    @yield('content')

</main>
<!-- END Main container -->

<!-- Start: Footer Basic -->
<div class="footer-basic">
    <footer>
        <div class="d-flex flex-column justify-content-between align-items-center flex-sm-column align-items-sm-center flex-md-column align-items-md-center flex-lg-row flex-xl-row container"">
            <!-- Start: Social Icons -->
            <div class="d-flex flex-column align-items-xl-start social" style="padding-bottom: 0;"><img src="{{ asset('front/assets/img/sixSideLogo.svg') }}" style="width: 250px;margin-bottom: 10px;"></div>
            <!-- End: Social Icons -->
            <!-- Start: Links -->
            <ul class="list-inline d-flex d-sm-block d-md-block d-lg-block d-xl-block flex-column flex-sm-column" style="margin-top: 12px;margin-bottom: 20px;">
                <li class="list-inline-item" style="margin-bottom: 10px;"><a href="{{route('jobs.about')}}">About Us</a></li>
                <li class="list-inline-item" style="margin-right: 18px;margin-left: 18px;margin-bottom: 10px;"><a href="{{route('jobs.employers')}}">Employers</a></li>
                <li class="list-inline-item" style="margin-bottom: 10px;"><a href="{{route('jobs.job-seeker')}}" style="margin-bottom: 10px;">Job Seekers</a></li>
            </ul>
            <!-- End: Links -->
            <a href="mailto:hello@sixsiderecruitment.com" style="color: rgb(237,93,86);font-size: 18px;margin-top: 10px;margin-bottom: 26px;"><span style="text-decoration: underline;">hello@sixsiderecruitment.com</span></a>
        </div>
        <!-- Start: Copyright -->
        <p class="copyright" style="margin-top: 20px;">© 2020 Six Side Recruitment Inc. </p>
        <!-- End: Copyright -->
    </footer>
</div>
<!-- End: Footer Basic -->

<!-- Scripts -->
<script src="{{ asset('front/assets/js/core.min.js') }}"></script>
<script src="{{ asset('front/assets/js/thesaas.min.js') }}"></script>
<script src="{{ asset('front/assets/js/script.js') }}"></script>
<script src="{{ asset('froiden-helper/helper.js') }}"></script>
<script src="{{ asset('assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>

<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
<script src="{{ asset('front/assets/js/script.min.js') }}"></script>

@stack('footer-script')

</body>
</html>