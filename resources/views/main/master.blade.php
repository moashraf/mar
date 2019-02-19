
<!DOCTYPE html>
<html lang="">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title> {!! site_settings('Web_site_name')  !!}  </title>

		<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{  asset('/css/bootstrap.min.css') }}  ">
		<!-- Font -->
		<link rel="stylesheet" href="{{  asset('/css/font-awesome.min.css') }}  ">
		<link rel="stylesheet" href="{{  asset('/css/elegant-font.css ') }}  ">

		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href=" {{  asset('/revolution/css/settings.css ') }}  ">
		<!-- REVOLUTION LAYERS STYLES -->
		<link rel="stylesheet" type="text/css" href=" {{  asset('/revolution/css/layers.css ') }}  ">
		<!-- REVOLUTION NAVIGATION STYLES -->
		<link rel="stylesheet" type="text/css" href="  {{  asset('/revolution/css/navigation.css') }}  ">
		<!-- OWL CAROUSEL
	  	================================================== -->
	  	<link rel="stylesheet" href=" {{  asset('/css/owl.carousel.css  ') }}  ">
	  	<!-- SCROLL BAR MOBILE MENU
  		================================================== -->
 		 <link rel="stylesheet" href="  {{  asset('/css/jquery.mCustomScrollbar.css') }}  " />

		<!-- Main Style -->
		<link rel="stylesheet" href=" {{  asset('/css/style-ar.css  ') }}  ">
		<!-- color scheme -->
		<!-- Favicons
		  ================================================== -->
	</head>
	<body>

		<div class="mobile-menu-first">
	        	<div id="mobile-menu" class="mobile-menu">
	        		<div class="header-mobile-menu">
	                  	<div class="mm-toggle">
	                		<i class="fas fa fa-close icon-close"></i>
	                	</div>
	              	</div> <!-- Mobile Menu -->
	          		<div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">

						<ul class="navi-level-1 hover-style-2 main-navi">
	                        <li class="has-sub"><a href="index.html"><span>الرئيسية</span></a>
	                        </li>
	                        <li class="has-sub"><a href="about.html"><span>من نحن</span></a>
	                        </li>
	                        <li class="has-sub"><a href="services.html"><span>خدمتنا</span></a>
	                        </li>
 `								<li class="has-sub"><a href="products.html"><span>سابقة الأعمال</span></a></li>

	                        <li class="has-sub"><a href="contact.html"><span>تواصل معنا</span></a>
	                        </li>
	                     	<li class="has-sub"><a href="news.html"><span>الأخبار</span></a>
	                        </li>
	                    </ul>
	              <div class="footer-mobile-menu">
	                  <ul class="social">
	                          <li class="facebook"><a target="_blank"  href=" {!! site_settings('facebook')  !!} "><i class="fa fa-facebook"></i></a></li>
	                      <li class="twitter"><a target="_blank"  href=" {!! site_settings('twitter')  !!} "><i class="fa fa-twitter"></i></a></li>
	                      <li class="google-plus"><a  target="_blank" href=" {!! site_settings('google-plus')  !!} "><i class="fa fa-google-plus"></i></a></li>
	                      <li class="youtube"><a  target="_blank" href=" {!! site_settings('youtube')  !!} "><i class="fa fa-youtube-play"></i></a></li>
	                      <li class="linkedin"><a target="_blank"  href=" {!! site_settings('linkedin')  !!} "><i class="fa fa-linkedin"></i></a></li>
	                </ul>

	                  <ul class="address-footer-mobile">
	                    <li><p>  {!! site_settings('Location')  !!}  </p></li>
	                    <li><p>  {!! site_settings('phone')  !!}   </p></li>
	                    <li><p>  {!! site_settings('Mail')  !!}  </p></li>

	                  </ul>
	              </div>
	          		</div> <!-- /#rmm   -->
	        	</div>
	    </div><!-- End Mobile Menu -->

		<div class="modal fade modal-search" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<button type="button" class="close" data-dismiss="modal">×</button>
		  	<div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form role="search" method="get" class="search-form">
                        <input class="search-field" placeholder="Search here..." value="" title="" type="search">
                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
          </div>
		</div>

		<!-- End Modal Search-->

	    <div id="page">

	    	<div id="skrollr-body">
				<header id="mainmenu" class="header-v1 header-border header-fix header-bg-white" data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
					<div id="info" class="topbar topbar-position topbar-dark hide-topbar" data-0="height:30px" data-251="height:0;">

						<div class="col-md-12">
		    				<p class="text-cap">E-mail: contact@arc.com</p>
		    				<div class="language">
		    					<a href="#" class="active"> </a>
		    					<a href="#">FR</a>
		    					<a href="#">PT</a>
		    				</div>
						</div>

					</div>

					<div class="right-header">

						<ul class="navi-level-1 sub-navi seperator-horizonal-line hover-style-4">


		                    <!-- Testing Search Box -->
		                    <li>
		                    	<a href="#/"  class="mm-toggle">
				            		<span aria-hidden="true" class="icon_menu"></span>
				            	</a>
		                    </li>
						</ul>

					</div><!-- End Right Header -->

					<nav>

						<ul class="navi-level-1 hover-style-2 main-navi nav-r">
										<li class="has-sub"><a href="index.html"><span><i class="fas fa fa-home"></i> الرئيسية</span></a>
										</li>
										<li class="has-sub"><a href="about.html"><span><i class="fas fa fa-question"></i> من نحن</span></a>
										</li>
										<li class="has-sub"><a href="services.html"><span><i class="fas fa fa-check"></i> خدمتنا</span></a>
										</li>
										<li class="has-sub"><a href="products.html"><span><i class="fas fa fa-briefcase"></i> سابقة الأعمال</span></a></li>

										<li class="has-sub"><a href="contact.html"><span><i class="fas fa fa-mobile"></i> تواصل معنا</span></a>
										</li>
									<li class="has-sub"><a href="news.html"><span><i class="fas fa fa-file"></i> الأخبار</span></a></li>
	          </ul>
					</nav><!-- End Nav -->

					<div class="left-header">
						<ul class="navi-level-1">
							<li><a href="{{ URL::to('/') }}" class="logo"><img class="img-logo" 
							src="{{ URL::to('/').'/images/mar2.png '}}"></a></li>
						</ul>
					</div><!-- End Left Header -->
				</header>
				<!-- End  Header -->
	@yield('content')	


</div>
		<!-- End page -->

		<a id="to-the-top"><i class="fa fa-angle-up"></i></a>
		<div id="fixed-social">
                <div>
                  <a href=" {!! site_settings('facebook')  !!}" class="fixed-facebook" target="_blank">
				  <i class="fa fa-facebook"></i> <span>Facebook</span></a>
                </div>
                <div>
                  <a href=" {!! site_settings('instagram')  !!}" class="fixed-instagrem" target="_blank">
				  <i class="fa fa-instagram"></i> <span>Instagram</span></a>
                </div>
                <div>
                  <a href="tel:{!! site_settings('phone')  !!}" target="_self" class="fixed-phone" target="_blank">
				  <i class="fa fa-phone"></i>
				  <span> {!! site_settings('phone')  !!}</span></a>
                </div>
			<div>
				<a href="mailto:{!! site_settings('Mail')  !!}" target="_self" class="fixed-mail" target="_blank">
				<i class="fa fa-at"></i> <span> {!! site_settings('Mail')  !!}</span></a>
			</div>
        </div>
		<!-- Back To Top -->
<footer class="footer-v1">
					<div class="footer-right">
						<a href="#">
							<!-- <h2>LOGO</h2> -->
						</a>
					</div>
					<div class="footer-left">
						<ul class="social social-footer">
		                      <li class="facebook"><a target="_blank"  href=" {!! site_settings('facebook')  !!} "><i class="fa fa-facebook"></i></a></li>
	                      <li class="twitter"><a target="_blank"  href=" {!! site_settings('twitter')  !!} "><i class="fa fa-twitter"></i></a></li>
	                      <li class="google-plus"><a  target="_blank" href=" {!! site_settings('google-plus')  !!} "><i class="fa fa-google-plus"></i></a></li>
	                      <li class="youtube"><a  target="_blank" href=" {!! site_settings('youtube')  !!} "><i class="fa fa-youtube-play"></i></a></li>
	                      <li class="linkedin"><a target="_blank"  href=" {!! site_settings('linkedin')  !!} "><i class="fa fa-linkedin"></i></a></li>
	                 </ul>
					</div>
					<!-- End Left Footer -->
					<nav class="nav-r">
						<ul>
							<li>
								<a class="text-cap" href="index.html">الرئيسية</a>
							</li><br class="none-br-phone">
							<li>
								<a class="text-cap" href="about.html">من نحن</a>
							</li>
							<li>
								<a class="text-cap" href="services.html">خدمتنا</a>
							</li>
							<li>
								<a class="text-cap" href="contact.html">تواصل معنا</a>
							</li>
							<li>
								<a class="text-cap" href="news.html">الأخبار</a>
							</li>
						</ul>
					</nav>
					<!-- End Nav Footer -->
					<!-- End Right Footer -->
				</footer>
				<!-- End Footer -->

				<section class="copyright">
					<p>Copyright © 2019 Designed by 
					<a target="_blank" href="https://corddigital.com/">Cord digital</a>. All rights reserved.</p>
				</section>

		<!-- SCRIPT -->
	    <script src="{{  asset('/js/vendor/jquery.min.js') }}"></script>
	    <script src=" {{  asset('/js/vendor/bootstrap.min.js') }} "></script>
	    <script src="{{  asset('/js/plugins/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	    <script src=" {{  asset('/js/plugins/wow.min.js') }} "></script>
	    <script type="text/javascript" src=" {{  asset('/js/plugins/skrollr.min.js') }} "></script>
	    <!-- Switcher
	    ================================================== -->
        <script src=" {{  asset('/js/vendor/jquery.waypoints.min.js') }} "></script>
        <script src="{{  asset('/js/vendor/jquery.counterup.min.js ') }} "></script>

		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="{{  asset('/revolution/js/jquery.themepunch.tools.min.js ') }}" ></script>
		<script type="text/javascript" src=" {{  asset('/revolution/js/jquery.themepunch.revolution.min.js ') }} "></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
			(Load Extensions only on Local File Systems !
			The following part can be removed on Server for On Demand Loading) -->
		<script src=" {{  asset('/js/vendor/wow.min.js') }} "></script>
		<script type="text/javascript" src="{{  asset('/revolution/js/extensions/revolution.extension.actions.min.js') }} "></script>
		<script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.carousel.min.js') }} "></script>
		<script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.kenburn.min.js') }}  "></script>
		<script type="text/javascript" src="{{  asset('/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}  "></script>
		<script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.migration.min.js') }}  "></script>
		<script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.navigation.min.js') }}  "></script>
		<script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.parallax.min.js') }}  "></script>
		<script type="text/javascript" src=" {{  asset('/revolution/js/extensions/revolution.extension.slideanims.min.js') }}  "></script>
		<script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.video.min.js') }}  "></script>
		<!-- Intializing Slider-->
		<script type="text/javascript" src=" {{  asset('/js/plugins/slider.js ') }}  "></script>
		<script src="  {{  asset('/js/vendor/parallax.min.js') }}  "></script>
		<script src="  {{  asset('/js/vendor/jquery.jqlouds.min.js') }}  "></script>

		 <!-- Mobile Menu
	    ================================================== -->
	     <script src="  {{  asset('/js/plugins/jquery.mobile-menu.js') }}  "></script>

	  	<!-- Initializing the isotope
	    ================================================== -->
	    <script src="  {{  asset('/js/plugins/isotope.pkgd.min.js') }}  "></script>
	    <script src="  {{  asset('/js/plugins/custom-isotope.js') }}  "></script>
	    <!-- Initializing Owl Carousel
	    ================================================== -->
	    <script src="  {{  asset('/js/plugins/owl.carousel.js') }} "></script>
	    <script src="  {{  asset('/js/plugins/custom-owl.js ') }} "></script>

     	<!-- PreLoad
	    ================================================== -->
	    <!-- <script type="text/javascript" src="js/plugins/royal_preloader.min.js"></script>
		<script type="text/javascript">
		(function($) { "use strict";
		            Royal_Preloader.config({
		                mode:           'logo',
		                logo:           'images/Header/logo.png',
		                timeout:       1,
		                showInfo:       false,
		                opacity:        1,
		                background:     ['#FFFFFF']
		            });
		})(jQuery);
		</script> -->

	 	<!-- Global Js
	    ================================================== -->
	    <script src=" {{  asset('/js/plugins/custom.js') }}"></script>

	</body>

</html>

 