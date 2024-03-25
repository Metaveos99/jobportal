<x-guest-layout>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card p-2">
                    <div class="card-header">
                        <h3>Verify Email Address</h3>
                    </div>
                    <div class="card-body">
                        <p class="font-sm ">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </p>
                        @if (session('status') == 'verification-link-sent')
                            <p class="font-sm text-muted mb-30">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </p>
                        @endif
                        <div class="mt-4 d-flex justify-content-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div>
                                    <button class="btn btn-default">
                                        {{ __('Resend Verification Email') }}
                                    </button>
                                </div>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="btn btn-danger">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
            <div class="img-1 d-none d-lg-block"><img class="shape-1" src="/assets/imgs/page/login-register/img-4.svg" alt="JobBox"></div>
          <div class="img-2"><img src="/assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
        </div>
    </div>
</x-guest-layout>
