@extends('layouts.main')
@section('title', 'SEO and Site management')
@section('description', "Webshop Tech offers a range of SEO services to help businesses improve their online visibility and drive organic traffic to their website.")
@section('keywords', 'seller, buyers, buy, sell, jiji, konga, jumia, vendor, shopify, wix, woocommerce, plugins, extension, team, extensive, experience, creating, high-quality, user-friendly, websites, mobile, mobile apps, apps, fiverr, upwork, brand, webshop, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/services/seo')
@section('main')
<main>
    <section class="development__area">
        <div class="container g-0 line pt-130 pb-150">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title animation__char_come">Search Engine Optimization and Site Management</h2>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="development__wrapper">
                        <div class="development__content">
                            <p>Webshop Tech offers a range of SEO services to help your businesses to improve it's online visibility and </p>
                            <p>drive organic traffic to your website...</p>
                        </div>
                        <ul>
                            <li>+ Google Analytics</li>
                            <li>+ SEMrush</li>
                            <li>+ GTMetrix</li>
                            <li>+ Digital Ocean</li>
                            <li>+ Amazon Web Services (AWS)</li>
                            <li>+ Content Management System (CMS)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                    <div class="development__img">
                        <img src="{{ asset('assets/imgs/thumb/dev-1.jpg') }}" alt="Development Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="development__img">
                        <img src="{{ asset('assets/imgs/thumb/dev-2.jpg') }}" alt="Development Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="workflow__area-6">
        <div class="container g-0 line pb-130">
            <div class="line-3"></div>
            <div class="workflow__wrapper-6">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">Customized strategies</h6>
                            <p>We understand each client's SEO and site management and strategies are tailored to your specific needs and goals.
                            </p>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">Experienced team</h6>
                            <p>Webshop Tech's team of SEO and site management experts have years of experience in the industry and stay up-to-date with the latest trends and best practices.</p>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">Regular reporting</h6>
                            <p>You will receive regular reports on your website's performance, including traffic, rankings, and other key metrics.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">Communication</h6>
                            <p>Webshop Tech will always maintain open communication with you to ensure that you're informed and involved in the SEO and site management process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service__detail">
        <div class="container g-0 line pb-140">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title title-anim">We team-up, we collaborate and solve problems together</h2>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="service__detail-circle">
                        <span></span>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9">
                    <div class="service__detail-img">
                        <img src="{{ asset('assets/imgs/thumb/service-detail.png') }}" alt="Service detail image">
                        <img src="{{ asset('assets/imgs/icon/shape-6.png') }}" alt="Service shape image" class="sd-shape">
                    </div>
                    <div class="service__detail-content">
                        <p>Keyword research.<br>
                            On-page optimization.<br>
                            Off-page optimization.<br>
                            Analytics and reporting.<br>

                        <p> Website maintenance.<br>
                            Backup and restore.<br>
                            Performance optimization.
                            Content updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq__area">
        <div class="container g-0 line pb-140">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="faq__img">
                    <img src="{{ asset('assets/imgs/thumb/faq.png') }}" alt="FAQ Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="faq__content">
                        <h2 class="faq__title title-anim">Answers to possible questions</h2>

                        <div class="faq__list">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is the importance of SEO for my website?</button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p> SEO is crucial for your website as it helps in improving your website's visibility, increasing traffic, and generating leads. It involves optimizing your website's content, keywords, and structure to rank higher on search engines. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How can Webshop Tech help me with my site management? </button>

                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We offer comprehensive site management services that include website updates, security checks, backups, and optimization. Our team ensures that your website is always up-to-date, secure, and running smoothly.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How long does it take to see the results of SEO? </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The time it takes to see results from SEO depends on various factors such as your website's current ranking, competition, and the keywords targeted. However, most businesses start seeing significant improvements within 3-6 months.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How do you determine the keywords to target for SEO? </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our team conducts thorough keyword research to identify relevant and high-traffic keywords that will help improve your website's ranking. We also analyze your competition to determine the best approach for targeting keywords.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            How often do you update and optimize my website for SEO?</button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We provide regular updates and optimizations to your website to ensure that it remains optimized for SEO. Our team also monitors your website's performance and makes adjustments as necessary to improve its ranking and visibility. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ area end -->

    <x-cta2 />
</main>

@endsection