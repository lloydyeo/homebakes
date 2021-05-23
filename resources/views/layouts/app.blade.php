<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="HomeBakers.sg" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheets
    ============================================= -->
{{--    <link rel="stylesheet" href="{{ asset('canvas/css/bootstrap.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/style.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/css/dark.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/css/font-icons.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/css/animate.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/css/magnific-popup.css') }}" type="text/css" />--}}


{{--    <link rel="stylesheet" href="{{ asset('canvas/css/swiper.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/one-page/css/et-line.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/demos/restaurant/restaurant.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('canvas/demos/restaurant/css/fonts.css') }}" type="text/css" />--}}

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-198TK8CZHL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-198TK8CZHL');
    </script>

    @yield('page-css')

    <title>@yield('title') | HomeBakers</title>
</head>

<body class="stretched sticky-footer page-transition">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header" data-sticky-shrink="true" data-logo-height="130">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-lg-between">
                    <div id="small-placeholder"></div>
                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="col-auto mr-lg-0 order-lg-2">
                        <a href="/" class="standard-logo">
                            <img class="my-2" src="{{ asset('images/logos/logo.jpg') }}" alt="HomeBakers.sg"></a>
                        <a href="/" class="retina-logo">
                            <img class="my-2" src="{{ asset('images/logos/logo.jpg') }}" alt="HomeBakers.sg"></a>
                    </div><!-- #logo end -->

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu col-lg-5 order-lg-1">
                        <ul class="menu-container">
{{--                            <li class="menu-item"><a class="menu-link" href="demo-restaurant-menu.html"><div>Menu</div></a></li>--}}
                        </ul>
                    </nav>

                    <nav class="primary-menu col-lg-5 order-lg-3">
                        <ul class="menu-container justify-content-lg-end">
                            <li class="menu-item"><a class="menu-link" href="/"><div>Home</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ route('about-us') }}"><div>About</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ route('blog.index') }}"><div>Blog</div></a></li>
                            <li class="menu-item"><a class="typeform-share button"
                                                     href="https://form.typeform.com/to/gNgmYJjJ?typeform-medium=embed-snippet"
                                                     data-mode="drawer_right"
                                                     style="display:inline-block;text-decoration:none;background-color:{{ $theme_primary_color }};color:white;cursor:pointer;font-family:'Poppins', sans-serif !important;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 22px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">Join Us </a></li> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
{{--                            <li class="menu-item"><a class="button button-red cta-link menu-link color" href="javascript:void(0);"><div>Join Us</div></a></li>--}}
                        </ul>
                    </nav><!-- #primary-menu end -->
                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    @yield('content')

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark" style="background: url('{{ asset('canvas/demos/restaurant/images/footer-bg.jpg') }}')  repeat center center / cover; background-size: auto 100%;; padding: 20px 0 22px">
        <!-- Copyrights
        ============================================= -->
        <div id="copyrights" class="bg-transparent pb-4">
            <div class="container clearfix">
                <div class="row justify-content-between col-mb-30">
                    <div class="col-12 col-md-auto text-center text-md-left">
                        <span class="font-primary">&copy; HomeBakers 2021. All Rights Reserved.</span>
                    </div>
                    <div class="col-12 col-md-auto text-center text-md-right">
                        <div class="copyrights-menu copyright-links clearfix">
                            <a href="/">Home</a>/<a href="{{ route('about-us') }}">About Us</a>/<a href="#">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-line-arrow-up"></div>

<link rel="preload" as="style" href="{{ asset('canvas/css/fonts/font-icons.woff') }}" />
<link href="https://fonts.googleapis.com/css?family=Cookie|Open+Sans:400,600,700,800,900|Poppins:300,400,500,600,700|Playfair+Display:400,400i,700,700i,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('canvas/css/app.css') }}" type="text/css" />
@include('layouts.colors')
<style>
    #search-all::placeholder {
        color:white!important;
    }

    .entry-image img {
        max-height:265px;
        object-fit: cover;
    }

    /**
     * Recipe Categories
     */
    .recipe-categories {
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
    }

    .recipe-category {
        position: relative;
        overflow: hidden;
        flex: 0 0 calc(100% - 20px);
        max-width: calc(100% - 20px);
        margin: 10px;
        height: 80px;
        background-size: cover;
        background-position: center center;
        border-radius: 250px;
        transition: all 0.5s cubic-bezier(.02, .01, .5, 1);
    }

    .recipe-category::after {
        position: absolute;
        content: '';
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background-color: rgba(0,0,0,0.2);
    }

    .recipe-category-inner {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        padding: 10px;
        z-index: 2;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .recipe-category-icon {
        width: 40px;
        height: 40px;
        margin: 0;
        display: flex;
        justify-content: center;
        text-align: center;
        border-radius: 100%;
        background-color: #FFF;
        padding: 8px;
        margin-right: 10px;
        color: #000;
        transition: transform .5s ease-out;
    }

    .recipe-category:hover .recipe-category-icon {
        transform: rotate(360deg);
    }

    .recipe-category-info {
        color: #FFF;
        font-size: 18px;
        text-align: center;
    }

    @media(min-width:768px) {
        .header-row {
            flex-wrap: nowrap;
        }

        .primary-menu + .primary-menu {
            border-top: 0;
        }
    }

    @media (min-width: 768px) {
        .recipe-category {
            flex: 0 0 calc(50% - 20px);
            max-width: calc(50% - 20px);
        }
    }

    @media(max-width:992px) {
        #primary-menu-trigger {
            order: 4;
        }
    }


    @media (min-width: 992px) {

        .recipe-category {
            flex: 0 0 60px;
            max-width: 60px;
            height: 300px;
            margin: 15px;
            background-size: auto 105%;
            background-position: center;
            border-radius: 30px;
        }

        .recipe-category:hover {
            flex: 0 0 250px;
            max-width: 250px;
            background-size: auto 100%;
            border-radius: 10px;
        }

        .recipe-category-inner {
            width: auto;
            height: auto;
            left: 0;
            top: auto;
            bottom: 0;
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(180deg);
        }

        .recipe-category:hover .recipe-category-inner {
            writing-mode: horizontal-tb;
            transform: rotate(0);
        }

        .recipe-category:not(:hover) .recipe-category-icon {
            width: 40px;
            height: 40px;
            margin-right: 0;
            margin-bottom: 10px;
            transform: rotate(180deg);
        }

        .recipe-category::after {
            background: -webkit-linear-gradient(to bottom, rgba(0,0,0,0) 70%, rgba(0,0,0,0.8)) 100%;
            background: -o-linear-gradient(to bottom, rgba(0,0,0,0) 70%, rgba(0,0,0,0.8)) 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0) 70%, rgba(0,0,0,0.8)) 100%;
        }

        #news-section .entry {
            border-radius:30px;
            overflow:hidden;
            border-width: 0;
            transition: transform .2s ease-in-out;
        }

        #news-section .entry:hover {
            transform: translate(0px, -10px);
            box-shadow: 0 0 15px 2px rgb(0 0 0 / 55%);
        }
    }
</style>
<style>
    @media(max-width:425px) {
        #page-title {
            padding: 2.1rem 0!important;
            background-image:none!important;
        }

        #page-title .container span {
            display:none!important;
        }

        #logo {
            flex: 1 0 auto!important;
            padding: 0;
        }

        #small-placeholder,
        #primary-menu-trigger {
            flex: 1 1 auto;
            justify-content: flex-end!important;
        }
    }

    @media(max-width:768px) {
        #page-title {
            padding: 2.1rem 0!important;

        }
        #page-title .container span {
            display:none!important;
        }

        nav.primary-menu {
            display:none!important;
        }

        #primary-menu-trigger,
        #logo,
        #small-placeholder {
            flex: 1 1 0;
            min-height: 1px;
            justify-content: center!important;
        }

        #primary-menu-trigger {
            justify-content: flex-end!important;
        }
    }


    #page-title {
        padding: 5.5rem 0;
    }

    .cta-link {
        padding: 8px 12px!important;
        color: white!important;
        border-radius: 5px;
    }

    .cta-link:hover {
        transform: translate(0px, -5px);
    }
</style>

<!-- JavaScripts
============================================= -->
<script src="{{ asset('canvas/js/jquery.js') }}"></script>
<script src="{{ asset('canvas/js/plugins.min.js') }}"></script>

<!-- For Countdown -->
<script src="{{ asset('canvas/js/components/moment.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('canvas/js/functions.js') }}"></script>

<!-- Custom Carousel JS File -->
<script>

    var carouselRTL = false;

    if( $('body').hasClass('rtl') ) { carouselRTL = true; }

    $(window).on( 'pluginCarouselReady', function(){
        $('#food-menu-carousel').owlCarousel({
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            items: 1,
            mouseDrag: false,
            dotsContainer: '#item-thumb',
            rtl: carouselRTL
        });

        $('#dessert-menu-carousel').owlCarousel({
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            items: 1,
            mouseDrag: false,
            dotsContainer: '#item-thumb1',
            rtl: carouselRTL
        });
    });

</script>

</body>
</html>
