<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="/" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fas fa-film"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">     
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img 
                alt="user-avatar"
                class="rounded-circle"
                height="40" 
                width="40"
                src="{{ asset('/storage/public/posts/'.Auth::user()->gambar) }}" >
                <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
                {{-- <span class="d-none d-lg-inline-flex">NAMA</span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="/userDetail" class="dropdown-item"><i class="fas fa-user"></i> My Profile</a>
                <a href="{{ route('logout') }}" class="dropdown-item"><i class="fas fa-power-off"></i> Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->