<!DOCTYPE html>
<html lang="tr">

<head>
    <?php $this->load->view("_partials/_head"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view("_partials/_navbar"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("_partials/_main-sidebar"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php $this->load->view("_partials/_content-header"); ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php $this->load->view("_partials/_control-sidebar"); ?>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php $this->load->view("_partials/_footer"); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php $this->load->view("_partials/_include-script"); ?>
    
</body>

</html>