@extends ('layouts.app')

@section('title', 'Blog')

@section('content')
    <section id="page-title" class="page-title-parallax page-title-center border-bottom"
             style="background-image: url('{{ asset('canvas/demos/restaurant/images/sections/6.jpg') }}'); background-size: 100% auto;"
             data-center="background-position:100% 100px;" data-top-bottom="background-position:100% -200px;">
        <div class="container clearfix">
            <span class="ls1 mb-2">The latest on home bakers!</span>
            <h1 class="text-capitalize ls0">Our Latest News</h1>
        </div>

    </section><!-- #page-title end -->

    <section id="content">
        <div class="content-wrap pb-0" style="overflow: visible;">
            <div id="news-section" class="container">

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
            </div>

            <div class="section mt-3 border-top bg-transparent py-5 mb-0">
                <div class="container clearfix">
                    <div class="row align-items-center">
                        <div class="col-sm-6 mr-auto">
                            <p class="mb-0 d-flex justify-content-center justify-content-sm-start"><small style="font-family:Poppins,sans-serif!important;" class="text-muted">Showing Page: <a href="#">1</a> of 1 Pages</small></p>
                        </div>
                        <div class="col-sm-6">
                            <ul class="pagination justify-content-center justify-content-sm-end mt-3 mt-sm-0 mb-0">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
