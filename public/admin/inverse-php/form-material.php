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
    <link href="dist/css/pages/file-upload.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Material Form</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Material Form</li>
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
                                <h4 class="card-title">Animated line inputs</h4>
                                <h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.</h6>
                                <form class="form-material m-t-40">
                                    <div class="form-group">
                                        <label class="form-label">Default Text <span class="help"> e.g. "George deo"</span></label>
                                        <input type="text" class="form-control form-control-line" value="Some text value..."> </div>
                                    <div class="form-group">
                                        <label for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                        <input type="email" id="example-email2" name="example-email" class="form-control" placeholder="Email"> </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" value="password"> </div>
                                    <div class="form-group">
                                        <label class="form-label">Placeholder</label>
                                        <input type="text" class="form-control" placeholder="placeholder"> </div>
                                    <div class="form-group">
                                        <label class="form-label">Text area</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Input Select</label>
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">File upload</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> 
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i> 
                                                <span class="fileinput-filename"></span>
                                            </div> 
                                            <span class="input-group-append btn btn-default btn-file"> 
                                                <span class="fileinput-new">Select file</span> 
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."> 
                                            </span> 
                                            <a href="javascript:void(0)"class="input-group-append btn btn-default fileinput-exists" data-bs-dismiss="fileinput">Remove</a> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Helping text</label>
                                        <input type="text" class="form-control form-control-line"> <span class="help-block text-muted"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Inputs Forms</h4>
                                <h6 class="card-subtitle">Just add <code>form-control-line</code> class to form</h6>
                                <form class="form-control-line m-t-40">
                                    <div class="form-group">
                                        <label class="form-label">Default Text <span class="help"> e.g. "George deo"</span></label>
                                        <input type="text" class="form-control form-control-line" value="Some text value..."> </div>
                                    <div class="form-group">
                                        <label for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                        <input type="email" id="example-email2" name="example-email" class="form-control" placeholder="Email"> </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" value="password"> </div>
                                    <div class="form-group">
                                        <label class="form-label">Placeholder</label>
                                        <input type="text" class="form-control" placeholder="placeholder"> </div>
                                    <div class="form-group">
                                        <label class="form-label">Text area</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Input Select</label>
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">File upload</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."> </span> <a href="javascript:void(0)"class="input-group-addon btn btn-default fileinput-exists" data-bs-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Helping text</label>
                                        <input type="text" class="form-control form-control-line"> <span class="help-block text-muted"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input States</h4>
                                <h6 class="card-subtitle">Just add <code>.has-success, .has-warning, .has-danger</code> class to the <code>.form-group</code> div. Add <code>.form-control-success, .form-control-warning, .form-control-danger</code> class in the <code>input</code> tag.</h6>
                                <form class="form-control-line m-t-40">
                                    <div class="form-group has-success">
                                        <label class="form-control-label" for="success">Success State</label>
                                        <input type="text" class="form-control form-control-success" id="success">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="form-control-label" for="warning">Warning State</label>
                                        <input type="text" class="form-control form-control-warning" id="warning">
                                    </div>
                                    <div class="form-group has-danger">
                                        <label class="form-control-label" for="error">Error State</label>
                                        <input type="text" class="form-control form-control-danger" id="error">
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="form-control-label" for="success">Success State with Feedback</label>
                                        <input type="text" class="form-control form-control-success" id="success">
                                        <div class="form-control-feedback">Success! You've done it.</div>
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="form-control-label" for="warning">Warning State with Feedback</label>
                                        <input type="text" class="form-control form-control-warning" id="warning">
                                        <div class="form-control-feedback">This is last warning!!</div>
                                    </div>
                                    <div class="form-group has-danger">
                                        <label class="form-control-label" for="error">Error State with Feedback</label>
                                        <input type="text" class="form-control form-control-danger" id="error">
                                        <div class="form-control-feedback">It's too dangerous!!</div>
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