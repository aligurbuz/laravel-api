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
    <link href="dist/css/pages/ui-bootstrap-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Typography</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Typography</li>
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
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Typography</h4>
                                        <h6 class="card-subtitle">Use tags <code>h1 to h6</code> for get desire heading.</h6>
                                        <h1>h1. Bootstrap heading</h1>
                                        <h2>h2. Bootstrap heading</h2>
                                        <h3>h3. Bootstrap heading</h3>
                                        <h4>h4. Bootstrap heading</h4>
                                        <h5>h5. Bootstrap heading</h5>
                                        <h6>h6. Bootstrap heading</h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Heading with subtitle</h4>
                                        <h6 class="card-subtitle">Use tags <code>h1 to h6</code> for get desire heading.</h6>
                                        <h1>Heading 1 <small>Sub-heading</small></h1>
                                        <h2>Heading 2 <small>Sub-heading</small></h2>
                                        <h3>Heading 3 <small>Sub-heading</small></h3>
                                        <h4>Heading 4 <small>Sub-heading</small></h4>
                                        <h5>Heading 5 <small>Sub-heading</small></h5>
                                        <h6>Heading 6 <small>Sub-heading</small></h6>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-5">
                                        <h4 class="card-title">Paragraph with justify</h4>
                                        <h6 class="card-subtitle">Use tags <code>text-justify</code> for get desire paragraph.</h6>
                                        <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <h4 class="card-title">Alignment text</h4>
                                        <h6 class="card-subtitle">Use tags <code>text-start, text-center, text-end</code> for get desire text.</h6>
                                        <p class="text-start">Left aligned text on all viewport sizes.</p>
                                        <p class="text-center">Center aligned text on all viewport sizes.</p>
                                        <p class="text-end">Right aligned text on all viewport sizes.</p>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">View port text</h4>
                                        <h6 class="card-subtitle">Use tags <code>text-sm-left, text-md-left, text-lg-left, text-xl-left </code> for get desire text.</h6>
                                        <p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
                                        <p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
                                        <p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
                                        <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Font weight and italics</h4>
                                        <h6 class="card-subtitle">Use tags <code>font-weight-bold, font-weight-normal, font-weight-italic</code> for get desire text.</h6>
                                        <p class="font-weight-bold">Bold text.</p>
                                        <p class="font-weight-normal">Normal weight text.</p>
                                        <p class="font-italic">Italic text.</p>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Text colors</h4>
                                        <h6 class="card-subtitle">Use tags below class for get desire text.</h6>
                                        <p class="text-muted">This is an example of muted text. Add class <code>text-muted</code></p>
                                        <p class="text-primary">This is an example of primary text. Add class <code>text-primary</code></p>
                                        <p class="text-success">This is an example of success text. Add class <code>text-success</code></p>
                                        <p class="text-info">This is an example of info text. Add class <code>text-info</code></p>
                                        <p class="text-warning">This is an example of warning text. Add class <code>text-warning</code></p>
                                        <p class="text-danger">This is an example of danger text. Add class <code>text-danger</code></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Address</h4>
                                        <h6 class="card-subtitle">Use <code>address</code> for get desire address.</h6>
                                        <address>
                                            <strong>Twitter, Inc.</strong>
                                            <br> 795 Folsom Ave, Suite 600
                                            <br> San Francisco, CA 94107
                                            <br>
                                            <abbr title="Phone">P:</abbr>(123) 456-7890
                                        </address>
                                        <address>
                                            <strong>George Belly</strong>
                                            <br>
                                            <a href="mailto:#">first.last@example.com</a>
                                        </address>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Blockquotes</h4>
                                        <h6 class="card-subtitle">Use <code>blockquote</code> for get desire address.</h6>
                                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</blockquote>
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <small>- Someone famous in <cite title="Source Title">Source Title</cite></small>
                                        </blockquote>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Ol Listing</h4>
                                        <h6 class="card-subtitle">Use tags <code>ol > li</code>for get desire ol list.</h6>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa </li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Ul Listing</h4>
                                        <h6 class="card-subtitle">Use tags <code>ul > li</code>for get desire ol list.</h6>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Description Text</h4>
                                        <h6 class="card-subtitle">Use tags <code>dl > dt</code>for get desire ol list.</h6>
                                        <dl>
                                            <dt>Standard Description List</dt>
                                            <dd>Description Text</dd>
                                            <dt>Description List Title</dt>
                                            <dd>Description List Text</dd>
                                        </dl>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Fancy Listing 1</h4>
                                        <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire ol list.</h6>
                                        <ul class="list-icons">
                                            <li><i class="ti-angle-right"></i> Lorem ipsum dolor sit amet</li>
                                            <li><i class="ti-angle-right"></i> Consectetur adipiscing elit</li>
                                            <li><i class="ti-angle-right"></i> Integer molestie lorem at massa </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Fancy Listing with href</h4>
                                        <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire ol list.</h6>
                                        <ul class="list-icons">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i> Lorem ipsum dolor sit amet</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i> Consectetur adipiscing elit</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i> Integer molestie lorem at massa </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Fancy Listing with href</h4>
                                        <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire ol list.</h6>
                                        <ul class="list-icons">
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i> Lorem ipsum dolor sit amet</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i> Consectetur adipiscing elit</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i> Integer molestie lorem at massa </a></li>
                                        </ul>
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