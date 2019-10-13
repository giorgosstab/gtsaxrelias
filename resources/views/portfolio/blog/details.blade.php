@extends('portfolio.main')

@section('title', 'Blog In')

@section('extra-css')

@endsection

@section('content')
    <!-- Start Blog Post Page Section -->
    <section class="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <!-- Blog Post -->
                    <div class="blog">

                        <!-- Blog Post Image -->
                        <div class="image">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/marketing.jpg') }}" alt="marketing" />
                        </div>

                        <!-- Blog Post Content -->
                        <div class="content">

                            <!-- Blog Post Title -->
                            <p class="title">Advertising And Marketing: Ready To Start</p>

                            <!-- Blog Post Author -->
                            <p class="author"><i class="fas fa-user-alt pr-2"></i>Smith Forks</p>

                            <!-- Blog Post Time -->
                            <time datetime="2018-06-24 19:00"><i class="far fa-calendar-alt pr-2"></i>24 June 2018</time>

                            <!-- Blog Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <!-- Blog Post Gallery -->
                            <div class="row clearfix">
                                <div class="col-12 col-md-6">
                                    <div class="gallery">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/cooperation.jpg') }}" alt="Cooperation" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="gallery">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/seo.jpg') }}" alt="Seo" />
                                    </div>
                                </div>
                            </div>

                            <!-- Bold Description Heading -->
                            <h4>Building Your Website For Free</h4>

                            <!-- Blog Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="share clearfix">

                                <!-- Blog Post Tags -->
                                <div class="tags">
                                    <p class="sub-title">Tags:</p>

                                    <a href="#">Wordpress</a>
                                    <a href="#">Marketing</a>
                                    <a href="#">Seo</a>
                                    <a href="#">Advertising</a>
                                </div>

                                <!-- Blog Post Social Share -->
                                <ul class="social-blog">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>

                            <!-- Blog Post Comments -->
                            <div class="comments">

                                <!-- Blog Post Group Title -->
                                <h4 class="group-title">Comments(2)</h4>

                                <!-- Blog Post Comment Box -->
                                <div class="comment-box">

                                    <!-- Blog Post Comment Author -->
                                    <div class="thumb">
                                        <img class="img-fluid" src="{{ asset('assets/img/profile/2.jpg') }}" alt="Smith Forks" />
                                    </div>

                                    <!-- Blog Post Comment Data -->
                                    <div class="data">
                                        <div class="header">

                                            <!-- Blog Post Comment Author Name -->
                                            <h5>Smith Forks</h5>

                                            <!-- Blog Post Comment Time -->
                                            <time datetime="2018-08-12 21:00">12 August 2018 at 9:00 PM</time>

                                            <!-- Blog Post Comment Reply Button -->
                                            <a class="reply btn-one" href="#">Reply<i class="fas fa-angle-right pl-2"></i></a>
                                        </div>

                                        <!-- Blog Post Comment Data -->
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                    </div>
                                </div>

                                <!-- Blog Post Comment Box -->
                                <div class="comment-box">

                                    <!-- Blog Post Comment Author -->
                                    <div class="thumb">
                                        <img class="img-fluid" src="{{ asset('assets/img/profile/3.jpg') }}" alt="Dolly Rapid" />
                                    </div>

                                    <!-- Blog Post Comment Data -->
                                    <div class="data">
                                        <div class="header">

                                            <!-- Blog Post Comment Author Name -->
                                            <h5>Dolly Rapid</h5>

                                            <!-- Blog Post Comment Time -->
                                            <time datetime="2018-08-12 21:00">12 August 2018 at 9:00 PM</time>

                                            <!-- Blog Post Comment Reply Button -->
                                            <a class="reply btn-one" href="#">Reply<i class="fas fa-angle-right pl-2"></i></a>
                                        </div>

                                        <!-- Blog Post Comment Data -->
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Post Send Comments -->
                            <div class="form-comments">

                                <!-- Blog Post Group Title -->
                                <h4 class="group-title">Post A Comment</h4>

                                <!-- Blog Post Group Text -->
                                <p class="group-text">Your Email Address Will Not Be Published*</p>

                            </div>

                            <!-- Blog Post Send Comment Form -->
                            <div class="form">
                                <form class="form" action="" method="POST">
                                    <div class="row">

                                        <div class="col-12 col-sm-4 form-group">
                                            <input type="text" class="form-control" placeholder="Name*" name="name" required="">
                                        </div>

                                        <div class="col-12 col-sm-4 form-group">
                                            <input type="email" class="form-control" placeholder="Email*" name="email" required="">
                                        </div>

                                        <div class="col-12 col-sm-4 form-group">
                                            <input type="text" class="form-control" placeholder="Website" name="website">
                                        </div>

                                        <div class="col-12 form-group">
                                            <textarea class="form-control" rows="6" name="comment" placeholder="Your Comment*" required=""></textarea>
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

                <aside class="sidebar col-12 col-lg-4">

                    <!-- Blog List Sidebar Search Form -->
                    <div class="search">
                        <form class="form-group" action="#" method="POST">

                            <!-- Blog List Sidebar Search Input -->
                            <input type="text" class="form-control" placeholder="Search..." required>

                            <!-- Blog List Sidebar Search Button -->
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <!-- Blog List Sidebar Popular Articles -->
                    <div class="popular">

                        <!-- Blog List Sidebar Sidebar Title -->
                        <h5 class="sidebar-title">Popular Articles</h5>

                        <!-- Blog List Sidebar Popular Articles Item -->
                        <div class="post">

                            <!-- Blog List Sidebar Popular Articles Image -->
                            <div class="image">
                                <img src="{{ asset('assets/img/gallery/seo.jpg') }}" alt="Marketing" />
                            </div>

                            <!-- Blog List Sidebar Popular Articles Title -->
                            <a class="title" href="#">Search Engine And Optimizing</a>

                            <!-- Blog List Sidebar Popular Articles Time -->
                            <time datetime="2018-08-12 21:00"><i class="far fa-calendar-alt pr-2"></i>12 August 2018</time>
                        </div>

                        <div class="post">

                            <!-- Blog List Sidebar Popular Articles Image -->
                            <div class="image">
                                <img src="{{ asset('assets/img/gallery/travel.jpg') }}" alt="Travel" />
                            </div>

                            <!-- Blog List Sidebar Popular Articles Title -->
                            <a class="title" href="#">Around The World With</a>

                            <!-- Blog List Sidebar Popular Articles Time -->
                            <time datetime="2018-08-12 21:00"><i class="far fa-calendar-alt pr-2"></i>29 October 2019</time>
                        </div>

                        <div class="post">

                            <!-- Blog List Sidebar Popular Articles Image -->
                            <div class="image">
                                <img src="{{ asset('assets/img/gallery/cooperation.jpg') }}" alt="Cooperation" />
                            </div>

                            <!-- Blog List Sidebar Popular Articles Title -->
                            <a class="title" href="#">Cooperation And Competition</a>

                            <!-- Blog List Sidebar Popular Articles Time -->
                            <time datetime="2018-08-12 21:00"><i class="far fa-calendar-alt pr-2"></i>24 June 2018</time>
                        </div>
                    </div>

                    <!-- Blog List Sidebar Sidebar Comments -->
                    <div class="comment">

                        <!-- Blog List Sidebar Sidebar Title -->
                        <h5 class="sidebar-title">Recent Comment</h5>

                        <!-- Blog List Sidebar Popular Articles Item -->
                        <div class="item">

                            <!-- Blog List Sidebar Comment Image -->
                            <div class="image">
                                <img src="{{ asset('assets/img/profile/1.jpg') }}" alt="Smith Forks" />
                            </div>

                            <!-- Blog List Sidebar Comment Title -->
                            <a class="title" href="#">Smith Forks</a>

                            <!-- Blog List Sidebar Comment Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>

                            <!-- Blog List Sidebar Comment Time -->
                            <a class="article" href="blog-post.html">View Article<i class="pl-1 fas fa-angle-right"></i></a>
                        </div>

                        <div class="item">

                            <!-- Blog List Sidebar Comment Image -->
                            <div class="image">
                                <img src="{{ asset('assets/img/profile/2.jpg') }}" alt="Larry Viaduct" />
                            </div>

                            <!-- Blog List Sidebar Comment Title -->
                            <a class="title" href="#">Larry Viaduct</a>

                            <!-- Blog List Sidebar Comment Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>

                            <!-- Blog List Sidebar Comment Time -->
                            <a class="article" href="blog-post.html">View Article<i class="pl-1 fas fa-angle-right"></i></a>
                        </div>

                        <div class="item">

                            <!-- Blog List Sidebar Comment Image -->
                            <div class="image">
                                <img src="{{ asset('assets/img/profile/3.jpg') }}" alt="Dolly Rapid" />
                            </div>

                            <!-- Blog List Sidebar Comment Title -->
                            <a class="title" href="#">Dolly Rapid</a>

                            <!-- Blog List Sidebar Comment Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>

                            <!-- Blog List Sidebar Comment Time -->
                            <a class="article" href="blog-post.html">View Article<i class="pl-1 fas fa-angle-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog List Sidebar Sidebar Tags -->
                    <div class="sidebar-tags">

                        <!-- Blog List Sidebar Sidebar Title -->
                        <h5 class="sidebar-title">Tags</h5>

                        <!-- Blog List Sidebar Sidebar Tags Links -->
                        <a href="#">Wordpress</a>
                        <a href="#">Travel</a>
                        <a href="#">World</a>
                        <a href="#">Marketing</a>
                        <a href="#">Global</a>
                        <a href="#">Seo</a>
                        <a href="#">Advertising</a>
                        <a href="#">Optimizing</a>
                    </div>

                    <!-- Blog List Sidebar Sidebar Category -->
                    <div class="category">

                        <!-- Blog List Sidebar Sidebar Title -->
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            <li><a href="#">Music<span>(3)</span></a></li>
                            <li><a href="#">Travel<span>(2)</span></a></li>
                            <li><a href="#">Life Style<span>(5)</span></a></li>
                            <li><a href="#">Global<span>(7)</span></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- End Blog Post Page Section -->
@endsection
