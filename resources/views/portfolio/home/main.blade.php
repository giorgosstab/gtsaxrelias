@extends('portfolio.main')

@section('title', 'Home')

@section('extra-css')

@endsection

@section('content')
    <!-- Start Header Section -->
    <section class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="header-content">

                        <!-- Header Title -->
                        <h1 class="title" data-aos="fade-down" data-aos-delay="200">Modern & Creative<br />Agency .inc</h1>

                        <!-- Header Text -->
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <!-- Header Button -->
                        <a href="#" class="btn-one">Get Started Now</a>
                    </div>
                </div>

                <div class="col-12 col-lg-7 d-none d-lg-block">
                    <div class="image">

                        <!-- Header Image -->
                        <img class="img-fluid" src="{{asset('assets/img/svg/header.svg')}}" alt="header" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header Section -->


    <!-- Start Service Section -->
    <section class="service">
        <div class="container">

            <!-- Section Header -->
            <div class="section-header text-center">

                <!-- Section Header Title -->
                <p class="section-title">
                    What We Do
                </p>

                <!-- Section Header Text -->
                <h4 class="section-text">
                    Some Of Our<br />Professional <span>service</span>
                </h4>
            </div>

            <div class="row">

                <!-- Service Item -->
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="item">

                        <!-- Service Image -->
                        <div class="icon">
                            <img src="{{asset('assets/img/svg/advertising.svg')}}" alt="Advertising">
                        </div>

                        <!-- Service Title -->
                        <h4 class="title">
                            <a href="services.html">Advertising and<br>Marketing</a>
                        </h4>

                        <!-- Service Text -->
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <!-- Service Button -->
                        <a href="services.html" class="service-btn fas fa-plus"></a>

                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="item">

                        <!-- Service Image -->
                        <div class="icon">
                            <img src="{{asset('assets/img/svg/web-design.svg')}}" alt="Web Design">
                        </div>

                        <!-- Service Title -->
                        <h4 class="title">
                            <a href="services.html">Web Design and<br/>Development</a>
                        </h4>

                        <!-- Service Text -->
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <!-- Service Button -->
                        <a href="services.html" class="service-btn fas fa-plus"></a>

                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="item">

                        <!-- Service Image -->
                        <div class="icon">
                            <img src="{{asset('assets/img/svg/responsive.svg')}}" alt="Responsive Design">
                        </div>

                        <!-- Service Title -->
                        <h4 class="title">
                            <a href="services.html">Responsive and<br/>Adaptive Design</a>
                        </h4>

                        <!-- Service Text -->
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <!-- Service Button -->
                        <a href="services.html" class="service-btn fas fa-plus"></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->


    <!-- Start Partners Section -->
    <section class="partners">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-7">
                    <div class="image">

                        <!-- Partners Image -->
                        <img class="img-fluid" src="{{asset('assets/img/source/partners.png')}}" alt="Partners">
                    </div>
                </div>
                <div class="col-12 col-lg-5 m-auto">

                    <!-- Section Header -->
                    <div class="section-header text-left">

                        <!-- Section Header Title -->
                        <p class="section-title">
                            Why Choose Us?
                        </p>

                        <!-- Section Header Text -->
                        <h4 class="section-text">
                            We Are Business<br /><span>Partners</span>
                        </h4>

                        <!-- Section Header Description -->
                        <p class="section-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                    </div>

                    <!-- Accordion -->
                    <ul id="accordion">

                        <!-- Accordion Item 1 -->
                        <li class="item">
                            <div class="data" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                <div class="icon">
                                    <i class="plus fas fa-plus"></i>
                                    <i class="minus fas fa-minus"></i>
                                </div>

                                <!-- Accordion Item Header -->
                                <p>We Are Passionate And Creative</p>
                            </div>

                            <div class="content">
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">

                                    <!-- Accordion Item Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Accordion Item 2 -->
                        <li class="item">
                            <div class="data" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                <div class="icon">
                                    <i class="plus fas fa-plus"></i>
                                    <i class="minus fas fa-minus"></i>
                                </div>

                                <!-- Accordion Item Header -->
                                <p>Open Source And Free Software</p>
                            </div>

                            <div class="content">
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">

                                    <!-- Accordion Item Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Accordion Item 3 -->
                        <li class="item">
                            <div class="data" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                                <div class="icon">
                                    <i class="plus fas fa-plus"></i>
                                    <i class="minus fas fa-minus"></i>
                                </div>

                                <!-- Accordion Item Header -->
                                <p>Very Fast And Reliable</p>
                            </div>

                            <div class="content">
                                <div id="collapseThree" class="collapse" data-parent="#accordion">

                                    <!-- Accordion Item Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <!-- Learning More Button -->
                    <a href="about.html" class="btn-one">Learning More</a>

                </div>
            </div>
        </div>
    </section>
    <!-- End Partners Section -->


    <!-- Start Work Section -->
    <section class="work">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 m-auto">

                    <!-- Section Header -->
                    <div class="section-header text-left">

                        <!-- Section Header Title -->
                        <p class="section-title">
                            Our Latest Work
                        </p>

                        <!-- Section Header Text -->
                        <h4 class="section-text">
                            One Of Our<br /><span>Latest Work</span>
                        </h4>

                        <!-- Section Header Description -->
                        <p class="section-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                    </div>

                    <!-- Skills -->
                    <div class="skills">

                        <!-- Skill Item -->
                        <div class="item">

                            <!-- Skill Title -->
                            <div class="title clearfix">
                                <p>Bootstrap<span>75%</span></p>
                            </div>

                            <!-- Skill Bar -->
                            <div class="progress-bar">
                                <div class="line" style="width: 75%;"></div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="item">

                            <!-- Skill Title -->
                            <div class="title clearfix">
                                <p>Html<span>80%</span></p>
                            </div>

                            <!-- Skill Bar -->
                            <div class="progress-bar">
                                <div class="line" style="width: 80%;"></div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="item">

                            <!-- Skill Title -->
                            <div class="title clearfix">
                                <p>Php<span>55%</span></p>
                            </div>

                            <!-- Skill Bar -->
                            <div class="progress-bar">
                                <div class="line" style="width: 55%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Our Works Button -->
                    <a href="#" class="btn-one">Our Works</a>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="image">

                        <!-- Latest Work Image -->
                    <img class="img-fluid" src="{{asset('assets/img/source/work.png')}}" alt="Work">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work Section -->


    <!-- Start Team Section -->
    <section class="team">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-7">
                    <div class="image">

                        <!-- Our Team Image -->
                        <img class="img-fluid" src="{{asset('assets/img/source/team.png')}}" alt="Team">
                    </div>
                </div>
                <div class="col-12 col-lg-5 m-auto">

                    <!-- Section Header -->
                    <div class="section-header text-left">

                        <!-- Section Header Title -->
                        <p class="section-title">
                            About Us
                        </p>

                        <!-- Section Header Text -->
                        <h4 class="section-text">
                            Our Awesome<br /><span>Team Member</span>
                        </h4>

                        <!-- Section Header Description -->
                        <p class="section-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                        </p>
                    </div>

                    <!-- Our Team Feature Title -->
                    <p class="team-title">Some Of Our Team Feature:</p>

                    <!-- Our Team Feature Items -->
                    <ul class="team-feature">
                        <li>Professional And Reliable Members</li>
                        <li>Self Awareness And Professional Development</li>
                        <li>Leadership And Management In Engineering</li>
                    </ul>

                    <!-- About Us Button -->
                    <a href="about.html" class="btn-one">About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->


        <!-- Start Solution Section -->
        <section class="solution">
            <div class="container">

                <!-- Section Header -->
                <div class="section-header text-left mb-3">

                    <!-- Section Header Title -->
                    <p class="section-title">
                        Business Solution
                    </p>

                    <!-- Section Header Text -->
                    <h4 class="section-text">
                        Explore Our Course For Your<br /><span>Business Solution</span>
                    </h4>

                    <!-- Section Header Description -->
                    <p class="section-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2 m-auto">
                        <div class="button">

                            <!-- Navigation Button -->
                            <div class="navigation btn-one prev"><i class="fas fa-angle-left"></i></div>
                            <div class="navigation btn-one next"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-sm-9 col-lg-10">
                        <div class="content">
                            <div class="owl-carousel owl-theme">

                                <!-- Solution Items -->
                                <div class="item">

                                    <!-- Item Image -->
                                    <img class="img-fluid" src="{{asset('assets/img/gallery/seo.jpg')}}" alt="Seo" />
                                    <div class="data">

                                        <!-- Item Title -->
                                        <a class="title" href="blog-post.html">Search Engine And Optimizing:<br />Smart Optimizing</a>

                                        <!-- Item Author -->
                                        <p class="author">Dolly Rapid</p>

                                        <!-- Item View -->
                                        <p class="view"><span>12,870</span><i class="fas fa-eye"></i></p>
                                    </div>
                                </div>

                                <div class="item">

                                    <!-- Item Image -->
                                    <img class="img-fluid" src="{{asset('assets/img/gallery/web-design.jpg')}}" alt="Web Design" />
                                    <div class="data">

                                        <!-- Item Title -->
                                        <a class="title" href="blog-post.html">Web Design And Development:<br />Build Your Website</a>

									<!-- Item Author -->
									<p class="author">Jaden Row</p>

									<!-- Item View -->
									<p class="view"><span>9,701</span><i class="fas fa-eye"></i></p>
								</div>
							</div>

							<div class="item">

								<!-- Item Image -->
								<img class="img-fluid" src="{{asset('assets/img/gallery/marketing.jpg')}}" alt="Marketing" />
								<div class="data">

									<!-- Item Title -->
									<a class="title" href="blog-post.html">Advertising And Marketing:<br />Ready To Start</a>

									<!-- Item Author -->
									<p class="author">Smith Forks</p>

									<!-- Item View -->
									<p class="view"><span>1,894</span><i class="fas fa-eye"></i></p>
								</div>
							</div>

							<div class="item">

								<!-- Item Image -->
								<img class="img-fluid" src="{{asset('assets/img/gallery/cooperation.jpg')}}" alt="Cooperation" />
								<div class="data">

									<!-- Item Title -->
									<a class="title" href="blog-post.html">Cooperation And Competition:<br />Theory And Research</a>

									<!-- Item Author -->
									<p class="author">Kutch Ramp</p>

									<!-- Item View -->
									<p class="view"><span>5,274</span><i class="fas fa-eye"></i></p>
								</div>
							</div>

							<div class="item">

								<!-- Item Image -->
								<img class="img-fluid" src="{{asset('assets/img/gallery/travel.jpg')}}" alt="Cooperation" />
								<div class="data">

									<!-- Item Title -->
									<a class="title" href="blog-post.html">Around The World With:<br />Knife Fork And Spoon</a>

									<!-- Item Author -->
									<p class="author">Larry Viaduct</p>

									<!-- Item View -->
									<p class="view"><span>793</span><i class="fas fa-eye"></i></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Solution Section -->

	<!-- Start Testimonials Section -->
	<section class="testimonials">
		<div class="container">

			<!-- Section Header -->
			<div class="section-header text-left mb-3">

				<!-- Section Header Title -->
				<p class="section-title">
					Testimonials
				</p>

				<!-- Section Header Text -->
				<h4 class="section-text">
					What Makes Us<br /><span>Unique</span>
				</h4>

				<!-- Section Header Description -->
				<p class="section-description">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="row">
				<div class="col-12 col-sm-4 col-md-3 col-lg-2 m-auto">
					<div class="button">

						<!-- Navigation Button -->
						<div class="navigation btn-three prev"><i class="fas fa-angle-left"></i></div>
						<div class="navigation btn-three next"><i class="fas fa-angle-right"></i></div>
					</div>
				</div>
				<div class="col-12 col-sm-8 col-sm-9 col-lg-10">
					<div class="content">
						<div class="owl-carousel owl-theme">

							<!-- Testimonials Items -->
							<div class="item">

								<!-- Item Description -->
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

								<div class="profile">

									<!-- Item Image Profile -->
									<img class="img-fluid" src="{{asset('assets/img/profile/1.jpg')}}" alt="profile" />

									<!-- Item Image Profile -->
									<p class="author">Dolly Rapid</p>
								</div>
							</div>

							<div class="item">

								<!-- Item Description -->
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

								<div class="profile">

									<!-- Item Image Profile -->
									<img class="img-fluid" src="{{asset('assets/img/profile/2.jpg')}}" alt="profile" />

									<!-- Item Image Profile -->
									<p class="author">Jaden Row</p>
								</div>
							</div>

							<div class="item">

								<!-- Item Description -->
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

								<div class="profile">

									<!-- Item Image Profile -->
									<img class="img-fluid" src="{{asset('assets/img/profile/3.jpg')}}" alt="profile" />

									<!-- Item Image Profile -->
									<p class="author">Smith Forks</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonials Section -->


    <!-- Start Sponsors Section -->
    @include('portfolio.partials.sponsors.main')
    <!-- End Sponsors Section -->

@endsection
