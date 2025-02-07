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
    <link href="dist/css/pages/file-upload.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Basic Form</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Basic Form</li>
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
                                <h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check mr-sm-2 mb-3">
                                        <input type="checkbox" class="form-check-input" id="checkbox0" value="check">
                                        <label class="form-check-label" for="checkbox0">Check Me Out !</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Form</h4>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="tb-fname" placeholder="Enter Name here">
                                                <label for="tb-fname">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="tb-email" placeholder="name@example.com">
                                                <label for="tb-email">Email address</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="tb-pwd" placeholder="Password">
                                                <label for="tb-pwd">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="tb-cpwd" placeholder="Password">
                                                <label for="tb-cpwd">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Remember me
                                                    </label>
                                                </div>
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Default Forms</h4>
                            <h5 class="card-subtitle"> All bootstrap element classies </h5>
                            <form class="form-horizontal mt-4">
                                <div class="form-group">
                                    <label class="form-label">Default Text <span class="help"> e.g. "George
                                            deo"</span></label>
                                    <input type="text" class="form-control" value="George deo...">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">Email <span class="help"> e.g.
                                            "example@gmail.com"</span></label>
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" value="password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Placeholder</label>
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Text area</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Read only input</label>
                                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly="">
                                </div>
                                <div class="form-group">
                                    <fieldset disabled="">
                                        <label for="disabledTextInput">Disabled input</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                    </fieldset>
                                </div>
                                <div class="form-group row pt-3">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">Check this custom
                                                checkbox</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">Check this custom
                                                checkbox</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3">Check this custom
                                                checkbox</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                            <label class="form-check-label" for="customRadio1">Toggle this custom
                                                radio</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                            <label class="form-check-label" for="customRadio2">Toggle this custom
                                                radio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="customSwitch1">
                                    <label class="form-check-label" for="customSwitch1">Toggle this switch
                                        element</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input type="checkbox" class="form-check-input" disabled="" id="customSwitch2">
                                    <label class="form-check-label" for="customSwitch2">Disabled switch element</label>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Input Select</label>
                                    <select class="form-select col-12" id="inlineFormCustomSelect">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Default file upload</label>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Custom File upload</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Helping text</label>
                                    <input type="text" class="form-control" placeholder="Helping text">
                                    <span class="help-block"><small>A block of help text that breaks onto a new line and
                                            may extend beyond one line.</small></span> </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom File Uploads</h4>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Multiple files input
                                        example</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple="">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                    <input class="form-control" type="file" id="formFileDisabled" disabled="">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                </div>
                                <div>
                                    <label for="formFileLg" class="form-label">Large file input example</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="mb-0 text-white">Other Sample form</h4>
                            </div>
                            <form action="#">
                                <div class="card-body">
                                    <h4 class="card-title">Person Info</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                                    <small class="form-control-feedback"> This is inline help </small>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                    <small class="form-control-feedback"> This field has error. </small>
                                                </div>
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
                                                    <small class="form-control-feedback"> Select your gender </small>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control">
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
                                                        <input type="radio" id="customRadio11" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio11">Free</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio22" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio22">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h4 class="card-title mt-5">Address</h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
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
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button>
                                            <button type="button" class="btn btn-dark">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Basic Forms</h4>
                                <h5 class="card-subtitle"> All bootstrap element classies </h5>
                                <form class="form">
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Text</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Search</label>
                                        <div class="col-10">
                                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                        <div class="col-10">
                                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">URL</label>
                                        <div class="col-10">
                                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                                        <div class="col-10">
                                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-2 col-form-label">Password</label>
                                        <div class="col-10">
                                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-2 col-form-label">Number</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" value="42" id="example-number-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-2 col-form-label">Date and
                                            time</label>
                                        <div class="col-10">
                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Month</label>
                                        <div class="col-10">
                                            <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-week-input" class="col-2 col-form-label">Week</label>
                                        <div class="col-10">
                                            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-2 col-form-label">Time</label>
                                        <div class="col-10">
                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input2" class="col-2 col-form-label">Select</label>
                                        <div class="col-10">
                                            <select class="form-select col-12" id="example-month-input2">
                                                <option selected="">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control d-block" type="color" value="#563d7c" id="example-color-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Input
                                            Range</label>
                                        <div class="col-10">
                                            <input type="range" class="form-range" id="range" value="50">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Input groups</h4>
                            <h5 class="card-subtitle"> All bootstrap element classies </h5>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                        <!-- form-group -->
                                    </form>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <label class="control-label mt-3">Checkboxes and radio addons</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-text">
                                                        <div class="form-check mr-sm-2">
                                                            <input type="checkbox" class="form-check-input" id="checkbox3" value="check">
                                                            <label class="form-check-label" for="checkbox3"></label>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-text">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio5" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio5"></label>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with radio button">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="control-label mt-3">Multiple addons</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-text">
                                                        <div class="form-check mr-sm-2">
                                                            <input type="checkbox" class="form-check-input" id="checkbox00" value="check">
                                                            <label class="form-check-label" for="checkbox00"></label>
                                                        </div>
                                                    </div>
                                                    <span class="input-group-text">0.00</span>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <span class="input-group-text">0.00</span>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <form class="input-form">
                                        <label class="control-label mt-3">Button addons</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-info" type="button">Go!</button>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-info" type="button">Go!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary text-white" type="button">Hate
                                                            It</button>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success text-white" type="button">Love
                                                            It</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- form-group -->
                                    </form>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <label class="control-label mt-3">Dropdown addons</label>
                                    <form class="input-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another
                                                                action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something
                                                                else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated
                                                                link</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another
                                                                action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something
                                                                else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated
                                                                link</a>
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
                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Input States</h4>
                            <h5 class="card-subtitle"> Validation styles for error, warning, and success states on form
                                controls.</h5>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <form class="form-horizontal row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="inputSuccess1">Input with
                                                    success</label>
                                                <input type="text" class="form-control is-valid" id="inputSuccess1">
                                                <div class="valid-feedback">
                                                    Success! You've done it.
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="inputDanger1">Input with
                                                    danger</label>
                                                <input type="text" class="form-control is-invalid" id="inputDanger1">
                                                <div class="invalid-feedback">
                                                    Sorry, that username's taken. Try another?
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control is-valid" id="inputHorizontalSuccess" placeholder="name@example.com">
                                                <div class="valid-feedback">Success! You've done it.</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control is-invalid" id="inputHorizontalDnger" placeholder="name@example.com">
                                                <div class="invalid-feedback">Sorry, that username's taken. Try another?
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-5 offset-sm-1 col-xs-12">
                                    <form class="form-horizontal row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label" for="example-input-small">Small</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="form-control-sm">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label" for="example-input-normal">Normal</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label" for="example-input-large">Large</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="form-control-lg">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label">Grid Sizes</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder=".col-4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder=".col-5">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Disabled Form</h4>
                                <form>
                                    <fieldset disabled="">
                                        <div class="form-group">
                                            <label for="disabledTextInput1" class="form-label">Disabled input</label>
                                            <input type="text" id="disabledTextInput1" class="form-control" placeholder="Disabled input">
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                            <select id="disabledSelect" class="form-control">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled="">
                                            <label class="form-check-label" for="disabledFieldsetCheck">
                                                Can't check this
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary text-white">Submit</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Sample Basic Forms</h4>
                            <h5 class="card-subtitle"> Bootstrap Elements </h5>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail12" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword11" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword11" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword12" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword12" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check mr-sm-2">
                                                <input type="checkbox" class="form-check-input" id="checkbox1" value="check">
                                                <label class="form-check-label" for="checkbox1">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success me-2 text-white">Submit</button>
                                        <button type="submit" class="btn btn-dark">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sample Form with the Icons</h4>
                                <h5 class="card-subtitle">made with bootstrap elements</h5>
                                <form class="form pt-3">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon22"><i class="ti-email"></i></span>
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon22">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon33"><i class="ti-lock"></i></span>
                                            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon33">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                            <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" class="form-check-input" id="checkbox10" value="check">
                                            <label class="form-check-label" for="checkbox10">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success me-2 text-white">Submit</button>
                                    <button type="submit" class="btn btn-dark">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sample Form with the right Icons</h4>
                                <h5 class="card-subtitle">made with bootstrap elements</h5>
                                <form class="form pt-3">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                                            <span class="input-group-text"><i class="ti-email"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Password" aria-label="Password">
                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Password">
                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" class="form-check-input" id="checkbox12" value="check">
                                            <label class="form-check-label" for="checkbox12">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success me-2 text-white">Submit</button>
                                    <button type="submit" class="btn btn-dark">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
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
    <script src="dist/js/pages/jasny-bootstrap.js"></script>
</body>

</html>
