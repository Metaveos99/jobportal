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
                <h2 class="mb-10">Contact Us</h2>
                <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
              </div>
              <div class="col-lg-6 text-lg-end">
                <ul class="breadcrumbs mt-40">
                  <li><a class="home-icon" href="#">Home</a></li>
                  <li>Contact Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-80">
        <div class="container">
          <div class="box-info-contact">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-30"><a href="#"><img src="assets/imgs/page/contact/logo.svg" alt="joxBox"></a>
                <div class="font-sm color-text-paragraph">205 North Michigan Avenue, Suite 810 Chicago, 60601, USA<br> Phone: (123) 456-7890<br> Email: contact@jobbox.com</div><a class="text-uppercase color-brand-2 link-map" href="#">View map</a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <h6>London</h6>
                <p class="font-sm color-text-paragraph mb-20">2118 Thornridge Cir. Syracuse,<br class="d-none d-lg-block"> Connecticut 35624</p>
                <h6>New York</h6>
                <p class="font-sm color-text-paragraph mb-20">4517 Washington Ave.<br class="d-none d-lg-block"> Manchester, Kentucky 39495</p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <h6>Chicago</h6>
                <p class="font-sm color-text-paragraph mb-20">3891 Ranchview Dr. Richardson,<br class="d-none d-lg-block"> California 62639</p>
                <h6>San Francisco</h6>
                <p class="font-sm color-text-paragraph mb-20">4140 Parker Rd. Allentown,<br class="d-none d-lg-block"> New Mexico 31134</p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <h6>Sysney</h6>
                <p class="font-sm color-text-paragraph mb-20">3891 Ranchview Dr. Richardson,<br class="d-none d-lg-block"> California 62639</p>
                <h6>Singapore</h6>
                <p class="font-sm color-text-paragraph mb-20">4140 Parker Rd. Allentown,<br class="d-none d-lg-block"> New Mexico 31134</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <livewire:contact-us/>
      
      <livewire:subscription/>
    </main>

    {{-- Footer Starts here --}}
    <x-footer/>
    {{-- Footer Ends here --}}
    
  </body>

</html>