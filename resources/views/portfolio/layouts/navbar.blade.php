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
            {{ menu('main', 'portfolio.partials.menus.main',['user'=> $user]) }}
        </div>
    </div>
</nav>
<!-- End Navigation Bar -->
