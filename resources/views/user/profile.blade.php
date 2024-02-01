<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.html" crossorigin>
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
        <div class="breacrumb-cover">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="mb-10">User Profile</h2>
                <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
              </div>
              <div class="col-lg-6 text-end">
                <ul class="breadcrumbs mt-40">
                  <li><a class='home-icon' href='/'>Home</a></li>
                  <li>User Profile</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      


      <section class="section-box mt-50 mb-20">
        <div class="container">
          <div class="box-newsletter">
            <div class="row">
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
              <div class="col-lg-12 col-xl-6 col-12">
                <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                <div class="box-form-newsletter mt-40">
                  <form class="form-newsletter">
                    <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                  </form>
                </div>
              </div>
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
            </div>
          </div>
        </div>
      </section>

    </main>

    {{-- Footer Starts here --}}
    <x-footer/>
    {{-- Footer Ends here --}}

    <script>
        document.getElementById('useprol').classList.add("active");
    </script>
    
  </body>

</html>