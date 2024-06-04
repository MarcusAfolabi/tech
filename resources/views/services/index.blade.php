@extends('layouts.main')
@section('title', 'Services offered by Webshop Tech')
@section('description', "Explore our range of services at Webshop Tech, including web and mobile design, eCommerce development, SEO and site management, branding and identity, content marketing, social media marketing, public relations, and UI/UX design. Our team uses the latest tools and techniques to deliver exceptional results for your business.")
@section('keywords', 'user interface, user experience, ui, ux, designer, seller, buyers, buy, sell, jiji, konga, jumia, vendor, shopify, wix, woocommerce, plugins, extension, team, extensive, experience, creating, high-quality, user-friendly, websites, mobile, mobile apps, apps, fiverr, upwork, brand, webshop, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/services')
@section('main')
<main>
    <section class="solution__area">
        <div class="container hero-line"></div>
        <div class="solution__wrapper">
            <div class="solution__left">
                <div class="solution__img-1">
                    <img src="{{ asset('assets/imgs/thumb/solution.png') }}" alt="Digital Solution Image">
                </div>
                <div class="solution__img-2">
                    <img src="{{ asset('assets/imgs/thumb/solution-2.png') }}" alt="Digital Solution Image">
                </div>
            </div>

            <div class="solution__mid">
                <h1 class="solution__title animation__char_come">Digital Solution</h1>
                <p> Our team uses the latest tools and techniques to deliver exceptional results for your business..</p>
            </div>

            <div class="solution__right">
                <div class="solution__img-3">
                    <img src="{{ asset('assets/imgs/thumb/solution-3.png') }}" alt="Digital Solution Image">
                </div>
            </div>
        </div>

        <div class="container pb-130">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="solution__btm">
                        <ul>
                            <li>Approach</li>
                            <li>Creativity</li>
                            <li>Experienced</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="solution__shape">
            <img src="{{ asset('assets/imgs/icon/1.png') }}" alt="Shape Image" class="shape-1">
            <img src="{{ asset('assets/imgs/icon/2.png') }}" alt="Shape Image" class="shape-2">
            <img src="{{ asset('assets/imgs/icon/3.png') }}" alt="Shape Image" class="shape-3">
            <img src="{{ asset('assets/imgs/icon/4.png') }}" alt="Shape Image" class="shape-4">
            <img src="{{ asset('assets/imgs/icon/5.png') }}" alt="Shape Image" class="shape-5">
        </div>
    </section>
    <!-- Hero area end -->


    <!-- Service area start -->
    <section class="service__area-6">
        <div class="container">
            <div class="row inherit-row">
                <div class="col-xxl-12">
                    <div class="content-wrapper">
                        <div class="left-content">
                            <ul class="service__list-6">
                                <li class="active"><a href="#service_1">Web and Mobile Design <br> and Development </a></li>
                                <li><a href="#service_2">E-commerce <br>Development</a></li>
                                <li><a href="#service_3">UI/UX <br>Design</a></li>
                                <li><a href="#service_4">SEO and Site <br> Management</a></li>
                                <li><a href="#service_5">Public Relations <br>Service</a></li>
                                <li><a href="#service_6">Social Media <br> Marketing</a></li>
                                <li><a href="#service_7">Branding and <br> Identity</a></li>
                            </ul>
                        </div>

                        <div class="mid-content">
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/service/mobile_web_app_development.jpg') }}" alt="Custom web and mobile app development">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/service/ecommerce_development.jpg') }}" alt="E-commerce Development">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/service/ui_ux_design.jpg') }}" alt="UI/UX Design">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/service/seo_site_management.jpg') }}" alt="SEO and Site Management">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/service/public_relation.png') }}" alt="Public Relations">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/service/social_marketing.png') }}" alt="Social Media Marketing">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/service/branding_and_identity.png') }}" alt="Branding and Identity">
                            </div>
                        </div>

                        <div class="right-content">
                            <div class="service__items-6">

                                <div class="service__item-6 has__service_animation" id="service_1" data-secid="1">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/mobile_web_app_development.jpg') }}" alt="Custom web and mobile app development">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Custom web and mobile app development</h2>
                                        <p> with a focus on user experience and interface design. Key features include responsive design, cross-platform compatibility, and integration with back-end systems.</p>
                                        <ul>
                                            <li>+ API Development</li>
                                            <li>+ Custom Design</li>
                                            <li>+ Cloud Migration</li>
                                            <li>+ Full-Stack Development</li>
                                            <li>+ Node.js</li>
                                            <li>+ React Framework</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('services.web') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                free
                                                <br>quotes <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_2" data-secid="2">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/ecommerce_development.jpg') }}" alt="E-commerce Development">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">E-commerce Development</h2>
                                        <p>This service includes end-to-end e-commerce solutions such as online store setup, payment gateway integration, product catalog management, and order fulfillment tracking.</p>
                                        <ul>
                                            <li>+ API integrations</li>
                                            <li>+ WordPress</li>
                                            <li>+ Shopify</li>
                                            <li>+ Laravel</li>
                                            <li>+ Vue.js</li>
                                            <li>+ React Library and Framework</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('services.ecommerce') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                free
                                                <br>quotes <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_3" data-secid="3">

                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/ui_ux_design.jpg') }}" alt="UI/UX Design">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">UI/UX Design</h2>
                                        <p>Webshop Tech specializes in designing engaging and intuitive user interfaces and experiences. Key features include wireframing, prototyping, user testing, and design consistency across platforms.</p>
                                        <ul>
                                            <li>+ Figma</li>
                                            <li>+ Sketch</li>
                                            <li>+ Adobe XD</li>
                                            <li>+ InVision</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('services.ui') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                free
                                                <br>quotes <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_4" data-secid="4">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/seo_site_management.jpg') }}" alt="SEO and Site Management">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">SEO and Site Management</h2>
                                        <p>To help clients improve their online presence through search engine optimization techniques and site management tools. Key features include keyword research, site speed optimization, content creation, and site analytics tracking.</p>
                                        <ul>
                                            <li>+ Google Analytics</li>
                                            <li>+ SEMrush</li>
                                            <li>+ GTMetrix</li>
                                            <li>+ Digital Ocean</li>
                                            <li>+ Amazon Web Services (AWS)</li>
                                            <li>+ Content Management System (CMS)</li>

                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('services.seo') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                free
                                                <br>quotes <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_5" data-secid="5">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/public_relation.png') }}" alt="Public Relations">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Public Relations</h2>
                                        <p>Webshop Tech partners with another agency to offer public relations services such as media relations, crisis management, and event planning.</p>
                                        <ul>
                                            <li>+ PR software</li>
                                            <li>+ Social media management tools</li>
                                            <li>+ Media monitoring tools</li>
                                            <li>+ Analytics software</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('services.public') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                free
                                                <br>quotes <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_6" data-secid="6">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/social_marketing.png') }}" alt="Social Media Marketing">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Social Media Marketing</h2>
                                        <p>This service helps clients build and maintain a strong social media presence through content creation, ad campaigns, and engagement strategies. Key features include social media platform selection, audience targeting, content scheduling, and performance tracking.</p>
                                        <ul>
                                            <li>+ Hootsuite</li>
                                            <li>+ Sprout Social</li>
                                            <li>+ Facebook Ads Manager</li>
                                            <li>+ Buffer</li>
                                            <li>+ Adobe Creative Suite</li>
                                            <li>+ Google Ads</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('services.social') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                free
                                                <br>quotes <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service__item-6" id="service_6" data-secid="7">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/branding_and_identity.png') }}" alt="Branding and Identity">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Branding and Identity</h2>
                                        <p>Webshop Tech helps clients create a unique and cohesive brand identity through logo design, brand messaging, and visual branding. Key features include market research, brand strategy development, and brand style guide creation.</p>
                                        <ul>
                                            <li>+ Adobe Creative Suite</li>
                                            <li>+ Illustrator</li>
                                            <li>+ Sketch</li>
                                            <li>+ Canva</li>
                                            <li>+ Photoshop</li>
                                            <li>+ InDesign </li>
                                            <li>+ Figma </li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('services.branding') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                free
                                                <br>quotes <i class="fa-solid fa-arrow-right"></i></a>
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
    <br>
    <br>
    <br>

    <x-cta2 />

</main>

@endsection