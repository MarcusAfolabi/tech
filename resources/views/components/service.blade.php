@props(['service'])
<section class="service__area-4">
    <div class="container g-0 line_4 pt-150 pb-140">
        <div class="line-col-4">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                <div class="service__left-6">
                    <h2 class="sec-subtile-6">Services</h2>
                    <h3 class="sec-title-6 title-anim">Our full <br> creative services <br> for you</h3>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                <div class="service__right-4">
                    <p>We are constantly rethinking the future by creating the next generation of products, <span>brands
                            and services from a hybrid perspective.</span></p>
                    <a class="btn-view" href="{{ route('services.index') }}">View All Service <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="service__inner-4">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                    <div class="service__img-left">
                        <img src="{{ asset('assets/imgs/service/services.png') }}" class="rounded-lg" alt="Our core Service">
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                    <div class="service__list-4">
                        <div class="service__item-4 fade_bottom_2">
                            <div class="service__item-number">
                                <span>01</span>
                            </div>
                            <div class="service__title-wrapper-4">
                                <h4><a class="service__item-title" href="{{ route('services.web') }}">Website and Mobile Design</a></h4>
                            </div>
                            <div class="service__item-icon">
                                <a href="{{ route('services.web') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service__item-4 fade_bottom_2">
                            <div class="service__item-number">
                                <span>02</span>
                            </div>
                            <div class="service__title-wrapper-4">
                                <h4><a class="service__item-title" href="{{ route('services.ecommerce') }}">E-commerce Development</a></h4>
                            </div>
                            <div class="service__item-icon">
                                <a href="{{ route('services.ecommerce') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service__item-4 fade_bottom_2">
                            <div class="service__item-number">
                                <span>03</span>
                            </div>
                            <div class="service__title-wrapper-4">
                                <h4><a class="service__item-title" href="{{ route('services.ui') }}">UI/UX Design</a></h4>
                            </div>
                            <div class="service__item-icon">
                                <a href="{{ route('services.ui') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service__item-4 fade_bottom_2">
                            <div class="service__item-number">
                                <span>04</span>
                            </div>
                            <div class="service__title-wrapper-4">
                                <h4><a class="service__item-title" href="{{ route('services.seo') }}">SEO and Site management</a></h4>
                            </div>
                            <div class="service__item-icon">
                                <a href="{{ route('services.seo') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service__item-4 fade_bottom_2">
                            <div class="service__item-number">
                                <span>05</span>
                            </div>
                            <div class="service__title-wrapper-4">
                                <h4><a class="service__item-title" href="{{ route('services.public') }}">Public Relations Service</a></h4>
                            </div>
                            <div class="service__item-icon">
                                <a href="{{ route('services.public') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service__item-4 fade_bottom_2">
                            <div class="service__item-number">
                                <span>06</span>
                            </div>
                            <div class="service__title-wrapper-4">
                                <h4><a class="service__item-title" href="{{ route('services.social') }}">Social Media Marketing</a></h4>
                            </div>
                            <div class="service__item-icon">
                                <a href="{{ route('services.social') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div> 
                        <div class="service__item-4 fade_bottom_2">
                            <div class="service__item-number">
                                <span>07</span>
                            </div>
                            <div class="service__title-wrapper-4">
                                <h4><a class="service__item-title" href="{{ route('services.branding') }}">Branding and Identity</a></h4>
                            </div>
                            <div class="service__item-icon">
                                <a href="{{ route('services.branding') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>