@extends('website.layouts.layout')
@section('title', 'Pack Printers :: Quote')
@section('main_content')
            <section class="boxesByIndustry">
                <header class="commonHeader mb-5">
                    <h1 class="text-capitalize">Beat My Quote</h1>
                    <p>
                        all custom boxes you need for your product
                    </p>
                </header>                
                    <div class="quoteForm">
                        <div class="container">
                        @include('adminpanel.notification')
                            <!-- Beat My Quote Row -->
                            <form method="post" id="customer-form" action="{{ route('store_quote') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                your name *
                                            </h5>
                                            <input type="text" class="form-control" name="name" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                your email *
                                            </h5>
                                            <input type="email" class="form-control" name ="email" placeholder="Your Email *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                your phone *
                                            </h5>
                                            <input type="tel" class="form-control" name="phone" placeholder="Your Phone *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                company name *
                                            </h5>
                                            <input type="text" class="form-control" name="company_name" placeholder="Company Name *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                Select Box Type:
                                            </h5>
                                            <select id="my-select" class="form-control" name="box_type">
                                                <option value="">Select Catagory Type</option>
                                                <option value="Box by Industry">Box by Industry</option>
                                                <option value="Box by Style">Box by Style</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                Size:
                                            </h5>
                                            <input type="text" class="form-control" name="width" placeholder="Width *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                Size:
                                            </h5>
                                            <input type="text" class="form-control" name="height" placeholder="Height *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-3">
                                        <div class="input-wrap">
                                            <h5>
                                                Size:
                                            </h5>
                                            <input type="text" class="form-control" name="length" placeholder="Length *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-6">
                                        <div class="input-wrap">
                                            <h5>
                                                Unit
                                            </h5>
                                            <select id="" class="form-control" name="unit">
                                                <option value="CM">CM</option>
                                                <option value="MM">MM</option>
                                                <option value="INCHES">INCHES</option>
                                                <option value="FEET">FEET</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-6">
                                        <div class="input-wrap">
                                            <h5>
                                                Color Option
                                            </h5>
                                            <select id="" class="form-control" name="color" >
                                                <option value="None">None</option>
                                                <option value="1 Color">1 Color</option>
                                                <option value="2 Color">2 Color</option>
                                                <option value="3 Color">3 Color</option>
                                                <option value="4 Color">4 Color</option>
                                                <option value="4/1 Color">4/1 Color</option>
                                                <option value="4/2 Color">4/2 Color</option>
                                                <option value="4/3 Color">4/3 Color</option>
                                                <option value="4/4 Color">4/4 Color</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-4">
                                        <div class="input-wrap">
                                            <h5>
                                                Quantity:
                                            </h5>
                                            <input type="text" class="form-control" name="quantity" placeholder="Qty1 *" required>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-4">
                                        <div class="input-wrap">
                                            <h5> &nbsp;
                                            </h5>
                                            <input type="text" class="form-control" name="quantity1" placeholder="Qty2">
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-4">
                                        <div class="input-wrap">
                                            <h5> &nbsp;
                                            </h5>
                                            <input type="text" class="form-control" name="quantity2" placeholder="Qty3">
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-6">
                                        <div class="input-wrap">
                                            <h5>
                                                Additional Comments:
                                            </h5>
                                            <textarea id="my-textarea" class="form-control" name="comment" rows="3"
                                                placeholder="Let us know what you need! Box dimensions, number of boxes you need, design – we can help."></textarea>
                                        </div>
                                    </div>
                                    <!-- Quote Form Item -->
                                    <div class="col-md-6">
                                        <div class="input-wrap">
                                            <h5>
                                                Attach File:
                                            </h5>
                                            <input type="file" name="file" id="file">
                                            <label for="file" style="font-size: 14px;">Maximum file size 12 MB.(jpg, png,
                                                gif, doc, docx, xls, xlsx,
                                                pdf, ai, cdr)</label>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="col-md-2 text-center text-md-left">
                                        <button type="submit" class="mb-5 mb-md-0">
                                            send
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                                            <img src="website/assets/images/icons/secure-payment-1.png">
                                            <h5>secure payment</h5>
                                            <p>visa, masterCard, PayPal etc</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            <img src="website/assets/images/icons/shiping-1.png" style="width: 80px;">
                                            <h5>world wide shipping</h5>
                                            <p>6-8 business days</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-md-3 mb-5 mb-md-0">
                                        <div class="benifit-item">
                                            <img src="website/assets/images/icons/design-support-1.png" style="width: 61px;">
                                            <h5>free design support</h5>
                                            <p>with 2D and 3D mockup</p>
                                        </div>
                                    </div>
                                    <!-- Benifit Item -->
                                    <div class="col-md-3">
                                        <div class="benifit-item">
                                            <img src="website/assets/images/icons/customize-1.png" style="width: 58px;">
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
                                    <img class="img-fluid" src="website/assets/images/homepage/print-img-1.png"
                                        alt="print image">
                                    <img class="img-fluid mt-2" src="website/assets/images/homepage/print-img-2.png"
                                        alt="print image">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="website/assets/images/homepage/print-img-3.png"
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
                        <img src="website/assets/images/icons/arrow.png" alt="arrow">
                    </div>
                    <div class="slide-area">
                        <div class="owlOne owl-carousel owl-theme">
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="website/assets/images/Common/CBD-Box-With-Bottle.jpg" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="website/assets/images/Common/Chinese-product-Tuck-End-Box.jpg"
                                    alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="website/assets/images/Common/Corrugated-Kraft-Boxes.jpg" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="website/assets/images/Common/Mix_Tuck_End_Boxes.jpg" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="website/assets/images/Common/Sleeve-Chocolate-Box.jpg" alt="Slider Image">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="item">
                                <img class="" src="website/assets/images/Common/Tuck-Box.jpg" alt="Slider Image">
                            </a>
                        </div>
                    </div>
                    <div class="right-slider-btn">
                        <img src="website/assets/images/icons/arrow.png" alt="arrow">
                    </div>
                </div>
            </div>
@endsection
@section('scripts')
        <!-- JavaScript Files -->
        <script src="website/assets/js/vendor/1-jquery-3.4.0.min.js"></script>
        <script src="website/assets/js/vendor/2-bootstrap.min.js"></script>
        <script src="website/assets/js/vendor/3-popper.min.js"></script>
        <script src="website/assets/js/vendor/4-simplebar.min.js"></script>
        <script src="website/assets/js/scripts.min.js"></script>
@endsection

