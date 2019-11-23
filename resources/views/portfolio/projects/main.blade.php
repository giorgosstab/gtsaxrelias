@extends('portfolio.main')

@section('title', 'About Us')

@section('extra-css')
    <style>
        @media screen and (min-width: 576px) {
            .button-text {
                display: none;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Start Contact Us Page Section -->
    <section class="solution blog-list">
        <div class="container">

            <!-- Section Header -->
            <div class="section-header text-center mb-5 mt-100">

                <!-- Section Header Title -->
                <p class="section-title">
                    Our Latest Work
                </p>

                <!-- Section Header Text -->
                <h4 class="section-text">
                    One Of Our<br /><span>Latest Work!</span>
                </h4>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-12 col-sm-2 col-md-1 col-lg-1 mt-2">
                    <div class="button">
                        <!-- Navigation Button -->
                        <div class="navigation btn-one prev"><i class="fas fa-angle-left"></i> <span class="button-text">Previous</span></div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-10 col-lg-10">
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
                <div class="col-12 col-sm-2 col-md-1 col-lg-1 mt-2">
                    <div class="button">
                        <!-- Navigation Button -->
                        <div class="navigation btn-one next"><span class="button-text">Next</span> <i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5 justify-content-md-center">
                <ul class="pagination">
                    <li><a class="active" href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Contact Us Page Section -->
@endsection
