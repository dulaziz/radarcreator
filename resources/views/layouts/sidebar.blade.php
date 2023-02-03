<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fas fa-film me-2"></i>Radar Creator</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Radar Depok</span>
            </div>
        </div>
        <div class="navbar-nav w-100 mb-4">
            <a href="/" class="nav-item nav-link {{ ($title === "dashboard") ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/upload" class="nav-item nav-link {{ ($title === "upload") ? 'active' : '' }}"><i class="fas fa-upload me-2"></i>Upload</a>
            <a href="/uploaded" class="nav-item nav-link {{ ($title === "uploaded") ? 'active' : '' }}"><i class="fas fa-video me-2"></i>Uploaded</a>
            <a href="/revenue" class="nav-item nav-link {{ ($title === "revenue") ? 'active' : '' }}"><i class="fas fa-dollar-sign me-2"></i>Revenue</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Revenue</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/revenue" class="dropdown-item">All Revenue</a>
                    <a href="signup.html" class="dropdown-item">Personal Revenue</a>
                </div>
            </div> --}}
        </div>

        <h6 class="nav-link fw-bold">Admin</h6>
        <div class="navbar-nav w-100">
            <a href="/user" class="nav-item nav-link {{ ($title === "user") ? 'active' : '' }}"><i class="fa fa-users me-2"></i>User</a>    
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>

    </nav>
</div>
<!-- Sidebar End -->