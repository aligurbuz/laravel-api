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
                        <h4 class="text-themecolor">Treeview</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Treeview</li>
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
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <h4 class="card-title">Default</h4>
                                        <div id="treeview1" class=""></div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <h4 class="card-title">Collapsed</h4>
                                        <div id="treeview2" class=""></div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <h4 class="card-title">Tags as Badges</h4>
                                        <div id="treeview3" class=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <h4 class="card-title">Blue Theme</h4>
                                        <div id="treeview4" class=""></div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <h4 class="card-title">Custom Icons</h4>
                                        <div id="treeview5" class=""></div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <h4 class="card-title">Expanded</h4>
                                        <div id="treeview6" class=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Searchable Tree</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2>Input</h2>
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <label for="input-search" class="sr-only">Search Tree:</label>
                                            <input type="input" class="form-control" id="input-search" placeholder="Type to search..." value="">
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" class="checkbox" id="chk-ignore-case" value="false">
                                            <label for="chk-ignore-case">Ignore Case</label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" class="checkbox" id="chk-exact-match" value="false">
                                            <label for="chk-exact-match">Exact Match</label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" class="checkbox" id="chk-reveal-results" value="false">
                                            <label for="chk-reveal-results">Reveal Results</label>
                                        </div>
                                        <button type="button" class="btn btn-success text-white" id="btn-search">Search</button>
                                        <button type="button" class="btn btn-default" id="btn-clear-search">Clear</button>
                                        <!-- </form> -->
                                    </div>
                                    <div class="col-sm-4">
                                        <h2>Tree</h2>
                                        <div id="treeview-searchable" class=""></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <h2>Results</h2>
                                        <div id="search-output"></div>
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
    <!-- Treeview Plugin JavaScript -->
    <script src="../assets/node_modules/bootstrap-treeview-master/dist/bootstrap-treeview.min.js"></script>
    <script src="../assets/node_modules/bootstrap-treeview-master/dist/bootstrap-treeview-init.js"></script>
</body>

</html>