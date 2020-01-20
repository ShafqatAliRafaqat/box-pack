@section('styles')

@endsection
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
                <select name="search" class="selectpicker1" data-live-search="true" title="Search..." id="selectpicer">
                    <option value="" style="background-color:gray; border-color:gray; border-radius: 10px;padding: 5px 10px;margin: 0 20px; color: #fff">Search</option>
                </select>
                <span class="close-searchBar">x</span>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light" data-toggle="sticky-onscroll">
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
                        <ul class="navbar-nav ml-auto text-center text-md-left">
                            <li class="nav-item {{ Request::is('/')?  'active' : '' }} ">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            @php $boxByIndustry = ShowBoxByIndustryInNav(); @endphp
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="{{ route('category','box-by-industory') }}" 
                                    onclick="window.location.href='/categories/box-by-industory'"target="_blank"
                                    id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    box by industry
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    @if(count($boxByIndustry)>0)
                                        @foreach($boxByIndustry as $data)
                                        <?php $slug = str_replace(' ', '-', $data->title);?>
                                        <a class="dropdown-item" href="{{ route('category_detail',['box-by-industory',$slug, $data->id]) }}">
                                            <img src="{{ asset('uploads/categories/'. $data->picture) }}" width="60" height="60" alt="">
                                            {{$data->title}}
                                        </a>
                                        @endforeach
                                    @endif
                                    
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd1-1.png')}}" alt="">
                                        custom cosmetic box
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd1-2.png')}}" alt="">
                                        custom display package
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd1-3.png')}}" alt="">
                                        custom eco friendly boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd1-5.png')}}" alt="">
                                        custom gift boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd1-7.png')}}" alt="">
                                        custom retail boxes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd1-8.png')}}" alt="">
                                        custom retail packaging
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/navbar-images/Chinese-Food-Boxes-50x50.png')}}" alt="">
                                        food & beverages boxes
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown {{ url('/categories/box-by-style')?  'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="{{ route('category','box-by-style') }}" 
                                    onclick="window.location.href='/categories/box-by-style'"target="_blank"
                                    id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    box by style
                                </a>
                                <?php $boxByStyle = ShowBoxByStyleInNav(); ?>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    @if(count($boxByStyle)>0)
                                        @foreach($boxByStyle as $data)
                                        <?php $slug = str_replace(' ', '-', $data->title);?>
                                        <a class="dropdown-item" href="{{ route('category_detail',['box-by-style',$slug, $data->id]) }}">
                                            <img src="{{ asset('uploads/categories/'. $data->picture) }}" width="60" height="60" alt="">
                                            {{$data->title}}
                                        </a>
                                        @endforeach
                                    @endif
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd2-1.png')}}" alt="">
                                        bottom closure
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd2-2.png')}}" alt="">
                                        CD Covers
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd2-3.png')}}" alt="">
                                        figure & pattern
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd2-4.png')}}" alt="">
                                        fold & assemble
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd2-5.png')}}" alt="">
                                        rectangular
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd2-6.png')}}" alt="">
                                        showcase exhibit
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/Common/dd2-7.png')}}" alt="">
                                        top closure
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown {{ url('/categories/box-by-other')?  'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="{{ route('category','box-by-other') }}" 
                                    onclick="window.location.href='/categories/box-by-other'"target="_blank" id="navbarDropdown4"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Others
                                </a>
                                <?php $boxByOther = ShowBoxByOtherInNav(); ?>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                    @if(count($boxByOther)>0)
                                        @foreach($boxByOther as $data)
                                        <?php $slug = str_replace(' ', '-', $data->title);?>
                                        <a class="dropdown-item" href="{{ route('category_detail',['box-by-other',$slug, $data->id]) }}">
                                            <img src="{{ asset('uploads/categories/'. $data->picture) }}" width="60" height="60" alt="">
                                            {{$data->title}}
                                        </a>
                                        @endforeach
                                    @endif
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/navbar-images/stickers-and-lables-50x50.png')}}" alt="">
                                        custom stickers & lables
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/navbar-images/Cling-Decals-50x50.png')}}" alt="">
                                        decals
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/navbar-images/Magazine-Printing-50x50.png')}}" alt="">
                                        magazines
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        <img src="{{ asset('website/assets/images/navbar-images/bottle-neckers-50x50.png')}}" alt="">
                                        bottle necker
                                    </a>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        other
                                    </a>
                                </div>
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