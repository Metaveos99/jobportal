<x-guest-layout>

    <div class="container"> 
        <div class="row login-register-cover">
          <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="text-center">                       
              <p class="font-sm text-brand-2">Forgot Password</p>
              <h2 class="mt-10 mb-5 text-brand-1">Reset Your Password</h2>
              <p class="font-sm text-muted mb-30">
                 Enter email address associated with your account and 
                we'll send you a link to reset your password
              </p>
              <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>
            <form class="login-register text-start mt-20" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                <label class="form-label" for="input-1">Email address *</label>
                <input class="form-control" id="input-1" type="text" required="" name="email" placeholder="stevenjob@gmail.com">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="continue">Continue</button>
              </div>
              <div class="text-muted text-center">Don't have an Account? <a href='{{route('register')}}'>Sign up</a></div>
            </form>
          </div>
          <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-5.svg" alt="JobBox"></div>
          <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
        </div>
      </div>

</x-guest-layout>
