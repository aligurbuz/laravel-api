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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Toast</h4>
                                <div class="bg-light p-3">
                                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-header">
                                        <i data-feather="bar-chart-2" class="fill-white text-info feather-sm me-2"></i>
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small>11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                      </div>
                                      <div class="toast-body">
                                        Hello, world! This is a toast message.
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Translucent</h4>
                                <div class="bg-light p-3">
                                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-header">
                                        <i data-feather="bar-chart-2" class="fill-white text-info feather-sm me-2"></i>
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                      </div>
                                      <div class="toast-body">
                                        Hello, world! This is a toast message.
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Stacking</h4>
                                <div class="bg-light p-3">
                                    <div class="toast-container">
                                      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                          <i data-feather="bar-chart-2" class="fill-white text-info feather-sm me-2"></i>
                                          <strong class="me-auto">Bootstrap</strong>
                                          <small class="text-muted">just now</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          See? Just like this.
                                        </div>
                                      </div>

                                      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                          <i data-feather="bar-chart-2" class="fill-white text-info feather-sm me-2"></i>
                                          <strong class="me-auto">Bootstrap</strong>
                                          <small class="text-muted">2 seconds ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          Heads up, toasts will stack automatically
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom content</h4>
                                <div class="bg-light p-3">
                                    <div class="toast-container">
                                        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="d-flex">
                                              <div class="toast-body">
                                              Hello, world! This is a toast message.
                                             </div>
                                              <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                          </div>

                                          <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-body">
                                              Hello, world! This is a toast message.
                                              <div class="mt-2 pt-2 border-top">
                                                <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Solid Color schemes</h4>
                                <div class="bg-light p-3">
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-info border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Light Color schemes</h4>
                                <div class="bg-light p-3">
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-light-info border-0 remove-close-icon" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center text-info font-medium">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close ms-auto me-2 d-flex align-items-center" data-bs-dismiss="toast" aria-label="Close">
                                          <i data-feather="x" class="feather-sm fill-white text-info"></i>
                                      </button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-light-primary border-0 remove-close-icon" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center text-primary font-medium">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close ms-auto me-2 d-flex align-items-center" data-bs-dismiss="toast" aria-label="Close">
                                          <i data-feather="x" class="feather-sm fill-white text-primary"></i>
                                      </button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-light-danger border-0 remove-close-icon" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center text-danger font-medium">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close ms-auto me-2 d-flex align-items-center" data-bs-dismiss="toast" aria-label="Close">
                                          <i data-feather="x" class="feather-sm fill-white text-danger"></i>
                                      </button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-light-warning border-0 remove-close-icon" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center text-warning font-medium">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close ms-auto me-2 d-flex align-items-center" data-bs-dismiss="toast" aria-label="Close">
                                          <i data-feather="x" class="feather-sm fill-white text-warning"></i>
                                      </button>
                                    </div>
                                    <div class="toast mb-2 d-flex align-items-center text-white bg-light-success border-0 remove-close-icon" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-body">
                                        <div class="d-flex align-items-center text-success font-medium">
                                            <i data-feather="info" class="fill-white feather-sm me-2"></i> Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                      <button type="button" class="btn-close ms-auto me-2 d-flex align-items-center" data-bs-dismiss="toast" aria-label="Close">
                                          <i data-feather="x" class="feather-sm fill-white text-success"></i>
                                      </button>
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
    <script type="text/javascript">
        $('.toast').toast('show');
    </script>
</body>

</html>