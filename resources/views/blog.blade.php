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
                  <li>Blog</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      @if ($blogcount > 0)
          <section class="section-box mt-50">
            <div class="post-loop-grid">
              <div class="container">
                <div class="text-left">
                  <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Latest Posts</h2>
                  <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Don&apos;t miss the trending news</p>
                </div>
                <div class="row mt-30">
                  <div class="col-lg-8">
                    <div class="row">
                      @foreach ($blog as $item)
                        <div class="col-lg-6 mb-30">
                          <div class="card-grid-3 hover-up">
                            <div class="text-center card-grid-3-image"><a href='{{route('blogdetails',['id'=>$item->slug])}}'>
                                <figure><img alt="jobBox" src="{{asset('storage/'.$item->blogcover_image)}}"></figure></a></div>
                            <div class="card-block-info">
                              <div class="tags mb-15"><a class='btn btn-tag' href="{{route('blog-category',['id'=>$item->category])}}">{{$item->category}}</a></div>
                              <h5><a href='{{route('blogdetails',['id'=>$item->slug])}}'>{{$item->title}}</a></h5>
                              <p class="mt-10 color-text-paragraph font-sm">{{$item->description}}</p>
                              <div class="card-2-bottom mt-20">
                                <div class="row">
                                  <div class="col-lg-6 col-6">
                                    <div class="d-flex"><img class="img-rounded" src="{{asset('storage/'.$item->getWriter->image)}}">
                                      <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">{{$item->getWriter->name}}</span><br><span class="font-xs color-text-paragraph-2">{{$item->created_at->format('d F Y')}}</span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    
                    {!! $blog->links('pagination::bootstrap-5') !!}
                  </div>
                  <livewire:blogside-category/>
                </div>
              </div>
            </div>
          </section>
      @else
          <section class="section-box mt-50 text-center">
              <h5>No Blogs Yet..</h5>
          </section>
      @endif

      <livewire:subscription/>
    </main>

    {{-- Footer Starts here --}}
    <x-footer/>
    {{-- Footer Ends here --}}
    
  </body>

</html>