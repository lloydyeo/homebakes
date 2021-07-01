<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <title>@yield('title') | HomeBakers Singapore</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="HomeBakers.sg" />
    <meta name="description" content="Home Bakers Singapore is a platform that features local home bakers. " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="{{ $theme_primary_color }}"/>
    <meta name=”robots” content="index, follow">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title') | HomeBakers" />
    <meta property="og:description" content="Homebakers Singapore is a platform that features local homebakers." />
    <meta property="og:image" content="{{ asset('images/logos/logo.jpg') }}" />
    <meta property="og:url" content="https://www.homebakers.sg" />
    <meta property="og:site_name" content="Homebakers Singapore" />

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('images/logos/favicon.ico') }}"/>
    <link rel="icon" href="{{ asset('images/logos/favicon.ico') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('images/logos/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('images/logos/favicon-32x32.png') }}" sizes="32x32">

    <link rel="canonical" href="https://homebakers.sg/" />
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Playfair+Display:400,400i,700,700i,900&display=swap" as="style">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Playfair+Display:400,400i,700,700i,900&display=swap" rel="stylesheet">
    <link rel="preload" as="font" href="{{ asset('canvas/css/fonts/font-icons.woff') }}" crossOrigin="anonymous"/>

    <style>:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}footer,header,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,segoe ui,Roboto,helvetica neue,Arial,noto sans,liberation sans,sans-serif,apple color emoji,segoe ui emoji,segoe ui symbol,noto color emoji;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h2{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}a{color:#007bff;text-decoration:none;background-color:transparent}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h2{margin-bottom:.5rem;font-weight:500;line-height:1.2}h2{font-size:2rem}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-12,.col-auto,.col-lg-5,.col-md-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media (min-width:768px){.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}}@media (min-width:992px){.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.order-lg-1{-ms-flex-order:1;order:1}.order-lg-2{-ms-flex-order:2;order:2}.order-lg-3{-ms-flex-order:3;order:3}}.bg-transparent{background-color:transparent!important}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}@media (min-width:576px){.d-sm-block{display:block!important}}@media (min-width:992px){.d-lg-block{display:block!important}}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}@media (min-width:992px){.justify-content-lg-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-between{-ms-flex-pack:justify!important;justify-content:space-between!important}}.my-2{margin-top:.5rem!important}.my-2{margin-bottom:.5rem!important}.pb-4{padding-bottom:1.5rem!important}@media (min-width:992px){.mr-lg-0{margin-right:0!important}}.text-center{text-align:center!important}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}}.font-weight-normal{font-weight:400!important}@media (min-width:1440px){.container{max-width:1320px}}li,ul{margin:0;padding:0}::-webkit-selection{background:#1abc9c;color:#fff;text-shadow:none}:active,:focus{outline:0!important}body{line-height:1.5;color:#555;font-family:Lato,sans-serif}a{text-decoration:none!important;color:#1abc9c}a img{border:none}img{max-width:100%}h2{color:#444;font-weight:600;line-height:1.5;margin:0 0 30px;font-family:Poppins,sans-serif}h2{font-size:30px}@media (max-width:767.98px){h2{font-size:1.5rem}}p,ul{margin-bottom:30px}#wrapper{position:relative;float:none;width:100%;margin:0 auto;background-color:#fff;box-shadow:0 0 10px rgba(0,0,0,.1);-moz-box-shadow:0 0 10px rgba(0,0,0,.1);-webkit-box-shadow:0 0 10px rgba(0,0,0,.1)}.nott{text-transform:none!important}.ls0{letter-spacing:0!important}.font-primary{font-family:Poppins,sans-serif}.font-secondary{font-family:"pt serif",serif}.col-mb-30{margin-bottom:-30px}.col-mb-30>[class*=col-]{padding-bottom:30px}.min-vh-60{min-height:60vh!important}@media (min-width:768px){.min-vh-md-100{min-height:100vh!important}}#header{position:relative;background-color:#fff;border-bottom:1px solid #f5f5f5}#header-wrap{position:relative;background-color:#fff;width:100%}.header-wrap-clone{display:none}.header-row{position:relative;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap}@media (min-width:992px){#header-wrap{position:fixed;height:auto;z-index:299;box-shadow:0 0 0 rgba(0,0,0,.1);-webkit-backface-visibility:hidden;backface-visibility:hidden;will-change:left,top,transform}.header-wrap-clone{display:block;height:calc(100px + 1px)}.header-row{position:initial}#header.transparent-header,#header.transparent-header:not(.sticky-header) #header-wrap{background:0 0;border-bottom:1px solid transparent;z-index:299}#header+.include-header{margin-top:calc(-100px - 2px);display:inline-block;vertical-align:bottom;width:100%}#logo img{max-height:100%}}#logo{position:relative;display:-ms-flexbox;display:flex;align-items:center;-ms-flex-align:center;margin-right:auto;max-height:100%}#logo a{color:#000;font-family:Poppins,sans-serif;font-size:36px}#logo img{display:block;max-width:100%;max-height:100%;height:100px}#logo a.standard-logo{display:-ms-flexbox;display:flex}#logo a.retina-logo{display:none}@media only screen and (-webkit-min-device-pixel-ratio:2),only screen and (min--moz-device-pixel-ratio:2),only screen and (-o-min-device-pixel-ratio:2/1),only screen and (min-device-pixel-ratio:2),only screen and (min-resolution:192dpi),only screen and (min-resolution:2dppx){#logo a.standard-logo{display:none}#logo a.retina-logo{display:-ms-flexbox;display:flex}}.primary-menu{display:-ms-flexbox;display:flex;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center}.primary-menu+.primary-menu{border-top:1px solid #eee}#primary-menu-trigger{display:-ms-flex;display:flex;opacity:1;z-index:1;font-size:.875rem;width:50px;height:50px;line-height:50px;justify-content:center;align-items:center}.svg-trigger{width:30px;height:30px}.svg-trigger path{fill:none;stroke:#333;stroke-width:5;stroke-linecap:round}.svg-trigger path:nth-child(1){stroke-dasharray:40 160}.svg-trigger path:nth-child(2){stroke-dasharray:40 142;transform-origin:50%}.svg-trigger path:nth-child(3){stroke-dasharray:40 85;transform-origin:50%}.menu-container{display:none;list-style:none;margin:0;width:100%}.menu-item{position:relative}.menu-item:not(:first-child){border-top:1px solid #eee}.menu-link{display:block;line-height:22px;padding:14px 5px;color:#444;font-weight:700;font-size:.8125rem;letter-spacing:1px;text-transform:uppercase;font-family:Poppins,sans-serif}@media (max-width:991.98px){.primary-menu{max-width:100%}}@media (min-width:992px){.primary-menu{-ms-flex:0 0 auto;flex:0 0 auto;-ms-flex-positive:0;flex-grow:0}.primary-menu+.primary-menu{border-top:0}#primary-menu-trigger{display:none;opacity:0;z-index:0}.menu-container:not(.mobile-primary-menu){display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center}.menu-container>.menu-item:not(:first-child){margin-left:2px}.menu-item:not(:first-child){border-top:0}.menu-link{padding:39px 15px}}.slider-element{position:relative;width:100%;overflow:hidden}.slider-inner{position:absolute;overflow:hidden;opacity:1;visibility:visible;width:100%;height:100%;background-position:center center;background-repeat:no-repeat;background-size:cover}@media (max-width:991.98px){#slider{display:-ms-flexbox!important;display:flex!important;flex-direction:column;justify-content:center}#slider .slider-inner{position:relative;display:-ms-flexbox;display:flex;flex-grow:1;align-items:center}}.swiper_wrapper{position:relative;width:100%;overflow:hidden}.swiper_wrapper .swiper-container{position:absolute;width:100%;height:100%;margin:0}.swiper_wrapper .swiper-slide{position:relative;margin:0;overflow:hidden}.swiper-slide-bg{background-position:center center;background-repeat:no-repeat;background-size:cover}.swiper-slide-bg{position:absolute;width:100%;height:100%;z-index:-1;top:0;left:0}.slider-element .container{position:relative;height:100%}.slider-caption{position:relative;display:-ms-flexbox;display:flex;height:100%;flex-flow:column;justify-content:center;z-index:20;max-width:550px;color:#eee;font-size:1.375rem;font-weight:300;text-shadow:1px 1px 1px rgba(0,0,0,.15)}.slider-caption:not(.dark),.slider-caption:not(.dark) h2{color:#222;text-shadow:none}.slider-caption h2{font-size:4rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;line-height:1;margin-bottom:0}.slider-caption p{margin-top:30px;margin-bottom:10px;font-size:1.5rem}@media (max-width:991.98px){.swiper_wrapper .slider-caption h2{font-size:5.5vw}.swiper_wrapper .slider-caption p{font-size:2.6vw}}.slider-arrow-left,.slider-arrow-right{position:absolute;z-index:10;top:50%;left:0;background-color:rgba(0,0,0,.3);width:52px;height:52px;border:0;border-radius:0 3px 3px 0;transform:translateY(-50%)}.slider-arrow-right{left:auto;right:0;border-radius:3px 0 0 3px}.slider-arrow-left i,.slider-arrow-right i{line-height:50px;width:100%;height:100%;color:#ddd;color:rgba(255,255,255,.8);text-shadow:1px 1px 1px rgba(0,0,0,.1);font-size:34px;text-align:center}.button{display:inline-block;position:relative;outline:0;white-space:nowrap;margin:5px;padding:8px 22px;font-size:.875rem;line-height:24px;background-color:#1abc9c;color:#fff;font-weight:700;text-transform:uppercase;letter-spacing:1px;border:none;text-shadow:1px 1px 1px rgba(0,0,0,.2)}#gotoTop{display:none;z-index:599;position:fixed;width:40px;height:40px;background-color:#333;background-color:rgba(0,0,0,.3);font-size:1.25rem;line-height:36px;text-align:center;color:#fff;top:auto;left:auto;right:30px;bottom:50px;border-radius:2px}.stretched #gotoTop{bottom:30px}#footer{position:relative;background-color:#eee;border-top:5px solid rgba(0,0,0,.2)}@media (min-width:992px){.sticky-footer #slider:not(.slider-parallax-invisible){z-index:2}.sticky-footer #footer{position:sticky;top:auto;bottom:0;left:0}}#copyrights{padding:40px 0;background-color:#ddd;font-size:.875rem;line-height:1.8}.copyright-links a{display:inline-block;margin:0 3px;color:#333;border-bottom:1px dotted #444}.copyrights-menu{margin-bottom:10px}.copyrights-menu a{font-size:.875rem;margin:0 10px;border-bottom:0!important}#copyrights a:first-child{margin-left:0}.stretched #wrapper{width:100%;margin:0;box-shadow:none}.page-transition #wrapper{position:relative;opacity:0;-webkit-animation-fill-mode:both;animation-fill-mode:both}.dark,.dark h2{color:#eee}.dark .slider-caption:not(.not-dark),.dark .slider-caption:not(.not-dark) h2{color:#f7f7f7}#footer.dark{color:rgba(255,255,255,.75);background-color:#282828;border-top-color:rgba(255,255,255,.15)}.dark #copyrights{color:rgba(255,255,255,.4);background-color:rgba(0,0,0,.2)}.dark .copyright-links a{color:rgba(255,255,255,.4);border-bottom-color:rgba(255,255,255,.65)}@font-face{font-family:font-icons;src:url(canvas/css/fonts/font-icons.eot);src:url(canvas/css/fonts/font-icons.eot) format("embedded-opentype"),url(canvas/css/fonts/font-icons.woff) format("woff"),url(canvas/css/fonts/font-icons.ttf) format("truetype"),url(canvas/css/fonts/font-icons.svg) format("svg");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:lined-icons;src:url(fonts/lined-icons.eot);src:url(fonts/lined-icons.eot) format("embedded-opentype"),url(fonts/lined-icons.woff) format("woff"),url(fonts/lined-icons.ttf) format("truetype"),url(fonts/lined-icons.svg) format("svg");font-weight:400;font-style:normal}[class^=icon-],[class^=icon-line-]{display:inline-block;font-family:font-icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:inherit;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}[class^=icon-line-]{font-family:lined-icons}.icon-angle-left:before{content:"\e7a4"}.icon-angle-right:before{content:"\e7a5"}.icon-line-arrow-up:before{content:"\e914"}:root{--animate-duration:1s;--animate-delay:1s;--animate-repeat:1}[data-animate]:not(.animated){opacity:0}:root{--swiper-theme-color:#007aff}.swiper-container{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:flex;box-sizing:content-box}.swiper-wrapper{transform:translate3d(0,0,0)}.swiper-slide{flex-shrink:0;width:100%;height:100%;position:relative}:root{--swiper-navigation-size:44px}:root{--themecolor:#e7272d}.dark #copyrights,.dark .copyright-links a{color:rgba(255,255,255,.5)}@media (min-width:992px){#header.transparent-header #header-wrap::after{content:"";position:absolute;top:0;left:0;width:100%;height:calc(100% + 20px);z-index:-1;background-image:url(canvas/demos/restaurant/images/sketch-header.png)!important;background-color:transparent!important;background-repeat:repeat-x!important;background-position:center bottom!important;background-size:auto 100%!important}.slider-caption h2{font-size:76px}}body{font-family:open sans,sans-serif!important}</style>

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
                            <picture>
                                <source srcset="{{ asset('images/logos/logo.webp') }}" type="image/webp">
                                <source srcset="{{ asset('images/logos/logo-resize.jpg') }}" type="image/jpeg">
                                <img height="130" class="my-2" src="{{ asset('images/logos/logo-resize.jpg') }}" alt="HomeBakers.sg">
                            </picture>
                        </a>
                        <a href="/" class="retina-logo">
                            <picture>
                                <source srcset="{{ asset('images/logos/logo.webp') }}" type="image/webp">
                                <source srcset="{{ asset('images/logos/logo-resize.jpg') }}" type="image/jpeg">
                                <img height="130" class="my-2" src="{{ asset('images/logos/logo-resize.jpg') }}" alt="HomeBakers.sg">
                            </picture>
                        </a>
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
                            <li class="menu-item"><a class="button" id="typeform-button"
                                                     href="https://forms.gle/xmdT5rvnoeWQSjug8" rel="noreferrer"
                                                     style="display:inline-block;text-decoration:none;background-color:{{ $theme_primary_color }};color:white;cursor:pointer;font-family:'Poppins', sans-serif !important;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 22px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;"
                                                     target="_blank">Join Us </a></li>
{{--                            <li class="menu-item"><a class="button button-red cta-link menu-link color" href="javascript:void(0);"><div>Join Us</div></a></li>--}}
                        </ul>
                    </nav><!-- #primary-menu end -->
                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    @yield('content')

    @include('layouts.footer')
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-line-arrow-up"></div>

<link rel="preload" href="{{ asset('canvas/css/app.css') }}" as="style" onload="this.rel='stylesheet'">
<link rel="stylesheet" href="{{ asset('canvas/css/app.css') }}" type="text/css" />
@include('layouts.colors')
@include('layouts.fonts')
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

    @media(min-width:1024px) {
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
    @media(max-width: 1024px) {
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

    @media(max-width:1024px) {
        #page-title {
            padding: 5.1rem 0!important;
            background-color:#F2EADE;
        }
        #page-title h1 {
            color: {{ $theme_primary_color }};
        }
        #page-title .container span {
            display:none!important;
        }

        nav.primary-menu {
            border-top: none;
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

        .primary-menu {
            order: 4;
        }

        #typeform-button {
            margin-top: 14px!important;
        }
    }

    @media (max-width: 425px) {
        #page-title {
            padding: 2.1rem 0!important;
            background-color:#F2EADE;
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

    .page-item.active .page-link, .page-link:focus, .page-link:hover {
        border-color: {{ $theme_primary_color }}!important;
    }

    #footer {
        padding: 20px 0 22px;
        background-color: {{ $footer_background_theme_color }};
        border-top:0;
    }

    #footer,
    .copyright-links a {
        color: {{ $footer_background_text_color }};
    }

    .copyright-links a:hover {
        color:{{ $theme_primary_color }};
    }

    .page-link, .page-link:focus, .page-link:hover {
        border-color:{{ $theme_primary_color }};
    }

    @media(min-width:320px) {
        #welcome-text {
            font-size: 35px;;
        }
        #slider-divider {
            display:none;
        }
    }

    @media(min-width:425px) {
        #welcome-text {
            font-size: 44px;;
        }
    }

    @media(min-width:768px) {
        #welcome-text {
            font-size: 56px;
        }
    }

    @media(min-width: 992px) {
        #logo {
            order: 0;
        }
    }

    @media(min-width:1024px) {
        #slider-divider {
            display:block;
        }

        #header.transparent-header #header-wrap::after {
            display:none!important;
        }
        #header.sticky-header #header-wrap,
        #header.transparent-header, #header.transparent-header:not(.sticky-header) #header-wrap {
            background-color:white!important;
            box-shadow: 1px 1px 10px #E5E5E5;
        }
    }
</style>
<style>
    @if ($global_custom_css)
      {!! $global_custom_css !!}
    @endif
</style>
@yield('page-custom-css')

<!-- JavaScripts
============================================= -->
<script defer src="{{ asset('canvas/js/jquery.js') }}"></script>
<script defer src="{{ asset('canvas/js/plugins.min.js') }}"></script>

<!-- For Countdown -->
<script defer src="{{ asset('canvas/js/components/moment.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script defer src="{{ asset('canvas/js/functions.js') }}"></script>
<script defer src="{{ asset('js/homepage.js') }}"></script>
<script>
    document.getElementById('footer-typeform-button').addEventListener('click', function(){
        document.getElementById('typeform-button').click();
    });
</script>
@yield('page-js')
</body>
</html>
