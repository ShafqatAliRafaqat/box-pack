@extends('website.layouts.layout')
@section('title', 'Pack Printers :: Blog')
@section('main_content')
            <!-- Main Content Section -->
            <section class="blogDetail">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- Blog Detail HEADER area with Main Banner -->
                            <header>
                                <h1>
                                    {{$blog->title}}
                                </h1>
                                <figure class="figure w-100">
                                    <?php $blog_image = BlogMainImage($blog->id);?>
                                    <img class="figure-img img-fluid w-100"
                                        src="{{ asset('uploads/blogs/'. $blog_image->picture) }}" alt="{{$blog->title}}">
                                </figure>
                            </header>
                            <!-- Blog Detail -->
                            <div class="blog-text">
                                <p>
                                    <?php echo  $blog->description ;?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Benifits -->
            <div class="benifits-banner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="benifits-wrap">
                                <div class="row justify-content-around no-gutters">
                                    <!-- Benifit Item -->
                                    <div class="col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            <img src="{{asset('website/assets/images/icons/secure-payment-1.png')}}">
                                            <h5>secure payment</h5>
                                            <p>visa, masterCard, PayPal etc</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            <img src="{{asset('website/assets/images/icons/shiping-1.png')}}" style="width: 80px;">
                                            <h5>world wide shipping</h5>
                                            <p>6-8 business days</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            <img src="{{asset('website/assets/images/icons/design-support-1.png')}}" style="width: 61px;">
                                            <h5>free design support</h5>
                                            <p>with 2D and 3D mockup</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-md-3">
                                        <div class="benifit-item">
                                            <img src="{{asset('website/assets/images/icons/customize-1.png')}}" style="width: 58px;">
                                            <h5>custom size & design</h5>
                                            <p>premium custom boxes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Printing Quality Section -->
            <section class="printing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 d-flex flex-column justify-content-center">
                            <h1>
                                Looking for something out of the box?
                            </h1>
                            <p>
                                We have an excellent quality of
                                personalized Custom Boxes with
                                digital and Off-Set printing services.
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="{{asset('website/assets/images/homepage/print-img-1.png')}}"
                                        alt="print image">
                                    <img class="img-fluid mt-2" src="{{asset('website/assets/images/homepage/print-img-2.png')}}"
                                        alt="print image">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="{{asset('website/assets/images/homepage/print-img-3.png')}}"
                                        alt="print image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Details Section -->
            <section class="details" style="margin-top: 100px">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="detail-area" data-simplebar data-simplebar-auto-hide="true"
                                style="height: 320px">
                                <!-- Details Articel Item -->
                                <article>
                                    <h3 class="text-center text-capitalize" style="font-size: 28px;">
                                        why we are best
                                    </h3>
                                    <p>
                                        Packprinters.com brings perfection in your customized boxes. We can do transformation in any size, color, text/font, layout, structure, dimension, cuts that fits for your products. Moreover, the structure of custom boxes can be modified totally according to your demand. Packprinters.com gives customers a privilege to choose custom window cut out, gold/silver foiling, embossing/embellishing, raised ink and PVC sheet. The print (CMYK, PMS, No Printing) along with the covering (Gloss, Matte, Spot UV) can be made in an assortment of ways. Besides, the paper [10pt to 28pt (60lb to 400lb)] can be made with an assortment of top-notch quality oriented materials. Eco-friendly Kraft is by all accounts our most well-known choice of today’s customers. Hence, all kinds of customization options are available under a single platform packprinters.com.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Products Slider -->
            <div class="prods-slider">
                <div class="slider-wrap" data-aos="fade-left" data-aos-duration="1700">
                    <div class="left-slider-btn">
                        <img src="{{asset('website/assets/images/icons/arrow.png')}}" alt="arrow">
                    </div>
                    <div class="slide-area">
                        <div class="owlOne owl-carousel owl-theme">
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{asset('website/assets/images/Common/CBD-Box-With-Bottle.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{asset('website/assets/images/Common/Chinese-product-Tuck-End-Box.jpg')}}"
                                    alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{asset('website/assets/images/Common/Corrugated-Kraft-Boxes.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{asset('website/assets/images/Common/Mix_Tuck_End_Boxes.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{asset('website/assets/images/Common/Sleeve-Chocolate-Box.jpg')}}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{asset('website/assets/images/Common/Tuck-Box.jpg')}}" alt="Slider Image">
                            </a>
                        </div>
                    </div>
                    <div class="right-slider-btn">
                        <img src="{{asset('website/assets/images/icons/arrow.png')}}" alt="arrow">
                    </div>
                </div>
            </div>
@endsection
@section('scripts')

@endsection