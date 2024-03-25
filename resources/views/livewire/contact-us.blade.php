<section class="section-box mt-70">
    <div class="container">
        <div class="container">
            @if (session('Success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <span>{{session('Success')}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
      <div class="row">
        <div class="col-lg-8 mb-40"><span class="font-md color-brand-2 mt-20 d-inline-block">Contact us</span>
          <h2 class="mt-5 mb-10">Get in touch</h2>
          <p class="font-md color-text-paragraph-2">The right move at the right time saves your investment. live<br class="d-none d-lg-block"> the dream of expanding your business.</p>
          <form class="contact-form-style mt-30" wire:submit="save">
            <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
              <div class="col-lg-6 col-md-6">
                <div class="input-style mb-20">
                  <input class="font-sm color-text-paragraph-2" wire:model="name" placeholder="Enter your name" type="text">
                  @error('name')
                      <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="input-style mb-20">
                  <input class="font-sm color-text-paragraph-2" wire:model="company_name" placeholder="Company (optioanl)" type="text">
                  @error('company')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="input-style mb-20">
                  <input class="font-sm color-text-paragraph-2" wire:model="email" placeholder="Your email" type="email">
                  @error('email')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="input-style mb-20">
                  <input class="font-sm color-text-paragraph-2" wire:model="number" placeholder="Phone number" type="tel">
                  @error('number')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="textarea-style mb-30">
                  <textarea class="font-sm color-text-paragraph-2" wire:model="message" placeholder="Tell us about yourself"></textarea>
                  @error('message')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <button class="submit btn btn-send-message" type="submit">Send message</button>
              </div>
            </div>
          </form>
          <p class="form-messege"></p>
        </div>
        <div class="col-lg-4 text-center d-none d-lg-block"><img src="assets/imgs/page/contact/img.png" alt="joxBox"></div>
      </div>
    </div>
  </section>
