<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/ico" sizes="16x16" href=<?= base_url("assets/images/favicon.ico") ?>>
    <title><?= SITE_NAME."-Dashboard Admin"?></title>
    <!-- Custom CSS -->
    <link href=<?= base_url("assets/libs/flot/css/float-chart.css")?> rel="stylesheet">
    <!-- Custom CSS -->
    <link href=<?= base_url("dist/css/style.min.css")?> rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href=<?= base_url("assets/libs/quill/dist/quill.snow.css") ?>>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <!-- NAVBAR-->
            <?= $this->include('_partials/navbar')?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <?= $this->include('_partials/sidebar')?>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"><?= $title ?></h4>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- CONTENT -->
            <?= $this->renderSection('content') ?>
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?= $this->include('_partials/footer')?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
</body>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=<?= base_url("assets/libs/jquery/dist/jquery.min.js") ?>></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=<?= base_url("assets/libs/popper.js/dist/umd/popper.min.js")?>></script>
    <script src=<?= base_url("assets/libs/bootstrap/dist/js/bootstrap.min.js")?>></script>
    <script src=<?= base_url("assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")?>></script>
    <script src=<?= base_url("assets/extra-libs/sparkline/sparkline.js")?>></script>
    <!--Wave Effects -->
    <script src=<?= base_url("dist/js/waves.js")?>></script>
    <!--Menu sidebar -->
    <script src=<?= base_url("dist/js/sidebarmenu.js")?>></script>
    <!--Custom JavaScript -->
    <script src=<?= base_url("dist/js/custom.min.js")?>></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src=<?=base_url("assets/libs/flot/excanvas.js")?>></script>
    <script src=<?=base_url("assets/libs/flot/jquery.flot.js")?>></script>
    <script src=<?=base_url("assets/libs/flot/jquery.flot.pie.js")?>></script>
    <script src=<?=base_url("assets/libs/flot/jquery.flot.time.js")?>></script>
    <script src=<?=base_url("assets/libs/flot/jquery.flot.stack.js")?>></script>
    <script src=<?=base_url("assets/libs/flot/jquery.flot.crosshair.js")?>></script>
    <script src=<?=base_url("assets/libs/flot/jquery.flot.barlabels.js")?>></script>
    <script src=<?=base_url("assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js")?>></script>
    <script src=<?=base_url("dist/js/pages/chart/chart-page-init.js") ?>></script>
    <script src=<?= base_url("assets/libs/chart/turning-series.js") ?>></script>
    <!-- Date Picker -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src=<?= base_url("assets/libs/quill/dist/quill.min.js") ?>></script>
    <script>
        /*datepicker*/
        $(".date-selector").flatpickr({
                enableTime: true,
                dateFormat: "Y-m-d H:i:s",
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
    <!-- CUSTOM SCRIPT FROM CERTAIN VIEW -->
    <?= $this->renderSection('script') ?>
</html>