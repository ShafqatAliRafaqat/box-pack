@extends('website.layouts.layout')
@section('title', 'Pack Printers :: Categories')
@section('main_content')
            <section class="boxesByIndustry">
                 <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <header class="commonHeader">
                    <h1>{{$title}}</h1>
                    <p>
                        all custom boxes you need for your product
                    </p>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="boxes-display">
                    <div class="container">
                    @include('adminpanel.notification')
                        <!-- Beat My Quote Row -->
                        <div class="row justify-content-end">
                            <div class="col-lg-3 px p-lg-0">
                                <a href="/quote" class="beatMyQuote">
                                    <h5>
                                        Beat my Quote
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-8">
                                <div class="row">
                                    <!-- Single Product Item -->
                                    @if(count($categories)>0)
                                        @foreach($categories as $data)
                                            <?php $slug = str_replace(' ', '-', $data->title);?>
                                            <div class="col-6 col-md-4">
                                                <a href="{{ route('category_detail',$slug) }}" class="prod-item">
                                                    <div class="img-wrap">
                                                        @if(isset($search))
                                                        <img src="{{ asset('uploads/products/'. $data->picture) }}" alt="{{$data->title}}">
                                                        @else
                                                       <img src="{{ asset('uploads/categories/'. $data->picture) }}" alt="{{$data->title}}">
                                                       @endif
                                                    </div>
                                                    <h4>
                                                        {{$data->title}}
                                                    </h4>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-3 p-0" id="quoteForm">
                                <div class="quote-form-wrap">
                                <form method="post" id="customer-form" action="{{ route('contact_us_form') }}" enctype="multipart/form-data">
                                @csrf
                                        <input type="text" name="name" placeholder="Name" required>
                                        <input type="email" name="email" placeholder="Email" required>
                                        <input type="tel" name="phone" placeholder="Phone" required>
                                        <div class="form-group">
                                            <select id="my-select" class="custom-select" name="box_type" required>
                                            <option value=""> Select Category </option>
                                            @foreach($categories as $data)
                                            <option value="{{$data->id}}"> {{$data->title}} </option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <textarea name="comment" rows="7"
                                            placeholder="Let us know what you need! Box Dimensions, Number of boxes you need, design - we will more than happy to help you"
                                            required></textarea>
                                        <button type="submit">submit</button>
                                    </form>
                                </div>
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
                                <div class="row justify-content-around no-gutters text-center">
                                    <!-- Benifit Item -->
                                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            <img src="{{ asset('website/assets/images/icons/secure-payment-1.png' ) }}">
                                            <h5>secure payment</h5>
                                            <p>visa, masterCard, PayPal etc</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            
                                            <img src="{{ asset('website/assets/images/icons/shiping-1.png' ) }}" style="width: 80px;">
                                            <h5>world wide shipping</h5>
                                            <p>6-8 business days</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            <img src="{{ asset('website/assets/images/icons/design-support-1.png' ) }}" style="width: 61px;">
                                            <h5>free design support</h5>
                                            <p>with 2D and 3D mockup</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-6 col-md-3">
                                        <div class="benifit-item">
                                            <img src="{{ asset('website/assets/images/icons/customize-1.png' ) }}" style="width: 58px;">
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
                                    <img class="img-fluid" src="{{ asset('website/assets/images/homepage/print-img-1.png' ) }}"
                                        alt="print image">
                                    <img class="img-fluid mt-2" src="{{ asset('website/assets/images/homepage/print-img-2.png' ) }} "
                                        alt="print image">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('website/assets/images/homepage/print-img-3.png' ) }} "
                                        alt="print image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Triangle Shapes -->
            <div class="triangle-Shapes-wrap">
                <div id="triangle" class="left-tri"></div>
                <div id="triangle" class="right-tri"></div id="triangle">
            </div>

            <!-- Detals Section -->
            <section class="details" style="margin-top: 30px">
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
                        <img src="{{ asset('website/assets/images/icons/arrow.png' ) }}" alt="arrow">
                    </div>
                    <div class="slide-area">
                        <div class="owlOne owl-carousel owl-theme">
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/CBD-Box-With-Bottle.jpg' ) }}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Chinese-product-Tuck-End-Box.jpg' ) }}"
                                    alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Corrugated-Kraft-Boxes.jpg' ) }}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Mix_Tuck_End_Boxes.jpg' ) }}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Sleeve-Chocolate-Box.jpg' ) }}" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="{{ asset('website/assets/images/Common/Tuck-Box.jpg' ) }}" alt="Slider Image">
                            </a>
                        </div>
                    </div>
                    <div class="right-slider-btn">
                        <img src="{{ asset('website/assets/images/icons/arrow.png' ) }}" alt="arrow">
                    </div>
                </div>
            </div>

        
@endsection
@section('scripts')

@endsection