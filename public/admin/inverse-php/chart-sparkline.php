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
                        <h4 class="text-themecolor">Sparkline Chart</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Sparkline Chart</li>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Visit</h4>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash"></div>
                                    </li>
                                    <li class="text-end"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">1659</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Page Views</h4>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash2"></div>
                                    </li>
                                    <li class="text-end"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Unique Visitor</h4>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash3"></div>
                                    </li>
                                    <li class="text-end"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">6011</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Bounce Rate</h4>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash4"></div>
                                    </li>
                                    <li class="text-end"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Visit <small class="pull-right text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small></h4>
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <h6>Overall Growth</h6>
                                        <b>80.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Montly</h6>
                                        <b>15.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Day</h6>
                                        <b>5.50%</b></div>
                                </div>
                                <div id="sparkline8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Site Traffic</h4>
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <h6>Overall Growth</h6>
                                        <b>80.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Montly</h6>
                                        <b>15.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Day</h6>
                                        <b>5.50%</b></div>
                                </div>
                                <div id="sparkline9"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Site Visit</h4>
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <h6>Overall Growth</h6>
                                        <b>80.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Montly</h6>
                                        <b>15.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Day</h6>
                                        <b>5.50%</b></div>
                                </div>
                                <div id="sparkline10"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Bar Chart</h4>
                                <div id="sparkline12" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Pie Chart</h4>
                                <div id="sparkline11" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Composite Bar Chart</h4>
                                <div id="sparkline13" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body bg-primary analytics-info">
                                <h4 class="card-title text-white">Line Chart</h4>
                                <div id="sparkline14"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Bar with different color Chart</h4>
                                <div id="sparkline15" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Line Chart</h4>
                                <div id="sparkline16" class="text-center"></div>
                            </div>
                        </div>
                    </div>
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
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.charts-sparkline.js"></script>
</body>

</html>