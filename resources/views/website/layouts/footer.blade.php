<div class="container pb-5">
    <!-- Clients Slider -->
    <div class="row">
        <div class="col-lg-12">
            <div class="clients-slider" data-aos="fade-up" data-aos-duration="1500">
                <h4>
                    TRUSTED BY THE WORLD'S TOP BRANDS
                </h4>
                <div class="clients owl-carousel owl-theme" data-aos="flip-up" data-aos-duration="2000">
                    <div class="item">
                        <img class="" src="{{ asset('website/assets/images/Common/marriot.svg')}}" alt="Client Logo">
                    </div>
                    <div class="item">
                        <img class="" src="{{ asset('website/assets/images/Common/metlife.svg')}}" alt="Client Logo">
                    </div>
                    <div class="item">
                        <img class="" src="{{ asset('website/assets/images/Common/old_spice.svg')}}" alt="Client Logo">
                    </div>
                    <div class="item">
                        <img class="" src="{{ asset('website/assets/images/Common/pandora.svg')}}" alt="Client Logo">
                    </div>
                    <div class="item">
                        <img class="" src="{{ asset('website/assets/images/Common/ticketmaster.svg')}}" alt="Client Logo">
                    </div>
                    <div class="item">
                        <img class="" src="{{ asset('website/assets/images/Common/adidas.svg')}}" alt="Client Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-lg-3">
            <a class="foot-img" href="/">
                <img src="{{ asset('website/assets/images/Common/pack-printers.logo.svg')}}" alt="footer Logo">
            </a>
            <p>
                Packprinters.com provides suitable expert solutions for custom packaging, custom printed boxes, wholesale custom boxes and gives on time delivery at economical price.
            </p>
        </div>
        <div class="col-lg-3">
            <div class="links text-capitalize">
                <h5>
                    box by industry
                </h5>
                @php $boxByIndustry = ShowBoxByIndustryInNav(); @endphp
                @if(count($boxByIndustry)>0)
                    @foreach($boxByIndustry as $data)
                        <?php $slug = str_replace(' ', '-', $data->title);?>
                        <a href="{{ route('category_detail',$slug) }}" target="_blank">{{$data->title}}</a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <div class="links">
                <h5>
                    quick links
                </h5>
                <a href="{{ route('contact_us') }}" target="_blank">Contact Us</a>
                <a href="{{ route('about_us') }}" target="_blank">About Us</a>
                <a href="{{ route('terms_of_use') }}" target="_blank">Terms of Use</a>
                <a href="{{ route('private_policy') }}" target="_blank">Privacy Policy</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="links">
                <h5>
                    contact
                </h5>
                <a href="https://goo.gl/maps/SaE3L6xgC1dwf8be6" target="_blank">Street: 114 spartan ave, staten <br>
                    island,
                    New Your, USA</a>
                <!--<a href="tel:18184767382" target="_blank">1-818-476-7382</a>-->
                <a href="mailto:info@packprinters.com" target="_blank">sales@packprinters.com</a>
            </div>
            <div class="social-icons">
                - &nbsp;
                <a href="httpe://www.facebook.com" target="_blank">
                    <img src="{{ asset('website/assets/images/icons/facebook.png')}}" alt="facebook"></a>
                <a href="httpe://www.twitter.com" target="_blank">
                    <img src="{{ asset('website/assets/images/icons/twitter.png')}}" alt="twitter"></a>
                <a href="httpe://www.instagram.com" target="_blank">
                    <img src="{{ asset('website/assets/images/icons/instagram.png')}}" alt="instagram"></a>
                <a href="httpe://www.behance.com" target="_blank">
                    <img src="{{ asset('website/assets/images/icons/behance.png')}}" alt="behnace"></a>
                <a href="httpe://www.pinterest.com" target="_blank">
                    <img src="{{ asset('website/assets/images/icons/pinterest.png')}}" alt="pinterest"></a>
            </div>
        </div>
    </div>
</div>
<div class="footbar">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footwrap">
                    <img src="{{ asset('website/assets/images/Common/certificate.png')}}" alt="certificates bar">
                    <p>
                        2019-@php echo (date('Y')) @endphp Pack Printers. All Rights Reserved
                    </p>
                    <img src="{{ asset('website/assets/images/Common/payment-icons.png')}}" alt="payment bar">
                </div>
            </div>
        </div>
    </div>

</div>