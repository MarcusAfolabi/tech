@extends('layouts.main')
@section('title', 'BootCamp New Cohort')
@section('description', "Rigorous programmes. Real-world tech skills. Lifelong career acceleration. Learn Real World Skills to Transform Your Career")
@section('keywords', 'brand, unique, client, identity, marketing, channels, logos,visual, messaging, tone, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/bootcamp')
@section('main')

<main>
    <!-- Career hero area start -->
    <section class="career__top">
        <div class="career__top-title">
            <div class="container pt-120">
                <div class="row pb-120">
                    <div class="col-xxl-10 col-xl-9 col-lg-9 col-md-9">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-title-2 animation__char_come">Tech Training for <br> the Digital Future
                            </h2>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3">
                        <div class="btn_wrapper">
                            <a href="#job_list" class="wc-btn-secondary btn-hover btn-item"><span></span> Explore Our
                                <br>Courses <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="career__thumb">
            <div class="container g-0">
                <div class="row inherit">
                    <div class="col-xxl-12">
                        <div class="career__top-img">
                            <video autoplay muted loop>
                                <source src="{{ asset('assets/video/bootcamp.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Career hero area end -->


    <!-- Career gallery start -->
    <section class="career__gallery">
        <div class="container g-0 line pt-140 pb-140">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-12">
                    <ul>
                        <li>Future</li>
                        <li>Community</li>
                        <li>Honor</li>
                    </ul>
                    <p>What sets us apart is what brings us together - a shared passion for solving business challenges
                        through strategy, design, and engineering. We are the sum total of our team, with unique
                        perspectives, capabilities, and our ability to collaborate from ideation to deployment.</p>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="career__gallery-img">
                        <img src="{{ asset('assets/imgs/career/2.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="career__gallery-img img-anim">
                        <img src="{{ asset('assets/imgs/career/3.jp') }}g" alt="Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="career__gallery-img">
                        <img src="{{ asset('assets/imgs/career/4.jpg') }}" alt="Image">
                        <img src="{{ asset('assets/imgs/career/5.jpg') }}" alt="Image">
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Career gallery end -->


    <!-- Career area start -->
    <section class="job__area pt-130 pb-150" id="job_list">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title title-anim">We're currently <br>training</h2>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="job__list">
                        <a href="{{ route('bootcamp.uiux') }}">
                            <div class="job__item">
                                <p class="job__no">01</p>
                                <h3 class="job__title">UI/UX Development</h3>
                                <h4 class="job__open">(Online & Onsite) - 4 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                        <a style="pointer-events: none;" title="Coming Soon" href="{{ route('bootcamp.frontend') }}">
                            <div class="job__item">
                                <p class="job__no">02</p>
                                <h3 class="job__title">Frontend Development</h3>
                                <h4 class="job__open">(Online & Onsite) - 6 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>

                        <a style="pointer-events: none;" href="{{ route('bootcamp.product') }}">
                            <div class="job__item">
                                <p class="job__no">03</p>
                                <h3 class="job__title">Product Management</h3>
                                <h4 class="job__open">(Online & Onsite) - 3 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                        <a style="pointer-events: none;" href="{{ route('bootcamp.mobile') }}">
                            <div class="job__item">
                                <p class="job__no">04</p>
                                <h3 class="job__title">Mobile Developement</h3>
                                <h4 class="job__open">(Online & Onsite) - 6 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                        <a style="pointer-events: none;" href="{{ route('bootcamp.backend') }}">
                            <div class="job__item">
                                <p class="job__no">05</p>
                                <h3 class="job__title">Backend Developement</h3>
                                <h4 class="job__open">(Online & Onsite) - 6 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                        <a style="pointer-events: none;" href="{{ route('bootcamp.digital') }}">
                            <div class="job__item">
                                <p class="job__no">06</p>
                                <h3 class="job__title">Digital Marketing</h3>
                                <h4 class="job__open">(Online & Onsite) - 3 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                        <a style="pointer-events: none;" href="{{ route('bootcamp.data') }}">
                            <div class="job__item">
                                <p class="job__no">07</p>
                                <h3 class="job__title">Data Analytics</h3>
                                <h4 class="job__open">(Online & Onsite) - 6 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                        <a style="pointer-events: none;" href="{{ route('bootcamp.salesforce') }}">
                            <div class="job__item">
                                <p class="job__no">08</p>
                                <h3 class="job__title">Salesforce Administrator</h3>
                                <h4 class="job__open">(Online & Onsite) - 6 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                        <a style="pointer-events: none;" href="{{ route('bootcamp.cloud') }}">
                            <div class="job__item">
                                <p class="job__no">09</p>
                                <h3 class="job__title">Cloud Computing</h3>
                                <h4 class="job__open">(Online & Onsite) - 6 Months</h4>
                                <div class="job__link"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Career area end -->


    <!-- Career benifit area start -->
    <section class="career__benefits">
        <div class="container line g-0 pt-140 pb-150">
            <span class="line-3"></span>

            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-7">
                    <ul class="career__benefits-list">
                         <li>Work-life <br> Integration</li>
                        <li>Maternity/Paternity <br>Benefits</li>
                        <li>Personal <br> Career Growth</li>
                        <li>Learning & <br>Development</li>
                        <li>Healthy <br> Food & Snacks</li>
                    </ul>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title title-anim">Global Perks & Benefits</h2>
                        <p>We want you to love training here as much as we do. To inspire our team to be creative, productive,
                            and most importantly - feel valued as employees, we offer endless perks and de-stressors. How fun it
                            is to unwind while at training!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Career benifit area end -->


</main>

@endsection