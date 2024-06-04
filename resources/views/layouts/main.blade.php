<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('description')">
  <meta name="keyword" content="@yield('keywords')">
  <link rel="canonical" href="@yield('canonical')" />
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/favicon.png') }}">

  <title>@yield('title') - Software Startup Agency</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- Preload stylesheets -->
  <link rel="preload" as="style" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="preload" as="style" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="preload" as="style" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="preload" as="style" href="{{ asset('assets/css/progressbar.css') }}">
  <link rel="preload" as="style" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="preload" as="style" href="{{ asset('assets/css/master.css') }}">

  <!-- Apply stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">

  <meta property="og:site_name" content="Webshop Technology">
  <meta property="og:title" content="Webshop Technology ">
  <meta property="og:description" content="Webshop Technology Bring New Values to Brands.">
  <meta property="og:image" content="https://webshoptechnology.com/webshoptechnology.jpg">
  <meta property="og:url" content="https://webshoptechnology.com">
  <meta name="twitter:card" content="summary_large_image">


  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@webshop_tech" />
  <meta name="twitter:creator" content="@webshop_tech" />
  <meta property="og:url" content="https://twitter.com/webshop_tech" />
  <meta property="og:title" content="Webshop Technology" />
  <meta property="og:description" content="Webshop Technology Bring New Values to Brands" />
  <meta property="og:image" content="https://webshoptechnology.com/webshoptechnology.jpg" />

  <!-- Facebook Tag -->
  <meta property="og:url" content="http://webshoptechnology.com" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Webshop Technology" />
  <meta property="og:description" content="Webshop Technology Bring New Values to Brands" />
  <meta property="og:image" content="https://webshoptechnology.com/webshoptechnology.jpg" />
  <meta property="fb:app_id" content="225919332164015" />

  <!-- Linkedin Tag -->
  <meta property="og:title" content="Webshop Technology" />
  <meta property="og:image" content="https://webshoptechnology.com/webshoptechnology.jpg" />
  <meta property="og:description" content="Webshop Technology Bring New Values to Brands" />
  <meta property="og:url" content="https://webshoptechnology.com/" />


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ESV2PLT030"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ESV2PLT030');
  </script>
  @livewireStyles
  @vite('resources/css/app.css')
</head>


<body>
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>

  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>


  <div class="has-smooth" id="has_smooth"></div>

  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>

  <header class="header__area">
    <div class="header__inner">
      <div class="header__logo">
        <a wire:navigate.hover href="{{ url('/') }}">
          <img class="logo-primary" src="{{ asset('assets/imgs/logo/site-logo-white.png') }}" alt="webshop tech Logo">
          <img class="logo-secondary" src="{{ asset('assets/imgs/logo/site-logo-white-2.png') }}" alt="webshop tech Logo">
        </a>
      </div>
      <div class="header__nav-icon">
        <button id="open_offcanvas"><img src="{{ asset('assets/imgs/icon/menu-white.png') }}" alt="Menubar Icon"></button>
      </div>
      <div class="header__support">
        <p> <a href="tel:+2349035155129">Call Now</a></p>
      </div>
    </div>
  </header>

  <div class="offcanvas__area">
    <div class="offcanvas__body">
      <div class="offcanvas__left">
        <div class="offcanvas__logo">
          <a wire:navigate.hover href="{{ url('/') }}"><img src="{{ asset('assets/imgs/logo/site-logo-white-2.png') }}" alt="Offcanvas Logo"></a>
        </div>
        <div class="offcanvas__social">
          <h3 class="social-title">Follow Us</h3>
          <ul>
            <li><a wire:navigate.hover href="https://github.com/MarcusAfolabi/">Github</a></li>
            <li><a wire:navigate.hover href="https://facebook.com/webshoptech">Facebook</a></li>
            <li><a wire:navigate.hover href="https://twitter.com/webshop_tech">Twitter</a></li>
            <li><a wire:navigate.hover href="https://www.youtube.com/channel/UC8p0H28OzU9EL0pvlVsmVuA">YouTube</a></li>
            <li><a wire:navigate.hover href="https://www.linkedin.com/company/webshop-tech/">LinkedIn</a></li>
          </ul>
        </div>
        <div class="offcanvas__links">
          <ul>
            <li><a wire:navigate.hover href="{{ url('about') }}">About</a></li>
            <li><a wire:navigate.hover href="{{ url('contact-us') }}">Contact</a></li>
            <li><a wire:navigate.hover href="{{ route('bootcamp') }}">BootCamp</a></li>
            <!-- <li><a wire:navigate.hover href="{{ route('supports.index') }}">Blog</a></li> -->
          </ul>
        </div>
      </div>
      <div class="offcanvas__mid">
        <div class="offcanvas__menu-wrapper">
          <nav class="offcanvas__menu">
            <ul class="menu-anim">
              <li><a wire:navigate.hover href="{{ url('/') }}">home</a>
              </li>
              <li><a wire:navigate.hover href="{{ url('about') }}">about</a></li>
              <li>
                <a wire:navigate.hover href="{{ route('services.index') }}">what we do</a>
              </li>
              <!-- <li>
                <a wire:navigate.hover href="{{ route('supports.index') }}">Blog</a>
              </li> -->
              <li>
                <a wire:navigate.hover href="{{ route('bootcamp') }}">BootCamp</a>
              </li>
              </li>
              <li><a wire:navigate.hover href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="offcanvas__right">
        <div class="offcanvas__contact">
          <h3>Get in touch</h3>
          <ul>
            <li><a wire:navigate.hover href="tel:02094980547">+(234) - 91 3515 5129</a></li>
            <li><a wire:navigate.hover href="mailto:info@webshoptechnology.com">info@webshoptechnology.com</a></li>
            <li>13, Opeyemi Crescent, Magodo GRA 1, Magodo, Lagos</li>
          </ul>
        </div>
        <img src="{{ asset('assets/imgs/shape/11.png') }}" alt="webshop shape" class="shape-1">
        <img src="{{ asset('assets/imgs/shape/12.png') }}" alt="webshop shape" class="shape-2">
      </div>
      <div class="offcanvas__close">
        <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
  </div>

  <div id="smooth-wrapper">
    <div id="smooth-content">
      @yield('main')
      <footer class="footer__area">
        <div class="footer__top">
          <div class="container footer-line"></div>
          <img src="{{ asset('assets/imgs/thumb/footer.jpg') }}" alt="Footer Image" data-speed="0.5">
        </div>

        <div class="footer__btm">
          <div class="container">
            <div class="row footer__row">
              <div class="col-xxl-12">
                <div class="footer__inner">
                  <div class="footer__widget">
                    <a wire:navigate.hover href="{{ url('/') }}"> <img class="footer__logo" src="{{ asset('assets/imgs/logo/footer-logo-white.png') }}" alt="Webshop Footer Logo"> </a>
                    <p>Webshop Technology is a fantastic choice for anyone looking for a top-notch startup agency that offers customized web, mobile, and marketing services.</p>
                    <ul class="footer__social">
                      <li><a wire:navigate.hover href="https://facebook.com/webshoptech"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                      <li><a wire:navigate.hover href="https://twitter.com/webshop_tech"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                      <li><a wire:navigate.hover href="https://github.com/MarcusAfolabi"><span><i class="fa-brands fa-github"></i></span></a></li>
                      <li><a wire:navigate.hover href="https://linkedin.com/company/WEBSHOP_Technology"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                    </ul>
                  </div>

                  <div class="footer__widget-2">
                    <h2 class="footer__widget-title">Information</h2>
                    <ul class="footer__link">
                      <li><a wire:navigate.hover href="{{ url('about') }}">About Company</a></li>
                      <li><a wire:navigate.hover href="{{ url('portfolio') }}">Case Study</a></li>
                      <li><a wire:navigate.hover href="{{ route('services.index') }}">Services</a></li>
                      <!-- <li><a wire:navigate.hover href="{{ route('supports.index') }}">Blog</a></li> -->
                      <li><a wire:navigate.hover href="{{ route('bootcamp') }}">BootCamp</a></li>
                      <li><a wire:navigate.hover href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                  </div>

                  <div class="footer__widget-3">
                    <h2 class="footer__widget-title">Contact Us</h2>
                    <ul class="footer__contact">
                      <li>13, Opeyemi Crescent, Magodo GRA 1, Mogodo, Lagos 023456</li>
                      <li><a wire:navigate.hover href="tel:+2349035155129" class="phone">Call </a></li>
                      <li><a wire:navigate.hover href="mailto:support@webshoptechnology.com">Mail </a></li>
                      <!-- <li><a wire:navigate.hover href="{{ route('supports.index') }}">Blog </a></li> -->
                    </ul>
                  </div>

                  <div class="footer__widget-4">
                    <h2 class="project-title">Have a project in mind?</h2>
                    <div class="btn_wrapper">
                      <a wire:navigate.hover href="{{ url('contact-us') }}" class="wc-btn-primary btn-hover btn-item"><span></span> contact us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <h3 class="contact-time">09 : 00 AM - 10 : 30 PM</h3>
                    <h4 class="contact-day">Monday - Sunday</h4>
                  </div>

                  <div class="footer__copyright">
                    <p>© 2017 - {{ date('Y') }} | Alrights reserved by <a wire:navigate.hover href="https://webshoptechnology.com/" target="_blank">Webshop Team</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Preload JavaScript files -->
  <link rel="preload" as="script" href="{{ asset('assets/js/jquery-3.6.0.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/bootstrap.bundle.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/swiper-bundle.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/counter.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/gsap.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/ScrollTrigger.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/ScrollToPlugin.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/ScrollSmoother.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/SplitText.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/chroma.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/mixitup.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/vanilla-tilt.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/jquery.meanmenu.min.js') }}">
  <link rel="preload" as="script" href="{{ asset('assets/js/main.js') }}">

  <!-- Apply JavaScript files -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
  <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
  <script src="{{ asset('assets/js/chroma.min.js') }}"></script>
  <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('assets/js/vanilla-tilt.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @livewireScripts


</body>

</html>