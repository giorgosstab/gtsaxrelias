<!-- Start Navigation Bar -->
<nav class="navbar navbar-expand-lg @if (!Request::is('/')) {{ 'navbar-dark' }} @endif"> {{-- @if (Route::has('login') || Route::has('register')) {{ 'navbar-dark' }} @endif --}}
    <div class="container">

        <!-- Navbar Logo -->
        <a class="navbar-brand" href="{{ route('portfolio.home.index') }}">
            <img src="@if (!Request::is('/')) {{ asset('assets/img/logo-dark.png') }} @else{{ asset('assets/img/logo-light.png') }} @endif" alt="Revex">
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-icon"><i class="fas fa-bars"></i></span>
        </button>

        <!-- Header Navbar Links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            @if (Request::is('login') || Request::is('register'))
                {{ menu('main', 'portfolio.partials.menus.main') }}
            @else
                {{ menu('main', 'portfolio.partials.menus.main',['user'=> $user]) }}
            @endif
        </div>
    </div>
</nav>
<!-- End Navigation Bar -->
