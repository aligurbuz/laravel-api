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
    <!-- toast CSS -->
    <link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/other-pages.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Notification</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Notification</li>
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
                                <h4 class="card-title">Simple Toastr Alerts</h4>
                                <h6 class="card-subtitle">You can use four different alert <code>info, warning, success, and error</code> message.</h6>
                                <div class="button-box">
                                    <button class="tst1 btn btn-info text-white">Info Message</button>
                                    <button class="tst2 btn btn-warning">Warning Message</button>
                                    <button class="tst3 btn btn-success text-white">Success Message</button>
                                    <button class="tst4 btn btn-danger text-white">Danger Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-lg-4 col-md-12">
                                        <h4 class="card-title">Alert with different color</h4>
                                        <h6 class="card-subtitle">use the class <code>alert alert-*colors*</code> for dezier</h6>
                                        <div class="alert alert-success">This is an example top alert. You can edit what u wish. </div>
                                        <div class="alert alert-danger">This is an example top alert. You can edit what u wish. </div>
                                        <div class="alert alert-warning">This is an example top alert. You can edit what u wish. </div>
                                        <div class="alert alert-info">This is an example top alert. You can edit what u wish. </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-4 col-md-12">
                                        <h4 class="card-title">Dissmissal Alert</h4>
                                        <h6 class="card-subtitle">add the button with <code>close</code> class</h6>
                                        <div class="alert alert-success alert-dismissible"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-info alert-dismissible"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-4 col-md-12">
                                        <h4 class="card-title">Alert with image / icon </h4>
                                        <h6 class="card-subtitle">add the image / icon before content </h6>
                                        <div class="alert alert-success alert-dismissible"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible"> <img src="../assets/images/users/1.jpg" width="30" class="img-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible"> <img src="../assets/images/users/1.jpg" width="30" class="img-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-info alert-dismissible"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-lg-6 col-md-12">
                                        <h4 class="card-title">Alert with rounded corner </h4>
                                        <h6 class="card-subtitle">add the <code>alert-rounded</code> class to the alert </h6>
                                        <div class="alert alert-success alert-rounded alert-dismissible"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-danger alert-rounded alert-dismissible"> <img src="../assets/images/users/1.jpg" width="30" class="img-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-warning alert-rounded alert-dismissible"> <img src="../assets/images/users/1.jpg" width="30" class="img-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                        </div>
                                        <div class="alert alert-info alert-rounded alert-dismissible">This is an example top alert. You can edit what u wish.
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col-lg-6 col-md-12">
                                        <h4 class="card-title">Alert with content </h4>
                                        <h6 class="card-subtitle">Alerts can also contain additional HTML elements </h6>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                        </div>
                                        <div class="alert alert-info alert-dismissible">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                            <h3 class="text-info"><i class="fa fa-exclamation-circle"></i> Information</h3> This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                        </div>
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                            <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3> This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                        </div>
                                    </div>
                                    <!-- Column -->
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
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="dist/js/pages/toastr.js"></script>
    <!-- Custom Theme JavaScript -->
</body>

</html>