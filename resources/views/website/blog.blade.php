@extends('website.layouts.layout')
@section('title', 'Pack Printers :: Blog')
@section('main_content')
            <!-- Main Content Section -->
            <section class="blog">
                <header class="commonHeader my-5">
                    <h1 class="text-capitalize">Blog</h1>
                    <p>
                        all custom boxes you need for your product
                    </p>
                </header>
                <!-- Blog Listing -->
                <div class="container">
                    <div class="row pt-4">
                        <!-- Blog Item -->
                        @if(count($blogs)>0)
                            @foreach ($blogs as $data)
                                <div class="col-lg-4 bi">
                                    <?php $slug = str_replace(' ', '-', $data->title);?>
                                    <a href="{{ route('blog_detail',[$slug, $data->id]) }}" class="blog-item">
                                        <div class="card border-0 p-0">
                                            <?php $blog_image = BlogMainImage($data->id);?>
                                            <img class="card-img-top" src="{{ asset('uploads/blogs/'. $blog_image->picture) }}" alt="blog 1">
                                            <div class="card-body p-0">
                                                <h5 class="card-title">
                                                    {{$data->title}}
                                                </h5>
                                                <p class="card-text">
                                                    {{ strip_tags($data->description)}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>  
                            @endforeach
                        @endif
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/blog1-350x313.png" alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            How Custom Popcorn Boxes Increase Your Branding Value In Packaging Industry?
                                        </h5>
                                        <p class="card-text">
                                            The financial values depend on a lot of factors. Some people may think that
                                            it is not like that. They think in the case of the products like the
                                            packaging. Thinking about this simply means that you are making a big
                                            mistake. Packaging is surely one of those factors that are important for the
                                            marketing
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/eco-friendly-boxes2-350x313.jpg"
                                        alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            8 Reasons You Should be Talking About Eco-Friendly Boxes
                                        </h5>
                                        <p class="card-text">
                                            For the marketing of a certain product, the manufacturer needs to consider
                                            various features in order to enhance the attractiveness of the product. To
                                            get a top position in comparison to one’s competitors they do a lot of
                                            effort to come up with an amazing product. In doing so it is sometimes
                                            overlooked that the
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/creative-packaging-350x313.jpg"
                                        alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            Here’s How You Can Use Creativity To Design A Unique Product Package
                                        </h5>
                                        <p class="card-text">
                                            Creativity is one of the most important life skills one can have.
                                            Especially, when we are talking about the packaging industry, creativity is
                                            deemed essential. Why? As much as the customer focuses on the quality of the
                                            product,
                                            Creativity is one of the most important life skills one can have.
                                            Especially, when we are talking about the packaging industry, creativity is
                                            deemed essential. Why? As much as the customer focuses on the quality of the
                                            product,
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/blog1-350x313.png" alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            How Custom Popcorn Boxes Increase Your Branding Value In Packaging Industry?
                                        </h5>
                                        <p class="card-text">
                                            The financial values depend on a lot of factors. Some people may think that
                                            it is not like that. They think in the case of the products like the
                                            packaging. Thinking about this simply means that you are making a big
                                            mistake. Packaging is surely one of those factors that are important for the
                                            marketing
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/eco-friendly-boxes2-350x313.jpg"
                                        alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            8 Reasons You Should be Talking About Eco-Friendly Boxes
                                        </h5>
                                        <p class="card-text">
                                            For the marketing of a certain product, the manufacturer needs to consider
                                            various features in order to enhance the attractiveness of the product. To
                                            get a top position in comparison to one’s competitors they do a lot of
                                            effort to come up with an amazing product. In doing so it is sometimes
                                            overlooked that the
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/creative-packaging-350x313.jpg"
                                        alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            Here’s How You Can Use Creativity To Design A Unique Product Package
                                        </h5>
                                        <p class="card-text">
                                            Creativity is one of the most important life skills one can have.
                                            Especially, when we are talking about the packaging industry, creativity is
                                            deemed essential. Why? As much as the customer focuses on the quality of the
                                            product,
                                            Creativity is one of the most important life skills one can have.
                                            Especially, when we are talking about the packaging industry, creativity is
                                            deemed essential. Why? As much as the customer focuses on the quality of the
                                            product,
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/blog1-350x313.png" alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            How Custom Popcorn Boxes Increase Your Branding Value In Packaging Industry?
                                        </h5>
                                        <p class="card-text">
                                            The financial values depend on a lot of factors. Some people may think that
                                            it is not like that. They think in the case of the products like the
                                            packaging. Thinking about this simply means that you are making a big
                                            mistake. Packaging is surely one of those factors that are important for the
                                            marketing
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/eco-friendly-boxes2-350x313.jpg"
                                        alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            8 Reasons You Should be Talking About Eco-Friendly Boxes
                                        </h5>
                                        <p class="card-text">
                                            For the marketing of a certain product, the manufacturer needs to consider
                                            various features in order to enhance the attractiveness of the product. To
                                            get a top position in comparison to one’s competitors they do a lot of
                                            effort to come up with an amazing product. In doing so it is sometimes
                                            overlooked that the
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/creative-packaging-350x313.jpg"
                                        alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            Here’s How You Can Use Creativity To Design A Unique Product Package
                                        </h5>
                                        <p class="card-text">
                                            Creativity is one of the most important life skills one can have.
                                            Especially, when we are talking about the packaging industry, creativity is
                                            deemed essential. Why? As much as the customer focuses on the quality of the
                                            product,
                                            Creativity is one of the most important life skills one can have.
                                            Especially, when we are talking about the packaging industry, creativity is
                                            deemed essential. Why? As much as the customer focuses on the quality of the
                                            product,
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/blog1-350x313.png" alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            How Custom Popcorn Boxes Increase Your Branding Value In Packaging Industry?
                                        </h5>
                                        <p class="card-text">
                                            The financial values depend on a lot of factors. Some people may think that
                                            it is not like that. They think in the case of the products like the
                                            packaging. Thinking about this simply means that you are making a big
                                            mistake. Packaging is surely one of those factors that are important for the
                                            marketing
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog Item -->
                        <div class="col-lg-4 bi">
                            <a href="blogDetailPage.html" class="blog-item">
                                <div class="card border-0 p-0">
                                    <img class="card-img-top" src="website/assets/images/blog/eco-friendly-boxes2-350x313.jpg"
                                        alt="blog 1">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">
                                            8 Reasons You Should be Talking About Eco-Friendly Boxes
                                        </h5>
                                        <p class="card-text">
                                            For the marketing of a certain product, the manufacturer needs to consider
                                            various features in order to enhance the attractiveness of the product. To
                                            get a top position in comparison to one’s competitors they do a lot of
                                            effort to come up with an amazing product. In doing so it is sometimes
                                            overlooked that the
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Load More Button -->
                        <div class="col-lg-12 text-center mt-2 mb-5 mb-lg-0">
                            <button class="loadMoreBlog">Load More...</button>
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

@endsection