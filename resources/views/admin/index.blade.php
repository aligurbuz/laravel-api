<!DOCTYPE html>
<html lang="en">
@php
    $user = \App\Facades\Support\Admin\Authenticate::user();
    $menus = \App\Libs\Postman::menus();
@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue fixed-layout">
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
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('admin.dashboard.index')}}">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav me-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle text-white"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-success btn-circle text-white"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-info btn-circle text-white"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                        <div class="dropdown-menu dropdown-menu-end animated flipInY">
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="{{route('admin.logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                    </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            @include('admin.menu')
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
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
                    <h4 class="text-themecolor">Dashboard 1</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
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
            <div class="row g-0">
                <div class="col-lg-3 col-md-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-screen-desktop"></i></h3>
                                            <p class="text-muted">MYNEW CLIENTS</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-primary">23</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-note"></i></h3>
                                            <p class="text-muted">NEW PROJECTS</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-cyan">169</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <p class="text-muted">NEW INVOICES</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-purple">157</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted">All PROJECTS</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-success">431</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Over Visitor, Our income , slaes different and  sales prediction -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex m-b-40 align-items-center no-block">
                                <h5 class="card-title ">YEARLY SALES</h5>
                                <div class="ms-auto">
                                    <ul class="list-inline font-12">
                                        <li><i class="fa fa-circle text-cyan"></i> Iphone</li>
                                        <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                        <li><i class="fa fa-circle text-purple"></i> Ipod</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card bg-cyan text-white">
                                <div class="card-body ">
                                    <div class="row weather">
                                        <div class="col-6 m-t-40">
                                            <h3>&nbsp;</h3>
                                            <div class="display-4">73<sup>°F</sup></div>
                                            <p class="text-white">AHMEDABAD, INDIA</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h1 class="m-b-"><i class="wi wi-day-cloudy-high"></i></h1>
                                            <b class="text-white">SUNNEY DAY</b>
                                            <p class="op-5">April 14</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <div id="myCarouse2" class="carousel slide" data-bs-ride="carousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <h4 class="cmin-height">My Acting blown <span class="font-medium">Your Mind</span> and you also <br/>laugh at the moment</h4>
                                                <div class="d-flex no-block">
                                                    <span><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user" width="50" class="img-circle"></span>
                                                    <span class="m-l-10">
                                                    <h4 class="text-white m-b-0">Govinda</h4>
                                                    <p class="text-white">Actor</p>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <h4 class="cmin-height">My Acting blown <span class="font-medium">Your Mind</span> and you also <br/>laugh at the moment</h4>
                                                <div class="d-flex no-block">
                                                    <span><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user" width="50" class="img-circle"></span>
                                                    <span class="m-l-10">
                                                    <h4 class="text-white m-b-0">Govinda</h4>
                                                    <p class="text-white">Actor</p>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <h4 class="cmin-height">My Acting blown <span class="font-medium">Your Mind</span> and you also <br/>laugh at the moment</h4>
                                                <div class="d-flex no-block">
                                                    <span><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user" width="50" class="img-circle"></span>
                                                    <span class="m-l-10">
                                                    <h4 class="text-white m-b-0">Govinda</h4>
                                                    <p class="text-white">Actor</p>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Comment - table -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- Comment widgets -->
                <!-- ============================================================== -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Comments</h5>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Comment widgets -->
                        <!-- ============================================================== -->
                        <div class="comment-widgets" id="comment" style="height: 629px;position: relative;">
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row">
                                <div class="p-2"><span class="round"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user" width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5 class="font-medium">James Anderson</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span> <span class="badge rounded-pill bg-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row border-top">
                                <div class="p-2"><span class="round"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user" width="50"></span></div>
                                <div class="comment-text active w-100">
                                    <h5 class="font-medium">Michael Jorden</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="badge rounded-pill bg-success">Approved</span>
                                        <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row border-top">
                                <div class="p-2"><span class="round"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user" width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5 class="font-medium">Johnathan Doeting</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="badge rounded-pill bg-danger">Rejected</span>
                                        <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row border-top">
                                <div class="p-2"><span class="round"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg" alt="user" width="50"></span></div>
                                <div class="comment-text active w-100">
                                    <h5 class="font-medium">Genelia doe</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="badge rounded-pill bg-success">Approved</span>
                                        <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">Sales Overview</h5>
                                    <h6 class="card-subtitle">Check the monthly sales </h6>
                                </div>
                                <div class="ms-auto">
                                    <select class="form-control b-0">
                                        <option>January</option>
                                        <option value="1">February</option>
                                        <option value="2" selected="">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-6">
                                    <h3>March 2017</h3>
                                    <h5 class="font-light m-t-0">Report for this month</h5></div>
                                <div class="col-6 align-self-center display-6 text-end">
                                    <h2 class="text-success">$3,690</h2></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover no-wrap">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>NAME</th>
                                    <th>STATUS</th>
                                    <th>DATE</th>
                                    <th>PRICE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td><span class="badge bg-success rounded-pill">sale</span> </td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="txt-oflo">Real Homes</td>
                                    <td><span class="badge bg-info rounded-pill">extended</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td><span class="badge bg-info rounded-pill">extended</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="txt-oflo">Medical Pro</td>
                                    <td><span class="badge bg-danger rounded-pill">tax</span></td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td><span class="badge bg-success rounded-pill">sale</span></td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td><span class="badge bg-success rounded-pill">sale</span> </td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="text-danger">-$14</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="txt-oflo">Helping Hands</td>
                                    <td><span class="badge bg-warning rounded-pill">member</span></td>
                                    <td class="txt-oflo">April 22, 2017</td>
                                    <td><span class="text-success">$64</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td><span class="badge bg-info rounded-pill">extended</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Comment - chats -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Over Visitor, Our income , slaes different and  sales prediction -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex m-b-40 align-items-center no-block">
                                <h5 class="card-title ">SALES DIFFERENCE</h5>
                                <div class="ms-auto">
                                    <ul class="list-inline font-12">
                                        <li><i class="fa fa-circle text-cyan"></i> SITE A</li>
                                        <li><i class="fa fa-circle text-primary"></i> SITE B</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart2" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">SALES DIFFERENCE</h5>
                                    <div class="row">
                                        <div class="col-6  m-t-30">
                                            <h1 class="text-info">$647</h1>
                                            <p class="text-muted">APRIL 2017</p>
                                            <b>(150 Sales)</b> </div>
                                        <div class="col-6">
                                            <div id="sparkline2dash" class="text-end"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card bg-purple text-white">
                                <div class="card-body">
                                    <h5 class="card-title">VISIT STATASTICS</h5>
                                    <div class="row">
                                        <div class="col-6  m-t-30">
                                            <h1 class="text-white">$347</h1>
                                            <p class="light_op_text">APRIL 2017</p>
                                            <b class="text-white">(150 Sales)</b> </div>
                                        <div class="col-6">
                                            <div id="sales1" class="text-end"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Todo, chat, notification -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h5 class="card-title m-b-0">TO DO LIST</h5>
                                </div>
                                <div class="ms-auto">
                                    <button class="pull-right btn btn-circle btn-success text-white" data-bs-toggle="modal" data-bs-target="#myModal"><i class="ti-plus"></i></button>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- To do list widgets -->
                            <!-- ============================================================== -->
                            <div class="to-do-widget m-t-20" id="todo" style="height: 400px;position: relative;">
                                <!-- .modal for add task -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Task</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" class="btn-close"aria-label="Close"> <span aria-hidden="true"></span> </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="form-label">Task name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Task Name"> </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Assign to</label>
                                                        <select class="form-select form-control pull-right">
                                                            <option selected="">Sachin</option>
                                                            <option value="1">Sehwag</option>
                                                            <option value="2">Pritam</option>
                                                            <option value="3">Alia</option>
                                                            <option value="4">Varun</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success text-white" data-bs-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item" data-role="task">
                                        <div class="form-check d-flex align-items-start">
                                            <input type="checkbox" class="form-check-input flex-shrink-0" id="customCheck">
                                            <label class="form-check-label w-100 ms-2 d-md-flex align-items-start font-normal lh-25" for="customCheck">
                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span> <span class="badge rounded-pill bg-danger ms-auto mb-2 mb-md-0">Today</span>
                                            </label>
                                        </div>
                                        <ul class="assignedto mt-2">
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="form-check d-flex align-items-start">
                                            <input type="checkbox" class="form-check-input flex-shrink-0" id="customCheck1">
                                            <label class="form-check-label w-100 ms-2 d-md-flex align-items-start font-normal lh-25"  for="customCheck1">
                                                <span>Lorem Ipsum is simply dummy text of the printing</span><span class="badge rounded-pill bg-primary ms-auto mb-2 mb-md-0">1 week </span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="form-check d-flex align-items-start">
                                            <input type="checkbox" class="form-check-input flex-shrink-0" id="customCheck2">
                                            <label class="form-check-label w-100 ms-2 d-md-flex align-items-start font-normal lh-25" for="customCheck2">
                                                <span>Give Purchase report to</span> <span class="badge rounded-pill bg-info ms-auto mb-2 mb-md-0">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="form-check d-flex align-items-start">
                                            <input type="checkbox" class="form-check-input flex-shrink-0" id="customCheck1">
                                            <label class="form-check-label w-100 ms-2 d-md-flex align-items-start font-normal lh-25"  for="customCheck1">
                                                <span>Lorem Ipsum is simply dummy text of the printing</span><span class="badge rounded-pill bg-warning ms-auto mb-2 mb-md-0">2 week </span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="form-check d-flex align-items-start">
                                            <input type="checkbox" class="form-check-input flex-shrink-0" id="customCheck2">
                                            <label class="form-check-label w-100 ms-2 d-md-flex align-items-start font-normal lh-25" for="customCheck2">
                                                <span>Give Purchase report to</span> <span class="badge rounded-pill bg-info ms-auto mb-2 mb-md-0">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">YOU HAVE 5 NEW MESSAGES</h5>
                            <div class="message-box" id="msg" style="height: 430px;position: relative;">
                                <div class="message-widget message-scroll">
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Welcome to the Elite Admin</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CHAT</h5>
                            <div class="chat-box" id="chat" style="height: 327px;position: relative;">
                                <!--chat Row -->
                                <ul class="chat-list">
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h5>James Anderson</h5>
                                            <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                        </div>
                                        <div class="chat-time">10:56 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h5>Bianca Doe</h5>
                                            <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-time">10:57 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">I would love to join the team.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time">10:58 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time">10:59 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h5>Angelina Rhodes</h5>
                                            <div class="box bg-light-info">Well we have good budget for the project</div>
                                        </div>
                                        <div class="chat-time">11:00 am</div>
                                    </li>
                                    <!--chat Row -->
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-8">
                                    <textarea placeholder="Type your message here" class="form-control border-0"></textarea>
                                </div>
                                <div class="col-4 text-end">
                                    <button type="button" class="btn btn-info btn-circle btn-lg text-white"><i class="fas fa-paper-plane"></i> </button>
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
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
    <footer class="footer">
        © 2021 Eliteadmin by themedesigner.in
        <a href="https://www.wrappixel.com/">WrapPixel</a>
    </footer>
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
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/raphael/raphael-min.js"></script>
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/dashboard1.js"></script>
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>
</body>

</html>
