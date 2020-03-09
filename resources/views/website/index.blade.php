@extends('website.layouts.layout')
@section('title', 'Pack Printers :: Custom Packaging Service')
@section('main_content')
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
                        <a href="/quote" class="btn">
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
                            <img class="lazyload" alt="No Die & Plate Charges" data-src="{{ asset('website/assets/images/icons/cancel.png')}}">
                            <h4>
                                No Die & Plate Charges
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-2 p-0">
                        <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1200">
                            <img class="lazyload" data-src="{{ asset('website/assets/images/icons/box.png')}}">
                            <h4>
                                starting from 100 boxes
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-2 p-0">
                        <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1400">
                            <img class="lazyload" data-src="{{ asset('website/assets/images/icons/calendar.png')}}">
                            <h4>
                                fast turnarounds 8-10 business days
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-2 p-0">
                        <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1600">
                            <img class="lazyload" data-src="{{ asset('website/assets/images/icons/ribbon.png')}}">
                            <h4>
                                high quality offset printing
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-2 p-0">
                        <div class="pro-item mx-auto mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1800">
                            <img class="lazyload" data-src="{{ asset('website/assets/images/icons/wallet.png')}}">
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
        <!-- Top 8 categories -->
        <div class="topCats">
            <div class="products">
                <div class="container">
                    <div class="row">
                        <?php $mainCategories = TopCategories(); ?>
                        @if(count($mainCategories)>0)
                            @foreach($mainCategories as $data)
                            <div class="col-6 col-md-3">
                                <?php $slug = str_replace(' ', '-', $data->title);?>
                                <a href="{{ route('category_detail',$slug) }}" class="prod-item" data-aos="zoom-in-up"
                                    data-aos-duration="1200">
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('uploads/categories/'. $data->picture) }}" alt="{{$data->title}}">
                                    </div>
                                    <h4>
                                        {{$data->title}}
                                    </h4>
                                </a>
                            </div>
                            @endforeach
                        @endif
                         <!--View More Button -->
                        <div class="col-12 text-center">
                            <a href="/box-by-industry" class="btn viewMore">View All Categories</a>
                        </div>
                    </div>
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
                                <!-- Product Categories Slider-->
                                <div class="col-12">
                                    <div id="category-slider" class="owl-carousel owl-theme">
                                        <?php $mainProducts = MainPageProducts(); ?>
                                        @if(count($mainProducts)>0)
                                            @foreach($mainProducts as $data)
                                                <?php $product_image = product_image($data->id);?>
                                                <?php $slug = str_replace(' ', '-', $data->title);?>
                                                <div class="item">
                                                    <a href="{{ route('product_detail',$slug) }}" class="prod-item">
                                                        <div class="img-wrap">
                                                            <img class="lazyload" data-src="{{ asset('uploads/products/'. $product_image->picture) }}" alt="{{$data->title}}">
                                                        </div>
                                                        <h4>{{$data->title}}</h4>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                <!-- Products Slider -->
                                <div class="col-12">
                                    <div id="products-slider" class="owl-carousel owl-theme">
                                        <?php $mainProducts1 = MainPageProducts1(); ?>
                                        @if(count($mainProducts1)>0)
                                            @foreach($mainProducts1 as $data)
                                                <?php $product_image = product_image($data->id);?>
                                                <?php $slug = str_replace(' ', '-', $data->title);?>
                                                <div class="item">
                                                    <a href="{{ route('product_detail',$slug) }}" class="prod-item">
                                                        <div class="img-wrap">
                                                            <img class="lazyload" data-src="{{ asset('uploads/products/'. $product_image->picture) }}" alt="{{$data->title}}">
                                                        </div>
                                                        <h4>{{$data->title}}</h4>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!-- View More Button -->
                                <div class="col-12 text-center">
                                    <a href="/box-by-industry" class="btn viewMore">View more</a>
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
                            <img class="lazyload" data-src="{{ asset('website/assets/images/icons/policy.png')}}">
                        </div>
                        <h4>
                            free design support
                        </h4>
                    </div>
                    <div class="col-md-3 p-0">
                        <div class="serv-item mx-auto" data-aos="fade-up" data-aos-duration="1000">
                            <img class="lazyload" data-src="{{ asset('website/assets/images/icons/sketch.png')}}">
                        </div>
                        <h4>
                            free custom box dieline
                        </h4>
                    </div>
                    <div class="col-md-3 p-0">
                        <div class="serv-item mx-auto" data-aos="fade-up" data-aos-duration="1000">
                            <img class="lazyload" data-src="{{ asset('website/assets/images/icons/shipping.png')}}">
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
                                        Custom Printed Boxes and Custom Packaging Wholesale
                                    </h3>
                                    <p>
                                        Packprinters.com has opened the new paths for exclusively printed boxes. We are
                                        giving excellent quality oriented, modified and customized packages with four
                                        shading computerized and extraordinary printing services. Our wide assortments
                                        of items enables you to get any of the box of your decision and print it totally
                                        according to your desired theme or subject.
                                    </p>
                                </article>
                                <!-- Details Articel Item -->
                                <article>
                                    <h3>
                                        Advance Wholesale Custom Boxes service
                                    </h3>
                                    <p>
                                        On the off chance, if there is no product that matches your ideal measurements
                                        in our inventory then we shall create a box as per your demand and
                                        specifications. Packprinters.com is a cost effective website to afford our
                                        custom boxes at a wholesale. We are advancing a large number of organizations by
                                        providing attractive, unique, cost effective and rich custom building boxes. To
                                        make your custom boxes progressively prominent we have a variety of extra and
                                        finishing alternatives.
                                    </p>
                                    <p>
                                        Packprinters.com is an intense supporter of packaging that is eco-friendly as we
                                        use effectively recyclable materials to make your custom boxes. We offer premium
                                        boxes’ printing to our potential and valuable customers. Packprinters.com is a
                                        pioneer and trustworthy in designing rich custom packaging. Our 11 years of
                                        experience give us competitive edge and preferred by a large number of main
                                        leading brands. You just need to simply fill out the given form to make your
                                        stress-free beginning with us. We are proving 24/7 customer service through our
                                        delegate to quickly response your questions and concerns. Hence,
                                        packprinters.com is your reliable and long-term partner for all the difficult
                                        business ventures.
                                    </p>
                                </article>
                                <!-- Details Articel Item -->
                                <article>
                                    <h3>
                                        Custom Packaging Boxes
                                    </h3>
                                    <p>
                                        The use of custom boxes have become part of our daily life. Custom printed boxes
                                        is the need of the market to be uniquely identified from others.
                                        Packprinters.com are providing you the variety of different options of designing
                                        and renovating your boxes with inventive and splendid ideas to make your crates
                                        one level up than others to hit the market.
                                    </p>
                                    <p>
                                        Cardboard sheets and corrugated boxes are manufactured with recyclable
                                        materials. Boxes’ printing focus on all means engaged in a process including
                                        collecting, printing, covering and sticking that gives 100% flawlessness before
                                        final delivery to make the item ideal for use all over the world. The top
                                        crucial responsibility of packprinters.com is to make these custom crates fit
                                        for product as per client’s given size and dimensions, affecting a brand image,
                                        popping-out product in a market, storage and shipping of all kinds of products
                                        like: electronic, ornamental and retailing items and many more.
                                    </p>
                                </article>
                                <!-- Details Articel Item -->
                                <article>
                                    <h3>
                                        Care and Attention
                                    </h3>
                                    <p>
                                        Proper care and attention is given to satisfied client’s requirements in an
                                        effective and efficient manner. Packprinters.com is easily accessible as being
                                        less costly is gaining competitive edge. Boxes manufactured by packprinters.com
                                        is 100% recyclable material to promote eco-friendly environment. We are offering
                                        shipping services of all custom packaging boxes almost free of cost.
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
                                        Exceptional services along with timely response every time. Have been getting
                                        boxes from packprinters.com for so long. Always get boxes according to my
                                        company and product requirements. Highly recommended being potential and old
                                        client of packprinters.com.
                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Benjamin Evans.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Benjamin Evans
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        Always go through excellent experience with packprinters.com. Go for it! Boxes
                                        are not even stylish but recyclable and solid as well. I am highly impressed and
                                        amazed after checking out the quality of boxes. Highly recommended. I never get
                                        disappointed here. They act and deliver what they have written and promised.
                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Ernest Boyd.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Ernest Boyd
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        I ordered 1500 boxes and each box is of high quality and properly laminated.
                                        I am very impressed. Customer support is so friendly and guided me soooo very
                                        well. I will definitely get back to you soon. Great effort! Thank you so much
                                        guys.
                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Jimmie Cooper.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Jimmie Cooper
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        An authentic website with no frauds I must say! I get exactly what I actually
                                        asked for. I am so overwhelmed after seeing my boxes; they are looking super
                                        attractive and eye pleasing to all my team. Definitely will be helpful in my
                                        sales too. Keep going like that. Staff is so friendly and listened me so calmly
                                        every time. Hats off to patience! Thank you so very much.
                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Juanita Montgomery.jpg')}}"
                                            alt="testimonial image">
                                    </div>
                                    <h5>
                                        Juanita Montgomery
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        served me with the best green packaging solution in cost-effective price.
                                        Moreover, I had a very short turn-around time and I got delivery before
                                        deadline. I am so thankful to all team. I ordered bulk of boxes but I am so
                                        happy and amazed that each box is of same high quality plus super printing on
                                        it. Thank you for listening my demand and all concerns. I must say “not even a
                                        single change is required” they are just soooo perfectly designed and
                                        manufactured. I am very happy.
                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Kathy Ford.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Kathy Ford
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        I ordered boxes for my start-up cosmetic business. I paced an order for cosmetic
                                        boxes. I was a little afraid as well but the way they responded me and listened
                                        me is so professional and friendly. You must go for this website to get
                                        realistic picture of your vision. Thanks for your free graphic assistance. You
                                        people helped me with your all efforts and delivered my order before time.
                                        Keep going!


                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Krin Hart.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Krin Hart
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        I ordered bath bomb boxes and I cannot even explain how much I am in love with
                                        the super magnetized design and rich quality material with neat lamination on
                                        it. I am just speechless! You people are so awesome in your services. Highly
                                        recommended and will definitely get back to you.
                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Nicholas Simmmons.jpg')}}"
                                            alt="testimonial image">
                                    </div>
                                    <h5>
                                        Nicholas Simmmons
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        Thank you Pack printers team for providing what you have mentioned in your
                                        website. Food boxes are supper classy and convenient. The content you put on it
                                        is looking super alluring. Everything is just perfect. Showed great patience,
                                        rich quality of material and glamorous design in readable way. I am soon going
                                        to order again for retail boxes now.
                                        Thanks again! Thumbs up!

                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Peter Ramirez.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Peter Ramirez
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        Besides being so confused I also changed my options for so many times but the
                                        team of pack printers showed the level of professionalism and treated me so
                                        great with full patience and friendly communication. I put my artwork and
                                        designing responsibility on them as well along with the packaging of boxes. They
                                        astounded me and impressed me by the effort they put to transform my vision into
                                        reality. All boxes came into my budget without charging any extra shipping cost.
                                        I am so grateful to you pack printers team.
                                        Go for this authentic website!

                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Ryan Mitchelle.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Ryan Mitchelle
                                    </h5>
                                </div>
                                <!-- Testimonial Slider Item -->
                                <div class="item">
                                    <img style="width: 50px; margin: 15px auto;"
                                        src="{{ asset('website/assets/images/homepage/text-quotes-.png')}}" alt="quotes">
                                    <div class="testimonial">
                                        I was tying service website for the first time and confused about placing an
                                        order but the team of packprinters.com build trust and made me believe that I
                                        will get the same thing like I ordered. They sent me proper 3d mockups, showed
                                        me flat and physical sampling before starting manufacturing process. I am so
                                        astonished that they are so committed to their words and work. Thank you so much
                                        team. Will come back soon for next order.
                                    </div>
                                    <div class="img-wrap">
                                        <img class="lazyload" data-src="{{ asset('website/assets/images/userImages/Vincent Bryant.jpg')}}" alt="testimonial image">
                                    </div>
                                    <h5>
                                        Vincent Bryant
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
                <img class="lazyload" data-src="{{ asset('website/assets/images/icons/arrow.png')}}" alt="arrow">
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
                <img class="lazyload" data-src="{{ asset('website/assets/images/icons/arrow.png')}}" alt="arrow">
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection