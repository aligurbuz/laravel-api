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
    <!-- Bootstrap responsive table CSS -->
    <link href="../assets/node_modules/tablesaw/dist/tablesaw.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Table Responsive</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Table Responsive</li>
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
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <h4 class="card-title">Kitchen Sink</h4>
                                <h5 class="card-subtitle">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</h5>
                                <div class="overflow-auto">
                                    <div class="tablesaw-bar tablesaw-mode-swipe tablesaw-all-cols-visible"><div class="tablesaw-sortable-switch tablesaw-bar-section"><label>Sort:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Rank ↑</span><select><option value="0_asc">
                                                Movie Title (A-Z)</option><option value="0_desc">
                                                Movie Title (Z-A)</option><option selected="" value="1_asc">Rank ↑</option><option value="1_desc">Rank ↓</option><option value="2_asc">Year
                                             ↑</option><option value="2_desc">Year
                                             ↓</option><option value="3_asc">
                                                Rating
                                             ↑</option><option value="3_desc">
                                                Rating
                                             ↓</option><option value="4_asc">Gross
                                             (A-Z)</option><option value="4_desc">Gross
                                             (Z-A)</option></select></span></label></div><div class="tablesaw-sortable-switch tablesaw-bar-section"><label>Sort:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Rank ↑</span><select><option value="0_asc">
                                                Movie Title (A-Z)</option><option value="0_desc">
                                                Movie Title (Z-A)</option><option selected="" value="1_asc">Rank ↑</option><option value="1_desc">Rank ↓</option><option value="2_asc">Year
                                             ↑</option><option value="2_desc">Year
                                             ↓</option><option value="3_asc">
                                                Rating
                                             ↑</option><option value="3_desc">
                                                Rating
                                             ↓</option><option value="4_asc">Gross
                                             (A-Z)</option><option value="4_desc">Gross
                                             (Z-A)</option></select></span></label></div><div class="tablesaw-modeswitch tablesaw-bar-section"><label><span class="abbreviated">Cols</span><span class="longform">Columns</span>:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Swipe</span><select><option value="stack">Stack</option><option selected="" value="swipe">Swipe</option><option value="columntoggle">Toggle</option></select></span></label></div><div class="tablesaw-modeswitch tablesaw-bar-section"><label><span class="abbreviated">Cols</span><span class="longform">Columns</span>:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Swipe</span><select><option value="stack">Stack</option><option selected="" value="swipe">Swipe</option><option value="columntoggle">Toggle</option></select></span></label></div><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right">Next column</a></div><div class="tablesaw-advance minimap" style="display: block;"><ul class="tablesaw-advance-dots"><li class="tablesaw-advance-dots-hide"><i></i></li><li><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li></ul></div><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right disabled">Next column</a></div><div class="tablesaw-advance minimap" style="display: block;"><ul class="tablesaw-advance-dots"><li><i></i></li><li><i></i></li><li><i></i></li><li><i></i></li><li><i></i></li></ul></div></div><table class="tablesaw table-bordered table-hover table no-wrap tablesaw-sortable tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" data-tablesaw-minimap="" data-tablesaw-mode-switch="" id="tablesaw-5502" style="">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="border tablesaw-sortable-head tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false" style="width: 315px;"><button class="tablesaw-sortable-btn"><button class="tablesaw-sortable-btn">
                                                Movie Title<span class="tablesaw-sortable-arrow"></span><span class="tablesaw-sortable-arrow"></span></button><span class="tablesaw-sortable-arrow"></span></button></th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="border tablesaw-sortable-head tablesaw-sortable-ascending" data-tablesaw-sortable-numeric=""><button class="tablesaw-sortable-btn"><button class="tablesaw-sortable-btn">Rank<span class="tablesaw-sortable-arrow"></span><span class="tablesaw-sortable-arrow"></span></button><span class="tablesaw-sortable-arrow"></span></button></th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-sortable-head" data-tablesaw-sortable-numeric=""><button class="tablesaw-sortable-btn"><button class="tablesaw-sortable-btn">Year
                                            <span class="tablesaw-sortable-arrow"></span><span class="tablesaw-sortable-arrow"></span></button><span class="tablesaw-sortable-arrow"></span></button></th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-sortable-head" data-tablesaw-sortable-numeric=""><button class="tablesaw-sortable-btn"><button class="tablesaw-sortable-btn">
                                                <abbr title="Rotten Tomato Rating">Rating</abbr>
                                            <span class="tablesaw-sortable-arrow"></span><span class="tablesaw-sortable-arrow"></span></button><span class="tablesaw-sortable-arrow"></span></button></th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="4" class="border tablesaw-sortable-head" data-tablesaw-sortable-numeric="false"><button class="tablesaw-sortable-btn"><button class="tablesaw-sortable-btn">Gross
                                            <span class="tablesaw-sortable-arrow"></span><span class="tablesaw-sortable-arrow"></span></button><span class="tablesaw-sortable-arrow"></span></button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Avatar</a></td>
                                            <td class="">1</td>
                                            <td class="">2009</td>
                                            <td class="">83%</td>
                                            <td class="">$2.7B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Titanic</a></td>
                                            <td class="">2</td>
                                            <td class="">1997</td>
                                            <td class="">88%</td>
                                            <td class="">$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">The Avengers</a>
                                            </td>
                                            <td class="">3</td>
                                            <td class="">2012</td>
                                            <td class="">92%</td>
                                            <td class="">$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Harry Potter and
                                                    the Deathly Hallows—Part 2</a></td>
                                            <td class="">4</td>
                                            <td class="">2011</td>
                                            <td class="">96%</td>
                                            <td class="">$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Frozen</a></td>
                                            <td class="">5</td>
                                            <td class="">2013</td>
                                            <td class="">89%</td>
                                            <td class="">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Iron Man 3</a>
                                            </td>
                                            <td class="">6</td>
                                            <td class="">2013</td>
                                            <td class="">78%</td>
                                            <td class="">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Transformers:
                                                    Dark of the Moon</a></td>
                                            <td class="">7</td>
                                            <td class="">2011</td>
                                            <td class="">36%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">The Lord of the
                                                    Rings: The Return of the King</a></td>
                                            <td class="">8</td>
                                            <td class="">2003</td>
                                            <td class="">95%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Skyfall</a></td>
                                            <td class="">9</td>
                                            <td class="">2012</td>
                                            <td class="">92%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Transformers:
                                                    Age of Extinction</a></td>
                                            <td class="">10</td>
                                            <td class="">2014</td>
                                            <td class="">18%</td>
                                            <td class="">$1.0B</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Column Toggle Table</h4>
                                <h5 class="card-subtitle">The Column Toggle Table allows the user to select which
                                    columns they want to be visible.</h5>
                                <div class="overflow-auto">
                                    <div class="tablesaw-bar tablesaw-mode-columntoggle"><div class="tablesaw-columntoggle-btnwrap tablesaw-advance"><a href="#tablesaw-3781-popup" class="btn tablesaw-btn btn-micro tablesaw-columntoggle-btn tablesaw-nav-btn down" data-popup-link=""><span>Columns</span></a><div class="tablesaw-columntoggle-popup" id="tablesaw-3781-popup"><div class="tablesaw-btn-group"><label><input type="checkbox" checked="">Rank</label><label><input type="checkbox" checked="">Year
                                            </label><label><input type="checkbox" checked="">
                                                Rating
                                            </label><label><input type="checkbox" checked="">Gross
                                            </label></div></div></div><div class="tablesaw-columntoggle-btnwrap tablesaw-advance"><a href="#tablesaw-3781-popup" class="btn tablesaw-btn btn-micro tablesaw-columntoggle-btn tablesaw-nav-btn down" data-popup-link=""><span>Columns</span></a><div class="tablesaw-columntoggle-popup" id="tablesaw-3781-popup"><div class="tablesaw-btn-group"><label><input type="checkbox" checked="">Rank</label><label><input type="checkbox" checked="">Year
                                            </label><label><input type="checkbox" checked="">
                                                Rating
                                            </label><label><input type="checkbox" checked="">Gross
                                            </label></div></div></div></div><table class="tablesaw table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="tablesaw-3781">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="border">
                                                Movie Title</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="border tablesaw-priority-3">Rank</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">Year
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">
                                                <abbr title="Rotten Tomato Rating">Rating</abbr>
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="4" class="border tablesaw-priority-4">Gross
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Avatar</a></td>
                                            <td class="tablesaw-priority-3">1</td>
                                            <td class="tablesaw-priority-2">2009</td>
                                            <td class="tablesaw-priority-1">83%</td>
                                            <td class="tablesaw-priority-4">$2.7B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Titanic</a></td>
                                            <td class="tablesaw-priority-3">2</td>
                                            <td class="tablesaw-priority-2">1997</td>
                                            <td class="tablesaw-priority-1">88%</td>
                                            <td class="tablesaw-priority-4">$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">The Avengers</a>
                                            </td>
                                            <td class="tablesaw-priority-3">3</td>
                                            <td class="tablesaw-priority-2">2012</td>
                                            <td class="tablesaw-priority-1">92%</td>
                                            <td class="tablesaw-priority-4">$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Harry Potter and
                                                    the Deathly Hallows—Part 2</a></td>
                                            <td class="tablesaw-priority-3">4</td>
                                            <td class="tablesaw-priority-2">2011</td>
                                            <td class="tablesaw-priority-1">96%</td>
                                            <td class="tablesaw-priority-4">$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Frozen</a></td>
                                            <td class="tablesaw-priority-3">5</td>
                                            <td class="tablesaw-priority-2">2013</td>
                                            <td class="tablesaw-priority-1">89%</td>
                                            <td class="tablesaw-priority-4">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Iron Man 3</a>
                                            </td>
                                            <td class="tablesaw-priority-3">6</td>
                                            <td class="tablesaw-priority-2">2013</td>
                                            <td class="tablesaw-priority-1">78%</td>
                                            <td class="tablesaw-priority-4">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Transformers:
                                                    Dark of the Moon</a></td>
                                            <td class="tablesaw-priority-3">7</td>
                                            <td class="tablesaw-priority-2">2011</td>
                                            <td class="tablesaw-priority-1">36%</td>
                                            <td class="tablesaw-priority-4">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">The Lord of the
                                                    Rings: The Return of the King</a></td>
                                            <td class="tablesaw-priority-3">8</td>
                                            <td class="tablesaw-priority-2">2003</td>
                                            <td class="tablesaw-priority-1">95%</td>
                                            <td class="tablesaw-priority-4">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Skyfall</a></td>
                                            <td class="tablesaw-priority-3">9</td>
                                            <td class="tablesaw-priority-2">2012</td>
                                            <td class="tablesaw-priority-1">92%</td>
                                            <td class="tablesaw-priority-4">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a class="link" href="javascript:void(0)">Transformers:
                                                    Age of Extinction</a></td>
                                            <td class="tablesaw-priority-3">10</td>
                                            <td class="tablesaw-priority-2">2014</td>
                                            <td class="tablesaw-priority-1">18%</td>
                                            <td class="tablesaw-priority-4">$1.0B</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Swipe Table</h4>
                                <h5 class="card-subtitle">The Column Swipe Table allows the user to select which columns
                                    they want to be visible.</h5>
                                <div class="overflow-auto">
                                    <div class="tablesaw-bar tablesaw-mode-swipe tablesaw-all-cols-visible"><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right">Next column</a></div><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right disabled">Next column</a></div></div><table class="tablesaw table-bordered table-hover table no-wrap tablesaw-swipe" data-tablesaw-mode="swipe" id="tablesaw-1852" style="">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="border tablesaw-swipe-cellpersist" style="width: 315px;">
                                                    Movie Title</th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="border">Rank</th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border">Year
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border">
                                                    <abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="4" class="border">Gross
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Avatar</a></td>
                                                <td class="">1</td>
                                                <td class="">2009</td>
                                                <td class="">83%</td>
                                                <td class="">$2.7B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Titanic</a></td>
                                                <td class="">2</td>
                                                <td class="">1997</td>
                                                <td class="">88%</td>
                                                <td class="">$2.1B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">The Avengers</a>
                                                </td>
                                                <td class="">3</td>
                                                <td class="">2012</td>
                                                <td class="">92%</td>
                                                <td class="">$1.5B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Harry Potter and
                                                        the Deathly Hallows—Part 2</a></td>
                                                <td class="">4</td>
                                                <td class="">2011</td>
                                                <td class="">96%</td>
                                                <td class="">$1.3B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Frozen</a></td>
                                                <td class="">5</td>
                                                <td class="">2013</td>
                                                <td class="">89%</td>
                                                <td class="">$1.2B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Iron Man 3</a>
                                                </td>
                                                <td class="">6</td>
                                                <td class="">2013</td>
                                                <td class="">78%</td>
                                                <td class="">$1.2B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Transformers:
                                                        Dark of the Moon</a></td>
                                                <td class="">7</td>
                                                <td class="">2011</td>
                                                <td class="">36%</td>
                                                <td class="">$1.1B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">The Lord of the
                                                        Rings: The Return of the King</a></td>
                                                <td class="">8</td>
                                                <td class="">2003</td>
                                                <td class="">95%</td>
                                                <td class="">$1.1B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Skyfall</a></td>
                                                <td class="">9</td>
                                                <td class="">2012</td>
                                                <td class="">92%</td>
                                                <td class="">$1.1B</td>
                                            </tr>
                                            <tr>
                                                <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a class="link" href="javascript:void(0)">Transformers:
                                                        Age of Extinction</a></td>
                                                <td class="">10</td>
                                                <td class="">2014</td>
                                                <td class="">18%</td>
                                                <td class="">$1.0B</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Checkall Table</h4>
                                <div class="overflow-auto">
                                    <div class="tablesaw-bar tablesaw-mode-stack"></div><table class="tablesaw no-wrap table-bordered table-hover table tablesaw-stack" data-tablesaw="" id="tablesaw-9924">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border"><label class="form-label"><input type="checkbox" data-tablesaw-checkall=""><span class="sr-only">
                                                            Check
                                                            All</span></label></th>
                                                <th scope="col" class="border">Movie Title <a href="#" data-tablesaw-checkall="#checkall-target">Toggle All
                                                        Checkboxes</a>
                                                    <a href="#" data-tablesaw-checkall="#checkall-target" data-tablesaw-checkall-checked="">Check All</a> <a href="#" data-tablesaw-checkall="#checkall-target" data-tablesaw-checkall-unchecked="">Uncheck
                                                        All</a>
                                                </th>
                                                <th scope="col" class="border">Rank</th>
                                                <th scope="col" class="border">Year</th>
                                                <th scope="col" class="border"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
                                                <th scope="col" class="border">Gross</th>
                                            </tr>
                                        </thead>
                                        <tbody id="checkall-target">
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Avatar</a>
                                                </td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">1</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2009</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">83%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$2.7B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Titanic</a>
                                                </td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">2</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">1997</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">88%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$2.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">The
                                                        Avengers</a></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">3</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2012</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">92%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.5B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Harry
                                                        Potter and the Deathly Hallows—Part 2</a></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">4</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2011</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">96%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.3B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Frozen</a>
                                                </td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">5</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2013</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">89%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.2B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Iron Man
                                                        3</a></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">6</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2013</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">78%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.2B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Transformers:
                                                        Dark
                                                        of the Moon</a></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">7</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2011</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">36%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">The
                                                        Lord of the Rings: The Return of the King</a></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">8</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2003</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">95%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Skyfall</a>
                                                </td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">9</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2012</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">92%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td>  <label class="form-label"><input type="checkbox"><span class="sr-only"> Select
                                                            Row</span></label></td>
                                                <td class="title">  <a href="javascript:void(0)">Transformers:
                                                        Age
                                                        of Extinction</a></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">10</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2014</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr></b> <span class="tablesaw-cell-content">18%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.0B</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Stack Table</h4>
                                <div class="overflow-auto">
                                    <div class="tablesaw-bar tablesaw-mode-stack"></div><table class="tablesaw no-wrap table-bordered table-hover table tablesaw-stack" data-tablesaw-mode="stack" id="tablesaw-8073">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-tablesaw-priority="persist" class="border">Movie Title
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="border">Rank</th>
                                                <th scope="col" data-tablesaw-priority="2" class="border">Year</th>
                                                <th scope="col" data-tablesaw-priority="1" class="border"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </th>
                                                <th scope="col" data-tablesaw-priority="4" class="border">Gross</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Avatar</a>
                                                </span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">1</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2009</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">83%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$2.7B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Titanic</a>
                                                </span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">2</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">1997</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">88%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$2.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">The
                                                        Avengers</a></span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">3</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2012</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">92%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.5B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Harry
                                                        Potter and the Deathly Hallows—Part 2</a></span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">4</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2011</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">96%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.3B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Frozen</a>
                                                </span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">5</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2013</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">89%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.2B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Iron Man
                                                        3</a></span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">6</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2013</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">78%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.2B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Transformers:
                                                        Dark
                                                        of the Moon</a></span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">7</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2011</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">36%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">The
                                                        Lord of the Rings: The Return of the King</a></span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">8</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2003</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">95%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Skyfall</a>
                                                </span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">9</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2012</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">92%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.1B</span></td>
                                            </tr>
                                            <tr>
                                                <td class="title"><b class="tablesaw-cell-label">Movie Title
                                                </b> <span class="tablesaw-cell-content"><a href="javascript:void(0)">Transformers:
                                                        Age
                                                        of Extinction</a></span></td>
                                                <td><b class="tablesaw-cell-label">Rank</b> <span class="tablesaw-cell-content">10</span></td>
                                                <td><b class="tablesaw-cell-label">Year</b> <span class="tablesaw-cell-content">2014</span></td>
                                                <td><b class="tablesaw-cell-label"><abbr title="Rotten Tomato Rating">Rating</abbr>
                                                </b> <span class="tablesaw-cell-content">18%</span></td>
                                                <td><b class="tablesaw-cell-label">Gross</b> <span class="tablesaw-cell-content">$1.0B</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mode Switch</h4>
                                <div class="overflow-auto">
                                    <div class="tablesaw-bar tablesaw-mode-swipe tablesaw-all-cols-visible"><div class="tablesaw-modeswitch tablesaw-bar-section"><label><span class="abbreviated">Cols</span><span class="longform">Columns</span>:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Swipe</span><select><option value="stack">Stack</option><option selected="" value="swipe">Swipe</option><option value="columntoggle">Toggle</option></select></span></label></div><div class="tablesaw-modeswitch tablesaw-bar-section"><label><span class="abbreviated">Cols</span><span class="longform">Columns</span>:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Swipe</span><select><option value="stack">Stack</option><option selected="" value="swipe">Swipe</option><option value="columntoggle">Toggle</option></select></span></label></div><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right">Next column</a></div><div class="tablesaw-advance minimap" style="display: block;"><ul class="tablesaw-advance-dots"><li class="tablesaw-advance-dots-hide"><i></i></li><li><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li></ul></div><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right disabled">Next column</a></div><div class="tablesaw-advance minimap" style="display: block;"><ul class="tablesaw-advance-dots"><li><i></i></li><li><i></i></li><li><i></i></li><li><i></i></li><li><i></i></li></ul></div></div><table class="tablesaw no-wrap table-bordered table-hover table tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-mode-switch="" data-tablesaw-minimap="" id="tablesaw-3085" style="">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="border tablesaw-swipe-cellpersist" style="width: 315px;">
                                                Movie Title</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="border">
                                                Rank</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border">Year
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="4" class="border">Gross
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Avatar</a>
                                            </td>
                                            <td class="">1</td>
                                            <td class="">2009</td>
                                            <td class="">83%</td>
                                            <td class="">$2.7B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Titanic</a>
                                            </td>
                                            <td class="">2</td>
                                            <td class="">1997</td>
                                            <td class="">88%</td>
                                            <td class="">$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">The
                                                    Avengers</a></td>
                                            <td class="">3</td>
                                            <td class="">2012</td>
                                            <td class="">92%</td>
                                            <td class="">$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Harry
                                                    Potter and the Deathly Hallows—Part 2</a></td>
                                            <td class="">4</td>
                                            <td class="">2011</td>
                                            <td class="">96%</td>
                                            <td class="">$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Frozen</a>
                                            </td>
                                            <td class="">5</td>
                                            <td class="">2013</td>
                                            <td class="">89%</td>
                                            <td class="">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Iron Man
                                                    3</a></td>
                                            <td class="">6</td>
                                            <td class="">2013</td>
                                            <td class="">78%</td>
                                            <td class="">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Transformers:
                                                    Dark
                                                    of the Moon</a></td>
                                            <td class="">7</td>
                                            <td class="">2011</td>
                                            <td class="">36%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">The
                                                    Lord of the Rings: The Return of the King</a></td>
                                            <td class="">8</td>
                                            <td class="">2003</td>
                                            <td class="">95%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Skyfall</a>
                                            </td>
                                            <td class="">9</td>
                                            <td class="">2012</td>
                                            <td class="">92%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Transformers:
                                                    Age
                                                    of Extinction</a></td>
                                            <td class="">10</td>
                                            <td class="">2014</td>
                                            <td class="">18%</td>
                                            <td class="">$1.0B</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Exclude columntoggle Mode</h4>
                                <div class="overflow-auto">
                                    <div class="tablesaw-bar tablesaw-mode-swipe tablesaw-all-cols-visible"><div class="tablesaw-modeswitch tablesaw-bar-section"><label><span class="abbreviated">Cols</span><span class="longform">Columns</span>:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Swipe</span><select><option value="stack">Stack</option><option selected="" value="swipe">Swipe</option></select></span></label></div><div class="tablesaw-modeswitch tablesaw-bar-section"><label><span class="abbreviated">Cols</span><span class="longform">Columns</span>:<span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Swipe</span><select><option value="stack">Stack</option><option selected="" value="swipe">Swipe</option></select></span></label></div><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right">Next column</a></div><div class="tablesaw-advance minimap" style="display: block;"><ul class="tablesaw-advance-dots"><li class="tablesaw-advance-dots-hide"><i></i></li><li><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li><li class="tablesaw-advance-dots-hide"><i></i></li></ul></div><div class="tablesaw-advance"><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled">Previous column</a><a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right disabled">Next column</a></div><div class="tablesaw-advance minimap" style="display: block;"><ul class="tablesaw-advance-dots"><li><i></i></li><li><i></i></li><li><i></i></li><li><i></i></li><li><i></i></li></ul></div></div><table class="tablesaw no-wrap table-bordered table-hover table tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-mode-switch="" data-tablesaw-minimap="" data-tablesaw-mode-exclude="columntoggle" id="tablesaw-9596" style="">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="border tablesaw-swipe-cellpersist" style="width: 315px;">
                                                Movie Title</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="border">Rank</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border">Year
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="4" class="border">Gross
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Avatar</a>
                                            </td>
                                            <td class="">1</td>
                                            <td class="">2009</td>
                                            <td class="">83%</td>
                                            <td class="">$2.7B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Titanic</a>
                                            </td>
                                            <td class="">2</td>
                                            <td class="">1997</td>
                                            <td class="">88%</td>
                                            <td class="">$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">The
                                                    Avengers</a></td>
                                            <td class="">3</td>
                                            <td class="">2012</td>
                                            <td class="">92%</td>
                                            <td class="">$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Harry
                                                    Potter and the Deathly Hallows—Part 2</a></td>
                                            <td class="">4</td>
                                            <td class="">2011</td>
                                            <td class="">96%</td>
                                            <td class="">$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Frozen</a>
                                            </td>
                                            <td class="">5</td>
                                            <td class="">2013</td>
                                            <td class="">89%</td>
                                            <td class="">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Iron Man
                                                    3</a></td>
                                            <td class="">6</td>
                                            <td class="">2013</td>
                                            <td class="">78%</td>
                                            <td class="">$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Transformers:
                                                    Dark of the Moon</a></td>
                                            <td class="">7</td>
                                            <td class="">2011</td>
                                            <td class="">36%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">The
                                                    Lord of the Rings: The Return of the King</a></td>
                                            <td class="">8</td>
                                            <td class="">2003</td>
                                            <td class="">95%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Skyfall</a>
                                            </td>
                                            <td class="">9</td>
                                            <td class="">2012</td>
                                            <td class="">92%</td>
                                            <td class="">$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title tablesaw-swipe-cellpersist" style="width: 315px;"><a href="javascript:void(0)">Transformers:
                                                    Age of Extinction</a></td>
                                            <td class="">10</td>
                                            <td class="">2014</td>
                                            <td class="">18%</td>
                                            <td class="">$1.0B</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <!-- jQuery peity -->
    <script src="../assets/node_modules/tablesaw/dist/tablesaw.jquery.js"></script>
    <script src="../assets/node_modules/tablesaw/dist/tablesaw-init.js"></script>
</body>

</html>