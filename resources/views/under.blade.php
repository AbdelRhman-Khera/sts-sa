<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>STS</title>
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('public/src/css/base.css') }}">
   <link rel="stylesheet" href="{{ asset('public/src/css/vendor.css') }}">
   <link rel="stylesheet" href="{{ asset('public/src/css/main.css') }}">

   <!-- Modernizr
   =================================================== -->
   <script src="{{ asset('public/src/js/modernizr.js') }}"></script>

   <!-- Favicons
   =================================================== -->
   <link rel="shortcut icon" href="{{ asset('public/src/favicon.png') }}" >

</head>

<body>

   <!--[if lt IE 9]>
   	<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
   	Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->

   <!-- content-wrap -->
   <div id="content-wrap">

      <!-- main  -->
      <main class="row">

            <header class="site-header">
               <div class="logok">
                   <img src="{{ asset('public/src/sts.png') }}" alt="" width="200" height="200">

               </div>
            </header>

            <div id="main-content" class="twelve columns">

               <h1>Our website is under construction.</h1>

               <p>
                STS Software solutions are the best
               </p>

               <hr>

               {{-- <div id="counter" class="group">
                  <span>134 <em>days</em></span>
                  <span>12 <em>hours</em></span>
                  <span>50 <em>minutes</em></span>
                  <span>33 <em>seconds</em></span>
               </div> --}}

               <!-- MailChimp Signup Form -->
               <div id="mc-signup">

                  <form id="mc-form" class="group">

               		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>

                     <input type="submit" value="Get Notified" name="subscribe" class="button">

                     <label for="mce-EMAIL" class="subscribe-message"></label>

                  </form>

               </div> <!-- /sign-up form -->

            </div><!-- /main-content form -->

            <div class="modal-toggles">
               <ul>
                    <li class="about-us"><a href="#mod-about">More about us</a></li>
                    {{-- <li class="location"><a href="#mod-map">Our Location</a></li> --}}
               </ul>
            </div><!-- /modal-toggles -->

      </main>

   </div><!-- /content-wrap -->


   <!-- modals
   =================================================== -->

	<section id="mod-about" >

	   <!-- Modal toggle -->
	   <div class="modal-toggle">
	      <a href="#" title="close" id="modal-close">close</a>
	   </div>

	   <div class="row about-header">

			<div class="twelve columns">

			   <div class="icon-wrap">
			      <i class="icon"></i>
			   </div>

				<h1>About Us.</h1>

			</div>

	   </div> <!-- /about-header -->

		<div class="row about-content">

			<div class="six columns mob-whole">
				<p>App Development
                    we specialize in developing
                    customer-centric applications
                    that fits your needs.!
				</p>

				<p>Customization
                    Our team can customize
                    public solutions
                    to your business.!</p>
                <p>
                    Cloud technologies
                    We use up to date technology in
                    cloud to make products highly available and
                    scalable.!
                </p>
                <p>UI/UX Branding
                    We can provide complete
                    UI/UX solution for your
                    business and organization.!</p>
                <p>
                    Customer Support
                    We are a customer centric company.
                    We consider our customer as
                    our first priority.!</p>
			</div>

			<div class="six columns mob-whole contact">

			   <h3>Contact Numbers:</h3>
			   <p>Phone: (000) 555 1212<br>
			    	Mobile: (000) 555 0100<br>
			     	Fax: (000) 555 0101</p>

			   <h3>Email:</h3>
			   <p>support@sts-sa.com
			   </p>

			   <h3>Address:</h3>
			   <p>Al Salam Axis, First New Cairo, Cairo Governorate, Egypt
			   </p>
               <p>
                7674 Al Kharj Rd, Ghubairah, Riyadh 12664 4350, Saudi Arabia
               </p>

			</div>

		</div> <!-- /about-content -->

		<div class="slider row">

		   <hr>

		   <ul id="owl-slider" class="owl-carousel">
           	<li class="item s-photography">
              	<span class="slider-icon"></span>
              	<p>Photography</p>
           	</li>
           	<li class="item s-digital-media">
              	<span class="slider-icon"></span>
              	<p>Digital Media</p>
            </li>
            <li class="item s-marketing">
              	<span class="slider-icon"></span>
              	<p>Marketing</p>
            </li>
            <li class="item s-packaging">
              	<span class="slider-icon"></span>
              	<p>Packaging</p>
            </li>
            <li class="item s-videography">
              	<span class="slider-icon"></span>
              	<p>Videography</p>
            </li>
            <li class="item s-webdesign">
              	<span class="slider-icon"></span>
              	<p>Web Design</p>
            </li>
            <li class="item s-branding">
               <span class="slider-icon"></span>
               <p>Branding</p>
            </li>
            <li class="item s-web-development">
              	<span class="slider-icon"></span>
              	<p>Web Development</p>
            </li>
         </ul>

		</div><!-- /slider -->

   </section><!-- /mod-about -->

   <section id="mod-map" >

      <!-- Modal toggle -->
      <div class="modal-toggle">
         <a href="#" title="close" id="modal-close"><span>Close</span></a>
      </div>

      <div id="map-container"></div>

      <div id="map-zoom-in"></div>
		<div id="map-zoom-out"></div>

      <address>
        Al Salam Axis, First New Cairo, Cairo Governorate, Egypt
        <br>
        7674 Al Kharj Rd, Ghubairah, Riyadh 12664 4350, Saudi Arabia
      </address>

   </section><!-- /mod-about -->


 	<!-- footer
   =================================================== -->
   <footer class="group">

     	<ul class="footer-social">
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
         <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
         <li><a href="#"><i class="fa fa-skype"></i></a></li>
     	</ul>

     	<ul class="footer-copyright">
         <li>© 2021 All Rights Reserved Design by STS-SA</li>
      </ul>

   </footer>

   <div id="preloader">
    	<div id="loader">
     	</div>
   </div>

<!-- Script
=================================================== -->
<script src="{{ asset('public/src/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('public/src/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?v=3.13&amp;sensor=false"></script>
<script src="{{ asset('public/src/js/jquery.fittext.js') }}"></script>
<script src="{{ asset('public/src/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('public/src/js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('public/src/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/src/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('public/src/js/main.js') }}"></script>

</body>
</html>
