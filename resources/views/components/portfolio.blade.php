@props(['portfolio'])
<section class="portfolio__area-4 mb-4">
    <div class="container-fluid line_4 pt-150">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="portfolio__sec-title text-anim">
                    <h2 class="sec-subtile-6">Portfolio</h2>
                    <h3 class="sec-title-6 title-anim">Our selected <br> projects</h3>
                    <p>View the full case study of our recent featured and awesome works that we created for our
                        clients.</p>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <div class="portfolio__wrapper-4">
                    <div class="swiper portfolio__slider-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="portfolio__item-4">
                                    <a href="{{ url('portfolio') }}">
                                        <div class="portfolio__item-inner">
                                            <div class="portfolio__title-wrapper">
                                                <h4 class="portfolio__title-4">Metrip</h4>
                                                <h5 class="portfolio__subtitle-4">02 May 2021</h5>
                                            </div>
                                            <div class="portfolio__icon-link">
                                                <span class="portfolio__icon-4"><i class="fa-solid fa-arrow-right"></i></span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/imgs/portfolio/elim-sancturary.png') }}" alt="Metrip">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio__item-4">
                                    <a href="{{ url('portfolio') }}">
                                        <div class="portfolio__item-inner">
                                            <div class="portfolio__title-wrapper">
                                                <h4 class="portfolio__title-4">MattPee</h4>
                                                <h5 class="portfolio__subtitle-4">09 November 2021</h5>
                                            </div>
                                            <div class="portfolio__icon-link">
                                                <span class="portfolio__icon-4"><i class="fa-solid fa-arrow-right"></i></span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/imgs/portfolio/mattpee.png') }}" alt="MattPee Logistics">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio__item-4">
                                    <a href="{{ url('portfolio') }}">
                                        <div class="portfolio__item-inner">
                                            <div class="portfolio__title-wrapper">
                                                <h4 class="portfolio__title-4">BLM Schools</h4>
                                                <h5 class="portfolio__subtitle-4">20 June 2022</h5>
                                            </div>
                                            <div class="portfolio__icon-link">
                                                <span class="portfolio__icon-4"><i class="fa-solid fa-arrow-right"></i></span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/imgs/portfolio/blmschools.png') }}" alt="Beloved Montessori Schools">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="container line_4 portfolio6__line mb-4">
        <div class="line-col-4">
            <div></div>
            <div></div>
        </div>
    </div>
</section>