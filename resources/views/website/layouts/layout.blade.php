<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('website/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('website/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/1-sanitize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/2-bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ asset('website/assets/css/styles.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
        @yield('styles')
    </head>

    <body data-spy="scroll" data-target="#net-nav" data-offset="50">
        <!-- Main Page Header -->
        <header class="mainHeader">
            @include('website.layouts.header')
        </header>
        <!-- Main Area -->
        <main>
            @yield('main_content')
        </main>
        <!-- Footer -->
        <footer>
            @include('website.layouts.footer')
        </footer>

        <!-- JavaScript Files -->
        <script src="{{ asset('website/assets/js/vendor/1-jquery-3.4.0.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/2-bootstrap.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/3-popper.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/4-simplebar.min.js') }}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{ asset('website/assets/js/scripts.min.js') }}"></script>
        <script>
            AOS.init({
                disable: 'mobile'
            });

        </script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
        <script>
            $('.selectpicker1').selectpicker();
        </script>
        <script>  
            //     $(document).on('keyup','#search-option', function(){
            //         var id = $(this).val();
            //         console.log(id);
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //         });
            //         $.ajax({
            //         type:'post',
            //         url:"{{ route('live-search') }}",
            //         data: { id : id},
            //         success: function(response){
            //             $('#options').html(response);
            //         }
            //         });
            //     }); 
            // $(function() {
            //     $('input[name=chooseOption]').on('input',function() {
            //         var selectedOption = $('option[value="'+$(this).val()+'"]');
            //         var slug = selectedOption.attr('id');
            //         if(slug.length){
            //             window.location.assign('https://www.packprinters.com/category/box-by-industry/'+slug)
            //         }else{
            //             // $('#search-option').html('There is no data');
            //         }
            //     });
            // });
        </script> 
        <script src="//code.tidio.co/fsa2kkx0htchlhkqoyfg9dstokns6v8k.js" async></script>
    @yield('scripts')
    </body>

</html>
