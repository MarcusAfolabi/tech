@extends('layouts.main')
@section('title', 'Say Hello')
@section('description', "Great! We're excited to hear from you and let's start something special togerter. call us for any inquery.")
@section('keywords', 'get, in, touch, contact, write, us, mail, email, inquery, hello, support, blog, articules, writing, tech, crafting, bright, write, help, web, webshop, shop, tech, technology, client, featured, portfolio, afrovending, aafinilu, printivo, work, result, featured, deliveries, oratorio, oratoriogroup, mehome, me4u, meride, mattpeelogistics, elim-santurary, olusolaadebayo, fishvillae, digital, solution, problem, services, webshop, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/contact')
@section('main')
<main>

    <!-- Contact area start -->
    <section class="contact__area-6">
        <div class="container g-0 line pt-120 pb-110">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                    </div>
                </div>
                
                  <hr>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <x-validation-errors class="mb-1" />
                <hr>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="contact__text">
                        <p>Great! We're excited to hear from you and let's start
                            something special togerter. call us for any inquery.</p>
                    </div>
                </div>
              
            </div>
            <div class="row contact__btm">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="contact__info">
                        <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>say hello</h3>
                        <ul>
                            <li>No 13, Okunola Street, Opp. NYSC Camp Aisu</li>
                            <li><a href="tel:+2349035155129" class="phone">Call Now</a></li>
                            <li><a href="mailto:support@webshoptechnology.com">Send Mail </a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="contact__form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="text" name="name" required maxlength="100" placeholder="Name *">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="email" name="email" required maxlength="100" placeholder="Email *">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="tel" name="phone" maxlength="100" placeholder="Phone" pattern="[0-9]+">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="text" name="subject" required maxlength="250" placeholder="Subject *">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <textarea name="message" required maxlength="500" placeholder="Messages *"></textarea>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="btn_wrapper">
                                        <button type="submit" class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact area end -->

</main>

@endsection