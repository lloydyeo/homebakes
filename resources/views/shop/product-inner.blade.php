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
                <h2 class="color text-center">{{ $product->product_name }}</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <img style="width:100%; height: 410px; object-position: center; object-fit: cover;" src="{{ Storage::disk('s3')->url($product->image) }}" alt="{{ $shop->name }}" />
                    </div>
                    <div class="col-lg-8">
                        <div style="color:#3C271D;" class="py-4">{!! nl2br($product->product_description) !!}</div>
{{--                        <a class="button">--}}
{{--                            Shop Now--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="section mb-0 mt-0">
            <div class="container">
                <a href="{{ route('shop.showShop', ['shop' =>  $shop->slug]) }}"><h2 class="color">About {{ $shop->name }}</h2></a>
                <div class="row">
                    <div class="col-lg-4 text-left">
                        <img style="width:100%; padding:10px; background-color:white;" src="{{ Storage::disk('s3')->url($shop->cover_image) }}" alt="{{ $shop->name }}" />
                    </div>
                    <div class="col-lg-8">
                        <p class="py-4">{!! nl2br($shop->description) !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mb-0 mt-0 bg-white">
            <div class="container">
                <h2 class="text-center color">Related Products</h2>
                <div class="row text-center">
                @foreach($additional_product_images as $product_image)
                    <div class="col-lg-12 row">
                        <div class="col-lg-4">
                            <img style="width:100%; height:410px; object-fit:cover; object-position: center;" class="rounded-xxl" src="{{ Storage::disk('s3')->url($product_image->image) }}" alt="{{ $shop->name }}">
                        </div>
                        <div class="col-lg-8">
                            <h4 class="text-left color my-3">{{ $product_image->product_name ? $product_image->product_name  : '' }}</h4>
                            <h5 class="text-left color mb-3">${{ number_format($product_image->product_price, 2) }}</h5>
                            <div class="text-left">
                                {!! $product_image->product_description !!}
                            </div>
                        </div>
                    </div>
                        @if ($loop->last)
                        @else
                            <div class="divider divider-thick"></div>
                        @endif
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
    </style>
@endsection
