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
    <!-- Footable CSS -->
    <link href="../assets/node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet">
    <!-- Page CSS -->
    <link href="dist/css/pages/contact-app-page.css" rel="stylesheet">
    <link href="dist/css/pages/footable-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Contact</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
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
                            <!-- .left-right-aside-column-->
                            <div class="contact-page-aside">
                                <!-- .left-aside-column-->
                                <div class="left-aside bg-light-part">
                                    <ul class="list-style-none">
                                        <li class="box-label"><a href="javascript:void(0)">All Contacts <span>123</span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)">Work <span>103</span></a></li>
                                        <li><a href="javascript:void(0)">Family <span>19</span></a></li>
                                        <li><a href="javascript:void(0)">Friends <span>623</span></a></li>
                                        <li><a href="javascript:void(0)">Private <span>53</span></a></li>
                                        <li class="box-label"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-info text-white">+ Create New Label</a></li>
                                        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add Lable</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Name of Label</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" placeholder="type name"> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Select Number of people</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-select">
                                                                        <option>All Contacts</option>
                                                                        <option>10</option>
                                                                        <option>20</option>
                                                                        <option>30</option>
                                                                        <option>40</option>
                                                                        <option>Custome</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </from>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect" data-bs-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </ul>
                                </div>
                                <!-- /.left-aside-column-->
                                <div class="right-aside ">
                                    <div class="right-page-header">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10">Contacts / Employee List </h4></div>
                                            <div class="ms-auto">
                                                <input type="text" id="demo-input-search2" placeholder="search contacts" class="form-control"> </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info btn-rounded m-t-10 float-end text-white" data-bs-toggle="modal" data-bs-target="#add-contact">Add New Contact</button>
                                    <!-- Add Contact Popup Model -->        
                                    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                <div class="modal-body">
                                                    <from class="form-horizontal form-material">
                                                        <div class="form-group">
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Type name"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Email"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Phone"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Designation"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Age"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Salary"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                    <input type="file" class="upload"> </div>
                                                            </div>
                                                        </div>
                                                    </from>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info waves-effect" data-bs-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <div class="table-responsive">
                                        <table id="demo-foo-addrow" class="table no-wrap table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Role</th>
                                                    <th>Age</th>
                                                    <th>Joining date</th>
                                                    <th>Salery</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                                    </td>
                                                    <td>genelia@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class="label label-danger">Designer</span> </td>
                                                    <td>23</td>
                                                    <td>12-10-2014</td>
                                                    <td>$1200</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                                    </td>
                                                    <td>arijit@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class="label label-info">Developer</span> </td>
                                                    <td>26</td>
                                                    <td>10-09-2014</td>
                                                    <td>$1800</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" width="40" class="img-circle" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class="label label-success">Accountant</span></td>
                                                    <td>28</td>
                                                    <td>1-10-2013</td>
                                                    <td>$2200</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" width="40" class="img-circle" /> Hritik Roshan</a>
                                                    </td>
                                                    <td>hritik@gmail.com</td>
                                                    <td>+456 456 789</td>
                                                    <td><span class="label label-inverse">HR</span></td>
                                                    <td>25</td>
                                                    <td>2-10-2017</td>
                                                    <td>$200</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user" width="40" class="img-circle" /> John Abraham</a>
                                                    </td>
                                                    <td>john@gmail.com</td>
                                                    <td>+567 456 789</td>
                                                    <td><span class="label label-danger">Manager</span></td>
                                                    <td>23</td>
                                                    <td>10-9-2015</td>
                                                    <td>$1200</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /> Pawandeep kumar</a>
                                                    </td>
                                                    <td>pawandeep@gmail.com</td>
                                                    <td>+678 456 789</td>
                                                    <td><span class="label label-warning">Chairman</span></td>
                                                    <td>29</td>
                                                    <td>10-5-2013</td>
                                                    <td>$1500</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" width="40" class="img-circle" /> Ritesh Deshmukh</a>
                                                    </td>
                                                    <td>ritesh@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class="label label-danger">Designer</span></td>
                                                    <td>35</td>
                                                    <td>05-10-2012</td>
                                                    <td>$3200</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" width="40" class="img-circle" /> Salman Khan</a>
                                                    </td>
                                                    <td>salman@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class="label label-info">Developer</span></td>
                                                    <td>27</td>
                                                    <td>11-10-2014</td>
                                                    <td>$1800</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user" width="40" class="img-circle" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class="label label-success">Accountant</span></td>
                                                    <td>18</td>
                                                    <td>12-5-2017</td>
                                                    <td>$100</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Sonu Nigam</a>
                                                    </td>
                                                    <td>sonu@gmail.com</td>
                                                    <td>+456 456 789</td>
                                                    <td><span class="label label-inverse">HR</span></td>
                                                    <td>36</td>
                                                    <td>18-5-2009</td>
                                                    <td>$4200</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> Varun Dhawan</a>
                                                    </td>
                                                    <td>varun@gmail.com</td>
                                                    <td>+567 456 789</td>
                                                    <td><span class="label label-danger">Manager</span></td>
                                                    <td>43</td>
                                                    <td>12-10-2010</td>
                                                    <td>$5200</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                                    </td>
                                                    <td>genelia@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class="label label-danger">Designer</span> </td>
                                                    <td>23</td>
                                                    <td>12-10-2014</td>
                                                    <td>$1200</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                                    </td>
                                                    <td>arijit@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class="label label-info">Developer</span> </td>
                                                    <td>26</td>
                                                    <td>10-09-2014</td>
                                                    <td>$1800</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user" width="40" class="img-circle" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class="label label-success">Accountant</span></td>
                                                    <td>28</td>
                                                    <td>1-10-2013</td>
                                                    <td>$2200</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                        <!-- .left-aside-column-->
                                    </div>
                                <!-- /.left-right-aside-column-->
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
    <!-- Footable -->
    <script src="../assets/node_modules/moment/moment.js"></script>
    <script src="../assets/node_modules/footable/js/footable.min.js"></script>
    <!--FooTable init-->
    <script>
        $(function () {
            $('#demo-foo-addrow').footable();
        });
    </script>

</body>

</html>