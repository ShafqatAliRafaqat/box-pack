@extends('website.layouts.layout')
@section('title', 'Pack Printers :: Contact Us')
@section('main_content')
            <section class="boxesByIndustry">
                <header class="commonHeader mb-5">
                    <h1 class="text-capitalize">CONTACT US</h1>
                    <p>
                        all custom boxes you need for your product
                    </p>
                </header>

                <div class="contactUs pt-0 pt-lg-4">
                    <div class="container">
                    @include('adminpanel.notification')
                        <!-- Contact Us -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Contact Item -->
                                        <div class="contact-item">
                                            <p>
                                                Phone: <a href="tel:+13245678">+1-123-4567</a>
                                            </p>
                                        </div>
                                        <!-- Contact Item -->
                                        <div class="contact-item">
                                            <p>
                                                Address: <a>Street: 123 Heavens Edge</a>
                                            </p>
                                        </div>
                                        <!-- Contact Item -->
                                        <div class="contact-item">
                                            <p>
                                                City: <a>L.A</a>
                                            </p>
                                        </div>
                                        <!-- Contact Item -->
                                        <div class="contact-item">
                                            <p>
                                                State/Province: <a>L.A</a>
                                            </p>
                                        </div>
                                        <!-- Contact Item -->
                                        <div class="contact-item">
                                            <p>
                                                Zip/Postal Code: <a>32000</a>
                                            </p>
                                        </div>
                                        <!-- Contact Item -->
                                        <div class="contact-item">
                                            <p>
                                                Country: <a>USA</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-lg-between">
                                        <!-- Contact Item -->
                                        <div class="contact-item text-left text-md-right">
                                            <p>
                                                Email: <a href="mailto:info@printinghead.com">info@printinghead.com</a>
                                            </p>
                                        </div>
                                        <!-- Social Icons -->
                                        <div class="icons-wrap">
                                            <!-- Social Icon -->
                                            <a class="social-icon" href="https://www.facebook.com">
                                                <img src="website/assets/images/icons/facebook-logo.png" alt="facebook-link">
                                            </a>
                                            <!-- Social Icon -->
                                            <a class="social-icon" href="https://www.twitter.com">
                                                <img src="website/assets/images/icons/twitter-logo.png" alt="twitter-link">
                                            </a>
                                            <!-- Social Icon -->
                                            <a class="social-icon" href="https://www.instagram.com">
                                                <img src="website/assets/images/icons/instagram-logo.png" alt="instagram-link">
                                            </a>
                                            <!-- Social Icon -->
                                            <a class="social-icon" href="https://www.behance.com">
                                                <img src="website/assets/images/icons/behance-sm.png" alt="behnace-link">
                                            </a>
                                            <!-- Social Icon -->
                                            <a class="social-icon" href="https://www.pinterest.com">
                                                <img src="website/assets/images/icons/pinterest-sm.png" alt="pinterest-link">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <iframe class="mt-2"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.4343709846903!2d-74.1639307335782!3d40.62030168967103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24c5303de1fbb%3A0x2e3f6fcd54e29024!2s22%20Elson%20Ct%2C%20Staten%20Island%2C%20NY%2010314!5e0!3m2!1sen!2sus!4v1582974613734!5m2!1sen!2sus"
                                    width="100%" height="150" frameborder="0" style="border:0;"
                                    allowfullscreen="false"></iframe>
                            </div>
                            <div class="col-lg-6">
                                <form method="post" id="customer-form" action="{{ route('contact_us_form') }}" enctype="multipart/form-data">
                                @csrf
                                    <!-- Contact Form Item -->
                                    <div class="input-wrap mt-3 mt-lg-0">
                                        <h5>
                                            Name*
                                        </h5>
                                        <input type="text" class="form-control" name="name" placeholder="Name *" required>
                                    </div>
                                    <!-- Contact Form Item -->
                                    <div class="input-wrap">
                                        <h5>
                                            Mail*
                                        </h5>
                                        <input type="email" class="form-control" name="email" placeholder="Email *" required>
                                    </div>
                                    <!-- Contact Form Item -->
                                    <div class="input-wrap">
                                        <h5>
                                            Phone*
                                        </h5>
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number *" required>
                                    </div>
                                    <!-- Contact Form Item -->
                                    <div class="input-wrap">
                                        <h5>
                                            Additional Comments:
                                        </h5>
                                        <textarea id="my-textarea" name="comment" class="form-control" rows="3"
                                            placeholder="Your message goes here"></textarea>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="text-center text-md-left mt-3">
                                        <button type="submit" class="mb-5 mb-md-0">
                                            send email
                                        </button>
                                    </div>
                                </form>
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

@endsection