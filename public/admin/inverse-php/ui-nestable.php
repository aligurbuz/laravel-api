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
    <!--nestable CSS -->
    <link href="../assets/node_modules/nestable/nestable.css" rel="stylesheet" type="text/css" />
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
                        <h4 class="text-themecolor">Nestable</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Nestable</li>
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
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nestable1</h4>
                                <div class="myadmin-dd dd" id="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle"> Item 1 </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle"> Item 2 </div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="3">
                                                    <div class="dd-handle"> Item 3 </div>
                                                </li>
                                                <li class="dd-item" data-id="4">
                                                    <div class="dd-handle"> Item 4 </div>
                                                </li>
                                                <li class="dd-item" data-id="5">
                                                    <div class="dd-handle"> Item 5 </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle"> Item 6 </div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle"> Item 7 </div>
                                                        </li>
                                                        <li class="dd-item" data-id="8">
                                                            <div class="dd-handle"> Item 8 </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li class="dd-item" data-id="9">
                                                    <div class="dd-handle"> Item 9 </div>
                                                </li>
                                                <li class="dd-item" data-id="10">
                                                    <div class="dd-handle"> Item 10 </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nestable2</h4>
                                <div class="myadmin-dd-empty dd" id="nestable2">
                                    <ol class="dd-list">
                                        <li class="dd-item dd3-item" data-id="13">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> Item 13 </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> Item 14 </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> Item 16 </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> Item 17 </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> Item 18 </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> Item 19 </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="15">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> Item 15 </div>
                                            <ol class="dd-list">
                                                <li class="dd-item dd3-item" data-id="16">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 16 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="17">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 17 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="18">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 18 </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nestable3</h4>
                                <div class="dd myadmin-dd" id="nestable-menu">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="13">
                                            <div class="dd-handle">Item 13</div>
                                        </li>
                                        <li class="dd-item" data-id="13">
                                            <div class="dd-handle">Item 13</div>
                                        </li>
                                        <li class="dd-item" data-id="14">
                                            <div class="dd-handle">Item 14</div>
                                        </li>
                                        <li class="dd-item" data-id="15">
                                            <div class="dd-handle">Item 15</div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="16">
                                                    <div class="dd-handle">Item 16</div>
                                                </li>
                                                <li class="dd-item" data-id="17">
                                                    <div class="dd-handle">Item 17</div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle">Item 18</div>
                                                </li>
                                                <li class="dd-item" data-id="16">
                                                    <div class="dd-handle">Item 19</div>
                                                </li>
                                                <li class="dd-item" data-id="17">
                                                    <div class="dd-handle">Item 20</div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle">Item 21</div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
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
    <!--Nestable js -->
    <script src="../assets/node_modules/nestable/jquery.nestable.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // Nestable
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        $('#nestable').nestable({
            group: 1
        }).on('change', updateOutput);

        $('#nestable2').nestable({
            group: 1
        }).on('change', updateOutput);

        updateOutput($('#nestable').data('output', $('#nestable-output')));
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));

        $('#nestable-menu').on('click', function(e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

        $('#nestable-menu').nestable();
    });
    </script>
</body>

</html>