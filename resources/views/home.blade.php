@extends ('layouts.app')

@section('page-css')
    <style>
        @media(max-width: 425px) {
            .slider-caption h2 {
                text-align: center;
                font-size: 12.5vw!important;
                text-shadow: 2px 2px 12px rgba(0, 0, 0, 1.0)!important;
            }
            .slider-caption p {
                text-align: center;
                font-size: 5vw!important;
                display: block!important;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 1.0);
            }
        }
    </style>
@endsection

@section('title', 'Home')

@section('content')
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
                                    <p class="d-none d-sm-block d-lg-block font-primary" data-animate="fadeIn" data-delay="400">Discover from our list of home bakers to satisfy your cravings now!</p>

                                    {{--                                    <div class="input-group form-group mt-5" style="box-shadow:0 0 30px 4px rgb(0 0 0 / 80%);" data-animate="fadeIn" data-delay="800">--}}
                                    {{--                                        <input id="search-all" class="pl-3 form-control-pill text-white font-weight-bold--}}
                                    {{--                                            form-control form-control-plaintext border-0"--}}
                                    {{--                                               type="text" name="search" value="" placeholder="Search by name or location..." />--}}
                                    {{--                                        <div class="input-group-append" style="height:fit-content;">--}}
                                    {{--                                                <span class="input-group-text bg-color text-white">--}}
                                    {{--                                                    <i class="icon-line-search"></i>--}}
                                    {{--                                                </span>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
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

        <div style="overflow: visible;">

            <div id="news-section" style="background: #FFF; background-size: 100% auto; padding-top: 50px">
                <div class="container clearfix">

                    <div class="row">
                        <div class="col-md-8 offset-md-2 center">
                            <h2 style="font-size: 56px;" class="color font-secondary nott text-title-light text-dark mb-5 ls1 text-uppercase">Welcome to HomeBakers.sg!</h2>
                            <p style="font-size: 17px; color: #777"></p>
                        </div>
                    </div>

                    <div class="heading-block center border-bottom-0">
                        <span class="font-primary ls1" style="font-size: 14px; color: #AAA">Our Latest News</span>
                        <h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.2;">News Feed</h3>
                    </div>

                    <div class="row posts-md col-mb-30 mb-0">
                        @foreach ($articles as $article)
                            <div class="col-lg-4 col-md-12">
                                <div class="entry">
                                    <div class="entry-image mb-0">
                                        <a href="/blog/{{ $article->slug }}">
                                            <img src="{{ Storage::disk('s3')->url($article->cover_image) }}" alt="{{ $article->title }}"></a>
                                    </div>
                                    <div class="entry-title mt-0 p-4 title-xs nott">
                                        <div class="entry-meta mt-0 mb-2">
                                            <ul>
                                                <li><a href="/blog/{{ $article->slug }}">{{ $article->created_at->format('d F Y') }}</a></li>
                                            </ul>
                                        </div>

                                        <h2 class="mb-0"><a href="/blog/{{ $article->slug }}">{!! !$article->title !!}</a></h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <a href="{{ route('blog.index') }}" class="button button-3d button-mini button-rounded button-brown">Read All Articles</a>
                    </div>

                </div>
            </div>

            <div style="display:none!important;" id="categories-section" class="section mt-2 mb-2 bg-transparent">
                <div class="container">
                    <div class="row">
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

            <div class="section mb-0 pt-0 bg-white" style="display:none!important;">
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
            <div  style="display:none!important;" id="featured-section" class="section dessert-menu m-0 p-0">
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
@endsection
