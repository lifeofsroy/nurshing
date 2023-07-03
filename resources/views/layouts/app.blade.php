<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Unique Career Guidance">
    <meta name="robots" content="INDEX,FOLLOW">

    <title>{{ config('app.name') }} |@stack('title')</title>

    @livewire('partial.front-meta')

    <link href="{{asset('favicon.ico')}}" rel="shortcut icon">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/body.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/preloader.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easeScroll.js') }}"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    @livewire('partial.front-style')
    @livewire('partial.front-plugin')

    @stack('style')
    @livewireStyles
</head>

<!-- body -->

<body class="home page-template page-template-page-home page-template-page-home-php page woocommerce-no-js">

    <!-- Preloader -->
    <div id="preloader">
        <div class="container-preloader" id="container">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- header -->
    @livewire('partial.front-header')
    <!-- header -->

    {{ $slot }}

    <!-- footer -->
    @livewire('partial.front-footer')
    <!-- footer -->

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#container').addClass('loaded');
                // Once the container has finished, the scroll appears
                if ($('#container').hasClass('loaded')) {
                    // It is so that once the container is gone, the entire preloader section is deleted
                    $('#preloader').delay(3000).queue(function() {
                        $(this).remove();
                    });
                }
            }, 3000);
        });
    </script>

    @stack('script')
    @livewireScripts
</body>

</html>
