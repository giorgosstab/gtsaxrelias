@extends('portfolio.main-dark')

@section('title', 'Home')

@section('extra-css')

@endsection

@section('content')
    <!-- Start Account Page Section -->
    <section class="account register">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 m-auto">
                    <div class="form">

                        <!-- Right Title -->
                        <p class="right-title">Register</p>

                        <!-- Right Description -->
                        <p class="right-description">Lorem ipsum dolor sit amet, consecteturadipisicing elitsed do eiusmod tempor...</p>
                        <form class="form-group" action="{{ route('register') }}" method="POST">
                            @csrf
                            <!-- Register Input Item -->
                            <div class="wrapper">

                                <!-- Register Input Icon -->
                                <div class="icon">
                                    <i class="fas fa-user-alt"></i>
                                </div>

                                <!-- Register Input -->
                                <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="margin-top: -8px;margin-bottom: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <!-- Register Input Item -->
                            <div class="wrapper">

                                <!-- Register Input Icon -->
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>

                                <!-- Register Input -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="margin-top: -8px;margin-bottom: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Register Input Item -->
                            <div class="wrapper">

                                <!-- Register Input Icon -->
                                <div class="icon">
                                    <i class="fas fa-lock"></i>
                                </div>

                                <!-- Register Input -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="margin-top: -8px;margin-bottom: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Register Input Item -->
                            <div class="wrapper">

                                <!-- Register Input Icon -->
                                <div class="icon">
                                    <i class="fas fa-lock"></i>
                                </div>

                                <!-- Register Input -->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>

                            <div class="clearfix">

                                <!-- Forget Password Link -->
                                <a class="login" href="login.html">Already have an account?</a>
                            </div>

                            <!-- Sign in Button -->
                            <Button type="submit" class="button btn-three text-uppercase">{{ __('Register') }}</Button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6 content">

                    <!-- Left Title -->
                    <h1 class="left-title">Hello<br />World.</h1>

                    <!-- Left Description -->
                    <p class="left-description">Lorem ipsum dolor sit amet, consecteturadipisicing elitsed do eiusmod tempor...</p>

                    <!-- Register With Social Title -->
                    <p class="social">Register With Social Media</p>

                    <!-- Facebook Register -->
                    <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter Register -->
                    <a class="twitter" href="#"><i class="fab fa-twitter pr-2"></i>Register With Twitter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Account Page Section -->
@endsection
