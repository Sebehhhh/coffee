<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="font-family: 'GT Super'; font-weight: 700;"><span style="color: #c49b63;">Kawa</span><small style="font-weight: 500;"><b>Ngopi</b></small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item {{ request()->is('p_menu') ? 'active' : '' }}"><a href="{{ url('/p_menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item {{ request()->is('p_gallery') ? 'active' : '' }}"><a href="{{ url('/p_gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item {{ request()->is('p_blog') ? 'active' : '' }}"><a href="{{ url('/p_blog') }}" class="nav-link">Info KAWAnan</a></li>
                <li class="nav-item {{ request()->is('p_about') ? 'active' : '' }}"><a href="{{ url('/p_about') }}" class="nav-link">Tentang Kami</a></li>
            </ul>
        </div>
    </div>
</nav>
