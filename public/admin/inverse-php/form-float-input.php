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
    <link href="dist/css/pages/floating-label.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Float Input</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Float Input</li>
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
                                <h4 class="card-title">Animated Line Inputs Form With Floating Labels</h4>
                                <h6 class="card-subtitle">Just add <code>floating-labels</code> class to the form.</h6>
                                <form class="floating-labels m-t-40">
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input1">
                                        <span class="bar"></span>
                                        <label for="input1">Regular Input</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="password" class="form-control" id="input2">
                                        <span class="bar"></span>
                                        <label for="input2">Password</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input3">
                                        <span class="bar"></span>
                                        <label for="input3">Placeholder</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input4">
                                        <span class="bar"></span>
                                        <label for="input4">Helping text</label>
                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input5" data-bs-toggle="tooltip" data-placement="bottom" title="input with tooltip!!">
                                        <span class="bar"></span>
                                        <label for="input5">Input with tooltip</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <select class="form-select" id="input6">
                                            <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select><span class="bar"></span>
                                        <label for="input6">Gender</label>
                                    </div>
                                    <div class="form-group m-b-5">
                                        <textarea class="form-control" rows="4" id="input7"></textarea>
                                        <span class="bar"></span>
                                        <label for="input7">Text area</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Line Inputs Form With Floating Labels</h4>
                                <h6 class="card-subtitle">Just add <code>floating-labels</code> class to the form and <code>has-warning, has-success, has-danger & has-error</code> for various inputs. For input with icon add <code>has-feedback</code> class.</h6>
                                <form class="floating-labels m-t-40">
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control input-lg" id="input8"><span class="bar"></span>
                                        <label for="input8">Large Input</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control input-sm" id="input9"><span class="bar"></span>
                                        <label for="input9">Small Input</label>
                                    </div>
                                    <div class="form-group has-warning m-b-40">
                                        <input type="text" class="form-control" id="input10"><span class="bar"></span>
                                        <label for="input10">Warning State</label>
                                    </div>
                                    <div class="form-group has-success m-b-40">
                                        <input type="text" class="form-control" id="input11"><span class="bar"></span>
                                        <label for="input11">Success State</label>
                                    </div>
                                    <div class="form-group has-error has-danger m-b-40">
                                        <input type="text" class="form-control" id="input12"><span class="bar"></span>
                                        <label for="input12">Error State</label>
                                    </div>
                                    <div class="form-group has-warning has-feedback m-b-40">
                                        <input type="text" class="form-control form-control-warning" id="input13"><span class="bar"></span>
                                        <label for="input13">Warning State With Feedback</label>
                                    </div>
                                    <div class="form-group has-success has-feedback m-b-40">
                                        <input type="text" class="form-control form-control-success" id="input14"><span class="bar"></span>
                                        <label for="input14">Success State With Feedback</label>
                                    </div>
                                    <div class="form-group has-danger has-error has-feedback m-b-5">
                                        <input type="text" class="form-control form-control-danger" id="input15"><span class="bar"></span>
                                        <label for="input15">Error State With Feedback</label>
                                    </div>
                                </form>
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
    <script src="dist/js/pages/jasny-bootstrap.js"></script>
</body>

</html>