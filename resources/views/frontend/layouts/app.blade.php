<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('public/frontend') }}/img/favicon.png" rel="icon" />
        <title>Elroyale Restaurant and Cafe</title>

        <!-- Fonts -->
        <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('frontend/css/fancybox.min.css') }}" rel="stylesheet">
        <script src="{{ url('frontend/css/tailwindcsss-3.3.0.css') }}"></script>
        <link href="{{ url('frontend/css/slick.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        @stack('style')
    </head>
    <body class="antialiased">
        <!-- header start -->
        @include('frontend.layouts.header')
        <!-- header end  -->

        <!-- main content -->
        @yield('content')
        <!-- main content -->

        <!-- footer start -->
        @include('frontend.layouts.footer')
        <!-- footer -->

        <!-- bottome footer -->
        @include('frontend.layouts.bottom-footer')
        <!-- footer end  -->

        <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ url('frontend/js/slick.js') }}"></script>
        <script src="{{ url('frontend/js/script.js') }}"></script>
        <script src="{{ url('frontend/js/fancybox.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <button id="scrollTops" class="actived fixed right-[30px] bottom-[30px] w-[50px] h-[50px] z-[10000] text-[20px] rounded-[3px] text-white bg-[#d3a971]">
        <i class="fa fa-angle-up"></i>
        </button> -->

        @stack('scripts')
    </body>
</html>
