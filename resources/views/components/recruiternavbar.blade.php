<div>
    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
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
                            <ul class="main-menu">
                                <li> <a class='dashboard2 {{ Route::is('dashboard') ? 'active' : '' }}'
                                        href='{{ route('dashboard') }}'><img
                                            src="/assetdash/imgs/page/dashboard/dashboard.svg" alt="jobBox"><span
                                            class="name">Dashboard</span></a>
                                </li>
                                <li> <a class='dashboard2' href='candidates.html'><img
                                            src="/assetdash/imgs/page/dashboard/candidates.svg" alt="jobBox"><span
                                            class="name">Candidates</span></a>
                                </li>
                                <li> <a class='dashboard2' href='my-job-grid.html'><img
                                            src="/assetdash/imgs/page/dashboard/jobs.svg" alt="jobBox"><span
                                            class="name">My Jobs</span></a>
                                </li>
                                <li><a class='dashboard2' href='my-job-grid.html'><img
                                            src="/assetdash/imgs/page/dashboard/jobs.svg" alt="jobBox"><span
                                            class="name">Post job</span></a>
                                </li>
                                <li> <a class='dashboard2' href='my-job-grid.html'><img
                                            src="/assetdash/imgs/page/dashboard/jobs.svg" alt="jobBox"><span
                                            class="name">Database</span></a>
                                </li>
                                <li> <a class='dashboard2' href='profile.html'><img
                                            src="/assetdash/imgs/page/dashboard/profiles.svg" alt="jobBox"><span
                                            class="name">Packages</span></a>
                                </li>
                                <li> <a class='dashboard2' href='profile.html'><img
                                            src="/assetdash/imgs/page/dashboard/profiles.svg" alt="jobBox"><span
                                            class="name">My Profiles</span></a>
                                </li>
                                <li> <a class='dashboard2' href='my-resume.html'><img
                                            src="/assetdash/imgs/page/dashboard/cv-manage.svg" alt="jobBox"><span
                                            class="name">CV Manage</span></a>
                                </li>
                                <li> <a class='dashboard2' href='settings.html'><img
                                            src="/assetdash/imgs/page/dashboard/settings.svg" alt="jobBox"><span
                                            class="name">Setting</span></a>
                                </li>

                                <li>
                                    <a class='dashboard2' onclick="document.getElementById('formlogoutadmin').submit()"
                                        href='javascript:void(0)'><img src="/assetdash/imgs/page/dashboard/logout.svg"
                                            alt="jobBox"><span class="name">Logout</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="nav" style="height: -webkit-fill-available;"><a class="btn btn-expanded"></a>
        <nav class="nav-main-menu">
            <ul class="main-menu">
                <li> <a class='dashboard2 {{ Route::is('dashboard') ? 'active' : '' }}'
                        href='{{ route('dashboard') }}'><img src="/assetdash/imgs/page/dashboard/dashboard.svg"
                            alt="jobBox"><span class="name">Dashboard</span></a>
                </li>
                <li> <a class='dashboard2' href='candidates.html'><img
                            src="/assetdash/imgs/page/dashboard/candidates.svg" alt="jobBox"><span
                            class="name">Candidates</span></a>
                </li>

                <li><a class='dashboard2 {{ Route::is('postjob') ? 'active' : '' }}' href='{{route('postjob')}}'><img
                            src="/assetdash/imgs/page/dashboard/pen-to-square-solid.svg" alt="jobBox"><span
                            class="name">Post job</span></a>
                </li>
                <li> <a class='dashboard2' href='my-job-grid.html'><img src="/assetdash/imgs/page/dashboard/jobs.svg"
                            alt="jobBox"><span class="name">My Jobs</span></a>
                </li>
                <li> <a class='dashboard2' href='my-job-grid.html'><img src="/assetdash/imgs/page/dashboard/database-solid.svg"
                            alt="jobBox"><span class="name">Database</span></a>
                </li>
                <li> <a class='dashboard2' href='profile.html'><img src="/assetdash/imgs/page/dashboard/cubes-solid.svg"
                            alt="jobBox"><span class="name">Packages</span></a>
                </li>

                <li> <a class='dashboard2' href='profile.html'><img src="/assetdash/imgs/page/dashboard/profiles.svg"
                            alt="jobBox"><span class="name">My Profiles</span></a>
                </li>

                <li> <a class='dashboard2' href='my-resume.html'><img
                            src="/assetdash/imgs/page/dashboard/cv-manage.svg" alt="jobBox"><span class="name">CV
                            Manage</span></a>
                </li>
                <li> <a class='dashboard2' href='settings.html'><img
                            src="/assetdash/imgs/page/dashboard/settings.svg" alt="jobBox"><span
                            class="name">Setting</span></a>
                </li>

                <li>
                    <a class='dashboard2' onclick="document.getElementById('formlogoutadmin').submit()"
                        href='javascript:void(0)'><img src="/assetdash/imgs/page/dashboard/logout.svg"
                            alt="jobBox"><span class="name">Logout</span></a>
                </li>
            </ul>
        </nav>
        <div class="border-bottom mb-20 mt-20"></div>
        <div class="sidebar-border-bg mt-50"><span class="text-grey">WE ARE</span><span
                class="text-hiring">HIRING</span>
            <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Recusandae architecto</p>
            <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
        </div>
        <form action="{{ route('logout') }}" method="post" id="formlogoutadmin">
            @csrf
        </form>
    </div>

</div>
