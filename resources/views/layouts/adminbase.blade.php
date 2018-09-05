

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hastakala | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="/admin" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>H</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Hastakala</b></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="/admin" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Avids</p>
           
          </div>
        </div>
        <!-- search form -->
       
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">



          <li class="header"><b>MAIN NAVIGATION</b></li>

            



          <li>
            <a href="/admin/product/featured">
              <i class="fa fa-th"></i> <span>Featured Products</span>
              
            </a>
          </li>


	<li>
            <a href="/admin/product">
              <i class="fa fa-th"></i> <span>GeneralProducts</span>
              
            </a>
          </li>


          <li>
            <a href="/admin/artist">
              <i class="fa fa-th"></i> <span>Artist</span>
              
            </a>
          </li>

        

          <li>
            <a href="/admin/message">
              <i class="fa fa-th"></i> <span>Messages</span>
              
            </a>
          </li>

          <li>
            <a href="/training">
              <i class="fa fa-th"></i> <span>Training</span>
              
            </a>
          </li>

	<li>
            <a href="/">
              <i class="fa fa-th"></i> <span>Page</span>
              
            </a>
          </li>
         
         
           
        </ul>
      </section>

      <!-- /.sidebar -->
    </aside>

    @yield('content')
    </div>


  </html>
  
