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
    <link href="assets/css/newstyle.css" rel="stylesheet">
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
    <x-header />
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

        <section class="container">
            <div class="row">
                <div class="col-md-3 border-right usernavsidebar">
                    <div class="nav">
                        <a class="btn btn-expanded"></a>
                        <nav class="nav-main-menu3 ">
                            <ul class="main-menu3 nav  nav-tabs" id="myTab">
                                <li class="nav-item" role="presentation"> <a class='dashboard2  active' id="home-tab"
                                        data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                        role="tab" aria-controls="home-tab-pane" aria-selected="true"><img
                                            src="/assetdash/imgs/page/dashboard/dashboard.svg" alt="jobBox"><span
                                            class="name">Dashboard</span></a>
                                </li>

                                <li class="nav-item" role="presentation"> <a class='dashboard2 ' id="job-tab"
                                        data-bs-toggle="tab" data-bs-target="#my-jobs-tab-pane" type="button"
                                        role="tab" aria-controls="my-jobs-tab-pane" aria-selected="false"><img
                                            src="/assetdash/imgs/page/dashboard/jobs.svg" alt="jobBox"><span
                                            class="name">My
                                            Jobs</span></a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class='dashboard2' id="profile-tab"
                                        data-bs-toggle="tab" data-bs-target="#my-profile-tab-pane" type="button"
                                        role="tab" aria-controls="my-profile-tab-pane" aria-selected="false"><img
                                            src="/assetdash/imgs/page/dashboard/profiles.svg" alt="jobBox"><span
                                            class="name">My Profile</span></a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class='dashboard2' id="cv-tab"
                                  data-bs-toggle="tab" data-bs-target="#cv-manage-tab-pane" type="button"
                                  role="tab" aria-controls="cv-manage-tab-pane" aria-selected="false"><img
                                            src="/assetdash/imgs/page/dashboard/cv-manage.svg" alt="jobBox"><span
                                            class="name">CV Manage</span></a>
                                </li>

                                <li class="nav-item" role="presentation"> <a class='dashboard2'
                                  id="password-tab"
                                  data-bs-toggle="tab" data-bs-target="#change-password-tab-pane" type="button"
                                  role="tab" aria-controls="change-password-tab-pane" aria-selected="false"><img
                                            src="/assetdash/imgs/page/dashboard/authentication.svg"
                                            alt="jobBox"><span class="name">Change Password</span></a>
                                </li>
                                <li>
                                    <form action="{{ 'logout' }}" method="post" id="logoutform">
                                        @csrf
                                        <a class='dashboard2 ' href='javascript:void(0)' id="logoutbtn"><img
                                                src="/assetdash/imgs/page/dashboard/logout.svg" alt="jobBox"><span
                                                class="name">Logout</span></a>
                                    </form>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab">Dashboard content...</div>
                        <div class="tab-pane fade" id="my-jobs-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab">My Jobs content...</div>
                        <div class="tab-pane fade" id="my-profile-tab-pane" role="tabpanel"
                            aria-labelledby="my-profile-tab">...My Profile content...</div>
                        <div class="tab-pane fade" id="cv-manage-tab-pane" role="tabpanel"
                            aria-labelledby="cv-manage-tab">...CV Manage content...</div>
                        <div class="tab-pane fade" id="change-password-tab-pane" role="tabpanel"
                            aria-labelledby="change-password-tab">
                            
                            <div class="container mt-3">
                              <livewire:change-password/>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>



        </section>


        <livewire:subscription/>

    </main>

    {{-- Footer Starts here --}}
    <x-footer />
    {{-- Footer Ends here --}}

    <script>
        document.getElementById('useprol').classList.add("active");
        document.getElementById('logoutbtn').addEventListener('click', function() {
            document.getElementById('logoutform').submit();
        });
    </script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      function updateTabContent() {
          // Remove 'show active' class from all tab panes
          document.querySelectorAll('.tab-pane').forEach(function(pane) {
              pane.classList.remove('show', 'active');
          });
  
          // Get current hash value
          var hash = window.location.hash;
  
          // If there's a hash in the URL, find the corresponding tab pane and add 'show active'
          if(hash) {
              var activePane = document.querySelector('.tab-pane' + hash);
              if(activePane) {
                  activePane.classList.add('show', 'active');
              }
          } else {
              // If no hash, default to the first tab pane
              var firstPane = document.querySelector('.tab-pane');
              if(firstPane) {
                  firstPane.classList.add('show', 'active');
              }
          }
      }
  
      // Run once to ensure right tab pane is active on initial load
      updateTabContent();
  
      // Add event listener for hash changes
      window.addEventListener('hashchange', updateTabContent, false);
  });
  </script>

</body>

</html>
