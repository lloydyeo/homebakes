@extends ('layouts.app')

@section('page-css')

@endsection

@section('title', 'About Us')

@section('content')

    <section id="page-title" class="page-title-parallax page-title-center border-bottom include-header"
             style="background-image: url('{{ asset('canvas/demos/restaurant/images/sections/6.jpg') }}'); background-size: 100% auto;"
             data-center="background-position:100% 100px;" data-top-bottom="background-position:100% -200px;">
        <div class="container clearfix">
        <span class="font-primary ls1 mb-2 color" style="font-size: 14px;">&nbsp;</span>
        <h1 class="font-secondary text-capitalize ls0" style="font-size: 62px;">About Us</h1>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0" style="overflow: visible;">
            <div class="container mb-6 pb-6">
                <div class="heading-block border-bottom-0 bottommargin-sm">
{{--                    <h3 class="nott font-secondary ls0 color" style="font-size: 52px; line-height: 1.3;">Why Homebakers Singapore?</h3>--}}
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-sm-12">
                        <img src="{{ asset('images/about-us/banner.jpg') }}" alt="About Us" />
                    </div>

                    <div id="about-us-text" class="col-lg-8 col-sm-12">
                        <p></p>
                        <p><span class="font-weight-bold">Homebakers Singapore</span> is a platform that features local homebakers.</p>
                        <p>Our dream is to shine a light on outstanding homebakers and share their delectable delights with the masses.</p>
                        <p>We also hope to optimize the homebaking process, so that homebakers may focus on what they do best: bake! With our help in future, we believe that logistical nightmares will one day be a thing of the past for the aspiring homebaking business.</p>
                        <p>As the platform is in its infancy, we would be delighted to start a conversation with homebakers to understand your needs.</p>
                        <p class="font-weight-bold">We would love to hear from you either at our <a href="mailto:enquiry@homebakers.sg">email</a> or through Instagram DM <a href="https://www.instagram.com/homebakerssingapore/" target="_blank">@HomebakersSingapore</a>.</p>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
