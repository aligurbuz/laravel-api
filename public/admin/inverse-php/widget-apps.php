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
    <!-- chartist CSS -->
    <link href="../assets/node_modules/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/node_modules/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/node_modules/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/widget-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Widget Apps</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Widget Apps</li>
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
                <!-- Row -->
                <div class="row widget-app-columns">
                    <div class="col-xl-4">
                    <!-- ============================================================== -->
                    <!-- Recent Comments copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div class="comment-widgets m-b-20">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="../assets/images/users/1.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-info">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row ">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="../assets/images/users/2.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text active w-100">
                                        <h5>Michael Jorden</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-success">Approved</span>
                                            <span class="action-icons active">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle text-success"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart text-danger"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="../assets/images/users/3.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5>Johnathan Doeting</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-danger">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="../assets/images/users/4.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-info">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- To Do list copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center">
                                    <h4 class="card-title">To Do list</h4>
                                    <div class="ms-auto">
                                        <button class="btn btn-sm btn-rounded btn-success text-white" data-bs-toggle="modal" data-bs-target="#myModal">Add Task</button>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget m-t-20">
                                    <!-- .modal for add task -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Task</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Email address</label>
                                                            <input type="email" class="form-control" placeholder="Enter email">
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
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck">
                                                    <label class="form-check-label" for="customCheck">
                                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span> <span class="badge rounded-pill bg-danger float-end">Today</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto">
                                                    <li><img src="../assets/images/users/1.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                    <li><img src="../assets/images/users/2.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                                    <li><img src="../assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                    <li><img src="../assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">
                                                        <span>Lorem Ipsum is simply dummy text of the printing</span><span class="badge rounded-pill bg-primary float-end">1 week </span>
                                                    </label>
                                                </div>
                                                <div class="item-date"> 26 jun 2017</div>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">
                                                        <span>Give Purchase report to</span> <span class="badge rounded-pill bg-info float-end">Yesterday</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto">
                                                    <li><img src="../assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                    <li><img src="../assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                                    <label class="form-check-label" for="customCheck3">
                                                        <span>Lorem Ipsum is simply dummy text of the printing </span> <span class="badge rounded-pill bg-warning float-end">2 weeks</span>
                                                    </label>
                                                </div>
                                                <div class="item-date"> 26 jun 2017</div>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                                    <label class="form-check-label" for="customCheck4">
                                                        <span>Give Purchase report to</span> <span class="badge rounded-pill bg-info float-end">Yesterday</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto">
                                                    <li><img src="../assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                    <li><img src="../assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                                </ul>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Project of the month copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Projects of the Month</h4>
                                    <select class="form-select w-25 ms-auto">
                                        <option selected="">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Assigned</th>
                                                <th>Name</th>
                                                <th>Priority</th>
                                                <th>Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;">
                                                    <span class="round">S</span>
                                                </td>
                                                <td>
                                                    <h6>Sunil Joshi</h6>
                                                    <small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <span class="label label-light-success">Low</span>
                                                </td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td>
                                                    <span class="round">
                                                        <img src="../assets/images/users/2.jpg" alt="user" width="50">
                                                    </span>
                                                </td>
                                                <td>
                                                    <h6>Andrew</h6>
                                                    <small class="text-muted">Project Manager</small>
                                                </td>
                                                <td>Real Homes</td>
                                                <td>
                                                    <span class="label label-light-info">Medium</span>
                                                </td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-success">B</span>
                                                </td>
                                                <td>
                                                    <h6>Bhavesh patel</h6>
                                                    <small class="text-muted">Developer</small>
                                                </td>
                                                <td>MedicalPro Theme</td>
                                                <td>
                                                    <span class="label label-light-danger">High</span>
                                                </td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-primary">N</span>
                                                </td>
                                                <td>
                                                    <h6>Nirav Joshi</h6>
                                                    <small class="text-muted">Frontend Eng</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <span class="label label-light-success">Low</span>
                                                </td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-warning">M</span>
                                                </td>
                                                <td>
                                                    <h6>Micheal Doe</h6>
                                                    <small class="text-muted">Content Writer</small>
                                                </td>
                                                <td>Helping Hands</td>
                                                <td>
                                                    <span class="label label-light-danger">High</span>
                                                </td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-danger">N</span>
                                                </td>
                                                <td>
                                                    <h6>Johnathan</h6>
                                                    <small class="text-muted">Graphic</small>
                                                </td>
                                                <td>Digital Agency</td>
                                                <td>
                                                    <span class="label label-light-danger">High</span>
                                                </td>
                                                <td>$2.6K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- weather report copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h4 class="card-title">Weather Report</h4>
                                    <select class="form-select w-25 ms-auto">
                                        <option selected="">Today</option>
                                        <option value="1">Weekly</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center flex-row m-t-30">
                                    <div class="p-2 display-5 text-info">
                                        <i class="wi wi-day-showers"></i>
                                        <span>73
                                            <sup>°</sup>
                                        </span>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="m-b-0">Saturday</h3>
                                        <small>Ahmedabad, India</small>
                                    </div>
                                </div>
                                <table class="table no-border">
                                    <tbody>
                                        <tr>
                                            <td>Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td>Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td>Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        <tr>
                                            <td>Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                        <tr>
                                            <td>Ceiling</td>
                                            <td class="font-medium">25760 ft</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <ul class="list-unstyled row text-center city-weather-days">
                                    <li class="col">
                                        <i class="wi wi-day-sunny"></i>
                                        <span>09:30</span>
                                        <h3>70
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col">
                                        <i class="wi wi-day-cloudy"></i>
                                        <span>11:30</span>
                                        <h3>72
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col">
                                        <i class="wi wi-day-hail"></i>
                                        <span>13:30</span>
                                        <h3>75
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col">
                                        <i class="wi wi-day-sprinkle"></i>
                                        <span>15:30</span>
                                        <h3>76
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!-- ============================================================== -->
                        <!-- Recent Chat copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Chats</h4>
                                <div class="chat-box">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/1.jpg" alt="user">
                                            </div>
                                            <div class="chat-content">
                                                <h5>James Anderson</h5>
                                                <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                            </div>
                                            <div class="chat-time">10:56 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                            </div>
                                            <div class="chat-content">
                                                <h5>Bianca Doe</h5>
                                                <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">I would love to join the team.</div>
                                                <br>
                                            </div>
                                            <div class="chat-time">10:58 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                                <br>
                                            </div>
                                            <div class="chat-time">10:59 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/3.jpg" alt="user">
                                            </div>
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
                                        <button type="button" class="btn btn-info btn-circle btn-lg text-white">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Recent Chat copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chats different option</h4>
                                <div class="chat-box">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/1.jpg" alt="user">
                                            </div>
                                            <div class="chat-content">
                                                <h5>James Anderson</h5>
                                                <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                            </div>
                                            <div class="chat-time">10:56 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                            </div>
                                            <div class="chat-content">
                                                <h5>Bianca Doe</h5>
                                                <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <h5>Steave Doe</h5>
                                                <div class="box bg-light-inverse">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/5.jpg" alt="user">
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <h5>Steave Doe</h5>
                                                <div class="box bg-light-inverse">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/5.jpg" alt="user">
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/3.jpg" alt="user">
                                            </div>
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
                                        <button type="button" class="btn btn-info btn-circle btn-lg text-white">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Recent message copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Messages</h4>
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="../assets/images/users/1.jpg" alt="user" class="img-circle">
                                                <span class="profile-status online pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem
                                                    Ipsum has been.</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="../assets/images/users/2.jpg" alt="user" class="img-circle">
                                                <span class="profile-status busy pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <span class="round">A</span>
                                                <span class="profile-status away pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5>
                                                <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span>
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="../assets/images/users/4.jpg" alt="user" class="img-circle">
                                                <span class="profile-status offline pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="../assets/images/users/1.jpg" alt="user" class="img-circle">
                                                <span class="profile-status online pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Welcome to the Elite Admin</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="../assets/images/users/2.jpg" alt="user" class="img-circle">
                                                <span class="profile-status busy pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="../assets/images/users/3.jpg" alt="user" class="img-circle">
                                                <span class="profile-status away pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="../assets/images/users/4.jpg" alt="user" class="img-circle">
                                                <span class="profile-status offline pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Customer Profile copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="">
                                        <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" width="100">
                                    </div>
                                    <div class="p-l-20">
                                        <h3 class="font-medium">Daniel Kristeen</h3>
                                        <h6>UIUX Designer</h6>
                                        <button class="btn btn-success text-white">
                                            <i class="ti-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col b-r text-center">
                                        <h2 class="font-light">14</h2>
                                        <h6>Photos</h6>
                                    </div>
                                    <div class="col b-r text-center">
                                        <h2 class="font-light">54</h2>
                                        <h6>Videos</h6>
                                    </div>
                                    <div class="col text-center">
                                        <h2 class="font-light">145</h2>
                                        <h6>Tasks</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <p class="text-center aboutscroll">
                                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor
                                    incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                                </p>
                                <ul class="list-icons d-flex flex-item text-center p-t-10">
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Website">
                                            <i class="fa fa-globe font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="twitter">
                                            <i class="fab fa-twitter font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Facebook">
                                            <i class="fab fa-facebook-square font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Youtube">
                                            <i class="fab fa-youtube font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Linkd-in">
                                            <i class="fab fa-linkedin font-20"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!-- ============================================================== -->
                        <!-- Browser state copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Browser Stats</h4>
                                <table class="table browser m-t-30 no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px">
                                                <img src="../assets/images/browser/chrome-logo.png" alt="logo">
                                            </td>
                                            <td>Google Chrome</td>
                                            <td align="right">
                                                <span class="label label-info">23%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/browser/firefox-logo.png" alt="logo">
                                            </td>
                                            <td>Mozila Firefox</td>
                                            <td align="right">
                                                <span class="label label-success">15%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/browser/safari-logo.png" alt="logo">
                                            </td>
                                            <td>Apple Safari</td>
                                            <td align="right">
                                                <span class="label label-primary">07%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/browser/internet-logo.png" alt="logo">
                                            </td>
                                            <td>Internet Explorer</td>
                                            <td align="right">
                                                <span class="label label-warning">09%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/browser/opera-logo.png" alt="logo">
                                            </td>
                                            <td>Opera mini</td>
                                            <td align="right">
                                                <span class="label label-danger">23%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/browser/internet-logo.png" alt="logo">
                                            </td>
                                            <td>Microsoft edge</td>
                                            <td align="right">
                                                <span class="label label-megna">09%</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Subscribe form copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Subscribe</h4>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputname2" placeholder="Enter Name"> </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email"> </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- social-profile-first widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img img-responsive" src="../assets/images/big/img1.jpg" alt="Card image">
                            <div class="card-img-overlay card-inverse social-profile-first bg-over">
                                <img src="../assets/images/users/1.jpg" class="img-circle" width="100">
                                <h4 class="card-title">John doe</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-b-0">12K</h3>
                                        <h5 class="font-light">Followers</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">420</h3>
                                        <h5 class="font-light">Following</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">128</h3>
                                        <h5 class="font-light">Tweets</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- ============================================================== -->
                        <!-- social-profile-two widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img img-responsive" src="../assets/images/big/img1.jpg" alt="Card image">
                            <div class="card-img-overlay card-inverse social-profile-first bg-info">
                                <img src="../assets/images/users/1.jpg" class="img-circle" width="100">
                                <h4 class="card-title">John doe</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-b-0">12K</h3>
                                        <h5 class="font-light">Followers</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">420</h3>
                                        <h5 class="font-light">Following</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">128</h3>
                                        <h5 class="font-light">Tweets</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- ============================================================== -->
                        <!-- visit from country widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Visits around the countries</h4>
                                <ul class="country-state">
                                    <li>
                                        <h2>6350</h2>
                                        <small>From India</small>
                                        <div class="pull-right">48%
                                            <i class="fa fa-level-up text-success"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2>3250</h2>
                                        <small>From UAE</small>
                                        <div class="pull-right">98%
                                            <i class="fa fa-level-up text-success"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2>1250</h2>
                                        <small>From Australia</small>
                                        <div class="pull-right">75%
                                            <i class="fa fa-level-down text-danger"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-inverse" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2>1350</h2>
                                        <small>From USA</small>
                                        <div class="pull-right">48%
                                            <i class="fa fa-level-up text-success"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- ============================================================== -->
                        <!-- Feeds widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <ul class="feeds">
                                    <li>
                                        <div class="bg-info">
                                            <i class="far fa-bell"></i>
                                        </div> You have 4 pending tasks.
                                        <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-success">
                                            <i class="ti-server"></i>
                                        </div> Server #1 overloaded.
                                        <span class="text-muted">2 Hours ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-warning">
                                            <i class="ti-shopping-cart"></i>
                                        </div> New order received.
                                        <span class="text-muted">31 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-danger">
                                            <i class="ti-user"></i>
                                        </div> New user registered.
                                        <span class="text-muted">30 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-dark">
                                            <i class="far fa-bell"></i>
                                        </div> New Version just arrived.
                                        <span class="text-muted">27 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-info">
                                            <i class="far fa-bell"></i>
                                        </div> You have 4 pending tasks.
                                        <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-danger">
                                            <i class="ti-user"></i>
                                        </div> New user registered.
                                        <span class="text-muted">30 May</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Totla Earning copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card earning-widget">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="d-flex">
                                        <span>
                                            <h4 class="card-title m-b-0">Total Earning</h4>
                                            <h2 class="m-t-0">$586</h2>
                                        </span>
                                        <select class="form-select w-25 ms-auto">
                                            <option selected="">Today</option>
                                            <option value="1">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body b-t">
                                <table class="table v-middle no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px">
                                                <img src="../assets/images/users/1.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Andrew Simon</td>
                                            <td align="right">
                                                <span class="label label-info">$2300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/users/2.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Daniel Kristeen</td>
                                            <td align="right">
                                                <span class="label label-success">$3300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/users/3.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Dany John</td>
                                            <td align="right">
                                                <span class="label label-primary">$4300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/users/4.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Chris gyle</td>
                                            <td align="right">
                                                <span class="label label-warning">$5300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/users/5.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Opera mini</td>
                                            <td align="right">
                                                <span class="label label-danger">$4567</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../assets/images/users/6.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Microsoft edge</td>
                                            <td align="right">
                                                <span class="label label-megna">$7889</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
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
</body>

</html>