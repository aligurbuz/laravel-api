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
    
    <!-- This page CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 31 Page CSS -->
    <link href="dist/css/pages/dashboard3.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Dashboard 3</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 3</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                             
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>Visit</small>
                                        <h2><i class="ti-arrow-up text-success"></i> 1064</h2>
                                        <div id="sparklinedash"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>Total Page Views</small>
                                        <h2><i class="ti-arrow-up text-purple"></i> 5064</h2>
                                        <div id="sparklinedash2"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>Unique Visitor</small>
                                        <h2><i class="ti-arrow-up text-info"></i> 664</h2>
                                        <div id="sparklinedash3"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>Bounce Rate</small>
                                        <h2><i class="ti-arrow-down text-danger"></i> 50%</h2>
                                        <div id="sparklinedash4"></div>
                                    </div>
                                </div>
                                <ul class="list-inline font-12 text-center">
                                            <li><i class="fa fa-circle text-cyan"></i> Site A</li>
                                            <li><i class="fa fa-circle text-primary"></i> Site B</li>
                                            <li><i class="fa fa-circle text-purple"></i> Site C</li>
                                        </ul>
                                <div id="morris-area-chart" style="height: 340px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- Campaign -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">NEW CLIENTS</h5>
                                        <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                            <span class="display-5 text-info"><i class="icon-people"></i></span>
                                            <a href="javscript:void(0)" class="link display-5 ms-auto">23</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">NEW PROJECTS</h5>
                                        <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                            <span class="display-5 text-purple"><i class="icon-folder"></i></span>
                                            <a href="javscript:void(0)" class="link display-5 ms-auto">169</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">OPEN PROJECTS</h5>
                                        <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                            <span class="display-5 text-primary"><i class="icon-folder-alt"></i></span>
                                            <a href="javscript:void(0)" class="link display-5 ms-auto">311</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">NEW INVOICES</h5>
                                        <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                            <span class="display-5 text-success"><i class="icon-wallet"></i></span>
                                            <a href="javscript:void(0)" class="link display-5 ms-auto">117</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="news-slide m-b-15">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item img-carousel">
                                        <div class="overlaybg"><img src="../assets/images/news/slide1.jpg" height="350px"></div>
                                        <div class="news-content carousel-caption"><span class="label label-danger label-rounded">Primary</span>
                                            <h4>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)">Read More</a>
                                        </div>
                                    </div>
                                    <div class="carousel-item img-carousel">
                                        <div class="overlaybg"><img src="../assets/images/news/slide1.jpg" height="350px"></div>
                                        <div class="news-content carousel-caption"><span class="label label-primary label-rounded">Primary</span>
                                            <h4>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)">Read More</a>
                                        </div>
                                    </div>
                                    <div class="carousel-item img-carousel active">
                                        <div class="overlaybg"><img src="../assets/images/news/slide1.jpg" height="350px"></div>
                                        <div class="news-content carousel-caption"><span class="label label-success label-rounded">Primary</span>
                                            <h4>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Campaign -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Today's Schedule and sales overview -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-40 align-items-center no-block">
                                    <h5 class="card-title ">SALES DIFFERENCE</h5>
                                    <div class="ms-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-cyan"></i> SITE A</li>
                                            <li><i class="fa fa-circle text-primary"></i> SITE B</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div id="morris-area-chart2" style="height: 340px;"></div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">SALES DIFFERENCE</h5>
                                        <div class="row">
                                        <div class="col-6  m-t-30">
                                            <h1 class="text-primary">$647</h1>
                                            <p class="text-muted">APRIL 2017</p>
                                            <b>(150 Sales)</b> </div>
                                        <div class="col-6">
                                            <div id="sales1" class="text-end"></div>
                                        </div>
                                    </div>
                                     </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">VISIT STATASTICS</h5>
                                        <div class="row">
                                        <div class="col-6  m-t-30">
                                            <h1 class="text-info">$347</h1>
                                            <p class="light_op_text">APRIL 2017</p>
                                            <b class="">(150 Sales)</b> </div>
                                        <div class="col-6">
                                            <div id="sales2" class="text-end"></div>
                                        </div>
                                    </div>    
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                
                
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    
    <!-- Vector map JavaScript -->
    <!-- Chart JS -->
    <script src="dist/js/dashboard3.js"></script>
</body>

</html>