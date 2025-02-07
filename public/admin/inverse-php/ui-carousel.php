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
    <link href="../assets/node_modules/prism/prism.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Carousel</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Carousel</li>
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
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"> <img class="img-responsive" src="../assets/images/big/img1.jpg" alt="First slide"> </div>
                                        <div class="carousel-item"> <img class="img-responsive" src="../assets/images/big/img2.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-responsive" src="../assets/images/big/img3.jpg" alt="Third slide"> </div>
                                    </div>
                                </div>
                                <div class="highlight"> <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"carouselExampleSlidesOnly"</span> <span class="na">class=</span><span class="s">"carousel slide"</span> <span class="na">data-ride=</span><span class="s">"carousel"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-inner"</span> <span class="na">role=</span><span class="s">"listbox"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"d-block img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"First slide"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"d-block img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Second slide"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"d-block img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Third slide"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"> <img class="img-responsive" src="../assets/images/big/img4.jpg" alt="First slide"> </div>
                                        <div class="carousel-item"> <img class="img-responsive" src="../assets/images/big/img5.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-responsive" src="../assets/images/big/img6.jpg" alt="Third slide"> </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next" data-bs-target="#carouselExampleIndicators"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                                <div class="highlight"> <pre class="language-markup"><code class="language-markup" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-inner"</span> <span class="na">role=</span><span class="s">"listbox"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"d-block img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"First slide"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"d-block img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Second slide"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"d-block img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Third slide"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"carousel-control-prev"</span> <span class="na">href=</span><span class="s">"#carouselExampleIndicators"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-bs-slide=</span><span class="s">"prev"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"carousel-control-prev-icon"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"carousel-control-next"</span> <span class="na">href=</span><span class="s">"#carouselExampleIndicators"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-bs-slide=</span><span class="s">"next"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"carousel-control-next-icon"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="card-title">With indicators</h4>
                                        <h6 class="card-subtitle">You can also add the indicators to the carousel, alongside the controls, too.</h6>
                                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active"></li>
                                                <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"></li>
                                                <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-responsive" src="../assets/images/big/img3.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="../assets/images/big/img4.jpg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="../assets/images/big/img5.jpg" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators2">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-bs-slide="next" data-bs-target="#carouselExampleIndicators2">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">With captions</h4>
                                        <h6 class="card-subtitle">Add captions to your slides easily with the <code>.carousel-caption</code></h6>
                                        <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active"></li>
                                                <li data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1"></li>
                                                <li data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-responsive" src="../assets/images/big/img6.jpg" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">First title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="../assets/images/big/img3.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Second title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="../assets/images/big/img4.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Third title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators3">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-bs-slide="next" data-bs-target="#carouselExampleIndicators3">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
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
    <script src="../assets/node_modules/prism/prism.js"></script>
</body>

</html>