<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="{{ asset('public/frontend/img/favicon.png')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duat - Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap -->
    <link href={{ asset("public/backend/vendors/bootstrap/dist/css/bootstrap.min.css")}} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{ asset("public/backend/vendors/font-awesome/css/font-awesome.min.css")}} rel="stylesheet">
    <!-- NProgress -->
    <link href={{ asset("public/backend/vendors/nprogress/nprogress.css")}} rel="stylesheet">
    <!-- iCheck -->
    <link href={{ asset("public/backend/vendors/iCheck/skins/flat/green.css")}} rel="stylesheet">
		<link href={{ asset("public/backend/vendors/switchery/dist/switchery.min.css")}} rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href={{ asset("public/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}} rel="stylesheet">
    <!-- JQVMap -->
    <link href={{ asset("public/backend/vendors/jqvmap/dist/jqvmap.min.css")}} rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href={{ asset("public/backend/vendors/bootstrap-daterangepicker/daterangepicker.css")}} rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href={{ asset("public/backend/build/css/custom.min.css")}} rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
      .select2.select2-container.select2-container--default
      {
          width: 100% !important;
      }
      .select2-container--default .select2-selection--single {
          border: 1px solid #ced4da;
          border-radius: 1px !important;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;background:#EDEDED">
              <a href="{{ URL::to('/') }}" class="site_title"><img style="width:200px" src="https://theanh28.vn/data/assets/logo/logo-web281.png"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                @if(file_exists( public_path().'/upload/'.Auth::user()->avatar))
                <img src="{{ asset('public/upload/'.Auth::user()->avatar) }}" alt="..." class="img-circle profile_img">
                @else
                <img src="{{ asset("public/upload/user.png") }}" alt="..." class="img-circle profile_img">
                @endif
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> N???n t???ng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ URL::to('FormCategory')}}">Th??m danh m???c</a></li>
                      <li><a href="{{ URL::to('Categories')}}">Danh m???c</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> K??nh truy???n th??ng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ URL::to('FormChannel')}}">Th??m k??nh</a></li>
                      <li><a href="{{ URL::to('ListChannel')}}">Danh s??ch k??nh</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ URL::to('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    
                    {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{ URL::to('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        @yield('content')

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Bootstrap -->
    <script src={{ asset("public/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
    <!-- Chart.js -->
    <script src={{ asset("public/backend/vendors/Chart.js/dist/Chart.min.js")}}></script>
    <!-- gauge.js -->
    <script src={{ asset("public/backend/vendors/gauge.js/dist/gauge.min.js")}}></script>
    <!-- bootstrap-progressbar -->
    <script src={{ asset("public/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}></script>
    <!-- iCheck -->
    <script src={{ asset("public/backend/vendors/skycons/skycons.js")}}></script>
    	<!-- Switchery -->
	  <script src={{ asset("public/backend/vendors/switchery/dist/switchery.min.js")}}></script>
    <!-- DateJS -->
    <script src={{ asset("public/backend/vendors/DateJS/build/date.js")}}></script>
    <!-- bootstrap-daterangepicker -->
    <script src={{ asset("public/backend/vendors/moment/min/moment.min.js")}}></script>
    <script src={{ asset("public/backend/ckeditor/ckeditor.js")}}></script>
    <script src={{ asset("public/backend/vendors/bootstrap-daterangepicker/daterangepicker.js")}}></script>
    <!-- Custom Theme Scripts -->
    <script src={{ asset("public/backend/build/js/custom.min.js")}}></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @stack('js')
    <script>
      $("select").select2({});

    </script>
  </body>
</html>
