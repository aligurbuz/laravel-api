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
    <!-- This page CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard4.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Dashboard 4</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 4</li>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL VISIT</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">8659</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL PAGE VIEWS</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash2"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">7469</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">UNIQUE VISITOR</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash3"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-info"><i class="ti-arrow-up"></i> <span class="counter">6011</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                   <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">BOUNCE RATE</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash4"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-danger"><i class="ti-arrow-down"></i> <span class="counter">18%</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="card-title m-b-40">SALES IN 2018</h5>
                                        <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. ipsumdolorsitda amet, ectetur adipiscing elit.</p>
                                        <p>Ectetur adipiscing elit. viverra tellus.ipsum dolor sit amet, dag adg ecteturadipiscingda elitdglj. vadghiverra tellus.</p>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div id="morris-area-chart" style="height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Feed and erning -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">WEATHER</h5>
                            </div>
                            <div class="card-body bg-light">
                                <div class="d-flex no-block align-items-center">
                                    <span><h2 class="">Monday</h2><small>7th May 2017</small></span>
                                    <div class="ms-auto">
                                        <canvas class="sleet" width="44" height="44"></canvas> <span class="display-6">32<sup>°F</sup></span> </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row pb-1">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-6 py-2">
                                                <span>Wind</span>
                                            </div>
                                            <div class="col-6 py-2 text-truncate">
                                                <span class="font-medium">ESE 17 mph</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 py-2">
                                                <span>Humidity</span>
                                            </div>
                                            <div class="col-6 py-2">
                                                <span class="font-medium">83%</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 py-2">
                                                <span>Pressure</span>
                                            </div>
                                            <div class="col-6 py-2">
                                                <span class="font-medium">28.56 in</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-6 py-2 text-truncate">
                                                <span>Cloud Cover</span>
                                            </div>
                                            <div class="col-6 py-2">
                                                <span class="font-medium">78%</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 py-2">
                                                <span>Ceiling</span>
                                            </div>
                                            <div class="col-6 py-2">
                                                <span class="font-medium">25760 ft</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 pt-3">
                                    <!-- Column -->
                                    <div class="col-lg-2 col-md-4 col-4 text-center">
                                        <h5>Tue</h5>
                                        <div class="m-t-10 m-b-10">
                                            <canvas class="sleet" width="30" height="30"></canvas>
                                        </div>
                                        <h5>32<sup>°F</sup></h5>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-2 col-md-4 col-4 text-center">
                                        <h5 class="text-nowrap">Wed</h5>
                                        <div class="m-t-10 m-b-10">
                                            <canvas class="clear-day" width="30" height="30"></canvas>
                                        </div>
                                        <h5>34<sup>°F</sup></h5>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-2 col-md-4 col-4 text-center">
                                        <h5>Thu</h5>
                                        <div class="m-t-10 m-b-10">
                                            <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                                        </div>
                                        <h5>31<sup>°F</sup></h5>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-2 col-md-4 col-4 text-center">
                                        <h5>Fri</h5>
                                        <div class="m-t-10 m-b-10">
                                            <canvas class="cloudy" width="30" height="30"></canvas>
                                        </div>
                                        <h5>32<sup>°F</sup></h5>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-2 col-md-4 col-4 text-center">
                                        <h5>Sat</h5>
                                        <div class="m-t-10 m-b-10">
                                            <canvas class="snow" width="30" height="30"></canvas>
                                        </div>
                                        <h5>12<sup>°F</sup></h5>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-2 col-md-4 col-4 text-center">
                                        <h5>Sun</h5>
                                        <div class="m-t-10 m-b-10">
                                            <canvas class="wind" width="30" height="30"></canvas>
                                        </div>
                                        <h5>32<sup>°F</sup></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">USER ACTIVITY</h5>
                                <div class="steamline m-t-40">
                                    <div class="sl-item">
                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                            <div class="desc">you can write anything </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Send documents to Clark</div>
                                            <div class="desc">Lorem Ipsum is simply </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/2.jpg"> </div>
                                        <div class="sl-right">
                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item mb-0">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/3.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Approve meeting with tiger
                                                <br><a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">FEEDS</h5>
                                <ul class="feeds mt-3">
                                    <li>
                                        <div class="bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="text-muted ms-auto">Just Now</span></li>
                                    <li>
                                        <div class="bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="text-muted ms-auto">2 Hours ago</span></li>
                                    <li>
                                        <div class="bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="text-muted ms-auto">31 May</span></li>
                                    <li>
                                        <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted ms-auto">30 May</span></li>
                                    <li>
                                        <div class="bg-dark"><i class="far fa-bell"></i></div> New Version just arrived. <span class="text-muted ms-auto">27 May</span></li>
                                    <li>
                                        <div class="bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="text-muted ms-auto">Just Now</span></li>
                                    <li class="py-1">
                                        <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted ms-auto">30 May</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Review -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">ORDER STATUS</h5>
                            </div>    
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Order date</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tracking Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link"> Order #53431</a></td>
                                            <td>Steve N. Horton</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                            <td>$45.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link"> Order #53432</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$245.30</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link"> Order #53433</a></td>
                                            <td>Lucy Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$38.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link"> Order #53434</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                            <td>$77.99</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link"> Order #53435</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                            <td>$18.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">Order #53437</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                            <td>$658.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-danger">Refunded</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">Order #536584</a></td>
                                            <td>Scott S. Calabrese</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                            <td>$45.58</td>
                                            <td class="text-center">
                                                <div class="label label-table label-warning">Unpaid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End Review -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Comment - chats -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
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
    <!--Sky Icons JavaScript -->
    <script src="../assets/node_modules/skycons/skycons.js"></script>
    <!--morris JavaScript -->
    
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/dashboard4.js"></script>
</body>

</html>