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
    <link href="dist/css/pages/ribbon-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Ribbons</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Ribbons</li>
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
                        <h4 class="card-title">Ribbons default</h4>
                        <h6 class="card-subtitle m-b-20">Add class: <code>.ribbon</code>. It must be inside <code>.ribbon-wrapper</code> class. Content should be inside <code>.ribbon-content</code> class.</h6>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-default">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-danger">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-success">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-primary">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-warning">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 m-t-40">
                        <h4 class="card-title">Ribbons right align</h4>
                        <h6 class="card-subtitle m-b-20">Add class: <code>.ribbon-right</code></h6>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-default ribbon-right">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-danger ribbon-right">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-success ribbon-right">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-primary ribbon-right">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info ribbon-right">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-warning ribbon-right">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 m-t-40">
                        <h4 class="card-title">Ribbons vertical</h4>
                        <h6 class="card-subtitle m-b-20">Add class: <code>.ribbon-vertical-l</code> to display on left. Add class: <code>.ribbon-vertical-r</code>to display on right</h6>
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-vwrapper card">
                                    <div class="ribbon ribbon-default ribbon-vertical-l"><i class="fa fa-check-circle"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-vwrapper card">
                                    <div class="ribbon ribbon-danger ribbon-vertical-l"><i class="fa fa-check-circle"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-vwrapper card">
                                    <div class="ribbon ribbon-success ribbon-vertical-l"><i class="fa fa-check-circle"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-vwrapper-reverse card">
                                    <div class="ribbon ribbon-primary  ribbon-vertical-r"><i class="fa fa-check-circle"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-vwrapper-reverse card">
                                    <div class="ribbon ribbon-info ribbon-vertical-r"><i class="fa fa-check-circle"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-vwrapper-reverse card">
                                    <div class="ribbon ribbon-warning ribbon-vertical-r"><i class="fa fa-check-circle"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 m-t-40">
                        <h4 class="card-title">Bookmarked ribbons</h4>
                        <h6 class="card-subtitle m-b-20">Add class: <code>.ribbon-bookmark</code> right after the <code>.ribbon</code> class.  </h6>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-bookmark  ribbon-default">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-wrapper-reverse card">
                                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-vwrapper p-b-40 p-t-30 card">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-l ribbon-info"><i class="fa fa-heart"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-wrapper-reverse card">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-r ribbon-success"><i class="fa fa-heart"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 m-t-40">
                        <h4 class="card-title">Corner ribbons</h4>
                        <h6 class="card-subtitle m-b-20">Add class: <code>.ribbon-corner</code>. </h6>
                        <div class="row m-b-10">
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-corner ribbon-info"><i class="fa fa-heart"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-wrapper-reverse card">
                                    <div class="ribbon ribbon-corner ribbon-right ribbon-info"><i class="fa fa-heart"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-wrapper-bottom card">
                                    <div class="ribbon ribbon-corner ribbon-info ribbon-bottom"><i class="fa fa-heart"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="ribbon-wrapper-right-bottom card">
                                    <div class="ribbon ribbon-corner ribbon-info ribbon-right ribbon-bottom"><i class="fa fa-heart"></i></div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
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