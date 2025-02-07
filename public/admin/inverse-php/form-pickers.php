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
   <link href="../assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="../assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="../assets/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="../assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Form Pickers</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form Pickers</li>
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
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Material Date picker</h4>
                                <h6 class="card-subtitle">Use <code>.bootstrapMaterialDatePicker</code> to create it.</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="m-t-20 form-label">Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                        <label class="m-t-40 form-label">Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="m-t-20 form-label">Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">
                                        <label class="m-t-40 form-label">Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clock Picker</h4>
                                <h6 class="card-subtitle">Use <code>.clockpicker</code> to create it.</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="m-t-20 form-label">Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30"> 
                                            <div class="input-group-append"> 
                                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span> 
                                            </div>
                                        </div>
                                        <label class="m-t-40 form-label">Auto close Clock Picker</label>
                                        <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> 
                                            <div class="input-group-append"> 
                                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="m-t-20 form-label">Now time</label>
                                        <div class="input-group">
                                            <input class="form-control" id="single-input" value="" placeholder="Now">
                                            <div class="input-group-append"> 
                                                <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-success text-white">Check the minutes</button>
                                            </div> 
                                        </div>
                                        <label class="m-t-40 form-label">Left Placement</label>
                                        <div class="input-group clockpicker " data-placement="left" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> 
                                            <div class="input-group-append"> 
                                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 m-b-30">
                                        <div class="example">
                                            <h5 class="box-title">Simple mode</h5>
                                            <p class="text-muted m-b-20">just add class <code>.colorpicker</code></p>
                                            <input type="text" class="colorpicker form-control" value="#7ab2fa" /> </div>
                                    </div>
                                    <div class="col-md-4 m-b-30">
                                        <div class="example">
                                            <h5 class="box-title">Complex mode</h5>
                                            <p class="text-muted m-b-20">just add class <code>.complex-colorpicker</code></p>
                                            <input type="text" class="complex-colorpicker form-control" value="#fa7a7a" /> </div>
                                    </div>
                                    <div class="col-md-4 m-b-30">
                                        <div class="example">
                                            <h5 class="box-title">Gradiant mode</h5>
                                            <p class="text-muted m-b-20">just add class <code>.gradient-colorpicker-colorpicker</code></p>
                                            <input type="text" class="gradient-colorpicker form-control" value="#bee0ab" /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <!-- Default Daterange Picker -->
                                <h5 class="card-title">Default Daterange Picker</h5>
                                <h6 class="card-subtitle">These rangepicker is used for when you want to choose start date to end date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control daterange" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Date And Time -->
                                <h5 class="card-title m-t-30">Date and Time</h5>
                                <h6 class="card-subtitle">These picker is used for when you want to choose start date to end date with particuler time
                                    for both start date and end date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control datetime" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- 24 hour Time Picker with Seconds -->
                                <h5 class="card-title m-t-30">Seconds with 24 hour Time</h5>
                                <h6 class="card-subtitle">These picker is used for when you want to choose start date to end date with particuler time
                                    for both start date and end date and to choose specific second from 24 hours.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control timeseconds" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Separate Date Picker -->
                                <h5 class="card-title m-t-30">Separate Date Picker</h5>
                                <h6 class="card-subtitle">In these picker, there is separate dropdown for select direct month and also select year
                                    so you can easily move to particuler date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control singledate" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Auto Apply Date Range -->
                                <h5 class="card-title m-t-30">Auto Apply Date Range</h5>
                                <h6 class="card-subtitle">In these picker,automatically apply a new date range as soon as two dates or a predefined
                                    range is selected.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control autoapply" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Not Connected Calendars -->
                                <h5 class="card-title m-t-30">Not Connected Calenders</h5>
                                <h6 class="card-subtitle">In these picker,both calender are not linked with each other.When both calender will disabled,
                                    the two calendars can be individually advanced and display any month/year.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control linkedCalendars" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Date Limitation -->
                                <h5 class="card-title m-t-30">Limit on Date</h5>
                                <h6 class="card-subtitle">In these picker,maximum timespan between deadline dates.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control dateLimit" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- With Dropdown -->
                                <h5 class="card-title m-t-30">With Dropdown</h5>
                                <h6 class="card-subtitle">In these picker,there is separate dropdown for select direct month and also select year so
                                    you can easily move to particuler date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control showdropdowns" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- With Week Numbers -->
                                <h5 class="card-title m-t-30">With Week Numbers</h5>
                                <h6 class="card-subtitle">In these picker,there is separate week numbers from start date to end date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control showweeknumbers" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Predefined Ranges -->
                                <h5 class="card-title m-t-30">Predefined Ranges</h5>
                                <h6 class="card-subtitle">In these picker,there is separate options like select today's date,last 7 days,last 30 days,
                                    this month, last month and custom range select as per your requirement.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control dateranges" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- With All Show Calendar -->
                                <h5 class="card-title m-t-30">With All Show Calendar</h5>
                                <h6 class="card-subtitle">In these picker,with all above options which are mention in predefined ranges- show the calendar.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control shawCalRanges" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Language Localization -->
                                <h5 class="card-title m-t-30">Language Localization</h5>
                                <h6 class="card-subtitle">In these picker,change he language of calendar.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control localeRange" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Open Picker on top -->
                                <h5 class="card-title m-t-30">Open Picker on top</h5>
                                <h6 class="card-subtitle">In these picker,calendar will open on top of the form-control.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control drops" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Custom Button Options -->
                                <h5 class="card-title m-t-30">Custom Button Options</h5>
                                <h6 class="card-subtitle">In these picker,you can add your button options or style.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control buttonClass" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                                    <div class="col-md-12 col-lg-8">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Default Datedpicker</h5>
                                            <p class="text-muted m-b-20">just add class <code>.mydatepicker</code> to create it.</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                                
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Autoclose Datedpicker</h5>
                                            <p class="text-muted m-b-20">just add class <code>.complex-colorpicker</code> to create it.</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                                
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Date Range picker</h5>
                                            <p class="text-muted m-b-20">just add id <code>#date-range</code> to create it.</p>
                                            <div class="input-daterange input-group" id="date-range">
                                                <input type="text" class="form-control" name="start" />
                                                
                                                    <span class="input-group-text bg-info b-0 text-white">TO</span>
                                                <input type="text" class="form-control" name="end" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="text-center">
                                            <h5 class="box-title m-t-30">Datepicker Inline</h5>
                                            <p class="text-muted m-b-20">You also can set the datepicker to be inline and flat.</p>
                                            <center>
                                                <div id="datepicker-inline"></div>
                                            </center>
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
    <!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- Plugin JavaScript -->
    <script src="../assets/node_modules/moment/moment.js"></script>
    <script src="../assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="../assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="../assets/node_modules/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="../assets/node_modules/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // -------------------------------
	// Start Date Range Picker
	// -------------------------------

    // Basic Date Range Picker
    $('.daterange').daterangepicker();

    // Date & Time
    $('.datetime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });

    //Calendars are not linked
    $('.timeseconds').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        timePicker24Hour: true,
        timePickerSeconds: true,
        locale: {
            format: 'MM-DD-YYYY h:mm:ss'
        }
    });

    // Single Date Range Picker
    $('.singledate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });

    // Auto Apply Date Range
    $('.autoapply').daterangepicker({
        autoApply: true,
    });

    // Calendars are not linked
    $('.linkedCalendars').daterangepicker({
        linkedCalendars: false,
    });

    // Date Limit
    $('.dateLimit').daterangepicker({
        dateLimit: {
            days: 7
        },
    });

    // Show Dropdowns
    $('.showdropdowns').daterangepicker({
        showDropdowns: true,
    });

    // Show Week Numbers
    $('.showweeknumbers').daterangepicker({
        showWeekNumbers: true,
    });

     $('.dateranges').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    });

    // Always Show Calendar on Ranges
    $('.shawCalRanges').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        alwaysShowCalendars: true,
    });

    // Top of the form-control open alignment
    $('.drops').daterangepicker({
        drops: "up" // up/down
    });

    // Custom button options
    $('.buttonClass').daterangepicker({
        drops: "up",
        buttonClasses: "btn",
        applyClass: "btn-info",
        cancelClass: "btn-danger"
    });

	jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });

    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
    </script>
</body>

</html>