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
                        <h4 class="text-themecolor">Offcanvas</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Offcanvas</li>
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
                <div class="card">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <h4 class="mb-3">Offcanvas</h4>
                                    <div class="button-group">
                                        <a class="btn btn-info text-white" data-bs-toggle="offcanvas" href="#example1"
                                            role="button" aria-controls="example1">
                                            Offcanvas with href
                                        </a>
                                        <button class="btn btn-cyan text-white" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#example2" aria-controls="example2">
                                            Offcanvas with data-bs-target
                                        </button>
                                        <button class="btn btn-danger text-white" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight">Offcanvas Right</button>
                                        <button class="btn btn-warning text-white" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                            aria-controls="offcanvasBottom">Offcanvas Bottom</button>
                                        <button class="btn btn-dark text-white" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasScrolling"
                                            aria-controls="offcanvasScrolling">Enable body scrolling</button>
                                        <button class="btn btn-success text-white" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                                            aria-controls="offcanvasWithBackdrop">Enable backdrop (default)</button>
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasWithBothOptions"
                                            aria-controls="offcanvasWithBothOptions">Enable both scrolling &amp;
                                            backdrop</button>
                                    </div>
                                    <!-- 1 -->
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="example1"
                                        aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div>
                                                Some text as placeholder. In real life you can have the elements you
                                                have chosen. Like, text, images, lists, etc.
                                            </div>
                                            <div class="dropdown mt-3">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown">
                                                    Dropdown button
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="example2"
                                        aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div>
                                                Some text as placeholder. In real life you can have the elements you
                                                have chosen. Like, text, images, lists, etc.
                                            </div>
                                            <div class="dropdown mt-3">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown">
                                                    Dropdown button
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                        aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas Right</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div>
                                                Some text as placeholder. In real life you can have the elements you
                                                have chosen. Like, text, images, lists, etc.
                                            </div>
                                            <div class="dropdown mt-3">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown">
                                                    Dropdown button
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                                        aria-labelledby="offcanvasBottomLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas Bottom</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div>
                                                Some text as placeholder. In real life you can have the elements you
                                                have chosen. Like, text, images, lists, etc.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5 -->
                                    <div class="offcanvas offcanvas-start" data-bs-scroll="true"
                                        data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
                                        aria-labelledby="offcanvasScrollingLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with
                                                scrolling</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <p>Try scrolling the rest of the page to see this option in action.</p>
                                        </div>
                                    </div>
                                    <!-- 6 -->
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
                                        aria-labelledby="offcanvasWithBackdropLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with
                                                backdrop</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <p>Try scrolling the rest of the page to see this option in action.</p>
                                        </div>
                                    </div>
                                    <!-- 7 -->
                                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped
                                                with scrolling</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <p>Try scrolling the rest of the page to see this option in action.</p>
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
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="dist/js/pages/toastr.js"></script>
    <!-- Custom Theme JavaScript -->
</body>

</html>