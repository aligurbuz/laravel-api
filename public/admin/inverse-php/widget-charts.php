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
    <!--This page css - Morris CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Widget Charts</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Widget Charts</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3>Revenue Statistics</h3>
                                            <h6 class="card-subtitle">January 2017</h6> 
                                        </div>
                                        <div class="ms-auto">
                                            <ul class="list-inline">
                                                <li>
                                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Product A</h6> </li>
                                                <li>
                                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>Product B</h6> </li>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="total-revenue4" style="height: 350px;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$54578</h1>
                                        <h6 class="text-muted">Total Revenue</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$43451</h1>
                                        <h6 class="text-muted">Online Revenue</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$44578</h1>
                                        <h6 class="text-muted">Product A</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$12578</h1>
                                        <h6 class="text-muted">Product B</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-4 col-xlg-3 col-md-4 col-sm-12 b-r">
                                    <div class="card-body">
                                        <h3>User Analatics</h3>
                                        <h6 class="card-subtitle">for the all products</h6>
                                        <div class="row">
                                            <div class="col-lg-12 m-t-40">
                                                <h1 class="m-b-0 font-light">31568</h1>
                                                <h6 class="text-muted">Page views</h6></div>
                                            <div class="col-lg-12 m-t-40">
                                                <h1 class="m-b-0 font-light">8457</h1>
                                                <h6 class="text-muted">New Visits</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xlg-9 col-md-8 col-sm-12 align-self-center">
                                    <div class="card-body">
                                        <div class="user-analytics chartist-chart" style="height: 250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-9 col-md-7">
                                    <div class="card-body">
                                        <h3>Realtime Data of visits</h3>
                                        <h6 class="card-subtitle">Mon 05 Mar 2017</h6>
                                        <div class="demo-container" style="width:100%; height:400px;">
                                            <div id="placeholder" class="flot-chart-content" style="width:100%; height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-5 border-start p-l-0">
                                    <center class="m-t-30 m-b-40 p-t-20 p-b-20">
                                        <font class="display-3">25</font>
                                        <h6 class="text-muted">Active Users</h6>
                                        <button type="button" class="btn btn-success text-white">View Details</button>
                                    </center>
                                    <hr>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Column -->
                                            <div class="col p-r-0">
                                                <h1 class="font-light">15</h1>
                                                <h6 class="text-muted">Using Desktop</h6></div>
                                            <!-- Column -->
                                            <div class="col text-end align-self-center">
                                                <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="mdi mdi-desktop-mac"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Column -->
                                            <div class="col p-r-0">
                                                <h1 class="font-light">10</h1>
                                                <h6 class="text-muted">Using Mobile</h6></div>
                                            <!-- Column -->
                                            <div class="col text-end align-self-center">
                                                <div data-label="20%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i class="mdi mdi-cellphone-android"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 col-md-4">
                                    <div class="card-body">
                                        <h3>Android Vs iOS</h3>
                                        <h6 class="card-subtitle m-b-0">check the difference of OS</h6> </div>
                                </div>
                                <div class="col-lg-3 col-md-4 b-r align-self-center">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-8 p-0 align-self-center">
                                                <h3 class="m-b-0">31568</h3>
                                                <h5 class="text-muted m-b-0">Growth</h5> </div>
                                            <div class="col-4 text-end">
                                                <div class="round align-self-center round-success"><i class="mdi mdi-android"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 align-self-center">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-8 p-0 align-self-center">
                                                <h3 class="m-b-0">15478</h3>
                                                <h5 class="text-muted m-b-0">Loss</h5> </div>
                                            <div class="col-4 text-end">
                                                <div class="round align-self-center bg-inverse"><i class="mdi mdi-apple"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr class="m-t-0"> </div>
                            <div class="chartist-chart andvios m-t-40" style="height:350px;"> </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-6 col-md-6">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                                    <div>
                                        <h3 class="card-title text-white">Bandwidth usage</h3>
                                        <h6 class="card-subtitle text-white">March  2017</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <font class="display-6 text-white">50 GB</font>
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <div class="usage chartist-chart" style="height:120px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-6 col-md-6">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1></div>
                                    <div>
                                        <h3 class="card-title text-white">Download count</h3>
                                        <h6 class="card-subtitle text-white">March  2017</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <font class="display-6 text-white">35487</font>
                                    </div>
                                    <div class="col-8  text-end">
                                        <div class="spark-count" style="height:120px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-7 col-md-6">
                        <div class="card card-body">
                            <h4 class="card-title">Notification</h4>
                            <div class="message-box">
                                <div class="message-widget">
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><span class="round bg-primary"><i class="mdi mdi-email"></i></span></div>
                                        <div class="mail-contnet">
                                            <h5>You have 3 new messages</h5> <span class="mail-desc">Daniel Kristeen, Hanna Giover, Jeffry Brown</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><span class="round bg-danger"><i class="mdi mdi-earth"></i></span></div>
                                        <div class="mail-contnet">
                                            <h5>Newsfeed available </h5> <span class="mail-desc">Todays headlines : Breakdancing Grandma Proves ..</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <span class="round bg-success"><i class="mdi mdi-currency-usd"></i></span></div>
                                        <div class="mail-contnet">
                                            <h5>2 Invoices to pay</h5> <span class="mail-desc">$3500 from Krishnan, $2000 from Akhil</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><span class="round"><i class="mdi mdi-comment-check-outline"></i></span></div>
                                        <div class="mail-contnet">
                                            <h5>15 New comments</h5> <span class="mail-desc">Jhonny : Hey this stuff is awesome and how can i ..</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-5 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Visit source</h3>
                                <div id="m-piechart" style="width:100%; height:278px"></div>
                                <center>
                                    <ul class="list-inline m-t-20">
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Mobile</h6> </li>
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-primary"></i>Desktop</h6> </li>
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-danger"></i>Tablet</h6> </li>
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-muted"></i>Other</h6> </li>
                                    </ul>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex no-block align-self-center">
                                    <div>
                                    
                                    <h3 class="card-title">Download Count</h3>
                                    <h6 class="card-subtitle">you can check the count</h6>
                                    </div>
                                <div class="ms-auto">
                                    
                                <ul class="list-inline">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Free</h6> </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-primary"></i>Premium</h6> </li>
                                </ul>
                                </div> 
                            </div>
                                <div class="download-state chartist-chart" style="height:300px"></div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-5 col-xlg-3 col-md-6">
                                    <div class="card-body">
                                        <h3 class="card-title m-b-30">Reviews</h3>
                                        <font class="m-t-40 display-6">31560</font>
                                        <h6 class="card-subtitle m-b-30">April the product got 234 reviews</h6>
                                        <a href="javascript:void(0)" class="m-r-20"><img src="../assets/images/users/1.jpg" class="img-circle" width="50" /></a>
                                        <a href="javascript:void(0)" class="m-r-20"><img src="../assets/images/users/2.jpg" class="img-circle" width="50" /></a>
                                        <a href="javascript:void(0)" class="m-r-20"><img src="../assets/images/users/3.jpg" class="img-circle" width="50" /></a>
                                        <a href="javascript:void(0)" class="m-r-20"><img src="../assets/images/users/4.jpg" class="img-circle" width="50" /></a>
                                        <div class="clearfix"></div>
                                        <button type="button" class="btn btn-success m-t-40 text-white">Read reviews</button>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="col-lg-7 col-xlg-9 col-md-6 b-l p-l-0">
                                    <ul class="product-review">
                                        <li>
                                            <font class="text-muted display-5"><i class="mdi mdi-emoticon-cool"></i></font> <span>
                                                <h3 class="card-title">Positive Reviews</h3>
                                                <h6 class="card-subtitle">25547 Reviews</h6> 
                                            </span>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%; height:6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <font class="text-muted display-5"><i class="mdi mdi-emoticon-sad"></i></font> <span>
                                                <h3 class="card-title">Negative Reviews</h3>
                                                <h6 class="card-subtitle">5478 Reviews</h6> 
                                            </span>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%; height:6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <font class="text-muted display-5"><i class="mdi mdi-emoticon-neutral"></i></font> <span>
                                                <h3 class="card-title">Neutral Reviews</h3>
                                                <h6 class="card-subtitle">457 Reviews</h6> 
                                            </span>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 35%; height:6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Column -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="card-title">Products Availability</h4>
                                <h6 class="card-subtitle">March  2017</h6>
                                <div class="table-responsive">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th style="width:90px;">Product</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="round"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Apple iPhone 6  Space Grey, 16 GB</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                            <tr>
                                                <td><span class="round bg-success"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Fossil Marshall For Men Black Smartwatch</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                            <tr>
                                                <td><span class="round bg-danger"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Sony Bravia 80cm - 32 HD Ready LED TV</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                            <tr>
                                                <td><span class="round bg-primary"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Panasonic P75 Champagne Gold, 8 GB</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card justify-content-center"> <img class="card-img" src="../assets/images/background/socialbg.jpg" alt="Card image" style="max-height:450px;">
                            <div class="card-img-overlay card-inverse social-profile d-flex ">
                                <div class="align-self-center justify-content-center"> <img src="../assets/images/users/1.jpg" class="img-circle" width="100">
                                    <h4 class="card-title">James Anderson</h4>
                                    <h6 class="card-subtitle">@jamesandre</h6>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Experiances</h3>
                                <div class="table-responsive">
                                    <table class="table m-b-0  m-t-30 no-border">
                                        <tbody>
                                            <tr>
                                                <td style="width:90px;"><img src="../assets/images/browser/photoshop.jpg" alt="photoshop"></td>
                                                <td style="width:200px;">
                                                    <h4 class="card-title">Photoshop</h4>
                                                    <h6 class="card-subtitle">This is a sample text</h6></td>
                                                <td class="vm">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%; height:6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:90px;"><img src="../assets/images/browser/sketch.jpg" alt="sketch"></td>
                                                <td style="width:200px;">
                                                    <h4 class="card-title">Sketch</h4>
                                                    <h6 class="card-subtitle">This is a sample text</h6></td>
                                                <td class="vm">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%; height:6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <font class="display-5">5486</font>
                                        <h6 class="text-muted">Projects</h6></div>
                                    <div class="col-md-4">
                                        <font class="display-5">987</font>
                                        <h6 class="text-muted">Winning  Entries</h6></div>
                                    <div class="col-md-4 align-self-center text-end">
                                        <button type="button" class="btn btn-success text-white">Hire me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150">
                                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-md-6 col-lg-6"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-md-6 col-lg-6"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Timeline</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img1.jpg" class="img-responsive radius"></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img2.jpg" class="img-responsive radius"></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img3.jpg" class="img-responsive radius"></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img4.jpg" class="img-responsive radius"></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success text-white"> Design weblayout</a></div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!-- Chart JS -->
    <script src="../assets/node_modules/echarts/echarts-all.js"></script>
    <!-- Flot Charts JavaScript -->
    <script src="../assets/node_modules/flot/excanvas.js"></script>
    <script src="../assets/node_modules/flot/jquery.flot.js"></script>
    <script src="../assets/node_modules/flot/jquery.flot.time.js"></script>
    <script src="../assets/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/widget-charts.js"></script>
</body>

</html>