<!-- Start Navigation Bar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Navbar Logo -->
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('assets/img/logo-light.png')}}" alt="Revex">
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-icon"><i class="fas fa-bars"></i></span>
        </button>

        <!-- Header Navbar Links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="#homes">Home</a>
                    <ul>
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index-2.html">Home 2</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pages">Pages</a>
                    <ul>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#blog">Blog</a>
                    <ul>
                        <li><a href="blog-post.html">Blog Post</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                @guest
                    <li class="nav-item dropdown">
                        <a class="btn-one" href="#GetStart">Get Start</a>
                        <ul>
                            <li><a href="{{ route('login') }}">Sign In</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Sign Up</a></li>
                            @endif
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="25">
                            {{ Auth::user()->name }}
                        </a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Admin</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation Bar -->
