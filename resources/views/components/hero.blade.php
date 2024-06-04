@props(['hero'])
<section class="hero__area-6">
    <div class="container g-0 line_4">
        <div class="line-col-4">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="hero__content-6 hero__six_anim">
                    <img class="hero__arrow-icon" src="{{ asset('assets/imgs/hero/4/arrow-icon.png') }}" alt="Arrow Icon">
                    <h1 class="hero__title-6 "> Cutting-edge <br>Startup <br> Agency </h1>
                    <p> With a team of talented and experienced professionals,<br> committed to delivering high-quality. </p>
                    <a wire:navigate.hover class="btn-started btn-hover" href="{{ url('contact-us') }}">Get Started</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="hero__right-6">
                    <img src="{{ asset('assets/imgs/hero/4/hero-4.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
    <img class="hero__shape" src="{{ asset('assets/imgs/hero/4/hero-shape.png') }}" alt="Shape Image">
    <img class="hero__shape-2" src="{{ asset('assets/imgs/hero/4/hero-shape-2.png') }}" alt="Layout">
    <img class="hero__shape-3" src="{{ asset('assets/imgs/hero/4/hero-shape-3.png') }}" alt="Star Icon">
    <img class="shape-4" src="{{ asset('assets/imgs/shape/20.png') }}" alt="Star Icon">
</section>