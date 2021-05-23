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
                        <div class="swiper-slide-bg" style="background-image: url('{{ asset('images/homebaker-splash.jpg') }}'),url('{{ asset('images/homebaker-coming-soon.webp') }}');"></div>
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
                                            <picture>
                                                @if ($article->cover_image_webp)
                                                    <source srcset="{{ Storage::disk('s3')->url($article->cover_image_webp) }}" type="image/webp">
                                                @endif

                                                @if ($article->cover_image_resized)
                                                    <source srcset="{{ Storage::disk('s3')->url($article->cover_image_resized) }}" type="image/jpeg">
                                                    <img height="265" class="my-2" src="{{ Storage::disk('s3')->url($article->cover_image_resized) }}" alt="{{ $article->title }}">
                                                @else
                                                    <source srcset="{{ Storage::disk('s3')->url($article->cover_image) }}" type="image/jpeg">
                                                    <img height="265" class="my-2" src="{{ Storage::disk('s3')->url($article->cover_image) }}" alt="{{ $article->title }}">
                                                @endif

                                            </picture>
{{--                                            <img height="265" src="{{ Storage::disk('s3')->url($article->cover_image) }}" alt="{{ $article->title }}"></a>--}}
                                    </div>
                                    <div class="entry-title mt-0 p-4 title-xs nott">
                                        <div class="entry-meta mt-0 mb-2">
                                            <ul>
                                                <li><a href="/blog/{{ $article->slug }}">{{ $article->created_at->format('d F Y') }}</a></li>
                                            </ul>
                                        </div>

                                        <h2 class="mb-0"><a href="/blog/{{ $article->slug }}">{{ $article->title }}</a></h2>
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

        </div>

    </section><!-- #content end -->
@endsection
