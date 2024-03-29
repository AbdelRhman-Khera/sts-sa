@extends('layouts.temp')
@section('content')
<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
		<section class="page-banner">
			<div class="container">
				<div class="page-title-wrapper">
					<h1 class="page-title">Services</h1>

					<ul class="bradcurmed">
						<li><a href="#" rel="noopener noreferrer">Home</a></li>
						<li>Services</li>
					</ul>
				</div>
				<!-- /.page-title-wrapper -->
			</div>
			<!-- /.container -->

			<svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
				<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
			</svg>

			<ul class="animate-ball">
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
			</ul>
		</section>
		<!-- /.page-banner -->

		<!--===========================-->
		<!--=         Service         =-->
		<!--===========================-->
		<section class="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="popup-videos wow pixFadeRight">
							<div class="video-thumbnail">
								<img src="{{ asset('temp/media/service/1.jpg') }}" alt="thumbnail">
							</div>
							<!-- /.video-thumbnail -->

							<a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="play-btn popup-video"><i class="ei ei-arrow_triangle-right"></i></a>
						</div>
						<!-- /.popup-video -->
					</div>
					<!-- /.col-lg-5 -->

					<div class="col-lg-7">
						<div class="service-content">
							<div class="section-title">
								<h3 class="sub-title wow pixFadeUp" data-wow-delay="0.3s">Our Service</h3>

								<h2 class="title wow pixFadeUp" data-wow-delay="0.5s">
									We Offer the Best<br>
									Business Solutions
								</h2>
							</div>
							<!-- /.section-title -->

							<p class="wow pixFadeUp" data-wow-delay="0.7s">
								Why I say old chap that is spiffing, bite your arm off geeza blag pukka bleeder A bit of how's your father bugger all mate gutted mate, cheesed off hunky-dory gosh morish get stuffed mate lemon squeezy. Bodge barmy bugger no biggie bleeding bits and bobs my good sir, spend a penny.!
							</p>
						</div>
						<!-- /.service-content -->
					</div>
					<!-- /.col-lg-7 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.service -->

		<!--===========================-->
		<!--=         Feature         =-->
		<!--===========================-->
		<section class="featured-two-service">
			<div class="container">
				<div class="section-title text-center">
					<h3 class="sub-title wow pixFadeUp">Our service</h3>
					<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">Why you choose Our plugin</h2>
				</div><!-- /.section-title -->

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeUp" data-wow-delay="0.3s">
							<div class="saaspik-icon-box-icon">
								<img src="{{ asset('temp/media/feature/6.png') }}" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">App Development</a></h3>
								<p>
									The full monty do one nancy boy<br>
									say gutted mate cockup Why at <br>
									public school.!
								</p>
							</div>
						</div><!-- /.pixsass-box style-two wow pixFadeUp -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeUp" data-wow-delay="0.5s">
							<div class="saaspik-icon-box-icon">
								<img src="{{ asset('temp/media/feature/7.png') }}" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Customization</a></h3>

								<p>
									The full monty do one nancy boy<br>
									say gutted mate cockup Why at <br>
									public school.!
								</p>
							</div>
						</div><!-- /.pixsass-box style-two wow pixFadeUp -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeUp" data-wow-delay="0.7s">
							<div class="saaspik-icon-box-icon">
								<img src="{{ asset('temp/media/feature/8.png') }}" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Multiple Managers</a></h3>
								<p>
									The full monty do one nancy boy<br>
									say gutted mate cockup Why at <br>
									public school.!
								</p>
							</div>
						</div><!-- /.pixsass-box style-two wow pixFadeUp -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeUp" data-wow-delay="0.9s">
							<div class="saaspik-icon-box-icon">
								<img src="{{ asset('temp/media/feature/9.png') }}" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Cloud Data Saved</a></h3>
								<p>
									The full monty do one nancy boy<br>
									say gutted mate cockup Why at <br>
									public school.!
								</p>
							</div>
						</div><!-- /.pixsass-box style-two wow pixFadeUp -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeUp" data-wow-delay="1s">
							<div class="saaspik-icon-box-icon">
								<img src="{{ asset('temp/media/feature/10.png') }}" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">UI/UX Branding</a></h3>
								<p>
									The full monty do one nancy boy<br>
									say gutted mate cockup Why at <br>
									public school.!
								</p>
							</div>
						</div><!-- /.pixsass-box style-two wow pixFadeUp -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeUp" data-wow-delay="1.2s">
							<div class="saaspik-icon-box-icon">
								<img src="{{ asset('temp/media/feature/11.png') }}" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Customer Support</a></h3>
								<p>
									The full monty do one nancy boy<br>
									say gutted mate cockup Why at <br>
									public school.!
								</p>
							</div>
						</div><!-- /.pixsass-box style-two wow pixFadeUp -->
					</div><!-- /.col-lg-4 col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.featured -->

		<!--===========================-->
		<!--=         Count Up        =-->
		<!--===========================-->
		<section class="pricing-service">
			<div class="container">
				<div class="section-title text-center">
					<h3 class="sub-title wow pixFadeUp">Pricing Plan</h3>
					<h2 class="title wow pixFadeUp" data-wow-delay="0.2s">
						No Hidden Charges! Choose <br>
						your Plan.
					</h2>
				</div>
				<!-- /.section-title -->
				<nav class="pricing-tab wow pixFadeUp" data-wow-delay="0.3s">
					<span class="monthly_tab_title tab-btn">
						Monthly
					</span>
					<span class="pricing-tab-switcher"></span>
					<span class="annual_tab_title tab-btn">
						Annual
					</span>
				</nav>

				<div class="row advanced-pricing-table no-gutters wow pixFadeUp" data-wow-delay="0.5s">

					<div class="col-lg-4">
						<div class="pricing-table br-left">
							<div class="pricing-header pricing-amount">
								<div class="annual_price">
									<h2 class="price">$0.00</h2>
								</div>
								<!-- /.annual_price -->

								<div class="monthly_price">
									<h2 class="price">$0.00</h2>
								</div>
								<!-- /.monthly_price -->

								<h3 class="price-title">Basic Account</h3>
								<p>Only for first month</p>
							</div>
							<!-- /.pricing-header -->

							<ul class="price-feture">
								<li class="have">Limited Acess Library</li>
								<li class="have">Single User</li>
								<li class="have">eCommerce Store</li>
								<li class="not">Hotline Support 24/7</li>
								<li class="not">No Updates</li>
							</ul>

							<div class="action text-center">
								<a href="#" class="pix-btn btn-outline">Get Started</a>
							</div>
						</div>
						<!-- /.pricing-table -->
					</div>
					<!-- /.col-lg-4 -->

					<div class="col-lg-4">
						<div class="pricing-table color-two">
							<div class="pricing-header pricing-amount">
								<div class="annual_price">
									<h2 class="price">$80.50</h2>
								</div>
								<!-- /.annual_price -->

								<div class="monthly_price">
									<h2 class="price">$16.97</h2>
								</div>
								<!-- /.monthly_price -->

								<h3 class="price-title">Standard Account</h3>
								<p>Only for first month</p>
							</div>
							<!-- /.pricing-header -->

							<ul class="price-feture">
								<li class="have">Limited Acess Library</li>
								<li class="have">Single User</li>
								<li class="have">eCommerce Store</li>
								<li class="have">Hotline Support 24/7</li>
								<li class="not">No Updates</li>
							</ul>

							<div class="action text-center">
								<a href="#" class="pix-btn btn-outline">Get Started</a>
							</div>
						</div>
						<!-- /.pricing-table -->
					</div>
					<!-- /.col-lg-4 -->

					<div class="col-lg-4">
						<div class="pricing-table color-three">

							<div class="pricing-header pricing-amount">
								<div class="annual_price">
									<h2 class="price">$180.70</h2>
								</div>
								<!-- /.annual_price -->

								<div class="monthly_price">
									<h2 class="price">$29.45</h2>
								</div>
								<!-- /.monthly_price -->

								<h3 class="price-title">Premium Account</h3>
								<p>Only for first month</p>
							</div>
							<!-- /.pricing-header -->

							<ul class="price-feture">
								<li class="have">Limited Acess Library</li>
								<li class="have">Single User</li>
								<li class="have">eCommerce Store</li>
								<li class="have">Hotline Support 24/7</li>
								<li class="have">No Updates</li>
							</ul>

							<div class="action text-center">
								<a href="#" class="pix-btn btn-outline">Get Started</a>
							</div>
						</div>
						<!-- /.pricing-table -->
					</div>
					<!-- /.col-lg-4 -->


				</div>
				<!-- /.advanced-pricing-table -->
			</div>
			<!-- /.container -->

		</section>
		<!-- /.pricing -->

		<!--===============================-->
		<!--=         Testimonial         =-->
		<!--===============================-->
		<section class="testimonials-three">

			<div class="container">
				<div class="section-title text-center">
					<h3 class="sub-title wow pixFadeUp">Testimonial</h3>
					<h2 class="title-two wow pixFadeUp" data-wow-delay="0.3s">
						Mas de <span>3.400 asesorias</span> ya confian en pixsaas para mejorar la
						gestion de sus despachos profesionales.
					</h2>
				</div><!-- /.section-title -->

				<div id="testimonial-wrapper-three">
					<div class="swiper-container wow pixFadeUp" data-wow-delay="0.5s" id="testimonial-slider-three" data-speed="700" data-autoplay="5000" data-perpage="1" data-space="90" data-breakpoints='{"768": {"spaceBetween": 50}, "640": {"spaceBetween": 30}}'>
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="testimonial-three">

									<div class="avatar">
										<img src="{{ asset('temp/media/testimonial/4.jpg') }}" alt="testimonial">
									</div>
									<!-- /.avatar -->

									<div class="testimonial-content">

										<div class="bio-info">
											<h3 class="name">Desmond Eagle</h3>
											<span class="job">Web designer</span>
										</div>

										<!-- /.testimonial-bio -->
										<p>Horse play a blinding shot the little rotter nice one ummm I'm telling bits and bobs grub boot that bevvy, cockup matie.!</p>
									</div>
									<!-- /.testimonial-content -->


								</div>
								<!-- /.testimonial-three -->
							</div>

							<div class="swiper-slide">
								<div class="testimonial-three">

									<div class="avatar">
										<img src="{{ asset('temp/media/testimonial/4.jpg') }}" alt="testimonial">
									</div>
									<!-- /.avatar -->

									<div class="testimonial-content">
										<div class="testimonial-bio">
											<div class="bio-info">
												<h3 class="name">Desmond Eagle</h3>
												<span class="job">Web designer</span>
											</div>
										</div>
										<!-- /.testimonial-bio -->
										<p>Horse play a blinding shot the little rotter nice one ummm I'm telling bits and bobs grub boot that bevvy, cockup matie.!</p>
									</div>
									<!-- /.testimonial-content -->


								</div>
								<!-- /.testimonial-three -->
							</div>

							<div class="swiper-slide">
								<div class="testimonial-three">

									<div class="avatar">
										<img src="{{ asset('temp/media/testimonial/4.jpg') }}" alt="testimonial">
									</div>
									<!-- /.avatar -->



									<div class="testimonial-content">
										<div class="testimonial-bio">
											<div class="bio-info">
												<h3 class="name">Desmond Eagle</h3>
												<span class="job">Web designer</span>
											</div>
										</div>
										<!-- /.testimonial-bio -->
										<p>Horse play a blinding shot the little rotter nice one ummm I'm telling bits and bobs grub boot that bevvy, cockup matie.!</p>
									</div>
									<!-- /.testimonial-content -->


								</div>
								<!-- /.testimonial-three -->
							</div>

						</div><!-- /.swiper-wrapper -->

						<div class="slider-nav">
							<div id="slide-prev" class="swiper-button-prev">
								<div class="arrow"></div>
							</div>
							<div id="slide-next" class=" swiper-button-next">
								<div class="arrow"></div>
							</div>
						</div>

					</div>
					<!-- /.swiper-containe -->

					<div class="quote">
						<img src="{{ asset('temp/media/testimonial/quote2.png') }}" alt="">
					</div>
				</div>
				<!-- /#testimonial-wrapper -->
			</div>
			<!-- /.container -->
		</section><!-- /.testimonial -->

		<!--========================-->
		<!--=         Team         =-->
		<!--========================-->
		<section class="newsletter-two" id="newsletter">
			<div class="container">

				<div class="newsletter-content-two text-center wow pixFadeUp">
					<h2 class="title">
						Comprueba ahora como<br> pixsaas trabaja para tu asesoria
					</h2>

					<p class="description">
						Solicita una demo personalizada para descubrir como pixsaas puede ayudarte a mejorar la<br>
						gestion de los clientes de tu despacho profesional.
					</p>
				</div>
				<!-- /.newsletter-content -->

				<form action="php/subscribe.php" method="post" class="newsletter-form-two wow pixFadeUp" data-pixsaas="newsletter-subscribe">
					<div class="newsletter-inner">

						<input type="email" name="email" class="form-control" id="newsletter-form-email" placeholder="Enter your Email" required>
						<button type="submit" name="submit" id="newsletter-submit" class="newsletter-submit">
							<span class="btn-text">Subscribe Now!</span>
							<i class="fas fa-spinner fa-spin"></i>
						</button>
						<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
					</div>
					<!-- /.newsletter-inner -->

					<div class="clearfix"></div>
					<div class="form-result alert">
						<div class="content"></div>
					</div>
					<!-- /.form-result-->
				</form>

			</div>
			<!-- /.container -->

			<div class="scroll-circle wow pixFadeUp">
				<img src="{{ asset('temp/media/background/circle12.png') }}" data-parallax='{"y" : -230}' alt="circle6">
			</div>
		</section>
		<!-- /.newsletter -->

@endsection
