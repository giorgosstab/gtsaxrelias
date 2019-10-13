@extends('portfolio.main')

@section('title', 'About Us')

@section('extra-css')
    <!-- Odometer CSS -->
    {{Html::style('assets/css/odometer-theme-default.css')}}
@endsection

@section('content')
    <!-- Start About Us Page Section -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">

                    <!-- About Us Item -->
                    <div class="about-item">

                        <!-- About Us Item Icon -->
                        <div class="icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>

                        <!-- About Us Item Title -->
                        <a class="title" href="#">Modern And Creative</a>

                        <!-- About Us Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <!-- About Us Item -->
                    <div class="about-item">

                        <!-- About Us Item Icon -->
                        <div class="icon">
                            <i class="fas fa-landmark"></i>
                        </div>

                        <!-- About Us Item Title -->
                        <a class="title" href="#">Modern And Creative</a>

                        <!-- About Us Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <!-- About Us Item -->
                    <div class="about-item">

                        <!-- About Us Item Icon -->
                        <div class="icon">
                            <i class="fab fa-magento"></i>
                        </div>

                        <!-- About Us Item Title -->
                        <a class="title" href="#">Modern And Creative</a>

                        <!-- About Us Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 col-lg-7">
                    <div class="image">

                        <!-- Latest Work Image -->
                        <img class="img-fluid" src="{{ asset('assets/img/source/laptop.jpg') }}" alt="Work">
                    </div>
                </div>

                <div class="col-12 col-lg-5 m-auto">

                    <!-- Section Header -->
                    <div class="section-header text-left">

                        <!-- Section Header Title -->
                        <p class="section-title">
                            What We Do
                        </p>

                        <!-- Section Header Text -->
                        <h4 class="section-text">
                            We Are Modern &<br /><span>Creative</span>
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
                </div>
            </div>

            <!-- About Us Action -->
            <div class="row action">
                <div class="col-12 col-sm-6 col-lg-3">

                    <!-- About Action Item -->
                    <div class="item">

                        <!-- About Action Counter -->
                        <p class="counter"><span>+</span><span class="odometer" data-value="1970">0</span></p>

                        <!-- About Action Description -->
                        <span class="description">Happy Users</span>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">

                    <!-- About Action Item -->
                    <div class="item">

                        <!-- About Action Counter -->
                        <p class="counter"><span>+</span><span class="odometer" data-value="122">0</span></p>

                        <!-- About Action Description -->
                        <span class="description">Projects</span>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">

                    <!-- About Action Item -->
                    <div class="item">

                        <!-- About Action Counter -->
                        <p class="counter"><span>+</span><span class="odometer" data-value="10">0</span></p>

                        <!-- About Action Description -->
                        <span class="description">Years Experience</span>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">

                    <!-- About Action Item -->
                    <div class="item">

                        <!-- About Action Counter -->
                        <p class="counter"><span>+</span><span class="odometer" data-value="54">0</span></p>

                        <!-- About Action Description -->
                        <span class="description">Client</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Page Section -->


    <!-- Start About Us Page Video Section -->
    <section class="about-video">
        <div class="container">

            <!-- Section Header -->
            <div class="section-header text-center">

                <!-- Section Header Title -->
                <p class="section-title">
                    our Team Members
                </p>

                <!-- Section Header Text -->
                <h4 class="section-text">
                    How We Work! See Our<br />Workstation In <span>Revex</span>
                </h4>

                <!-- Section Header Description -->
                <p class="section-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

            <!-- Play Video Button -->
            <a class="play" href="#"><i class="fas fa-caret-right"></i></a>
        </div>
    </section>
    <!-- End About Us Page Video Section -->
@endsection

@section('extra-script')
    <!-- Odometer -->
    {{Html::script('assets/js/odometer.min.js')}}
@endsection
