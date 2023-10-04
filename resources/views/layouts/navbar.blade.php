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
                <i class="fas fa-user"></i>
                {{-- <span class="d-none d-lg-inline-flex text-uppercase fw-bold">{{Auth::user()->username}}</span> --}}
                {{-- <span class="d-none d-lg-inline-flex">NAMA</span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary rounded-0 rounded-bottom m-0 shadow-sm p-3" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                    <img 
                alt="user-avatar"
                class="rounded-circle"
                height="60" 
                width="60"
                src="{{ asset('/storage/public/posts/'.Auth::user()->gambar) }}">
                        <h1 class="mb-1 fs-5 text-uppercase">{{Auth::user()->username}}</h1>
                        <div class="mb-3">
                            <span>{{Auth::user()->jabatan}}</span> | <span>{{Auth::user()->group}}</span>
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <a href="{{ route('logout') }}" class="btn btn-primary"><i class="fas fa-power-off"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>