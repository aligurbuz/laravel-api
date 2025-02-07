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
    <!-- page css -->
    <link href="dist/css/pages/progressbar-page.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/node_modules/prism/prism.css">
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
                        <h4 class="text-themecolor">Progressbar</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Progressbar</li>
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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Progress bars <a class="get-code" data-bs-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="pgr1"> <pre class="line-numbers language-javascript"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"&gt; &lt;span class="sr-only"&gt;50% Complete&lt;/span&gt;&lt;/div&gt;<br/>&lt;/div&gt;</code></pre> </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Progress bars <a class="get-code" data-bs-toggle="collapse" href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="pgr2"> <pre class="line-numbers language-javascript"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code></pre> </div>
                                <div class="progress m-t-20">
                                    <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Striped Progress bar <a class="get-code" data-bs-toggle="collapse" href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="pgr3"> <pre class="line-numbers language-javascript"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%;height:10px;"&gt; &lt;span class="sr-only"&gt;85% Complete&lt;/span&gt;&lt;/div&gt;<br/>&lt;/div&gt;</code></pre> </div>
                                <div class="progress m-t-20">
                                    <div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%; height:10px;" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">Colored bars </h4>
                                        <h6 class="card-subtitle">you can create any colors you want</h6>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-info" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-primary" style="width: 30%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-warning" style="width: 80%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-inverse" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">Different bar sizes </h4>
                                        <h6 class="card-subtitle">you can create any size you want just give height to bar</h6>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-info" style="width: 40%; height:8px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-success" style="width: 20%; height:10px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-primary" style="width: 30%; height:12px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-warning" style="width: 80%; height:14px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">Animated Striped bar </h4>
                                        <h6 class="card-subtitle">You can also use animated bar by just putting <code>active</code> class</h6>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar active progress-bar-striped bg-danger" style="width: 60%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-info active progress-bar-striped" style="width: 40%; height:8px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-success active progress-bar-striped" style="width: 20%; height:10px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-primary active progress-bar-striped" style="width: 30%; height:12px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-warning active progress-bar-striped" style="width: 80%; height:14px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">Vertical Progress bars</h4>
                                        <h6 class="card-subtitle">You can also use <code>progress-vertical</code> class</h6>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">From bottom</h4>
                                        <h6 class="card-subtitle">You can also use <code>progress-vertical-bottom</code> class</h6>
                                        <div class="progress progress-vertical-bottom m-t-30">
                                            <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical-bottom m-t-30">
                                            <div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical-bottom m-t-30">
                                            <div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical-bottom m-t-30">
                                            <div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical-bottom m-t-30">
                                            <div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">Different size Progress bars</h4>
                                        <h6 class="card-subtitle">You can also use <code>progress-vertical</code> class</h6>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-info" style="width:6px; height:80%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-success" style="width:8px; height:60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-primary" style="width:10px; height:40%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress progress-vertical m-t-30">
                                            <div class="progress-bar bg-warning" style="width:14px; height:30%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">Animated bars </h4>
                                        <h6 class="card-subtitle">you can create animated bar if you want just put <code>wow animated progress-animated</code></h6>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-danger wow animated progress-animated" style="width: 60%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-info wow animated progress-animated" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-success wow animated progress-animated" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-primary wow animated progress-animated" style="width: 30%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-warning wow animated progress-animated" style="width: 80%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <div class="progress m-t-30">
                                            <div class="progress-bar bg-inverse wow animated progress-animated" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">SKILL BARS </h4>
                                        <h6 class="card-subtitle">you can create animated skill bar if you want just put <code>wow animated progress-animated</code></h6>
                                        <h5 class="m-t-30">Photoshop<span class="pull-right">85%</span></h5>
                                        <div class="progress ">
                                            <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Code editor<span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info wow animated progress-animated" style="width: 90%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Illustrator<span class="pull-right">65%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success wow animated progress-animated" style="width: 65%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <h4 class="card-title">&nbsp;</h4>
                                        <h6 class="card-subtitle">&nbsp;</h6>
                                        <h5 class="m-t-30">Dreamweaver<span class="pull-right">85%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary wow animated progress-animated" style="width: 85%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Coral Draw<span class="pull-right">45%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning wow animated progress-animated" style="width: 45%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Sketch<span class="pull-right">25%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-inverse wow animated progress-animated" style="width: 25%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
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
    <script src="../assets/node_modules/prism/prism.js"></script>
</body>

</html>