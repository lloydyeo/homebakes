@extends ('layouts.app')

@section('page-css')
@endsection

@section('title', $article->title)

@section('content')
    <section id="page-title" class="page-title-parallax page-title-center border-bottom"
             style="background-image: url('{{ asset('canvas/demos/restaurant/images/sections/6.jpg') }}'); background-size: 100% auto;"
             data-center="background-position:100% 100px;" data-top-bottom="background-position:100% 0px;">
        <div class="container clearfix">
            <span class="font-primary ls1 mb-2 color" style="font-size: 14px;">&nbsp;</span>
            <h1 class="font-secondary text-capitalize ls0">{{ $article->title }}</h1>
        </div>
    </section><!-- #page-title end -->

    <section id="content">
        <div class="content-wrap pb-0" style="overflow: visible;">
            <div id="news-section" class="container">
                <div class="row posts-md col-mb-30 mb-0">
                    <div id="article-content" class="offset-lg-2 col-lg-8">
                        {!! $article->content !!}
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center mb-4">
                        <a href="{{ route('blog.index') }}" class="button button-3d button-mini button-rounded">Read More Articles</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('{{ asset('canvas/demos/restaurant/images/sketch-header.png') }}') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
    </section>
@endsection

@section('page-custom-css')
    <style>
        @if ($blog_custom_css)
            {!! $blog_custom_css !!}
        @endif
        @if ($article->custom_css)
            {!! $article->custom_css !!}
        @endif
    </style>
@endsection

@section('page-js')
    <script>
        document.querySelectorAll('#article-content h1').forEach( element => {
            //create new h1 element
            const newElement = document.createElement('h2');
            //set the inner html to the original h2 element
            newElement.innerHTML = element.innerHTML;
            //take all attributes from original element and assign them to the new one
            Array.from(element.attributes).forEach( attr => {
                newElement.setAttribute(attr.nodeName, attr.nodeValue)
            })
            //replace the node in the dom
            element.parentNode.replaceChild(newElement, element);
        });

        document.querySelectorAll('#article-content a').forEach( element => {
            element.setAttribute('target', '_blank');
        });
    </script>
@endsection
