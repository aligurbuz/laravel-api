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
    <!-- Popup CSS -->
    <link href="../assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/user-card.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Gallery</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Gallery</li>
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
                <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <h4 class="card-title">Gallery page</h4>
                        <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6></div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img1.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img2.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img3.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img4.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img3.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img5.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img6.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/big/img1.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../assets/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-40">
                    <div class="col-md-12">
                        <h4 class="card-title">Other Gallery </h4>
                        <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6> </div>
                </div>
                <div class="row el-element-overlay">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <a class="image-popup-vertical-fit" href="../assets/images/big/img5.jpg"> <img src="../assets/images/big/img5.jpg" alt="user" /> </a>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <a class="image-popup-vertical-fit" href="../assets/images/users/1.jpg"> <img src="../assets/images/users/1.jpg" alt="user" /> </a>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <a class="image-popup-vertical-fit" href="../assets/images/users/2.jpg"> <img src="../assets/images/users/2.jpg" alt="user" /> </a>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <a class="image-popup-vertical-fit" href="../assets/images/big/img4.jpg"> <img src="../assets/images/big/img4.jpg" alt="user" /> </a>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <a class="image-popup-vertical-fit" href="../assets/images/big/img2.jpg"> <img src="../assets/images/big/img2.jpg" alt="user" /> </a>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <a class="image-popup-vertical-fit" href="../assets/images/users/1.jpg"> <img src="../assets/images/big/img1.jpg" alt="user" /> </a>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Project title</h3> <small>subtitle of project</small>
                                    <br/> </div>
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
    <!-- Magnific popup JavaScript -->
    <script src="../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
</body>

</html>