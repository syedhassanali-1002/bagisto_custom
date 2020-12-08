<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>@yield('page_title')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ bagisto_asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ bagisto_asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ bagisto_asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ bagisto_asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ bagisto_asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ bagisto_asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ bagisto_asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ bagisto_asset('css/ctheme.css') }}" type="text/css">

    @if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ bagisto_asset('images/favicon.ico') }}" />
    @endif

    @stack('css')

</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">Sign in</a>
            <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
            <span>Usd <i class="arrow_carrot-down"></i></span>
            <ul>
                <li>USD</li>
                <li>EUR</li>
                <li>USD</li>
            </ul>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{ bagisto_asset('images/search.png') }}" alt=""></a>
        <a href="#"><img src="{{ bagisto_asset('images/heart.png') }}" alt=""></a>
        <a href="#"><img src="{{ bagisto_asset('images/cart.png') }}" alt=""> <span>0</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
{!! view_render_event('bagisto.shop.layout.header.before') !!}

@include('shop::layouts.header.index')

{!! view_render_event('bagisto.shop.layout.header.after') !!}
<!-- Header Section End -->

<!-- Content Section Begin -->
{!! view_render_event('bagisto.shop.layout.content.before') !!}

@yield('content-wrapper')

{!! view_render_event('bagisto.shop.layout.content.after') !!}

<!-- Content Section End -->

<!-- Footer Section Begin -->
{!! view_render_event('bagisto.shop.layout.footer.before') !!}

@include('shop::layouts.footer.footer')

{!! view_render_event('bagisto.shop.layout.footer.after') !!}

@if (core()->getConfigData('general.content.footer.footer_toggle'))
    <div class="footer">
        <p style="text-align: center;">
            @if (core()->getConfigData('general.content.footer.footer_content'))
                {{ core()->getConfigData('general.content.footer.footer_content') }}
            @else
                {!! trans('admin::app.footer.copy-right') !!}
            @endif
        </p>
    </div>
@endif
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{ bagisto_asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ bagisto_asset('js/bootstrap.min.js') }}"></script>
<script src="{{ bagisto_asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ bagisto_asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ bagisto_asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ bagisto_asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ bagisto_asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ bagisto_asset('js/mixitup.min.js') }}"></script>
<script src="{{ bagisto_asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ bagisto_asset('js/main.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>--}}
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

@stack('scripts')


</body>

</html>