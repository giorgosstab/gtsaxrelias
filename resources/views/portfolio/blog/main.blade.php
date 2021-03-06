@extends('portfolio.main')

@section('title', 'Blog')

@section('extra-css')

@endsection

@section('content')
    <!-- Start Blog List Page Section -->
    <section class="blog-list">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <!-- Blog Post Items -->
                    <div class="blog-item">

                        <!-- Blog Post Image -->
                        <div class="image">
                            <a href="blog-post.html"><img class="img-fluid" src="{{ asset('assets/img/gallery/marketing.jpg') }}" alt="Marketing" /></a>
                        </div>

                        <!-- Blog Post Data -->
                        <div class="content">

                            <!-- Blog Author -->
                            <p class="author"><i class="fas fa-user-alt pr-2"></i>Smith Forks</p>

                            <!-- Blog Time -->
                            <time datetime="2018-06-24 19:00"><i class="far fa-calendar-alt pr-2"></i>24 June 2018</time>

                            <!-- Blog Title -->
                            <h1><a class="title" href="blog-post.html">Advertising And Marketing: Ready To Start</a></h1>

                            <!-- Blog Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <!-- Blog ReadMore Button -->
                            <a class="btn-two" href="blog-post.html">Read More<i class="fas fa-angle-right pl-2"></i></a>

                            <!-- Blog List Social Share -->
                            <ul class="social-blog">
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-item">

                        <!-- Blog Post Image -->
                        <div class="image">
                            <a href="blog-post.html"><img class="img-fluid" src="{{ asset('assets/img/gallery/seo.jpg') }}" alt="Seo" /></a>
                        </div>

                        <!-- Blog Post Data -->
                        <div class="content">

                            <!-- Blog Author -->
                            <p class="author"><i class="fas fa-user-alt pr-2"></i>Dolly Rapid</p>

                            <!-- Blog Time -->
                            <time datetime="2018-08-12 21:00"><i class="far fa-calendar-alt pr-2"></i>12 August 2018</time>

                            <!-- Blog Title -->
                            <a class="title" href="blog-post.html">Search Engine And Optimizing: Smart Optimizing</a>

                            <!-- Blog Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <!-- Blog ReadMore Button -->
                            <a class="btn-two" href="blog-post.html">Read More<i class="fas fa-angle-right pl-2"></i></a>

                            <!-- Blog List Social Share -->
                            <ul class="social-blog">
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-item">

                        <!-- Blog Post Image -->
                        <div class="image">
                            <a href="blog-post.html"><img class="img-fluid" src="{{ asset('assets/img/gallery/travel.jpg') }}" alt="Travel" /></a>
                        </div>

                        <!-- Blog Post Data -->
                        <div class="content">

                            <!-- Blog Author -->
                            <p class="author"><i class="fas fa-user-alt pr-2"></i>Larry Viaduct</p>

                            <!-- Blog Time -->
                            <time datetime="2018-10-29 23:00"><i class="far fa-calendar-alt pr-2"></i>29 October 2019</time>

                            <!-- Blog Title -->
                            <a class="title" href="blog-post.html">Around The World With: Knife Fork And Spoon</a>

                            <!-- Blog Description -->
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <!-- Blog ReadMore Button -->
                            <a class="btn-two" href="blog-post.html">Read More<i class="fas fa-angle-right pl-2"></i></a>

                            <!-- Blog List Social Share -->
                            <ul class="social-blog">
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Blog List Pagination -->
                    <ul class="pagination">
                        <li><a class="active" href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
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
    <!-- End Blog List Page Section -->
@endsection
