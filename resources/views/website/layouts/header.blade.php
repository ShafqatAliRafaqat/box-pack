@section('styles')

@endsection
            <!-- NavBar  -->
            <div id="top" class="headtop">
                <div class="container position-relative">
                    <div class="top-links mr-0 pr-0 mr-md-5 pr-md-4">
                        <!--<a href="tel:+182345678">Call Us: <i>+18-23-4567-8</i></a>-->
                        <a class="" href="mailto:info@packprinters.com">Email: <i>sales@packprinters.com</i></a>
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
            <img src="{{ asset( 'website/assets/images/icons/magnifying-glass.png')}}" alt="search">
                @php $categories = AllCategories(); @endphp
                <form method="post" action="{{ route('live-search') }}" enctype="multipart/form-data">
                    @csrf
                        <input type="text" name="search" placeholder="Search..." required>
                    <input type="submit" hidden>
                </form>
                <span class="close-searchBar">x</span>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light p-0" data-toggle="sticky-onscroll">
                <div class="container">
                    <a href="/" class="navbar-brand">
                        <!-- Logo Image Here -->
                        <img class="logo-img" src="{{ asset('website/assets/images/Common/pack-printers.logo.svg')}}" alt="packaging head">
                    </a>
                    <button class="navbar-toggler" data-target="#net-nav" data-toggle="collapse" aria-controls="net-nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="net-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto text-center text-lg-left">
                            <li class="nav-item {{ url('/')?  'active' : '' }} ">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                             <li class="nav-item dropdown {{ url('/box-by-industry')?  'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="/box-by-industry" target="_blank"
                                    id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    box by industry
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="{{ route('category_detail','cosmetic-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/cosmetic-boxes.png')}}" class="lazyload"
                                            alt="Cosmetic Boxes">
                                            Cosmetic Boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','CBD-Packaging-Boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/cbd-packaging-boxes.png')}}"
                                            class="lazyload" alt="CBD Packaging Boxes">
                                            CBD Packaging Boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','custom-display-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/custom-display-boxes.png')}}"
                                            class="lazyload" alt="custom display boxes">
                                        custom display boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','ECO-Friendly-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/eco-friendly-boxes.png')}}"
                                            class="lazyload" alt="ECO-Friendly boxes">
                                        ECO-Friendly boxes
                                    </a>
                                    <a class="dropdown-item"href="{{ route('category_detail','Metalized-Boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/metalized-boxes.png')}}" class="lazyload"
                                            alt="Metalized Boxes">
                                            Metalized Boxes
                                    </a>
                                    <a class="dropdown-item"href="{{ route('category_detail','Food-and-Beverage-Boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/food-and-beverages.png')}}"
                                            class="lazyload" alt="Food-Beverage-Boxes">
                                            Food & Beverage Boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','Gift-Boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/gift-boxes.png')}}" class="lazyload"
                                            alt="Gift Boxes">
                                            Gift Boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','Retail-Boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/retail-boxes.png')}}" class="lazyload"
                                            alt="Retail Boxes">
                                            Retail Boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','Custom-Display-Packaging') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/custom-display-packaging.png')}}"
                                            class="lazyload" alt="Custom Display Packaging">
                                            Custom Display Packaging
                                    </a>
                                </div>
                            </li>
                            @php $boxByIndustry = ShowBoxByIndustryInNav(); @endphp
                            <li id="megaMenu" class="nav-item dropdown {{ url('/box-by-industry')?  'active' : '' }}">
                                <!--<a class="nav-link dropdown-toggle" href="{{ route('boxbyindustry') }}" -->
                                <!--    onclick="window.location.href='/box-by-industry'"target="_blank"-->
                                <!--    id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"-->
                                <!--    aria-expanded="false">-->
                                <!--    box by industry-->
                                <!--</a>-->
                                <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown2">-->
                                <!--    @if(count($boxByIndustry)>0)-->
                                <!--        @foreach($boxByIndustry as $data)-->
                                <!--        <?php $slug = str_replace(' ', '-', $data->title);?>
                                <!--        <a class="dropdown-item" href="{{ route('category_detail',$slug) }}">-->
                                <!--            <img src="{{ asset('uploads/categories/'. $data->picture) }}" style="width: 33px" alt="">-->
                                <!--            {{$data->title}}-->
                                <!--        </a>-->
                                <!--        @endforeach-->
                                <!--    @endif-->
                                 
                                <!--</div>-->
                                <a class="nav-link dropdown-toggle" href="{{ route('RetailBoxes') }}" 
                                    target="_blank"
                                    id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Retail Boxes
                                </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                      
                                    <a class="dropdown-item" href="{{ route('category_detail','cosmetic-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/cosmetic-boxes.png') }}" class="lazyload"
                                            alt="cosmetic boxes">
                                        cosmetic boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','CBD-Packaging-Boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/cbd-packaging-boxes.png') }}"
                                            class="lazyload" alt="CBD Packaging Boxes">
                                        CBD Packaging Boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','custom-display-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/custom-display-boxes.png') }}"
                                            class="lazyload" alt="custom display boxes">
                                        custom display boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','ECO-Friendly-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/eco-friendly-boxes.png') }}"
                                            class="lazyload" alt="ECO-Friendly boxes">
                                        ECO-Friendly boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','metalized-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/metalized-boxes.png') }}" class="lazyload"
                                            alt="metalized boxes">
                                        metalized boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','food-beverages-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/food-and-beverages.png') }}"
                                            class="lazyload" alt="food & beverages boxes">
                                        food & beverages boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','gift-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/gift-boxes.png') }}" class="lazyload"
                                            alt="gift boxes">
                                        gift boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','retail-boxes') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/retail-boxes.png') }}" class="lazyload"
                                            alt="retail boxes">
                                        retail boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('category_detail','custom-disaply-packaging') }}">
                                        <img data-src="{{ asset('website/assets/images/navbar-images/custom-display-packaging.png') }}"
                                            class="lazyload" alt="custom disaply packaging">
                                        custom disaply packaging
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item {{ url('/box-by-style')?  'active' : '' }}">
                                <a class="nav-link" href="{{ route('boxbystyle') }}">Templates</a>
                            </li>
                            <li class="nav-item {{ url('/blog')?  'active' : '' }}">
                                <a class="nav-link" href="{{ route('blog') }}">blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-btn" href="{{ route('quote') }}">
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
@section('scripts')
@endsection