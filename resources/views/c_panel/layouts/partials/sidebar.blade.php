<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-center">
                <div class="logo">
                    <img src="{{ asset('assets/images/logo/kawa.png') }}" alt="Logo"
                        style="width: 100px; height: auto;">
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
            </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('banner.index') ? 'active' : '' }}">
            <a href="{{ route('banner.index') }}" class='sidebar-link'>
            <i class="bi bi-image"></i>
            <span>Banner</span>
            </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('category.index') ? 'active' : '' }}">
            <a href="{{ route('category.index') }}" class='sidebar-link'>
            <i class="bi bi-tag"></i>
            <span>Kategori</span>
            </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('story.index') ? 'active' : '' }}">
            <a href="{{ route('story.index') }}" class='sidebar-link'>
            <i class="bi bi-book"></i>
            <span>Cerita</span>
            </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('menu.index') ? 'active' : '' }}">
            <a href="{{ route('menu.index') }}" class='sidebar-link'>
            <i class="bi bi-menu-button-wide"></i>
            <span>Menu</span>
            </a>
            </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
