@extends('portfolio.main')

@section('title', 'About Us')

@section('extra-css')
    <!-- Odometer CSS -->
    {{Html::style('assets/css/mapbox-gl.css')}}
@endsection

@section('content')
    <!-- Start Contact Us Page Section -->
    <section class="contact-page">
        <div class="container">

            <!-- Section Header -->
            <div class="section-header text-center">

                <!-- Section Header Title -->
                <p class="section-title">
                    Contact Us
                </p>

                <!-- Section Header Text -->
                <h4 class="section-text">
                    We’d Love To Hear From You, Lets<br /><span>Get In Touch!</span>
                </h4>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">

                    <!-- Contact Us Description -->
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>

                    <div class="contact">

                        <!-- Footer Contact Us Item -->
                        <div class="item">

                            <!-- Footer Contact Us Icon -->
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>

                            <!-- Footer Contact Us Data -->
                            <p class="data">4131 Main St Mill Village, NS B0J 2H0, Canada</p>
                        </div>

                        <!-- Footer Contact Us Item -->
                        <div class="item">

                            <!-- Footer Contact Us Icon -->
                            <div class="icon"><i class="fas fa-phone"></i></div>

                            <!-- Footer Contact Us Data -->
                            <p class="data">+(202) 555-0178</p>
                        </div>

                        <!-- Footer Contact Us Item -->
                        <div class="item">

                            <!-- Footer Contact Us Icon -->
                            <div class="icon"><i class="fas fa-fax"></i></div>

                            <!-- Footer Contact Us Data -->
                            <p class="data">+(202) 666-0179</p>
                        </div>

                        <!-- Footer Contact Us Item -->
                        <div class="item">

                            <!-- Footer Contact Us Icon -->
                            <div class="icon"><i class="fas fa-envelope-open"></i></div>

                            <!-- Footer Contact Us Data -->
                            <p class="data">hello@yourbrand.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">

                    <!-- Blog Post Send Comment Form -->
                    <div class="form">
                        <form class="form" action="https://revex-demo.000webhostapp.com/contact.html" method="POST">
                            <div class="row">

                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Name*" name="name" required="">
                                </div>

                                <div class="col-12 form-group">
                                    <input type="email" class="form-control" placeholder="Email*" name="email" required="">
                                </div>

                                <div class="col-12 form-group">
                                    <textarea class="form-control" rows="5" name="message" placeholder="Your Message*" required=""></textarea>
                                </div>

                                <div class="col-12 form-group">
                                    <input type="submit" class="button btn-one text-uppercase" value="Send">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us Page Section -->


    <!-- Start Map Section -->
    <section class="map">
        <div id="map"></div>
    </section>
    <!-- End Map Section -->
@endsection

@section('extra-script')
    <!-- Odometer -->
    {{Html::script('assets/js/mapbox-gl.js')}}
@endsection
