<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="msapplication-config" content="browserconfig.html">
    <meta name="description" content="{{$blog->description}}">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/imgs/template/favicon.svg">
    <link href="/assets/css/stylecd4e.css?version=4.1" rel="stylesheet">
    <title>{{$blog->title}}</title>
    <style>
      .paragraph-space-blog p{
        margin-bottom: 1rem;
      } 
    </style>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="/assets/imgs/template/loading.gif" alt="jobBox"></div>
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
                <h2 class="mb-10">Blog</h2>
                <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
              </div>
              <div class="col-lg-6 text-end">
                <ul class="breadcrumbs mt-40">
                  <li><a class='home-icon' href='/'>Home</a></li>
                  <li> <a href="{{route('blog')}}">Blog</a></li>
                  <li>{{$blog->title}}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      

      <section class="section-box mt-50">
        <div class="post-loop-grid">
          <div class="container">
            <div class="text-left">
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">{{$blog->title}}</h2>
            </div>
            <div class="row mt-30">
              <div class="col-lg-8">
                <div class="row">
                 
                    <div class="col-lg-12 mb-30">
                      <div class="card-grid-3 ">
                        <div class="text-center card-grid-3-image"><a href='javascript:void(0)'>
                            <figure><img alt="jobBox" src="{{asset('storage/'.$blog->blogcover_image)}}"></figure></a></div>
                        <div class="card-block-info">
                          <div class="tags mb-15"><a class='btn btn-tag' href="{{route('blog-category',['id'=>$blog->category])}}">{{$blog->category}}</a></div>
                          <div class="mt-10 color-text-paragraph paragraph-space-blog">
                            {!! $blog->blog !!}
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12 hover-up">
                      <div class="card-grid-3 d-flex align-items-center p-3">
                        <img src="{{asset('storage/'.$blog->getWriter->image)}}" style="width: 8rem; height:8rem;" class="rounded-circle float-left me-2" alt="">
                        <div>
                          <h4>{{$blog->getWriter->name}}</h4>
                          <p class="mt-3">
                            {{$blog->getWriter->description}}
                          </p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <livewire:blogside-category/>
            </div>
          </div>
        </div>
      </section>

      <livewire:subscription/>
    </main>

    {{-- Footer Starts here --}}
    <x-footer/>
    {{-- Footer Ends here --}}
    
  </body>

</html>