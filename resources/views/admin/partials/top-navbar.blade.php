<nav class="navbar top-navbar navbar-expand-md navbar-dark">

        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <!-- <li class="nav-item">
                <form class="app-search d-none d-md-block d-lg-block">
                    <input type="text" class="form-control" placeholder="Search & enter">
                </form>
            </li> -->
            <style type="text/css">
                .simplysafe-navbar-header{
                    background: rgba(0,0,0,.05);
                    line-height: 65px;
                    padding-left: 10px;
                    min-width: 200px;
                }
            </style>
            <li>
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('/adminelite/assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo">
                            <!-- Light Logo icon -->
                            <img src="{{asset('/adminelite/assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{asset('/adminelite/assets/images/logo-text.png') }}" alt="homepage" class="dark-logo">
                         <!-- Light Logo text -->    
                         <img src="{{asset('/adminelite/assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage"></span> </a>
                </div>

            </li>
        </ul>
<!-- ============================================================== -->
<!-- User profile and search -->
<!-- ============================================================== -->
<ul class="navbar-nav my-lg-0">
    <!-- End mega menu -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- User Profile -->
    <!-- ============================================================== -->
    <li class="nav-item dropdown u-pro">
        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('/adminelite/') }}/assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span> </a>
        <div class="dropdown-menu dropdown-menu-right animated flipInY">
            <!-- text-->
        
            <!-- text-->
            <div class="dropdown-divider"></div>
            <!-- text-->

            <!-- first check admin then user then customer-->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
            <a href="#" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
            <!-- text-->
        </div>
    </li>
    <!-- ============================================================== -->
    <!-- End User Profile -->
    <!-- ============================================================== -->
    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
</ul>
</div>
</nav>