@extends('portfolio.main')

@section('title', 'Home')

@section('extra-css')

@endsection

@section('content')
    <!-- Start Services Page Section -->
    <section class="services-page">
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Web Design and<br>Development</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fas fa-tablet-alt"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Responsive and<br>Adaptive Design</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Advertising and<br>Marketing</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Material Design<br>For Android</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Web Design and<br>Development</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fas fa-atom"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Responsive and<br>Adaptive Design</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fab fa-hornbill"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Advertising and<br>Marketing</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <!-- Service Page Item -->
                    <div class="item">

                        <!-- Service Page Item Icon -->
                        <div class="icon">
                            <i class="fab fa-android"></i>
                        </div>

                        <!-- Service Page Item Title -->
                        <p class="title">Material Design<br>For Android</p>

                        <!-- Service Page Item Description -->
                        <p class="description">Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Page Section -->


    <!-- Start Plan Section -->
    <section class="plan pb-4">
        <div class="container">

            <!-- Section Header -->
            <div class="section-header text-center">

                <!-- Section Header Title -->
                <p class="section-title">
                    Our Packages
                </p>

                <!-- Section Header Text -->
                <h4 class="section-text">
                    Choose a Package Tailored To<br /><span>Your Needs</span>
                </h4>

                <!-- Section Header Description -->
                <p class="section-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="price-item">

                        <!-- Package Image -->
                        <div class="icon">
                            <img src="{{ asset('assets/img/svg/subway.svg') }}" alt="Free" />
                        </div>

                        <!-- Package Price -->
                        <p class="price"><sup>$</sup>25</p>

                        <!-- Package Time Limit -->
                        <p class="limit">per month</p>

                        <!-- Package Type -->
                        <p class="type">Free</p>

                        <!-- Package Features -->
                        <ul class="feature">
                            <li>Limited Times Marketing</li>
                            <li>500 Analytics Campaigns</li>
                            <li class="del">250,000 Crawled Page</li>
                            <li class="del">Unlimited Updates</li>
                            <li class="del">Free Web Design</li>
                        </ul>

                        <!-- Package Get Started Button -->
                        <a class="btn-one button" href="#pricing">Get Started</a>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="price-item basic">

                        <!-- Package Image -->
                        <div class="icon">
                            <img src="{{ asset('assets/img/svg/car.svg') }}" alt="Basic" />
                        </div>

                        <!-- Package Price -->
                        <p class="price"><sup>$</sup>99</p>

                        <!-- Package Time Limit -->
                        <p class="limit">per month</p>

                        <!-- Package Type -->
                        <p class="type">Basic</p>

                        <!-- Package Features -->
                        <ul class="feature">
                            <li>Limited Times Marketing</li>
                            <li>500 Analytics Campaigns</li>
                            <li>250,000 Crawled Page</li>
                            <li class="del">Unlimited Updates</li>
                            <li class="del">Free Web Design</li>
                        </ul>

                        <!-- Package Get Started Button -->
                        <a class="btn-one button" href="#pricing">Get Started</a>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="price-item">

                        <!-- Package Image -->
                        <div class="icon">
                            <img src="{{ asset('assets/img/svg/ship.svg') }}" alt="Pro" />
                        </div>

                        <!-- Package Price -->
                        <p class="price"><sup>$</sup>125</p>

                        <!-- Package Time Limit -->
                        <p class="limit">per month</p>

                        <!-- Package Type -->
                        <p class="type">Pro</p>

                        <!-- Package Features -->
                        <ul class="feature">
                            <li>Limited Times Marketing</li>
                            <li>500 Analytics Campaigns</li>
                            <li>250,000 Crawled Page</li>
                            <li>Unlimited Updates</li>
                            <li>Free Web Design</li>
                        </ul>

                        <!-- Package Get Started Button -->
                        <a class="btn-one button" href="#pricing">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Plan Section -->


    <!-- Start Sponsors Section -->
    @include('portfolio.partials.sponsors.main')
    <!-- End Sponsors Section -->
@endsection
