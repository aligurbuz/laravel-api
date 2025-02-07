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
    <link href="../assets/node_modules/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/easy-pie-chart.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Extra Charts</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Extra Charts</li>
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
                                <h4 class="card-title">Easy Pie Chart</h4>
                                <h6 class="card-subtitle">Add code in span <code> class="chart easy-pie-chart-1"</code> to create chart</h6>
                                <div class="row">
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-1" data-percent="75"> <span class="percent">75</span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="easy-pie-chart-3 chart pie-chart" data-percent="25"> <span>25.00 <br>
                                            <small class="text-muted">/100mb</small></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-4" data-percent="75"> <span class="percent">75</span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-5" data-percent="75"> <span class="percent">75</span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="easy-pie-chart-6 chart pie-chart" data-percent="25"> <span>25.00 <br>
                                          <small class="text-muted">/100mb</small></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <h4 class="card-title">Easy Pie Avtar Chart</h4>
                                        <h6 class="card-subtitle">Just add in div<code> class="chart easy-pie-chart-1"</code></h6>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-1" data-percent="75"> <span><img src="../assets/images/users/1.jpg" alt="user" class="img-circle"></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-2" data-percent="75"> <span><img src="../assets/images/users/2.jpg" alt="user" class="img-circle"></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="easy-pie-chart-3 chart" data-percent="25"> <span><img src="../assets/images/users/3.jpg" alt="user" class="img-circle"></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-4" data-percent="75"> <span><img src="../assets/images/users/4.jpg" alt="user" class="img-circle"></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <div class="chart easy-pie-chart-5" data-percent="75"> <span><img src="../assets/images/users/5.jpg" alt="user" class="img-circle"></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="easy-pie-chart-6 chart" data-percent="25"> <span><img src="../assets/images/users/6.jpg" alt="user" class="img-circle"></span> <canvas height="200" width="200" style="height: 100px; width: 100px;"></canvas></div>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <h4 class="card-title">Css Charts</h4>
                                        <h6 class="card-subtitle m-b-15">Just add class <code>.css-bar</code> and data lable </h6>
                                    </div>
                                    <div class="row m-t-20">
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="10%" class="css-bar css-bar-10 css-bar-lg css-bar-default"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="20%" class="css-bar css-bar-20 css-bar-lg"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="30%" class="css-bar css-bar-30 css-bar-lg css-bar-success"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="40%" class="css-bar css-bar-40 css-bar-lg css-bar-warning"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <h4 class="card-title">All Size</h4>
                                        <h6 class="card-subtitle m-b-15"><code>.css-bar-lg</code>, <code>.css-bar</code>, <code>.css-bar-sm</code>, <code>.css-bar-xs</code></h6>
                                    </div>
                                    <div class="row m-t-20">
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="10%" class="css-bar css-bar-10 css-bar-lg css-bar-default"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="20%" class="css-bar css-bar-20 css-bar"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="30%" class="css-bar css-bar-30 css-bar-sm css-bar-success"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="40%" class="css-bar css-bar-40 css-bar-xs css-bar-warning"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <h4 class="card-title">Chart With image</h4>
                                        <h6 class="card-subtitle m-b-15">put image between div</h6>
                                    </div>
                                    <div class="row m-t-20">
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="10%" class="css-bar css-bar-10 css-bar-lg css-bar-default"><img src="../assets/images/users/1.jpg" alt="User"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="20%" class="css-bar css-bar-20 css-bar-lg"><img src="../assets/images/users/2.jpg" alt="User"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="30%" class="css-bar css-bar-30 css-bar-lg css-bar-success"><img src="../assets/images/users/3.jpg" alt="User"></div>
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <div data-label="40%" class="css-bar css-bar-40 css-bar-lg css-bar-warning"><img src="../assets/images/users/4.jpg" alt="User"></div>
                                        </div>
                                    </div>
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
    <!-- EASY PIE CHART JS -->
    <script src="../assets/node_modules/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="../assets/node_modules/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
</body>

</html>