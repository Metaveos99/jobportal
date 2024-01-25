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
    <link rel="shortcut icon" type="image/x-icon" href="/assets/imgs/template/favicon.svg">
    <link href="/assets/css/stylecd4e.css?version=4.1" rel="stylesheet">
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
        <section class="pt-100 login-register">
            {{ $slot }}
        </section>
      </main>

         {{-- Footer Starts here --}}
    <x-footer/>
    {{-- Footer Ends here --}}
    </body>
</html>
