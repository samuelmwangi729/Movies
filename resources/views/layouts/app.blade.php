
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ config('app.name') }} | Home</title>

  <!-- Font Awesome Icons -->
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/summernote.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<style>
  .uploading:before {
      text-decoration: none;
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
   @if(Auth::check())
   <div class="wrapper" id="app">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
          <span style="color:white;font-family: 'Times New Roman', Times, serif;font-size:25px;text-shadow: 2px 2px blue,4px 4px black !important"><i class="fa fa-video"></i></span>
          <span class="brand-text font-weight-light" style="color:white;font-family: 'Times New Roman', Times, serif;font-size:25px;text-shadow: 2px 2px blue,4px 4px black !important">{{ config('app.name') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img  src="{{ asset('img/default.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="/home" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
             @if(Auth::user()->isAdmin==1)
             <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-tags"></i>
                  <p>
                    Categories
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                      <i class="fa fa-plus-circle nav-icon"></i>
                      <p>Manage Category</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-trailer"></i>
                  <p>
                    Trailers
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('trailers.index') }}" class="nav-link">
                      <i class="fa fa-plus-circle nav-icon"></i>
                      <p>Manage Movie Trailers</p>
                    </a>
                  </li>
                </ul>
              </li>
             @endif
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-video"></i>
                  <p>
                    Videos
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('videos.index') }}" class="nav-link">
                      <i class="fa fa-plus-circle nav-icon"></i>
                      <p>Add Video</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('videos.index') }}" class="nav-link">
                      <i class="fa fa-eye nav-icon"></i>
                      <p>Manage Videos</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('account') }}" class="nav-link">
                  <i class="fa fa-cog nav-icon"></i>
                  <p>User Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="fa fa-lock-open nav-icon"></i>
                  <p>Logout</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <main class="py-4">
        @yield('content')
    </main>
</div>
   @else
   <section class="content" style="margin-top:250px">
    <div class="error-page">
      <h2 class="headline text-warning"> 404</h2>

      <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

        <p>
         Please <a href="/">Login</a> to View

        </p>
      </div>
      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>
   @endif
    <!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
