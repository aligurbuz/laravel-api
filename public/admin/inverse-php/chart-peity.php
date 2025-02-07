<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php 
            include 'dist/php/header.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/left-sidebar.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Peity Chart</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Peity Chart</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                             
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie Chart</h4>
                                <h6 class="card-subtitle">Add code in span <code> class="pie"</code> plus for colors <code>data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'</code></h6>
                                <div class="row">
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="pie" data-peity='{ "fill": ["#009efb", "#f2f2f2"]}'>1/5</span>
                                        <div>Data : 1/5</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="pie" data-peity='{ "fill": ["#7460ee", "#f2f2f2"]}'>226/360</span>
                                        <div>Data : 226/360</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="pie" data-peity='{ "fill": ["#f96262", "#f2f2f2"]}'>0.52/1.561</span>
                                        <div>Data : 0.52/1.561</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="pie" data-peity='{ "fill": ["#26c6da", "#f2f2f2"]}'>1,4</span>
                                        <div>Data : 1,4</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="pie" data-peity='{ "fill": ["#ffbc34", "#f2f2f2"]}'>226,134</span>
                                        <div>Data : 226,134</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6"><span class="pie" data-peity='{ "fill": ["#4c5667", "#f2f2f2"]}'>0.52,1.041</span>
                                        <div>Data : 0.52, 1.041</div>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <h4 class="card-title">Donut Chart</h4>
                                        <h6 class="card-subtitle">Just add in span<code> class="donut"</code></h6>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="donut" data-peity='{ "fill": ["#009efb", "#f2f2f2"]}'>1/5</span>
                                        <div>Data : 1/5</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="donut" data-peity='{ "fill": ["#7460ee", "#f2f2f2"]}'>226/360</span>
                                        <div>Data : 226/360</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="donut" data-peity='{ "fill": ["#f96262", "#f2f2f2"], "innerRadius": 16, "radius": 32 }'>0.52/1.561</span>
                                        <div>Data : 0.52/1.561</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="donut" data-peity='{ "fill": ["#26c6da", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'>1,4</span>
                                        <div>Data : 1,4</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30"><span class="donut" data-peity='{ "fill": ["#ffbc34", "#f2f2f2"], "innerRadius": 23, "radius": 32 }'>226,134</span>
                                        <div>Data : 226,134</div>
                                    </div>
                                    <div class="col-lg-2 col-md-6"><span class="donut" data-peity='{ "fill": ["#4c5667", "#f2f2f2"], "innerRadius": 8, "radius": 32 }'>0.52,1.041</span>
                                        <div>Data : 0.52, 1.041</div>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <h4 class="card-title">Bar Chart</h4>
                                        <h6 class="card-subtitle">Add class in span<code> peity-bar</code></h6>
                                    </div>
                                    <div class="col-lg-4 m-b-30"><span class="peity-bar" data-peity='{ "fill": ["#7460ee", "#009efb"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                                    <div class="col-lg-4 m-b-30"><span class="peity-bar" data-peity='{ "fill": ["#f96262", "#f2f2f2"]}' data-width="100%" data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span></div>
                                    <div class="col-lg-4 m-b-30"><span class="peity-bar" data-peity='{ "fill": ["#4c5667", "#26c6da"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <h4 class="card-title">Line Chart</h4>
                                        <h6 class="card-subtitle">Add class in span<code> peity-line</code></h6>
                                    </div>
                                    <div class="col-lg-4 m-b-30"><span class="peity-line" data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                                    <div class="col-lg-4 m-b-30"><span class="peity-line" data-width="100%" data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span></div>
                                    <div class="col-lg-4 m-b-30"><span class="peity-line" data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php
                    include 'dist/php/right-sidebar.php';
                ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/footer.php';
        ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Chart JS -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>