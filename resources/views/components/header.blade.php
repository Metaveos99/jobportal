<div>
    <header class="header sticky-bar">
        <div class="container">
          <div class="main-header">
            <div class="header-left">
              <div class="header-logo"><a class='d-flex' href='{{route('home')}}'><img alt="jobBox" src="/assets/imgs/template/jobhub-logo.svg"></a></div>
            </div>
            <div class="header-nav">
              <nav class="nav-main-menu">
                <ul class="main-menu">
                  <li><a class='{{Route::is('home') ? 'active' : '' }}' href='{{route('home')}}'>Home</a></li>
                  <li><a class='{{Route::is('findjob') ? 'active' : '' }}' href='{{route('findjob')}}'>Find a Job</a></li>
                  <li><a class='{{Route::is('aboutus') ? 'active' : '' }}' href='{{route('aboutus')}}'>About Us</a></li>
                  <li><a class='{{Route::is('blog') ? 'active' : '' }}' href='{{route('blog')}}'>Blog</a></li>
                  <li><a class='{{Route::is('contact') ? 'active' : '' }}' href='{{route('contact')}}'>Contact Us</a></li>
                </ul>
              </nav>
              <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
            <div class="header-right">
                @auth
                  @if (auth()->user()->role == 0)
                  

                  <div class="member-login d-flex align-items-center"><img alt="Profile Picture" src="/assetdash/imgs/page/dashboard/profile.png" style="width: 3rem;">

                    <nav class="nav-main-menu">
                      <ul class="main-menu">
                    <li class="has-children"><a href="javascript:void(0)" id="useprol"><strong class="color-brand-1">{{(auth()->user()->name)}}</strong></a>
                      <ul class="sub-menu">
                        <li><a href="{{route('userprofile')}}">Profile</a></li>
                        <li>
                          <form action="{{route('logout')}}" method="post">
                          @csrf
                          <button class="btn">Logout</button>
                         </form>
                        </li>
                      </ul>
                    </li>
                      </ul>
                    </nav>
                  </div>
                  @elseif(auth()->user()->role == 2)
                    <div class="block-signin"><a class='btn btn-default btn-shadow ml-40 hover-up' href='{{route('dashboard')}}'>Dashboard</a></div>
                  @else
                    <div class="block-signin"><a class='btn btn-default btn-shadow ml-40 hover-up' href='{{route('admindash')}}'>Dashboard</a></div>
                  @endif
                @else
                  <div class="block-signin"><a class='text-link-bd-btom hover-up' href='{{route('register')}}'>Register</a><a class='btn btn-default btn-shadow ml-40 hover-up' href='{{route('login')}}'>Sign in</a></div>
                @endauth
            </div>
          </div>
        </div>
      </header>
      <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
          <div class="mobile-header-content-area">
            <div class="perfect-scroll">
              <div class="mobile-search mobile-header-border mb-30">
                <form action="#">
                  <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                </form>
              </div>
              <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start-->
                <nav>
                  <ul class="mobile-menu font-heading">
                    <li><a class='active' href='{{route('home')}}'>Home</a>
                    </li>
                    <li class="has-children"><a href='jobs-grid.html'>Find a Job</a>
                      <ul class="sub-menu">
                        <li><a href='jobs-grid.html'>Jobs Grid</a></li>
                        <li><a href='jobs-list.html'>Jobs List</a></li>
                        <li><a href='job-details.html'>Jobs Details</a></li>
                        <li><a href='job-details-2.html'>Jobs Details 2</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href='companies-grid.html'>Recruiters</a>
                      <ul class="sub-menu">
                        <li><a href='companies-grid.html'>Recruiters</a></li>
                        <li><a href='company-details.html'>Company Details</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href='candidates-grid.html'>Candidates</a>
                      <ul class="sub-menu">
                        <li><a href='candidates-grid.html'>Candidates Grid</a></li>
                        <li><a href='candidate-details.html'>Candidate Details</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href='blog-grid.html'>Pages</a>
                      <ul class="sub-menu">
                        <li><a href='page-about.html'>About Us</a></li>
                        <li><a href='page-pricing.html'>Pricing Plan</a></li>
                        <li><a href='page-contact.html'>Contact Us</a></li>
                        <li><a href='{{route('register')}}'>Register</a></li>
                        <li><a href='{{route('login')}}'>Signin</a></li>
                        <li><a href='page-reset-password.html'>Reset Password</a></li>
                        <li><a href='page-content-protected.html'>Content Protected</a></li>
                        <li><a href='page-404.html'>404 Error</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href='blog-grid.html'>Blog</a>
                      <ul class="sub-menu">
                        <li><a href='blog-grid.html'>Blog Grid</a></li>
                        <li><a href='blog-grid-2.html'>Blog Grid 2</a></li>
                        <li><a href='blog-details.html'>Blog Single</a></li>
                      </ul>
                    </li>
                    <li><a href="http://wp.alithemes.com/html/jobbox/demos/dashboard" target="_blank">Dashboard</a></li>
                  </ul>
                </nav>
              </div>
              <div class="mobile-account">
                <h6 class="mb-10">Your Account</h6>
                <ul class="mobile-menu font-heading">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Work Preferences</a></li>
                  <li><a href="#">Account Settings</a></li>
                  <li><a href="#">Go Pro</a></li>
                  <li><a href='{{route('login')}}'>Sign Out</a></li>
                </ul>
              </div>
              <div class="site-copyright">Copyright 2022 &copy; JobBox.<br>Designed by AliThemes.</div>
            </div>
          </div>
        </div>
      </div>
</div>