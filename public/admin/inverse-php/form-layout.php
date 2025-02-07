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
                        <h4 class="text-themecolor">Form Layout</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form Layout</li>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Other Sample form</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                    <small class="form-control-feedback"> This field has error. </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="form-label">Gender</label>
                                                    <select class="form-control form-select">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                    </select>
                                                    <small class="form-control-feedback"> Select your gender </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Category</label>
                                                    <select class="form-control form-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Membership</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">Free</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label class="form-label">Street</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">State</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Post Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-control form-select">
                                                        <option>--Select your Country--</option>
                                                        <option>India</option>
                                                        <option>Sri Lanka</option>
                                                        <option>USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Other Sample Horizontal form</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <h3 class="box-title">Person Info</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">First Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="John doe">
                                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger row">
                                                    <label class="control-label text-end col-md-3">Last Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger" placeholder="12n">
                                                        <small class="form-control-feedback"> This field has error. </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Gender</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control form-select">
                                                            <option value="">Male</option>
                                                            <option value="">Female</option>
                                                        </select>
                                                        <small class="form-control-feedback"> Select your gender. </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Date of Birth</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Category</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control form-select" data-placeholder="Choose a Category" tabindex="1">
                                                            <option value="Category 1">Category 1</option>
                                                            <option value="Category 2">Category 2</option>
                                                            <option value="Category 3">Category 5</option>
                                                            <option value="Category 4">Category 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Membership</label>
                                                    <div class="col-md-9">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio3" name="member" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio3">Free</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio4" name="member" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio4">Paid</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <h3 class="box-title">Address</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Address 1</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Address 2</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">City</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">State</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Post Code</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Country</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control form-select">
                                                            <option>Country 1</option>
                                                            <option>Country 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success text-white">Submit</button>
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sample Form with the Icons</h4>
                                <h6 class="card-subtitle">made with bootstrap elements</h6>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="exampleInputuname">User Name</label>
                                        <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon2"><i class="ti-email"></i></span>
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd1">Password</label>
                                        <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon3"><i class="ti-lock"></i></span>
                                            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd2">Confirm Password</label>
                                        <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                            <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox m-b-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 text-white">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sample Form with the right Icons</h4>
                                <h6 class="card-subtitle">made with bootstrap elements</h6>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="exampleInputuname">User Name</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                                                <span class="input-group-text"><i class="ti-email"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd1">Password</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Password" aria-label="Password">
                                                <span class="input-group-text"><i class="ti-lock"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd2">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Password">
                                                <span class="input-group-text"><i class="ti-lock"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox m-b-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 text-white">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sample Horizontal Form with Icons</h4>
                                <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form</h6>
                                <form class="form-horizontal p-t-20">
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Username*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                                <input type="text" class="form-control" id="exampleInputuname3" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ti-email"></i></span>
                                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label" for="web" class="col-sm-3 control-label">Website</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ti-world"></i></span>
                                                <input type="text" class="form-control" id="web" placeholder="Enter Website Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ti-lock"></i></span>
                                                <input type="password" class="form-control" id="exampleInputpwd4" placeholder="Enter pwd">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword5" class="col-sm-3 control-label">Re Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ti-lock"></i></span>
                                                <input type="password" class="form-control" id="exampleInputpwd5" placeholder="Re Enter pwd">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <label class="form-check m-b-0">
                                                <input type="checkbox" class="form-check-input">
                                                <span class="form-check-label">Check me out !</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form with right Icon</h4>
                                <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form</h6>
                                <form class="form-horizontal p-t-20">
                                    <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">Username*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="uname" placeholder="Username">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email2" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                <span class="input-group-text"><i class="ti-email"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label" for="web1" class="col-sm-3 control-label">Website</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="web1" placeholder="Enter Website Name">
                                                <span class="input-group-text"><i class="ti-world"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass3" class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="pass3" placeholder="Enter pwd">
                                                <span class="input-group-text"><i class="ti-lock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass4" class="col-sm-3 control-label">Re Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="pass4" placeholder="Re Enter pwd">
                                                <span class="input-group-text"><i class="ti-lock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <label class="form-check m-b-0">
                                                <input type="checkbox" class="form-check-input">
                                                <span class="form-check-label">Check me out !</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Form with view only</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <h3 class="box-title">Person Info</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">First Name:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> John </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Last Name:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> Doe </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Gender:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> Male </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Date of Birth:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> 11/06/1987 </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Category:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> Category1 </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Membership:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> Free </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title">Address</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Address:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> E104, Dharti-2, Near silverstar mall </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">City:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> Bhavnagar </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">State:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> Gujarat </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Post Code:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> 457890 </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-end col-md-3">Country:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> India </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-danger text-white"> <i class="fa fa-pencil"></i> Edit</button>
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">With Border at Bottom (<small>Use class form-bordered</small>)</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control">
                                                <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control">
                                                <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple="">
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio11" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio11">Free</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio22" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio22">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row last">
                                            <label class="control-label text-end col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-select">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Submit</button>
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
</body>

</html>
