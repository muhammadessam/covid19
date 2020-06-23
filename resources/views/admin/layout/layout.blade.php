<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.layout.nav')
<!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.home')}}" class="brand-link">
            <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Covid-19</span>
        </a>

        @include('admin.layout.sidebar')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"  id="app">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer no-print">
        <strong>Copyright &copy; 2014-202 <a href="http://defaultpath.com/">DefaultPath</a>.</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
@routes
<!-- ./wrapper -->
@include('admin.layout.footer')
@yield('javascript')
</body>
</html>
