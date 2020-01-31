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
                                        src="{{ asset('uploads/blogs/'. $blog_image->picture) }}" alt="">
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
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
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