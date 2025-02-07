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
    <link href="dist/css/pages/stylish-tooltip.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Stylish Tooltip</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Stylish Tooltip</li>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Stylish Tooltips <a class="get-code" data-bs-toggle="collapse" href="#tt1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt1" aria-expanded="true"> <code>&lt;span class="mytooltip tooltip-effect-2"&gt;
                                    &lt;span class="tooltip-item"&gt;Euclid&lt;/span&gt;
                                      &lt;span class="tooltip-content clearfix"&gt;
                                      &lt;img src="../assets/images/tooltip/Euclid.png" /&gt;
                                      &lt;span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.&lt;/span&gt;
                                    &lt;/span&gt;
                                   &lt;/span&gt;</code> </div>
                                <p>Tesseract, finite but unbounded take root and flourish, <span class="mytooltip tooltip-effect-1">
                                        <span class="tooltip-item">Euclid</span> <span class="tooltip-content clearfix">
                                            <img src="../assets/images/tooltip/Euclid.png" alt="euclid" /><span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span> </span>
                                    </span> rogue laws of physics, star stuff harvesting star light.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 2 <a class="get-code" data-bs-toggle="collapse" href="#tt2" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt2" aria-expanded="true"> <code>&lt;span class="mytooltip tooltip-effect-2"&gt;
                                    &lt;span class="tooltip-item"&gt;Euclid&lt;/span&gt;
                                      &lt;span class="tooltip-content clearfix"&gt;
                                      &lt;img src="../assets/images/tooltip/Euclid.png" /&gt;
                                      &lt;span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.&lt;/span&gt;
                                    &lt;/span&gt;
                                   &lt;/span&gt;</code> </div>
                                <p>Tesseract, finite but unbounded <span class="mytooltip tooltip-effect-2">
                                    <span class="tooltip-item">Euclid</span> <span class="tooltip-content clearfix">
                                      <img src="../assets/images/tooltip/Euclid.png" />
                                      <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span> </span>
                                    </span> rogue laws of physics, star stuff harvesting star light.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 3 <a class="get-code" data-bs-toggle="collapse" href="#tt3" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt3" aria-expanded="true"> <code>&lt;span class="mytooltip tooltip-effect-3"&gt;
                                    &lt;span class="tooltip-item"&gt;Euclid&lt;/span&gt;
                                      &lt;span class="tooltip-content clearfix"&gt;
                                      &lt;img src="../assets/images/tooltip/Euclid.png" /&gt;
                                      &lt;span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.&lt;/span&gt;
                                    &lt;/span&gt;
                                   &lt;/span&gt;</code> </div>
                                <p>Tesseract, finite but unbounded take root and flourish, <span class="mytooltip tooltip-effect-3">
                                    <span class="tooltip-item">Euclid</span> <span class="tooltip-content clearfix">
                                      <img src="../assets/images/tooltip/Euclid.png" />
                                      <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span> </span>
                                    </span> rogue laws of physics, star stuff harvesting star light.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 4 <a class="get-code" data-bs-toggle="collapse" href="#tt4" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt4" aria-expanded="true"> <code>&lt;span class="mytooltip tooltip-effect-4"&gt;
                                    &lt;span class="tooltip-item"&gt;Euclid&lt;/span&gt;
                                      &lt;span class="tooltip-content clearfix"&gt;
                                      &lt;img src="../assets/images/tooltip/Euclid.png" /&gt;
                                      &lt;span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.&lt;/span&gt;
                                    &lt;/span&gt;
                                   &lt;/span&gt;</code> </div>
                                <p>Tesseract, finite but unbounded take <span class="mytooltip tooltip-effect-4">
                                    <span class="tooltip-item">Euclid</span> <span class="tooltip-content clearfix">
                                      <img src="../assets/images/tooltip/Euclid.png" />
                                      <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span> </span>
                                    </span> rogue laws of physics, star stuff harvesting star light.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 5 <a class="get-code" data-bs-toggle="collapse" href="#tt5" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt5" aria-expanded="true"> <code>&lt;span class="mytooltip tooltip-effect-5"&gt;
                                    &lt;span class="tooltip-item"&gt;Euclid&lt;/span&gt;
                                      &lt;span class="tooltip-content clearfix"&gt;
                                      &lt;img src="../assets/images/tooltip/Euclid.png" /&gt;
                                      &lt;span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.&lt;/span&gt;
                                    &lt;/span&gt;
                                   &lt;/span&gt;</code> </div>
                                <p>Tesseract, finite but unbounded take <span class="mytooltip tooltip-effect-5">
                                    <span class="tooltip-item">Euclid</span> <span class="tooltip-content clearfix">
                                      <img src="../assets/images/users/1.jpg" width="180"/><br/>
                                      <span class="tooltip-text p-t-10">Also known as Euclid of andria, was a Greek mathematician, often referred.</span> </span>
                                    </span> rogue laws of physics, star stuff harvesting star light.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 6 <a class="get-code" data-bs-toggle="collapse" href="#tt6" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt6" aria-expanded="true"> <code>&lt;a class="mytooltip tooltip-effect-6" href="javascript:void(0)"&gt;Photography&lt;span class="tooltip-content2"&gt;&lt;i class="fa fa-camera-retro"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;</code></div>
                                <p>rogue laws of physics, star stuff <a class="mytooltip tooltip-effect-6" href="javascript:void(0)">Home<span class="tooltip-content2"><i class="fa fa-home"></i></span></a> harvesting star light.of physics, star stuff harvesting </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 7 <a class="get-code" data-bs-toggle="collapse" href="#tt7" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt7" aria-expanded="true"> <code>&lt;a class="mytooltip tooltip-effect-7" href="javascript:void(0)"&gt;Photography&lt;span class="tooltip-content2"&gt;&lt;i class="fa fa-camera-retro"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;</code></div>
                                <p>rogue laws of physics, star stuff <a class="mytooltip tooltip-effect-7" href="javascript:void(0)">About me<span class="tooltip-content2"><i class="fa fa-user"></i></span></a> harvesting star light star light.of physics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 8 <a class="get-code" data-bs-toggle="collapse" href="#tt8" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt8" aria-expanded="true"> <code>&lt;a class="mytooltip tooltip-effect-7" href="javascript:void(0)"&gt;Photography&lt;span class="tooltip-content2"&gt;&lt;i class="fa fa-camera-retro"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;</code></div>
                                <p>rogue laws of physics, star stuff <a class="mytooltip tooltip-effect-8" href="javascript:void(0)">About me<span class="tooltip-content2"><i class="fa fa-user"></i></span></a> harvesting star light star light.of physics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 9 <a class="get-code" data-bs-toggle="collapse" href="#tt9" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt9" aria-expanded="true"> <code>&lt;a class="mytooltip tooltip-effect-7" href="javascript:void(0)"&gt;Photography&lt;span class="tooltip-content2"&gt;&lt;i class="fa fa-camera-retro"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;</code></div>
                                <p>rogue laws of physics, star stuff <a class="mytooltip tooltip-effect-9" href="javascript:void(0)">About me<span class="tooltip-content2"><i class="fa fa-user"></i></span></a> harvesting star light star light.of physics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 10 Bloated Tooltip<a class="get-code" data-bs-toggle="collapse" href="#tt10" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt10" aria-expanded="true"><code>&lt;a class="mytooltip" href="javascript:void(0)"&gt;
                            &lt;i class="fa fa-fw fa-car"&gt;&lt;/i&gt;Car 
                            &lt;span class="tooltip-content3">You can easily navigate the city by car.&lt;/span&gt;
                            &lt;/a&gt;
                      </code></div>
                                <p>Star stuff harvesting <a class="mytooltip" href="javascript:void(0)"><i class="fa fa-fw fa-car"></i> Car <span class="tooltip-content3">You can easily navigate the city by car.</span></a>star light, encyclopaedia galactica are creatures of the cosmos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bloated Tooltip<a class="get-code" data-bs-toggle="collapse" href="#tt10" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt10" aria-expanded="true"><code>&lt;a class="mytooltip" href="javascript:void(0)"&gt;
                            &lt;i class="fa fa-fw fa-car"&gt;&lt;/i&gt;Car 
                            &lt;span class="tooltip-content3">You can easily navigate the city by car.&lt;/span&gt;
                            &lt;/a&gt;
                      </code></div>
                                <p>Star stuff harvesting <a class="mytooltip" href="javascript:void(0)"><i class="fa fa-fw fa-car"></i> Car <span class="tooltip-content3">You can easily navigate the city by car.</span></a>star light, encyclopaedia galactica are creatures of the cosmos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 11 Bloated Tooltip<a class="get-code" data-bs-toggle="collapse" href="#tt11" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-bs-toggle="tooltip"></i></a></h4>
                                <div class="collapse m-t-15" id="tt11" aria-expanded="true"><code>&lt;span class="mytooltip tooltip-effect-1"&gt;
                            &lt;span class="tooltip-item2">Euclid&lt;/span&gt;
                            &lt;span class="tooltip-content4 clearfix"&gt;
                            &lt;span class="tooltip-text2"&gt;
                            &lt;strong&gt;Euclid&lt;/strong&gt;
                      </code></div>
                                <p>Tesseract, finite but unbounded take root and flourish, <span class="mytooltip tooltip-effect-1"><span class="tooltip-item2">Euclid</span><span class="tooltip-content4 clearfix"><span class="tooltip-text2"><strong>Euclid</strong>, also known as Euclid of Alexandria, was a Greek mathematician, often referred to as the "Father of Geometry". He was active in Alexandria during the reign of Ptolemy I. <a href="http://en.wikipedia.org/wiki/Euclid">Wikipedia</a></span></span>
                                    </span> rogue laws of physics, star stuff harvesting star light, encyclopaedia galactica are creatures of the cosmos the only home we've ever known ship of the imagination prime number <span class="mytooltip tooltip-effect-2"><span class="tooltip-item2">quasar</span><span class="tooltip-content4 clearfix"><span class="tooltip-text2"><strong>Quasars</strong> are believed to be powered by accretion of material into supermassive black holes in the nuclei of distant galaxies, making these luminous versions of the general... <a href="http://en.wikipedia.org/wiki/Quasar">Wikipedia</a></span></span>
                                    </span> courage of our questions.</p>
                                <p>Colonies. Jean-François Champollion, billions upon billions descended from astronomers the sky calls to us! Made in the interiors of collapsing stars, billions upon billions radio telescope paroxysm of global death not a sunrise but a galaxyrise, gathered by gravity permanence of the stars?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltip Style 12 Line Tooltip</h4> Tar light, encyclopaedia <a class="mytooltip" href="javascript:void(0)"> Line tooltip<span class="tooltip-content5"><span class="tooltip-text3"><span class="tooltip-inner2">Howdy, Ben!<br /> There are 13 unread messages in your inbox.</span></span></span></a> galactica are creatures of the cosmos.
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