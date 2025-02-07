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
    <!-- page css -->
    <link href="dist/css/pages/pricing-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Pricing</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Pricing</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row pricing-plan">
                                    <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box">
                                            <div class="pricing-body b-l">
                                                <div class="pricing-header">
                                                    <h4 class="text-center">Silver</h4>
                                                    <h2 class="text-center"><span class="price-sign">$</span>24</h2>
                                                    <p class="uppercase">per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                                    <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                    <div class="price-row"><i class="icon-drawar"></i> 50GB Storage</div>
                                                    <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                    <div class="price-row">
                                                        <button class="btn btn-success waves-effect waves-light m-t-20 text-white">Sign up</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box b-l">
                                            <div class="pricing-body">
                                                <div class="pricing-header">
                                                    <h4 class="text-center">Gold</h4>
                                                    <h2 class="text-center"><span class="price-sign">$</span>34</h2>
                                                    <p class="uppercase">per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="price-row"><i class="icon-user"></i> 5 Members</div>
                                                    <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                    <div class="price-row"><i class="icon-drawar"></i> 80GB Storage</div>
                                                    <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                    <div class="price-row">
                                                        <button class="btn btn-success waves-effect waves-light m-t-20 text-white">Sign up</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box featured-plan">
                                            <div class="pricing-body">
                                                <div class="pricing-header">
                                                    <h4 class="price-lable text-white bg-warning"> Popular</h4>
                                                    <h4 class="text-center">Platinum</h4>
                                                    <h2 class="text-center"><span class="price-sign">$</span>45</h2>
                                                    <p class="uppercase">per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="price-row"><i class="icon-user"></i> 10 Members</div>
                                                    <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                    <div class="price-row"><i class="icon-drawar"></i> 120GB Storage</div>
                                                    <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                    <div class="price-row">
                                                        <button class="btn btn-lg btn-info waves-effect waves-light m-t-20 text-white">Sign up</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box">
                                            <div class="pricing-body b-r">
                                                <div class="pricing-header">
                                                    <h4 class="text-center">Dimond</h4>
                                                    <h2 class="text-center"><span class="price-sign">$</span>54</h2>
                                                    <p class="uppercase">per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="price-row"><i class="icon-user"></i> 15 Members</div>
                                                    <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                    <div class="price-row"><i class="icon-drawar"></i> 1TB Storage</div>
                                                    <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                    <div class="price-row">
                                                        <button class="btn btn-success waves-effect waves-light m-t-20 text-white">Sign up</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
</body>

</html>