<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/magnific-popup.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        ::selection { background: #3F2A23; }
        ::-moz-selection { background: #3F2A23; }
        ::-webkit-selection { background: #3F2A23; }
        #logo img {
            filter: brightness(0) invert(1);
        }
    </style>

	<!-- Document Title
	============================================= -->
	<title>Coming Soon | Home Bakers</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="no-sticky transparent-header dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png">
                                <img src="{{ asset('images/logos/logo.png') }}" alt="HomeBakers"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">
                                <img src="{{ asset('images/logos/logo.png') }}" alt="HomeBakers"></a>
						</div><!-- #logo end -->

						<div class="header-misc">
							<a href="#" data-toggle="modal" data-target="#contactFormModal" class="social-icon si-light si-email3">
								<i class="icon-email3"></i>
								<i class="icon-email3"></i>
							</a>

						</div>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<section id="slider" class="slider-element min-vh-100 dark include-header" style="
                    background: linear-gradient(to bottom, rgba(0,0,0,.5), rgba(0,0,0,.6)), url('{{ asset('images/homebakes-coming-soon.jpg') }}');
                    background-repeat: no-repeat;
		            background-position: center center;">
			<div class="slider-inner">

				<div class="vertical-middle">
					<div class="container py-5">

                        <div class="text-center w-100" style="filter:brightness(0); filter: invert(1);">
                            <img src="{{ asset('images/logos/logo.png') }}" alt="HomeBakers" style="text-align: center; margin-left:auto; margin-right: auto; height:100px;"/>
                        </div>

						<div class="heading-block text-center border-bottom-0">
							<h1>Something Fresh is Baking in our Oven...</h1>
							<span>Subscribe now to a endless discovery of delicious home bakers!</span>
						</div>

						<div id="countdown-ex1" class="countdown countdown-large coming-soon mx-auto mb-5" data-year="2021" style="max-width:700px;"></div>

						<div class="subscribe-widget">
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
								<div class="input-group input-group-lg mx-auto" style="max-width:600px;">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-info" type="submit">Subscribe Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- Modal Contact Form
		============================================= -->
		<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">

						<div class="form-widget">

							<div class="form-result"></div>

							<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

								<div class="col-md-6 form-group">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col-12 form-group">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col-12 form-group d-none">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- Modal Contact Form End -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- For Countdown -->
	<script src="js/components/moment.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>