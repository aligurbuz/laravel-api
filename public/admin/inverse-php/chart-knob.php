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
                        <h4 class="text-themecolor">Knob Chart</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Knob Chart</li>
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
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Disable display input</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#009efb" data-displayInput=false value="50" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cursor mode</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true data-fgColor="#26c6da" value="75" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Display previous value</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#ffbc34" data-displayPrevious=true value="89" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Angle offset and arc</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="250" data-height="250" data-min="-100" data-fgColor="#f62d51" data-displayPrevious=true data-angleOffset=-125 data-angleArc=250 value="56" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Angle offset</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="250" data-height="250" data-angleOffset="90" data-linecap="round" data-fgColor="#7460ee" value="90" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">5-digit values, step 1000</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000" data-displayPrevious=true data-max="15000" data-step="1000" value="10000" data-fgColor="#4c5667" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#01c0c8" value="40" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Angle offset and arc</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-displayPrevious=true data-fgColor="#26c6da" data-skin="tron" data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125 data-angleArc=250 value="54" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="220" data-height="220" data-linecap=round data-fgColor="#01c0c8" value="90" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".2" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="180" data-height="180" data-linecap=round data-fgColor="#ffbc34" value="67" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#fb9678" value="70" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--jquery knob -->
    <script src="../assets/node_modules/knob/jquery.knob.js"></script>
    <script>
    $(function() {
        $('[data-plugin="knob"]').knob();
    });
    </script>
</body>

</html>