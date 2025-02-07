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
    <!-- page CSS -->
    <link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="../assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
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
                        <h4 class="text-themecolor">Form Addons</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form Addons</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Select 2</h4>
                                <h6 class="card-subtitle"> Select2 for custom search and select</h6>
                                <h5 class="m-t-30">Single select2</h5>
                                <select class="select2 form-control form-select" style="width: 100%; height:36px;">
                                    <option>Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                                <h5 class="m-t-20">Multiple select boxes</h5>
                                <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Select boxes</h4>
                                <h6 class="card-subtitle">Just add bootstrap-select-min.js and same css & add class <code>.selectpicker</code> to select</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="m-t-30 m-b-10">Select box</h5>
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="m-t-30 m-b-10">Select boxes with optgroups</h5>
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <optgroup label="Picnic">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="m-t-30">Multiple select boxes</h5>
                                        <select class="selectpicker" multiple data-style="form-control btn-info">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="m-t-30">With colored Button Classes</h5>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-primary">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-info btn-outline-info">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-warning ">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-danger">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-success">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20" data-style="btn-default">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Switcher</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="box-title">Basic</h4>
                                        <p class="text-muted  font-13"> add the following line <code> class="js-switch" data-color="#009efb"</code> to your input element. </p>
                                        <div class="switchery-demo m-b-30">
                                            <input type="checkbox" checked class="js-switch" data-color="#009efb" />
                                            <input type="checkbox" checked class="js-switch" data-color="#f62d51" />
                                            <input type="checkbox" checked class="js-switch" data-color="#26c6da" />
                                            <input type="checkbox" checked class="js-switch" data-color="#ffbc34" />
                                            <input type="checkbox" checked class="js-switch" data-color="#7460ee" />
                                            <input type="checkbox" checked class="js-switch" data-color="#3d3b3b" /> </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="box-title">Sizes</h4>
                                        <p class="text-muted font-13"> You can add <code> data-size="small",data-size="large"</code> to your input element for different sizes. </p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked class="js-switch" data-color="#f62d51" data-size="small" />
                                            <input type="checkbox" checked class="js-switch" data-color="#26c6da" />
                                            <input type="checkbox" checked class="js-switch" data-color="#ffbc34" data-size="large" /> </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="box-title">Secondary color</h4>
                                        <p class="text-muted font-13"> You can apply <code> data-color="@color" data-secondary-color="@color"</code> to your input element to both color. </p>
                                        <div class="m-b-30">
                                            <input type="checkbox" class="js-switch" data-color="#26c6da" data-secondary-color="#f62d51" />
                                            <input type="checkbox" class="js-switch" data-color="#009efb" data-secondary-color="#7460ee" /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input Tags</h4>
                                <h6 class="card-subtitle">Add <code>data-role="tagsinput"</code> to your input field & its automatically change it to a tags input.</h6>
                                <div class="tags-default">
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags" /> </div>
                                <h4 class="card-title m-t-30">Select Tags</h4>
                                <h6 class="card-subtitle">You can also use <code>select multiple</code> to your input field.</h6>
                                <select multiple data-role="tagsinput">
                                    <option value="Amsterdam">Amsterdam</option>
                                    <option value="Washington">Washington</option>
                                    <option value="Sydney">Sydney</option>
                                </select>
                                <h4 class="card-title  m-t-30">Input Group Tags</h4>
                                <h6 class="card-subtitle">You can also use group tag <code>data-role="tagsinput"</code> to your input field.</h6>
                                <div class="input-group  m-t-20 m-b-30"> <span class="input-group-addon">Tags</span>
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> </div>
                                <div class="input-group">
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> <span class="input-group-addon">Tags</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dynamic Form Fields</h4>
                                <div id="education_fields"></div>
                                <div class="row">
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="School name">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Major">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Degree">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="form-select" id="educationDate" name="educationDate[]">
                                                    <option value="">Date</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success text-white" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap TouchSpin</h4>
                                <h6 class="card-subtitle">Use the <code> data-plugin="touchSpin" </code> to create a Bootstrap style spinner.</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form class="p-r-20">
                                            <div class="form-group">
                                                <label class="form-label">Vertical Touchspin</label>
                                                <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="" name="vertical-spin"> </div>
                                            <div class="form-group">
                                                <label class="form-label">Postfix</label>
                                                <input id="tch1" type="text" value="55" name="tch1" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                            <div class="form-group m-b-0">
                                                <label class="form-label">Prefix</label>
                                                <input id="tch2" type="text" value="0" name="tch2" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label class="form-label">Init </label>
                                                <input id="tch3" type="text" value="" name="tch3" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                            <div class="form-group">
                                                <label class="form-label">Value set 30 </label>
                                                <input id="tch3_22" type="text" value="30" name="tch3_22" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                            <div class="form-group m-b-0">
                                                <label class="form-label">Button group</label>
                                                <div class="input-group">
                                                    <input id="tch5" type="text" class="form-control" name="tch5" value="50" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline">
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple Select</h4>
                                <h6 class="card-subtitle"> Use a <code>select multiple</code> as your input element.</h6>
                                <div class="row">
                                    <div class="col-lg-6 col-xlg-4  m-b-30">
                                        <h5 class="box-title">Pre-selected options</h5>
                                        <select id='pre-selected-options' multiple='multiple'>
                                            <option value='elem_1'>elem 1</option>
                                            <option value='elem_2'>elem 2</option>
                                            <option value='elem_3'>elem 3</option>
                                            <option value='elem_4' selected>elem 4</option>
                                            <option value='elem_5' selected>elem 5</option>
                                            <option value="elem_6">elem 6</option>
                                            <option value="elem_7">elem 7</option>
                                            <option value="elem_8">elem 8</option>
                                            <option value="elem_9">elem 9</option>
                                            <option value="elem_10">elem 10</option>
                                            <option value="elem_11">elem 11</option>
                                            <option value="elem_12">elem 12</option>
                                            <option value="elem_13">elem 13</option>
                                            <option value="elem_14">elem 14</option>
                                            <option value="elem_15">elem 15</option>
                                            <option value="elem_16">elem 16</option>
                                            <option value="elem_17">elem 17</option>
                                            <option value="elem_18">elem 18</option>
                                            <option value="elem_19">elem 19</option>
                                            <option value="elem_20">elem 20</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-xlg-4">
                                        <h5 class="box-title">Optgroup</h5>
                                        <select multiple id="optgroup" name="optgroup[]">
                                            <optgroup label="Friends">
                                                <option value="1">Yoda</option>
                                                <option value="2" selected disabled>Obiwan</option>
                                            </optgroup>
                                            <optgroup label="Enemies">
                                                <option value="3">Palpatine</option>
                                                <option value="4" disabled>Darth Vader</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-xlg-4">
                                        <h5 class="box-title">Public methods</h5>
                                        <select multiple id="public-methods" name="public-methods[]">
                                            <option value="elem_1">elem 1</option>
                                            <option value="elem_2" disabled>elem 2</option>
                                            <option value="elem_3">elem 3</option>
                                            <option value="elem_4">elem 4</option>
                                            <option value="elem_5">elem 5</option>
                                            <option value="elem_6">elem 6</option>
                                            <option value="elem_7">elem 7</option>
                                            <option value="elem_8">elem 8</option>
                                            <option value="elem_9">elem 9</option>
                                            <option value="elem_10">elem 10</option>
                                            <option value="elem_11">elem 11</option>
                                            <option value="elem_12">elem 12</option>
                                            <option value="elem_13">elem 13</option>
                                            <option value="elem_14">elem 14</option>
                                            <option value="elem_15">elem 15</option>
                                            <option value="elem_16">elem 16</option>
                                            <option value="elem_17">elem 17</option>
                                            <option value="elem_18">elem 18</option>
                                            <option value="elem_19">elem 19</option>
                                            <option value="elem_20">elem 20</option>
                                            <option value="elem_21">elem 21</option>
                                            <option value="elem_22">elem 22</option>
                                            <option value="elem_23">elem 23</option>
                                            <option value="elem_24">elem 24</option>
                                            <option value="elem_25">elem 25</option>
                                            <option value="elem_26">elem 26</option>
                                            <option value="elem_27">elem 27</option>
                                            <option value="elem_28">elem 28</option>
                                            <option value="elem_29">elem 29</option>
                                            <option value="elem_30">elem 30</option>
                                            <option value="elem_31">elem 31</option>
                                            <option value="elem_32">elem 32</option>
                                            <option value="elem_33">elem 33</option>
                                            <option value="elem_34">elem 34</option>
                                            <option value="elem_35">elem 35</option>
                                            <option value="elem_36">elem 36</option>
                                            <option value="elem_37">elem 37</option>
                                            <option value="elem_38">elem 38</option>
                                            <option value="elem_39">elem 39</option>
                                            <option value="elem_40">elem 40</option>
                                            <option value="elem_41">elem 41</option>
                                            <option value="elem_42">elem 42</option>
                                            <option value="elem_43">elem 43</option>
                                            <option value="elem_44">elem 44</option>
                                            <option value="elem_45">elem 45</option>
                                            <option value="elem_46">elem 46</option>
                                            <option value="elem_47">elem 47</option>
                                            <option value="elem_48">elem 48</option>
                                            <option value="elem_49">elem 49</option>
                                            <option value="elem_50">elem 50</option>
                                            <option value="elem_51">elem 51</option>
                                            <option value="elem_52">elem 52</option>
                                            <option value="elem_53">elem 53</option>
                                            <option value="elem_54">elem 54</option>
                                            <option value="elem_55">elem 55</option>
                                            <option value="elem_56">elem 56</option>
                                            <option value="elem_57">elem 57</option>
                                            <option value="elem_58">elem 58</option>
                                            <option value="elem_59">elem 59</option>
                                            <option value="elem_60">elem 60</option>
                                            <option value="elem_61">elem 61</option>
                                            <option value="elem_62">elem 62</option>
                                            <option value="elem_63">elem 63</option>
                                            <option value="elem_64">elem 64</option>
                                            <option value="elem_65">elem 65</option>
                                            <option value="elem_66">elem 66</option>
                                            <option value="elem_67">elem 67</option>
                                            <option value="elem_68">elem 68</option>
                                            <option value="elem_69">elem 69</option>
                                            <option value="elem_70">elem 70</option>
                                            <option value="elem_71">elem 71</option>
                                            <option value="elem_72">elem 72</option>
                                            <option value="elem_73">elem 73</option>
                                            <option value="elem_74">elem 74</option>
                                            <option value="elem_75">elem 75</option>
                                            <option value="elem_76">elem 76</option>
                                            <option value="elem_77">elem 77</option>
                                            <option value="elem_78">elem 78</option>
                                            <option value="elem_79">elem 79</option>
                                            <option value="elem_80">elem 80</option>
                                            <option value="elem_81">elem 81</option>
                                            <option value="elem_82">elem 82</option>
                                            <option value="elem_83">elem 83</option>
                                            <option value="elem_84">elem 84</option>
                                            <option value="elem_85">elem 85</option>
                                            <option value="elem_86">elem 86</option>
                                            <option value="elem_87">elem 87</option>
                                            <option value="elem_88">elem 88</option>
                                            <option value="elem_89">elem 89</option>
                                            <option value="elem_90">elem 90</option>
                                            <option value="elem_91">elem 91</option>
                                            <option value="elem_92">elem 92</option>
                                            <option value="elem_93">elem 93</option>
                                            <option value="elem_94">elem 94</option>
                                            <option value="elem_95">elem 95</option>
                                            <option value="elem_96">elem 96</option>
                                            <option value="elem_97">elem 97</option>
                                            <option value="elem_98">elem 98</option>
                                            <option value="elem_99">elem 99</option>
                                            <option value="elem_100">elem 100</option>
                                            <option value="elem_101">elem 101</option>
                                            <option value="elem_102">elem 102</option>
                                            <option value="elem_103">elem 103</option>
                                            <option value="elem_104">elem 104</option>
                                            <option value="elem_105">elem 105</option>
                                            <option value="elem_106">elem 106</option>
                                            <option value="elem_107">elem 107</option>
                                            <option value="elem_108">elem 108</option>
                                            <option value="elem_109">elem 109</option>
                                            <option value="elem_110">elem 110</option>
                                            <option value="elem_111">elem 111</option>
                                            <option value="elem_112">elem 112</option>
                                            <option value="elem_113">elem 113</option>
                                            <option value="elem_114">elem 114</option>
                                            <option value="elem_115">elem 115</option>
                                            <option value="elem_116">elem 116</option>
                                            <option value="elem_117">elem 117</option>
                                            <option value="elem_118">elem 118</option>
                                            <option value="elem_119">elem 119</option>
                                            <option value="elem_120">elem 120</option>
                                            <option value="elem_121">elem 121</option>
                                            <option value="elem_122">elem 122</option>
                                            <option value="elem_123">elem 123</option>
                                            <option value="elem_124">elem 124</option>
                                            <option value="elem_125">elem 125</option>
                                            <option value="elem_126">elem 126</option>
                                            <option value="elem_127">elem 127</option>
                                            <option value="elem_128">elem 128</option>
                                            <option value="elem_129">elem 129</option>
                                            <option value="elem_130">elem 130</option>
                                            <option value="elem_131">elem 131</option>
                                            <option value="elem_132">elem 132</option>
                                            <option value="elem_133">elem 133</option>
                                            <option value="elem_134">elem 134</option>
                                            <option value="elem_135">elem 135</option>
                                            <option value="elem_136">elem 136</option>
                                            <option value="elem_137">elem 137</option>
                                            <option value="elem_138">elem 138</option>
                                            <option value="elem_139">elem 139</option>
                                            <option value="elem_140">elem 140</option>
                                            <option value="elem_141">elem 141</option>
                                            <option value="elem_142">elem 142</option>
                                            <option value="elem_143">elem 143</option>
                                            <option value="elem_144">elem 144</option>
                                            <option value="elem_145">elem 145</option>
                                            <option value="elem_146">elem 146</option>
                                            <option value="elem_147">elem 147</option>
                                            <option value="elem_148">elem 148</option>
                                            <option value="elem_149">elem 149</option>
                                            <option value="elem_150">elem 150</option>
                                            <option value="elem_151">elem 151</option>
                                            <option value="elem_152">elem 152</option>
                                            <option value="elem_153">elem 153</option>
                                            <option value="elem_154">elem 154</option>
                                            <option value="elem_155">elem 155</option>
                                            <option value="elem_156">elem 156</option>
                                            <option value="elem_157">elem 157</option>
                                            <option value="elem_158">elem 158</option>
                                            <option value="elem_159">elem 159</option>
                                            <option value="elem_160">elem 160</option>
                                            <option value="elem_161">elem 161</option>
                                            <option value="elem_162">elem 162</option>
                                            <option value="elem_163">elem 163</option>
                                            <option value="elem_164">elem 164</option>
                                            <option value="elem_165">elem 165</option>
                                            <option value="elem_166">elem 166</option>
                                            <option value="elem_167">elem 167</option>
                                            <option value="elem_168">elem 168</option>
                                            <option value="elem_169">elem 169</option>
                                            <option value="elem_170">elem 170</option>
                                            <option value="elem_171">elem 171</option>
                                            <option value="elem_172">elem 172</option>
                                            <option value="elem_173">elem 173</option>
                                            <option value="elem_174">elem 174</option>
                                            <option value="elem_175">elem 175</option>
                                            <option value="elem_176">elem 176</option>
                                            <option value="elem_177">elem 177</option>
                                            <option value="elem_178">elem 178</option>
                                            <option value="elem_179">elem 179</option>
                                            <option value="elem_180">elem 180</option>
                                            <option value="elem_181">elem 181</option>
                                            <option value="elem_182">elem 182</option>
                                            <option value="elem_183">elem 183</option>
                                            <option value="elem_184">elem 184</option>
                                            <option value="elem_185">elem 185</option>
                                            <option value="elem_186">elem 186</option>
                                            <option value="elem_187">elem 187</option>
                                            <option value="elem_188">elem 188</option>
                                            <option value="elem_189">elem 189</option>
                                            <option value="elem_190">elem 190</option>
                                            <option value="elem_191">elem 191</option>
                                            <option value="elem_192">elem 192</option>
                                            <option value="elem_193">elem 193</option>
                                            <option value="elem_194">elem 194</option>
                                            <option value="elem_195">elem 195</option>
                                            <option value="elem_196">elem 196</option>
                                            <option value="elem_197">elem 197</option>
                                            <option value="elem_198">elem 198</option>
                                            <option value="elem_199">elem 199</option>
                                            <option value="elem_200">elem 200</option>
                                        </select>
                                        <div class="button-box m-t-20"> <a id="select-all" class="btn btn-danger text-white" href="javascript:void(0)">select all</a> <a id="deselect-all" class="btn btn-info text-white" href="javascript:void(0)">deselect all</a> <a id="add-option" class="btn btn-success text-white" href="javascript:void(0)">Add option</a> <a id="refresh" class="btn btn-warning" href="javascript:void(0)">refresh</a> </div>
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="../assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="../assets/node_modules/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>
</body>

</html>