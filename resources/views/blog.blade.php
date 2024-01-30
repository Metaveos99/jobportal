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
    <div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body pl-30 pr-30 pt-50">
            <div class="text-center">
              <p class="font-sm text-brand-2">Job Application </p>
              <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
              <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer.                   </p>
            </div>
            <form class="login-register text-start mt-20 pb-30" action="#">
              <div class="form-group">
                <label class="form-label" for="input-1">Full Name *</label>
                <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-2">Email *</label>
                <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com">
              </div>
              <div class="form-group">
                <label class="form-label" for="number">Contact Number *</label>
                <input class="form-control" id="number" type="text" required="" name="phone" placeholder="(+01) 234 567 89">
              </div>
              <div class="form-group">
                <label class="form-label" for="des">Description</label>
                <input class="form-control" id="des" type="text" required="" name="Description" placeholder="Your description...">
              </div>
              <div class="form-group">
                <label class="form-label" for="file">Upload Resume</label>
                <input class="form-control" id="file" name="resume" type="file">
              </div>
              <div class="login_footer form-group d-flex justify-content-between">
                <label class="cb-container">
                  <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                </label><a class='text-muted' href='page-contact.html'>Lean more</a>
              </div>
              <div class="form-group">
                <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
              </div>
              <div class="text-muted text-center">Do you need support? <a href='page-contact.html'>Contact Us</a></div>
            </form>
          </div>
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
                  <li><a class='home-icon' href='index.html'>Home</a></li>
                  <li>Blog</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <div class="card-grid-5">
                <div class="card-grid-5 hover-up" style="background-image: url('assets/imgs/page/blog/img-big1.png')"><a href='blog-details.html'>
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h3 class="color-white mb-20">11 Tips to Help You Get New Clients</h3>
                        <div class="author d-flex align-items-center mr-20"><img class="mr-10" alt="jobBox" src="assets/imgs/page/candidates/user3.png"><span class="color-white font-sm mr-25">Azumi Rose</span><span class="color-white font-sm">25 April 2022</span></div>
                      </div>
                    </div></a></div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <div class="card-grid-5 hover-up" style="background-image: url('assets/imgs/page/blog/img-big2.png')"><a href='blog-details.html'>
                  <div class="box-cover-img">
                    <div class="content-bottom">
                      <h3 class="color-white mb-20">Recruiter and Land Your Dream Job</h3>
                      <div class="author d-flex align-items-center mr-20"><img class="mr-10" alt="jobBox" src="assets/imgs/page/candidates/user1.png"><span class="color-white font-sm mr-25">Thompson</span><span class="color-white font-sm">28 April 2022</span></div>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <div class="card-grid-5 hover-up" style="background-image: url('assets/imgs/page/blog/img-big3.png')"><a href='blog-details.html'>
                  <div class="box-cover-img">
                    <div class="content-bottom">
                      <h3 class="color-white mb-20">Work-From-Home Jobs That Pay Well</h3>
                      <div class="author d-flex align-items-center mr-20"><img class="mr-10" alt="jobBox" src="assets/imgs/page/blog/ava_1.png"><span class="color-white font-sm mr-25">Alice Json</span><span class="color-white font-sm">29 April 2022</span></div>
                    </div>
                  </div></a></div>
            </div>
          </div>
        </div>
      </section>
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
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/blog/img1.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>News</a></div>
                        <h5><a href='blog-details.html'>21 Job Interview Tips: How To Make a Great Impression</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/blog/img2.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>Events</a></div>
                        <h5><a href='blog-details.html'>Email Examples: How To Respond to Employer Interview Requests</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/blog/img3.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>Events</a></div>
                        <h5><a href='blog-details.html'>How To Write an Application Letter (With Examples)</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>Events</a></div>
                        <h5><a href='blog-details.html'>17 Jobs That Hire at Age 15 (and Even 14)</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/about/user1.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>Events</a></div>
                        <h5><a href='blog-details.html'>How To Write a Cover Letter (Plus Tips and Examples)</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/about/user2.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>Events</a></div>
                        <h5><a href='blog-details.html'>10 Best Skills To Include on a Resume</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/about/user3.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/blog/img1.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>Events</a></div>
                        <h5><a href='blog-details.html'>39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href='blog-details.html'>
                          <figure><img alt="jobBox" src="assets/imgs/page/blog/img2.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class='btn btn-tag' href='blog-grid.html'>Events</a></div>
                        <h5><a href='blog-details.html'>List of Weaknesses: 10 Things To Say in an Interview</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="paginations">
                  <ul class="pager">
                    <li><a class="pager-prev" href="#"></a></li>
                    <li><a class="pager-number" href="#">1</a></li>
                    <li><a class="pager-number" href="#">2</a></li>
                    <li><a class="pager-number" href="#">3</a></li>
                    <li><a class="pager-number" href="#">4</a></li>
                    <li><a class="pager-number" href="#">5</a></li>
                    <li><a class="pager-number active" href="#">6</a></li>
                    <li><a class="pager-number" href="#">7</a></li>
                    <li><a class="pager-next" href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="widget_search mb-40">
                  <div class="search-form">
                    <form action="#">
                      <input type="text" placeholder="Search…">
                      <button type="submit"><i class="fi-rr-search"></i></button>
                    </form>
                  </div>
                </div>
                <div class="sidebar-shadow sidebar-news-small">
                  <h5 class="sidebar-title">Trending Now</h5>
                  <div class="post-list-small">
                    <div class="post-list-small-item d-flex align-items-center">
                      <figure class="thumb mr-15"><img src="assets/imgs/page/blog/img-trending.png" alt="jobBox"></figure>
                      <div class="content">
                        <h5>How to get better agents in New York, USA</h5>
                        <div class="post-meta text-muted d-flex align-items-center mb-15">
                          <div class="author d-flex align-items-center mr-20"><img alt="jobBox" src="assets/imgs/page/homepage1/user1.png"><span>Sugar Rosie</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="post-list-small-item d-flex align-items-center">
                      <figure class="thumb mr-15"><img src="assets/imgs/page/blog/gallery1.png" alt=""></figure>
                      <div class="content">
                        <h5>How To Create a Resume for a Job in Social</h5>
                        <div class="post-meta text-muted d-flex align-items-center mb-15">
                          <div class="author d-flex align-items-center mr-20"><img alt="jobBox" src="assets/imgs/page/homepage1/user3.png"><span>Harding</span></div>
                          <div class="date"><span>17 Sep</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="post-list-small-item d-flex align-items-center">
                      <figure class="thumb mr-15"><img src="assets/imgs/page/blog/gallery2.png" alt=""></figure>
                      <div class="content">
                        <h5>10 Ways to Avoid a Referee Disaster Zone</h5>
                        <div class="post-meta text-muted d-flex align-items-center mb-15">
                          <div class="author d-flex align-items-center mr-20"><img alt="jobBox" src="assets/imgs/page/homepage1/user2.png"><span>Steven</span></div>
                          <div class="date"><span>23 Sep</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="post-list-small-item d-flex align-items-center">
                      <figure class="thumb mr-15"><img src="assets/imgs/page/blog/gallery4.png" alt=""></figure>
                      <div class="content">
                        <h5>How To Set Work-Life Boundaries From Any Location</h5>
                        <div class="post-meta text-muted d-flex align-items-center mb-15">
                          <div class="author d-flex align-items-center mr-20"><img alt="jobBox" src="assets/imgs/page/homepage1/user3.png"><span>Merias</span></div>
                          <div class="date"><span>14 Sep</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="post-list-small-item d-flex align-items-center">
                      <figure class="thumb mr-15"><img src="assets/imgs/page/blog/gallery5.png" alt=""></figure>
                      <div class="content">
                        <h5>How to Land Your Dream Marketing Job</h5>
                        <div class="post-meta text-muted d-flex align-items-center mb-15">
                          <div class="author d-flex align-items-center mr-20"><img alt="jobBox" src="assets/imgs/page/homepage1/user1.png"><span>Rosie</span></div>
                          <div class="date"><span>12 Sep</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sidebar-border-bg bg-right"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
                  <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto</p>
                  <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
                </div>
                <div class="sidebar-shadow sidebar-news-small">
                  <h5 class="sidebar-title">Gallery</h5>
                  <div class="post-list-small">
                    <ul class="gallery-3">
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery1.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery2.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery3.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery4.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery5.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery6.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery7.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery8.png"></a></li>
                      <li><a href="#"><img src="assets/imgs/page/blog/gallery9.png"></a></li>
                    </ul>
                  </div>
                </div>
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
    
  </body>

</html>