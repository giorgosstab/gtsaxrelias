@extends('portfolio.main')

@section('title', 'Sign In')

@section('extra-css')

@endsection

@section('content')
    <!-- Start Account Page Section -->
    <section class="account">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 content">

                    <!-- Left Title -->
                    <h1 class="left-title">Hello<br />World.</h1>

                    <!-- Left Description -->
                    <p class="left-description">Lorem ipsum dolor sit amet, consecteturadipisicing elitsed do eiusmod tempor...</p>

                    <!-- Login With Social Title -->
                    <p class="social">Login With Social Media</p>

                    <!-- Facebook Login -->
                    <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter Login -->
                    <a class="twitter" href="#"><i class="fab fa-twitter pr-2"></i>Login With Twitter</a>
                </div>

                <div class="col-12 col-lg-6 m-auto">

                    <div class="form">

                        <!-- Right Title -->
                        <p class="right-title">Login</p>

                        <!-- Right Description -->
                        <p class="right-description">Lorem ipsum dolor sit amet, consecteturadipisicing elitsed do eiusmod tempor...</p>
                        <form class="form-group" method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Login Input Item -->
                            <div class="wrapper">

                                <!-- Login Input Icon -->
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>

                                <!-- Login Input -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="margin-top: -8px;margin-bottom: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Login Input Item -->
                            <div class="wrapper">

                                <!-- Login Input Icon -->
                                <div class="icon">
                                    <i class="fas fa-lock"></i>
                                </div>

                                <!-- Login Input -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="margin-top: -8px;margin-bottom: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="clearfix">

                                <!-- Remember Me-->
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label align-middle" for="remember">{{ __('Remember Me') }}</label>
                                </div>

                                <!-- Forget Password Link -->
                                @if (Route::has('password.request'))
                                    <a class="forget" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <!-- Sign in Button -->
                            <button type="submit" class="button btn-three text-uppercase">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Account Page Section -->
@endsection
