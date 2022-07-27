<!DOCTYPE html>
<html>
<!-- HEAD Start -->
<?php

echo "testing";

include_once('include/head.php');
?>
<!-- HEAD End -->
<body>	


	<div class="home-page" >
		<!-- header -->
		<?php include 'include/header.php';?>
		<!-- main -->
		<main>	


			<section class="hero-banner-section">
				<div class="video-background">
					<div class="video-foreground">   
						<video src="./video/evolv_video.mp4" id="myvideo" autoplay="true" muted="muted" controls style="background:black"></video>
						<!-- Vimeo -->
						<!-- <iframe src="https://player.vimeo.com/video/361827449?background=1" frameborder="0" allowfullscreen></iframe> -->
					</div>
					<div class="overlay"></div>
				</div>
				<div class="container">
					<!-- <div class="row align-items-center">
						<div class="col-md-12">
							<h2 class="text-white text-center mb-4"><a href="#" class="text-white">Become a community member, free for 14 days</a> </h2>
						</div>	
					</div> -->					
					<div class="row align-items-center">						
						<div class="col-lg-6">
							<div class="banner-text text-center text-lg-left mb-5 mb-lg-0 wow fadeInLeft">

								<h1 class="text-white hoverable">How do you want to <span>Evolv</span> today?</h1>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="search-group wow fadeInRight" >
								<div class="input-group ">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><img src="images/search-white.svg" alt="Icon"></span>
									</div>
									<input type="text" class="form-control mt-0" placeholder="Search Categories" aria-label="Username" aria-describedby="basic-addon1">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button">GO!</button>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>				
			</section>
			<!-- service -->
			<section class="section pb-4 pt-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="section-title text-center wow fadeInDown">								
								<h2>Evolv your reality. You're right where you're supposed to be.</h2>								
							</div>
							<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut </h6>
						</div>
					</div>
					<div class="row justify-content-center mt-5 ">
						<div class="col-sm-6 col-lg-4">
							<a href="psychic-readings.php" class="d-block">
								<div class="service-box-wapper text-center wow fadeInUp">
									<div class="service-box-icon">
										<img src="images/psychic.svg" alt="Icon">
									</div>
									<div class="service-box-info">
										<h5>Psychic Readings</h5>									
										<h6>Go beyond the physical world to get
											a deeper insight into your life with
											some of the world's most
											practiced and gifted
										psychics</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4">
							<a href="energy-healing.php" class="d-block">
								<div class="service-box-wapper text-center wow fadeInUp"  data-wow-delay="0.6s">
									<div class="service-box-icon">
										<img src="images/energy.svg" alt="Icon">
									</div>
									<div class="service-box-info">
										<h5>Energy Healing</h5>
										<h6>Tap into our network of energy medicine
											healers to restore wellness and
											brine your vital life force
										back into sync.</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4">
							<a href="#" class="d-block">
								<div class="service-box-wapper text-center wow fadeInUp"  data-wow-delay="0.7s">
									<div class="service-box-icon">
										<img src="images/yoga.svg" alt="Icon">
									</div>
									<div class="service-box-info">
										<h5>Yoga </h5>
										<h6>Be connected to yoga classes, instructors,
											and yogis across the world to strengthen
										the Mind-Body balance and find your zen </h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4">
							<a href="metaphysical.php" class="d-block">
								<div class="service-box-wapper text-center wow fadeInUp"  data-wow-delay="0.8s">
									<div class="service-box-icon">
										<img src="images/metaphysical.svg" alt="Icon">

									</div>
									<div class="service-box-info">
										<h5>Metaphysical Classes</h5>
										<h6>Expand your mind and nurture your innate
											abilities with development courses and
											workshops from renowned
										practitioners. </h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4">
							<a href="#" class="d-block">
								<div class="service-box-wapper text-center wow fadeInUp"  data-wow-delay="0.9s">
									<div class="service-box-icon">
										<img src="images/meditation.svg" alt="Icon">
									</div>
									<div class="service-box-info">
										<h5>Meditation </h5>
										<h6>Release all that does not serve you by
											learning to balance your energy and
											deepen your connection through
										mindfulness </h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4">
							<a href="#" class="d-block">
								<div class="service-box-wapper text-center wow fadeInUp"  data-wow-delay="0.9s">
									<div class="service-box-icon">
										<img src="images/product.svg" alt="Icon">
									</div>
									<div class="service-box-info">
										<h5>Products </h5>
										<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. </h6>
									</div>
								</div>
							</a>
						</div>

					</div>
				</div>
			</section>
			<!-- Featured Events -->
			<section class="section bg-light-blue">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-md-6 col-xl-5">
							<div class="section-title text-center text-sm-left wow fadeInLeft">
								<h2>Featured Events Products & Services</h2>								
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="info-wrap text-center text-sm-left  wow fadeInRight">
								<h6>Search for talented psychics, dedicated practitioners, and development courses across the globe. </h6>
							</div>
						</div>
					</div>

					<!-- Psychic Readings -->
					<div class="row mt-4 mt-md-5">
						<div class="col-md-12">
							<div class="info-wrap text-center text-sm-left  wow fadeInDown">
								<h4>Psychic Readings <a href="psychic-readings.php" class="float-right d-none d-sm-inline-block"> View More</a></h4>
							</div>
						</div>
					</div>
					<div class="row psychic-readings-wrapper">
						<div class="col-md-12">
							<div class="service-slider-box-wrapper">
								<div class="service-slider-two mb-5">
									<div class="item">
										<a href="mediumship.php" class="d-block">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/theon-img-4.jpg" class="figure-img w-100 m-0" alt="Image">
													<figcaption class="figure-caption  wow fadeInUp object-position-center"><h4>Mediumship</h4></figcaption>
												</figure>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="traditionalreadings.php" class="d-block">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/theon-img-3.jpg" class="figure-img w-100 m-0" alt="Image">
													<figcaption class="figure-caption  wow fadeInUp"><h4>Traditional Readings</h4></figcaption>
												</figure>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="animalcommunication.php" class="d-block">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/theon-img-2.jpg" class="figure-img w-100 m-0" alt="Image">
													<figcaption class="figure-caption  wow fadeInUp"><h4>Animal Communication</h4></figcaption>
												</figure>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="specializedreadings.php" class="d-block">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/theon-img-1.jpg" class="figure-img w-100 m-0 object-position-center" alt="Image">
													<figcaption class="figure-caption wow fadeInUp"><h4>Specialized Readings</h4></figcaption>
												</figure>
											</div>
										</a>
									</div>
										<!-- <div class="item">
											<a href="julieParker.php" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/JulieParker.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption  wow fadeInUp"><h4>Julie Parker<span>Psychic Readings  </span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div> -->
										<!-- <div class="item">
											<a href="riaan.php" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/Riaan-img.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption  wow fadeInUp"><h4>Riaan Van Niekerk<span>Mediumship  </span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div> -->


									</div>
								</div>
							</div>
						</div>
						<!-- Energy Healing -->
						<div class="row  mb-4 mb-md-0">
							<div class="col-md-12">
								<div class="info-wrap text-center text-sm-left  wow fadeInDown">
									<a href="psychic-readings.php" class="btn btn-primary d-block d-sm-none"> View More</a>
								</div>
							</div>
						</div>
						
						<!-- Energy Healing -->
						<div class="row   mt-4 mt-md-0">
							<div class="col-md-12">
								<div class="info-wrap text-center text-sm-left  wow fadeInDown">
									<h4>Energy Healing <a href="energy-healing.php" class="float-right d-none d-sm-inline-block"> View More</a></h4>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="service-slider-box-wrapper">
									<div class="service-slider mb-5">
										<div class="item">
											<a href="sita-flammer.php" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/yoga/heal-1.jpeg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption  wow fadeInUp"><h4>Energetic Health<span>Sita Flammer</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/PsychospiritualHealing.jpeg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption  wow fadeInUp"><h4>Psychospiritual Healing<span>Julie Parker</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/PsychicenergyealingServices.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption  wow fadeInUp"><h4>Psychic Energy Healing Services<span>Theon Paulino-Filippelli</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/HealingwithReiki.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption  wow fadeInUp"><h4>Psychospiritual Healing<span>Julie Parker</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<!-- <div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/PsychicenergyealingServices.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption  wow fadeInUp"><h4>Psychic Energy Healing Services<span>Theon Paulino-Filippelli</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div> -->
									</div>
								</div>
							</div>
						</div>
						<div class="row   mb-4 mb-md-0">
							<div class="col-md-12">
								<div class="info-wrap text-center text-sm-left  wow fadeInDown">
									<a href="energy-healing.php" class="btn btn-primary d-block d-sm-none"> View More</a>
								</div>
							</div>
						</div>
						<!-- Courses & Workshops -->
						<div class="row  mt-4 mt-md-0">
							<div class="col-md-12">
								<div class="info-wrap text-center text-sm-left  wow fadeInDown">
									<h4>Courses & Workshops</h4>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="service-slider-box-wrapper">
									<div class="service-slider-three mb-5">
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/SpiritualCoaching.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption wow fadeInUp"><h4>Spiritual Coaching<span>Julie Parker</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/AstralProjection.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption wow fadeInUp"><h4>Astral Projection<span>Theon Paulino-Filippelli</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/CandleGazing.png" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption wow fadeInUp"><h4>Candle Gazing<span>Steve Harders</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/PalmistryFaceReading.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption wow fadeInUp"><h4>Palmistry & Face Reading<span>Riaan Van Niekerk</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<!-- <div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/AstralProjection.jpg" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption wow fadeInUp"><h4>Astral Projection<span>Theon Paulino-Filippelli</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/CandleGazing.png" class="figure-img w-100 m-0" alt="Image">
														<figcaption class="figure-caption wow fadeInUp"><h4>Candle Gazing<span>Steve Harders</span></h4></figcaption>
													</figure>
												</div>
											</a>
										</div> -->
									</div>
								</div>
							</div>
						</div>
						<!-- Products -->
						<div class="row  mt-4 mt-md-0">
							<div class="col-md-12">
								<div class="info-wrap text-center text-sm-left  wow fadeInDown">
									<h4>Products</h4>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="service-slider-box-wrapper">
									<div class="service-slider-three mb-5">
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/pro-img-1.jpg" class="figure-img w-100 m-0" alt="Image">
														<!-- <figcaption class="figure-caption wow fadeInUp"><h4>Grand Piano<span>Lorem ipsum</span></h4></figcaption> -->
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/pro-img-2.jpg" class="figure-img w-100 m-0" alt="Image">
														<!-- <figcaption class="figure-caption wow fadeInUp"><h4>Spanish Guitar<span>Lorem ipsum</span></h4></figcaption> -->
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/pro-img-3.jpg" class="figure-img w-100 m-0" alt="Image">
														<!-- <figcaption class="figure-caption wow fadeInUp"><h4>Black Marshall Headphones<span>Lorem ipsum</span></h4></figcaption> -->
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/pro-img-4.jpg" class="figure-img w-100 m-0" alt="Image">
														<!-- <figcaption class="figure-caption wow fadeInUp"><h4>Gigabyte Speaker<span>Lorem ipsum</span></h4></figcaption> -->
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/pro-img-5.jpg" class="figure-img w-100 m-0" alt="Image">
														<!-- <figcaption class="figure-caption wow fadeInUp"><h4>Gigabyte Speaker<span>Lorem ipsum</span></h4></figcaption> -->
													</figure>
												</div>
											</a>
										</div>
										<div class="item">
											<a href="#" class="d-block">
												<div class="service-slider-item-box">
													<figure class="figure w-100 d-block">
														<img src="images/pro-img-6.jpg" class="figure-img w-100 m-0" alt="Image">
														<!-- <figcaption class="figure-caption wow fadeInUp"><h4>Gigabyte Speaker<span>Lorem ipsum</span></h4></figcaption> -->
													</figure>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Events -->
						<div class="row mt-5 mt-md-0">
							<div class="col-md-12  m-auto">
								<div class="info-wrap text-center   wow fadeInDown" >
									<h4>Events</h4>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12  m-auto">
								<div class="events-slider-box-wrapper">
									<div class="events-slider">
										<div class="item">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/yoga/yoga-9.jpg" class="figure-img w-100 m-0" alt="Image">
													<figcaption class="figure-caption  wow fadeInLeft">
														<div class="enevt-info">
															<h2 class="event-date"><span>17</span>DEC</h2>
															<h2><a href="events.php"> Full Moon Gazing Retreat "Recalibrating the Heart"</a></h2>
															<h6><strong> Vedanta Spiritual & Holistic Retreat</strong><br/>
															41208 Hot Springs Dr, California Hot Springs, CA, United States</h6>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
										<div class="item">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/yoga/yoga-8.jpeg" class="figure-img w-100 m-0" alt="Image">
													<figcaption class="figure-caption  wow fadeInLeft">
														<div class="enevt-info">
															<h2 class="event-date"><span>18</span>DEC</h2>
															<h2><a href="events.php"> Full Moon Gazing Retreat "Recalibrating the Heart"</a></h2>
															<h6><strong> Vedanta Spiritual & Holistic Retreat</strong><br/>
															41208 Hot Springs Dr, California Hot Springs, CA, United States</h6>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
										<div class="item">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/yoga/meditation-5.jpeg" class="figure-img w-100 m-0" alt="Image">
													<figcaption class="figure-caption  wow fadeInLeft">
														<div class="enevt-info">
															<h2 class="event-date"><span>19</span>DEC</h2>
															<h2><a href="events.php"> Full Moon Gazing Retreat "Recalibrating the Heart"2</a></h2>
															<h6><strong> Vedanta Spiritual & Holistic Retreat</strong><br/>
															41208 Hot Springs Dr, California Hot Springs, CA, United States</h6>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
										<div class="item">
											<div class="service-slider-item-box">
												<figure class="figure w-100 d-block">
													<img src="images/yoga/hand-1.jpg" class="figure-img w-100 m-0" alt="Image">
													<figcaption class="figure-caption  wow fadeInLeft">
														<div class="enevt-info">
															<h2 class="event-date"><span>20</span>DEC</h2>
															<h2><a href="#"> Full Moon Gazing Retreat "Recalibrating the Heart"3</a></h2>
															<h6><strong> Vedanta Spiritual & Holistic Retreat</strong><br/>
															41208 Hot Springs Dr, California Hot Springs, CA, United States</h6>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>

					</div>
				</section>
				<!-- Quotes -->
				<section class="section ">
					<div class="container">
						<div class="row pb-5">
							<div class="col-md-12 col-xl-10 m-auto">
								<div class="row align-items-center">
									<div class="col-md-6 col-xl-7 ">
										<div class=" wow fadeInLeft">
											<img src="images/quotes.svg" alt="Icon" class="mb-4">
											<blockquote class="blockquote">
												<h3 class="mb-0">When I started my journey, I had to go to so many different sources and use all sorts of apps to try to piece together my path. Evolv gives me one place to get answers and exchange insights with others like me.</h3>
												<div class="blockquote-footer"><h6>Nikkia Wilson</h6></div>
											</blockquote>
										</div>

									</div>
									<div class="col-md-6 col-xl-5">
										<div class="qoute-img design-img-wrapper  wow fadeInRight">
											<img src="images/Nikkia-Wilson.jpg" alt="quote">
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- blog -->
						<div class="row justify-content-between align-items-center mt-5">
							<div class="col-md-12">
								<div class="section-title text-center text-sm-left  wow fadeInLeft">
									<h2>Blogs</h2>								
								</div>
							</div>
						<!-- <div class="col-md-5 col-xl-4">
							<div class="info-wrap text-center text-sm-left  wow fadeInRight">
								<h6>Sapien faucibus et molestie ac. Semper viverra nam libero justo laoreet.</h6>
							</div>
						</div> -->
					</div>

					<div class="row mt-5">
						<div class="col-md-12">
							<div class="blog-slider-box-wrapper">
								<div class="blog-slider">
									<div class="item">
										<div class="blog-box-wrapper  wow fadeInUp">
											<div class="blog-img-wrapper">
												<img src="images/JessicaMiller-image.jpg" alt="Image">
												<!-- <h6 class="blog-date">December 1, 2021</h6> -->
											</div>
											<div class="blog-shot-info-box text-center text-sm-left">
												<h5><a href="blog-detail.php"> What is it Like on the Other Side?</a></h5>
												<p>I started channeling Archangel Michael in November 2021 as part of a 
												training class on channeling divine beings and ascended masters.</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="blog-box-wrapper  wow fadeInUp"  data-wow-delay="0.6s">
											<div class="blog-img-wrapper">
												<img src="images/yoga/yoga-2.jpeg" alt="Image">
												<!-- <h6 class="blog-date">January 31st, 2022</h6> -->
											</div>
											<div class="blog-shot-info-box text-center text-sm-left">
												<h5><a href="Balance-Starts-with-Kindness.php">Balance Starts with Kindness</a> </h5>
												<p>Your life may seem filled with over-scheduling, overpromising, over-committing yourself. 24 hours seem like just not enough time in the confines of days that fly by at breakneck speed. </p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="blog-box-wrapper  wow fadeInUp"  data-wow-delay="0.7s">
											<div class="blog-img-wrapper">
												<img src="images/yoga/yoga-7.jpeg" alt="Image">
												<!-- <h6 class="blog-date">08 Sep 2021</h6> -->
											</div>
											<div class="blog-shot-info-box text-center text-sm-left">
												<h5><a href="blogs.php"> Gift Guide #9: The Hard-to-Shop-For Crowd (You Know Who You Are)</a></h5>
												<p>We're looking at you, teenagers.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- contact -->
			<section class="section  bg-blue">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-md-6 col-xl-7">
							<div class="section-title text-center text-md-left mb-4 mb-md-0 wow fadeInLeft">
								<h2 class="text-white pb-0">Don’t see what you’re looking for? </h2>		
								<!-- <h4  class="text-white pb-0">Give an inquiry!</h4>						 -->
							</div>
						</div>
						<div class="col-md-6 col-xl-5">
							<div class=" text-center text-lg-right  wow fadeInRight ">								
								<!-- <a href="signup.php" class="btn btn-secondary">Register to be a practitioner</a> -->
								<a href="contact.php" class="btn btn-secondary">Send us an inquiry</a>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main>	
		<!-- footer -->
		<?php include 'include/footer.php';?>	
		<?php include 'include/script.php';?>



		<script type="text/javascript">
// menuToggle



var myvid = document.getElementById('myvideo');
myvid.play();

var myvids = [
// "http://localhost/evolv/video/evolv_video.mp4", 
// "http://localhost/evolv/video/v2.mp4", 
// "./video/v2.mp4", 
"./video/evolv_video.mp4"
];
var activeVideo = 0;

myvid.addEventListener('ended', function(e) {
  // update the active video index
  activeVideo = (++activeVideo) % myvids.length;

  // update the video source and play
  myvid.src = myvids[activeVideo];
  myvid.play();
});


</script>
</div>
</body>
</html>