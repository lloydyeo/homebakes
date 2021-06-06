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
    <section id="content" style="background-color:#F7F5F0;">
        <div class="content-wrap">
            <div class="container">

                <div class="row gutter-50">

                    <div class="offset-1 col-lg-4 portfolio-single-image">
                        <!-- Portfolio Single Image
                        ============================================= -->
                        <div class="masonry-thumbs grid-container masonry-gap-xl grid-1 grid-md-2" data-lightbox="gallery">
                            @foreach ($product_images as $product_image)
                                <a href="{{ Storage::disk('s3')->url($product_image->image) }}" data-lightbox="gallery-item" class="grid-item">
                                    <img style="object-position: center;" class="rounded-xxl" src="{{ Storage::disk('s3')->url($product_image->image) }}" alt="{{ $shop->name }}">
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
                            <img height="75" src="{{ Storage::disk('public')->url($shop->cover_image) }}" alt="{{ $shop->name }}" />
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
    </style>
@endsection
