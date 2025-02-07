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
    <!-- chartist CSS -->
    <link href="../assets/node_modules/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/node_modules/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/node_modules/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/widget-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Widget Data</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Widget Data</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">86</h1>
                                        <h6 class="text-muted">New Clients</h6></div>
                                    <!-- Column -->
                                    <div class="col text-end align-self-center">
                                        <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="mdi mdi-account-circle"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">248</h1>
                                        <h6 class="text-muted">All Projects</h6></div>
                                    <!-- Column -->
                                    <div class="col text-end align-self-center">
                                        <div data-label="30%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i class="mdi mdi-briefcase-check"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">352</h1>
                                        <h6 class="text-muted">New Items</h6></div>
                                    <!-- Column -->
                                    <div class="col text-end align-self-center">
                                        <div data-label="40%" class="css-bar m-b-0 css-bar-warning css-bar-40"><i class="mdi mdi-star-circle"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">159</h1>
                                        <h6 class="text-muted">Invoices</h6></div>
                                    <!-- Column -->
                                    <div class="col text-end align-self-center">
                                        <div data-label="60%" class="css-bar m-b-0 css-bar-info css-bar-60"><i class="mdi mdi-receipt"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/big/img1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0">20 May 2016</li>
                                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/big/img2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0">20 May 2016</li>
                                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/big/img4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0">20 May 2016</li>
                                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>86%</h3>
                                        <h6 class="card-subtitle">Total Product</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>40%</h3>
                                        <h6 class="card-subtitle">Pending Product</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>56%</h3>
                                        <h6 class="card-subtitle">Product A</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>26%</h3>
                                        <h6 class="card-subtitle">Product B</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active flex-column">
                                            <i class="fab fa-twitter fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- john doe</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fab fa-twitter fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- john doe</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fab fa-twitter fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- john doe</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div id="myCarousel2" class="carousel slide vert" data-bs-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active flex-column">
                                            <i class="fab fa-facebook-f fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- john doe</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fab fa-facebook-f fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- john doe</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column"> <i class="fab fa-facebook-f fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- john doe</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-inverse">
                            <div class="card-body">
                                <div id="myCarousel3" class="carousel slide" data-bs-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active flex-column">
                                            <i class="fa fa-map-marker fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div>
                                                <button class="btn btn-secondary b-0 waves-effect waves-light m-t-15">Default</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-map-marker fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div>
                                                <button class="btn btn-secondary b-0 waves-effect waves-light m-t-15">Default</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-map-marker fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div>
                                                <button class="btn btn-secondary b-0 waves-effect waves-light m-t-15">Default</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-white">
                            <div class="card-body">
                                <div id="myCarousel4" class="carousel vert slide" data-bs-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active flex-column">
                                            <i class="fa fa-map-marker fa-2x"></i>
                                            <p>25th Jan</p>
                                            <h3>Now Get <span class="font-bold">50% Off</span><br>on buy</h3>
                                            <div>
                                                <button class="btn btn-info justify-content-start waves-effect waves-light m-t-15 text-white">Default</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-map-marker fa-2x"></i>
                                            <p>25th Jan</p>
                                            <h3>Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div>
                                                <button class="btn btn-success d-inline waves-effect waves-light m-t-15 text-white">Default</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column"> <i class="fa fa-map-marker fa-2x"></i>
                                            <p>25th Jan</p>
                                            <h3>Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div>
                                                <button class="btn btn-primary waves-effect waves-light m-t-15">Default</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">$18090</h3>
                                        <h5 class="text-muted m-b-0">Income</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">2690</h3>
                                        <h5 class="text-muted m-b-0">Users</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">20 march</h3>
                                        <h5 class="text-muted m-b-0">My birthday</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">6540</h3>
                                        <h5 class="text-muted m-b-0">pending</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-info">
                                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0 text-info">$18090</h3>
                                    <h5 class="text-muted m-b-0">Income</h5></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-success">
                                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0 text-success">$18090</h3>
                                    <h5 class="text-muted m-b-0">Income</h5></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-inverse">
                                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0">$18090</h3>
                                    <h5 class="text-muted m-b-0">Income</h5></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-primary">
                                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0 text-primary">$18090</h3>
                                    <h5 class="text-muted m-b-0">Income</h5></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <div class="social-widget">
                                        <div class="soc-header box-facebook"><i class="fab fa-facebook-f"></i></div>
                                        <div class="soc-content">
                                            <div class="col-6 b-r">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Followers</h5></div>
                                            <div class="col-6">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Posts</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <div class="social-widget">
                                        <div class="soc-header box-twitter"><i class="fab fa-twitter"></i></div>
                                        <div class="soc-content">
                                            <div class="col-6 b-r">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Followers</h5></div>
                                            <div class="col-6">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Tweets</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <div class="social-widget">
                                        <div class="soc-header box-google"><i class="fab fa-google-plus-g"></i></div>
                                        <div class="soc-content">
                                            <div class="col-6 b-r">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Circles</h5></div>
                                            <div class="col-6">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Posts</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <div class="social-widget">
                                        <div class="soc-header box-linkedin"><i class="fab fa-linkedin"></i></div>
                                        <div class="soc-content">
                                            <div class="col-6 b-r">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Contacts</h5></div>
                                            <div class="col-6">
                                                <h3 class="font-medium">456</h3>
                                                <h5 class="text-muted">Posts</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Column -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>86%</h3>
                                    <h6 class="card-subtitle">Total Product</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>40%</h3>
                                    <h6 class="card-subtitle">Pending Product</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>56%</h3>
                                    <h6 class="card-subtitle">Product A</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>26%</h3>
                                    <h6 class="card-subtitle">Product B</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Unique Visit</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Total Visit</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo2" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">$12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Bounce rate</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo3" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">$12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Page Views</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo4" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">$12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site A Traffic</h4>
                                <div class="d-flex flex-row">
                                    <div class="p-10 p-l-0 b-r">
                                        <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                                    <div class="p-10 b-r">
                                        <h6 class="font-light">Montly</h6><b>20.40%</b>
                                    </div>
                                    <div class="p-10">
                                        <h6 class="font-light">Daily</h6><b>5.40%</b>
                                    </div>
                                </div>
                            </div>
                            <div id="spark1" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site B Traffic</h4>
                                <div class="d-flex flex-row">
                                    <div class="p-10 p-l-0 b-r">
                                        <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                                    <div class="p-10 b-r">
                                        <h6 class="font-light">Montly</h6><b>20.40%</b>
                                    </div>
                                    <div class="p-10">
                                        <h6 class="font-light">Daily</h6><b>5.40%</b>
                                    </div>
                                </div>
                            </div>
                            <div id="spark2" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site C Traffic</h4>
                                <div class="d-flex flex-row">
                                    <div class="p-10 p-l-0 b-r">
                                        <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                                    <div class="p-10 b-r">
                                        <h6 class="font-light">Montly</h6><b>20.40%</b>
                                    </div>
                                    <div class="p-10">
                                        <h6 class="font-light">Daily</h6><b>5.40%</b>
                                    </div>
                                </div>
                            </div>
                            <div id="spark3" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">2376 <i class="ti-angle-down font-14 text-danger"></i></span>
                                        <h6>Total Visits</h6></div>
                                    <div class="col-4 align-self-center text-end  p-l-0">
                                        <div id="sparklinedash3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">3670 <i class="ti-angle-up font-14 text-success"></i></span>
                                        <h6>Page Views</h6></div>
                                    <div class="col-4 align-self-center text-end p-l-0">
                                        <div id="sparklinedash"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">1562 <i class="ti-angle-up font-14 text-success"></i></span>
                                        <h6>Unique Visits</h6></div>
                                    <div class="col-4 align-self-center text-end p-l-0">
                                        <div id="sparklinedash2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">35% <i class="ti-angle-down font-14 text-danger"></i></span>
                                        <h6>Bounce Rate</h6></div>
                                    <div class="col-4 align-self-center text-end p-l-0">
                                        <div id="sparklinedash4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Total Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <button type="button" class="btn btn-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Monthly Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <button type="button" class="btn btn-info dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark5"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Weekly Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <button type="button" class="btn btn-success dropdown-toggle text-white p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark6"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Daily Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <button type="button" class="btn btn-warning dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark7"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="card-group">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Unique Visit</h4>
                            <div id="spark8"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i>  12456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Total Visit</h4>
                            <div id="spark9"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Bounce rate</h4>
                            <div id="spark10"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i>  12456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Page Views</h4>
                            <div id="spark11"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white">2,064</h1>
                                <h6 class="text-white">Sessions</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card">
                            <div class="box bg-primary text-center">
                                <h1 class="font-light text-white">1,738</h1>
                                <h6 class="text-white">Users</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white">5963</h1>
                                <h6 class="text-white">Page Views</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card">
                            <div class="box bg-dark text-center">
                                <h1 class="font-light text-white">2.9s</h1>
                                <h6 class="text-white">Pages/Session</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card">
                            <div class="box bg-megna text-center">
                                <h1 class="font-light text-white">1.5s</h1>
                                <h6 class="text-white">Avg. Session</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white">10%</h1>
                                <h6 class="text-white">Bounce Rate</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daily Sales</h4>
                                <div class="text-end"> <span class="text-muted">Todays Income</span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-up text-success"></i></sup> $120</h1>
                                </div>
                                <span class="text-success">20%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Weekly Sales</h4>
                                <div class="text-end"> <span class="text-muted">Todays Income</span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-up text-info"></i></sup> $5,000</h1>
                                </div>
                                <span class="text-info">30%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Monthly Sales</h4>
                                <div class="text-end"> <span class="text-muted">Todays Income</span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-down text-danger"></i></sup> $8,000</h1>
                                </div>
                                <span class="text-danger">60%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Yearly Sales</h4>
                                <div class="text-end"> <span class="text-muted">Todays Income</span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-up text-inverse"></i></sup> $12,000</h1>
                                </div>
                                <span class="text-inverse">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-inverse" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/node_modules/gauge/gauge.min.js"></script>
    <script src="dist/js/pages/widget-data.js"></script>
</body>

</html>