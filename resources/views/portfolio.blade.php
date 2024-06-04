@extends('layouts.main')
@section('title', 'Portfolio of Webshop Technology')
@section('description', "View the full case study of our recent featured and awesome works that we created for our clients.")
@section('keywords', 'web, webshop, shop, tech, technology, client, featured, portfolio, afrovending, aafinilu, printivo, work, result, featured, deliveries, oratorio, oratoriogroup, mehome, me4u, meride, mattpeelogistics, elim-santurary, olusolaadebayo, fishvillae, digital, solution, problem, services, webshop, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/portfolio')
@section('main')
<main>
    <section class="portfolio__area-6">
        <div class="container line pt-100 pb-140">
            <span class="line-3"></span>
            <div class="zi-9">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                        <div class="sec-title-wrapper portfolio__title-wrap-6">
                            <div class="">
                                <h2 class="sec-sub-title animation__char_come">Featured</h2>
                                <h3 class="sec-title animation__char_come_long">Work</h3>
                                <p>View the full case study of our recent featured and awesome works that we created for our
                                    clients.
                                </p>
                            </div>
                            <div class="portfolio__pagination-6">
                                <span class="portfolio__current">01</span> / 0<span class="portfolio__total"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-6">
                        <div class="portfolio__wrapper-6">
                            <div class="portfolio__list-6">
                                <div class="portfolio__item-6" data-portfitem="1">
                                    <a href="https://blmschools.com.ng/" target="_blank">
                                        <img src="{{ asset('assets/imgs/portfolio/blmschools.png') }}" alt="Beloved Montessori Schools" data-speed="0.4">
                                        <div class="portfolio__content-6">
                                            <h4 class="portfolio__title-6">Beloved Montessori Schools</h4>
                                            <h5 class="portfolio__date">02 May 2022</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="portfolio__item-6" data-portfitem="2">
                                    <a href="https://rccg-elimsanctuary.org/" target="_blank">
                                        <img src="{{ asset('assets/imgs/portfolio/elim-sancturary.png') }}" alt="Elim sancturary" data-speed="0.4">
                                        <div class="portfolio__content-6">
                                            <h4 class="portfolio__title-6">Elim sancturary</h4>
                                            <h5 class="portfolio__date">12 Oct 2020</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="portfolio__item-6" data-portfitem="3">
                                    <a href="https://gotaministries.com/" target="_blank">
                                        <img src="{{ asset('assets/imgs/portfolio/gotaministries') }}" alt="Gota Ministries" data-speed="0.4">
                                        <div class="portfolio__content-6">
                                            <h4 class="portfolio__title-6">Gota Ministries</h4>
                                            <h5 class="portfolio__date">12 May 2020</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="portfolio__item-6" data-portfitem="4">
                                    <a href="https://www.metrip.me/" target="_blank">
                                        <img src="{{ asset('assets/imgs/portfolio/GoTrip.png') }}" alt="GoTrip Logistics" data-speed="0.4">
                                        <div class="portfolio__content-6">
                                            <h4 class="portfolio__title-6">GoTrip Logistics</h4>
                                            <h5 class="portfolio__date">19 Jan 2023</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="portfolio__item-6" data-portfitem="5">
                                    <a href="https://mattpeelogistics.co.za/" target="_blank">
                                        <img src="{{ asset('assets/imgs/portfolio/mattpee.png') }}" alt="MattPee Logistics" data-speed="0.4">
                                        <div class="portfolio__content-6">
                                            <h4 class="portfolio__title-6">MattPee Logistics</h4>
                                            <h5 class="portfolio__date">16 April 2022</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="portfolio__item-6" data-portfitem="6">
                                    <a href="https://oratoriogroup.org/" target="_blank">
                                        <img src="{{ asset('assets/imgs/portfolio/oratorio.png') }}" alt="Oratorio Music Foundation" data-speed="0.4">
                                        <div class="portfolio__content-6">
                                            <h4 class="portfolio__title-6">Oratorio Music Foundation</h4>
                                            <h5 class="portfolio__date">07 Jan 2020</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="portfolio__item-6" data-portfitem="7">
                                    <a href="https://wavenewsnetwork.com/" target="_blank">
                                        <img src="{{ asset('assets/imgs/portfolio/wavenewsnetwork.png') }}" alt="Wavenews Network" data-speed="0.4">
                                        <div class="portfolio__content-6">
                                            <h4 class="portfolio__title-6">Wavenews Network</h4>
                                            <h5 class="portfolio__date">12 May 2022</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-cta2 :cta2 />

</main>
@endsection