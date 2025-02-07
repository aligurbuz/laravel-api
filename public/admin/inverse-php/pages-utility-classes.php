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
                        <h4 class="text-themecolor">Utility Page</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Utility Page</li>
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
                                <!-- .row -->
                                <div class="row">
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <h3 class="box-title">Float Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap" width="150">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.pull-left</code> </td>
                                                    <td>Element to the left (float:left).</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.pull-right</code> </td>
                                                    <td>Element to the right(float:right).</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.clearfix</code> </td>
                                                    <td>To Clear floats.(clreafix)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap" width="150">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.show</code> </td>
                                                    <td>Element to Show (display: block)</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.hidden</code> </td>
                                                    <td>Element to hide (display: none)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <h3 class="box-title">Text Color Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-muted</code> </td>
                                                    <td class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-primary</code> </td>
                                                    <td class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-success</code> </td>
                                                    <td class="text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-info</code> </td>
                                                    <td class="text-info">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-warning</code> </td>
                                                    <td class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-danger</code> </td>
                                                    <td class="text-danger">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr> </div>
                                    <!-- .col -->
                                    <div class="col-md-6 col-lg-3">
                                        <h3 class="box-title">Padding Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-0</code> </td>
                                                    <td>Padding will be 0px from all side.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-10</code> </td>
                                                    <td>Padding will be 10px from all side.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-20</code> </td>
                                                    <td>Padding will be 20px from all side</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-6 col-lg-3">
                                        <h3 class="box-title">Padding Left Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-0</code> </td>
                                                    <td>Only Padding Left will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-10 </code> </td>
                                                    <td>Only Padding Left will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-20</code> </td>
                                                    <td>Only Padding Left will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-6 col-lg-3">
                                        <h3 class="box-title">Padding right Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-0</code> </td>
                                                    <td>Only Padding right will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-10 </code> </td>
                                                    <td>Only Padding right will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-20</code> </td>
                                                    <td>Only Padding right will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-6 col-lg-3">
                                        <h3 class="box-title">Padding top Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-0</code> </td>
                                                    <td>Only Padding top will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-10 </code> </td>
                                                    <td>Only Padding top will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-20</code> </td>
                                                    <td>Only Padding top will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->


                                    
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr> </div>
                                    <!-- .col -->
                                    <div class="col-lg-3 col-md-6">
                                        <h3 class="box-title">Margin top Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-5</code> </td>
                                                    <td>Only Margin top will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-10 </code> </td>
                                                    <td>Only Margin top will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-15 </code> </td>
                                                    <td>Only Margin top will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-20</code> </td>
                                                    <td>Only Margin top will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-30</code> </td>
                                                    <td>Only Margin top will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                                    <td>Only Margin top will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-lg-3 col-md-6">
                                        <h3 class="box-title">Margin Bottom Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-5</code> </td>
                                                    <td>Only Margin Bottom will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-10 </code> </td>
                                                    <td>Only Margin Bottom will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-15 </code> </td>
                                                    <td>Only Margin Bottom will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-20</code> </td>
                                                    <td>Only Margin Bottom will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-30</code> </td>
                                                    <td>Only Margin Bottom will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                                    <td>Only Margin top will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-lg-3 col-md-6">
                                        <h3 class="box-title">Margin Right Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-5</code> </td>
                                                    <td>Only Margin Right will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-10 </code> </td>
                                                    <td>Only Margin Right will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-15 </code> </td>
                                                    <td>Only Margin Right will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-20</code> </td>
                                                    <td>Only Margin Right will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-30</code> </td>
                                                    <td>Only Margin Right will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-40</code> </td>
                                                    <td>Only Margin Right will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-lg-3 col-md-6">
                                        <h3 class="box-title">Margin Left Classes</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-5</code> </td>
                                                    <td>Only Margin Left will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-10 </code> </td>
                                                    <td>Only Margin Left will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-15 </code> </td>
                                                    <td>Only Margin Left will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-20</code> </td>
                                                    <td>Only Margin Left will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-30</code> </td>
                                                    <td>Only Margin Left will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-40</code> </td>
                                                    <td>Only Margin Left will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->



                                    <div class="col-sm-12 m-t-40 m-b-40">
                                        <hr> </div>
                                    <!-- .col -->
                                    <div class="col-lg-4 col-md-6">
                                        <h3 class="box-title">Vertical Align</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.vt</code> </td>
                                                    <td>Element - vertical align top.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.vb</code> </td>
                                                    <td>Element - vertical align bottom.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.vertical-middle </code> </td>
                                                    <td>Element - vertical align middle.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-lg-4 col-md-6">
                                        <h3 class="box-title">Font Weight</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-light</code> </td>
                                                    <td>Font weight will be light (300).</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-normal</code> </td>
                                                    <td>Font weight will be normal</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-bold </code> </td>
                                                    <td>Font weight will be bold (700)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-lg-4 col-md-12">
                                        <h3 class="box-title">Border</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.b-all</code> </td>
                                                    <td>Border 1px all side.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.b-none</code> </td>
                                                    <td>border none all side</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.b-t </code> </td>
                                                    <td>border top 1px </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.b-b</code> </td>
                                                    <td>Border bottom 1px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.b-l</code> </td>
                                                    <td>border left 1px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.b-r</code> </td>
                                                    <td>border right 1px </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-12 m-t-40 m-b-40">
                                        <hr> </div>
                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped responsive-utilities">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>
                                                            Extra small devices
                                                            <small>Portrait phones (&lt;544px)</small>
                                                        </th>
                                                        <th>
                                                            Small devices
                                                            <small>Landscape phones (≥544px - &lt;768px)</small>
                                                        </th>
                                                        <th>
                                                            Medium devices
                                                            <small>Tablets (≥768px - &lt;992px)</small>
                                                        </th>
                                                        <th>
                                                            Large devices
                                                            <small>Desktops (≥992px - &lt;1200px)</small>
                                                        </th>
                                                        <th>
                                                            Extra large devices
                                                            <small>Desktops (≥1200px)</small>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-xs-down</code></th>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-sm-down</code></th>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-md-down</code></th>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-lg-down</code></th>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-visible">Visible</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-xl-down</code></th>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-xs-up</code></th>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-sm-up</code></th>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-md-up</code></th>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-lg-up</code></th>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-hidden">Hidden</td>
                                                        <td class="is-hidden">Hidden</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><code>.hidden-xl-up</code></th>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-visible">Visible</td>
                                                        <td class="is-hidden">Hidden</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->


                                    
                                    <div class="col-sm-12 m-t-40 m-b-40">
                                        <hr> </div>
                                    <!-- /.col -->
                                    <div class="col-lg-4 col-md-12">
                                        <h3 class="box-title">Background Colors</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-primary</code> </td>
                                                    <td>For Primary background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-success</code> </td>
                                                    <td>For Success (green) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-info</code> </td>
                                                    <td>For info (Blue) background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    <div class="col-lg-4 col-md-12">
                                        <h3 class="box-title">&nbsp;</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-warning</code> </td>
                                                    <td>For Warning (yellow) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-danger</code> </td>
                                                    <td>For Danger (red) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-theme</code> </td>
                                                    <td>For Theme background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    <div class="col-lg-4 col-md-12">
                                        <h3 class="box-title">&nbsp;</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-theme-dark</code> </td>
                                                    <td>For theme dark background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-inverse </code> </td>
                                                    <td>For inverse (dark) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-purple</code> </td>
                                                    <td>For Purple background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    <div class="col-lg-12">
                                        <h3 class="box-title">Image Radious</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.rounded</code> </td>
                                                    <td>For rounded corner to image or any element</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.rounded-top </code> </td>
                                                    <td>Only top will be rounded not other</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.rounded-right</code> </td>
                                                    <td>Only right will be rounded</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.rounded-bottom</code> </td>
                                                    <td>Only bottom will be rounded not other</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.rounded-left </code> </td>
                                                    <td>Only left will be rounded not other</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.rounded-circle</code> </td>
                                                    <td>Full circle class</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.rounded-0</code> </td>
                                                    <td>No radious to the element</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
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