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
    <link href="../assets/node_modules/icheck/skins/all.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/form-icheck.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Icheck Controls</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Icheck Controls</li>
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Icheck with minimal skin</h4>
                                        <h6 class="card-subtitle"></h6>
                                        <div class="skin skin-minimal">
                                            <form>
                                                <div class="form-group">
                                                    <label class="form-label">Colors</label>
                                                    <div class="input-group">
                                                        <ul class="icolors">
                                                            <li></li>
                                                            <li class="red active"></li>
                                                            <li class="green"></li>
                                                            <li class="blue"></li>
                                                            <li class="orange"></li>
                                                            <li class="yellow"></li>
                                                            <li class="purple"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Checkbox &amp; Radio List</label>
                                                    <div class="input-group">
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                                <label for="minimal-checkbox-1">Checkbox 1</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                                                                <label for="minimal-checkbox-2">Checkbox 2</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="minimal-checkbox-disabled" disabled>
                                                                <label for="minimal-checkbox-disabled">Disabled</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="minimal-checkbox-disabled-checked" checked disabled>
                                                                <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                            </li>
                                                        </ul>
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input tabindex="7" type="radio" class="check" id="minimal-radio-1" name="minimal-radio">
                                                                <label for="minimal-radio-1">Radio button 1</label>
                                                            </li>
                                                            <li>
                                                                <input tabindex="8" type="radio" class="check" id="minimal-radio-2" name="minimal-radio" checked>
                                                                <label for="minimal-radio-2">Radio button 2</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="minimal-radio-disabled" disabled>
                                                                <label for="minimal-radio-disabled">Disabled</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="minimal-radio-disabled-checked" checked disabled>
                                                                <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-md-6">
                                        <div class="skin skin-flat m-t-30">
                                            <form>
                                                <div class="form-group">
                                                    <label class="form-label">Colors</label>
                                                    <div class="input-group">
                                                        <ul class="icolors">
                                                            <li></li>
                                                            <li class="red active"></li>
                                                            <li class="green"></li>
                                                            <li class="blue"></li>
                                                            <li class="orange"></li>
                                                            <li class="yellow"></li>
                                                            <li class="purple"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Checkbox &amp; Radio List</label>
                                                    <div class="input-group">
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input type="checkbox" class="check" id="flat-checkbox-1" data-checkbox="icheckbox_flat-red">
                                                                <label class="form-label" for="flat-checkbox-1">Checkbox 1</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="flat-checkbox-2" checked data-checkbox="icheckbox_flat-red">
                                                                <label class="form-label" for="flat-checkbox-2">Checkbox 2</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="flat-checkbox-disabled" disabled data-checkbox="icheckbox_flat-red">
                                                                <label class="form-label" for="flat-checkbox-disabled">Disabled</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="flat-checkbox-disabled-checked" checked disabled data-checkbox="icheckbox_flat-red">
                                                                <label class="form-label" for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                            </li>
                                                        </ul>
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input type="radio" class="check" id="flat-radio-1" name="flat-radio" data-radio="iradio_flat-red">
                                                                <label class="form-label" for="flat-radio-1">Radio button 1</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="flat-radio-2" name="flat-radio" checked data-radio="iradio_flat-red">
                                                                <label class="form-label" for="flat-radio-2">Radio button 2</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="flat-radio-disabled" disabled data-radio="iradio_flat-red">
                                                                <label class="form-label" for="flat-radio-disabled">Disabled</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="flat-radio-disabled-checked" checked disabled data-radio="iradio_flat-red">
                                                                <label class="form-label" for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Icheck with minimal skin</h4>
                                        <h6 class="card-subtitle"></h6>
                                        <div class="skin skin-square">
                                            <form>
                                                <div class="form-group">
                                                    <label class="form-label">Colors</label>
                                                    <div class="input-group">
                                                        <ul class="icolors">
                                                            <li></li>
                                                            <li class="red active"></li>
                                                            <li class="green"></li>
                                                            <li class="blue"></li>
                                                            <li class="orange"></li>
                                                            <li class="yellow"></li>
                                                            <li class="purple"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Checkbox &amp; Radio List</label>
                                                    <div class="input-group">
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input type="checkbox" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red">
                                                                <label class="form-label" for="square-checkbox-1">Checkbox 1</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                                                <label class="form-label" for="square-checkbox-2">Checkbox 2</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="square-checkbox-disabled" disabled data-checkbox="icheckbox_square-red">
                                                                <label class="form-label" for="square-checkbox-disabled">Disabled</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" id="square-checkbox-disabled-checked" checked disabled data-checkbox="icheckbox_square-red">
                                                                <label class="form-label" for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                            </li>
                                                        </ul>
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input type="radio" class="check" id="square-radio-1" name="square-radio" data-radio="iradio_square-red">
                                                                <label class="form-label" for="square-radio-1">Radio button 1</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="square-radio-2" name="square-radio" checked data-radio="iradio_square-red">
                                                                <label class="form-label" for="square-radio-2">Radio button 2</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="square-radio-disabled" disabled data-radio="iradio_square-red">
                                                                <label class="form-label" for="square-radio-disabled">Disabled</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="check" id="square-radio-disabled-checked" checked disabled data-radio="iradio_square-red">
                                                                <label class="form-label" for="square-radio-disabled-checked">Disabled &amp; checked</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-md-6">
                                        <div class="skin skin-line m-t-30">
                                            <form>
                                                <div class="form-group">
                                                    <label class="form-label">Colors</label>
                                                    <div class="input-group">
                                                        <ul class="icolors">
                                                            <li></li>
                                                            <li class="red active"></li>
                                                            <li class="green"></li>
                                                            <li class="blue"></li>
                                                            <li class="orange"></li>
                                                            <li class="yellow"></li>
                                                            <li class="purple"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Checkbox &amp; Radio List</label>
                                                    <div class="input-group">
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input type="checkbox" class="check" data-checkbox="icheckbox_line-red" data-label="Checkbox 1"> </li>
                                                            <li>
                                                                <input type="checkbox" class="check" checked data-checkbox="icheckbox_line-red" data-label="Checkbox 2"> </li>
                                                            <li>
                                                                <input type="checkbox" class="check" disabled data-checkbox="icheckbox_line-red" data-label="Disabled"> </li>
                                                            <li>
                                                                <input type="checkbox" class="check" checked disabled data-checkbox="icheckbox_line-red" data-label="Disabled &amp; checked"> </li>
                                                        </ul>
                                                        <ul class="icheck-list">
                                                            <li>
                                                                <input type="radio" class="check" name="line-radio" data-radio="iradio_line-red" data-label="Radio button 1"> </li>
                                                            <li>
                                                                <input type="radio" class="check" name="line-radio" checked data-radio="iradio_line-red" data-label="Radio button 2"> </li>
                                                            <li>
                                                                <input type="radio" class="check" disabled data-radio="iradio_line-red" data-label="Disabled"> </li>
                                                            <li>
                                                                <input type="radio" class="check" checked disabled data-radio="iradio_line-red" data-label="Disabled &amp; checked"> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- column -->
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
    <!-- icheck -->
    <script src="../assets/node_modules/icheck/icheck.min.js"></script>
    <script src="../assets/node_modules/icheck/icheck.init.js"></script>
</body>

</html>