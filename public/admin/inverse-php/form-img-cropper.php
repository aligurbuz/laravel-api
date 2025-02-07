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
    <!-- Cropper CSS -->
    <link href="../assets/node_modules/cropper/cropper.min.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Image Cropper</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Image Cropper</li>
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
                                <div class="row">
                                    <!-- .Your image -->
                                    <div class="col-md-9 p-20">
                                        <div class="img-container"><img id="image" src="../assets/images/big/img2.jpg" class="img-responsive" alt="Picture"></div>
                                    </div>
                                    <!-- /.Your image -->
                                    <!-- .Croping image -->
                                    <div class="col-md-3 p-20">
                                        <div class="docs-preview clearfix">
                                            <div class="img-preview preview-lg"></div>
                                            <div class="img-preview preview-md"></div>
                                            <div class="img-preview preview-sm"></div>
                                            <div class="img-preview preview-xs"></div>
                                        </div>
                                        <!-- .pixels of image -->
                                        <div class="docs-data">
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-addon" for="dataX">X</label>
                                                <input type="text" class="form-control" id="dataX" placeholder="x">
                                                <span class="input-group-addon">px</span> </div>
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-addon" for="dataY">Y</label>
                                                <input type="text" class="form-control" id="dataY" placeholder="y">
                                                <span class="input-group-addon">px</span> </div>
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-addon" for="dataWidth">Width</label>
                                                <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                                <span class="input-group-addon">px</span> </div>
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-addon" for="dataHeight">Height</label>
                                                <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                                <span class="input-group-addon">px</span> </div>
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-addon" for="dataRotate">Rotate</label>
                                                <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                                <span class="input-group-addon">deg</span> </div>
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-addon" for="dataScaleX">ScaleX</label>
                                                <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                            </div>
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-addon" for="dataScaleY">ScaleY</label>
                                                <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                            </div>
                                            <!-- /.pixels of image -->
                                        </div>
                                    </div>
                                    <!-- /.Croping of image -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9 docs-buttons">
                                        <!-- .btn groups -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info text-white" data-method="setDragMode" data-option="move" title="Move"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)"> <span class="fa fa-arrows"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-info text-white" data-method="setDragMode" data-option="crop" title="Crop"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)"> <span class="fa fa-crop"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success text-white" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)"> <span class="fa fa-search-plus"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-success text-white" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)"> <span class="fa fa-search-minus"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="move" data-option="-10" data-second-option="0" title="Move Left"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)"> <span class="fa fa-arrow-left"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="move" data-option="10" data-second-option="0" title="Move Right"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)"> <span class="fa fa-arrow-right"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="move" data-option="0" data-second-option="-10" title="Move Up"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)"> <span class="fa fa-arrow-up"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="move" data-option="0" data-second-option="10" title="Move Down"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)"> <span class="fa fa-arrow-down"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)"> <span class="fa fa-rotate-left"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="rotate" data-option="45" title="Rotate Right"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)"> <span class="fa fa-rotate-right"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="scaleX" data-option="-1" title="Flip Horizontal"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)"> <span class="fa fa-arrows-h"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="scaleY" data-option="-1" title="Flip Vertical"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)"> <span class="fa fa-arrows-v"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="crop" title="Crop"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;crop&quot;)"> <span class="fa fa-check"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="clear" title="Clear"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;clear&quot;)"> <span class="fa fa-remove"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="disable" title="Disable"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;disable&quot;)"> <span class="fa fa-lock"></span> </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="enable" title="Enable"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;enable&quot;)"> <span class="fa fa-unlock"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="reset" title="Reset"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;reset&quot;)"> <span class="fa fa-refresh"></span> </span>
                                            </button>
                                            <label class="btn btn-secondary btn-outline btn-upload" for="inputImage" title="Upload image file">
                                                <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="Import image with Blob URLs"> <span class="fa fa-upload"></span> </span>
                                            </label>
                                            <button type="button" class="btn btn-secondary btn-outline" data-method="destroy" title="Destroy"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)"> <span class="fa fa-power-off"></span> </span>
                                            </button>
                                        </div>
                                        <div class="btn-group btn-group-crop">
                                            <button type="button" class="btn btn-danger text-white" data-method="getCroppedCanvas"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)"> Get Cropped Canvas </span> </button>
                                            <button type="button" class="btn btn-danger text-white" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })"> 160&times;90 </span> </button>
                                            <button type="button" class="btn btn-danger text-white" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })"> 320&times;180 </span> </button>
                                        </div>
                                        <!-- Show the cropped image in modal -->
                                        <div class="modal docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                                    </div>
                                                    <div class="modal-body"></div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                                                        <a class="btn btn-primary text-white" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="getData" data-option data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getData&quot;)"> Get Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="setData" data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)"> Set Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="getContainerData" data-option data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)"> Get Container Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="getImageData" data-option data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)"> Get Image Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="getCanvasData" data-option data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)"> Get Canvas Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="setCanvasData" data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)"> Set Canvas Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="getCropBoxData" data-option data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)"> Get Crop Box Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="setCropBoxData" data-bs-target="#putData"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)"> Set Crop Box Data </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="moveTo" data-option="0"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="cropper.moveTo(0)"> 0,0 </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="zoomTo" data-option="1"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="cropper.zoomTo(1)"> 100% </span> </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-method="rotateTo" data-option="180"> <span class="docs-tooltip" data-bs-toggle="tooltip" title="cropper.rotateTo(180)"> 180° </span> </button>
                                        <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
                                    </div>
                                    <!-- /.btn groups -->
                                    <div class="col-md-3 docs-toggles">
                                        <!-- .btn groups -->
                                        <div class="btn-group btn-group-justified" data-bs-toggle="buttons">
                                            <label class="btn btn-secondary btn-outline active form-label">
                                                <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="aspectRatio: 16 / 9"> 16:9 </span> </label>
                                            <label class="btn btn-secondary btn-outline form-label">
                                                <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="aspectRatio: 4 / 3"> 4:3 </span> </label>
                                            <label class="btn btn-secondary btn-outline form-label">
                                                <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="aspectRatio: 1 / 1"> 1:1 </span> </label>
                                            <label class="btn btn-secondary btn-outline form-label">
                                                <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="aspectRatio: 2 / 3"> 2:3 </span> </label>
                                            <label class="btn btn-secondary btn-outline form-label">
                                                <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="aspectRatio: NaN"> Free </span> </label>
                                        </div>
                                        <!-- /.btn groups -->
                                        <!-- .btn groups -->
                                        <div class="btn-group btn-group-justified" data-bs-toggle="buttons">
                                            <label class="btn btn-secondary btn-outline active form-label">
                                                <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="View Mode 0"> VM0 </span> </label>
                                            <label class="btn btn-secondary btn-outline form-label">
                                                <input type="radio" info="sr-only" id="viewMode1" name="viewMode" value="1">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="View Mode 1"> VM1 </span> </label>
                                            <label class="btn btn-secondary btn-outline form-label">
                                                <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="View Mode 2"> VM2 </span> </label>
                                            <label class="btn btn-secondary  btn-outline form-label">
                                                <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                                <span class="docs-tooltip" data-bs-toggle="tooltip" title="View Mode 3"> VM3 </span> </label>
                                        </div>
                                        <!-- /.btn groups -->
                                        <!-- .btn groups -->
                                        <div class="dropdown dropup docs-options">
                                            <button type="button" class="btn btn-success w-100 dropdown-toggle text-white" id="toggleOptions" data-bs-toggle="dropdown" aria-expanded="true"> Toggle Options <span class="caret"></span> </button>
                                            <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="responsive" checked> responsive </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="restore" checked> restore </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="checkCrossOrigin" checked> checkCrossOrigin </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="checkOrientation" checked> checkOrientation </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="modal" checked> modal </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="guides" checked> guides </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="center" checked> center </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="highlight" checked> highlight </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="background" checked> background </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="autoCrop" checked> autoCrop </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="movable" checked> movable </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="rotatable" checked> rotatable </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="scalable" checked> scalable </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="zoomable" checked> zoomable </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="zoomOnTouch" checked> zoomOnTouch </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="zoomOnWheel" checked> zoomOnWheel </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="cropBoxMovable" checked> cropBoxMovable </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="cropBoxResizable" checked> cropBoxResizable </label>
                                                </li>
                                                <li role="presentation">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="toggleDragModeOnDblclick" checked> toggleDragModeOnDblclick </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.btn groups -->
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
    <!-- Image cropper JavaScript -->
    <script src="../assets/node_modules/cropper/cropper.min.js"></script>
    <script src="../assets/node_modules/cropper/cropper-init.js"></script>
</body>

</html>