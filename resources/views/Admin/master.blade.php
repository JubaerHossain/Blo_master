<!DOCTYPE html>
<html>
<head>
    @include('Admin.inc.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   @include('Admin.inc.header')
    <!-- Left side column. contains the logo and sidebar -->
   @include('Admin.inc.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @section('content')
        @show
    <!-- /.content-wrapper -->

    @include('Admin.inc.footer')

    <!-- Control Sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('Admin.inc.script')
</body>
</html>
