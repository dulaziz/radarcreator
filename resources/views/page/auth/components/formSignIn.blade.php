    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-md-4">
                <div class="bg-secondary rounded p-4">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger" >
                        {{Session::get('fail')}}
                        </div>
                    @endif
                        {{-- <div class="d-flex align-items-center justify-content-between mb-3"> --}}
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="text-primary fs-4">
                                    <i class="fas fa-film me-2"></i>
                                    <span>Radar Creator</span>
                                </h3>
                                <p class="mb-0">Sign In</p>
                            </div>
                        <form action="signIn/login" method="post">
                                @csrf
                                <div class="d-flex flex-column gap-3">
                                    <div class="">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="name">
                                    </div>
                                    <div class="">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <hr>
                            <button type="submit" class="btn btn-primary w-100 fw-bold">Sign In</button>
                        </form>
                            {{-- <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="name">
                                <label for="username">Username</label>
                            </div> --}}
                            {{-- <div class="form-floating mb-5">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div> --}}
                            {{-- <p class="text-center mb-0">Don't have an Account? <a href="/signUp">Sign Up</a></p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
