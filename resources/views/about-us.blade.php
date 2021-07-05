@extends ('layouts.app')

@section('page-css')
    <style>
        p.font-weight-bold.color {
            font-size:30px;
        }
    </style>
@endsection

@section('title', 'About Us')

@section('content')

    <section id="page-title" style="background-color:#91303F;">
        <div class="container clearfix">
            <h1 class="text-center font-secondary text-capitalize ls0 text-white" style="font-size: 62px;">About Us</h1>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        @if (false)
        <div class="content-wrap pb-0" style="overflow: visible;">
            <div class="container mb-6 pb-6">
                <div class="heading-block border-bottom-0 bottommargin-sm">
{{--                    <h3 class="nott font-secondary ls0 color" style="font-size: 52px; line-height: 1.3;">Why Homebakers Singapore?</h3>--}}
                </div>

                <div class="row clearfix">
                    <div id="about-us-text" class="w-75 mx-auto">
                        @foreach($aboutUs as $about_us_section)
                            <div class="d-flex">
                                @if ($about_us_section->orientation == 0)
                                    <div class="">
                                        <img src="{{ Storage::disk('s3')->url($about_us_section->image) }}" alt="About Us" />
                                    </div>
                                    <div class="">
                                        {!! $about_us_section->description !!}
                                    </div>
                                @elseif ($about_us_section->orientation == 1)
                                    <div class="">
                                        {!! $about_us_section->description !!}
                                    </div>
                                    <div class="">
                                        <img src="{{ Storage::disk('s3')->url($about_us_section->image) }}" alt="About Us" />
                                    </div>
                                @elseif ($about_us_section->orientation == 3)
                                    <div>
                                        {!! $about_us_section->description !!}
                                    </div>
                                @endif
                            </div>
                        @endforeach

{{--                        <p></p>--}}
{{--                        <p><span class="font-weight-bold">Homebakers Singapore</span> is a platform that features local homebakers.</p>--}}
{{--                        <p>Our dream is to shine a light on outstanding homebakers and share their delectable delights with the masses.</p>--}}
{{--                        <p>We also hope to optimize the homebaking process, so that homebakers may focus on what they do best: bake! With our help in future, we believe that logistical nightmares will one day be a thing of the past for the aspiring homebaking business.</p>--}}
{{--                        <p>As the platform is in its infancy, we would be delighted to start a conversation with homebakers to understand your needs.</p>--}}
{{--                        <p class="font-weight-bold">We would love to hear from you either at our <a href="mailto:enquiry@homebakers.sg">email</a> or through Instagram DM <a href="https://www.instagram.com/homebakerssingapore/" target="_blank">@HomebakersSingapore</a>.</p>--}}

{{--                        <p class="font-secondary color font-weight-bold">We are a platform that features and promotes local home bakers.</p>--}}
{{--                        <p>Hi, We are Homebakers.sg!</p>--}}
{{--                        <p>We want to showcase outstanding home bakers and share their delectable delights with the masses.</p>--}}
{{--                        <p>Our goal is to establish a centralised platform to connect customers with local home bakers.</p>--}}
{{--                        <br/>--}}
{{--                        <p class="font-secondary color font-weight-bold">Our mission is to increase the awareness of local home bakeries in Singapore.</p>--}}
{{--                        <p>The home baking community is now flourishing with increasing support from people who make a conscious choice to buy local. #SupportLocalSg</p>--}}
{{--                        <p>We champion the cause of supporting local, so that they can continue doing what they love, turning their dreams into reality.</p>--}}
{{--                        <br/>--}}
{{--                        <p>We care about <span class="font-secondary color font-weight-bold">choices</span>.</p>--}}
{{--                        <p>We want consumers to know the unique and wide variety of options that home bakeries have to offer, for every occasion.</p>--}}
{{--                        <p>We care about <span class="font-secondary color font-weight-bold">empowerment</span>.</p>--}}
{{--                        <p>We want to give support to local home bakers, providing them with the momentum to continue doing what they love.</p>--}}
{{--                        <p>We care about <span class="font-secondary color font-weight-bold">community</span>.</p>--}}
{{--                        <p>We want to build a growing and tight knitted ecosystem of #supportlocal individuals based on respect and trust.</p>--}}
{{--                        <p>We care about <span class="font-secondary color font-weight-bold">sustainable growth</span>.</p>--}}
{{--                        <p>We want to optimize growth with ecological and social footprints in mind. We advocate the same for our partners.</p>--}}
{{--                        <p>We care about <span class="font-secondary color font-weight-bold">innovation</span>.</p>--}}
{{--                        <p>We are constantly forward looking in the way we do things, to stay relevant by redefining existing norms.</p>--}}
{{--                        <br/>--}}
{{--                        <p class="font-secondary color font-weight-bold">Join us and be a partner home baker</p>--}}
{{--                        <p>As the platform is in its infancy, we would be delighted to start a conversation with home bakers to understand your needs.</p>--}}
{{--                        <p>We would love to hear from you either at our <a href="mailto:admin@homebakers.sg">email</a> or through Instagram DM <a href="https://www.instagram.com/homebakerssingapore/" target="_blank">@HomebakersSingapore</a></p>--}}
{{--                        <a class="button" id="typeform-button"--}}
{{--                           href="https://forms.gle/xmdT5rvnoeWQSjug8" rel="noreferrer"--}}
{{--                           style="display:inline-block;text-decoration:none;background-color:{{ $theme_primary_color }};color:white;cursor:pointer;font-family:'Poppins', sans-serif !important;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 22px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;"--}}
{{--                           target="_blank">Join Us </a>--}}
                    </div>

                </div>
            </div>
        </div>
        @endif

        @foreach($aboutUs as $about_us_section)
        <div class="section mt-0 mb-0 py-5" @if ($loop->iteration%2 == 1) style="background-color:#fff;" @else style="background-color:#F3EADC;" @endif>
            <div class="container">
                <div class="about-us-container about-us-{{ $about_us_section->id }} d-flex w-75 mx-auto">
                    @if ($about_us_section->orientation == 0)
                        <div class="px-2 text-center d-flex align-items-center justify-content-center" style="flex:1;">
                            <img style="width:100%; object-fit: cover; object-position: center;" src="{{ Storage::disk('s3')->url($about_us_section->image) }}" alt="About Us" />
                        </div>
                        <div class="px-5" style="flex:1;">
                            {!! $about_us_section->description !!}
                        </div>
                    @elseif ($about_us_section->orientation == 1)
                        <div class="px-5" style="flex:1;">
                            {!! $about_us_section->description !!}
                        </div>
                        <div class="px-2 text-center" style="flex:1;">
                            <img style="width:100%; object-fit: cover; object-position: center;" src="{{ Storage::disk('s3')->url($about_us_section->image) }}" alt="About Us" />
                        </div>
                    @elseif ($about_us_section->orientation == 3)
                        <div class="px-5" style="flex:1;">
                            {!! $about_us_section->description !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </section><!-- #content end -->
@endsection

@section('page-custom-css')
    <style>
        @media(min-width:320px) {
            .pl-5, .px-5 {
                padding-left: 0!important;
            }
            .pr-5, .px-5 {
                padding-right:0!important;
            }

            .about-us-container {
                flex-direction: column;
            }
        }

        @media(min-width:1024px) {
            .pl-5, .px-5 {
                padding-left: 5rem!important;
            }
            .pr-5, .px-5 {
                padding-right: 5rem!important;
            }
            .about-us-container {
                flex-direction: row;
            }

            .container .about-us-container.about-us-6 .px-2.text-center {
                padding-left:5rem!important;
                padding-right:0!important;
            }

            .container .about-us-container.about-us-7 .px-5,
            .container .about-us-container.about-us-6 .px-5 {
                padding-right:2rem!important;
            }
        }
    </style>
@endsection
