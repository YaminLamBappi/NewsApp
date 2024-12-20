<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | AdminPanel 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link"></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="{{ route('AdminPanel') }}" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-closed">
              <a href="{{ route('AdminPanel') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  AdminPanel
                </p>
              </a>
            </li>
            <li class="nav-item menu-closed">
              <a href="#" class="nav-link inactive">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Manage News
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('NewsForm')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add News </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('NewsList') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All News</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item menu-closed">
              <a href="#" class="nav-link inactive">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Manage Category
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('AddCategoryPage')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Category </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('CategoryList')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Category </p>
                  </a>
                </li>

              </ul>
            <li class="nav-item menu-closed">
              <a href="#" class="nav-link inactive">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Manage Profile
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('profile.edit')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit info</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('profile.update.view')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Update Password </p>
                  </a>
                </li>

              </ul>

            <li class="nav-item menu-closed">
              <a href="{{ route('PublicView') }}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>
                  PublicView
                </p>
              </a>
            </li>

            <li class="nav-item menu-closed">
              <a href="{{ route('logout') }}" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-10">
            <div class="col-sm-12">

              @yield('body')




            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>


      <!-- /.content-header -->

      <!-- Main content -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  </div>

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  @yield('script')
  <!-- jQuery -->
  <!-- Bootstrap -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE -->
  <script src="{{asset('dist/js/adminlte.js')}}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="{{asset('dist/js/demo.js')}}"></script> -->
  <!-- AdminLTE AdminPanel demo (This is only for demo purposes) -->
  <script src="{{asset('dist/js/pages/AdminPanel3.js')}}"></script>
</body>

</html>