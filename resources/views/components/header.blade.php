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
                  @auth
                    @if (auth()->user()->role != 0)
                      <li><a class='{{Route::is('recruiters') ? 'active' : '' }}' href='{{route('recruiters')}}'>For Recruiters</a></li>
                    @endif
                  @else
                  <li><a class='{{Route::is('recruiters') ? 'active' : '' }}' href='{{route('recruiters')}}'>For Recruiters</a></li>
                  @endauth
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
                    <li><a class='{{Route::is('home') ? 'active' : '' }}' href='{{route('home')}}'>Home</a></li>
                    <li><a class='{{Route::is('findjob') ? 'active' : '' }}' href='{{route('findjob')}}'>Find a Job</a></li>
                    @auth
                    @if (auth()->user()->role != 0)
                      <li><a class='{{Route::is('recruiters') ? 'active' : '' }}' href='{{route('recruiters')}}'>For Recruiters</a></li>
                    @endif
                  @else
                  <li><a class='{{Route::is('recruiters') ? 'active' : '' }}' href='{{route('recruiters')}}'>For Recruiters</a></li>
                  @endauth
                    <li><a class='{{Route::is('aboutus') ? 'active' : '' }}' href='{{route('aboutus')}}'>About Us</a></li>
                    <li><a class='{{Route::is('blog') ? 'active' : '' }}' href='{{route('blog')}}'>Blog</a></li>
                    <li><a class='{{Route::is('contact') ? 'active' : '' }}' href='{{route('contact')}}'>Contact Us</a></li>
                    @auth
                      @if(auth()->user()->role == 2)
                      <div><a href='{{route('dashboard')}}'>Dashboard</a></div>
                      @elseif(auth()->user()->role == 1)
                        <div><a href='{{route('admindash')}}'>Dashboard</a></div>
                      @endif
                    @else
                    <li><a class='{{Route::is('login') ? 'active' : '' }}' href='{{route('login')}}'>Login</a></li>
                    <li><a class='{{Route::is('register') ? 'active' : '' }}' href='{{route('register')}}'>Register</a></li>
                    @endauth
                  </ul>
                </nav>
              </div>
              @auth
              @if (auth()->user()->role == 0)
                <div class="mobile-account">
                  <h6 class="mb-10">Your Account</h6>
                  <ul class="mobile-menu font-heading">
                    <li><a href="{{route('userprofile')}}#home-tab-pane">Dashboard</a></li>
                    <li><a href="{{route('userprofile')}}#my-jobs-tab-pane">My Jobs</a></li>
                    <li><a href="{{route('userprofile')}}#my-profile-tab-pane">My Profile</a></li>
                    <li><a href="{{route('userprofile')}}#cv-manage-tab-pane">Manage CV</a></li>
                    <li><a href="{{route('userprofile')}}#change-password-tab-pane">Change Password</a></li>
                    <li>
                      <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn p-0">Logout</button>
                      </form>
                    </li>
                  </ul>
                </div>
              @endif
              @endauth
              
            </div>
          </div>
        </div>
      </div>
</div>