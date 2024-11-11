
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Segitiga Motor</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/logo-5.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">   
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent gradient-color-2">
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="/ "><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix get-support-color-white">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Dapatkan Dukungan</h6>
                                    <h4><a href="tel:+62 851-7429-6682">+62 851-7429-6682</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu"><a href="/ ">Beranda</a>
                                        </li>
                                        <li class="menu"><a href="/about">Tentang</a>
                                        </li>
                                        <li class="menu"><a href="service">Servis</a>
                                        </li>
                                        <li class="menu"><a href="product">Produk</a>
                                        </li>
                                        <li class="menu"><a href="galeri">Galeri</a>
                                        </li>
                                        <li class="menu"><a href="blog">Artikel</a>
                                        </li>
                                        <li><a href="contact">Kontak</a></li>
                                        <li class="special-link "><a href="booking">Penjadwalan</a></li>
                                       <!-- Jika pengguna sudah login, tampilkan tombol Logout -->
                                       <li class="special-link">
                                            @if (Auth::check())
                                                <a href="{{ route('logout') }}" class="btn btn" 
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Keluar
                                                </a>
                                                <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                                                    @csrf
                                                </form>
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn">Masuk</a>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle menu-btn-white menu-btn-border--- d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->
    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="/"><img src="img/logo-2.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="/">Beranda</a>
                    </li>
                    <li><a href="about">Tentang</a>
                    </li>
                    <li><a href="service">Servis</a>
                    </li>
                    <li><a href="product">Produk</a>
                    </li>
                    <li><a href="galeri">Galeri</a>
                    </li>
                    <li><a href="blog">Artikel</a>
                    </li>
                    <li><a href="contact">Kontak</a></li>
                    <!-- Jika pengguna sudah login, tampilkan tombol Logout -->
                    <li class="special-link">
                         @if (Auth::check())
                            <a href="{{ route('logout') }}" class="btn btn" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                                @csrf
                            </form>
                         @else
                            <a href="{{ route('login') }}" class="btn btn">Masuk</a>
                         @endif
                    </li>

                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <ul>
                        <li><a href="https://www.instagram.com/segitigamotorbgr_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.tiktok.com/@segitigamotor_bengkel?_t=8pvZaNNw0S0&_r=1" title="TikTok"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="mailto:Segitigamotor024@gmail.com" title="Email"><i class="fas fa-envelope"></i></a></li>
                        <li><a href="tel:+6285174296682" title="Telephone"><i class="fas fa-phone"></i></a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->


    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-4) -->
    <div class="ltn__slider-area ltn__slider-4 position-relative fix">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
            
            <!-- HTML5 VIDEO -->
            <video autoplay muted loop id="myVideo">
                <source src="media/carausel.mp4" type="video/mp4">
            </video>

            <!-- YouTube VIDEO -->
            <!-- <div class="ltn__youtube-video-background">
                <iframe frameborder="0" height="100%" width="100%"
                  src="https://www.youtube.com/embed/fzD6S1dMhrw?playlist=fzD6S1dMhrw&loop=1&controls=0&showinfo=0&autoplay=1&mute=1">
                </iframe>
            </div> -->

            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-30" data-bs-bg="/img/slider/41.jpg">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h1 class="slide-title text-uppercase white-color animated ">solusi tepat <br>  untuk motor anda</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-80 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <ul class="ltn__parallax-effect-wrap ltn__parallax-effect-active"
                            data-friction-x="0.1"
                            data-friction-y="0.1"
                            data-scalar-x="15"
                            data-scalar-y="25">
                            <li class="layer" data-depth="0.00"></li>
                            <li class="layer" data-depth="0.10">
                                <div class="ltn__effect-img ltn__effect-img-top-left">
                                    <img src="/img/IMG_1253.jpg" alt="#">
                                </div>
                            </li>                            
                            <li class="layer" data-depth="0.30">
                                <div class="ltn__effect-img ltn__effect-img-top-right">
                                    <img src="/img/ganti-ban.jpg" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.50">
                                <div class="ltn__effect-img ltn__effect-img-center-left">
                                    <img src="/img/IMG_1221.jpg" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.20">
                                <div class="ltn__effect-img ltn__effect-img-center-right">
                                    <img src="/img/IMG_1223.jpg" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.20">
                                <div class="ltn__effect-img ltn__effect-img-bottom-left">
                                    <img src="/img/IMG_1229.jpg" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.20">
                                <div class="ltn__effect-img ltn__effect-img-bottom-right">
                                    <img src="/img/IMG_1233.jpg" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.50">
                                <div class="wave ltn__animation-wave-5s ltn__effect-img-top-center ">
                                    <div class="about-us-img-info">
                                        <div class="about-us-img-info-inner">
                                            <h1><span class="counter">17</span><span>+</span></h1>
                                            <h6><span>Pengalaman</span> Bertahun - tahun</h6>
                                            <span class="dots-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Tentang Kami</h6>
                            <h1 class="section-title">Motor Anda Adalah Prioritas Kami<span>!</span></h1>
                            <p>Selamat datang di Segitiga Motor, bengkel motor yang siap melayani segala kebutuhan perawatan dan perbaikan motor Anda.Segitiga Motor telah menjadi pilihan utama para pengendara motor berkat pelayanan profesional dan kualitas kerja yang dapat diandalkan.</p>
                        </div>

                        <p>Dengan tim mekanik berpengalaman dan fasilitas lengkap, kami menawarkan berbagai layanan, mulai dari servis rutin, perbaikan mesin, hingga modifikasi sesuai dengan kebutuhan Anda. Kami juga menggunakan suku cadang asli dan peralatan modern untuk memastikan motor Anda selalu dalam kondisi terbaik. </p>
                        <hr>
                        <div class="about-call-us">
                            <div class="call-us-icon">
                                <img src="img/icons/7.png" alt="Icon Image">
                            </div>
                            <div class="call-us-info">
                                <p>Panggil kami. Kita bisa jawab <a href="contact" class="ltn__secondary-color text-decoration"><strong>semua pertanyaan kamu</strong></a>.</p>
                                <h2><a href="tel:+62 851-7429-6682">+62 851-7429-6682</a> <small></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- WHY CHOOSE US AREA START -->
    <div class="ltn__why-choose-us-area section-bg-1 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Servis</h6>
                            <h1 class="section-title">Pelayanan Profesional<span>.</span></h1>
                            <p>Anda akan dilayani oleh tim mekanik berpengalaman dan terlatih. Kami selalu memberikan solusi terbaik untuk setiap masalah motor Anda, memastikan kualitas kerja yang memuaskan.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="why-choose-us-feature-item">
                                    <div class="why-choose-us-feature-icon">
                                        <i class="icon-maintenance-1"></i>
                                    </div>
                                    <div class="why-choose-us-feature-brief">
                                        <h3>Servis CVT</h3>
                                        <p> Pastikan motor matic Anda selalu prima dengan Servis CVT rutin. Cek dan ganti V-Belt, roller, dan komponen lainnya untuk akselerasi yang halus dan performa maksimal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="why-choose-us-feature-item">
                                    <div class="why-choose-us-feature-icon">
                                        <i class="icon-car-parts-9"></i>
                                    </div>
                                    <div class="why-choose-us-feature-brief">
                                        <h3>Servis Injeksi</h3>
                                        <p>Jaga efisiensi dan performa motor injeksi Anda dengan Servis Injeksi berkala. Pembersihan dan penyetelan injektor memastikan pembakaran lebih sempurna dan hemat bahan bakar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-us-img-wrap">
                        <div class="why-choose-us-img-1 text-start">
                            <img src="/img/others/mechanic1.jpg" alt="Image">
                        </div>
                        <div class="why-choose-us-img-2 text-end">
                            <img src="/img/others/mechanic2.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WHY CHOOSE US AREA END -->

    <!-- PRICING PLAN AREA START -->
    <!-- <div class="ltn__pricing-plan-area pt-115 pb-120" id="liton_pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  Our Price</h6>
                        <h1 class="section-title">Pricing Plan<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-50">
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__pricing-plan-item text-center">
                        <h2 class="pricing-title">Car Wash</h2>
                        <div class="pricing-price">
                            <h2><sup>$</sup>49<sub>/M</sub></h2>
                        </div>
                        <ul>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                        </ul>
                        <div class="btn-wrapper">
                            <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__pricing-plan-item text-center active ---active-price">
                        <span class="pricing-badge">Most Popular</span>
                        <h2 class="pricing-title">Car Wash</h2>
                        <div class="pricing-price">
                            <h2><sup>$</sup>79<sub>/M</sub></h2>
                        </div>
                        <ul>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                        </ul>
                        <div class="btn-wrapper">
                            <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__pricing-plan-item text-center">
                        <h2 class="pricing-title">Car Wash</h2>
                        <div class="pricing-price">
                            <h2><sup>$</sup>99<sub>/M</sub></h2>
                        </div>
                        <ul>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Lorem, ipsum dolor</li>
                            <li>Lorem ipsum dolor sit</li>
                        </ul>
                        <div class="btn-wrapper">
                            <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- PRICING PLAN AREA END -->

    <!-- SERVICE AREA START (Service 1) -->
    <div class="ltn__service-area ltn__primary-bg before-bg-1 pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// Produk</h6>
                        <h1 class="section-title white-color">Produk Kami<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <img src="img/sukucadang.jpg" alt="#">
                        </div>
                        <div class="service-item-brief">
                            <h3>Suku Cadang</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <img src="img/baut.jpg" alt="#">
                        </div>
                        <div class="service-item-brief">
                            <h3>Baut</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <img src="img/ban.jpg" alt="#">
                        </div>
                        <div class="service-item-brief">
                            <h3>Ban</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE AREA END -->

    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <!-- <div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Cars</h6>
                        <h1 class="section-title">Car Best Deals</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-top-right text-uppercase">
                        <div class="nav">
                            <a class="active show" data-bs-toggle ="tab" href="#liton_tab_2_1">New Cars</a>
                            <a data-bs-toggle ="tab" href="#liton_tab_2_2" class="">Old Cars</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_2_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1"> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/1.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Mercedes A-Class</a></h2>
                                                <div class="product-price">
                                                    <span>$65,000</span>
                                                    <del>$68,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>90kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/2.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">BMW 4 Series</a></h2>
                                                <div class="product-price">
                                                    <span>$50,000</span>
                                                    <del>$62,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>95kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/3.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">Hot</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Tesla Model S</a></h2>
                                                <div class="product-price">
                                                    <span>$49,000</span>
                                                    <del>$55,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/4.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Toyota Corolla </a></h2>
                                                <div class="product-price">
                                                    <span>$43,000</span>
                                                    <del>$48,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>70kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/5.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Jaguar F-type </a></h2>
                                                <div class="product-price">
                                                    <span>$43,000</span>
                                                    <del>$48,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>70kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--  -->
                                <!-- </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_2_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1"> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/6.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Nissan Skyline</a></h2>
                                                <div class="product-price">
                                                    <span>$39,000</span>
                                                    <del>$42,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2019
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>75kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/7.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Hyundai Tucson</a></h2>
                                                <div class="product-price">
                                                    <span>$52,000</span>
                                                    <del>$55,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>82kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/8.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">Hot</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Ford Ranger</a></h2>
                                                <div class="product-price">
                                                    <span>$59,000</span>
                                                    <del>$62,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2017
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>92kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/9.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Volkswagen Polo</a></h2>
                                                <div class="product-price">
                                                    <span>$40,000</span>
                                                    <del>$43,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2018
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- ltn__product-item -->
                                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/10.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Honda Freed</a></h2>
                                                <div class="product-price">
                                                    <span>$40,000</span>
                                                    <del>$43,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2019
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--  -->
                                <!-- </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- PRODUCT TAB AREA END -->

    <!-- CALL TO ACTION START (call-to-action-2) -->
    <!-- <div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-2 text-center">
                        <h2>Get A Free Service Or Make A Call</h2>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-4 btn-white" href="contact"><i class="fas fa-phone-volume"></i> MAKE A CALL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- CALL TO ACTION END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <!-- <div class="ltn__feature-area pt-115 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 section-title-style-3">
                        <div class="section-brief-in">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                        <div class="section-title-in">
                            <h6 class="section-subtitle ltn__secondary-color">// Why Choose Us</h6>
                            <h1 class="section-title">Get Extra Benifits<span>.</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row  justify-content-center">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="service_details">Body Color</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consect
                                        icing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-exterior"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="service_details">Glass Change</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consect
                                        icing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-6"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="service_details">Air Condition Repair</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consect
                                        icing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-banner-img text-center mb-30">
                        <img src="img/others/2.png" alt="#">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row  justify-content-center">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-7"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="service_details">Tires Repair</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consect
                                        icing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-8"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="service_details">Pure Diagnostic</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consect
                                        icing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-3"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="service_details">Engine Lock</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consect
                                        icing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- FEATURE AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-2) -->
    <div class="ltn__img-slider-area ltn__img-slider-2 section-bg-1 pt-0 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  Galeri</h6>
                        <h1 class="section-title">Kita telah lakukan<span>.</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ltn__image-slider-2-active slick-arrow-1 slick-arrow-1-inner">
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-2">
                        <a href="img/injeksi.jpg" data-rel="lightcase:myCollection">
                            <img src="img/injeksi.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-2">
                        <a href="img/IMG_1221.jpg" data-rel="lightcase:myCollection">
                            <img src="img/IMG_1221.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-2">
                        <a href="img/IMG_1253.jpg" data-rel="lightcase:myCollection">
                            <img src="img/IMG_1253.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-2">
                        <a href="img/IMG_1234.jpg" data-rel="lightcase:myCollection">
                            <img src="img/IMG_1234.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-2">
                        <a href="img/IMG_1223.jpg" data-rel="lightcase:myCollection">
                            <img src="img/IMG_1233.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-2">
                        <a href="img/IMG_1229.jpg" data-rel="lightcase:myCollection">
                            <img src="img/IMG_1229.jpg" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- CALL TO ACTION START ( Service Form ) -->
    <!-- <div class="ltn__service-form-wrap-area">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-11 offset-xl-1">
                    <div class="ltn__service-form-area ltn__service-form-1 ltn__service-form-margin bg-image bg-overlay-theme-black-60 pt-115 pb-95" data-bs-bg="img/bg/2.jpg">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 align-self-center">
                                <div class="ltn__service-form-brief">
                                    <div class="section-title-area ltn__section-title-2 mb-0">
                                        <h6 class="section-subtitle white-color">// Call To Action</h6>
                                        <h1 class="section-title white-color">Get An Free Service
                                            From Us.</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12 align-self-center">
                                <div class="ltn__service-form-wrap ltn__service-form-color-white">
                                    <form action="#" class="ltn__service-form-box">
                                        <ul>
                                            <li>
                                                <select class="nice-select">
                                                    <option>Service Name</option>
                                                    <option>Car Repair </option>
                                                    <option>Engine Repairing </option>
                                                    <option>Oil Change</option>
                                                    <option>Car Wash</option>
                                                </select>
                                            </li>
                                            <li>
                                                <div class="input-item input-item-date mb-0 ltn__custom-icon">
                                                    <input type="text" name="date" placeholder="DATE">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="btn-wrapper">
                                                    <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Check Availability</button>
                                                </div>
                                            </li>
                                        </ul>                            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- CALL TO ACTION END -->

    <!-- TESTIMONIAL AREA START -->
    <div class="ltn__testimonial-area ltn__testimonial-4 pt-115 pb-100 plr--9">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  Testimoni</h6>
                        <h1 class="section-title">Tanggapan Klien<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjV6fcXYXF4Bn3px_JhizemSQ-4ASyXbJmDpPeCi6uTtLHOUlci8VA=w90-h90-p-rp-mo-br100" alt="quote">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>pelayanannya bagus, disaranin juga sparepart yang enak dipake buat motor kita. pelayanan oke gercep, harga ramah di kantong sukses selalu pokoknya</p>
                                <h4>Andhika Eka Baskar</h4>
                                <h6>Konsumen</h6>
                            </div>
                        </div>
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjVeTWjLmym0tNwfWatfTswYHZgWYFaa3kSpUCt_zSgQkbp8X5oyrQ=w90-h90-p-rp-mo-ba2-br100" alt="quote">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>Sering lewat bengkel ini, tapi baru coba. Perbaiki motor gak bisa starter, ganti oli, cas aki. Semua lancar, & pelayanan ramah. Akan balik lagi dan rekomendasi ke teman jika dibutuhkan. </p>
                                <h4>Eka Kuswandi</h4>
                                <h6>Konsumen</h6>
                            </div>
                        </div>
                        
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjUbMzxnCarnUym5FG16Wa1HGCivabxjSSUiTWudjwnJKXM7lMg0=w90-h90-p-rp-mo-ba6-br100" alt="quote">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>Kalau ada yang mau beli ban, merapat disini...koleksi komplit. Oli komplit dan harga oli juga terjangkau</p>
                                <h4>Nana Setiawan</h4>
                                <h6>Konsumen</h6>
                            </div>
                        </div>

                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjWknSCuQ92qEqlU6ikeuPB3Oza83sCWmzaKcO8-I_maYEBRY5gk=w90-h90-p-rp-mo-br100" alt="quote">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>Barang tersedia lengkap harga terjangkau.. Bisa beli dlm partai besar dengan harga terjangkau.. Pelayanan ditempat tersedia.. Pelayanan ramah dan memuaskan.. </p>
                                <h4>Dede Komarudin</h4>
                                <h6>Konsumen</h6>
                            </div>  
                        </div>
                    </div>
                    <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                        <li><img src="https://lh3.googleusercontent.com/a-/ALV-UjV6fcXYXF4Bn3px_JhizemSQ-4ASyXbJmDpPeCi6uTtLHOUlci8VA=w90-h90-p-rp-mo-br100" alt="Quote image"></li>
                        <li><img src="https://lh3.googleusercontent.com/a-/ALV-UjVeTWjLmym0tNwfWatfTswYHZgWYFaa3kSpUCt_zSgQkbp8X5oyrQ=w90-h90-p-rp-mo-ba2-br100" alt="Quote image"></li>
                        <li><img src="https://lh3.googleusercontent.com/a-/ALV-UjUbMzxnCarnUym5FG16Wa1HGCivabxjSSUiTWudjwnJKXM7lMg0=w90-h90-p-rp-mo-ba6-br100" alt="Quote image"></li>
                        <li><img src="https://lh3.googleusercontent.com/a-/ALV-UjWknSCuQ92qEqlU6ikeuPB3Oza83sCWmzaKcO8-I_maYEBRY5gk=w90-h90-p-rp-mo-br100" alt="Quote image"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    <div class="ltn__blog-area bg-image-top pt-115 " data-bs-bg="img/bg/3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle white-color">// blog & wawasan</h6>
                        <h1 class="section-title white-color">Umpan berita.</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-3 ltn__blog-3-arrow">
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="1"><img src="img/blog/21.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="blog1"><i class="far fa-user"></i>Oleh detikOto</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="blog1"><i class="fas fa-tags"></i>Servis</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog1">4 Bagian Motor yang Harus Dicek Sebelum Dibawa ke Bengkel</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>14 Agustus 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog1">Lanjut baca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog2"><img src="img/blog/22.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="blog2"><i class="far fa-user"></i>Oleh Suzuki Indonesia</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="blog2"><i class="fas fa-tags"></i>Servis</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog2">Tips Perawatan Sepeda Motor yang Wajib Anda Lakukan  </a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Juli 23, 2022</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog2">Lanjut baca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog3"><img src="img/blog/23.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="blog3"><i class="far fa-user"></i>Oleh Wahana Honda</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="blog3"><i class="fas fa-tags"></i>Servis</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog3">6 Hal Yang Harus Diperhatikan Saat Servis Motor</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Juli 7, 2018</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog3">Lanjut baca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog4"><img src="img/blog/24.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="blog4"><i class="far fa-user"></i>Oleh AstraOtoshop</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="blog4"><i class="fas fa-tags"></i>Servis</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog4">11 Tips Agar Motor Awet Luar Dalam Paling Jitu, Ini Caranya!</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Juni 4, 2024</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog4">Lanjut baca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog5"><img src="img/blog/25.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="blog5"><i class="far fa-user"></i>Oleh detikOto</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="blog5"><i class="fas fa-tags"></i>Servis</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog5">Seberapa Rutin sebuah Motor Harus Diservis ke Bengkel</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Oktober 30, 2018</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog5">Lanjut baca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 pt-80 pb-110 plr--9">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/4.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/6.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/7.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/8.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->
    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        <div class="footer-top-area  section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="img/IMG_1293.jpg">
                            <h6 class="ltn__secondary-color text-uppercase">// jadwal dan waktu</h6>
                            <h4 class="footer-title">Buka di waktu.</h4>
                            <ul>
                                <li>Setiap hari <span>07:00AM - 20:00PM</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Servis.</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service">Servis CVT</a></li>
                                    <li><a href="service">Servis Injeksi</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service">Servsi Carbu</a></li>
                                    <li><a href="service">Servis Throttle Body</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">Umpan berita.</h4>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> Juni 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details">Cabang biologi itu
                                berurusan dengan hal yang biasa.</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> Juni 28, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details">Perawatan, Servis & Perbaikan Mobil Listrik</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="/"><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6>Hak Cipta & Desain Oleh</h6>
                                    <h4>Segitiga - Motor <span class="current-year"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#" title="Shop"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="https://www.instagram.com/segitigamotorbgr_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.tiktok.com/@segitigamotor_bengkel?_t=8pvZaNNw0S0&_r=1" title="TikTok"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="mailto:Segitigamotor024@gmail.com" title="Email"><i class="fas fa-envelope"></i></a></li>
                                <li><a href="tel:+6285174296682" title="Telephone"><i class="fas fa-phone"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="/js/main.js"></script>
  
</body>
</html>