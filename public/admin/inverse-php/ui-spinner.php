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
                        <h4 class="text-themecolor">Contact2</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Contact2</li>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Border Spinner</h4>
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <h4 class="card-title mt-4">Spinner Colors</h4>
                                <div class="spinner-border text-primary" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-secondary" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-success" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-danger" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-warning" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-info" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-light" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-dark" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Placement Flex</h4>
                                        <div class="d-flex justify-content-center">
                                          <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title">Loading with Text</h4>
                                        <div class="d-flex align-items-center">
                                          <strong>Loading...</strong>
                                          <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title mt-4">Float</h4>
                                        <div class="clearfix">
                                          <div class="spinner-border float-end" role="status">
                                            <span class="sr-only">Loading...</span>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title mt-4">Text Align</h4>
                                        <div class="text-center">
                                          <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title mt-4">Size</h4>
                                        <div class="spinner-border spinner-border-sm" role="status">
                                          <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm" role="status">
                                          <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title mt-4">Custom Style</h4>
                                        <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                                          <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                          <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Spinner with Buttons</h5>
                                        <button class="btn btn-primary text-white" type="button" disabled>
                                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                          <span class="sr-only">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary text-white" type="button" disabled>
                                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                          Loading...
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="card-title">Growing Spinner with Buttons</h5>
                                        <button class="btn btn-primary text-white" type="button" disabled>
                                          <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                          <span class="sr-only">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary text-white" type="button" disabled>
                                          <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                          Loading...
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Growing spinner</h4>
                                <div class="spinner-grow" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-primary" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-secondary" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-success" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-danger" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-warning" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-info" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-light" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-dark" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alignment</h4>
                                <div class="spinner-border m-3" role="status">
                                  <span class="sr-only">Loading...</span>
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