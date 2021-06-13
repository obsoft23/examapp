<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Exam App</title>

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/main.css">
    <style type="text/css">
      body {
        
        font-weight: 500; 
        letter-spacing: -0.5px; 
        font-size: 14px;
      }

      .nav-pills .nav-link.active, .nav-pills .show>.nav-link
      {
        background-color: rgb(21, 82, 85);

      }

      .fc-theme-standard td, .fc-theme-standard th {
        border: 1px solid #ddd;
        border: 2px solid var(--fc-border-color, #ddd);
        
    }

     table, th, td {
            border: 1px solid black;
         }

      #calendar:hover
      {
         cursor: pointer;
         
      }

     tr:hover {background-color: #f5f5f5;}
    </style>
  </head>
  <body class="hhold-transition sidebar-collapse layout-top-nav" >
          <!-- Site wrapper -->
          <div class="wrapper">

          <!--  Navbar Container -->
              @include('admin.navbar2')
          <!-- Enc Navbar -->

          <!-- Main Sidebar Container -->
              @include('admin.sidebar')
          <!-- End Sidebar Container -->


            <!-- Content Wrapper. Contains page content -->
            
               @yield('content')
           
            <!-- /.content-wrapper -->

            
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->


          <!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../dist/js/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.js"></script>
</body>
</html>
