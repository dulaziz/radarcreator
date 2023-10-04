    <!-- Sign In Start -->
    
    <div class="container-fluid">
   
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                @if(Session::has('fail'))
    <div class="alert alert-danger" >
       {{Session::get('fail')}}
    </div>
@endif
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fas fa-film me-2"></i>Radar Creator</h3>
                        </a>
                      
                        <h3>Sign In</h3>

                    </div>
                    <form action="signIn/login" method="post">
                        @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="name">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <a href="">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                    {{-- <p class="text-center mb-0">Don't have an Account? <a href="/signUp">Sign Up</a></p> --}}
                </div>
</form>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>
