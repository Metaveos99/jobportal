<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    
    <meta name="msapplication-config" content="browserconfig.html">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="assets/css/stylecd4e.css?version=4.1" rel="stylesheet">
    <title>Job Portal</title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="jobBox"></div>
        </div>
      </div>
    </div>

    {{-- Header Section Start --}}
      <x-header/>
    {{-- Header Section End --}}

    <main class="main">
      <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="mb-10">Recruiters</h2>
                <p class="font-lg color-text-paragraph-2">Post Job in Minutes & Get Unlimited Applications</p>
              </div>
              <div class="col-lg-6 text-lg-end">
                <ul class="breadcrumbs mt-40">
                  <li><a class="home-icon" href="#">Home</a></li>
                  <li>Recruiters</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      @auth

      @else
      <section class="section-box mt-50 mb-30  pt-100 pb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="pl-30">
                <h5 class="color-brand-2 mb-15 mt-15">#1 Hiring Platform</h5>
                <h2 class="color-brand-1 mt-0 mb-15">Create Your Recruiters Account</h2>
                <p class="font-lg color-text-paragraph-2">Work Profile is a personality assessment that measures an individual's work personality through their workplace traits, social and emotional traits; as well as the values and aspirations that drive them forward.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card p-2">
                <div class="card-body">
                    <livewire:recruiter-register/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endauth


      <section class="section-box mt-90">
        <div class="container">
          <h2 class="text-center mb-15 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Pricing Table</h2>
          <div class="font-lg color-text-paragraph-2 text-center wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Choose The Best Plan That’s For You</div>
          <div class="max-width-price">
            <div class="block-pricing mt-70">
              <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__ animate__fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                  <div class="box-pricing-item">
                    <h3>Basic</h3>
                    <div class="box-info-price"><span class="text-price color-brand-2">$19</span><span class="text-month">/month</span></div>
                    <div class="border-bottom mb-30">
                      <p class="text-desc-package font-sm color-text-paragraph mb-30">For most businesses that want to optimize web queries</p>
                    </div>
                    <ul class="list-package-feature">
                      <li>Unlimited updates</li>
                      <li>Custom designs &amp; features</li>
                      <li>Custom permissions</li>
                      <li>Custom instructors</li>
                      <li>Free support ticket</li>
                    </ul>
                    <div><a class="btn btn-border" href="#">Choose plan</a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__ animate__fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                  <div class="box-pricing-item">
                    <h3>Standard</h3>
                    <div class="box-info-price"><span class="text-price for-month display-month">$29</span><span class="text-month">/month</span></div>
                    <div class="border-bottom mb-30">
                      <p class="text-desc-package mb-30">For most businesses that want to otpimize web queries</p>
                    </div>
                    <ul class="list-package-feature">
                      <li>Unlimited updates</li>
                      <li>Custom designs &amp; features</li>
                      <li>Custom permissions</li>
                      <li>Custom instructors</li>
                      <li>Free support ticket</li>
                    </ul>
                    <div><a class="btn btn-border" href="#">Choose plan</a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__ animate__fadeInUp animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                  <div class="box-pricing-item">
                    <h3>Enterprıse</h3>
                    <div class="box-info-price"><span class="text-price for-month display-month">$49</span><span class="text-month">/month</span></div>
                    <div class="border-bottom mb-30">
                      <p class="text-desc-package mb-30">For most businesses that want to otpimize web queries</p>
                    </div>
                    <ul class="list-package-feature">
                      <li>Unlimited updates</li>
                      <li>Custom designs &amp; features</li>
                      <li>Custom permissions</li>
                      <li>Custom instructors</li>
                      <li>Free support ticket</li>
                    </ul>
                    <div><a class="btn btn-border" href="#">Choose plan</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-box mt-70 mb-40">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">How It Works</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Just via some simple steps, you will find your ideal candidates you’r looking for!</p>
          </div>
          <div class="mt-70"> 
            <div class="row"> 
              <div class="col-lg-4">
                <div class="box-step step-1">
                  <h1 class="number-element">1</h1>
                  <h4 class="mb-20">Register an<br class="d-none d-lg-block">account to start</h4>
                  <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step step-2">
                  <h1 class="number-element">2</h1>
                  <h4 class="mb-20">Explore over<br class="d-none d-lg-block">thousands of resumes</h4>
                  <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step">
                  <h1 class="number-element">3</h1>
                  <h4 class="mb-20">Find the most<br class="d-none d-lg-block">suitable candidate</h4>
                  <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>

      <section class="section-box bg-15 pt-50 pb-50 mt-80">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center mb-30"><img class="img-job-search mt-20" src="assets/imgs/page/homepage3/img-job-search.png" alt="jobBox"></div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
              <h2 class="mb-40">Job search for people passionate about startup</h2>
              <div class="box-checkbox mb-30">
                <h6>Create an account</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
              <div class="box-checkbox mb-30">
                <h6>Search for Jobs</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
              <div class="box-checkbox mb-30">
                <h6>Save &amp; Apply</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-box mt-90 mb-50">
        <div class="container">
          <h2 class="text-center mb-15 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Frequently Asked Questions</h2>
          <div class="font-lg color-text-paragraph-2 text-center wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor<br class="d-none d-lg-block"> primis a libero tempus, blandit and cursus varius and magnis sapien</div>
          <div class="row mt-50">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card-grid-border hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h4 class="mb-20">I have promotional or discount code?</h4>
                <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam venenatis turpis euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse metus metus, laoreet nec arcu vel, venenatis cursus libero.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card-grid-border hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h4 class="mb-20">Where is my order? Quisque molestie</h4>
                <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam venenatis turpis euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse metus metus, laoreet nec arcu vel, venenatis cursus libero.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card-grid-border hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h4 class="mb-20">How can I return an item purchased online?</h4>
                <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam venenatis turpis euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse metus metus, laoreet nec arcu vel, venenatis cursus libero.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card-grid-border hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h4 class="mb-20">What are the delivery types you use?</h4>
                <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam venenatis turpis euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse metus metus, laoreet nec arcu vel, venenatis cursus libero.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card-grid-border hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h4 class="mb-20">How can I pay for my purchases?</h4>
                <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam venenatis turpis euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse metus metus, laoreet nec arcu vel, venenatis cursus libero.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card-grid-border hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h4 class="mb-20">What are the delivery types you use?</h4>
                <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam venenatis turpis euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse metus metus, laoreet nec arcu vel, venenatis cursus libero.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    {{-- Footer Starts here --}}
    <x-footer/>
    {{-- Footer Ends here --}}
    
  </body>

</html>