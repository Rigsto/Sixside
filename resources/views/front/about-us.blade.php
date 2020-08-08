@extends('layouts.front')
@section('content')
    <section style="border-style: solid;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(235,235,235);border-left-width: 0px;background-color: #ffffff;">
        <div class="container abtUsMob" style="padding-top: 100px;padding-bottom: 100px;">
            <div class="row d-lg-flex d-xl-flex align-items-lg-center align-items-xl-center">
                <div class="col-lg-6 col-xl-6" style="padding-right: 0px;">
                    <div>
                        <h1 class="mobTitle" style="font-weight: bold;font-family: Inter, sans-serif;">Specializes in connecting businesses with permanent, contract, and temporary candidates to meet their business’ talent needs.</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 d-flex flex-row justify-content-between aboutRightHead" style="/*padding-right: 40px;*/padding-top: 0px;padding-bottom: 0px;">
                    <div style="width: 12px;background-color: #ed5d56;max-height: 100%;"></div>
                    <div class="leftAboutAlign" style="margin-left: 60px;">
                        <p class="text-left" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-size: 20px;font-family: Inter, sans-serif;">Our recruiters are tenured and understand the candidate pool and are able to find the candidate that will be the best fit for your organization.<br></p>
                        <p class="text-left" style="font-weight: normal;color: rgb(137,137,137);margin-top: 40px;font-size: 14px;font-family: Inter, sans-serif;">We are headquartered in the Greater Toronto &amp; Hamilton Area, we are recruitment experts with a solid foundation and have a proven track record in providing the best fit for clients. <br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="border-width: 1px;border-style: solid;border-top-width: 0px;border-top-style: none;border-right-width: 0px;border-right-style: none;border-bottom: 1px solid rgb(238,238,238) ;border-left-width: 0px;border-left-style: none;">
        <div class="container d-flex justify-content-center" style="padding-top: 40px;padding-bottom: 60px;">
            <div class="row d-sm-flex d-lg-flex d-xl-flex justify-content-sm-center align-items-lg-center align-items-xl-center visible">
                <div class="col-sm-11 col-lg-6 col-xl-6 offset-md-0 text-center text-lg-left text-xl-left order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1" style="padding-right: 20px;padding-left: 20px;">
                    <div>
                        <h1 style="font-weight: bold;font-size: 48px;font-family: Inter, sans-serif;">Who are we?</h1>
                        <p style="font-weight: normal;color: rgb(137,137,137);margin-top: 20px;line-height: 30px;font-family: Inter, sans-serif;">We collaborate with your human resources team to enhance your search to find the best-fit employees for your business. Our team searches labour market requirements within Canada to understand and fulfill future needs of employers.
                            <br><br>Our clients include companies from a broad spectrum of organizations with different functions and different industries requiring unique skill-sets to assist their needs.<br></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-md-0 d-xl-flex order-1 order-sm-1 order-md-1 order-lg-2 justify-content-xl-center order-xl-2"><img src="{{ asset('front/assets/img/AboutUs.svg') }}" style="width: 100%;padding-bottom: 20px;"></div>
            </div>
        </div>
    </section>
    <section style="background: url({{asset('front/assets/img/Group%2022.png')}}) center / cover no-repeat;background-color: #ed5d56;">
        <div class="container d-flex flex-column justify-content-between" style="padding-top: 40px;padding-bottom: 60px;padding-right: 40px;padding-left: 40px;">
            <div style="padding-top: 40px;padding-bottom: 20px;">
                <h1 style="font-weight: bold;font-size: 36px;color: rgb(255,255,255);text-align: center;font-family: Inter, sans-serif;">Start Hiring With Us Today!</h1>
                <p style="font-weight: normal;color: rgba(255,255,255,0.83);text-align: center;font-family: Inter, sans-serif;">Copywriting here about finding the best candidate for employers</p>
            </div>
            <div class="d-flex flex-row justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                <a href="{{ route('jobs.hire-with-us') }}" class="btn btn-primary" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);padding-top: 10px;padding-bottom: 10px;padding-right: 16px;padding-left: 16px;font-size: 18px;text-align: center;font-family: Inter, sans-serif;font-weight: 500;">Hire Now</a></div>
        </div>
    </section>
@endsection