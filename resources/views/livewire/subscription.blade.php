<section class="section-box mt-50 mb-20">
   
    <div class="container">
        <div class="container">
            @if (session('Success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <span>{{session('Success')}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="box-newsletter">
            <div class="row">
                <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                        src="/assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
                <div class="col-lg-12 col-xl-6 col-12">
                    <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                    <div class="box-form-newsletter mt-40">
                        <form class="form-newsletter" wire:submit='save'>
                            <input class="input-newsletter" type="text" wire:model='email'
                                placeholder="Enter your email here">
                             
                            <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                        </form>
                        @error('email')
                         <span class="text-danger">{{$message}}</span>    
                        @enderror  
                    </div>
                </div>
                <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                        src="/assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
            </div>
        </div>
    </div>
</section>
