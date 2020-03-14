<!DOCTYPE html>
<html>
<head>
    @include('Backend.inc.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('Backend.inc.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Backend.inc.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    @include('Backend.inc.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
