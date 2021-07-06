@extends ('layouts.app')

@section('page-css')
    <style>
        .block-portfolio-single-grid .portfolio-single-content h2 {
            font-size: 1.75rem;
        }
        @media (min-width: 992px) {
            .block-portfolio-single-grid .content-wrap { overflow: inherit; }

            .block-portfolio-single-grid .portfolio-single-content.content-sticky {
                position: -webkit-sticky;
                position: sticky;
                top: 60px;
                height: 100%;
            }

            .block-portfolio-single-grid .portfolio-meta {
                font-size: .925rem;
            }

            .block-portfolio-single-grid .portfolio-meta li {
                margin-bottom: 14px
            }

            /*.instagram-feed .instagram-media,*/
            /*.grid-item {*/
            /*    height: 600px!important;*/
            /*}*/
        }
    </style>
@endsection

@section('title', $shop->name)

@section('content')
    <!-- Content
		============================================= -->
    <section id="content" style="background-color:#fff;">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ Storage::disk('s3')->url($shop->cover_image) }}" alt="{{ $shop->name }}" />
                    </div>
                    <div class="col-lg-8">
                        <h2 class="color">{{ $shop->name }}</h2>
                        <div class="d-flex">
                            <div class="d-flex align-items-start pr-4 color" style="font-size:2em;">
                                <i class="icon-quote-left1"></i>
                            </div>
                            <p style="color:#3C271D;" class="py-4">{!! nl2br($shop->description) !!}</p>
                            <div class="d-flex align-items-end pr-4 py-4 my-4 color" style="font-size:2em;">
                                <i class="icon-quote-right1"></i>
                            </div>
                        </div>
                    </div>
                </div>

                @if(false)
                <div class="row gutter-50">

                    <div class="offset-1 col-lg-4 portfolio-single-image">
                        <!-- Portfolio Single Image
                        ============================================= -->
                        <div class="masonry-thumbs grid-container masonry-gap-xl grid-1 grid-md-2" data-lightbox="gallery">
                            @foreach ($product_images as $product_image)
                                <a href="{{ Storage::disk('s3')->url($product_image->image) }}" data-lightbox="gallery-item" class="grid-item">
                                    <img style="object-position: center;"
                                         class="rounded-xxl"
                                         src="{{ Storage::disk('s3')->url($product_image->image) }}" alt="{{ $shop->name }}">
                                </a>
                            @endforeach
                        </div><!-- .portfolio-single-image end -->

                    </div>

                    <!-- Portfolio Single Content
                    ============================================= -->
                    <div class="col-lg-6 portfolio-single-content content-sticky">

                        <!-- Portfolio Single - Description
                        ============================================= -->
                        <div class="d-flex flex-row align-items-center mb-3">
                            <img height="75" src="{{ Storage::disk('s3')->url($shop->cover_image) }}" alt="{{ $shop->name }}" />
                            <h2 class="font-secondary color pl-2">{{ $shop->name }}</h2>
                        </div>
                        <p style="color:#3C271D;">{!! nl2br($shop->description) !!}</p>
                        <!-- Portfolio Single - Description End -->

                        <div style="border-top-color:#3C271D;" class="line my-5"></div>

                        <!-- Portfolio Single - Meta
                        ============================================= -->
                        <ul class="portfolio-meta bottommargin">
                            <li><span><i class="icon-instagram"></i>Instagram:</span> <a href="{{ $shop->instagram_url }}" target="_blank">{{ $shop->instagram_url }}</a></li>
                        </ul>
                        <!-- Portfolio Single - Meta End -->
                        <div style="border-top-color:#3C271D;" class="line my-5"></div>

                    </div><!-- .portfolio-single-content end -->

                </div>
                @endif
            </div>
        </div>

        <div class="best-seller-section section mb-0 mt-0">
            <div class="container clearfix">
                <h2 class="text-uppercase text-center color">Best Sellers</h2>
                <div class="row">
                    @foreach ($product_images as $product_image)
                        <div class="col-lg-4">
                            <a href="{{ route('shop.showProduct', ['product' => $product_image->id]) }}" data-lightbox="gallery-item" class="grid-item">
                                <img class="rounded-xxl" src="{{ Storage::disk('s3')->url($product_image->image) }}" alt="{{ $shop->name }}">
                            </a>
                            <h4 class="text-center color my-3">{{ $product_image->product_name ? $product_image->product_name  : '' }}</h4>
                            <h4 class="text-center color mb-3 ">${{ number_format($product_image->product_price, 2) }}</h4>
                            <div class="text-center mb-5">{!! nl2br($product_image->product_description) !!}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section><!-- #content end -->


@endsection

@section('page-js')
@endsection

@section('page-custom-css')
    <style>
        .portfolio-single-content h2 {
            font-weight:900!important;
            font-size: 1.5rem;
        }
        .section {
            position: relative;
            width: 100%;
            background-color: rgb(249, 249, 249);
            margin: 60px 0px;
            padding: 60px 0px;
            overflow: hidden;
        }
        .section h2 {
            color:black;
        }
        .grid-item > img, .grid-item .grid-inner > img {
            height:410px;
            object-fit: cover;
            object-position: center;
        }
    </style>
@endsection
