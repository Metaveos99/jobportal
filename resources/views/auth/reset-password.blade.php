<x-guest-layout>
    <div class="container"> 
        <div class="row login-register-cover">
          <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="text-center">                       
              <p class="font-sm text-brand-2">Forgot Password</p>
              <h2 class="mt-10 mb-5 text-brand-1">Reset Your Password</h2>
              
            </div>
            <form class="login-register text-start mt-20" method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-group">
                    <x-text-input id="email" class="block mt-1 w-full" type="hidden" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="input-4">Password *</label>
                    <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="input-5">Re-Password *</label>
                    <input class="form-control" id="input-5" type="password" required="" name="password_confirmation" placeholder="************">
                    @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                
              <div class="form-group">
                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="continue">Continue</button>
              </div>
              
            </form>
          </div>
          <div class="img-1 d-none d-lg-block"><img class="shape-1" src="/assets/imgs/page/login-register/img-5.svg" alt="JobBox"></div>
          <div class="img-2"><img src="/assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
        </div>
      </div>




</x-guest-layout>
