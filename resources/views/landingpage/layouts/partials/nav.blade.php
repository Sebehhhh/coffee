<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Kawa<small>Ngopi</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item {{ request()->is('menu') ? 'active' : '' }}"><a href="{{ url('/menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item {{ request()->is('services') ? 'active' : '' }}"><a href="{{ url('/services') }}" class="nav-link">Layanan</a></li>
                <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}"><a href="{{ url('/blog') }}" class="nav-link">Info KAWAnan</a></li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}" class="nav-link">Tentang Kami</a></li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}" class="nav-link">Kontak Kami</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
