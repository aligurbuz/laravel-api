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
                        <h4 class="text-themecolor">Table Basic</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Table Basic</li>
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
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Deshmukh</td>
                                                <td>Prohaska</td>
                                                <td>@Genelia</td>
                                                <td><span class="label label-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Gaylord</td>
                                                <td>@Ritesh</td>
                                                <td><span class="label label-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sanghani</td>
                                                <td>Gusikowski</td>
                                                <td>@Govinda</td>
                                                <td><span class="label label-warning">developer</span> </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>@Hritik</td>
                                                <td><span class="label label-success">supporter</span> </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Joshi</td>
                                                <td>Hickle</td>
                                                <td>@Maruti</td>
                                                <td><span class="label label-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Nigam</td>
                                                <td>Eichmann</td>
                                                <td>@Sonu</td>
                                                <td><span class="label label-success">supporter</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Hover</h4>
                                <h6 class="card-subtitle">Add class <code>.table-hover</code></h6>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Products</th>
                                                <th>Popularity</th>
                                                <th>Sales</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Milk Powder</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span> </td>
                                                <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Air Conditioner</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span> </td>
                                                <td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>RC Cars</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                                <td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Down Coat</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                                <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bordered Table</h4>
                                <h6 class="card-subtitle">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Progress</th>
                                                <th>Deadline</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>May 15, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dream successful plan</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-warning" style="width: 50%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>July 1, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Office automatization</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-success" style="width: 100%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 12, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>The sun climbing plan</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-primary" style="width: 70%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>Aug 9, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Open strategy</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-info" style="width: 85%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 2, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tantas earum numeris</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-inverse" style="width: 50%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>July 11, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Striped Table</h4>
                                <h6 class="card-subtitle">Add<code>.table-striped</code>for borders on all sides of the table and cells.</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Progress</th>
                                                <th>Deadline</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-danger" style="width: 35% ;height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>May 15, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dream successful plan</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-warning" style="width: 50%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>July 1, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Office automatization</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-success" style="width: 100%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 12, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>The sun climbing plan</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-primary" style="width: 70%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>Aug 9, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Open strategy</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-info" style="width: 85%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 2, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tantas earum numeris</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-inverse" style="width: 50%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>July 11, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0)"data-bs-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Responsive Table </h4>
                                <h6 class="card-subtitle">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Invoice</th>
                                                <th>User</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #26589</a></td>
                                                <td>Herman Beck</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                                                <td>$45.00</td>
                                                <td>
                                                    <div class="label label-table label-success">Paid</div>
                                                </td>
                                                <td>EN</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #58746</a></td>
                                                <td>Mary Adams</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2017</span> </td>
                                                <td>$245.30</td>
                                                <td>
                                                    <div class="label label-table label-danger">Shipped</div>
                                                </td>
                                                <td>CN</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #98458</a></td>
                                                <td>Caleb Richards</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> May 18, 2017</span> </td>
                                                <td>$38.00</td>
                                                <td>
                                                    <div class="label label-table label-info">Shipped</div>
                                                </td>
                                                <td>AU</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #32658</a></td>
                                                <td>June Lane</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2017</span> </td>
                                                <td>$77.99</td>
                                                <td>
                                                    <div class="label label-table label-success">Paid</div>
                                                </td>
                                                <td>FR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contexual Classes</h4>
                                <h6 class="card-subtitle">Use classes <code>( .table-active, .table-success, .table-info, .table-warning, .table-danger )</code> to color table rows or individual cells</h6>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Column heading</th>
                                            <th>Column heading</th>
                                            <th>Column heading</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-active">
                                            <td scope="row">1</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td scope="row">2</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td scope="row">3</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                        <tr class="table-warning">
                                            <td scope="row">4</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td scope="row">5</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <!-- jQuery peity -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>