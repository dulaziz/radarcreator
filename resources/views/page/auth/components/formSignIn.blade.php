    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-md-5">
                <div class="bg-secondary rounded p-5">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger" >
                        {{Session::get('fail')}}
                        </div>
                    @endif
                        {{-- <div class="d-flex align-items-center justify-content-between mb-3"> --}}
                            <div class="mb-5 text-center">
                            <h3 class="text-primary">
                                <i class="fas fa-film me-2"></i>
                                <span>Radar Creator</span>
                            </h3>
                            <span>Sign In</span>
                        </div>
                        <form action="signIn/login" method="post">
                                @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="name">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100">Sign In</button>
                            {{-- <p class="text-center mb-0">Don't have an Account? <a href="/signUp">Sign Up</a></p> --}}
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
