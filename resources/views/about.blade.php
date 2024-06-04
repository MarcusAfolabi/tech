@extends('layouts.main')
@section('title', 'About Webshop Technology')
@section('description', "We are a full service creative and digital agency, working globally with largest brands")
@section('keywords', 'creative, digital, agency, project, fiverr, upwork, brand, webshop, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/about')
@section('main')
<main>

    <section class="hero__about">
        <div class="container g-0 line">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="hero__about-content">
                        <h1 class="hero-title animation__word_come">We're Webshop Tech, a creative startup agency that offers web, mobile, and marketing services </h1>
                        <div class="hero__about-info">
                            <div class="hero__about-btn">
                                <div class="btn_wrapper">
                                    <a href="{{ route('services.index') }}" class="wc-btn-primary btn-hover btn-item"><span></span>businesses<br> of all sizes
                                        <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero__about-text title-anim">
                                <p>Hello there! If you're looking for a partner to help you grow your online presence and achieve your business objectives, you've come to the right place!</p>

                                <!--  -->
                            </div>
                            <div class="hero__about-award">
                                <img src="{{ asset('assets/imgs/about/award.png') }}" alt="Best Studio Award">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hero__about-row">
                <div class="col-xxl-12">
                    <div class="hero__about-video">
                        <video loop muted autoplay playsinline>
                            <source src="{{ asset('assets/video/video.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->


    <!-- Story area start -->
    <section class="story__area">
        <div class="container g-0 line pt-140">
            <span class="line-3"></span>
            <div class="sec-title-wrapper">
                <div class="from-text">Since <span>2017</span></div>

                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <h2 class="sec-sub-title title-anim">Creative Agency</h2>
                        <h3 class="sec-title title-anim">Our story</h3>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                        <div class="story__text">
                            <p> Our story begins with a young student of computer engineering who had a dream of becoming a software engineer. This student had always been fascinated with technology and computers, and he was determined to make a career out of it. However, things didn't go as planned when he entered his Tertiary Institution.</p>

                            <p> Despite being enrolled in a computer engineering program, this student was disappointed to find that the curriculum was outdated and lacked practical, hands-on experience. He felt discouraged and disillusioned, as his hopes of becoming a software engineer began to fade.</p>

                            <p> But this student didn't give up on his dream. He knew that if he wanted to become a software engineer, he would have to take matters into his own hands. He began to teach himself the latest programming languages and frameworks, and he spent countless hours building his own software projects.</p>

                            <p> It wasn't until his Industrial Service that this student was finally able to put his skills to the test. He landed a position at a software development company, where he was able to work on real-world projects and gain invaluable experience. He quickly proved himself to be a valuable asset to the company, and he was offered a full-time position after his Industrial Service was completed.</p>

                            <p> With his newfound experience and skills, this student was finally able to graduate from his Tertiary Institution. But he didn't stop there. He continued to work as a software engineer, constantly learning and improving his craft.</p>

                            <p> Eventually, this student decided to start his own software development company, with the goal of providing high-quality and innovative solutions to clients. He named the company "Webshop Tech" in honor of his own journey and the dreams he had never given up on.</p>

                            <p> Today, Webshop Tech is a successful software development company that has helped numerous clients achieve their online goals. The founder's journey from a disillusioned student to a successful software engineer and entrepreneur is a testament to the power of perseverance and hard work.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="story__img-wrapper">
                        <img src="{{ asset('assets/imgs/story/1.jpg') }}" alt="Story Thumbnail" class="w-100">
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="story__img-wrapper img-anim">
                        <img src="{{ asset('assets/imgs/story/2.jpg') }}" alt="Story Thumbnail" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="story__img-wrapper">
                        <img src="{{ asset('assets/imgs/story/3.jpg') }}" alt="Story Thumbnail">
                        <img src="{{ asset('assets/imgs/story/4.jpg') }}" alt="Story Thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Story area end -->


    <!-- Counter area start -->
    <section class="counter__area">
        <div class="container g-0 line pb-140 pt-140">
            <span class="line-3"></span>

            <div class="row">
                <div class="col-xxl-12">
                    <div class="counter__wrapper-2 counter_animation">
                        <div class="counter__item-2 counter__anim">
                            <h2 class="counter__number">300</h2>
                            <p>Project <br>delivered</p>
                            <span class="counter__border"></span>
                        </div>
                        <div class="counter__item-2 counter__anim">
                            <h2 class="counter__number">291</h2>
                            <p>Return <br>customers</p>
                            <span class="counter__border"></span>
                        </div>
                        <div class="counter__item-2 counter__anim">
                            <h2 class="counter__number">6</h2>
                            <p>Years <br>experiences</p>
                            <span class="counter__border"></span>
                        </div>
                        <div class="counter__item-2 counter__anim">
                            <h2 class="counter__number">5</h2>
                            <p>Awards <br>achievement</p>
                            <span class="counter__border"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter area end -->
 
   
    <!-- CTA area start -->
   <cta2 :cta2 />
    <!-- CTA area end -->

</main>

@endsection