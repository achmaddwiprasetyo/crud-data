<?php
include "system/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemograman Web 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/fontawesome-free/css/all.min.css'; ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'; ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/jqvmap/jqvmap.min.css'; ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $base_url . 'dist/css/adminlte.min.css'; ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css'; ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/daterangepicker/daterangepicker.css'; ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/datatables-responsive/css/responsive.bootstrap4.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/datatables-buttons/css/buttons.bootstrap4.min.css'; ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo $base_url . 'plugins/summernote/summernote-bs4.min.css'; ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include 'topbar.php' ?>
        <!-- /.navbar -->

        <?php include 'menu.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <?php include 'config.php'; ?>

        <!-- /.content-wrapper -->
        <?php include 'footer.php'; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $base_url . 'plugins/jquery/jquery.min.js'; ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo $base_url . 'plugins/jquery-ui/jquery-ui.min.js'; ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $base_url . 'plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo $base_url . 'plugins/chart.js/Chart.min.js'; ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo $base_url . 'plugins/sparklines/sparkline.js'; ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo $base_url . 'plugins/jqvmap/jquery.vmap.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/jqvmap/maps/jquery.vmap.usa.js'; ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo $base_url . 'plugins/jquery-knob/jquery.knob.min.js'; ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo $base_url . 'plugins/moment/moment.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/daterangepicker/daterangepicker.js'; ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo $base_url . 'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'; ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo $base_url . 'plugins/summernote/summernote-bs4.min.js'; ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo $base_url . 'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'; ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $base_url . 'dist/js/adminlte.js'; ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo $base_url . 'dist/js/pages/dashboard.js'; ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo $base_url . 'plugins/datatables/jquery.dataTables.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-responsive/js/dataTables.responsive.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-responsive/js/responsive.bootstrap4.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-buttons/js/dataTables.buttons.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-buttons/js/buttons.bootstrap4.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/jszip/jszip.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/pdfmake/pdfmake.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/pdfmake/vfs_fonts.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-buttons/js/buttons.html5.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-buttons/js/buttons.print.min.js'; ?>"></script>
    <script src="<?php echo $base_url . 'plugins/datatables-buttons/js/buttons.colVis.min.js'; ?>"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>