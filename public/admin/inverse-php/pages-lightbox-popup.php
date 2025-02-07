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
                        <h4 class="text-themecolor">Lightbox Popup</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Lightbox Popup</li>
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
                                <h4 class="card-title">Single image lightbox</h4>
                                <h6 class="card-subtitle">add like this <code>&lt;a class="image-popup-no-margins" href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code></h6>
                                <div class="row m-t-30">
                                    <div class="col-md-4">
                                        <a class="image-popup-vertical-fit" href="../assets/images/big/img1.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../assets/images/big/img1.jpg" alt="image" class="img-responsive" /> </a>
                                        <h6 class="m-t-10">Fits horizontally and vertically</h6> </div>
                                    <div class="col-md-4">
                                        <a class="image-popup-fit-width" href="../assets/images/big/img2.jpg" title="This image fits only horizontally."> <img src="../assets/images/big/img2.jpg" alt="image" class="img-responsive" /> </a>
                                        <h6 class="m-t-10">Only horizontally</h6> </div>
                                    <div class="col-md-4">
                                        <a class="image-popup-no-margins" href="../assets/images/big/img3.jpg"> <img src="../assets/images/big/img3.jpg" alt="image" class="img-responsive" /> </a>
                                        <h6 class="m-t-10">Zoom animation, close on top-right.</h6> </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lightbox gallery</h4>
                                <h6 class="card-subtitle">just add code under class="popup-gallery".</h6>
                                <div class="popup-gallery row m-t-30">
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img4.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../assets/images/big/img4.jpg" class="img-responsive" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img5.jpg" title="This image fits only horizontally."> <img src="../assets/images/big/img5.jpg" class="img-responsive" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img6.jpg"> <img src="../assets/images/big/img6.jpg" class="img-responsive" alt="img" /> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Zoom gallery</h4>
                                <h6 class="card-subtitle">just add code under class="zoom-gallery".</h6>
                                <div class="zoom-gallery row m-t-30">
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img1.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../assets/images/big/img4.jpg" class="img-responsive" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img2.jpg" title="This image fits only horizontally."> <img src="../assets/images/big/img5.jpg" class="img-responsive" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img3.jpg"> <img src="../assets/images/big/img6.jpg" class="img-responsive" alt="img" /> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Popup with Youtube Video</h4>
                                        <h6 class="card-subtitle">You can use youtube video with popup just add class <code>popup-youtube</code></h6>
                                        <a class="popup-youtube btn btn-danger text-white" href="www.youtube.com/watch?v=sK7riqg2mr4">Open YouTube video</a>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title">Google map</h4>
                                        <h6 class="card-subtitle">You can use Googlemap with popup just add class with <code>popup-gmaps</code></h6>
                                        <a class="popup-gmaps btn btn-info text-white" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div id="image-popups" class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img1.jpg" data-effect="mfp-zoom-in"><img src="../assets/images/big/img1.jpg" class="img-responsive" />
                                            <br/>Zoom</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img2.jpg" data-effect="mfp-newspaper"><img src="../assets/images/big/img2.jpg" class="img-responsive" />
                                            <br/>Newspaper</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img3.jpg" data-effect="mfp-move-horizontal"><img src="../assets/images/big/img3.jpg" class="img-responsive" />
                                            <br/>Horizontal move</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img4.jpg" data-effect="mfp-move-from-top"><img src="../assets/images/big/img4.jpg" class="img-responsive" />
                                            <br/>Move from top</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img5.jpg" data-effect="mfp-3d-unfold"><img src="../assets/images/big/img5.jpg" class="img-responsive" />
                                            <br/>3d unfold</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img6.jpg" data-effect="mfp-zoom-out"><img src="../assets/images/big/img5.jpg" class="img-responsive" />
                                            <br/>Zoom-out</a>
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
    <!-- Magnific popup JavaScript -->
    <script src="../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
</body>

</html>