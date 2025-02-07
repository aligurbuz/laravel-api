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
                        <h4 class="text-themecolor">Form Mask</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form Mask</li>
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
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input masks</h4>
                                <div class="form-group mt-5">
                                    <label class="form-label">Date Mask <small class="text-muted">dd/mm/yyyy</small></label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask"
                                        placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone <small class="text-muted">(999) 999-9999</small></label>
                                    <input type="text" class="form-control phone-inputmask" id="phone-mask"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">International Number <small class="text-muted">+19 999 999
                                            999</small></label>
                                    <input type="text" class="form-control international-inputmask"
                                        id="international-mask" placeholder="International Phone Number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone / xEx <small class="text-muted">(999) 999-9999 /
                                            x999999</small></label>
                                    <input type="text" class="form-control xphone-inputmask" id="xphone-mask"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Purchase Order <small class="text-muted">aaaa 9999-****</small></label>
                                    <input type="text" class="form-control purchase-inputmask" id="purchase-mask"
                                        placeholder="Enter Purchase Order">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Credit Card Number <small class="text-muted">9999 9999 9999
                                            9999</small></label>
                                    <input type="text" class="form-control cc-inputmask" id="cc-mask"
                                        placeholder="Enter Credit Card Number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">SSN <small class="text-muted">999-99-9999</small></label>
                                    <input type="text" class="form-control ssn-inputmask" id="ssn-mask"
                                        placeholder="Enter Social Security Number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">ISBN <small class="text-muted">999-99-999-9999-9</small></label>
                                    <input type="text" class="form-control isbn-inputmask" id="isbn-mask"
                                        placeholder="Enter ISBN">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Percentage <small class="text-muted">99%</small></label>
                                    <input type="text" class="form-control percentage-inputmask" id="percentage-mask"
                                        placeholder="Enter Value in %">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Currency<small class="text-muted">$9999</small>
                                    </label>
                                    <input type="text" class="form-control currency-inputmask" id="currency-mask"
                                        placeholder="Enter Currency in USD">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Decimal using RadixPoint<small class="text-muted">123.654658</small>
                                    </label>
                                    <input type="text" class="form-control decimal-inputmask" id="decimal-mask"
                                        placeholder="Enter Decimal Value" style="text-align: right;">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email<small class="text-muted">xxx@xxx.xxx</small>
                                    </label>
                                    <input type="text" class="form-control email-inputmask" id="email-mask"
                                        placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Optional masks<small class="text-muted">(99) 9999[9]-9999</small>
                                    </label>
                                    <input type="text" class="form-control optional-inputmask" id="optional-mask"
                                        placeholder="With Optional Mask">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">RTL attribute<small class="text-muted">dd/mm/yyyy</small>
                                    </label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask-rtl"
                                        placeholder="Enter Date" style="text-align: right;">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">3 Number and 3 Lettter<small class="text-muted">123-ABC</small></label>
                                    <input class="form-control" id="num-letter"
                                        data-inputmask-clearmaskonlostfocus="false"
                                        placeholder="Enter First 3 number and after that 3 letter" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Date and Time in Once<small
                                            class="text-muted">yyyy-mm-dd'T'HH:MM:ss</small></label>
                                    <input class="form-control" id="date-time-once"
                                        data-inputmask-clearmaskonlostfocus="false"
                                        data-inputmask="'alias': 'datetime'" />
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
    <!-- This Page JS -->
    <script src="../assets/node_modules/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask.init.js"></script>
</body>

</html>