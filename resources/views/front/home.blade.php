@extends('layouts.front')
@section('content')
    <section style="border-style: solid;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(235,235,235);border-left-width: 0px;background-color: #ffffff;">
        <div class="container" style="padding-bottom: 40px;padding-top: 40px;">
            <div class="row d-lg-flex d-xl-flex align-items-lg-center align-items-xl-center">
                <div class="col-lg-6 col-xl-6 text-left text-sm-center text-md-center text-lg-left text-xl-left d-md-flex order-2 order-sm-2 justify-content-md-center order-md-2 order-lg-1 order-xl-1">
                    <div>
                        <h1 style="font-weight: bold;font-size: 48px;font-family: Inter, sans-serif;">Your Staffing &amp; Human Resourcing Partner</h1>
                        <p style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;margin-bottom: 20px;">Copywriting here about six side recruitment has to offer in maximum 3 lines.</p>
                        <div class="d-flex flex-column flex-shrink-0 align-items-stretch align-content-center flex-sm-row justify-content-sm-center align-items-sm-center flex-md-row justify-content-md-center align-items-md-center flex-lg-row justify-content-lg-start align-items-lg-center flex-xl-row align-items-xl-center">
                            <a href="{{ route('jobs.hire-with-us') }}" class="btn btn-primary btn-lg border-white MainBtn primaryBtnHovered" style="background-color: #ED5D56;font-family: Inter, sans-serif;font-weight: 500;">Hire with Six Side</a>
                            <p class="text-center text-sm-left text-md-left text-lg-left text-xl-left visible"
                               style="margin-right: 20px;margin-left: 20px;max-height: 100%;min-height: 100%;margin-top: 16px;color: rgb(197,197,197);font-size: 12px;">OR</p><a class="btn btn-primary btn-lg" style="background-color: rgb(255,255,255);color: rgb(0,0,0);font-weight: 500;" href="{{ route('jobs.view-jobs') }}">View Jobs</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 order-sm-1 order-md-1 order-lg-2 order-xl-2"><img src="{{ asset('front/assets/img/Frame%201.png') }}" style="width: 100%;"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <div>
                <h1 class="text-center" style="font-weight: bold;font-family: Inter, sans-serif;">Find many Areas of Specialization</h1>
                <p class="text-center" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">Copywriting here about the many areas or jobs you can find on six side.</p>
            </div>
            <div style="margin-top: 60px;">
                <div class="row d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center areaBoxRow" data-aos="fade-right" data-aos-duration="300" style="margin-left: 0;margin-right: 0;margin-top: 0px;">
                    <div class="col-lg-4 col-xl-3 d-flex d-lg-flex d-xl-flex justify-content-center mt-sm-auto justify-content-lg-center justify-content-xl-center" style="padding-right: 0;padding-left: 0;margin-bottom: 20px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 260px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Accounting &amp; Finance</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center" style="text-align: center;padding-right: 0px;padding-left: 0;margin-bottom: 20px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 120px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195) ;">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Legal</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center" style="padding-left: 0px;padding-right: 0px;margin-bottom: 20px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 300px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Information Technology</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center" style="padding-right: 20px;padding-left: 20px;margin-top: 0px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 390px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Engineering &amp; Construction</p>
                        </div>
                    </div>
                </div>
                <div class="row d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center areaBoxRow" data-aos="fade-left" data-aos-duration="300" data-aos-delay="150" style="margin-left: 0;margin-right: 0;">
                    <div class="col-lg-4 col-xl-3 d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center" style="padding-right: 0;padding-left: 0;margin-bottom: 20px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 260px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Sales &amp; Marketing</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center" style="text-align: center;padding-right: 0px;padding-left: 0;margin-bottom: 20px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 335px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Administration &amp; Operations</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center" style="padding-left: 0px;padding-right: 0px;margin-top: 0px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 260px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Human Resources</p>
                        </div>
                    </div>
                </div>
                <div class="row d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center areaBoxRow" data-aos="fade-right" data-aos-duration="300" data-aos-delay="250" style="margin-left: 0;margin-right: 0;">
                    <div class="col-lg-4 col-xl-3 d-flex d-xl-flex justify-content-center justify-content-xl-center" style="padding-right: 0;padding-left: 0;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 240px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Executive &amp; C-suite</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 d-flex d-xl-flex justify-content-center justify-content-xl-center" style="text-align: center;padding-right: 0px;padding-left: 0;">
                        <div class="d-flex d-xl-flex justify-content-center align-items-center areasBox" style="box-shadow: -1px 11px 20px 3px rgba(237,93,86,0.19);width: 240px;height: 80px;border-radius: 8px;text-align: center;border: 1px solid rgb(255,198,195);">
                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;">Healthcare</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url({{ asset('front/assets/img/Group%2022.png') }}) center / auto no-repeat; background-color: #ed5d56;">
        <div class="container justify-content-between align-items-md-center" style="padding-top: 100px;padding-bottom: 100px;padding-right: 40px;padding-left: 40px;">
            <div class="row d-md-flex justify-content-md-center justify-content-lg-center">
                <div class="col-sm-12 col-lg-11 col-xl-7" style="margin-bottom: 20px;">
                    <div class="text-sm-center text-md-center text-lg-left text-xl-left" style="padding-top: 0;padding-bottom: 0;">
                        <h1 class="text-center text-lg-center text-xl-left" style="font-weight: bold;font-size: 36px;color: rgb(255,255,255);font-family: Inter, sans-serif;">Start building your future with Us.</h1>
                        <p class="text-center text-lg-center text-xl-left" style="font-weight: normal;color: rgba(255,255,255,0.83);font-family: Inter, sans-serif;margin-top: 20px;">Find your areas or specialization and apply for the best job.</p>
                    </div>
                </div>
                <div class="col-md-11 col-lg-10 col-xl-5 offset-lg-0 d-lg-flex justify-content-lg-center">
                    <div class="text-center d-flex flex-column align-items-stretch flex-sm-row justify-content-sm-center align-items-sm-center flex-md-row align-items-md-center flex-lg-row align-items-lg-center flex-xl-row justify-content-xl-center align-items-xl-center"><button class="btn btn-primary btn-lg border-white" style="background-color: #ED5D56;font-family: Inter, sans-serif;font-weight: 500;">View All Jobs</button>
                        <p class="d-flex justify-content-center align-items-center visible"
                           style="margin-right: 10px;margin-left: 10px;max-height: 0px;min-height: 0px;color: rgb(255,255,255);font-size: 12px;margin-top: 20px;margin-bottom: 20px;">OR</p>
                        <a href="{{ route('jobs.upload-resume') }}" class="btn btn-primary btn-lg" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);font-family: Inter, sans-serif;font-weight: 500;">Send Resume</a></div>
                </div>
            </div>
        </div>
    </section>
    <section style="border-width: 1px;border-style: solid;border-top-width: 0px;border-top-style: none;border-right-width: 0px;border-right-style: none;border-bottom: 1px solid rgb(238,238,238) ;border-left-width: 0px;border-left-style: none;">
        <div class="container" style="padding-top: 40px;padding-bottom: 40px;">
            <div class="row d-md-flex d-lg-flex d-xl-flex justify-content-md-center align-items-lg-center align-items-xl-center">
                <div class="col-lg-6 col-xl-6 d-flex d-sm-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-xl-center"><img class="img-fluid" src="{{ asset('front/assets/img/AboutUs.svg') }}" style="width: 80%;" loading="lazy"></div>
                <div class="col-md-11 col-lg-6 col-xl-6 text-center text-sm-center text-md-center text-lg-left text-xl-left">
                    <div>
                        <p style="font-weight: 400;color: rgb(0,0,0);margin-top: 16px;font-family: Inter, sans-serif;letter-spacing: 1PX;font-size: 14PX;margin-bottom: 6px;">ABOUT SIX SIDE</p>
                        <h1 style="font-weight: bold;font-size: 48px;font-family: Inter, sans-serif;">Who are we?</h1>
                        <p style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">Six Side Recruitment specializes in connecting businesses with permanent, contract, and temporary candidates to meet their business’ talent needs.</p>
                    </div><a href="{{ route('jobs.about') }}" style="color: rgb(237,93,86);font-family: Inter, sans-serif;font-weight: 400;">Learn More</a></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 60px;margin-bottom: 60px;padding-top: 40px;padding-bottom: 40px;">
            <div>
                <h1 class="text-center" style="font-weight: bold;font-family: Inter, sans-serif;">What Makes Us Unique?</h1>
                <p class="text-center" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">Brief Copywriting why six side is different </p>
            </div>
            <div class="row d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center align-items-lg-center align-items-xl-center" style="padding-top: 60px;padding-bottom: 60px;">
                <div class="col-lg-6 col-xl-6 d-flex d-sm-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-xl-start" style="margin-bottom: 40px;"><img src="{{ asset('front/assets/img/Group%207%20(2).png') }}" style="width: 80%;"></div>
                <div class="col-sm-11 col-lg-6 col-xl-6 text-center text-sm-center text-md-center text-lg-left text-xl-left">
                    <div style="margin-bottom: 40px;">
                        <h1 style="font-weight: 500;font-size: 24px;font-family: Inter, sans-serif;">Our Approach</h1>
                        <p style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">We make it our mission to understand your operations and take a proactive approach to understand your requirements. </p>
                    </div>
                    <div>
                        <h1 style="font-weight: 500;font-size: 24px;font-family: Inter, sans-serif;">Our Pricing</h1>
                        <p style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">We believe in delivering value first which is why we work on contingency and we aim to win your repeat business as your grow your team. We provide a guarantee for all candidates placed by us, stand by our performance and we provide
                            competitive prices. </p>
                    </div>
                </div>
            </div>
            <div class="row d-lg-flex d-xl-flex align-items-lg-center align-items-xl-center" style="padding-top: 60px;padding-bottom: 60px;">
                <div class="col-lg-6 col-xl-6 text-center text-sm-center text-md-center text-lg-left text-xl-left order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1">
                    <div style="margin-bottom: 40px;">
                        <h1 style="font-weight: 500px;font-size: 24px;font-family: Inter, sans-serif;">Local Network</h1>
                        <p style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">We connect with the local workforce through social and digital channels to inform them on the best market practices in addition to growing our candidate pool. </p>
                    </div>
                    <div>
                        <h1 style="font-weight: 500;font-size: 24px;font-family: Inter, sans-serif;">Quality Assurance</h1>
                        <p style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">We make sure our clients are satisfied with their new hire and candidates are satisfied with their new position. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 d-flex d-xl-flex justify-content-center order-1 order-sm-1 order-md-1 order-lg-2 justify-content-xl-end order-xl-2" style="margin-bottom: 40px;"><img src="{{ asset('front/assets/img/Image.png') }}" style="width: 80%;"></div>
            </div>
        </div>
    </section>
    <section style="background: url({{ asset('front/assets/img/Group%2022.png') }}) center / cover no-repeat;background-color: #ed5d56;">
        <div class="container d-flex flex-column justify-content-between" style="padding-top: 40px;padding-bottom: 60px;padding-right: 40px;padding-left: 40px;">
            <div style="padding-top: 40px;padding-bottom: 20px;">
                <h1 style="font-weight: bold;font-size: 36px;color: rgb(255,255,255);text-align: center;font-family: Inter, sans-serif;">Start Hiring With Us Today!</h1>
                <p style="font-weight: normal;color: rgba(255,255,255,0.83);text-align: center;font-family: Inter, sans-serif;">Copywriting here about finding the best candidate for employers</p>
            </div>
            <div class="d-flex flex-row justify-content-center justify-content-sm-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                <a href="{{ route('jobs.hire-with-us') }}" class="btn btn-primary" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);padding-top: 10px;padding-bottom: 10px;padding-right: 16px;padding-left: 16px;font-size: 18px;text-align: center;font-family: Inter, sans-serif;font-weight: 500;">Hire Now</a></div>
        </div>
    </section>
@endsection
