<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <div class="input-group-append">

                        </div>
                    </div>
                </div>
            </form>
        </li>
        


        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ Auth::user()->nom }} <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">



                <!-- item-->
                <a href="{{ route('logout') }}" class="dropdown-item notify-item btn-logout">
                    <i class="fe-log-out"></i>
                    Deconnexion
                </a>

            </div>
        </li>




    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="\home" class="logo text-center">
            <span class="logo-lg">
                <h3 style="color: white">Time Manager</h3>
                <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">U</span> -->
                <img src="assets/images/logo-sm.png" alt="" height="24">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>

    </ul>
</div>
<!-- end Topbar -->