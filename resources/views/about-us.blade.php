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
{{--                        <p></p>--}}
{{--                        <p><span class="font-weight-bold">Homebakers Singapore</span> is a platform that features local homebakers.</p>--}}
{{--                        <p>Our dream is to shine a light on outstanding homebakers and share their delectable delights with the masses.</p>--}}
{{--                        <p>We also hope to optimize the homebaking process, so that homebakers may focus on what they do best: bake! With our help in future, we believe that logistical nightmares will one day be a thing of the past for the aspiring homebaking business.</p>--}}
{{--                        <p>As the platform is in its infancy, we would be delighted to start a conversation with homebakers to understand your needs.</p>--}}
{{--                        <p class="font-weight-bold">We would love to hear from you either at our <a href="mailto:enquiry@homebakers.sg">email</a> or through Instagram DM <a href="https://www.instagram.com/homebakerssingapore/" target="_blank">@HomebakersSingapore</a>.</p>--}}

                        <p class="font-weight-bold">We are a platform that features and promotes local home bakers.</p>
                        <p>Hi, We are Homebakers.sg!</p>
                        <p>We want to showcase outstanding home bakers and share their delectable delights with the masses.</p>
                        <p>Our goal is to establish a centralised platform to connect customers with local home bakers.</p>
                        <br/>
                        <p class="font-weight-bold">Our mission is to increase the awareness of local home bakeries in Singapore.</p>
                        <p>The home baking community is now flourishing with increasing support from people who make a conscious choice to buy local. #SupportLocalSg</p>
                        <p>We champion the cause of supporting local, so that they can continue doing what they love, turning their dreams into reality.</p>
                        <br/>
                        <p>We care about <span class="font-weight-bold">choices</span>.</p>
                        <p>We want consumers to know the unique and wide variety of options that home bakeries have to offer, for every occasion.</p>
                        <p>We care about <span class="font-weight-bold">empowerment</span>.</p>
                        <p>We want to give support to local home bakers, providing them with the momentum to continue doing what they love.</p>
                        <p>We care about <span class="font-weight-bold">community</span>.</p>
                        <p>We want to build a growing and tight knitted ecosystem of #supportlocal individuals based on respect and trust.</p>
                        <p>We care about <span class="font-weight-bold">sustainable growth</span>.</p>
                        <p>We want to optimize growth with ecological and social footprints in mind. We advocate the same for our partners.</p>
                        <p>We care about <span class="font-weight-bold">innovation</span>.</p>
                        <p>We are constantly forward looking in the way we do things, to stay relevant by redefining existing norms.</p>
                        <br/>
                        <p class="font-weight-bold">Join us and be a partner home baker</p>
                        <p>As the platform is in its infancy, we would be delighted to start a conversation with home bakers to understand your needs.</p>
                        <p>We would love to hear from you either at our <a href="mailto:admin@homebakers.sg">email</a> or through Instagram DM <a href="https://www.instagram.com/homebakerssingapore/" target="_blank">@HomebakersSingapore</a></p>
                        <a class="button" id="typeform-button"
                           href="https://forms.gle/xmdT5rvnoeWQSjug8" rel="noreferrer"
                           style="display:inline-block;text-decoration:none;background-color:{{ $theme_primary_color }};color:white;cursor:pointer;font-family:'Poppins', sans-serif !important;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 22px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;"
                           target="_blank">Join Us </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
