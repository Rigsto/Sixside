@extends('layouts.front')
@section('content')
    <section style="border-style: solid;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(235,235,235);border-left-width: 0px;background-color: #ffffff;">
        <div class="container" style="padding-top: 60px;padding-bottom: 60px;">
            <div class="row d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-center justify-content-md-center align-items-lg-center align-items-xl-center">
                <div class="col-sm-11 col-md-10 col-lg-6 col-xl-6 text-center text-sm-center text-md-center text-lg-left text-xl-left order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1">
                    <div>
                        <h1 style="font-weight: bold;font-size: 48px;">Ready to find a new job? </h1>
                        <p class="text-md-center text-lg-left" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;">We are your long term career consultants. We can provide you with accurate and timely market information to help you make the best decisions for your career.</p>
                        <div class="text-md-center d-flex flex-column flex-shrink-0 align-items-stretch align-content-center flex-sm-row justify-content-sm-center flex-md-row justify-content-md-center flex-lg-row justify-content-lg-start flex-xl-row justify-content-xl-start"><button class="btn btn-primary border-white primaryBtnHovered" type="button" style="background-color: #ED5D56;font-family: Inter, sans-serif;font-weight: 500;padding-top: 8px;padding-bottom: 8px;">View Jobs</button>
                            <p class="visible"
                               style="margin-right: 20px;margin-left: 20px;max-height: 100%;min-height: 100%;margin-top: 16px;color: rgb(197,197,197);font-size: 12px;">OR</p><a href="{{ route('jobs.upload-resume') }}" class="btn btn-primary" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);font-family: Inter, sans-serif;font-weight: 500;padding-top: 8px;padding-bottom: 8px;">Send Us Your Resume</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-0 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center order-1 justify-content-sm-center order-sm-1 justify-content-md-center order-md-1 justify-content-lg-center order-lg-2 justify-content-xl-center order-xl-2"
                     style="margin-bottom: 40px;"><img src="{{ asset('front/assets/img/Image.png') }}" style="width: 80%;"></div>
            </div>
        </div>
    </section>
    <section style="border-bottom: 1px solid rgb(227,227,227) ;">
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <div class="d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-center">
                <h1 class="text-center" style="font-weight: bold;">Latest Job Openings</h1>
                <p class="text-center" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;max-width: 730px;">Find the latest jobs from various Companies &amp; Organizations</p>
            </div>
            <div style="margin-top: 20px;">
                <div class="row d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center areaBoxRow" style="margin-left: 0;margin-right: 0;margin-top: 0px;">
                    <div class="col-lg-6 col-xl-4 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" data-aos="fade-up" data-aos-delay="100" style="padding-right: 10px;padding-left: 10px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-start align-items-sm-start align-items-md-start align-items-lg-start align-items-xl-start jobCard" style="width: 100%;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 40px;font-size: 36px;border: 1px solid rgb(237,93,86);height: 260px;">
                            <div>
                                <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;">Manager- Revenue &amp; Analytics</h1>
                                <p class="text-left text-sm-left text-md-left text-lg-left text-xl-left d-xl-flex" style="font-size: 14px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);text-align: left;">by Froiden Technologies Pvt Ltd</p>
                            </div>
                            <div style="margin-top: 40px;">
                                <h1 style="font-size: 15px;font-weight: 300;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(142,142,142);">Apply before</h1>
                                <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 14px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;color: rgb(237,93,86);">31 July 2020</p>
                            </div>
                            <div class="d-flex justify-content-between" style="width: 100%;margin-top: 40px;">
                                <div class="d-flex align-items-xl-center"><i class="icon ion-ios-location" style="font-size: 14px;color: rgb(237,93,86);margin-right: 10px;"></i>
                                    <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(237,93,86);margin-bottom: 0px;">Delhi, India</h1>
                                </div>
                                <div class="d-flex align-items-xl-center"><i class="fa fa-suitcase" style="font-size: 14px;color: rgb(237,93,86);margin-right: 10px;"></i>
                                    <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(237,93,86);margin-bottom: 0px;">Engineering</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" data-aos="fade-up" data-aos-delay="200" style="text-align: center;padding-right: 10px;padding-left: 10px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-start align-items-sm-start align-items-md-start align-items-lg-start align-items-xl-start jobCard" style="width: 100%;border-radius: 8px;padding-left: 30px;padding-right: 40px;border: 1px solid rgb(237,93,86);height: 260px;font-size: 36px;text-align: center;">
                            <div>
                                <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;">Manager- Revenue &amp; Analytics</h1>
                                <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 14px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);text-align: left;">by Froiden Technologies Pvt Ltd</p>
                            </div>
                            <div style="margin-top: 40px;">
                                <h1 style="font-size: 15px;font-weight: 300;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(142,142,142);">Apply before</h1>
                                <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 14px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;color: rgb(237,93,86);">31 July 2020</p>
                            </div>
                            <div class="d-flex justify-content-between" style="width: 100%;margin-top: 40px;">
                                <div class="d-flex align-items-xl-center"><i class="icon ion-ios-location" style="font-size: 14px;color: rgb(237,93,86);margin-right: 10px;"></i>
                                    <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(237,93,86);margin-bottom: 0px;">Delhi, India</h1>
                                </div>
                                <div class="d-flex align-items-xl-center"><i class="fa fa-suitcase" style="font-size: 14px;color: rgb(237,93,86);margin-right: 10px;"></i>
                                    <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(237,93,86);margin-bottom: 0px;">Engineering</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" data-aos="fade-up" data-aos-delay="250" style="padding-left: 10px;padding-right: 10px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-start align-items-sm-start align-items-md-start align-items-lg-start align-items-xl-start jobCard" style="width: 100%;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 20px;font-size: 36px;border: 1px solid rgb(237,93,86);height: 260px;">
                            <div>
                                <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;">Manager- Revenue &amp; Analytics</h1>
                                <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 14px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);text-align: left;">by Froiden Technologies Pvt Ltd</p>
                            </div>
                            <div style="margin-top: 40px;">
                                <h1 style="font-size: 15px;font-weight: 300;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(142,142,142);">Apply before</h1>
                                <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 14px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 500;color: rgb(237,93,86);">31 July 2020</p>
                            </div>
                            <div class="d-flex justify-content-between" style="width: 100%;margin-top: 40px;">
                                <div class="d-flex align-items-xl-center"><i class="icon ion-ios-location" style="font-size: 14px;color: rgb(237,93,86);margin-right: 10px;"></i>
                                    <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(237,93,86);margin-bottom: 0px;">Delhi, India</h1>
                                </div>
                                <div class="d-flex align-items-xl-center"><i class="fa fa-suitcase" style="font-size: 14px;color: rgb(237,93,86);margin-right: 10px;"></i>
                                    <h1 style="font-size: 15px;font-weight: 500;margin-top: 0px;font-family: Inter, sans-serif;text-align: left;color: rgb(237,93,86);margin-bottom: 0px;">Engineering</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <div class="d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-center">
                <h1 class="text-center" style="font-weight: bold;">Why Six Side?</h1>
                <p class="text-center" style="font-weight: normal;color: rgb(137,137,137);margin-top: 16px;font-family: Inter, sans-serif;max-width: 730px;">We apply our knowledge to give your information on the market and guide your next career move. We interact with candidates from around the GTA and Canada.</p>
            </div>
            <div style="margin-top: 20px;">
                <div class="row d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center areaBoxRow" style="margin-left: 0;margin-right: 0;margin-top: 0px;">
                    <div class="col-lg-6 col-xl-6 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="padding-right: 20px;padding-left: 20px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-lg-start align-items-xl-start whySixSide" style="width: 100%;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 40px;font-size: 36px;border: 1px solid rgb(237,93,86);height: 233px;"><i class="fas fa-door-open" style="color: rgb(237,93,86);font-size: 32px;"></i>
                            <h1 style="font-size: 24px;font-weight: 500;margin-top: 40px;font-family: Inter, sans-serif;">Our Consultative Approach</h1>
                            <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 16px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);">We work to understand your needs, your career goals, and objectives. Presenting our candidates in the best light and ensuring their best-fit is our goal.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="text-align: center;padding-right: 20px;padding-left: 20px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-lg-start whySixSide" style="width: 100%;height: 233px;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 20px;font-size: 36px;border: 1px solid rgb(237,93,86);"><i class="fas fa-poll" style="color: rgb(237,93,86);font-size: 32px;"></i>
                            <h1 class="text-left" style="font-size: 24px;font-weight: 500;margin-top: 40px;font-family: Inter, sans-serif;">Our Market Insight</h1>
                            <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 16px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);">We are constantly in contact with our clients and understand their needs and any upcoming projects.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="padding-left: 20px;padding-right: 20px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-lg-start align-items-xl-start whySixSide" style="width: 100%;height: 233px;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 40px;font-size: 36px;border: 1px solid rgb(237,93,86);"><i class="fas fa-atom" style="color: rgb(237,93,86);font-size: 32px;"></i>
                            <h1 style="font-size: 24px;font-weight: 500;margin-top: 40px;font-family: Inter, sans-serif;">Our Local Knowledge</h1>
                            <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 16px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);">Possessing years of experience, we understand the talent pool in Ontario. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="padding-left: 20px;padding-right: 20px;margin-top: 40px;margin-bottom: 40px;">
                        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-lg-start align-items-xl-start whySixSide" style="width: 100%;height: 233px;border-radius: 8px;text-align: center;padding-left: 30px;padding-right: 40px;font-size: 36px;border: 1px solid rgb(237,93,86);"><i class="fas fa-wave-square" style="color: rgb(237,93,86);font-size: 32px;"></i>
                            <h1 style="font-size: 24px;font-weight: 500;margin-top: 40px;font-family: Inter, sans-serif;">Our Methodical Approach</h1>
                            <p class="text-center text-sm-center text-md-center text-lg-left text-xl-left d-xl-flex" style="font-size: 16px;margin-bottom: 0px;font-family: Inter, sans-serif;font-weight: 300;color: rgb(145,145,145);">Our goal is to help our candidates understand their value and help communicate this to potential employers. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url({{ asset('front/assets/img/Group%2022.svg') }}) center / cover no-repeat;background-color: #ed5d56;font-family: Inter, sans-serif;">
        <div class="container d-flex flex-column justify-content-between" style="padding-top: 40px;padding-bottom: 60px;padding-right: 40px;padding-left: 40px;">
            <div class="d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-center" style="padding-top: 40px;padding-bottom: 20px;">
                <h1 class="ctaTitle" style="font-weight: bold;font-size: 36px;color: rgb(255,255,255);text-align: center;max-width: 720px;margin-bottom: 20px;">Transform your resume into a powerful results-orientated document.</h1>
                <p style="font-weight: normal;color: rgba(255,255,255,0.83);text-align: center;">We provide resume improvement tips and interview preparation as well. </p>
            </div>
            <div class="d-flex flex-row justify-content-center justify-content-sm-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                <a href="{{ route('jobs.upload-resume') }}" class="btn btn-primary" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);padding-top: 10px;padding-bottom: 10px;padding-right: 16px;padding-left: 16px;font-size: 18px;text-align: center;font-family: Inter, sans-serif;font-weight: 500;">Send Us Your Resume</a></div>
        </div>
    </section>
@endsection