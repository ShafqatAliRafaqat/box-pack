@extends('website.layouts.layout')
@section('title', 'Pack Printers :: Product detail')
@section('styles')
<link rel="stylesheet" href="{{asset('website/assets/css/vendor/imagepreviewer.min.css')}}">
<link rel="stylesheet" href="{{asset('website/assets/css/styles.min.css')}}">
@endsection
@section('main_content')
            <section class="boxesByIndustry">
                <header class="commonHeader">
                    <h1 class="text-capitalize">{{$product->title}} </h1>
                    <p>
                        all custom accessories you need for your product
                    </p>
                </header>

                <div class="boxes-display">
                    <div class="container">
                    @include('adminpanel.notification')
                        <!-- Beat My Quote Row -->
                        <div class="row justify-content-end">
                            <div class="col-lg-3 p-lg-0">
                                <a href="/quote" class="beatMyQuote">
                                    <h5>
                                        Beat my Quote
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-between">
                            <!-- Products Detail Area -->
                            <div class="col-lg-4">
                                <div class="imagePreviewer">
                                    <ul id="lightSlider">
                                        <?php $product_images = productAllImages($product->id)?>
                                        @if(count($product_images)>0)
                                            @foreach($product_images as $data)
                                            <li data-thumb="{{ asset('uploads/products/'. $data->picture) }}">
                                                <img src="{{ asset('uploads/products/'. $data->picture) }}" />
                                            </li>    
                                            @endforeach
                                        @endif
                                        
                                        <!-- <li data-thumb="{{asset('website/assets/images/customCreamBoxes/Cream-Packaging.jpg')}}">
                                            <img src=" {{asset('website/assets/images/customCreamBoxes/Cream-Packaging.jpg')}}" />
                                        </li>
                                        <li data-thumb="{{asset('website/assets/images/customCreamBoxes/Cream-Packaging.jpg')}}">
                                            <img src=" {{asset('website/assets/images/customCreamBoxes/Cream-Packaging.jpg')}}" />
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 text-justify">
                                <p class="product-description mt-3 mt-lg-0 pr-2" data-simplebar>
                                    <?php //echo strip_tags($product->description , '<strong>'); ?> 
                                    <?php $des =  str_replace('<p>', '<span>', $product->description);
                                            $des1 = str_replace('</p>', '</span>', $des);
                                            echo $des1;
                                    ?>
                                </p>
                            </div>
                            <div class="col-lg-3 p-lg-0" id="quoteForm">
                                <div class="quote-form-wrap">
                                    <form method="post" id="customer-form" action="{{ route('contact_us_form') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="name" placeholder="Name" required>
                                        <input type="email" name="email" placeholder="Email" required>
                                        <input type="tel" name="phone" placeholder="Phone" required>
                                        <div class="form-group">
                                            <select id="my-select" class="custom-select" name="box_type" required>
                                                <option value="">Select Product</option>
                                                @if(count($related_products))
                                                    @foreach($related_products as $data)
                                                        <option value="{{$data->id}}">{{$data->title}}</option>                                                    
                                                    @endforeach
                                                @endif
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

            <!-- Our Best of Services -->
            <div class="bestOfServices">
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- Best of Service Item -->
                        <div class="col-lg-2">
                            <div class="bos-item-wrap">
                                <img src="{{ asset('website/assets/images/icons/cancel.png' ) }}">
                                <h5>
                                    No Die & Plate Charges
                                </h5>
                            </div>
                        </div>
                        <!-- Best of Service Item -->
                        <div class="col-lg-2">
                            <div class="bos-item-wrap">
                                <img src="{{ asset('website/assets/images/icons/box.png' ) }}">
                                <h5>
                                    starting from 100 boxes
                                </h5>
                            </div>
                        </div>
                        <!-- Best of Service Item -->
                        <div class="col-lg-2">
                            <div class="bos-item-wrap">
                                <img src="{{ asset('website/assets/images/icons/calendar.png' ) }}">
                                <h5>
                                    fast turnarounds 8-10 business days
                                </h5>
                            </div>
                        </div>
                        <!-- Best of Service Item -->
                        <div class="col-lg-2">
                            <div class="bos-item-wrap">
                                <img src="{{ asset('website/assets/images/icons/ribbon.png' ) }}">
                                <h5>
                                    high quality offset printing
                                </h5>
                            </div>
                        </div>
                        <!-- Best of Service Item -->
                        <div class="col-lg-2">
                            <div class="bos-item-wrap">
                                <img src="{{ asset('website/assets/images/icons/wallet.png' ) }}">
                                <h5>
                                    competitive pricing
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Category Section -->
            <section class="relatedCategory">
                <header class="commonHeader">
                    <h1 class="text-capitalize" style="font-size: 45px; margin-top: 30px;">related Products</h1>
                    <p>
                        all custom boxes you need for your product
                    </p>
                </header>

                <div class="related-products">
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Single Product Item -->
                            @if(count($related_products))
                                @foreach($related_products as $data)
                                <?php $slug = str_replace(' ', '-', $data->title);?>
                                <?php $product_images = product_image($data->id); ?>
                                <div class="col-6 col-md-2">
                                    <a href="{{ route('product_detail',[$categorytype,$categorytitle,$slug, $data->id]) }}" class="prod-item">
                                        <div class="img-wrap">
                                            <img src="{{ asset('uploads/products/'. $product_images->picture) }}"
                                                alt="product image">
                                        </div>
                                        <h4>{{ $data->title }}</h4>
                                    </a>
                                </div>
                                @endforeach
                            @endif
                            <div class="col-12 text-center">
                                <a href="/quote" class="btn getQuote">get Free Quote</a>
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

            <!-- Detals Section -->
            <section class="detailsInTab" style="margin-top: 30px">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="tab">
                                <button class="tablinks active"
                                    onclick="openTab(event, 'description')">Description</button>
                                <button class="tablinks"
                                    onclick="openTab(event, 'specification')">Specification</button>
                            </div>
                            <div id="description" class="tabcontent description-style" style="display: block;">
                                <?php echo $product->long_description ;?>
                            </div>
                            <div id="specification" class="tabcontent">
                                <table>
                                    <tr>
                                        <td>dimensions</td>
                                        <td>All Custom Sizes & Shapes</td>
                                    </tr>
                                    <tr>
                                        <td>printing</td>
                                        <td>CMYK, PMS, No Printing</td>
                                    </tr>
                                    <tr>
                                        <td>card stock</td>
                                        <td>10pt to 28pt (60lb to 400lb) Eco-Friendly Kraft, E-flute Corrugated, Bux
                                            Board, Cardstock
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>quantities</td>
                                        <td>100 to as per you requirment</td>
                                    </tr>
                                    <tr>
                                        <td>coating</td>
                                        <td>Gloss, Matte, Spot UV</td>
                                    </tr>
                                    <tr>
                                        <td>default process</td>
                                        <td>Custom Window Cut Out, Gold/Silver Foiling, Embossing, Raised Ink, PVC
                                            Sheet.</td>
                                    </tr>
                                    <tr>
                                        <td>options</td>
                                        <td>Die Cutting, Gluing, Scoring, Perforation</td>
                                    </tr>
                                    <tr>
                                        <td>proof</td>
                                        <td>Flat View, 3D Mock-up, Physical Sampling (On request)</td>
                                    </tr>
                                    <tr>
                                        <td>turn around time</td>
                                        <td>4-6 Business Days , Rush</td>
                                    </tr>
                                </table>
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
        <!-- JavaScript Files -->
        <!--<script src="{{ asset('website/assets/js/vendor/1-jquery-3.4.0.min.js' ) }}"></script>-->
        <script src="{{ asset('website/assets/js/vendor/2-bootstrap.min.js' ) }}"></script>
        <script src="{{ asset('website/assets/js/vendor/3-popper.min.js' ) }}"></script>
        <script src="{{ asset('website/assets/js/vendor/4-simplebar.min.js' ) }}"></script>
        <script src="{{ asset('website/assets/js/vendor/imagepreviewer.min.js' ) }}"></script>
        <script src="{{ asset('website/assets/js/scripts.min.js' ) }}"></script>
        <script>
            //  Image Slider With Thumbnail Initialization
            $('#lightSlider').lightSlider({
                gallery: true, // Show Thumbnails Panel
                item: 1, // Items or Images in Main Display Are. (Suitable for Content Slider)
                loop: true, // Repeat Images
                slideMargin: 1, // Spaces Between Main Slides Images
                thumbItem: 4, // Number Of Thumbnails to show on THumbnail Panel
                speed: 800, // Image Change : Slider Speed in Miliseconds ms 
                auto: false, // Auto play Slideshow On
                pause: 5000 // Pause Between Each Slide Change
            });
            $('li>img')
                .wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom({
                    magnify: 0.5
                });
            // To use zoom with img elements, they will need to be wrapped with another element.

        </script>
@endsection

