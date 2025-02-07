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
                        <h4 class="text-themecolor">Mailbox</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Mailbox</li>
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
                                <div class="col-lg-3 col-md-4">
                                    <div class="card-body inbox-panel"><a href="app-compose.html" class="btn btn-primary m-b-20 p-10 w-100 waves-effect waves-light text-white">Compose</a>
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
                                        <div class="list-group b-0 mail-list"> <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 bg-light border-start">
                                    <div class="card-body">
                                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-inbox-arrow-down"></i></button>
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button>
                                        </div>
                                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                                            </div>
                                        </div>
                                        <button type="button " class="btn btn-secondary m-r-10 m-b-10"><i class="mdi mdi-reload font-18"></i></button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn m-b-10 btn-secondary font-18 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Mark as all read</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-t-0">
                                        <div class="card b-all shadow-none">
                                            <div class="inbox-center table-responsive">
                                                <table class="table table-hover no-wrap">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td style="width:40px">
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox0" value="check">
                                                                    <label class="form-check-label" for="checkbox0"></label>
                                                                </div>
                                                            </td>
                                                            <td style="width:40px" class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"> <a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> 12:30 PM </td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox1" value="check">
                                                                    <label class="form-check-label" for="checkbox1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 13 </td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox2" value="check">
                                                                    <label class="form-check-label" for="checkbox2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox3" value="check">
                                                                    <label class="form-check-label" for="checkbox3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox4" value="check">
                                                                    <label class="form-check-label" for="checkbox4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox5" value="check">
                                                                    <label class="form-check-label" for="checkbox5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox6" value="check">
                                                                    <label class="form-check-label" for="checkbox6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox7" value="check">
                                                                    <label class="form-check-label" for="checkbox7"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox8" value="check">
                                                                    <label class="form-check-label" for="checkbox8"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox9" value="check">
                                                                    <label class="form-check-label" for="checkbox9"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox10" value="check">
                                                                    <label class="form-check-label" for="checkbox10"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox11" value="check">
                                                                    <label class="form-check-label" for="checkbox11"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox12" value="check">
                                                                    <label class="form-check-label" for="checkbox12"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox13" value="check">
                                                                    <label class="form-check-label" for="checkbox13"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check mr-sm-2">
                                                                    <input type="checkbox" class="form-check-input" id="checkbox14" value="check">
                                                                    <label class="form-check-label" for="checkbox14"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-end"> May 09 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
</body>

</html>