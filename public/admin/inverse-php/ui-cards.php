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
                        <h4 class="text-themecolor">Cards</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Cards</li>
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
                        <h4 class="d-inline">Card with Image <a href="#code1" data-bs-toggle="collapse"><i class="fa fa-code" data-bs-toggle="tooltip" title="Get code"></i></a></h4>
                        <p class="text-muted m-t-0">For the code click on above code icon</p>
                        <div id="code1" class="collapse">
                            <div class="highlight">
                                <pre>
    <code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code>
</pre>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../assets/images/big/img1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../assets/images/big/img2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../assets/images/big/img3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-responsive">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../assets/images/big/img4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        </div>
                        <!-- Row -->
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Content types</h4>
                        <p class="text-muted m-t-0">The building block of a card is the <code>.card</code> <code>.card-body</code> Use it whenever you need a padded section within a card.</p>
                        <div class="card">
                            <div class="card-body collapse show">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Titles, text, and links</h4>
                        <p class="text-muted m-t-0">Card titles are used by adding <code>.card-title</code> &amp; <code>.card-subtitle</code> for subtitle of card.</p>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="javascript:void(0)"class="card-link">Card link</a>
                                <a href="javascript:void(0)"class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Header and footer</h4>
                        <p class="text-muted m-t-0 font-12">Add an optional header and/or footer within a card. <code class="btn btn-sm" href="#code2" data-bs-toggle="collapse">HTML <i class="fa fa-code"></i></code></p>
                        <div id="code2" class="collapse highlight">
                            <pre class="prettyprint"><code class="language-html" data-lang="html">
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
                                Featured
                              <span class="nt">&lt;/div&gt;</span>
                              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
                                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
                                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
                              <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code>
                            </pre>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Header and footer</h4>
                        <p class="text-muted m-t-0 font-12">Add an optional header and/or footer within a card. <code class="btn btn-sm" href="#code3" data-bs-toggle="collapse">HTML <i class="fa fa-code"></i></code></p>
                        <div id="code3" class="collapse highlight">
                            <pre><code class="language-html" data-lang="html">
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-center"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
                                Featured
                              <span class="nt">&lt;/div&gt;</span>
                              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
                                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
                                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
                              <span class="nt">&lt;/div&gt;</span>
                              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-footer text-muted"</span><span class="nt">&gt;</span>
                                2 days ago
                              <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre>
                        </div>
                        <!-- Card -->
                        <div class="card text-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-info text-white">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Size Using grid markup</h4>
                        <p class="text-muted m-t-0 font-12">Using the grid, wrap cards in columns and rows as needed.<code>.col-1 to .col-12</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-success text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Text alignment</h4>
                        <p class="text-muted m-t-0 font-12">You can quickly change the text alignment<code>.text-center .text-end</code>.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-info text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-end">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-inverse">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Using utilities</h4>
                        <p class="text-muted m-t-0 font-12">Using the utility, you can give direct width class to card like<code>.w-25, w-50, w-75, w-100</code></p>
                        <div class="card w-75">
                            <div class="card-body">
                                <h3 class="card-title">This card has width of 75%</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-danger text-white">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card w-50">
                            <div class="card-body">
                                <h3 class="card-title">This card has width of 50%</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Size Using grid markup</h4>
                        <p class="text-muted m-t-0 font-12">Using the grid, wrap cards in columns and rows as needed.<code>.col-1 to .col-12</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0)">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-inverse">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0)">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-info text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Card styles</h4>
                        <p class="text-muted m-t-0 font-12">Cards include various options for customizing their backgrounds, borders, and color.<code>.card-primary info, warning, danger</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-dark">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-danger">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-success">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Card styles</h4>
                        <p class="text-muted m-t-0 font-12">Cards include various options for customizing their backgrounds, borders, and color.<code>.card-primary info, warning, danger</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-dark">
                            <div class="card-header bg-dark">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-primary text-white">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-inverse">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-inverse">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-danger">
                            <div class="card-header bg-danger">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-inverse">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-warning">
                            <div class="card-header bg-warning">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-inverse">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-success">
                            <div class="card-header bg-success">
                                <h4 class="m-b-0 text-white">Card Title</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0)"class="btn btn-inverse">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Card Groups</h4>
                        <p class="text-muted m-t-0 font-12">Use card groups to render cards as a single, attached element with equal width and height columns.</p>
                        <div class="card-group">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/big/img1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/big/img2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/big/img3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <h4 class="m-t-40">Card With action</h4>
                <p class="text-muted m-t-0 font-12">With action elements.</p>
                <div class="card">
                    <div class="card-header">
                        Title
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                            <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                            <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse show">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <!-- Row -->
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