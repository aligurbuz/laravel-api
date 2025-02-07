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
    <link href="../assets/node_modules/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/bootstrap-switch.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Bootstrap Switch</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Bootstrap Switch</li>
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
                                <h4 class="card-title">Bootstrap Switch</h4>
                                <div class="row">
                                    <div class="col-lg-12 bt-switch">
                                        <h4>Sizes</h4>
                                        <p class="text-muted font-13">Just add <code>data-size="Size"</code> attribute to the <code>&lt;input type="checkbox"...&gt;</code>. Size values: <code>mini, small, normal, large</code>.</p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked data-size="mini" />
                                            <input type="checkbox" checked data-size="small" />
                                            <input type="checkbox" checked data-size="normal" />
                                            <input type="checkbox" checked data-size="large" /> </div>
                                        <h4>Colors</h4>
                                        <p class="text-muted font-13">Just add <code>data-on-color="Color"</code> & <code>data-off-color="Color"</code> to the <code>&lt;input type="checkbox"...&gt;</code>. Color values: <code>primary, info, success, warning, danger, default</code>.</p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked data-on-color="primary" data-off-color="info">
                                            <input type="checkbox" checked data-on-color="info" data-off-color="success">
                                            <input type="checkbox" checked data-on-color="success" data-off-color="warning">
                                            <input type="checkbox" checked data-on-color="warning" data-off-color="danger">
                                            <input type="checkbox" checked data-on-color="danger" data-off-color="default">
                                            <input type="checkbox" checked data-on-color="default" data-off-color="primary"> </div>
                                        <h4>Disabled/Readonly</h4>
                                        <p class="text-muted font-13">Just add <code>disabled</code> or <code>readonly</code> attribute to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked disabled data-on-color="primary" data-off-color="info">
                                            <input type="checkbox" readonly data-on-color="info" data-off-color="success"> </div>
                                        <h4>With Text</h4>
                                        <p class="text-muted font-13">Just add <code>data-on-text="Text"</code> & <code>data-off-text="Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked data-on-color="success" data-off-color="info" data-on-text="Yes" data-off-text="No">
                                            <input type="checkbox" checked data-on-color="info" data-off-color="success" data-on-text="1" data-off-text="0"> </div>
                                        <h4>With Long Text</h4>
                                        <p class="text-muted font-13">Just add <code>data-on-text="Long Text"</code> & <code>data-off-text="Long Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked data-on-color="danger" data-off-color="warning" data-on-text="Explicit" data-off-text="Implicit">
                                            <input type="checkbox" checked data-on-color="warning" data-off-color="danger" data-on-text="Enabled" data-off-text="Disabled"> </div>
                                        <h4>Label Text</h4>
                                        <p class="text-muted font-13">Just add <code>data-on-text="Text"</code> or <code>data-off-text="Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked data-on-color="danger" data-off-color="success" data-on-text="Radio">
                                            <input type="checkbox" checked data-on-color="success" data-off-color="danger" data-off-text="Waves"> </div>
                                        <h4>With HTML</h4>
                                        <p class="text-muted font-13">Just add <code>data-on-text="HTML Text"</code> & <code>data-off-text="HTML Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked data-on-color="primary" data-off-color="info" data-on-text="<i class='fas fa-sun'></i>" data-off-text="<i class='fa fa-cloud'></i>">
                                            <input type="checkbox" checked data-on-color="info" data-off-color="success" data-on-text="<i class='fa fa-phone'></i>" data-off-text="<i class='fa fa-envelope'></i>"> </div>
                                        <h4>Radio Buttons</h4>
                                        <p class="text-muted font-13">Just add class <code>radio-switch</code> to the <code>&lt;input type="radio"...&gt;</code>. If you want to change the class name, you have to change jquery according to that.</p>
                                        <div class="m-b-30">
                                            <div class="form-group">
                                                <label for="option1">Option 1</label>
                                                <input id="option1" type="radio" name="radiobt" value="option1" class="radio-switch"> </div>
                                            <div class="form-group">
                                                <label for="option2">Option 2</label>
                                                <input id="option2" type="radio" name="radiobt" value="option2" class="radio-switch"> </div>
                                            <div class="form-group">
                                                <label for="option3">Option 3</label>
                                                <input id="option3" type="radio" name="radiobt" value="option3" class="radio-switch"> </div>
                                        </div>
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
    <!-- bt-switch -->
    <script src="../assets/node_modules/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript">
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
    </script>
</body>

</html>