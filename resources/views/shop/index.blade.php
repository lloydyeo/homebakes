@extends ('layouts.app')

@section('page-css')
@endsection

@section('title', 'Bakers')

@section('content')
    <!-- Content
		============================================= -->
    <section id="content">
        <div class="content-wrap d-flex align-items-center">
            <div class="container clearfix">
                <div class="row col-mb-50 justify-content-center">

                    <div class="col-xl-6 col-lg-8 text-center">
                        <h3 class="font-secondary h1 font-weight-bold mb-3 color">Our Bakers</h3>
                    </div>

                    <div class="clear"></div>

                    @foreach($shops as $shop)
                        <div class="col-xl-4 col-md-6">
                            <div class="card border-0 dark shadow-sm h-shadow shadow-ts p-3" style="
                            background: linear-gradient(rgba(62,38,28,.8), rgba(62,38,28,.4)),
                            url('{{ Storage::disk('s3')->url($shop->cover_image) }}') no-repeat center center / contain;">
                                <div class="card-body">
{{--                                    <h6 class="font-weight-normal text-uppercase ls2 text-white-50 mb-2">Category</h6>--}}
                                    <h3 class="font-secondary card-title h2 font-weight-bold mb-4 text-white">{{ $shop->name }}</h3>
                                    <p class="card-text mb-5">{{ substr($shop->description, 0, 180) . '...' }}</p>
                                    <a href="{{ route('shop.showShop', ['shop' => $shop->slug]) }}">
                                        <i class="icon-line-arrow-right h4 icon-stacked text-center rounded-circle bg-white text-dark"></i>
                                    </a>
                                </div>
                            </div>
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
        #content {
            background-color:#F7F5F0;
        }
    </style>
@endsection
