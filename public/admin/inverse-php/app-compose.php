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
    <!-- wysihtml5 CSS -->
    <link rel="stylesheet" href="../assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Dropzone css -->
    <link href="../assets/node_modules/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/inbox.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Compose</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Compose</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-3 col-md-4 ">
                                    <div class="card-body inbox-panel"><a href="app-compose.html" class="btn btn-danger m-b-20 p-10 w-100 waves-effect waves-light text-white">Compose</a>
                                    <ul class="list-group list-group-full">
                                            <li class="list-group-item active"> <a href="javascript:void(0)" class="d-flex align-items-center"><i class="mdi mdi-gmail fs-4 me-2 d-flex align-items-center"></i> Inbox </a><span class="badge bg-success ms-auto">6</span></li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)" class="d-flex align-items-center"> <i class="mdi mdi-star fs-4 me-2 d-flex justify-content-center"></i> Starred </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)" class="d-flex align-items-center"> <i class="mdi mdi-send fs-4 me-2 d-flex align-items-center"></i> Draft </a><span class="badge bg-danger ms-auto">3</span></li>
                                            <li class="list-group-item ">
                                                <a href="javascript:void(0)" class="d-flex align-items-center"> <i class="mdi mdi-file-document-box fs-4 me-2 d-flex align-items-center"></i> Sent Mail </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)" class="d-flex align-items-center"> <i class="fs-4 me-2 d-flex align-items-center mdi mdi-delete"></i> Trash </a>
                                            </li>
                                        </ul>
                                        <h3 class="card-title m-t-40">Labels</h3>
                                        <div class="list-group b-0 mail-list"> <a href="javascript:void(0)"class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="javascript:void(0)"class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="javascript:void(0)"class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="javascript:void(0)"class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="javascript:void(0)"class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                                    </div>
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light border-start">
                                    <div class="card-body">
                                        <h3 class="card-title">Compose New Message</h3>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="To:">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Subject:">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                        </div>
                                        <h4><i class="ti-link"></i> Attachment</h4>
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                        <button type="submit" class="btn btn-success m-t-20 text-white"><i class="fa fa-envelope-o"></i> Send</button>
                                        <button class="btn btn-dark m-t-20"><i class="fa fa-times"></i> Discard</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="../assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="../assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="../assets/node_modules/dropzone-master/dist/dropzone.js"></script>
    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();

    });
    </script>
</body>

</html>