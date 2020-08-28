@extends('layouts.front')
@section('content')
    <section style="border-style: solid;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(235,235,235);border-left-width: 0px;background-color: #ffffff;">
        <div class="container" style="padding-top: 60px;padding-bottom: 60px;">
            <div class="row d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-center justify-content-md-center align-items-lg-center align-items-xl-center">
                <div class="col-sm-12 col-md-9 col-lg-6 col-xl-5 text-center text-sm-center text-md-center text-lg-left text-xl-left d-sm-flex order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1">
                    <div>
                        <h1 class="text-center text-sm-center text-md-center text-lg-left text-xl-left" style="font-weight: bold;font-size: 48px;">Hire with the Power of Data and A.I.</h1>
                        <p class="text-md-center text-lg-left" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;margin-bottom: 40px;">Using our large network and advanced A.I. algorithm we can recommend the right talent for your organization.</p>
                        <div class="text-md-center d-flex flex-column flex-shrink-0 align-items-stretch align-content-center flex-sm-row justify-content-sm-center align-items-sm-center flex-md-row justify-content-md-center align-items-md-center flex-lg-row justify-content-lg-start align-items-lg-center flex-xl-row justify-content-xl-start align-items-xl-center">
                            <a href="{{ route('jobs.hire-with-us') }}" class="btn btn-primary border-white primaryBtnHovered" style="background-color: #ED5D56;font-family: Inter, sans-serif;font-weight: 500;padding-top: 8px;padding-bottom: 8px;">Request Employees</a>
                            <p class="visible" style="margin: 12px 20px 0 20px; max-height: 100%;min-height: 100%;color: rgb(197,197,197);font-size: 12px;">OR</p>
                            <a href="{{ route('jobs.view-jobs') }}" class="btn btn-primary" style="background-color: rgb(255,255,255);color: rgb(0,0,0);font-family: Inter, sans-serif;font-weight: 500;padding-top: 8px;">Looking for a job?</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center order-1 justify-content-sm-center order-sm-1 justify-content-md-center order-md-1 justify-content-lg-center order-lg-2 justify-content-xl-center order-xl-2"
                     style="margin-bottom: 40px;"><img src="{{ asset('front/assets/img/Image.png') }}" style="width: 80%;"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <div>
                <h1 class="text-center" style="font-weight: bold;">Why work with us?</h1>
                <p class="text-center" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">Finding the best fit is not always easy and fast but it’s a crucial <br>deliverable that we provide in our services.</p>
            </div>
            <div style="margin-top: 20px;">
                <div class="row d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center areaBoxRow" style="margin-left: 0;margin-right: 0;margin-top: 0px;">
                    <div class="col-lg-4 col-xl-4 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="padding-right: 20px;padding-left: 20px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-lg-start align-items-xl-start" style="width: 100%;height: 220px;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 40px;font-size: 36px;border: 1px solid rgb(237,93,86);"><i class="fas fa-user-clock" style="color: rgb(237,93,86);font-size: 28px;"></i>
                            <h1 style="font-size: 24px;font-weight: 500;margin-top: 40px;font-family: Inter, sans-serif;">Hire Faster</h1>
                            <p class="text-left d-xl-flex" style="font-size: 16px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);">We will provide you a quick short list of candidates.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="text-align: center;padding-right: 20px;padding-left: 20px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-lg-start" style="width: 100%;height: 220px;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 20px;font-size: 36px;border: 1px solid rgb(237,93,86);"><i class="fas fa-crown" style="color: rgb(237,93,86);font-size: 28px;"></i>
                            <h1 class="text-left" style="font-size: 24px;font-weight: 500;margin-top: 40px;font-family: Inter, sans-serif;">Quality Candidates</h1>
                            <p class="text-left d-xl-flex" style="font-size: 16px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);">We screen all candidates based on your need.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="padding-left: 20px;padding-right: 20px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-lg-start align-items-xl-start" style="width: 100%;height: 220px;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 40px;font-size: 36px;border: 1px solid rgb(237,93,86);"><i class="fas fa-coins" style="color: rgb(237,93,86);font-size: 28px;"></i>
                            <h1 style="font-size: 24px;font-weight: 500;margin-top: 40px;font-family: Inter, sans-serif;">Large Database</h1>
                            <p class="text-left d-xl-flex" style="font-size: 16px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);">We have a large and growing database.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 60px;padding-bottom: 40px;">
            <div class="row d-lg-flex d-xl-flex align-items-lg-center align-items-xl-center" style="padding-top: 100px;padding-bottom: 100px;">
                <div class="col-lg-5 col-xl-6 d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-xl-start" style="margin-bottom: 40px;"><img src="{{ asset('front/assets/img/Image.png') }}" style="width: 80%;"></div>
                <div class="col-lg-6 col-xl-6 offset-xl-0 text-center text-sm-center text-md-center text-lg-left text-xl-left">
                    <div style="margin-bottom: 40px;">
                        <h1 class="text-sm-center text-md-center text-lg-left text-xl-left" style="font-weight: bold;font-size: 42px;font-family: Inter, sans-serif;">Our company delivers skilled and qualified people.</h1>
                        <p class="text-sm-center text-md-center text-lg-left text-xl-left" style="font-weight: normal;color: rgb(137,137,137);margin-top: 20px;">We boast an excellent success ratio in delivering candidates that can make a long-term contribution to their employer. </p>
                    </div>
                </div>
            </div>
            <div class="row d-lg-flex d-xl-flex align-items-lg-center align-items-xl-center" style="padding-top: 100px;padding-bottom: 100px;">
                <div class="col-lg-7 col-xl-6 offset-lg-0 offset-xl-0 text-center text-sm-center text-md-center text-lg-left text-xl-left order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1">
                    <div style="margin-bottom: 40px;">
                        <h1 class="text-sm-center text-md-center text-lg-left" style="font-weight: bold;font-size: 42px;font-family: Inter, sans-serif;">We reduce hiring costs without compromising on the quality of the greatest asset, people.</h1>
                        <p class="text-sm-center text-md-center text-lg-left text-xl-left" style="font-weight: normal;color: rgb(137,137,137);margin-top: 20px;">As an experienced recruitment agency, building long-lasting relationships with a small number of clients has helped us to grow into the type of recruitment partner you can rely on. </p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 offset-lg-0 offset-xl-0 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center order-1 justify-content-sm-center order-sm-1 justify-content-md-center order-md-1 justify-content-lg-end order-lg-2 justify-content-xl-center order-xl-2"
                     style="margin-bottom: 40px;"><img src="{{ asset('front/assets/img/Image.png') }}" style="width: 80%;"></div>
            </div>
        </div>
    </section>
    <section style="background: url( {{asset('front/assets/img/Group%2022.png')}}) center / cover no-repeat;background-color: #ed5d56;">
        <div class="container d-flex flex-column justify-content-between" style="padding-top: 40px;padding-bottom: 60px;padding-right: 40px;padding-left: 40px;">
            <div style="padding-top: 40px;padding-bottom: 20px;">
                <h1 style="font-weight: bold;font-size: 36px;color: rgb(255,255,255);text-align: center;">Start Hiring With Us Today!</h1>
                <p style="font-weight: normal;color: rgba(255,255,255,0.83);text-align: center;">Copywriting here about finding the best candidate for employers</p>
            </div>
            <div class="d-flex flex-row justify-content-center justify-content-sm-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                <a href="{{ route('jobs.hire-with-us') }}" class="btn btn-primary" style="background-color: rgb(255,255,255);color: rgb(0,0,0);padding-top: 10px;padding-bottom: 10px;padding-right: 16px;padding-left: 16px;font-size: 18px;text-align: center;font-family: Inter, sans-serif;font-weight: 500;">Hire Now</a></div>
        </div>
    </section>
@endsection