<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>شركه مشاريع الطاقه للبطاريات</title>
    <meta name="title" content="">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('themes/petromin/assets/build/css/bootstrap.min.css?ver=1650579102') }}" media="all">
    <link rel="stylesheet" id="swiper-bundle-min-css" href="{{ asset('themes/petromin/assets/build/css/swiper-bundle.min.css?ver=1650579102') }}" media="all">
    <link rel="stylesheet" id="magnific-popup-min-css" href="{{ asset('themes/petromin/assets/build/css/magnific-popup.min.css?ver=1650579102') }}" media="all">
    <link rel="stylesheet" id="main-css" href="{{ asset('themes/petromin/assets/build/css/main_ar.css?ver=1695011854') }}" media="all">
    <link rel="stylesheet" href="{{ asset('assets/build/app.min-1.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-1.css')}}">
<link rel="manifest" href=" {{ asset('assets/Maj/assets/favicons/manifest.json"') }}>
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content=" {{ asset('uploads/logo-01.png') }}">
<meta name="theme-color" content="#ffffff">
 <link rel="stylesheet" href=" {{ asset('assets/Maj/assets/css/aos.css') }}">
<link rel="stylesheet" href=" {{ asset('assets/Maj/assets/css/almajdouie.css') }}">
<link rel="stylesheet" href=" {{ asset('assets/Maj/assets/css/customiz.css') }}">
<link rel="stylesheet" href=" {{ asset('assets/Maj/assets/css/custom.css') }}">

<script defer="" src="{{ asset('themes/petromin/assets/build/js/swiper-bundle.min.js?ver=1650579102') }}" id="swiper-bundle-js"></script>
<script defer="" src="{{ asset('themes/petromin/assets/build/js/main.js?ver=1662362246') }}" id="main-js"></script>

<script type="text/javascript">
    function MM_swapImgRestore() { //v3.0
        var i, x, a = document.MM_sr;
        for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++)
            x.src = x.oSrc;
    }

    function MM_preloadImages() { //v3.0
        var d = document;
        if (d.images) {
            if (!d.MM_p)
                d.MM_p = new Array();
            var i, j = d.MM_p.length,
                a = MM_preloadImages.arguments;
            for (i = 0; i < a.length; i++)
                if (a[i].indexOf("#") != 0) {
                    d.MM_p[j] = new Image;
                    d.MM_p[j++].src = a[i];
                }
        }
    }

    function MM_findObj(n, d) { //v4.01
        var p, i, x;
        if (!d)
            d = document;
        if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
            d = parent.frames[n.substring(p + 1)].document;
            n = n.substring(0, p);
        }
        if (!(x = d[n]) && d.all)
            x = d.all[n];
        for (i = 0; !x && i < d.forms.length; i++)
            x = d.forms[i][n];
        for (i = 0; !x && d.layers && i < d.layers.length; i++)
            x = MM_findObj(n, d.layers[i].document);
        if (!x && d.getElementById)
            x = d.getElementById(n);
        return x;
    }

    function MM_swapImage() { //v3.0
        var i, j = 0,
            x, a = MM_swapImage.arguments;
        document.MM_sr = new Array;
        for (i = 0; i < (a.length - 2); i += 3)
            if ((x = MM_findObj(a[i])) != null) {
                document.MM_sr[j++] = x;
                if (!x.oSrc)
                    x.oSrc = x.src;
                x.src = a[i + 2];
            }
    }
</script>

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NT4WXKZ');
</script>
<!-- End Google Tag Manager -->
        <style>
            ul.pagination li a { position: relative; display: block; padding: .5rem .75rem; margin-left: -1px; line-height: 1.25; color: #134a88; background-color: #fff; border: 1px solid #dee2e6; }
        </style>

     {{-- <link rel="stylesheet" href="{{ asset('assets/css/switcher.css?v=1') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugin/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css?v=1') }}">
    </head>

<body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/build/app.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}"></script>

    <script>
        $(document).ready(function() {

            $('#hmSlider').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                items: 1
            });

            $('#hmSliderRTL').owlCarousel({
                rtl: true,
                loop: true,
                margin: 0,
                nav: false,
                items: 1
            });

            setTimeout(() => {
                nextimage();
            }, 2500);

            $(document).on('click', '.cookie-policy__cta', function() {
                $.cookie('terms-agreed', $(this).data('version'), {
                    path: '/'
                });
                $('.cookie-policy').hide();
            });
            $(document).on('click', '.cookie-policy__close-btn', function() {
                $('.cookie-policy').hide();
            });

        });

        function nextimage() {
            var owl = $('.owl-carousel');
            owl.owlCarousel();
            setTimeout(() => {
                owl.trigger('next.owl.carousel');
                nextimage();
            }, 2500);
        }
    </script>

</body>

</html>
