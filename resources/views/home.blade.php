@extends ('layouts.app')

@section('page-css')
    <style>
        @media (max-width: 425px) {
            .slider-caption h2 {
                text-align: center;
                font-size: 12.5vw !important;
                text-shadow: 2px 2px 12px rgba(0, 0, 0, 1.0) !important;
            }

            .slider-caption p {
                text-align: center;
                font-size: 5vw !important;
                display: block !important;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 1.0);
            }
        }
    </style>
@endsection

@section('title', 'Home')

@section('content')
    @php $hero_title = $homepage->where('field', 'hero_title')->first(); $hero_title = $hero_title ? $hero_title->value : ''; @endphp
    @php $hero_description = $homepage->where('field', 'hero_description')->first(); $hero_description = $hero_description ? $hero_description->value : ''; @endphp

    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-effect="fade"
             data-autoplay="6000" data-speed="1400">
        <div class="slider-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container dark">
                            <div class="slider-caption">
                                <div>
                                    <h2 class="font-secondary ls0 nott" data-animate="fadeIn">{{ $hero_title }}</h2>
                                    <p class="d-none d-sm-block d-lg-block font-primary" data-animate="fadeIn"
                                       data-delay="400">{{ $hero_description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg"
                             style="background-image: url('{{ asset('images/homebaker-splash.jpg') }}'),url('{{ asset('images/homebaker-coming-soon.webp') }}');"></div>
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

        @if(false)
        <div class="hero-section section mb-0 mt-0" style="background:#FFF;">
            <div class="container clearfix d-flex">
                <div style="flex:1;">
                    <h2 class="color font-secondary nott text-uppercase ls-1">{{ $hero_title }}</h2>
                    <div>
                        {!! $hero_description !!}
                    </div>
                    <a class="button">
                        Shop Now
                    </a>
                </div>
                <div class="ml-6" style="flex:1;">
                    <h2 class="color font-secondary nott text-center text-uppercase ls-1">Home Baked Collection</h2>
                </div>
            </div>
        </div>
        @endif

        <div class="featured-bakers-section section mb-0 mt-0">
            <div class="container clearfix">
                <h2 class="color text-uppercase ls-1 text-center text-white">Our Featured Bakers</h2>
                <div class="row">
                    <div id="oc-testi" class="owl-carousel carousel-widget"
                         data-pagi="false" data-loop="true"
                         data-margin="20" data-items-lg="3"
                         data-items-xl="3" data-items-md="2" data-items-sm="1" data-items-xs="1">
                        @foreach($shops as $shop)
                            <div class="text-center oc-item m-2">
                                <a href="{{ route('shop.showShop', ['shop' => $shop->slug]) }}">
                                    <img class="rounded shop-cover-image" src="{{ Storage::disk('s3')->url($shop->cover_image) }}" alt="{{ $shop->name }}" />
                                </a>
                                <h4 class="color my-3">{{ $shop->name }}</h4>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            @if(false)
            <div class="row justify-content-center col-mb-50 d-flex">
                @foreach($shops as $shop)
                    <div class="col-lg-4 text-center">
                        <a href="{{ route('shop.showShop', ['shop' => $shop->slug]) }}">
                            <img class="rounded-3 shop-cover-image" src="{{ Storage::disk('s3')->url($shop->cover_image) }}" alt="{{ $shop->name }}" />
                        </a>
                        <h3 class="color my-3">{{ $shop->name }}</h3>
                    </div>
                @endforeach
            </div>
            @endif
        </div>

        <div class="why-buy-from-us-section section mb-0 mt-0" style="background-color:#fff;">
            <div class="container clearfix">
                <h2 class="text-uppercase ls-1 text-center text-black">
                    Why buy from us?
                </h2>
                <div class="row">
                    @for($i=0;$i<3;$i++)
                        <div class="col-md-4">
                            <div class="feature-box fbox-center fbox-plain px-4 py-5 rounded-lg bg-white mx-0">
                                <div class="fbox-icon mb-2">
                                    <a href="javascript:void(0);">
                                        <img src="{{ isset($homepage) && $homepage->where('field', 'why_buy_from_us_image_' . $i)->first() ? Storage::disk('s3')->url($homepage->where('field', 'why_buy_from_us_image_' . $i)->first()->value) : 'https://via.placeholder.com/150' }}"
                                             alt="{{ isset($homepage) && $homepage->where('field', 'why_buy_from_us_title_' . $i)->first() ? $homepage->where('field', 'why_buy_from_us_title_' . $i)->first()->value : 'Home Bakers' }}" />
{{--                                        <i class="icon-line-layers"></i>--}}
                                    </a>
                                </div>
                                <div class="fbox-content">
                                    <h3>{{ isset($homepage) && $homepage->where('field', 'why_buy_from_us_title_' . $i)->first() ? $homepage->where('field', 'why_buy_from_us_title_' . $i)->first()->value : 'Home Bakers' }}</h3>
                                    <p class="my-3">
                                        {{ isset($homepage) && $homepage->where('field', 'why_buy_from_us_description_' . $i)->first() ? $homepage->where('field', 'why_buy_from_us_description_' . $i)->first()->value : 'Home Bakers' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>


        </div>

        <div class="counter-section section mb-0 mt-0">
            <div class="container clearfix">
                <div class="row justify-content-between col-mb-50">
                    <div class="col-6 col-lg-4 text-center">
                        <div class="counter color font-primary ls1"><span data-from="0"
                                                                          data-to="{{ isset($homepage) && $homepage->where('field', 'num_homebakers')->first() ? $homepage->where('field', 'num_homebakers')->first()->value : '0' }}"
                                                                          data-refresh-interval="100"
                                                                          data-speed="2000"></span></div>
                        <h5 class="mb-0 text-smaller text-black-50">Home Bakers</h5>
                    </div>
                    <div class="col-6 col-lg-4 text-center">
                        <div class="counter color font-primary ls1"><span data-from="0"
                                                                          data-to="{{ isset($homepage) && $homepage->where('field', 'num_products')->first() ? $homepage->where('field', 'num_products')->first()->value : '0' }}"
                                                                          data-refresh-interval="200" data-speed="2500"></span></div>
                        <h5 class="mb-0 text-smaller text-black-50">Products</h5>
                    </div>
                    <div class="col-6 col-lg-4 text-center">
                        <div class="counter color font-primary ls1"><span data-from="0"
                                                                          data-to="{{ isset($homepage) && $homepage->where('field', 'num_sales')->first() ? $homepage->where('field', 'num_sales')->first()->value : '0' }}"
                                                                          data-refresh-interval="2" data-speed="1000"></span></div>
                        <h5 class="mb-0 text-smaller text-black-50">Sales</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta-section section my-0 bg-white">
            <div class="container clearfix d-flex">
                @php $join_us_img = $homepage->where('field', 'join_us_image')->first() ? Storage::disk('s3')->url($homepage->where('field', 'join_us_image')->first()->value) : 'https://via.placeholder.com/600x300'; @endphp
                @php $join_us_title = $homepage->where('field', 'join_us_title')->first() ? $homepage->where('field', 'join_us_title')->first()->value : ''; @endphp
                @php $join_us_description = $homepage->where('field', 'join_us_description')->first() ? $homepage->where('field', 'join_us_description')->first()->value : ''; @endphp
                <div style="flex:1;" class="d-flex align-items-center join-us-image-container">
                    <img src="{{ $join_us_img }}" alt="{{ $join_us_title }}" />
                </div>
                <div class="ml-6" style="flex:1;">
                    <h2 class="color nott text-uppercase ls-1">{{ $join_us_title }}</h2>
                    <div>
                        {!! $join_us_description !!}
                    </div>
                </div>
            </div>
        </div>

        @if (false)
        <div id="slider-divider"  style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('{{ asset('canvas/demos/restaurant/images/sketch.png') }}') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>
        @endif

        {{--    Blog + Old Dessert Menu    --}}
        @if(false)
        <div style="overflow: visible;">
            <div id="news-section" style="background: #FFF; background-size: 100% auto; padding-top: 50px">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 center">
                            <span id="welcome-text"
                                class="color font-secondary nott text-title-light text-dark mb-5 ls1 text-uppercase">
                                Welcome to HomeBakers.sg!</span>
                            <p style="font-size: 17px; color: #777"></p>
                        </div>
                    </div>

                    <div class="heading-block center border-bottom-0">
                        <span class="font-primary ls1" style="color: #AAA">Our Latest News</span>
                        <h2 class="nott ls0" style="line-height: 1.2;">News Feed</h2>
                    </div>

                    <div class="row posts-md col-mb-30 mb-0">
                        @foreach ($articles as $article)
                            <div class="col-lg-4 col-md-12">
                                <div class="entry">
                                    <div class="entry-image mb-0">
                                        <a href="/blog/{{ $article->slug }}">
                                            <picture>
                                                @if ($article->cover_image_webp)
                                                    <source
                                                        srcset="{{ Storage::disk('s3')->url($article->cover_image_webp) }}"
                                                        type="image/webp"/>
                                                @endif

                                                @if ($article->cover_image_resized)
                                                    <source
                                                        srcset="{{ Storage::disk('s3')->url($article->cover_image_resized) }}"
                                                        type="image/jpeg"/>
                                                    <img height="265" class="my-2"
                                                         src="{{ Storage::disk('s3')->url($article->cover_image_resized) }}"
                                                         alt="{{ $article->title }}"/>
                                                @else
                                                    <source
                                                        srcset="{{ Storage::disk('s3')->url($article->cover_image) }}"
                                                        type="image/jpeg"/>
                                                    <img height="265" class="my-2"
                                                         src="{{ Storage::disk('s3')->url($article->cover_image) }}"
                                                         alt="{{ $article->title }}"/>
                                                @endif

                                            </picture>
                                        </a>
                                    </div>
                                    <div class="entry-title mt-0 p-4 title-xs nott">
                                        <div class="entry-meta mt-0 mb-2">
                                            <ul>
                                                <li>
                                                    <a href="/blog/{{ $article->slug }}">{{ $article->created_at->format('d F Y') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-0"><a href="/blog/{{ $article->slug }}">{{ $article->title }}</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-4">
                    <a href="{{ route('blog.index') }}"
                       class="button button-3d button-mini button-rounded">Read All Articles</a>
                </div>
            </div>
        </div>
        <div class="section mb-0" style="background:#FFF;">
            <div class="heading-block center mb-0 border-bottom-0">
                <span class="font-primary ls1" style="font-size: 14px; color: #AAA">Not sure what to get?</span>
                <h3 class="nott font-secondary ls0 color" style="font-size: 60px;line-height: 1.3;">Featured Home Bakers</h3>
            </div>
        </div>
        <div class="section dessert-menu m-0 p-0">
            <div class="container-fluid">

                <div class="row align-items-stretch clearfix">
                    <div class="col-lg-5" style="background-color: #FFF; padding: 0; box-shadow: -4px 1px 15px 3px rgba(0,0,0,0.07);">
                        <div id="dessert-menu-carousel" class="menu-carousel owl-carousel image-carousel carousel-widget customjs">

                            @foreach ($shops as $shop)
                                <div class="oc-item">
                                    <img height="250" width="250" style="object-fit: contain;" class="topmargin-sm" src="{{ Storage::disk('public')->url($shop->cover_image) }}" alt="{{ $shop->name }}">
                                    <div class="food-content clearfix">
                                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
                                            <div class="heading-block border-bottom-0 mb-0">
                                                <h3 class="font-secondary nott">{{ $shop->name }}</h3>
{{--                                                <div class="food-info">Chocolate, Caramel, Hazelnut, Coffee, Strawberry</div>--}}
                                            </div>
{{--                                            <div class="food-price color font-primary mt-3">&dollar;19.99</div>--}}
                                        </div>
                                        @if ($shop->description)
                                        <p class="mb-0">{!! nl2br($shop->description) !!}</p>
                                        @endif
{{--                                        <a style="display:none!important;" href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-7 clearfix" style="background:#F7F5F0;">
                        <div class="vertical-middle">
                            <div class="col-padding clearfix">
                                <div><div id="item-thumb1" class="item-thumb"></div></div>
{{--                                <div class="center mx-auto"><a class="button button-border button-small button-black button-dark button-circle ml-0" style="margin-top: 0px;">See All Menu</a></div>--}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endif
        </div>

    </section><!-- #content end -->
@endsection

@section('page-custom-css')
    <style>
        @foreach ($shops as $shop)
            .dessert-menu .item-thumb .owl-dot:nth-of-type({{ $loop->iteration }}) span {
                background-image: url('{{ Storage::disk('public')->url($shop->cover_image) }}');
                background-size: 150px 150px;
                background-repeat: no-repeat;
                background-color:#fff;
            }
        @endforeach
    </style>
    <style>
        .hero-section .button {
            margin-left: 0;
            border-radius: 50px;
            margin-top: 2em;
        }
        .fbox-icon {
            width:50%;
            height:50%;
        }
        .join-us-image-container > img {
            width:100%!important;
            max-height:300px!important;
            object-fit: cover;
            object-position: center;
        }
        .shop-cover-image {
            max-height:250px;
            width: 90%;
            object-fit: contain;
            object-position: center;
            box-shadow: 3px 3px 10px #d5d5d5;
            background-color:white;
            padding:30px;
        }
        .shop-cover-image:hover {
        }

        .shop-cover-image.rounded {
            border-radius:1em!important;
        }

        .slider-arrow-left,
        .slider-arrow-right {
            display:none!important;
        }
    </style>
@endsection
