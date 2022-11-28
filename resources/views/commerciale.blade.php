<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Commerciale</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="icon" type="image/png" href="com.png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte.min.css">
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i> << </a>
      </li>
      
      
    </ul> 
    </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo  -->
    <a href="#" class="brand-link">
      <img src="AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Commerciale</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> Mouhammed</a>
        </div>
      </div>

    
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('ProspectC.index')}}" class="nav-link active">
             
              <p>
                Prospects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
             </li>
               <!-- Sidebar Menu -->
     <!-- <nav class="mt-2">-->
        
          <li class="nav-item menu-open">
            <a href="{{route('ClientC.index')}}" class="nav-link active">
             
              <p>
                Clients
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </li>
            <li class="nav-item menu-open">
            <a href="{{route('Contact.index')}}" class="nav-link active">
             
              <p>
                Contacts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </li>
              <!-- Sidebar Menu -->
              <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              
              <p>
                Rendez vous
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </li>
              <!-- Sidebar Menu -->
              <li class="nav-item menu-open">
            <a href="{{route('OpportuniteC.index')}}" class="nav-link active">
              
              <p>
                Opportunités
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </li>
              
</ul>

</nav>
</div> </aside>
              <!-- Sidebar Menu -->
        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid"> @yield('content')
          </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="jquery.min.js"></script>
<!-- Bootstrap -->
<script src="bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<body><html>