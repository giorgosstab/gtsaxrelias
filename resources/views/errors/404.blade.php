@extends('portfolio.main')

@section('title', 'Page Not Found')

@section('content')
    <!-- Start Error Page Section -->
    <section class="error">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 m-auto">

                    <!-- 404 Error Oops -->
                    <h2 class="oops">Oops...</h2>

                    <!-- 404 Error Title -->
                    <p class="title">Page Not Found!</p>

                    <!-- 404 Error Description -->
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <!-- 404 Error Buttons -->
                    <a class="btn-three mr-3" href="index.html">Go To Home</a>
                    <a class="btn-three" href="contact.html">Contact US</a>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="image">

                        <!-- 404 Error Image -->
                        <img class="img-fluid" src="img/source/404.png" alt="404"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Page Section -->
@endsection
