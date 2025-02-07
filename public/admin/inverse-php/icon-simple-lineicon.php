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
    <link href="dist/css/pages/icon-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Simple Line Icon</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Simple Line Icon</li>
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
                                <h4 class="card-title">Control Icons</h4>
                                <h6 class="card-subtitle">use class <code>icon-</code> icon name in i tag</h6>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-user"></i>icon-user </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-people"></i>icon-people </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-user-female"></i> icon-user-female </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-user-follow"></i> icon-user-follow </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-user-following"></i>icon-user-following </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-user-unfollow"></i> icon-user-unfollow </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-login"></i> icon-login </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-logout"></i> icon-logout </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-emotsmile"></i> icon-emotsmile </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-phone"></i> icon-phone </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-call-end"></i> icon-call-end </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-call-in"></i> icon-call-in </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-call-out"></i> icon-call-out </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-map"></i> icon-map </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-location-pin"></i> icon-location-pin </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-direction"></i> icon-direction </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-directions"></i> icon-directions </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-compass"></i> icon-compass </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-layers"></i> icon-layers </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-menu"></i> icon-menu </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-list"></i> icon-list </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-options-vertical"></i> icon-options-vertical </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-options"></i> icon-options </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-down"></i> icon-arrow-down </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-left"></i> icon-arrow-left </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-right"></i> icon-arrow-right </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-up"></i> icon-arrow-up </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-up-circle"></i> icon-arrow-up-circle </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-left-circle"></i> icon-arrow-left-circle </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-right-circle"></i> icon-arrow-right-circle </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-arrow-down-circle"></i> icon-arrow-down-circle </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-check"></i> icon-check </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-clock"></i> icon-clock </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-plus"></i> icon-plus </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-close"></i> icon-close </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-trophy"></i> icon-trophy </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-screen-smartphone"></i> icon-screen-smartphone </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-screen-desktop"></i> icon-screen-desktop </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-plane"></i> icon-plane </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-notebook"></i> icon-notebook </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-mustache"></i> icon-mustache </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-mouse"></i> icon-mouse </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-magnet"></i> icon-magnet </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-energy"></i> icon-energy </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-disc"></i> icon-disc </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-cursor"></i> icon-cursor </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-cursor-move"></i> icon-cursor-move </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-crop"></i> icon-crop </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-chemistry"></i> icon-chemistry </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-speedometer"></i> icon-speedometer </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-shield"></i> icon-shield </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-screen-tablet"></i> icon-screen-tablet </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-magic-wand"></i> icon-magic-wand </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-hourglass"></i> icon-hourglass </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-graduation"></i> icon-graduation </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-ghost"></i> icon-ghost </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-game-controller"></i> icon-game-controller </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-fire"></i> icon-fire </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-eyeglass"></i> icon-eyeglass </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-envelope-open"></i> icon-envelope-open </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-envolope-letter"></i> icon-envolope-letter </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-bell"></i> icon-bell </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-badge"></i> icon-badge </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-anchor"></i> icon-anchor </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-wallet"></i> icon-wallet </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-vector"></i> icon-vector </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-speech"></i> icon-speech </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-puzzle"></i> icon-puzzle </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-printer"></i> icon-printer </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-present"></i> icon-present </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-playlist"></i> icon-playlist </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-pin"></i> icon-pin </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-picture"></i> icon-picture </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-handbag"></i> icon-handbag </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-globe-alt"></i> icon-globe-alt </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-globe"></i> icon-globe </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-folder-alt"></i> icon-folder-alt </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-folder"></i> icon-folder </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-film"></i> icon-film </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-feed"></i> icon-feed </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-drop"></i> icon-drop </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-drawar"></i> icon-drawar </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-docs"></i> icon-docs </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-doc"></i> icon-doc </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-diamond"></i> icon-diamond </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-cup"></i> icon-cup </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-calculator"></i> icon-calculator </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-bubbles"></i> icon-bubbles </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-briefcase"></i> icon-briefcase </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-book-open"></i> icon-book-open </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-basket-loaded"></i> icon-basket-loaded </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-basket"></i> icon-basket </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-bag"></i> icon-bag </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-action-undo"></i> icon-action-undo </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-action-redo"></i> icon-action-redo </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-wrench"></i> icon-wrench </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-umbrella"></i> icon-umbrella </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-trash"></i> icon-trash </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-tag"></i> icon-tag </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-support"></i> .icon-support </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-frame"></i> icon-frame </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-size-fullscreen"></i> icon-size-fullscreen </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-size-actual"></i> icon-size-actual </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-shuffle"></i> icon-shuffle </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-share-alt"></i> icon-share-alt </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-share"></i> icon-share </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-rocket"></i> icon-rocket </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-question"></i> icon-question </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-pie-chart"></i> icon-pie-chart </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-pencil"></i> icon-pencil </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-note"></i> icon-note </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-loop"></i> icon-loop </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-home"></i> icon-home </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-grid"></i> icon-grid </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-graph"></i> icon-graph </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-microphone"></i> icon-microphone </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-music-tone-alt"></i> icon-music-tone-alt </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-music-tone"></i> icon-music-tone </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-earphones-alt"></i> icon-earphones-alt </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-earphones"></i> icon-earphones </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-equalizer"></i> icon-equalizer </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-like"></i> icon-like </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-dislike"></i> icon-dislike </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-control-start"></i> icon-control-start </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-control-rewind"></i> icon-control-rewind </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-control-play"></i> icon-control-play </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-control-pause"></i> icon-control-pause </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-control-forward"></i> icon-control-forward </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-control-end"></i> icon-control-end </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-volume-1"></i> icon-volume-1 </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-volume-2"></i> icon-volume-2 </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-volume-off"></i> icon-volume-off </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-calender"></i> icon-calender </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-bulb"></i> icon-bulb </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-chart"></i> icon-chart </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-ban"></i> icon-ban </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-bubble"></i> icon-bubble </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-camrecorder"></i> icon-camrecorder </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-camera"></i> icon-camera </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-cloud-download"></i> icon-cloud-download </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-cloud-upload"></i> icon-cloud-upload </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-eye"></i> icon-eye </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-flag"></i> icon-flag </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-heart"></i> icon-heart </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-info"></i> icon-info </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-key"></i> icon-key </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-link"></i> icon-link </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-lock"></i> icon-lock </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-lock-open"></i> icon-lock-open </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-magnifier"></i> icon-magnifier </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-magnifier-add"></i> icon-magnifier-add </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-magnifier-remove"></i> icon-magnifier-remove </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-paper-clip"></i> icon-paper-clip </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-paper-plane"></i> icon-paper-plane </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-power"></i> icon-power </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-refresh"></i> icon-refresh </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-reload"></i> icon-reload </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-settings"></i> icon-settings </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-star"></i> icon-star </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-symble-female"></i> icon-symble-female </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-symbol-male"></i> icon-symbol-male </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-target"></i> icon-target </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-credit-card"></i> icon-credit-card </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-paypal"></i> icon-paypal </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-tumblr"></i> icon-social-tumblr </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-twitter"></i> icon-social-twitter </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-facebook"></i> icon-social-facebook </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-instagram"></i> icon-social-instagram </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-linkedin"></i> icon-social-linkedin </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-pintarest"></i> icon-social-pintarest </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-github"></i> icon-social-github </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-gplus"></i> icon-social-gplus </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-reddit"></i> icon-social-reddit </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-skype"></i> icon-social-skype </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-dribbble"></i> icon-social-dribbble </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-behance"></i> icon-social-behance </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-foursqare"></i> icon-social-foursqare </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-soundcloud"></i> icon-social-soundcloud </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-spotify"></i> icon-social-spotify </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-stumbleupon"></i> icon-social-stumbleupon </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-youtube"></i> icon-social-youtube </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="preview"> <i class="icon-social-dropbox"></i> icon-social-dropbox </div>
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
</body>

</html>