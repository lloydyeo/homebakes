<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Cookie|Open+Sans:400,600,700,800,900|Poppins:300,400,500,600,700|Playfair+Display:400,400i,700,700i,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('canvas/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('canvas/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('canvas/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('canvas/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('canvas/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('canvas/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('canvas/css/custom.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('canvas/css/swiper.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('canvas/one-page/css/et-line.css') }}" type="text/css" />

	<!-- restaurant Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('canvas/demos/restaurant/restaurant.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/demos/restaurant/css/fonts.css') }}" type="text/css" />
	<!-- / -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <style>
        #search-all::placeholder {
            color:white!important;
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

        @media (min-width: 768px) {
            .recipe-category {
                flex: 0 0 calc(50% - 20px);
                max-width: calc(50% - 20px);
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
	<!-- Document Title
	============================================= -->
	<title>HomeBakers</title>

</head>

<body class="stretched sticky-footer page-transition" data-loader-html="<span class='pizza'> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> </span>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="col-auto mr-lg-0 order-lg-2">
							<a href="javascript:void(0);" class="standard-logo">
                                <img class="my-2" src="{{ asset('images/logos/logo.png') }}" alt="Home Bakers"></a>
							<a href="javascript:void(0);" class="retina-logo">
                                <img class="my-2" src="{{ asset('images/logos/logo.png') }}" alt="Home Bakers"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu col-lg-4 order-lg-1">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="javascript:void(0);"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="javascript:void(0);"><div>About</div></a></li>
{{--								<li class="menu-item"><a class="menu-link" href="demo-restaurant-menu.html"><div>Menu</div></a></li>--}}
							</ul>

						</nav>

						<nav class="primary-menu col-lg-4 order-lg-3">

							<ul class="menu-container justify-content-lg-end">
{{--								<li class="menu-item"><a class="menu-link" href="demo-restaurant-gallery.html"><div>Gallery</div></a></li>--}}
								<li class="menu-item"><a class="menu-link" href="javascript:void(0);"><div>Blog</div></a></li>
								<li class="menu-item"><a class="menu-link color" href="javascript:void(0);"><div>Contact Us</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-effect="fade" data-autoplay="6000" data-speed="1400">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="container dark">
								<div class="slider-caption">
									<div>
										<h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn">Freshly Baked Treats</h2>
										<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400">Discover from our list of home bakers to satisfy your cravings now!</p>

                                        <div class="input-group form-group mt-5" style="box-shadow:0 0 30px 4px rgb(0 0 0 / 80%);" data-animate="fadeIn" data-delay="800">
                                            <input id="search-all" class="pl-3 form-control-pill text-white font-weight-bold
                                            form-control form-control-plaintext border-0"
                                                       type="text" name="search" value="" placeholder="Search by name or location..." />
                                            <div class="input-group-append" style="height:fit-content;">
                                                <span class="input-group-text bg-color text-white">
                                                    <i class="icon-line-search"></i>
                                                </span>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('{{ asset('images/homebaker-coming-soon.jpg') }}');"></div>
						</div>
					</div>

					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>

				</div>

			</div>
		</section>
		<!-- Content
		============================================= -->
		<section id="content">

			<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('{{ asset('canvas/demos/restaurant/images/sketch.png') }}') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

			<div class="" style="overflow: visible;">

                <div id="categories-section" class="section mt-2 mb-2 bg-transparent">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 center">
                                <h2 style="font-size: 56px;" class="font-secondary nott text-title-light text-dark mb-5 ls1 text-uppercase">Welcome to HomeBakers!</h2>
                                <p style="font-size: 17px; color: #777"></p>
                            </div>
                            <div class="col-12 mb-3">
                                <h3 class="center">What are you craving?</h3>

                                <div class="recipe-categories justify-content-center">
                                    <a href="javascript:void(0);" data-animate="fadeInUp" class="recipe-category" style="background-image: url('{{ asset('images/categories/cheescake.jpg') }}');">
                                        <div class="recipe-category-inner">
                                            <div class="recipe-category-icon"><img src="{{ asset('canvas/demos/recipes/images/icons/desserts.svg') }}" alt="Cheesecake"></div>
                                            <div class="recipe-category-info">Cakes</div>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0);" data-animate="fadeInUp" data-delay="200" class="recipe-category" style="background-image: url('{{ asset('canvas/demos/recipes/images/categories/desserts.jpg') }}');">
                                        <div class="recipe-category-inner">
                                            <div class="recipe-category-icon"><img src="{{ asset('canvas/demos/recipes/images/icons/desserts.svg') }}" alt="Muffins"></div>
                                            <div class="recipe-category-info">Muffins</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div id="news-section" style="background: #FFF url('{{ asset('canvas/demos/restaurant/images/sections/7.jpg') }}') no-repeat top right; background-size: 100% auto; padding-top: 50px">
                    <div class="container clearfix">

                        <div class="heading-block center border-bottom-0">
                            <span class="font-primary ls1" style="font-size: 14px; color: #AAA">Our Latest News</span>
                            <h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.2;">News Feed</h3>
                        </div>

                        <div class="row posts-md col-mb-30 mb-0">

                            <div class="col-lg-4 col-md-12">
                                <div class="entry">
                                    <div class="entry-image mb-0">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('canvas/demos/restaurant/images/blogs/1.jpg') }}" alt="Image 1"></a>
                                    </div>
                                    <div class="entry-title mt-0 p-4 title-xs nott">
                                        <div class="entry-meta mt-0 mb-2">
                                            <ul>
                                                <li><a href="#">08th Apr 2021</a></li>
                                                <li><a href="#">List</a></li>
                                            </ul>
                                        </div>

                                        <h2 class="mb-0"><a href="javascript:void(0);">Top 10 Bakers with Savoury Additions</a></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="entry">
                                    <div class="entry-image mb-0">
                                        <a href="demos/restaurant/images/blogs/2.jpg" data-lightbox="image">
                                            <img src="{{ asset('canvas/demos/restaurant/images/blogs/2.jpg') }}" alt="Image 2"></a>
                                    </div>
                                    <div class="entry-title mt-0 p-4 title-xs nott">
                                        <div class="entry-meta mt-0 mb-2">
                                            <ul>
                                                <li><a href="#">21st Mar 2021</a></li>
                                                <li><a href="#">List</a></li>
                                            </ul>
                                        </div>

                                        <h2 class="mb-0"><a href="javascript:void(0);">Bakers serving IG-worthy treats & pastries</a></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="entry">
                                    <div class="entry-image mb-0">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('canvas/demos/restaurant/images/blogs/3.jpg') }}" alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title mt-0 p-4 title-xs nott">
                                        <div class="entry-meta mt-0 mb-2">
                                            <ul>
                                                <li><a href="#">10th Feb 2021</a></li>
                                                <li><a href="#">Opinion</a></li>
                                            </ul>
                                        </div>

                                        <h2 class="mb-0"><a href="javascript:void(0);">3 reasons why you should try out home bakers for your next order</a></h2>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="button button-3d button-mini button-rounded button-brown">Read All Articles</a>
                        </div>

                    </div>
                </div>

				<div class="section mb-0 pt-0 bg-white">
					<div class="heading-block center mb-0 border-bottom-0">
{{--						<span class="font-primary ls1" style="font-size: 14px; color: #AAA">Sweet &amp; Sexy</span>--}}
                        <span class="font-primary ls1" style="font-size: 14px; color: #AAA"></span>
						<h3 class="nott font-secondary ls0" style="font-size: 60px;line-height: 1.3;">Trending Bakers</h3>
					</div>
				</div>
                <style>
                    .food-price {
                        display:none!important;
                    }

                    .owl-carousel .owl-item img {
                        width:44%;
                        margin-left:auto;
                        margin-right:auto;
                    }
                </style>
				<div id="featured-section" class="section dessert-menu m-0 p-0">
					<div class="container-fluid">

						<div class="row align-items-stretch clearfix">
							<div class="col-lg-5" style="background-color: #FFF; padding: 0; box-shadow: -4px 1px 15px 3px rgba(0,0,0,0.07);">
								<div id="dessert-menu-carousel" class="menu-carousel owl-carousel image-carousel carousel-widget customjs">
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/1.jpg') }}" alt="Image 1">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Chocolate Cupcakes.</h3>
												<div class="food-info">Chocolate, Caramel, Hazelnut, Coffee, Strawberry</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;19.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/2.jpg') }}" alt="Image 2">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Caramel Cake.</h3>
												<div class="food-info">Egg, Caramel</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;11.59</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/3.jpg') }}" alt="Image 3">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Choco Strawberry Waffle.</h3>
													<div class="food-info">Strawberry, Chocolate Syrup, Vanilla Icecream</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;8.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/4.jpg') }}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Tuffle Cake.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;22.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/5.jpg') }}" alt="Image 1">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Chocolate Croissant.</h3>
													<div class="food-info">Chocolate Syrup</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;19.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur. Holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/6.jpg') }}" alt="Image 2">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Delicious Cookies.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;14.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/7.jpg') }}" alt="Image 3">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Strawberry Pastry.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;11.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/8.jpg') }}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Fruity Bowl.</h3>
													<div class="food-info">Fruits, Yogurt, Strawberries, Banana, Cherries</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;33.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{ asset('canvas/demos/restaurant/images/items/desserts/9.jpg') }}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Jelly Cake.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;7.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="javascript:void(0);" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-7 clearfix">
								<div class="vertical-middle">
									<div class="col-padding clearfix">
										<div><div id="item-thumb1" class="item-thumb"></div></div>
										<div class="center mx-auto"><a class="button button-border button-small button-brown button-circle ml-0" style="margin-top: 0px;">See All Menu</a></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="clear"></div>

				<div class="section mb-0" style="display:none!important; padding: 80px 0; background: #F5F5F5 url('demos/restaurant/images/food-pattern.png') repeat center center;">
					<div class="container clearfix">

						<div class="heading-block center border-bottom-0">
							<span class="font-primary ls1" style="font-size: 14px; color: #AAA">Expert &amp; Skillful</span>
							<h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.3;">Our Chefs</h3>
						</div>

						<div class="row clearfix">

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="demos/restaurant/images/chefs/1.jpg" alt="John Doe"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Fig Nelson</h4>
											<span>Chef</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum dolor sequi quaerat, deleniti beatae ratione.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="demos/restaurant/images/chefs/2.jpg" alt="Josh Clark"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Josh Clark</h4>
											<span>Chef</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore eveniet magnam nam, atqu.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="demos/restaurant/images/chefs/3.jpg" alt="Mary Jane"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Mary Jane</h4>
											<span>Manager</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis cum minima mollitia, velit.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="demos/restaurant/images/chefs/4.jpg" alt="Nix Maxwell"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Nix Maxwell</h4>
											<span>Staff</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolore ipsam nemo, similique.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div style="display:none!important;" class="container section-contact topmargin-lg clearfix">
					<div class="row clearfix">

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-map"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Contact</h3>
							<span class="font-primary">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</span>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clock"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
							<span class="font-primary">Sun - Thu | 07:00 - 23:00 Hours<br>
							Fri - Sat | 08:00 - 01:00 Hours</span>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clipboard"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Reservation</h3>
							<span class="font-primary"><strong>Mobile: </strong>+62-111-222-333<br>
							<strong>Fax: </strong>(+62)-11-4752-1433</span>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-heart"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Social Contact</h3>
							<div style="display: flex; justify-content: center">
								<a href="#" class="social-icon si-borderless si-facebook">
									<i class="icon-line2-social-facebook"></i>
									<i class="icon-line2-social-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-twitter">
									<i class="icon-line2-social-twitter"></i>
									<i class="icon-line2-social-twitter"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-youtube">
									<i class="icon-line2-social-youtube"></i>
									<i class="icon-line2-social-youtube"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-email3">
									<i class="icon-line2-envelope"></i>
									<i class="icon-line2-envelope"></i>
								</a>
							</div>
						</div>

					</div>
				</div>

			</div>

		</section><!-- #content end -->

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
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Contact</a>
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
