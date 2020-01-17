<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pack Printers :: Custom Packaging Service</title>
        <link rel="shortcut icon" href="{{ asset('website/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('website/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/1-sanitize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/2-bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ asset('website/assets/css/styles.min.css') }}">
    </head>

    <body data-spy="scroll" data-target="#net-nav" data-offset="50">

        <!-- Main Page Header -->
        <header class="mainHeader">
            <!-- NavBar  -->
            <div id="top" class="headtop">
                <div class="container position-relative">
                    <div class="top-links mr-0 pr-0 mr-md-5 pr-md-4">
                        <a href="tel:+182345678">Call Us: <i>+18-23-4567-8</i></a>
                        <a href="mailto:info@packprinters.com">Email: <i>info@packprinters.com</i></a>
                    </div>
                    <!-- Social Icons -->
                    <div class="social-icons-wrap">
                        <span class="v-line"></span>
                        <a href="https://www.facebook.com" target="_blank" class="social-icon">
                        <img src="{{ asset('website/assets/images/icons/facebook.png')}}" alt="facebook">
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="social-icon">
                            <img src="{{ asset('website/assets/images/icons/instagram.png')}}" alt="instagram">
                        </a>
                        <a href="https://www.twitter.com" target="_blank" class="social-icon">
                            <img src="{{ asset('website/assets/images/icons/twitter.png')}}" alt="twitter">
                        </a>
                        <a href="https://www.pinterest.com" target="_blank" class="social-icon">
                            <img src="{{ asset('website/assets/images/icons/pinterest.png')}}" alt="pinterest">
                        </a>
                        <a href="https://www.behance.com" target="_blank" class="social-icon">
                            <img src="{{ asset('website/assets/images/icons/behance.png')}}" alt="behance">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Search Bar -->
            <div class="search-bar">
                <img src="{{ asset('website/assets/images/icons/magnifying-glass.png')}}" alt="search">
                <input type="text" placeholder="Search...">
                <span class="close-searchBar">x</span>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light" data-toggle="sticky-onscroll">
                <div class="container">
                    <a href="index.html" class="navbar-brand">
                        <!-- Logo Image Here -->
                        <img class="logo-img" src="{{ asset('website/assets/images/Common/pack-printers.logo.svg')}}" alt="packaging head">
                    </a>
                    <button class="navbar-toggler" data-target="#net-nav" data-toggle="collapse" aria-controls="net-nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="net-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto text-center text-md-left">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="boxByIndustry.html"
                                    onclick="window.location.href='boxByIndustry.html'" target="_blank"
                                    id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    box by industry
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="cbdcustompackaging.html">
                                        <img src="{{ asset('website/assets/images/navbar-images/cbd-packaging-boxes-60x60.png')}}" alt="">
                                        CBD Packaging Boxes
                                    </a>
                                    <a class="dropdown-item" href="customCosmeticBox.html">
                                        <img src="{{ asset('website/assets/images/Common/dd1-1.png')}}" alt="">
                                        custom cosmetic box
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd1-2.png')}}" alt="">
                                        custom display package
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd1-3.png')}}" alt="">
                                        custom eco friendly boxes
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd1-5.png')}}" alt="">
                                        custom gift boxes
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd1-7.png')}}" alt="">
                                        custom retail boxes
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd1-8.png')}}" alt="">
                                        custom retail packaging
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/navbar-images/Chinese-Food-Boxes-50x50.png')}}" alt="">
                                        food & beverages boxes
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="boxByStyle.html"
                                    onclick="window.location.href='boxByStyle.html'" target="_blank"
                                    id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    box by style
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="bottomClosure.html">
                                        <img src="{{ asset('website/assets/images/Common/dd2-1.png')}}" alt="">
                                        bottom closure
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd2-2.png')}}" alt="">
                                        CD Covers
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd2-3.png')}}" alt="">
                                        figure & pattern
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd2-4.png')}}" alt="">
                                        fold & assemble
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd2-5.png')}}" alt="">
                                        rectangular
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd2-6.png')}}" alt="">
                                        showcase exhibit
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/Common/dd2-7.png')}}" alt="">
                                        top closure
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="others.html"
                                    onclick="window.location.href='others.html'" target="_blank" id="navbarDropdown4"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Others
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                    <a class="dropdown-item" href="customStickers.html">
                                        <img src="{{ asset('website/assets/images/navbar-images/Die-Cut-Folders-50x50.png')}}" alt="">
                                        presentation folder
                                    </a>
                                    <a class="dropdown-item" href="customStickers.html">
                                        <img src="{{ asset('website/assets/images/navbar-images/stickers-and-lables-50x50.png')}}" alt="">
                                        custom stickers & lables
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/navbar-images/Cling-Decals-50x50.png')}}" alt="">
                                        decals
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/navbar-images/Magazine-Printing-50x50.png')}}" alt="">
                                        magazines
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('website/assets/images/navbar-images/bottle-neckers-50x50.png')}}" alt="">
                                        bottle necker
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        other
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-btn" href="/quote">
                                    <span>get free quote</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link search">
                                    <img src="{{ asset('website/assets/images/icons/magnifying-glass.png')}}" alt="search icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Area -->
        <main>
            <!-- Hero Area -->
            <section class="heroArea">
                <!-- <img class=" wave" src="{{ asset('website/')}}assets/images/homepage/wave.svg"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="hero-text text-center text-lg-left" data-aos="fade-right"
                                data-aos-duration="1500">
                                <h5>
                                    we are expert in
                                </h5>
                                <h1>
                                    custom packaging
                                </h1>
                                <p>
                                    Custom packaging can turn your brand into the total package with full
                                    customization, instant quoting, and fast turnarounds.
                                </p>
                                <a href="#" class="btn">
                                    Get Free Quote
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <img class="hero-img" src="{{ asset('website/assets/images/homepage/Main-Banner.png')}}" alt="hero-img">
                        </div>
                    </div>

                </div>
            </section>

            <!-- About Us & Products Section -->
            <div class="about-Us-Products">
                <!-- Pros Area -->
                <div class="ourPros">
                    <div class="container">
                        <h1 class="title" data-aos="fade-up" data-aos-duration="1000">
                            We've Got You Covered
                        </h1>
                        <div class="row justify-content-center justify-content-md-around">
                            <div class="col-md-2 p-0">
                                <div class="pro-item mx-auto" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="{{ asset('website/assets/images/icons/cancel.png')}}">
                                    <h4>
                                        No Die & Plate Charges
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-2 p-0">
                                <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1200">
                                    <img src="{{ asset('website/assets/images/icons/box.png')}}">
                                    <h4>
                                        starting from 100 boxes
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-2 p-0">
                                <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1400">
                                    <img src="{{ asset('website/assets/images/icons/calendar.png')}}">
                                    <h4>
                                        fast turnarounds 8-10 business days
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-2 p-0">
                                <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1600">
                                    <img src="{{ asset('website/assets/images/icons/ribbon.png')}}">
                                    <h4>
                                        high quality offset printing
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-2 p-0">
                                <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1800">
                                    <img src="{{ asset('website/assets/images/icons/wallet.png')}}">
                                    <h4>
                                        competitive <br>pricing
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Quality Banner -->
                <div class="quality-desc">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-8" data-aos="fade" data-aos-duration="2000">
                                <h1>
                                    We believe in <br>Quality deliverance
                                </h1>
                                <p>
                                    We have an excellent quality of personalized Custom Boxes
                                    with digital and Off-Set printing services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top 6 categories -->
                <div class="topCats">
                    <div class="products">
                        <div class="container">
                            <div class="row">
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-4">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1000" 5
                                        data-aos="zoom-in-up" data-aos-duration="1000">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img6.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            retail boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-4">
                                    <a href="customCosmeticBox.html" class="prod-item" data-aos="zoom-in-up"
                                        data-aos-duration="1200">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img5.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            eco friendly
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-4">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1400">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img8.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            cosmetic boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-4">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1600">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img10.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            CBD Packaging box
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-4">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="2000">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img4.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            food & beverages boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-4">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="2200">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img3.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            gift boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- View More Button -->
                                <div class="col-12 text-center">
                                    <a href="/categories" class="btn viewMore">View All Categories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Link -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="video-link-title text-center" data-aos="fade-right" data-aos-duration="1700">
                                <h1>
                                    Why 1,000s of Happy Customers Turn To Pack Printers
                                </h1>
                                <p>
                                    Watch to learn why thousands of brands nationwide choose Pack Printers for their
                                    custom packaging needs, from small startups to Fortune 500 brands alike.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" data-aos="fade-left" data-aos-duration="1700">
                        <div class="col-md-8">
                            <iframe width="100%" height="420" src="https://www.youtube.com/embed/Hhjj8ZYP80w"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <!--  Product Categoreis -->
                <section class="categories">
                    <!-- Section Header -->
                    <header data-aos="fade" data-aos-duration="1500">
                        <h1>
                            custom box category
                        </h1>
                    </header>

                    <!-- Products -->
                    <div class="products">
                        <div class="container">
                            <div class="row">
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img1.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom display <br>
                                            packaging
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="customCosmeticBox.html" class="prod-item" data-aos="zoom-in-up"
                                        data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img2.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom cosmetic <br>
                                            boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img3.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom gift <br>
                                            boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img4.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            eco-friendly <br>
                                            boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img5.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom retail <br>
                                            packaging
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img6.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom presentation <br>
                                            folders
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img7.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom retail <br>
                                            boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img8.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            cosmetic <br>
                                            boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img9.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom oil <br>
                                            packaging
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img10.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom CBD <br>
                                            boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img2.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            custom hanger <br>
                                            boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- Single Product Item -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="prod-item" data-aos="zoom-in-up" data-aos-duration="1500">
                                        <div class="img-wrap">
                                            <img src="{{ asset('website/assets/images/homepage/cosmetic-img6.png')}}" alt="product image">
                                        </div>
                                        <h4>
                                            eco retail <br>boxes
                                        </h4>
                                    </a>
                                </div>
                                <!-- View More Button -->
                                <div class="col-12 text-center">
                                    <a href="/categories" class="btn viewMore">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <!-- Our Services Section -->
            <section class="ourServices">
                <h2 data-aos="fade" data-aos-duration="1500">
                    our free services
                </h2>
                <!-- Services Icons -->
                <div class="serviceIcons">
                    <div class="container">
                        <div class="row justify-content-center no-gutters">
                            <div class="col-md-3 p-0">
                                <div class="serv-item mx-auto" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="{{ asset('website/assets/images/icons/policy.png')}}">
                                </div>
                                <h4>
                                    free design support
                                </h4>
                            </div>
                            <div class="col-md-3 p-0">
                                <div class="serv-item mx-auto" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="{{ asset('website/assets/images/icons/sketch.png')}}">
                                </div>
                                <h4>
                                    free custom box dieline
                                </h4>
                            </div>
                            <div class="col-md-3 p-0">
                                <div class="serv-item mx-auto" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="{{ asset('website/assets/images/icons/shipping.png')}}">
                                </div>
                                <h4>
                                    free shipping
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Printing Quality Section -->
            <section class="printing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 d-flex flex-column justify-content-center text-center text-lg-left"
                            data-aos="fade-right" data-aos-duration="1500">
                            <h1>
                                high quality premium printing
                            </h1>
                            <p>
                                We have an excellent quality of
                                personalized Custom Boxes with
                                digital and Off-Set printing services.
                            </p>
                        </div>
                        <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500">
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('website/assets/images/homepage/print-img-1.png')}} "
                                        alt="print image">
                                    <img class="img-fluid mt-2" src="{{ asset('website/assets/images/homepage/print-img-2.png')}}"
                                        alt="print image">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('website/assets/images/homepage/print-img-3.png')}}"
                                        alt="print image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How It Works -->
            <section class="works">
                <header data-aos="fade" data-aos-duration="1500">
                    <h1>
                        how it works?
                    </h1>
                    <p>
                        simple
                    </p>
                </header>
                <div class="steps">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-md-3" data-aos="fade-up" data-aos-duration="1500">
                                <h1>1</h1>
                                <p>share your box idea</p>
                            </div>
                            <div class="col-md-3" data-aos="fade-up" data-aos-duration="1700">
                                <h1>2</h1>
                                <p>quotation & artwork approval</p>
                            </div>
                            <div class="col-md-3" data-aos="fade-up" data-aos-duration="1900">
                                <h1>3</h1>
                                <p>box construction & shipment</p>
                            </div>
                            <!-- Free Quote Button -->
                            <div class="col-12 text-center">
                                <a href="/quote" class="btn viewMore">Get a free quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Details Section -->
            <section class="details">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="detail-area" data-simplebar data-simplebar-auto-hide="false">
                                <!-- Details Articel Item -->
                                <article>
                                    <h3>
                                        pack custom boxes
                                    </h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining
                                        essentially unchanged. It was popularised in the 1960s with the release of
                                        Letraset
                                        sheets
                                        containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software
                                        like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </article>
                                <!-- Details Articel Item -->
                                <article>
                                    <h3>
                                        why pack boxes
                                    </h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining
                                        essentially unchanged. It was popularised in the 1960s with the release of
                                        Letraset
                                        sheets.

                                    </p>
                                </article>
                                <!-- Details Articel Item -->
                                <article>
                                    <h3>
                                        instant delivery system
                                    </h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </article>
                                <!-- Details Articel Item -->
                                <article>
                                    <h3>
                                        efficient customer care
                                    </h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial Slider -->
            <section class="testmonials">
                <div class="container">
                    <div class="row justify-content-center">
                        <header data-aos="fade" data-aos-duration="1500">
                            <h1>
                                WHAT OUR <br>CUSTOMERS SAY
                            </h1>
                            <p>
                                simple
                            </p>
                        </header>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme" id="testimonials-slider" data-aos="slide-up"
                                data-aos-duration="1500">
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                    </div>
                                    <div class="img-wrap">
                                        <img src="{{ asset('website/assets/images/homepage/test-img1.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Chris Angel
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                    </div>
                                    <div class="img-wrap">
                                        <img src="{{ asset('website/assets/images/homepage/test-img2.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Sofia Decker
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                    </div>
                                    <div class="img-wrap">
                                        <img src="{{ asset('website/assets/images/homepage/test-img3.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Leyla
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="dots" src="{{ asset('website/assets/images/homepage/dots.png')}}" alt="dots">
            </section>

            <!-- Pretty Packing Section -->
            <section class="packaging">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1700">
                            <img class="img-fluid" src="{{ asset('website/assets/images/homepage/morethen-img.png')}}" alt="Pretty Packaging">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-left"
                            data-aos-duration="1700">
                            <h1>
                                more than just a pretty box packaging
                            </h1>
                            <p>
                                Every custom box we create is made just for
                                you. You can customize every inch of your
                                box design inside and out, while our state of
                                the art printing ensures you'll love the
                                quality of your finished packaging boxes.
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Products Slider -->
            <div class="prods-slider">
                <div class="slider-wrap" data-aos="fade-left" data-aos-duration="1700">
                    <div class="left-slider-btn">
                        <img src="{{ asset('website/assets/images/icons/arrow.png')}}" alt="arrow">
                    </div>
                    <div class="slide-area">
                        <div class="owlOne owl-carousel owl-theme">
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/CBD-Box-With-Bottle.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Chinese-product-Tuck-End-Box.jpg')}}"
                                    alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Corrugated-Kraft-Boxes.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Mix_Tuck_End_Boxes.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Sleeve-Chocolate-Box.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Tuck-Box.jpg')}}" alt="Slider Image">
                            </a>
                        </div>
                    </div>
                    <div class="right-slider-btn">
                        <img src="{{ asset('website/assets/images/icons/arrow.png')}}" alt="arrow">
                    </div>
                </div>
            </div>

        </main>

        <!-- Footer -->
        <footer>
            <div class="container pb-5" data-aos="fade-up" data-aos-duration="1500">
                <!-- Clients Slider -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="clients-slider">
                            <h4>
                                TRUSTED BY THE WORLD'S TOP BRANDS
                            </h4>
                            <div class="clients owl-carousel owl-theme" data-aos="flip-up" data-aos-duration="2000">
                                <div class="item">
                                    <img class="" src="{{ asset('website/assets/images/Common/marriot.svg')}}" alt="Client Logo">
                                </div>
                                <div class="item">
                                    <img class="" src="{{ asset('website/assets/images/Common/metlife.svg')}}" alt="Client Logo">
                                </div>
                                <div class="item">
                                    <img class="" src="{{ asset('website/assets/images/Common/old_spice.svg')}}" alt="Client Logo">
                                </div>
                                <div class="item">
                                    <img class="" src="{{ asset('website/assets/images/Common/pandora.svg')}}" alt="Client Logo">
                                </div>
                                <div class="item">
                                    <img class="" src="{{ asset('website/assets/images/Common/ticketmaster.svg')}}" alt="Client Logo">
                                </div>
                                <div class="item">
                                    <img class="" src="{{ asset('website/assets/images/Common/adidas.svg')}}" alt="Client Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between" data-aos="slide-up" data-aos-duration="1700">
                    <div class="col-lg-3">
                        <a class="foot-img" href="#">
                            <img src="{{ asset('website/assets/images/Common/pack-printers.logo.svg')}}" alt="footer Logo">
                        </a>
                        <p>
                            Every custom box we create is made just for
                            you. You can customize every inch of your
                            box design inside and out, while our state of
                            the art printing ensures you'll love the
                            quality of your finished packaging boxes.
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <div class="links text-capitalize">
                            <h5>
                                box by industry
                            </h5>
                            <a href="cbdboxes.html" target="_blank">CBD Packaging Boxes</a>
                            <a href="customCosmeticBox.html" target="_blank">Custom Cosmetic Box</a>
                            <a href="customCosmeticBox.html" target="_blank">Custom display packaging</a>
                            <a href="customCosmeticBox.html" target="_blank">food and beverages boxes</a>
                            <a href="customCosmeticBox.html" target="_blank">Custom retail packaging</a>
                            <a href="customCosmeticBox.html" target="_blank">Custom eco friendly boxes</a>
                            <a href="customCosmeticBox.html" target="_blank">Custom retail Box</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="links">
                            <h5>
                                quick links
                            </h5>
                            <a href="contactUs.html" target="_blank">Contact Us</a>
                            <a href="aboutUs.html" target="_blank">About Us</a>
                            <a href="termsOfUse.html" target="_blank">Terms of Use</a>
                            <a href="privatePolicy.html" target="_blank">Private policy</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="links">
                            <h5>
                                contact
                            </h5>
                            <a href="http://www.googlemaps.com" target="_blank">Street: 114 spartan ave, staten <br>
                                island,
                                New Your, USA</a>
                            <a href="tel:18184767382" target="_blank">1-818-476-7382</a>
                            <a href="mailto:info@packprinters.com" target="_blank">info@packprinters.com</a>
                        </div>
                        <div class="social-icons">
                            - &nbsp;
                            <a href="httpe://www.facebook.com" target="_blank">
                                <img src="{{ asset('website/assets/images/icons/facebook.png')}}" alt="facebook"></a>
                            <a href="httpe://www.twitter.com" target="_blank">
                                <img src="{{ asset('website/assets/images/icons/twitter.png')}}" alt="twitter"></a>
                            <a href="httpe://www.instagram.com" target="_blank">
                                <img src="{{ asset('website/assets/images/icons/instagram.png')}}" alt="instagram"></a>
                            <a href="httpe://www.behance.com" target="_blank">
                                <img src="{{ asset('website/assets/images/icons/behance.png')}}" alt="behnace"></a>
                            <a href="httpe://www.pinterest.com" target="_blank">
                                <img src="{{ asset('website/assets/images/icons/pinterest.png')}}" alt="pinterest"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footbar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footwrap">
                                <img src="{{ asset('website/assets/images/Common/certificate.png')}}" alt="certificates bar">
                                <p>
                                    2019 Pack Printers. All Rights Reserved
                                </p>
                                <img src="{{ asset('website/assets/images/Common/payment-icons.png')}}" alt="payment bar">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

        <!-- JavaScript Files -->
        <script src="{{ asset('website/assets/js/vendor/1-jquery-3.4.0.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/2-bootstrap.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/3-popper.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/4-simplebar.min.js') }}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{ asset('website/assets/js/scripts.min.js') }}"></script>
        <script>
            AOS.init({
                disable: 'mobile'
            });

        </script>
    </body>

</html>
