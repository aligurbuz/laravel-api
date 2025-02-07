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
    <link href="../assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
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
                        <h4 class="text-themecolor">Table Bootstrap</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Table Bootstrap</li>
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
                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Bootstrap Simple Table</h4>
                                    <h6 class="card-subtitle">Simple table example</h6>
                                    <div class="overflow-auto">
                                        <table data-bs-toggle="table" data-height="250" data-mobile-responsive="true" class="table-striped table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Stars</th>
                                                    <th>Forks</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1"> bootstrap-table </td>
                                                    <td>526</td>
                                                    <td>122</td>
                                                    <td>An extended Bootstrap table with radio, checkbox, sort,
                                                        pagination,
                                                        and
                                                        other added features. (supports twitter bootstrap v2 and v3)
                                                    </td>
                                                </tr>
                                                <tr id="tr-id-2" class="tr-class-2">
                                                    <td id="td-id-2" class="td-class-2"> multiple-select </td>
                                                    <td>288</td>
                                                    <td>150</td>
                                                    <td>A jQuery plugin to select multiple elements with checkboxes :)
                                                    </td>
                                                </tr>
                                                <tr id="tr-id-3" class="tr-class-3">
                                                    <td id="td-id-3" class="td-class-3"> bootstrap-show-password </td>
                                                    <td>32</td>
                                                    <td>11</td>
                                                    <td>Show/hide password plugin for twitter bootstrap. </td>
                                                </tr>
                                                <tr id="tr-id-4" class="tr-class-4">
                                                    <td id="td-id-4" class="td-class-4"> blog </td>
                                                    <td>13</td>
                                                    <td>4</td>
                                                    <td>my blog</td>
                                                </tr>
                                                <tr id="tr-id-5" class="tr-class-5">
                                                    <td id="td-id-5" class="td-class-5"> scutech-redmine
                                                    </td>
                                                    <td>6</td>
                                                    <td>3</td>
                                                    <td>Redmine notification tools for chrome extension.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Table -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Bootstrap Data From js</h4>
                                    <h6 class="card-subtitle">Sample data From js</h6>
                                    <div class="bootstrap-table">
                                        <div class="fixed-table-toolbar"></div>
                                        <div class="fixed-table-container" style="padding-bottom: 0px;">
                                            <div class="fixed-table-header" style="display: none;">
                                                <table></table>
                                            </div>
                                            <div class="fixed-table-body">
                                                <div class="fixed-table-loading" style="top: 41.5px;">正在努力地載入資料，請稍候……
                                                </div>
                                                <div class="bootstrap-table"><div class="fixed-table-toolbar"></div><div class="fixed-table-container" style="padding-bottom: 0px;"><div class="fixed-table-header" style="display: none;"><table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 57.5px;">正在努力地載入資料，請稍候……</div><table id="smptable" class="table table-hover">
                                                    <thead><tr><th style="" data-field="name"><div class="th-inner ">
                                                                <div class="th-inner ">Name</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th><th style="" data-field="stargazers_count"><div class="th-inner ">
                                                                <div class="th-inner ">Stars</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th><th style="" data-field="forks_count"><div class="th-inner ">
                                                                <div class="th-inner ">Forks</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th><th style="" data-field="description"><div class="th-inner ">
                                                                <div class="th-inner ">Description</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th></tr></thead>
                                                    <tbody><tr data-index="0"> <td style="">bootstrap-table</td> <td style="">526</td> <td style="">122</td> <td style="">An extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. (supports twitter bootstrap v2 and v3) </td> </tr><tr data-index="1"> <td style="">multiple-select</td> <td style="">288</td> <td style="">150</td> <td style="">A jQuery plugin to select multiple elements with checkboxes :)</td> </tr><tr data-index="2"> <td style="">bootstrap-show-password</td> <td style="">32</td> <td style="">11</td> <td style="">Show/hide password plugin for twitter bootstrap.</td> </tr><tr data-index="3"> <td style="">blog</td> <td style="">13</td> <td style="">4</td> <td style="">my blog</td> </tr><tr data-index="4"> <td style="">scutech-redmine</td> <td style="">6</td> <td style="">3</td> <td style="">Redmine notification tools for chrome extension.</td> </tr></tbody>
                                                </table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div></div><div class="fixed-table-pagination" style="display: none;"></div></div><div class="clearfix"></div>
                                            </div>
                                            <div class="fixed-table-footer" style="display: none;">
                                                <table>
                                                    <tbody>
                                                        <tr></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fixed-table-pagination" style="display: none;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Table -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sortable table</h4>
                                    <h6 class="card-subtitle">Basic sortable table</h6>
                                    <div>
                                        <div class="bootstrap-table">
                                            <div class="fixed-table-toolbar"></div>
                                            <div class="fixed-table-container" style="height: 280px; padding-bottom: 40.5px;">
                                                <div class="fixed-table-header" style="margin-right: 0px;">
                                                    <table class="table table-hover" style="width: 1108px;">
                                                        <thead>
                                                            <tr>
                                                                <th style="" data-field="name">
                                                                    <div class="th-inner sortable both"> Name </div>
                                                                    <div class="fht-cell" style="width: 194.641px;">
                                                                    </div>
                                                                </th>
                                                                <th style="width: 100px; " data-field="stargazers_count">
                                                                    <div class="th-inner sortable both desc">
                                                                        Stars </div>
                                                                    <div class="fht-cell" style="width: 99px;"></div>
                                                                </th>
                                                                <th style="width: 100px; " data-field="forks_count">
                                                                    <div class="th-inner sortable both"> Forks
                                                                    </div>
                                                                    <div class="fht-cell" style="width: 99px;"></div>
                                                                </th>
                                                                <th style="" data-field="description">
                                                                    <div class="th-inner sortable both"> Description
                                                                    </div>
                                                                    <div class="fht-cell" style="width: 712.359px;">
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="fixed-table-body">
                                                    <div class="fixed-table-loading" style="top: 41.5px; display: none;">
                                                        正在努力地載入資料，請稍候……</div>
                                                    <table data-bs-toggle="table" data-url="https://api.github.com/users/wenzhixin/repos?type=owner&amp;sort=full_name&amp;direction=asc&amp;per_page=100&amp;page=1" data-sort-name="stargazers_count" data-height="280" data-mobile-responsive="true" data-sort-order="desc" class="table table-hover" style="margin-top: -40.5px;">
                                                        <thead>
                                                            <tr>
                                                                <th style="" data-field="name">
                                                                    <div class="th-inner sortable both"> Name </div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="width: 100px; " data-field="stargazers_count">
                                                                    <div class="th-inner sortable both desc">
                                                                        Stars </div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="width: 100px; " data-field="forks_count">
                                                                    <div class="th-inner sortable both"> Forks
                                                                    </div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="" data-field="description">
                                                                    <div class="th-inner sortable both"> Description
                                                                    </div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-index="0">
                                                                <td style="">bootstrap-table</td>
                                                                <td style="width: 100px; ">10868</td>
                                                                <td style="width: 100px; ">4384</td>
                                                                <td style="">An extended table to integration with some
                                                                    of
                                                                    the most widely used CSS frameworks. (Supports
                                                                    Bootstrap, Semantic UI, Bulma, Material Design,
                                                                    Foundation, Vue.js)</td>
                                                            </tr>
                                                            <tr data-index="1">
                                                                <td style="">bootstrap-table-examples</td>
                                                                <td style="width: 100px; ">2098</td>
                                                                <td style="width: 100px; ">1625</td>
                                                                <td style="">Bootstrap table examples</td>
                                                            </tr>
                                                            <tr data-index="2">
                                                                <td style="">multiple-select</td>
                                                                <td style="width: 100px; ">1827</td>
                                                                <td style="width: 100px; ">667</td>
                                                                <td style="">A jQuery plugin to select multiple elements
                                                                    with checkboxes :)</td>
                                                            </tr>
                                                            <tr data-index="3">
                                                                <td style="">bootstrap-show-password</td>
                                                                <td style="width: 100px; ">255</td>
                                                                <td style="width: 100px; ">99</td>
                                                                <td style="">Show/hide password plugin for twitter
                                                                    bootstrap.</td>
                                                            </tr>
                                                            <tr data-index="4">
                                                                <td style="">vue-bootstrap-table</td>
                                                                <td style="width: 100px; ">222</td>
                                                                <td style="width: 100px; ">60</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="5">
                                                                <td style="">bootstrap-table-fixed-columns</td>
                                                                <td style="width: 100px; ">127</td>
                                                                <td style="width: 100px; ">145</td>
                                                                <td style="">
                                                                    https://bootstrap-table.com/docs/extensions/fixed-columns/
                                                                </td>
                                                            </tr>
                                                            <tr data-index="6">
                                                                <td style="">blog</td>
                                                                <td style="width: 100px; ">46</td>
                                                                <td style="width: 100px; ">21</td>
                                                                <td style="">my blog</td>
                                                            </tr>
                                                            <tr data-index="7">
                                                                <td style="">vue-auto-form</td>
                                                                <td style="width: 100px; ">39</td>
                                                                <td style="width: 100px; ">7</td>
                                                                <td style="">A vue2 component that helpers to easily
                                                                    create
                                                                    basic forms with automatic insert and update events,
                                                                    and
                                                                    automatic reactive validation.</td>
                                                            </tr>
                                                            <tr data-index="8">
                                                                <td style="">font-awesome-zTree</td>
                                                                <td style="width: 100px; ">30</td>
                                                                <td style="width: 100px; ">10</td>
                                                                <td style="">Font Awesome theme for zTree.</td>
                                                            </tr>
                                                            <tr data-index="9">
                                                                <td style="">bootstrap-monthpicker</td>
                                                                <td style="width: 100px; ">29</td>
                                                                <td style="width: 100px; ">12</td>
                                                                <td style="">bootstrap3 月份选择器</td>
                                                            </tr>
                                                            <tr data-index="10">
                                                                <td style="">redmine-chrome</td>
                                                                <td style="width: 100px; ">27</td>
                                                                <td style="width: 100px; ">27</td>
                                                                <td style="">Redmine notification tools for chrome
                                                                    extension.</td>
                                                            </tr>
                                                            <tr data-index="11">
                                                                <td style="">side-menu</td>
                                                                <td style="width: 100px; ">22</td>
                                                                <td style="width: 100px; ">5</td>
                                                                <td style="">jQuery side menu (测边菜单)</td>
                                                            </tr>
                                                            <tr data-index="12">
                                                                <td style="">bootstrap-login</td>
                                                                <td style="width: 100px; ">19</td>
                                                                <td style="width: 100px; ">16</td>
                                                                <td style="">Login plugin form for Twitter Bootstrap
                                                                </td>
                                                            </tr>
                                                            <tr data-index="13">
                                                                <td style="">element-table</td>
                                                                <td style="width: 100px; ">18</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="">An extended table to integration with
                                                                    bootstrap-table and element-ui.</td>
                                                            </tr>
                                                            <tr data-index="14">
                                                                <td style="">bulletin</td>
                                                                <td style="width: 100px; ">13</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">A jQuery plugin to show bulletin for
                                                                    website.
                                                                </td>
                                                            </tr>
                                                            <tr data-index="15">
                                                                <td style="">bootstrap-group-select</td>
                                                                <td style="width: 100px; ">10</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">An extended Bootstrap Group Select with
                                                                    dropdown and group buttons features.</td>
                                                            </tr>
                                                            <tr data-index="16">
                                                                <td style="">baidu-translate-api</td>
                                                                <td style="width: 100px; ">10</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">nodejs 使用百度翻译API</td>
                                                            </tr>
                                                            <tr data-index="17">
                                                                <td style="">rest</td>
                                                                <td style="width: 100px; ">10</td>
                                                                <td style="width: 100px; ">6</td>
                                                                <td style="">Restful for jQuery</td>
                                                            </tr>
                                                            <tr data-index="18">
                                                                <td style="">vue-base64-upload</td>
                                                                <td style="width: 100px; ">9</td>
                                                                <td style="width: 100px; ">5</td>
                                                                <td style="">Vue Base64 Upload</td>
                                                            </tr>
                                                            <tr data-index="19">
                                                                <td style="">react-memory</td>
                                                                <td style="width: 100px; ">7</td>
                                                                <td style="width: 100px; ">6</td>
                                                                <td style="">基于 nodejs + bower + react 的文字记忆游戏。</td>
                                                            </tr>
                                                            <tr data-index="20">
                                                                <td style="">github-news-feed</td>
                                                                <td style="width: 100px; ">7</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">A Google Chrome extension to show your
                                                                    unread
                                                                    GitHub News Feed.</td>
                                                            </tr>
                                                            <tr data-index="21">
                                                                <td style="">tableExport.jquery.plugin</td>
                                                                <td style="width: 100px; ">6</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">jQuery plugin to export a html table to
                                                                    JSON,
                                                                    XML, CSV, TXT, SQL, Word, Excel, PNG, PDF</td>
                                                            </tr>
                                                            <tr data-index="22">
                                                                <td style="">bootstrap-menu</td>
                                                                <td style="width: 100px; ">6</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="">Simple menu for bootstrap.</td>
                                                            </tr>
                                                            <tr data-index="23">
                                                                <td style="">datagrid</td>
                                                                <td style="width: 100px; ">6</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">That's an extendable grid system developed
                                                                    on
                                                                    Backbone.js, Twitter Bootstrap, jQuery frameworks
                                                                    and
                                                                    Sea.js.</td>
                                                            </tr>
                                                            <tr data-index="24">
                                                                <td style="">frontend-dev-bookmarks</td>
                                                                <td style="width: 100px; ">5</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="">A huge list of frontend development
                                                                    resources I
                                                                    collected over time. Sorted from general knowledge
                                                                    at
                                                                    the top to concrete problems at the bottom.</td>
                                                            </tr>
                                                            <tr data-index="25">
                                                                <td style="">books</td>
                                                                <td style="width: 100px; ">5</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">我的藏书</td>
                                                            </tr>
                                                            <tr data-index="26">
                                                                <td style="">nodejs-express</td>
                                                                <td style="width: 100px; ">5</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">基于 nodejs 和 express 的基本 MVC 框架</td>
                                                            </tr>
                                                            <tr data-index="27">
                                                                <td style="">bootstrap-pagination</td>
                                                                <td style="width: 100px; ">5</td>
                                                                <td style="width: 100px; ">5</td>
                                                                <td style="">jQuery bootstrap pagination plugin</td>
                                                            </tr>
                                                            <tr data-index="28">
                                                                <td style="">fresh-bootstrap-table</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="width: 100px; ">7</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="29">
                                                                <td style="">my-pull-requests</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">My Pull Requests list</td>
                                                            </tr>
                                                            <tr data-index="30">
                                                                <td style="">repos</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Github repos.</td>
                                                            </tr>
                                                            <tr data-index="31">
                                                                <td style="">bootstrap-application-wizard</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="">Application Wizard for Bootstrap v2</td>
                                                            </tr>
                                                            <tr data-index="32">
                                                                <td style="">scutech-dbackup-login</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="">迪备登录</td>
                                                            </tr>
                                                            <tr data-index="33">
                                                                <td style="">hint-css</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">hint.css by jQuery</td>
                                                            </tr>
                                                            <tr data-index="34">
                                                                <td style="">live-and-learn</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="">活到老学到老</td>
                                                            </tr>
                                                            <tr data-index="35">
                                                                <td style="">SUI-Mobile</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">SUI Mobile
                                                                    (MSUI)是由阿里巴巴国际UED前端出品的移动端UI库，轻量精美
                                                                </td>
                                                            </tr>
                                                            <tr data-index="36">
                                                                <td style="">define-const.js</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Define JavaScript const(unwritable)
                                                                    variable.
                                                                </td>
                                                            </tr>
                                                            <tr data-index="37">
                                                                <td style="">simple-rest</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Lightweight PHP REST Framework</td>
                                                            </tr>
                                                            <tr data-index="38">
                                                                <td style="">chat</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">简单的在线聊天室</td>
                                                            </tr>
                                                            <tr data-index="39">
                                                                <td style="">element</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">A Vue.js 2.0 UI Toolkit for Web</td>
                                                            </tr>
                                                            <tr data-index="40">
                                                                <td style="">vue-file-change-upload</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">vue-file-change-upload is an ui component
                                                                    library base on Vue.js(2.x).</td>
                                                            </tr>
                                                            <tr data-index="41">
                                                                <td style="">redmine-themes</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="42">
                                                                <td style="">redmine-app</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">redmine chrome app</td>
                                                            </tr>
                                                            <tr data-index="43">
                                                                <td style="">bootstrap-sidenav</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Bootstrap official website style sidebar
                                                                    navigation plugin !</td>
                                                            </tr>
                                                            <tr data-index="44">
                                                                <td style="">github-contributors</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">Show Github Contributors</td>
                                                            </tr>
                                                            <tr data-index="45">
                                                                <td style="">travels</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">3</td>
                                                                <td style="">游遍广州</td>
                                                            </tr>
                                                            <tr data-index="46">
                                                                <td style="">vericode</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">jQuery 验证码</td>
                                                            </tr>
                                                            <tr data-index="47">
                                                                <td style="">weibo-attention</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">为新版新浪微博添加相互关注(互相关注)功能</td>
                                                            </tr>
                                                            <tr data-index="48">
                                                                <td style="">bootstrap-table-examples3</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Bootstrap Table Examples for Bootstrap v3
                                                                </td>
                                                            </tr>
                                                            <tr data-index="49">
                                                                <td style="">bootstrap-table-docs3</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Bootstrap Table Documentation for Bootstrap
                                                                    v3
                                                                </td>
                                                            </tr>
                                                            <tr data-index="50">
                                                                <td style="">my-books</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">My read books</td>
                                                            </tr>
                                                            <tr data-index="51">
                                                                <td style="">vue-study</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Study Vue.js</td>
                                                            </tr>
                                                            <tr data-index="52">
                                                                <td style="">growth-ebook</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="">Ebook of Growth Engineering: The Definitive
                                                                    Guide。全栈增长工程师指南</td>
                                                            </tr>
                                                            <tr data-index="53">
                                                                <td style="">colResizable</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">colResizable is a jQuery plugin to allow
                                                                    column
                                                                    resizing for any HTML table.</td>
                                                            </tr>
                                                            <tr data-index="54">
                                                                <td style="">my-shell</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">my linux shell</td>
                                                            </tr>
                                                            <tr data-index="55">
                                                                <td style="">livejs</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style=""> chrome extension for livejs.</td>
                                                            </tr>
                                                            <tr data-index="56">
                                                                <td style="">web-recipes</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">Web 开发秘方（只在 chrome 中测试）</td>
                                                            </tr>
                                                            <tr data-index="57">
                                                                <td style="">douban-book-info</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">买书豆瓣速查 —— chrome 浏览器插件</td>
                                                            </tr>
                                                            <tr data-index="58">
                                                                <td style="">nodejs-express-mongo</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">基于 nodejs, express 和 mongodb 的 MVC 框架</td>
                                                            </tr>
                                                            <tr data-index="59">
                                                                <td style="">navigate</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">jQuery 导航</td>
                                                            </tr>
                                                            <tr data-index="60">
                                                                <td style="">jsonrpc</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">jQuery JSONRPC Request</td>
                                                            </tr>
                                                            <tr data-index="61">
                                                                <td style="">phprpc-php</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="">hello, phprpc + php + mysql</td>
                                                            </tr>
                                                            <tr data-index="62">
                                                                <td style="">seajs-helper</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">my seajs app helper</td>
                                                            </tr>
                                                            <tr data-index="63">
                                                                <td style="">rest-tester</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">Tester for rest api</td>
                                                            </tr>
                                                            <tr data-index="64">
                                                                <td style="">scutech-todolist</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">todolist for chrome plugin.</td>
                                                            </tr>
                                                            <tr data-index="65">
                                                                <td style="">wenzhixin</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="66">
                                                                <td style="">bootstrap-table-blog</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">The blog of Bootstrap Table</td>
                                                            </tr>
                                                            <tr data-index="67">
                                                                <td style="">jsbin</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">Collaborative JavaScript Debugging App</td>
                                                            </tr>
                                                            <tr data-index="68">
                                                                <td style="">focus-tomato-issues</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="69">
                                                                <td style="">redmine_group_watchers</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">Redmine Plugin: Add watchers via group</td>
                                                            </tr>
                                                            <tr data-index="70">
                                                                <td style="">atom-git-code</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">Git Code Tools(Source, Blame and History)
                                                                </td>
                                                            </tr>
                                                            <tr data-index="71">
                                                                <td style="">cordova-navigation</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">一个提供调用原生地图的Cordova导航插件</td>
                                                            </tr>
                                                            <tr data-index="72">
                                                                <td style="">develop-problems</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">那些开发走过的坑</td>
                                                            </tr>
                                                            <tr data-index="73">
                                                                <td style="">wenzhixin.github.io</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">1</td>
                                                                <td style="">文志新的博客</td>
                                                            </tr>
                                                            <tr data-index="74">
                                                                <td style="">markdown-editor</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">4</td>
                                                                <td style="">Live (Github-flavored) Markdown Editor</td>
                                                            </tr>
                                                            <tr data-index="75">
                                                                <td style="">together</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="76">
                                                                <td style="">gulp-concat-script</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">Parses js files, finds `document.write('
                                                                    <script src="*.js"></script>')` directive and
                                                                    includes these
                                                                    files.</td>
                                                            </tr>
                                                            <tr data-index="77">
                                                                <td style="">ubuntu-node-startup</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">Startup script for Ubuntu systems for
                                                                    running
                                                                    node app when rebooting from /etc/init conf
                                                                    (Upstart).
                                                                </td>
                                                            </tr>
                                                            <tr data-index="78">
                                                                <td style="">wrap-title</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">jquery plugin to wrap html title</td>
                                                            </tr>
                                                            <tr data-index="79">
                                                                <td style="">plugin2module</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">This is a tool for convert jquery plugin to
                                                                    seajs/spmjs module.</td>
                                                            </tr>
                                                            <tr data-index="80">
                                                                <td style="">filltext</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">"泰囧"台词生成器</td>
                                                            </tr>
                                                            <tr data-index="81">
                                                                <td style="">imagebox</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">2</td>
                                                                <td style="">图片查看弹出框</td>
                                                            </tr>
                                                            <tr data-index="82">
                                                                <td style="">node_util</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="width: 100px; ">0</td>
                                                                <td style="">nodejs util</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fixed-table-footer" style="display: none;">
                                                    <table>
                                                        <tbody>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fixed-table-pagination" style="display: none;"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sortable table</h4>
                                    <h6 class="card-subtitle">Basic sortable table</h6>
                                    <div class="bootstrap-table">
                                        <div class="fixed-table-toolbar d-flex justify-content-end">
                                            <div class="columns columns-right btn-group pull-right">
                                                <div class="keep-open btn-group">
                                                    <button type="button" aria-label="columns" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                        <i class="glyphicon fas fa-filter icon-th"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field0" value="0" checked="checked"> Cell0</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field1" value="1" checked="checked"> Cell1</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field2" value="2" checked="checked"> Cell2</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field3" value="3" checked="checked"> Cell3</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field4" value="4" checked="checked"> Cell4</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field5" value="5" checked="checked"> Cell5</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field6" value="6" checked="checked"> Cell6</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field7" value="7" checked="checked"> Cell7</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field8" value="8" checked="checked"> Cell8</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field9" value="9" checked="checked"> Cell9</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field10" value="10" checked="checked"> Cell10</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field11" value="11" checked="checked"> Cell11</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field12" value="12" checked="checked"> Cell12</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field13" value="13" checked="checked"> Cell13</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field14" value="14" checked="checked"> Cell14</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field15" value="15" checked="checked"> Cell15</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field16" value="16" checked="checked"> Cell16</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field17" value="17" checked="checked"> Cell17</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field18" value="18" checked="checked"> Cell18</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field19" value="19" checked="checked"> Cell19</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field20" value="20" checked="checked"> Cell20</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field21" value="21" checked="checked"> Cell21</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field22" value="22" checked="checked"> Cell22</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field23" value="23" checked="checked"> Cell23</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field24" value="24" checked="checked"> Cell24</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field25" value="25" checked="checked"> Cell25</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field26" value="26" checked="checked"> Cell26</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field27" value="27" checked="checked"> Cell27</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field28" value="28" checked="checked"> Cell28</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field29" value="29" checked="checked"> Cell29</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field30" value="30" checked="checked"> Cell30</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field31" value="31" checked="checked"> Cell31</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field32" value="32" checked="checked"> Cell32</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field33" value="33" checked="checked"> Cell33</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field34" value="34" checked="checked"> Cell34</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field35" value="35" checked="checked"> Cell35</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field36" value="36" checked="checked"> Cell36</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field37" value="37" checked="checked"> Cell37</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field38" value="38" checked="checked"> Cell38</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field39" value="39" checked="checked"> Cell39</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field40" value="40" checked="checked"> Cell40</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field41" value="41" checked="checked"> Cell41</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field42" value="42" checked="checked"> Cell42</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field43" value="43" checked="checked"> Cell43</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field44" value="44" checked="checked"> Cell44</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field45" value="45" checked="checked"> Cell45</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field46" value="46" checked="checked"> Cell46</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field47" value="47" checked="checked"> Cell47</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field48" value="48" checked="checked"> Cell48</label></li>
                                                        <li role="menuitem" class="dropdown-item"><label class="px-0"><input type="checkbox" data-field="field49" value="49" checked="checked"> Cell49</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fixed-table-container" style="height: 244.906px;">
                                            <div class="fixed-table-header" style="margin-right: 0px;">
                                            </div>
                                            <div class="fixed-table-body">

                                                <div class="bootstrap-table"><div class="fixed-table-toolbar"></div><div class="fixed-table-container" style="height: 300px; padding-bottom: 56.5px;"><div class="fixed-table-header" style="margin-right: 0px;"><table class="table table-hover" style="width: 4140.92px;"><thead><tr><th class="detail" rowspan="1"><div class="fht-cell" style="width: 30.5px;"></div></th><th class="detail" style="" rowspan="1" data-field="field0"><div class="th-inner sortable both">Cell0</div><div class="fht-cell" style="width: 30.5px;"></div></th><th style="" data-field="field1"><div class="th-inner sortable both">Cell1</div><div class="fht-cell" style="width: 69.7656px;"></div></th><th style="" data-field="field2"><div class="th-inner sortable both">Cell2</div><div class="fht-cell" style="width: 72.9375px;"></div></th><th style="" data-field="field3"><div class="th-inner sortable both">Cell3</div><div class="fht-cell" style="width: 73.1719px;"></div></th><th style="" data-field="field4"><div class="th-inner sortable both">Cell4</div><div class="fht-cell" style="width: 73.9219px;"></div></th><th style="" data-field="field5"><div class="th-inner sortable both">Cell5</div><div class="fht-cell" style="width: 73.8125px;"></div></th><th style="" data-field="field6"><div class="th-inner sortable both">Cell6</div><div class="fht-cell" style="width: 73.8438px;"></div></th><th style="" data-field="field7"><div class="th-inner sortable both">Cell7</div><div class="fht-cell" style="width: 72.7031px;"></div></th><th style="" data-field="field8"><div class="th-inner sortable both">Cell8</div><div class="fht-cell" style="width: 73.7969px;"></div></th><th style="" data-field="field9"><div class="th-inner sortable both">Cell9</div><div class="fht-cell" style="width: 73.75px;"></div></th><th style="" data-field="field10"><div class="th-inner sortable both">Cell10</div><div class="fht-cell" style="width: 78.7344px;"></div></th><th style="" data-field="field11"><div class="th-inner sortable both">Cell11</div><div class="fht-cell" style="width: 74.6562px;"></div></th><th style="" data-field="field12"><div class="th-inner sortable both">Cell12</div><div class="fht-cell" style="width: 77.8438px;"></div></th><th style="" data-field="field13"><div class="th-inner sortable both">Cell13</div><div class="fht-cell" style="width: 78.0781px;"></div></th><th style="" data-field="field14"><div class="th-inner sortable both">Cell14</div><div class="fht-cell" style="width: 78.8125px;"></div></th><th style="" data-field="field15"><div class="th-inner sortable both">Cell15</div><div class="fht-cell" style="width: 78.7031px;"></div></th><th style="" data-field="field16"><div class="th-inner sortable both">Cell16</div><div class="fht-cell" style="width: 78.75px;"></div></th><th style="" data-field="field17"><div class="th-inner sortable both">Cell17</div><div class="fht-cell" style="width: 77.5938px;"></div></th><th style="" data-field="field18"><div class="th-inner sortable both">Cell18</div><div class="fht-cell" style="width: 78.6875px;"></div></th><th style="" data-field="field19"><div class="th-inner sortable both">Cell19</div><div class="fht-cell" style="width: 78.6562px;"></div></th><th style="" data-field="field20"><div class="th-inner sortable both">Cell20</div><div class="fht-cell" style="width: 81.9062px;"></div></th><th style="" data-field="field21"><div class="th-inner sortable both">Cell21</div><div class="fht-cell" style="width: 77.8438px;"></div></th><th style="" data-field="field22"><div class="th-inner sortable both">Cell22</div><div class="fht-cell" style="width: 81.0156px;"></div></th><th style="" data-field="field23"><div class="th-inner sortable both">Cell23</div><div class="fht-cell" style="width: 81.25px;"></div></th><th style="" data-field="field24"><div class="th-inner sortable both">Cell24</div><div class="fht-cell" style="width: 82px;"></div></th><th style="" data-field="field25"><div class="th-inner sortable both">Cell25</div><div class="fht-cell" style="width: 81.8906px;"></div></th><th style="" data-field="field26"><div class="th-inner sortable both">Cell26</div><div class="fht-cell" style="width: 81.9219px;"></div></th><th style="" data-field="field27"><div class="th-inner sortable both">Cell27</div><div class="fht-cell" style="width: 80.7812px;"></div></th><th style="" data-field="field28"><div class="th-inner sortable both">Cell28</div><div class="fht-cell" style="width: 81.875px;"></div></th><th style="" data-field="field29"><div class="th-inner sortable both">Cell29</div><div class="fht-cell" style="width: 81.8281px;"></div></th><th style="" data-field="field30"><div class="th-inner sortable both">Cell30</div><div class="fht-cell" style="width: 82.1562px;"></div></th><th style="" data-field="field31"><div class="th-inner sortable both">Cell31</div><div class="fht-cell" style="width: 78.0781px;"></div></th><th style="" data-field="field32"><div class="th-inner sortable both">Cell32</div><div class="fht-cell" style="width: 81.25px;"></div></th><th style="" data-field="field33"><div class="th-inner sortable both">Cell33</div><div class="fht-cell" style="width: 81.4844px;"></div></th><th style="" data-field="field34"><div class="th-inner sortable both">Cell34</div><div class="fht-cell" style="width: 82.2344px;"></div></th><th style="" data-field="field35"><div class="th-inner sortable both">Cell35</div><div class="fht-cell" style="width: 82.125px;"></div></th><th style="" data-field="field36"><div class="th-inner sortable both">Cell36</div><div class="fht-cell" style="width: 82.1562px;"></div></th><th style="" data-field="field37"><div class="th-inner sortable both">Cell37</div><div class="fht-cell" style="width: 81.0156px;"></div></th><th style="" data-field="field38"><div class="th-inner sortable both">Cell38</div><div class="fht-cell" style="width: 82.1094px;"></div></th><th style="" data-field="field39"><div class="th-inner sortable both">Cell39</div><div class="fht-cell" style="width: 82.0625px;"></div></th><th style="" data-field="field40"><div class="th-inner sortable both">Cell40</div><div class="fht-cell" style="width: 82.8906px;"></div></th><th style="" data-field="field41"><div class="th-inner sortable both">Cell41</div><div class="fht-cell" style="width: 78.8125px;"></div></th><th style="" data-field="field42"><div class="th-inner sortable both">Cell42</div><div class="fht-cell" style="width: 82px;"></div></th><th style="" data-field="field43"><div class="th-inner sortable both">Cell43</div><div class="fht-cell" style="width: 82.2344px;"></div></th><th style="" data-field="field44"><div class="th-inner sortable both">Cell44</div><div class="fht-cell" style="width: 82.9688px;"></div></th><th style="" data-field="field45"><div class="th-inner sortable both">Cell45</div><div class="fht-cell" style="width: 82.8594px;"></div></th><th style="" data-field="field46"><div class="th-inner sortable both">Cell46</div><div class="fht-cell" style="width: 82.9062px;"></div></th><th style="" data-field="field47"><div class="th-inner sortable both">Cell47</div><div class="fht-cell" style="width: 81.75px;"></div></th><th style="" data-field="field48"><div class="th-inner sortable both">Cell48</div><div class="fht-cell" style="width: 82.8438px;"></div></th><th style="" data-field="field49"><div class="th-inner sortable both">Cell49</div><div class="fht-cell" style="width: 82.8125px;"></div></th><th style="" data-field="field49"><div class="th-inner ">
                                                                <div class="th-inner sortable both">Cell49</div>
                                                                <div class="fht-cell" style="width: 82.8125px;"></div>
                                                            </div><div class="fht-cell" style="width: 82.8125px;"></div></th></tr></thead></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 57.5px;">正在努力地載入資料，請稍候……</div><table id="clmtable" data-show-columns="false" data-height="300" class="table table-hover" style="margin-top: -56.5px;">
                                                    <thead><tr><th class="detail" rowspan="1"><div class="fht-cell"></div></th><th class="detail" style="" rowspan="1" data-field="field0"><div class="th-inner sortable both">Cell0</div><div class="fht-cell"></div></th><th style="" data-field="field1"><div class="th-inner sortable both">Cell1</div><div class="fht-cell"></div></th><th style="" data-field="field2"><div class="th-inner sortable both">Cell2</div><div class="fht-cell"></div></th><th style="" data-field="field3"><div class="th-inner sortable both">Cell3</div><div class="fht-cell"></div></th><th style="" data-field="field4"><div class="th-inner sortable both">Cell4</div><div class="fht-cell"></div></th><th style="" data-field="field5"><div class="th-inner sortable both">Cell5</div><div class="fht-cell"></div></th><th style="" data-field="field6"><div class="th-inner sortable both">Cell6</div><div class="fht-cell"></div></th><th style="" data-field="field7"><div class="th-inner sortable both">Cell7</div><div class="fht-cell"></div></th><th style="" data-field="field8"><div class="th-inner sortable both">Cell8</div><div class="fht-cell"></div></th><th style="" data-field="field9"><div class="th-inner sortable both">Cell9</div><div class="fht-cell"></div></th><th style="" data-field="field10"><div class="th-inner sortable both">Cell10</div><div class="fht-cell"></div></th><th style="" data-field="field11"><div class="th-inner sortable both">Cell11</div><div class="fht-cell"></div></th><th style="" data-field="field12"><div class="th-inner sortable both">Cell12</div><div class="fht-cell"></div></th><th style="" data-field="field13"><div class="th-inner sortable both">Cell13</div><div class="fht-cell"></div></th><th style="" data-field="field14"><div class="th-inner sortable both">Cell14</div><div class="fht-cell"></div></th><th style="" data-field="field15"><div class="th-inner sortable both">Cell15</div><div class="fht-cell"></div></th><th style="" data-field="field16"><div class="th-inner sortable both">Cell16</div><div class="fht-cell"></div></th><th style="" data-field="field17"><div class="th-inner sortable both">Cell17</div><div class="fht-cell"></div></th><th style="" data-field="field18"><div class="th-inner sortable both">Cell18</div><div class="fht-cell"></div></th><th style="" data-field="field19"><div class="th-inner sortable both">Cell19</div><div class="fht-cell"></div></th><th style="" data-field="field20"><div class="th-inner sortable both">Cell20</div><div class="fht-cell"></div></th><th style="" data-field="field21"><div class="th-inner sortable both">Cell21</div><div class="fht-cell"></div></th><th style="" data-field="field22"><div class="th-inner sortable both">Cell22</div><div class="fht-cell"></div></th><th style="" data-field="field23"><div class="th-inner sortable both">Cell23</div><div class="fht-cell"></div></th><th style="" data-field="field24"><div class="th-inner sortable both">Cell24</div><div class="fht-cell"></div></th><th style="" data-field="field25"><div class="th-inner sortable both">Cell25</div><div class="fht-cell"></div></th><th style="" data-field="field26"><div class="th-inner sortable both">Cell26</div><div class="fht-cell"></div></th><th style="" data-field="field27"><div class="th-inner sortable both">Cell27</div><div class="fht-cell"></div></th><th style="" data-field="field28"><div class="th-inner sortable both">Cell28</div><div class="fht-cell"></div></th><th style="" data-field="field29"><div class="th-inner sortable both">Cell29</div><div class="fht-cell"></div></th><th style="" data-field="field30"><div class="th-inner sortable both">Cell30</div><div class="fht-cell"></div></th><th style="" data-field="field31"><div class="th-inner sortable both">Cell31</div><div class="fht-cell"></div></th><th style="" data-field="field32"><div class="th-inner sortable both">Cell32</div><div class="fht-cell"></div></th><th style="" data-field="field33"><div class="th-inner sortable both">Cell33</div><div class="fht-cell"></div></th><th style="" data-field="field34"><div class="th-inner sortable both">Cell34</div><div class="fht-cell"></div></th><th style="" data-field="field35"><div class="th-inner sortable both">Cell35</div><div class="fht-cell"></div></th><th style="" data-field="field36"><div class="th-inner sortable both">Cell36</div><div class="fht-cell"></div></th><th style="" data-field="field37"><div class="th-inner sortable both">Cell37</div><div class="fht-cell"></div></th><th style="" data-field="field38"><div class="th-inner sortable both">Cell38</div><div class="fht-cell"></div></th><th style="" data-field="field39"><div class="th-inner sortable both">Cell39</div><div class="fht-cell"></div></th><th style="" data-field="field40"><div class="th-inner sortable both">Cell40</div><div class="fht-cell"></div></th><th style="" data-field="field41"><div class="th-inner sortable both">Cell41</div><div class="fht-cell"></div></th><th style="" data-field="field42"><div class="th-inner sortable both">Cell42</div><div class="fht-cell"></div></th><th style="" data-field="field43"><div class="th-inner sortable both">Cell43</div><div class="fht-cell"></div></th><th style="" data-field="field44"><div class="th-inner sortable both">Cell44</div><div class="fht-cell"></div></th><th style="" data-field="field45"><div class="th-inner sortable both">Cell45</div><div class="fht-cell"></div></th><th style="" data-field="field46"><div class="th-inner sortable both">Cell46</div><div class="fht-cell"></div></th><th style="" data-field="field47"><div class="th-inner sortable both">Cell47</div><div class="fht-cell"></div></th><th style="" data-field="field48"><div class="th-inner sortable both">Cell48</div><div class="fht-cell"></div></th><th style="" data-field="field49"><div class="th-inner sortable both">Cell49</div><div class="fht-cell"></div></th><th style="" data-field="field49"><div class="th-inner ">
                                                                <div class="th-inner sortable both">Cell49</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th></tr></thead>
                                                    <tbody><tr data-index="0"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-0-0</td> <td style="">Row-0-1</td> <td style="">Row-0-2</td> <td style="">Row-0-3</td> <td style="">Row-0-4</td> <td style="">Row-0-5</td> <td style="">Row-0-6</td> <td style="">Row-0-7</td> <td style="">Row-0-8</td> <td style="">Row-0-9</td> <td style="">Row-0-10</td> <td style="">Row-0-11</td> <td style="">Row-0-12</td> <td style="">Row-0-13</td> <td style="">Row-0-14</td> <td style="">Row-0-15</td> <td style="">Row-0-16</td> <td style="">Row-0-17</td> <td style="">Row-0-18</td> <td style="">Row-0-19</td> <td style="">Row-0-20</td> <td style="">Row-0-21</td> <td style="">Row-0-22</td> <td style="">Row-0-23</td> <td style="">Row-0-24</td> <td style="">Row-0-25</td> <td style="">Row-0-26</td> <td style="">Row-0-27</td> <td style="">Row-0-28</td> <td style="">Row-0-29</td> <td style="">Row-0-30</td> <td style="">Row-0-31</td> <td style="">Row-0-32</td> <td style="">Row-0-33</td> <td style="">Row-0-34</td> <td style="">Row-0-35</td> <td style="">Row-0-36</td> <td style="">Row-0-37</td> <td style="">Row-0-38</td> <td style="">Row-0-39</td> <td style="">Row-0-40</td> <td style="">Row-0-41</td> <td style="">Row-0-42</td> <td style="">Row-0-43</td> <td style="">Row-0-44</td> <td style="">Row-0-45</td> <td style="">Row-0-46</td> <td style="">Row-0-47</td> <td style="">Row-0-48</td> <td style="">Row-0-49</td> <td style="">Row-0-49</td> </tr><tr data-index="1"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-1-0</td> <td style="">Row-1-1</td> <td style="">Row-1-2</td> <td style="">Row-1-3</td> <td style="">Row-1-4</td> <td style="">Row-1-5</td> <td style="">Row-1-6</td> <td style="">Row-1-7</td> <td style="">Row-1-8</td> <td style="">Row-1-9</td> <td style="">Row-1-10</td> <td style="">Row-1-11</td> <td style="">Row-1-12</td> <td style="">Row-1-13</td> <td style="">Row-1-14</td> <td style="">Row-1-15</td> <td style="">Row-1-16</td> <td style="">Row-1-17</td> <td style="">Row-1-18</td> <td style="">Row-1-19</td> <td style="">Row-1-20</td> <td style="">Row-1-21</td> <td style="">Row-1-22</td> <td style="">Row-1-23</td> <td style="">Row-1-24</td> <td style="">Row-1-25</td> <td style="">Row-1-26</td> <td style="">Row-1-27</td> <td style="">Row-1-28</td> <td style="">Row-1-29</td> <td style="">Row-1-30</td> <td style="">Row-1-31</td> <td style="">Row-1-32</td> <td style="">Row-1-33</td> <td style="">Row-1-34</td> <td style="">Row-1-35</td> <td style="">Row-1-36</td> <td style="">Row-1-37</td> <td style="">Row-1-38</td> <td style="">Row-1-39</td> <td style="">Row-1-40</td> <td style="">Row-1-41</td> <td style="">Row-1-42</td> <td style="">Row-1-43</td> <td style="">Row-1-44</td> <td style="">Row-1-45</td> <td style="">Row-1-46</td> <td style="">Row-1-47</td> <td style="">Row-1-48</td> <td style="">Row-1-49</td> <td style="">Row-1-49</td> </tr><tr data-index="2"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-2-0</td> <td style="">Row-2-1</td> <td style="">Row-2-2</td> <td style="">Row-2-3</td> <td style="">Row-2-4</td> <td style="">Row-2-5</td> <td style="">Row-2-6</td> <td style="">Row-2-7</td> <td style="">Row-2-8</td> <td style="">Row-2-9</td> <td style="">Row-2-10</td> <td style="">Row-2-11</td> <td style="">Row-2-12</td> <td style="">Row-2-13</td> <td style="">Row-2-14</td> <td style="">Row-2-15</td> <td style="">Row-2-16</td> <td style="">Row-2-17</td> <td style="">Row-2-18</td> <td style="">Row-2-19</td> <td style="">Row-2-20</td> <td style="">Row-2-21</td> <td style="">Row-2-22</td> <td style="">Row-2-23</td> <td style="">Row-2-24</td> <td style="">Row-2-25</td> <td style="">Row-2-26</td> <td style="">Row-2-27</td> <td style="">Row-2-28</td> <td style="">Row-2-29</td> <td style="">Row-2-30</td> <td style="">Row-2-31</td> <td style="">Row-2-32</td> <td style="">Row-2-33</td> <td style="">Row-2-34</td> <td style="">Row-2-35</td> <td style="">Row-2-36</td> <td style="">Row-2-37</td> <td style="">Row-2-38</td> <td style="">Row-2-39</td> <td style="">Row-2-40</td> <td style="">Row-2-41</td> <td style="">Row-2-42</td> <td style="">Row-2-43</td> <td style="">Row-2-44</td> <td style="">Row-2-45</td> <td style="">Row-2-46</td> <td style="">Row-2-47</td> <td style="">Row-2-48</td> <td style="">Row-2-49</td> <td style="">Row-2-49</td> </tr><tr data-index="3"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-3-0</td> <td style="">Row-3-1</td> <td style="">Row-3-2</td> <td style="">Row-3-3</td> <td style="">Row-3-4</td> <td style="">Row-3-5</td> <td style="">Row-3-6</td> <td style="">Row-3-7</td> <td style="">Row-3-8</td> <td style="">Row-3-9</td> <td style="">Row-3-10</td> <td style="">Row-3-11</td> <td style="">Row-3-12</td> <td style="">Row-3-13</td> <td style="">Row-3-14</td> <td style="">Row-3-15</td> <td style="">Row-3-16</td> <td style="">Row-3-17</td> <td style="">Row-3-18</td> <td style="">Row-3-19</td> <td style="">Row-3-20</td> <td style="">Row-3-21</td> <td style="">Row-3-22</td> <td style="">Row-3-23</td> <td style="">Row-3-24</td> <td style="">Row-3-25</td> <td style="">Row-3-26</td> <td style="">Row-3-27</td> <td style="">Row-3-28</td> <td style="">Row-3-29</td> <td style="">Row-3-30</td> <td style="">Row-3-31</td> <td style="">Row-3-32</td> <td style="">Row-3-33</td> <td style="">Row-3-34</td> <td style="">Row-3-35</td> <td style="">Row-3-36</td> <td style="">Row-3-37</td> <td style="">Row-3-38</td> <td style="">Row-3-39</td> <td style="">Row-3-40</td> <td style="">Row-3-41</td> <td style="">Row-3-42</td> <td style="">Row-3-43</td> <td style="">Row-3-44</td> <td style="">Row-3-45</td> <td style="">Row-3-46</td> <td style="">Row-3-47</td> <td style="">Row-3-48</td> <td style="">Row-3-49</td> <td style="">Row-3-49</td> </tr><tr data-index="4"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-4-0</td> <td style="">Row-4-1</td> <td style="">Row-4-2</td> <td style="">Row-4-3</td> <td style="">Row-4-4</td> <td style="">Row-4-5</td> <td style="">Row-4-6</td> <td style="">Row-4-7</td> <td style="">Row-4-8</td> <td style="">Row-4-9</td> <td style="">Row-4-10</td> <td style="">Row-4-11</td> <td style="">Row-4-12</td> <td style="">Row-4-13</td> <td style="">Row-4-14</td> <td style="">Row-4-15</td> <td style="">Row-4-16</td> <td style="">Row-4-17</td> <td style="">Row-4-18</td> <td style="">Row-4-19</td> <td style="">Row-4-20</td> <td style="">Row-4-21</td> <td style="">Row-4-22</td> <td style="">Row-4-23</td> <td style="">Row-4-24</td> <td style="">Row-4-25</td> <td style="">Row-4-26</td> <td style="">Row-4-27</td> <td style="">Row-4-28</td> <td style="">Row-4-29</td> <td style="">Row-4-30</td> <td style="">Row-4-31</td> <td style="">Row-4-32</td> <td style="">Row-4-33</td> <td style="">Row-4-34</td> <td style="">Row-4-35</td> <td style="">Row-4-36</td> <td style="">Row-4-37</td> <td style="">Row-4-38</td> <td style="">Row-4-39</td> <td style="">Row-4-40</td> <td style="">Row-4-41</td> <td style="">Row-4-42</td> <td style="">Row-4-43</td> <td style="">Row-4-44</td> <td style="">Row-4-45</td> <td style="">Row-4-46</td> <td style="">Row-4-47</td> <td style="">Row-4-48</td> <td style="">Row-4-49</td> <td style="">Row-4-49</td> </tr><tr data-index="5"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-5-0</td> <td style="">Row-5-1</td> <td style="">Row-5-2</td> <td style="">Row-5-3</td> <td style="">Row-5-4</td> <td style="">Row-5-5</td> <td style="">Row-5-6</td> <td style="">Row-5-7</td> <td style="">Row-5-8</td> <td style="">Row-5-9</td> <td style="">Row-5-10</td> <td style="">Row-5-11</td> <td style="">Row-5-12</td> <td style="">Row-5-13</td> <td style="">Row-5-14</td> <td style="">Row-5-15</td> <td style="">Row-5-16</td> <td style="">Row-5-17</td> <td style="">Row-5-18</td> <td style="">Row-5-19</td> <td style="">Row-5-20</td> <td style="">Row-5-21</td> <td style="">Row-5-22</td> <td style="">Row-5-23</td> <td style="">Row-5-24</td> <td style="">Row-5-25</td> <td style="">Row-5-26</td> <td style="">Row-5-27</td> <td style="">Row-5-28</td> <td style="">Row-5-29</td> <td style="">Row-5-30</td> <td style="">Row-5-31</td> <td style="">Row-5-32</td> <td style="">Row-5-33</td> <td style="">Row-5-34</td> <td style="">Row-5-35</td> <td style="">Row-5-36</td> <td style="">Row-5-37</td> <td style="">Row-5-38</td> <td style="">Row-5-39</td> <td style="">Row-5-40</td> <td style="">Row-5-41</td> <td style="">Row-5-42</td> <td style="">Row-5-43</td> <td style="">Row-5-44</td> <td style="">Row-5-45</td> <td style="">Row-5-46</td> <td style="">Row-5-47</td> <td style="">Row-5-48</td> <td style="">Row-5-49</td> <td style="">Row-5-49</td> </tr><tr data-index="6"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-6-0</td> <td style="">Row-6-1</td> <td style="">Row-6-2</td> <td style="">Row-6-3</td> <td style="">Row-6-4</td> <td style="">Row-6-5</td> <td style="">Row-6-6</td> <td style="">Row-6-7</td> <td style="">Row-6-8</td> <td style="">Row-6-9</td> <td style="">Row-6-10</td> <td style="">Row-6-11</td> <td style="">Row-6-12</td> <td style="">Row-6-13</td> <td style="">Row-6-14</td> <td style="">Row-6-15</td> <td style="">Row-6-16</td> <td style="">Row-6-17</td> <td style="">Row-6-18</td> <td style="">Row-6-19</td> <td style="">Row-6-20</td> <td style="">Row-6-21</td> <td style="">Row-6-22</td> <td style="">Row-6-23</td> <td style="">Row-6-24</td> <td style="">Row-6-25</td> <td style="">Row-6-26</td> <td style="">Row-6-27</td> <td style="">Row-6-28</td> <td style="">Row-6-29</td> <td style="">Row-6-30</td> <td style="">Row-6-31</td> <td style="">Row-6-32</td> <td style="">Row-6-33</td> <td style="">Row-6-34</td> <td style="">Row-6-35</td> <td style="">Row-6-36</td> <td style="">Row-6-37</td> <td style="">Row-6-38</td> <td style="">Row-6-39</td> <td style="">Row-6-40</td> <td style="">Row-6-41</td> <td style="">Row-6-42</td> <td style="">Row-6-43</td> <td style="">Row-6-44</td> <td style="">Row-6-45</td> <td style="">Row-6-46</td> <td style="">Row-6-47</td> <td style="">Row-6-48</td> <td style="">Row-6-49</td> <td style="">Row-6-49</td> </tr><tr data-index="7"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-7-0</td> <td style="">Row-7-1</td> <td style="">Row-7-2</td> <td style="">Row-7-3</td> <td style="">Row-7-4</td> <td style="">Row-7-5</td> <td style="">Row-7-6</td> <td style="">Row-7-7</td> <td style="">Row-7-8</td> <td style="">Row-7-9</td> <td style="">Row-7-10</td> <td style="">Row-7-11</td> <td style="">Row-7-12</td> <td style="">Row-7-13</td> <td style="">Row-7-14</td> <td style="">Row-7-15</td> <td style="">Row-7-16</td> <td style="">Row-7-17</td> <td style="">Row-7-18</td> <td style="">Row-7-19</td> <td style="">Row-7-20</td> <td style="">Row-7-21</td> <td style="">Row-7-22</td> <td style="">Row-7-23</td> <td style="">Row-7-24</td> <td style="">Row-7-25</td> <td style="">Row-7-26</td> <td style="">Row-7-27</td> <td style="">Row-7-28</td> <td style="">Row-7-29</td> <td style="">Row-7-30</td> <td style="">Row-7-31</td> <td style="">Row-7-32</td> <td style="">Row-7-33</td> <td style="">Row-7-34</td> <td style="">Row-7-35</td> <td style="">Row-7-36</td> <td style="">Row-7-37</td> <td style="">Row-7-38</td> <td style="">Row-7-39</td> <td style="">Row-7-40</td> <td style="">Row-7-41</td> <td style="">Row-7-42</td> <td style="">Row-7-43</td> <td style="">Row-7-44</td> <td style="">Row-7-45</td> <td style="">Row-7-46</td> <td style="">Row-7-47</td> <td style="">Row-7-48</td> <td style="">Row-7-49</td> <td style="">Row-7-49</td> </tr><tr data-index="8"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-8-0</td> <td style="">Row-8-1</td> <td style="">Row-8-2</td> <td style="">Row-8-3</td> <td style="">Row-8-4</td> <td style="">Row-8-5</td> <td style="">Row-8-6</td> <td style="">Row-8-7</td> <td style="">Row-8-8</td> <td style="">Row-8-9</td> <td style="">Row-8-10</td> <td style="">Row-8-11</td> <td style="">Row-8-12</td> <td style="">Row-8-13</td> <td style="">Row-8-14</td> <td style="">Row-8-15</td> <td style="">Row-8-16</td> <td style="">Row-8-17</td> <td style="">Row-8-18</td> <td style="">Row-8-19</td> <td style="">Row-8-20</td> <td style="">Row-8-21</td> <td style="">Row-8-22</td> <td style="">Row-8-23</td> <td style="">Row-8-24</td> <td style="">Row-8-25</td> <td style="">Row-8-26</td> <td style="">Row-8-27</td> <td style="">Row-8-28</td> <td style="">Row-8-29</td> <td style="">Row-8-30</td> <td style="">Row-8-31</td> <td style="">Row-8-32</td> <td style="">Row-8-33</td> <td style="">Row-8-34</td> <td style="">Row-8-35</td> <td style="">Row-8-36</td> <td style="">Row-8-37</td> <td style="">Row-8-38</td> <td style="">Row-8-39</td> <td style="">Row-8-40</td> <td style="">Row-8-41</td> <td style="">Row-8-42</td> <td style="">Row-8-43</td> <td style="">Row-8-44</td> <td style="">Row-8-45</td> <td style="">Row-8-46</td> <td style="">Row-8-47</td> <td style="">Row-8-48</td> <td style="">Row-8-49</td> <td style="">Row-8-49</td> </tr><tr data-index="9"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-9-0</td> <td style="">Row-9-1</td> <td style="">Row-9-2</td> <td style="">Row-9-3</td> <td style="">Row-9-4</td> <td style="">Row-9-5</td> <td style="">Row-9-6</td> <td style="">Row-9-7</td> <td style="">Row-9-8</td> <td style="">Row-9-9</td> <td style="">Row-9-10</td> <td style="">Row-9-11</td> <td style="">Row-9-12</td> <td style="">Row-9-13</td> <td style="">Row-9-14</td> <td style="">Row-9-15</td> <td style="">Row-9-16</td> <td style="">Row-9-17</td> <td style="">Row-9-18</td> <td style="">Row-9-19</td> <td style="">Row-9-20</td> <td style="">Row-9-21</td> <td style="">Row-9-22</td> <td style="">Row-9-23</td> <td style="">Row-9-24</td> <td style="">Row-9-25</td> <td style="">Row-9-26</td> <td style="">Row-9-27</td> <td style="">Row-9-28</td> <td style="">Row-9-29</td> <td style="">Row-9-30</td> <td style="">Row-9-31</td> <td style="">Row-9-32</td> <td style="">Row-9-33</td> <td style="">Row-9-34</td> <td style="">Row-9-35</td> <td style="">Row-9-36</td> <td style="">Row-9-37</td> <td style="">Row-9-38</td> <td style="">Row-9-39</td> <td style="">Row-9-40</td> <td style="">Row-9-41</td> <td style="">Row-9-42</td> <td style="">Row-9-43</td> <td style="">Row-9-44</td> <td style="">Row-9-45</td> <td style="">Row-9-46</td> <td style="">Row-9-47</td> <td style="">Row-9-48</td> <td style="">Row-9-49</td> <td style="">Row-9-49</td> </tr><tr data-index="10"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-10-0</td> <td style="">Row-10-1</td> <td style="">Row-10-2</td> <td style="">Row-10-3</td> <td style="">Row-10-4</td> <td style="">Row-10-5</td> <td style="">Row-10-6</td> <td style="">Row-10-7</td> <td style="">Row-10-8</td> <td style="">Row-10-9</td> <td style="">Row-10-10</td> <td style="">Row-10-11</td> <td style="">Row-10-12</td> <td style="">Row-10-13</td> <td style="">Row-10-14</td> <td style="">Row-10-15</td> <td style="">Row-10-16</td> <td style="">Row-10-17</td> <td style="">Row-10-18</td> <td style="">Row-10-19</td> <td style="">Row-10-20</td> <td style="">Row-10-21</td> <td style="">Row-10-22</td> <td style="">Row-10-23</td> <td style="">Row-10-24</td> <td style="">Row-10-25</td> <td style="">Row-10-26</td> <td style="">Row-10-27</td> <td style="">Row-10-28</td> <td style="">Row-10-29</td> <td style="">Row-10-30</td> <td style="">Row-10-31</td> <td style="">Row-10-32</td> <td style="">Row-10-33</td> <td style="">Row-10-34</td> <td style="">Row-10-35</td> <td style="">Row-10-36</td> <td style="">Row-10-37</td> <td style="">Row-10-38</td> <td style="">Row-10-39</td> <td style="">Row-10-40</td> <td style="">Row-10-41</td> <td style="">Row-10-42</td> <td style="">Row-10-43</td> <td style="">Row-10-44</td> <td style="">Row-10-45</td> <td style="">Row-10-46</td> <td style="">Row-10-47</td> <td style="">Row-10-48</td> <td style="">Row-10-49</td> <td style="">Row-10-49</td> </tr><tr data-index="11"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-11-0</td> <td style="">Row-11-1</td> <td style="">Row-11-2</td> <td style="">Row-11-3</td> <td style="">Row-11-4</td> <td style="">Row-11-5</td> <td style="">Row-11-6</td> <td style="">Row-11-7</td> <td style="">Row-11-8</td> <td style="">Row-11-9</td> <td style="">Row-11-10</td> <td style="">Row-11-11</td> <td style="">Row-11-12</td> <td style="">Row-11-13</td> <td style="">Row-11-14</td> <td style="">Row-11-15</td> <td style="">Row-11-16</td> <td style="">Row-11-17</td> <td style="">Row-11-18</td> <td style="">Row-11-19</td> <td style="">Row-11-20</td> <td style="">Row-11-21</td> <td style="">Row-11-22</td> <td style="">Row-11-23</td> <td style="">Row-11-24</td> <td style="">Row-11-25</td> <td style="">Row-11-26</td> <td style="">Row-11-27</td> <td style="">Row-11-28</td> <td style="">Row-11-29</td> <td style="">Row-11-30</td> <td style="">Row-11-31</td> <td style="">Row-11-32</td> <td style="">Row-11-33</td> <td style="">Row-11-34</td> <td style="">Row-11-35</td> <td style="">Row-11-36</td> <td style="">Row-11-37</td> <td style="">Row-11-38</td> <td style="">Row-11-39</td> <td style="">Row-11-40</td> <td style="">Row-11-41</td> <td style="">Row-11-42</td> <td style="">Row-11-43</td> <td style="">Row-11-44</td> <td style="">Row-11-45</td> <td style="">Row-11-46</td> <td style="">Row-11-47</td> <td style="">Row-11-48</td> <td style="">Row-11-49</td> <td style="">Row-11-49</td> </tr><tr data-index="12"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-12-0</td> <td style="">Row-12-1</td> <td style="">Row-12-2</td> <td style="">Row-12-3</td> <td style="">Row-12-4</td> <td style="">Row-12-5</td> <td style="">Row-12-6</td> <td style="">Row-12-7</td> <td style="">Row-12-8</td> <td style="">Row-12-9</td> <td style="">Row-12-10</td> <td style="">Row-12-11</td> <td style="">Row-12-12</td> <td style="">Row-12-13</td> <td style="">Row-12-14</td> <td style="">Row-12-15</td> <td style="">Row-12-16</td> <td style="">Row-12-17</td> <td style="">Row-12-18</td> <td style="">Row-12-19</td> <td style="">Row-12-20</td> <td style="">Row-12-21</td> <td style="">Row-12-22</td> <td style="">Row-12-23</td> <td style="">Row-12-24</td> <td style="">Row-12-25</td> <td style="">Row-12-26</td> <td style="">Row-12-27</td> <td style="">Row-12-28</td> <td style="">Row-12-29</td> <td style="">Row-12-30</td> <td style="">Row-12-31</td> <td style="">Row-12-32</td> <td style="">Row-12-33</td> <td style="">Row-12-34</td> <td style="">Row-12-35</td> <td style="">Row-12-36</td> <td style="">Row-12-37</td> <td style="">Row-12-38</td> <td style="">Row-12-39</td> <td style="">Row-12-40</td> <td style="">Row-12-41</td> <td style="">Row-12-42</td> <td style="">Row-12-43</td> <td style="">Row-12-44</td> <td style="">Row-12-45</td> <td style="">Row-12-46</td> <td style="">Row-12-47</td> <td style="">Row-12-48</td> <td style="">Row-12-49</td> <td style="">Row-12-49</td> </tr><tr data-index="13"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-13-0</td> <td style="">Row-13-1</td> <td style="">Row-13-2</td> <td style="">Row-13-3</td> <td style="">Row-13-4</td> <td style="">Row-13-5</td> <td style="">Row-13-6</td> <td style="">Row-13-7</td> <td style="">Row-13-8</td> <td style="">Row-13-9</td> <td style="">Row-13-10</td> <td style="">Row-13-11</td> <td style="">Row-13-12</td> <td style="">Row-13-13</td> <td style="">Row-13-14</td> <td style="">Row-13-15</td> <td style="">Row-13-16</td> <td style="">Row-13-17</td> <td style="">Row-13-18</td> <td style="">Row-13-19</td> <td style="">Row-13-20</td> <td style="">Row-13-21</td> <td style="">Row-13-22</td> <td style="">Row-13-23</td> <td style="">Row-13-24</td> <td style="">Row-13-25</td> <td style="">Row-13-26</td> <td style="">Row-13-27</td> <td style="">Row-13-28</td> <td style="">Row-13-29</td> <td style="">Row-13-30</td> <td style="">Row-13-31</td> <td style="">Row-13-32</td> <td style="">Row-13-33</td> <td style="">Row-13-34</td> <td style="">Row-13-35</td> <td style="">Row-13-36</td> <td style="">Row-13-37</td> <td style="">Row-13-38</td> <td style="">Row-13-39</td> <td style="">Row-13-40</td> <td style="">Row-13-41</td> <td style="">Row-13-42</td> <td style="">Row-13-43</td> <td style="">Row-13-44</td> <td style="">Row-13-45</td> <td style="">Row-13-46</td> <td style="">Row-13-47</td> <td style="">Row-13-48</td> <td style="">Row-13-49</td> <td style="">Row-13-49</td> </tr><tr data-index="14"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-14-0</td> <td style="">Row-14-1</td> <td style="">Row-14-2</td> <td style="">Row-14-3</td> <td style="">Row-14-4</td> <td style="">Row-14-5</td> <td style="">Row-14-6</td> <td style="">Row-14-7</td> <td style="">Row-14-8</td> <td style="">Row-14-9</td> <td style="">Row-14-10</td> <td style="">Row-14-11</td> <td style="">Row-14-12</td> <td style="">Row-14-13</td> <td style="">Row-14-14</td> <td style="">Row-14-15</td> <td style="">Row-14-16</td> <td style="">Row-14-17</td> <td style="">Row-14-18</td> <td style="">Row-14-19</td> <td style="">Row-14-20</td> <td style="">Row-14-21</td> <td style="">Row-14-22</td> <td style="">Row-14-23</td> <td style="">Row-14-24</td> <td style="">Row-14-25</td> <td style="">Row-14-26</td> <td style="">Row-14-27</td> <td style="">Row-14-28</td> <td style="">Row-14-29</td> <td style="">Row-14-30</td> <td style="">Row-14-31</td> <td style="">Row-14-32</td> <td style="">Row-14-33</td> <td style="">Row-14-34</td> <td style="">Row-14-35</td> <td style="">Row-14-36</td> <td style="">Row-14-37</td> <td style="">Row-14-38</td> <td style="">Row-14-39</td> <td style="">Row-14-40</td> <td style="">Row-14-41</td> <td style="">Row-14-42</td> <td style="">Row-14-43</td> <td style="">Row-14-44</td> <td style="">Row-14-45</td> <td style="">Row-14-46</td> <td style="">Row-14-47</td> <td style="">Row-14-48</td> <td style="">Row-14-49</td> <td style="">Row-14-49</td> </tr><tr data-index="15"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-15-0</td> <td style="">Row-15-1</td> <td style="">Row-15-2</td> <td style="">Row-15-3</td> <td style="">Row-15-4</td> <td style="">Row-15-5</td> <td style="">Row-15-6</td> <td style="">Row-15-7</td> <td style="">Row-15-8</td> <td style="">Row-15-9</td> <td style="">Row-15-10</td> <td style="">Row-15-11</td> <td style="">Row-15-12</td> <td style="">Row-15-13</td> <td style="">Row-15-14</td> <td style="">Row-15-15</td> <td style="">Row-15-16</td> <td style="">Row-15-17</td> <td style="">Row-15-18</td> <td style="">Row-15-19</td> <td style="">Row-15-20</td> <td style="">Row-15-21</td> <td style="">Row-15-22</td> <td style="">Row-15-23</td> <td style="">Row-15-24</td> <td style="">Row-15-25</td> <td style="">Row-15-26</td> <td style="">Row-15-27</td> <td style="">Row-15-28</td> <td style="">Row-15-29</td> <td style="">Row-15-30</td> <td style="">Row-15-31</td> <td style="">Row-15-32</td> <td style="">Row-15-33</td> <td style="">Row-15-34</td> <td style="">Row-15-35</td> <td style="">Row-15-36</td> <td style="">Row-15-37</td> <td style="">Row-15-38</td> <td style="">Row-15-39</td> <td style="">Row-15-40</td> <td style="">Row-15-41</td> <td style="">Row-15-42</td> <td style="">Row-15-43</td> <td style="">Row-15-44</td> <td style="">Row-15-45</td> <td style="">Row-15-46</td> <td style="">Row-15-47</td> <td style="">Row-15-48</td> <td style="">Row-15-49</td> <td style="">Row-15-49</td> </tr><tr data-index="16"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-16-0</td> <td style="">Row-16-1</td> <td style="">Row-16-2</td> <td style="">Row-16-3</td> <td style="">Row-16-4</td> <td style="">Row-16-5</td> <td style="">Row-16-6</td> <td style="">Row-16-7</td> <td style="">Row-16-8</td> <td style="">Row-16-9</td> <td style="">Row-16-10</td> <td style="">Row-16-11</td> <td style="">Row-16-12</td> <td style="">Row-16-13</td> <td style="">Row-16-14</td> <td style="">Row-16-15</td> <td style="">Row-16-16</td> <td style="">Row-16-17</td> <td style="">Row-16-18</td> <td style="">Row-16-19</td> <td style="">Row-16-20</td> <td style="">Row-16-21</td> <td style="">Row-16-22</td> <td style="">Row-16-23</td> <td style="">Row-16-24</td> <td style="">Row-16-25</td> <td style="">Row-16-26</td> <td style="">Row-16-27</td> <td style="">Row-16-28</td> <td style="">Row-16-29</td> <td style="">Row-16-30</td> <td style="">Row-16-31</td> <td style="">Row-16-32</td> <td style="">Row-16-33</td> <td style="">Row-16-34</td> <td style="">Row-16-35</td> <td style="">Row-16-36</td> <td style="">Row-16-37</td> <td style="">Row-16-38</td> <td style="">Row-16-39</td> <td style="">Row-16-40</td> <td style="">Row-16-41</td> <td style="">Row-16-42</td> <td style="">Row-16-43</td> <td style="">Row-16-44</td> <td style="">Row-16-45</td> <td style="">Row-16-46</td> <td style="">Row-16-47</td> <td style="">Row-16-48</td> <td style="">Row-16-49</td> <td style="">Row-16-49</td> </tr><tr data-index="17"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-17-0</td> <td style="">Row-17-1</td> <td style="">Row-17-2</td> <td style="">Row-17-3</td> <td style="">Row-17-4</td> <td style="">Row-17-5</td> <td style="">Row-17-6</td> <td style="">Row-17-7</td> <td style="">Row-17-8</td> <td style="">Row-17-9</td> <td style="">Row-17-10</td> <td style="">Row-17-11</td> <td style="">Row-17-12</td> <td style="">Row-17-13</td> <td style="">Row-17-14</td> <td style="">Row-17-15</td> <td style="">Row-17-16</td> <td style="">Row-17-17</td> <td style="">Row-17-18</td> <td style="">Row-17-19</td> <td style="">Row-17-20</td> <td style="">Row-17-21</td> <td style="">Row-17-22</td> <td style="">Row-17-23</td> <td style="">Row-17-24</td> <td style="">Row-17-25</td> <td style="">Row-17-26</td> <td style="">Row-17-27</td> <td style="">Row-17-28</td> <td style="">Row-17-29</td> <td style="">Row-17-30</td> <td style="">Row-17-31</td> <td style="">Row-17-32</td> <td style="">Row-17-33</td> <td style="">Row-17-34</td> <td style="">Row-17-35</td> <td style="">Row-17-36</td> <td style="">Row-17-37</td> <td style="">Row-17-38</td> <td style="">Row-17-39</td> <td style="">Row-17-40</td> <td style="">Row-17-41</td> <td style="">Row-17-42</td> <td style="">Row-17-43</td> <td style="">Row-17-44</td> <td style="">Row-17-45</td> <td style="">Row-17-46</td> <td style="">Row-17-47</td> <td style="">Row-17-48</td> <td style="">Row-17-49</td> <td style="">Row-17-49</td> </tr><tr data-index="18"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-18-0</td> <td style="">Row-18-1</td> <td style="">Row-18-2</td> <td style="">Row-18-3</td> <td style="">Row-18-4</td> <td style="">Row-18-5</td> <td style="">Row-18-6</td> <td style="">Row-18-7</td> <td style="">Row-18-8</td> <td style="">Row-18-9</td> <td style="">Row-18-10</td> <td style="">Row-18-11</td> <td style="">Row-18-12</td> <td style="">Row-18-13</td> <td style="">Row-18-14</td> <td style="">Row-18-15</td> <td style="">Row-18-16</td> <td style="">Row-18-17</td> <td style="">Row-18-18</td> <td style="">Row-18-19</td> <td style="">Row-18-20</td> <td style="">Row-18-21</td> <td style="">Row-18-22</td> <td style="">Row-18-23</td> <td style="">Row-18-24</td> <td style="">Row-18-25</td> <td style="">Row-18-26</td> <td style="">Row-18-27</td> <td style="">Row-18-28</td> <td style="">Row-18-29</td> <td style="">Row-18-30</td> <td style="">Row-18-31</td> <td style="">Row-18-32</td> <td style="">Row-18-33</td> <td style="">Row-18-34</td> <td style="">Row-18-35</td> <td style="">Row-18-36</td> <td style="">Row-18-37</td> <td style="">Row-18-38</td> <td style="">Row-18-39</td> <td style="">Row-18-40</td> <td style="">Row-18-41</td> <td style="">Row-18-42</td> <td style="">Row-18-43</td> <td style="">Row-18-44</td> <td style="">Row-18-45</td> <td style="">Row-18-46</td> <td style="">Row-18-47</td> <td style="">Row-18-48</td> <td style="">Row-18-49</td> <td style="">Row-18-49</td> </tr><tr data-index="19"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-19-0</td> <td style="">Row-19-1</td> <td style="">Row-19-2</td> <td style="">Row-19-3</td> <td style="">Row-19-4</td> <td style="">Row-19-5</td> <td style="">Row-19-6</td> <td style="">Row-19-7</td> <td style="">Row-19-8</td> <td style="">Row-19-9</td> <td style="">Row-19-10</td> <td style="">Row-19-11</td> <td style="">Row-19-12</td> <td style="">Row-19-13</td> <td style="">Row-19-14</td> <td style="">Row-19-15</td> <td style="">Row-19-16</td> <td style="">Row-19-17</td> <td style="">Row-19-18</td> <td style="">Row-19-19</td> <td style="">Row-19-20</td> <td style="">Row-19-21</td> <td style="">Row-19-22</td> <td style="">Row-19-23</td> <td style="">Row-19-24</td> <td style="">Row-19-25</td> <td style="">Row-19-26</td> <td style="">Row-19-27</td> <td style="">Row-19-28</td> <td style="">Row-19-29</td> <td style="">Row-19-30</td> <td style="">Row-19-31</td> <td style="">Row-19-32</td> <td style="">Row-19-33</td> <td style="">Row-19-34</td> <td style="">Row-19-35</td> <td style="">Row-19-36</td> <td style="">Row-19-37</td> <td style="">Row-19-38</td> <td style="">Row-19-39</td> <td style="">Row-19-40</td> <td style="">Row-19-41</td> <td style="">Row-19-42</td> <td style="">Row-19-43</td> <td style="">Row-19-44</td> <td style="">Row-19-45</td> <td style="">Row-19-46</td> <td style="">Row-19-47</td> <td style="">Row-19-48</td> <td style="">Row-19-49</td> <td style="">Row-19-49</td> </tr><tr data-index="20"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-20-0</td> <td style="">Row-20-1</td> <td style="">Row-20-2</td> <td style="">Row-20-3</td> <td style="">Row-20-4</td> <td style="">Row-20-5</td> <td style="">Row-20-6</td> <td style="">Row-20-7</td> <td style="">Row-20-8</td> <td style="">Row-20-9</td> <td style="">Row-20-10</td> <td style="">Row-20-11</td> <td style="">Row-20-12</td> <td style="">Row-20-13</td> <td style="">Row-20-14</td> <td style="">Row-20-15</td> <td style="">Row-20-16</td> <td style="">Row-20-17</td> <td style="">Row-20-18</td> <td style="">Row-20-19</td> <td style="">Row-20-20</td> <td style="">Row-20-21</td> <td style="">Row-20-22</td> <td style="">Row-20-23</td> <td style="">Row-20-24</td> <td style="">Row-20-25</td> <td style="">Row-20-26</td> <td style="">Row-20-27</td> <td style="">Row-20-28</td> <td style="">Row-20-29</td> <td style="">Row-20-30</td> <td style="">Row-20-31</td> <td style="">Row-20-32</td> <td style="">Row-20-33</td> <td style="">Row-20-34</td> <td style="">Row-20-35</td> <td style="">Row-20-36</td> <td style="">Row-20-37</td> <td style="">Row-20-38</td> <td style="">Row-20-39</td> <td style="">Row-20-40</td> <td style="">Row-20-41</td> <td style="">Row-20-42</td> <td style="">Row-20-43</td> <td style="">Row-20-44</td> <td style="">Row-20-45</td> <td style="">Row-20-46</td> <td style="">Row-20-47</td> <td style="">Row-20-48</td> <td style="">Row-20-49</td> <td style="">Row-20-49</td> </tr><tr data-index="21"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-21-0</td> <td style="">Row-21-1</td> <td style="">Row-21-2</td> <td style="">Row-21-3</td> <td style="">Row-21-4</td> <td style="">Row-21-5</td> <td style="">Row-21-6</td> <td style="">Row-21-7</td> <td style="">Row-21-8</td> <td style="">Row-21-9</td> <td style="">Row-21-10</td> <td style="">Row-21-11</td> <td style="">Row-21-12</td> <td style="">Row-21-13</td> <td style="">Row-21-14</td> <td style="">Row-21-15</td> <td style="">Row-21-16</td> <td style="">Row-21-17</td> <td style="">Row-21-18</td> <td style="">Row-21-19</td> <td style="">Row-21-20</td> <td style="">Row-21-21</td> <td style="">Row-21-22</td> <td style="">Row-21-23</td> <td style="">Row-21-24</td> <td style="">Row-21-25</td> <td style="">Row-21-26</td> <td style="">Row-21-27</td> <td style="">Row-21-28</td> <td style="">Row-21-29</td> <td style="">Row-21-30</td> <td style="">Row-21-31</td> <td style="">Row-21-32</td> <td style="">Row-21-33</td> <td style="">Row-21-34</td> <td style="">Row-21-35</td> <td style="">Row-21-36</td> <td style="">Row-21-37</td> <td style="">Row-21-38</td> <td style="">Row-21-39</td> <td style="">Row-21-40</td> <td style="">Row-21-41</td> <td style="">Row-21-42</td> <td style="">Row-21-43</td> <td style="">Row-21-44</td> <td style="">Row-21-45</td> <td style="">Row-21-46</td> <td style="">Row-21-47</td> <td style="">Row-21-48</td> <td style="">Row-21-49</td> <td style="">Row-21-49</td> </tr><tr data-index="22"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-22-0</td> <td style="">Row-22-1</td> <td style="">Row-22-2</td> <td style="">Row-22-3</td> <td style="">Row-22-4</td> <td style="">Row-22-5</td> <td style="">Row-22-6</td> <td style="">Row-22-7</td> <td style="">Row-22-8</td> <td style="">Row-22-9</td> <td style="">Row-22-10</td> <td style="">Row-22-11</td> <td style="">Row-22-12</td> <td style="">Row-22-13</td> <td style="">Row-22-14</td> <td style="">Row-22-15</td> <td style="">Row-22-16</td> <td style="">Row-22-17</td> <td style="">Row-22-18</td> <td style="">Row-22-19</td> <td style="">Row-22-20</td> <td style="">Row-22-21</td> <td style="">Row-22-22</td> <td style="">Row-22-23</td> <td style="">Row-22-24</td> <td style="">Row-22-25</td> <td style="">Row-22-26</td> <td style="">Row-22-27</td> <td style="">Row-22-28</td> <td style="">Row-22-29</td> <td style="">Row-22-30</td> <td style="">Row-22-31</td> <td style="">Row-22-32</td> <td style="">Row-22-33</td> <td style="">Row-22-34</td> <td style="">Row-22-35</td> <td style="">Row-22-36</td> <td style="">Row-22-37</td> <td style="">Row-22-38</td> <td style="">Row-22-39</td> <td style="">Row-22-40</td> <td style="">Row-22-41</td> <td style="">Row-22-42</td> <td style="">Row-22-43</td> <td style="">Row-22-44</td> <td style="">Row-22-45</td> <td style="">Row-22-46</td> <td style="">Row-22-47</td> <td style="">Row-22-48</td> <td style="">Row-22-49</td> <td style="">Row-22-49</td> </tr><tr data-index="23"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-23-0</td> <td style="">Row-23-1</td> <td style="">Row-23-2</td> <td style="">Row-23-3</td> <td style="">Row-23-4</td> <td style="">Row-23-5</td> <td style="">Row-23-6</td> <td style="">Row-23-7</td> <td style="">Row-23-8</td> <td style="">Row-23-9</td> <td style="">Row-23-10</td> <td style="">Row-23-11</td> <td style="">Row-23-12</td> <td style="">Row-23-13</td> <td style="">Row-23-14</td> <td style="">Row-23-15</td> <td style="">Row-23-16</td> <td style="">Row-23-17</td> <td style="">Row-23-18</td> <td style="">Row-23-19</td> <td style="">Row-23-20</td> <td style="">Row-23-21</td> <td style="">Row-23-22</td> <td style="">Row-23-23</td> <td style="">Row-23-24</td> <td style="">Row-23-25</td> <td style="">Row-23-26</td> <td style="">Row-23-27</td> <td style="">Row-23-28</td> <td style="">Row-23-29</td> <td style="">Row-23-30</td> <td style="">Row-23-31</td> <td style="">Row-23-32</td> <td style="">Row-23-33</td> <td style="">Row-23-34</td> <td style="">Row-23-35</td> <td style="">Row-23-36</td> <td style="">Row-23-37</td> <td style="">Row-23-38</td> <td style="">Row-23-39</td> <td style="">Row-23-40</td> <td style="">Row-23-41</td> <td style="">Row-23-42</td> <td style="">Row-23-43</td> <td style="">Row-23-44</td> <td style="">Row-23-45</td> <td style="">Row-23-46</td> <td style="">Row-23-47</td> <td style="">Row-23-48</td> <td style="">Row-23-49</td> <td style="">Row-23-49</td> </tr><tr data-index="24"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-24-0</td> <td style="">Row-24-1</td> <td style="">Row-24-2</td> <td style="">Row-24-3</td> <td style="">Row-24-4</td> <td style="">Row-24-5</td> <td style="">Row-24-6</td> <td style="">Row-24-7</td> <td style="">Row-24-8</td> <td style="">Row-24-9</td> <td style="">Row-24-10</td> <td style="">Row-24-11</td> <td style="">Row-24-12</td> <td style="">Row-24-13</td> <td style="">Row-24-14</td> <td style="">Row-24-15</td> <td style="">Row-24-16</td> <td style="">Row-24-17</td> <td style="">Row-24-18</td> <td style="">Row-24-19</td> <td style="">Row-24-20</td> <td style="">Row-24-21</td> <td style="">Row-24-22</td> <td style="">Row-24-23</td> <td style="">Row-24-24</td> <td style="">Row-24-25</td> <td style="">Row-24-26</td> <td style="">Row-24-27</td> <td style="">Row-24-28</td> <td style="">Row-24-29</td> <td style="">Row-24-30</td> <td style="">Row-24-31</td> <td style="">Row-24-32</td> <td style="">Row-24-33</td> <td style="">Row-24-34</td> <td style="">Row-24-35</td> <td style="">Row-24-36</td> <td style="">Row-24-37</td> <td style="">Row-24-38</td> <td style="">Row-24-39</td> <td style="">Row-24-40</td> <td style="">Row-24-41</td> <td style="">Row-24-42</td> <td style="">Row-24-43</td> <td style="">Row-24-44</td> <td style="">Row-24-45</td> <td style="">Row-24-46</td> <td style="">Row-24-47</td> <td style="">Row-24-48</td> <td style="">Row-24-49</td> <td style="">Row-24-49</td> </tr><tr data-index="25"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-25-0</td> <td style="">Row-25-1</td> <td style="">Row-25-2</td> <td style="">Row-25-3</td> <td style="">Row-25-4</td> <td style="">Row-25-5</td> <td style="">Row-25-6</td> <td style="">Row-25-7</td> <td style="">Row-25-8</td> <td style="">Row-25-9</td> <td style="">Row-25-10</td> <td style="">Row-25-11</td> <td style="">Row-25-12</td> <td style="">Row-25-13</td> <td style="">Row-25-14</td> <td style="">Row-25-15</td> <td style="">Row-25-16</td> <td style="">Row-25-17</td> <td style="">Row-25-18</td> <td style="">Row-25-19</td> <td style="">Row-25-20</td> <td style="">Row-25-21</td> <td style="">Row-25-22</td> <td style="">Row-25-23</td> <td style="">Row-25-24</td> <td style="">Row-25-25</td> <td style="">Row-25-26</td> <td style="">Row-25-27</td> <td style="">Row-25-28</td> <td style="">Row-25-29</td> <td style="">Row-25-30</td> <td style="">Row-25-31</td> <td style="">Row-25-32</td> <td style="">Row-25-33</td> <td style="">Row-25-34</td> <td style="">Row-25-35</td> <td style="">Row-25-36</td> <td style="">Row-25-37</td> <td style="">Row-25-38</td> <td style="">Row-25-39</td> <td style="">Row-25-40</td> <td style="">Row-25-41</td> <td style="">Row-25-42</td> <td style="">Row-25-43</td> <td style="">Row-25-44</td> <td style="">Row-25-45</td> <td style="">Row-25-46</td> <td style="">Row-25-47</td> <td style="">Row-25-48</td> <td style="">Row-25-49</td> <td style="">Row-25-49</td> </tr><tr data-index="26"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-26-0</td> <td style="">Row-26-1</td> <td style="">Row-26-2</td> <td style="">Row-26-3</td> <td style="">Row-26-4</td> <td style="">Row-26-5</td> <td style="">Row-26-6</td> <td style="">Row-26-7</td> <td style="">Row-26-8</td> <td style="">Row-26-9</td> <td style="">Row-26-10</td> <td style="">Row-26-11</td> <td style="">Row-26-12</td> <td style="">Row-26-13</td> <td style="">Row-26-14</td> <td style="">Row-26-15</td> <td style="">Row-26-16</td> <td style="">Row-26-17</td> <td style="">Row-26-18</td> <td style="">Row-26-19</td> <td style="">Row-26-20</td> <td style="">Row-26-21</td> <td style="">Row-26-22</td> <td style="">Row-26-23</td> <td style="">Row-26-24</td> <td style="">Row-26-25</td> <td style="">Row-26-26</td> <td style="">Row-26-27</td> <td style="">Row-26-28</td> <td style="">Row-26-29</td> <td style="">Row-26-30</td> <td style="">Row-26-31</td> <td style="">Row-26-32</td> <td style="">Row-26-33</td> <td style="">Row-26-34</td> <td style="">Row-26-35</td> <td style="">Row-26-36</td> <td style="">Row-26-37</td> <td style="">Row-26-38</td> <td style="">Row-26-39</td> <td style="">Row-26-40</td> <td style="">Row-26-41</td> <td style="">Row-26-42</td> <td style="">Row-26-43</td> <td style="">Row-26-44</td> <td style="">Row-26-45</td> <td style="">Row-26-46</td> <td style="">Row-26-47</td> <td style="">Row-26-48</td> <td style="">Row-26-49</td> <td style="">Row-26-49</td> </tr><tr data-index="27"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-27-0</td> <td style="">Row-27-1</td> <td style="">Row-27-2</td> <td style="">Row-27-3</td> <td style="">Row-27-4</td> <td style="">Row-27-5</td> <td style="">Row-27-6</td> <td style="">Row-27-7</td> <td style="">Row-27-8</td> <td style="">Row-27-9</td> <td style="">Row-27-10</td> <td style="">Row-27-11</td> <td style="">Row-27-12</td> <td style="">Row-27-13</td> <td style="">Row-27-14</td> <td style="">Row-27-15</td> <td style="">Row-27-16</td> <td style="">Row-27-17</td> <td style="">Row-27-18</td> <td style="">Row-27-19</td> <td style="">Row-27-20</td> <td style="">Row-27-21</td> <td style="">Row-27-22</td> <td style="">Row-27-23</td> <td style="">Row-27-24</td> <td style="">Row-27-25</td> <td style="">Row-27-26</td> <td style="">Row-27-27</td> <td style="">Row-27-28</td> <td style="">Row-27-29</td> <td style="">Row-27-30</td> <td style="">Row-27-31</td> <td style="">Row-27-32</td> <td style="">Row-27-33</td> <td style="">Row-27-34</td> <td style="">Row-27-35</td> <td style="">Row-27-36</td> <td style="">Row-27-37</td> <td style="">Row-27-38</td> <td style="">Row-27-39</td> <td style="">Row-27-40</td> <td style="">Row-27-41</td> <td style="">Row-27-42</td> <td style="">Row-27-43</td> <td style="">Row-27-44</td> <td style="">Row-27-45</td> <td style="">Row-27-46</td> <td style="">Row-27-47</td> <td style="">Row-27-48</td> <td style="">Row-27-49</td> <td style="">Row-27-49</td> </tr><tr data-index="28"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-28-0</td> <td style="">Row-28-1</td> <td style="">Row-28-2</td> <td style="">Row-28-3</td> <td style="">Row-28-4</td> <td style="">Row-28-5</td> <td style="">Row-28-6</td> <td style="">Row-28-7</td> <td style="">Row-28-8</td> <td style="">Row-28-9</td> <td style="">Row-28-10</td> <td style="">Row-28-11</td> <td style="">Row-28-12</td> <td style="">Row-28-13</td> <td style="">Row-28-14</td> <td style="">Row-28-15</td> <td style="">Row-28-16</td> <td style="">Row-28-17</td> <td style="">Row-28-18</td> <td style="">Row-28-19</td> <td style="">Row-28-20</td> <td style="">Row-28-21</td> <td style="">Row-28-22</td> <td style="">Row-28-23</td> <td style="">Row-28-24</td> <td style="">Row-28-25</td> <td style="">Row-28-26</td> <td style="">Row-28-27</td> <td style="">Row-28-28</td> <td style="">Row-28-29</td> <td style="">Row-28-30</td> <td style="">Row-28-31</td> <td style="">Row-28-32</td> <td style="">Row-28-33</td> <td style="">Row-28-34</td> <td style="">Row-28-35</td> <td style="">Row-28-36</td> <td style="">Row-28-37</td> <td style="">Row-28-38</td> <td style="">Row-28-39</td> <td style="">Row-28-40</td> <td style="">Row-28-41</td> <td style="">Row-28-42</td> <td style="">Row-28-43</td> <td style="">Row-28-44</td> <td style="">Row-28-45</td> <td style="">Row-28-46</td> <td style="">Row-28-47</td> <td style="">Row-28-48</td> <td style="">Row-28-49</td> <td style="">Row-28-49</td> </tr><tr data-index="29"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-29-0</td> <td style="">Row-29-1</td> <td style="">Row-29-2</td> <td style="">Row-29-3</td> <td style="">Row-29-4</td> <td style="">Row-29-5</td> <td style="">Row-29-6</td> <td style="">Row-29-7</td> <td style="">Row-29-8</td> <td style="">Row-29-9</td> <td style="">Row-29-10</td> <td style="">Row-29-11</td> <td style="">Row-29-12</td> <td style="">Row-29-13</td> <td style="">Row-29-14</td> <td style="">Row-29-15</td> <td style="">Row-29-16</td> <td style="">Row-29-17</td> <td style="">Row-29-18</td> <td style="">Row-29-19</td> <td style="">Row-29-20</td> <td style="">Row-29-21</td> <td style="">Row-29-22</td> <td style="">Row-29-23</td> <td style="">Row-29-24</td> <td style="">Row-29-25</td> <td style="">Row-29-26</td> <td style="">Row-29-27</td> <td style="">Row-29-28</td> <td style="">Row-29-29</td> <td style="">Row-29-30</td> <td style="">Row-29-31</td> <td style="">Row-29-32</td> <td style="">Row-29-33</td> <td style="">Row-29-34</td> <td style="">Row-29-35</td> <td style="">Row-29-36</td> <td style="">Row-29-37</td> <td style="">Row-29-38</td> <td style="">Row-29-39</td> <td style="">Row-29-40</td> <td style="">Row-29-41</td> <td style="">Row-29-42</td> <td style="">Row-29-43</td> <td style="">Row-29-44</td> <td style="">Row-29-45</td> <td style="">Row-29-46</td> <td style="">Row-29-47</td> <td style="">Row-29-48</td> <td style="">Row-29-49</td> <td style="">Row-29-49</td> </tr><tr data-index="30"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-30-0</td> <td style="">Row-30-1</td> <td style="">Row-30-2</td> <td style="">Row-30-3</td> <td style="">Row-30-4</td> <td style="">Row-30-5</td> <td style="">Row-30-6</td> <td style="">Row-30-7</td> <td style="">Row-30-8</td> <td style="">Row-30-9</td> <td style="">Row-30-10</td> <td style="">Row-30-11</td> <td style="">Row-30-12</td> <td style="">Row-30-13</td> <td style="">Row-30-14</td> <td style="">Row-30-15</td> <td style="">Row-30-16</td> <td style="">Row-30-17</td> <td style="">Row-30-18</td> <td style="">Row-30-19</td> <td style="">Row-30-20</td> <td style="">Row-30-21</td> <td style="">Row-30-22</td> <td style="">Row-30-23</td> <td style="">Row-30-24</td> <td style="">Row-30-25</td> <td style="">Row-30-26</td> <td style="">Row-30-27</td> <td style="">Row-30-28</td> <td style="">Row-30-29</td> <td style="">Row-30-30</td> <td style="">Row-30-31</td> <td style="">Row-30-32</td> <td style="">Row-30-33</td> <td style="">Row-30-34</td> <td style="">Row-30-35</td> <td style="">Row-30-36</td> <td style="">Row-30-37</td> <td style="">Row-30-38</td> <td style="">Row-30-39</td> <td style="">Row-30-40</td> <td style="">Row-30-41</td> <td style="">Row-30-42</td> <td style="">Row-30-43</td> <td style="">Row-30-44</td> <td style="">Row-30-45</td> <td style="">Row-30-46</td> <td style="">Row-30-47</td> <td style="">Row-30-48</td> <td style="">Row-30-49</td> <td style="">Row-30-49</td> </tr><tr data-index="31"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-31-0</td> <td style="">Row-31-1</td> <td style="">Row-31-2</td> <td style="">Row-31-3</td> <td style="">Row-31-4</td> <td style="">Row-31-5</td> <td style="">Row-31-6</td> <td style="">Row-31-7</td> <td style="">Row-31-8</td> <td style="">Row-31-9</td> <td style="">Row-31-10</td> <td style="">Row-31-11</td> <td style="">Row-31-12</td> <td style="">Row-31-13</td> <td style="">Row-31-14</td> <td style="">Row-31-15</td> <td style="">Row-31-16</td> <td style="">Row-31-17</td> <td style="">Row-31-18</td> <td style="">Row-31-19</td> <td style="">Row-31-20</td> <td style="">Row-31-21</td> <td style="">Row-31-22</td> <td style="">Row-31-23</td> <td style="">Row-31-24</td> <td style="">Row-31-25</td> <td style="">Row-31-26</td> <td style="">Row-31-27</td> <td style="">Row-31-28</td> <td style="">Row-31-29</td> <td style="">Row-31-30</td> <td style="">Row-31-31</td> <td style="">Row-31-32</td> <td style="">Row-31-33</td> <td style="">Row-31-34</td> <td style="">Row-31-35</td> <td style="">Row-31-36</td> <td style="">Row-31-37</td> <td style="">Row-31-38</td> <td style="">Row-31-39</td> <td style="">Row-31-40</td> <td style="">Row-31-41</td> <td style="">Row-31-42</td> <td style="">Row-31-43</td> <td style="">Row-31-44</td> <td style="">Row-31-45</td> <td style="">Row-31-46</td> <td style="">Row-31-47</td> <td style="">Row-31-48</td> <td style="">Row-31-49</td> <td style="">Row-31-49</td> </tr><tr data-index="32"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-32-0</td> <td style="">Row-32-1</td> <td style="">Row-32-2</td> <td style="">Row-32-3</td> <td style="">Row-32-4</td> <td style="">Row-32-5</td> <td style="">Row-32-6</td> <td style="">Row-32-7</td> <td style="">Row-32-8</td> <td style="">Row-32-9</td> <td style="">Row-32-10</td> <td style="">Row-32-11</td> <td style="">Row-32-12</td> <td style="">Row-32-13</td> <td style="">Row-32-14</td> <td style="">Row-32-15</td> <td style="">Row-32-16</td> <td style="">Row-32-17</td> <td style="">Row-32-18</td> <td style="">Row-32-19</td> <td style="">Row-32-20</td> <td style="">Row-32-21</td> <td style="">Row-32-22</td> <td style="">Row-32-23</td> <td style="">Row-32-24</td> <td style="">Row-32-25</td> <td style="">Row-32-26</td> <td style="">Row-32-27</td> <td style="">Row-32-28</td> <td style="">Row-32-29</td> <td style="">Row-32-30</td> <td style="">Row-32-31</td> <td style="">Row-32-32</td> <td style="">Row-32-33</td> <td style="">Row-32-34</td> <td style="">Row-32-35</td> <td style="">Row-32-36</td> <td style="">Row-32-37</td> <td style="">Row-32-38</td> <td style="">Row-32-39</td> <td style="">Row-32-40</td> <td style="">Row-32-41</td> <td style="">Row-32-42</td> <td style="">Row-32-43</td> <td style="">Row-32-44</td> <td style="">Row-32-45</td> <td style="">Row-32-46</td> <td style="">Row-32-47</td> <td style="">Row-32-48</td> <td style="">Row-32-49</td> <td style="">Row-32-49</td> </tr><tr data-index="33"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-33-0</td> <td style="">Row-33-1</td> <td style="">Row-33-2</td> <td style="">Row-33-3</td> <td style="">Row-33-4</td> <td style="">Row-33-5</td> <td style="">Row-33-6</td> <td style="">Row-33-7</td> <td style="">Row-33-8</td> <td style="">Row-33-9</td> <td style="">Row-33-10</td> <td style="">Row-33-11</td> <td style="">Row-33-12</td> <td style="">Row-33-13</td> <td style="">Row-33-14</td> <td style="">Row-33-15</td> <td style="">Row-33-16</td> <td style="">Row-33-17</td> <td style="">Row-33-18</td> <td style="">Row-33-19</td> <td style="">Row-33-20</td> <td style="">Row-33-21</td> <td style="">Row-33-22</td> <td style="">Row-33-23</td> <td style="">Row-33-24</td> <td style="">Row-33-25</td> <td style="">Row-33-26</td> <td style="">Row-33-27</td> <td style="">Row-33-28</td> <td style="">Row-33-29</td> <td style="">Row-33-30</td> <td style="">Row-33-31</td> <td style="">Row-33-32</td> <td style="">Row-33-33</td> <td style="">Row-33-34</td> <td style="">Row-33-35</td> <td style="">Row-33-36</td> <td style="">Row-33-37</td> <td style="">Row-33-38</td> <td style="">Row-33-39</td> <td style="">Row-33-40</td> <td style="">Row-33-41</td> <td style="">Row-33-42</td> <td style="">Row-33-43</td> <td style="">Row-33-44</td> <td style="">Row-33-45</td> <td style="">Row-33-46</td> <td style="">Row-33-47</td> <td style="">Row-33-48</td> <td style="">Row-33-49</td> <td style="">Row-33-49</td> </tr><tr data-index="34"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-34-0</td> <td style="">Row-34-1</td> <td style="">Row-34-2</td> <td style="">Row-34-3</td> <td style="">Row-34-4</td> <td style="">Row-34-5</td> <td style="">Row-34-6</td> <td style="">Row-34-7</td> <td style="">Row-34-8</td> <td style="">Row-34-9</td> <td style="">Row-34-10</td> <td style="">Row-34-11</td> <td style="">Row-34-12</td> <td style="">Row-34-13</td> <td style="">Row-34-14</td> <td style="">Row-34-15</td> <td style="">Row-34-16</td> <td style="">Row-34-17</td> <td style="">Row-34-18</td> <td style="">Row-34-19</td> <td style="">Row-34-20</td> <td style="">Row-34-21</td> <td style="">Row-34-22</td> <td style="">Row-34-23</td> <td style="">Row-34-24</td> <td style="">Row-34-25</td> <td style="">Row-34-26</td> <td style="">Row-34-27</td> <td style="">Row-34-28</td> <td style="">Row-34-29</td> <td style="">Row-34-30</td> <td style="">Row-34-31</td> <td style="">Row-34-32</td> <td style="">Row-34-33</td> <td style="">Row-34-34</td> <td style="">Row-34-35</td> <td style="">Row-34-36</td> <td style="">Row-34-37</td> <td style="">Row-34-38</td> <td style="">Row-34-39</td> <td style="">Row-34-40</td> <td style="">Row-34-41</td> <td style="">Row-34-42</td> <td style="">Row-34-43</td> <td style="">Row-34-44</td> <td style="">Row-34-45</td> <td style="">Row-34-46</td> <td style="">Row-34-47</td> <td style="">Row-34-48</td> <td style="">Row-34-49</td> <td style="">Row-34-49</td> </tr><tr data-index="35"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-35-0</td> <td style="">Row-35-1</td> <td style="">Row-35-2</td> <td style="">Row-35-3</td> <td style="">Row-35-4</td> <td style="">Row-35-5</td> <td style="">Row-35-6</td> <td style="">Row-35-7</td> <td style="">Row-35-8</td> <td style="">Row-35-9</td> <td style="">Row-35-10</td> <td style="">Row-35-11</td> <td style="">Row-35-12</td> <td style="">Row-35-13</td> <td style="">Row-35-14</td> <td style="">Row-35-15</td> <td style="">Row-35-16</td> <td style="">Row-35-17</td> <td style="">Row-35-18</td> <td style="">Row-35-19</td> <td style="">Row-35-20</td> <td style="">Row-35-21</td> <td style="">Row-35-22</td> <td style="">Row-35-23</td> <td style="">Row-35-24</td> <td style="">Row-35-25</td> <td style="">Row-35-26</td> <td style="">Row-35-27</td> <td style="">Row-35-28</td> <td style="">Row-35-29</td> <td style="">Row-35-30</td> <td style="">Row-35-31</td> <td style="">Row-35-32</td> <td style="">Row-35-33</td> <td style="">Row-35-34</td> <td style="">Row-35-35</td> <td style="">Row-35-36</td> <td style="">Row-35-37</td> <td style="">Row-35-38</td> <td style="">Row-35-39</td> <td style="">Row-35-40</td> <td style="">Row-35-41</td> <td style="">Row-35-42</td> <td style="">Row-35-43</td> <td style="">Row-35-44</td> <td style="">Row-35-45</td> <td style="">Row-35-46</td> <td style="">Row-35-47</td> <td style="">Row-35-48</td> <td style="">Row-35-49</td> <td style="">Row-35-49</td> </tr><tr data-index="36"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-36-0</td> <td style="">Row-36-1</td> <td style="">Row-36-2</td> <td style="">Row-36-3</td> <td style="">Row-36-4</td> <td style="">Row-36-5</td> <td style="">Row-36-6</td> <td style="">Row-36-7</td> <td style="">Row-36-8</td> <td style="">Row-36-9</td> <td style="">Row-36-10</td> <td style="">Row-36-11</td> <td style="">Row-36-12</td> <td style="">Row-36-13</td> <td style="">Row-36-14</td> <td style="">Row-36-15</td> <td style="">Row-36-16</td> <td style="">Row-36-17</td> <td style="">Row-36-18</td> <td style="">Row-36-19</td> <td style="">Row-36-20</td> <td style="">Row-36-21</td> <td style="">Row-36-22</td> <td style="">Row-36-23</td> <td style="">Row-36-24</td> <td style="">Row-36-25</td> <td style="">Row-36-26</td> <td style="">Row-36-27</td> <td style="">Row-36-28</td> <td style="">Row-36-29</td> <td style="">Row-36-30</td> <td style="">Row-36-31</td> <td style="">Row-36-32</td> <td style="">Row-36-33</td> <td style="">Row-36-34</td> <td style="">Row-36-35</td> <td style="">Row-36-36</td> <td style="">Row-36-37</td> <td style="">Row-36-38</td> <td style="">Row-36-39</td> <td style="">Row-36-40</td> <td style="">Row-36-41</td> <td style="">Row-36-42</td> <td style="">Row-36-43</td> <td style="">Row-36-44</td> <td style="">Row-36-45</td> <td style="">Row-36-46</td> <td style="">Row-36-47</td> <td style="">Row-36-48</td> <td style="">Row-36-49</td> <td style="">Row-36-49</td> </tr><tr data-index="37"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-37-0</td> <td style="">Row-37-1</td> <td style="">Row-37-2</td> <td style="">Row-37-3</td> <td style="">Row-37-4</td> <td style="">Row-37-5</td> <td style="">Row-37-6</td> <td style="">Row-37-7</td> <td style="">Row-37-8</td> <td style="">Row-37-9</td> <td style="">Row-37-10</td> <td style="">Row-37-11</td> <td style="">Row-37-12</td> <td style="">Row-37-13</td> <td style="">Row-37-14</td> <td style="">Row-37-15</td> <td style="">Row-37-16</td> <td style="">Row-37-17</td> <td style="">Row-37-18</td> <td style="">Row-37-19</td> <td style="">Row-37-20</td> <td style="">Row-37-21</td> <td style="">Row-37-22</td> <td style="">Row-37-23</td> <td style="">Row-37-24</td> <td style="">Row-37-25</td> <td style="">Row-37-26</td> <td style="">Row-37-27</td> <td style="">Row-37-28</td> <td style="">Row-37-29</td> <td style="">Row-37-30</td> <td style="">Row-37-31</td> <td style="">Row-37-32</td> <td style="">Row-37-33</td> <td style="">Row-37-34</td> <td style="">Row-37-35</td> <td style="">Row-37-36</td> <td style="">Row-37-37</td> <td style="">Row-37-38</td> <td style="">Row-37-39</td> <td style="">Row-37-40</td> <td style="">Row-37-41</td> <td style="">Row-37-42</td> <td style="">Row-37-43</td> <td style="">Row-37-44</td> <td style="">Row-37-45</td> <td style="">Row-37-46</td> <td style="">Row-37-47</td> <td style="">Row-37-48</td> <td style="">Row-37-49</td> <td style="">Row-37-49</td> </tr><tr data-index="38"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-38-0</td> <td style="">Row-38-1</td> <td style="">Row-38-2</td> <td style="">Row-38-3</td> <td style="">Row-38-4</td> <td style="">Row-38-5</td> <td style="">Row-38-6</td> <td style="">Row-38-7</td> <td style="">Row-38-8</td> <td style="">Row-38-9</td> <td style="">Row-38-10</td> <td style="">Row-38-11</td> <td style="">Row-38-12</td> <td style="">Row-38-13</td> <td style="">Row-38-14</td> <td style="">Row-38-15</td> <td style="">Row-38-16</td> <td style="">Row-38-17</td> <td style="">Row-38-18</td> <td style="">Row-38-19</td> <td style="">Row-38-20</td> <td style="">Row-38-21</td> <td style="">Row-38-22</td> <td style="">Row-38-23</td> <td style="">Row-38-24</td> <td style="">Row-38-25</td> <td style="">Row-38-26</td> <td style="">Row-38-27</td> <td style="">Row-38-28</td> <td style="">Row-38-29</td> <td style="">Row-38-30</td> <td style="">Row-38-31</td> <td style="">Row-38-32</td> <td style="">Row-38-33</td> <td style="">Row-38-34</td> <td style="">Row-38-35</td> <td style="">Row-38-36</td> <td style="">Row-38-37</td> <td style="">Row-38-38</td> <td style="">Row-38-39</td> <td style="">Row-38-40</td> <td style="">Row-38-41</td> <td style="">Row-38-42</td> <td style="">Row-38-43</td> <td style="">Row-38-44</td> <td style="">Row-38-45</td> <td style="">Row-38-46</td> <td style="">Row-38-47</td> <td style="">Row-38-48</td> <td style="">Row-38-49</td> <td style="">Row-38-49</td> </tr><tr data-index="39"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-39-0</td> <td style="">Row-39-1</td> <td style="">Row-39-2</td> <td style="">Row-39-3</td> <td style="">Row-39-4</td> <td style="">Row-39-5</td> <td style="">Row-39-6</td> <td style="">Row-39-7</td> <td style="">Row-39-8</td> <td style="">Row-39-9</td> <td style="">Row-39-10</td> <td style="">Row-39-11</td> <td style="">Row-39-12</td> <td style="">Row-39-13</td> <td style="">Row-39-14</td> <td style="">Row-39-15</td> <td style="">Row-39-16</td> <td style="">Row-39-17</td> <td style="">Row-39-18</td> <td style="">Row-39-19</td> <td style="">Row-39-20</td> <td style="">Row-39-21</td> <td style="">Row-39-22</td> <td style="">Row-39-23</td> <td style="">Row-39-24</td> <td style="">Row-39-25</td> <td style="">Row-39-26</td> <td style="">Row-39-27</td> <td style="">Row-39-28</td> <td style="">Row-39-29</td> <td style="">Row-39-30</td> <td style="">Row-39-31</td> <td style="">Row-39-32</td> <td style="">Row-39-33</td> <td style="">Row-39-34</td> <td style="">Row-39-35</td> <td style="">Row-39-36</td> <td style="">Row-39-37</td> <td style="">Row-39-38</td> <td style="">Row-39-39</td> <td style="">Row-39-40</td> <td style="">Row-39-41</td> <td style="">Row-39-42</td> <td style="">Row-39-43</td> <td style="">Row-39-44</td> <td style="">Row-39-45</td> <td style="">Row-39-46</td> <td style="">Row-39-47</td> <td style="">Row-39-48</td> <td style="">Row-39-49</td> <td style="">Row-39-49</td> </tr><tr data-index="40"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-40-0</td> <td style="">Row-40-1</td> <td style="">Row-40-2</td> <td style="">Row-40-3</td> <td style="">Row-40-4</td> <td style="">Row-40-5</td> <td style="">Row-40-6</td> <td style="">Row-40-7</td> <td style="">Row-40-8</td> <td style="">Row-40-9</td> <td style="">Row-40-10</td> <td style="">Row-40-11</td> <td style="">Row-40-12</td> <td style="">Row-40-13</td> <td style="">Row-40-14</td> <td style="">Row-40-15</td> <td style="">Row-40-16</td> <td style="">Row-40-17</td> <td style="">Row-40-18</td> <td style="">Row-40-19</td> <td style="">Row-40-20</td> <td style="">Row-40-21</td> <td style="">Row-40-22</td> <td style="">Row-40-23</td> <td style="">Row-40-24</td> <td style="">Row-40-25</td> <td style="">Row-40-26</td> <td style="">Row-40-27</td> <td style="">Row-40-28</td> <td style="">Row-40-29</td> <td style="">Row-40-30</td> <td style="">Row-40-31</td> <td style="">Row-40-32</td> <td style="">Row-40-33</td> <td style="">Row-40-34</td> <td style="">Row-40-35</td> <td style="">Row-40-36</td> <td style="">Row-40-37</td> <td style="">Row-40-38</td> <td style="">Row-40-39</td> <td style="">Row-40-40</td> <td style="">Row-40-41</td> <td style="">Row-40-42</td> <td style="">Row-40-43</td> <td style="">Row-40-44</td> <td style="">Row-40-45</td> <td style="">Row-40-46</td> <td style="">Row-40-47</td> <td style="">Row-40-48</td> <td style="">Row-40-49</td> <td style="">Row-40-49</td> </tr><tr data-index="41"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-41-0</td> <td style="">Row-41-1</td> <td style="">Row-41-2</td> <td style="">Row-41-3</td> <td style="">Row-41-4</td> <td style="">Row-41-5</td> <td style="">Row-41-6</td> <td style="">Row-41-7</td> <td style="">Row-41-8</td> <td style="">Row-41-9</td> <td style="">Row-41-10</td> <td style="">Row-41-11</td> <td style="">Row-41-12</td> <td style="">Row-41-13</td> <td style="">Row-41-14</td> <td style="">Row-41-15</td> <td style="">Row-41-16</td> <td style="">Row-41-17</td> <td style="">Row-41-18</td> <td style="">Row-41-19</td> <td style="">Row-41-20</td> <td style="">Row-41-21</td> <td style="">Row-41-22</td> <td style="">Row-41-23</td> <td style="">Row-41-24</td> <td style="">Row-41-25</td> <td style="">Row-41-26</td> <td style="">Row-41-27</td> <td style="">Row-41-28</td> <td style="">Row-41-29</td> <td style="">Row-41-30</td> <td style="">Row-41-31</td> <td style="">Row-41-32</td> <td style="">Row-41-33</td> <td style="">Row-41-34</td> <td style="">Row-41-35</td> <td style="">Row-41-36</td> <td style="">Row-41-37</td> <td style="">Row-41-38</td> <td style="">Row-41-39</td> <td style="">Row-41-40</td> <td style="">Row-41-41</td> <td style="">Row-41-42</td> <td style="">Row-41-43</td> <td style="">Row-41-44</td> <td style="">Row-41-45</td> <td style="">Row-41-46</td> <td style="">Row-41-47</td> <td style="">Row-41-48</td> <td style="">Row-41-49</td> <td style="">Row-41-49</td> </tr><tr data-index="42"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-42-0</td> <td style="">Row-42-1</td> <td style="">Row-42-2</td> <td style="">Row-42-3</td> <td style="">Row-42-4</td> <td style="">Row-42-5</td> <td style="">Row-42-6</td> <td style="">Row-42-7</td> <td style="">Row-42-8</td> <td style="">Row-42-9</td> <td style="">Row-42-10</td> <td style="">Row-42-11</td> <td style="">Row-42-12</td> <td style="">Row-42-13</td> <td style="">Row-42-14</td> <td style="">Row-42-15</td> <td style="">Row-42-16</td> <td style="">Row-42-17</td> <td style="">Row-42-18</td> <td style="">Row-42-19</td> <td style="">Row-42-20</td> <td style="">Row-42-21</td> <td style="">Row-42-22</td> <td style="">Row-42-23</td> <td style="">Row-42-24</td> <td style="">Row-42-25</td> <td style="">Row-42-26</td> <td style="">Row-42-27</td> <td style="">Row-42-28</td> <td style="">Row-42-29</td> <td style="">Row-42-30</td> <td style="">Row-42-31</td> <td style="">Row-42-32</td> <td style="">Row-42-33</td> <td style="">Row-42-34</td> <td style="">Row-42-35</td> <td style="">Row-42-36</td> <td style="">Row-42-37</td> <td style="">Row-42-38</td> <td style="">Row-42-39</td> <td style="">Row-42-40</td> <td style="">Row-42-41</td> <td style="">Row-42-42</td> <td style="">Row-42-43</td> <td style="">Row-42-44</td> <td style="">Row-42-45</td> <td style="">Row-42-46</td> <td style="">Row-42-47</td> <td style="">Row-42-48</td> <td style="">Row-42-49</td> <td style="">Row-42-49</td> </tr><tr data-index="43"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-43-0</td> <td style="">Row-43-1</td> <td style="">Row-43-2</td> <td style="">Row-43-3</td> <td style="">Row-43-4</td> <td style="">Row-43-5</td> <td style="">Row-43-6</td> <td style="">Row-43-7</td> <td style="">Row-43-8</td> <td style="">Row-43-9</td> <td style="">Row-43-10</td> <td style="">Row-43-11</td> <td style="">Row-43-12</td> <td style="">Row-43-13</td> <td style="">Row-43-14</td> <td style="">Row-43-15</td> <td style="">Row-43-16</td> <td style="">Row-43-17</td> <td style="">Row-43-18</td> <td style="">Row-43-19</td> <td style="">Row-43-20</td> <td style="">Row-43-21</td> <td style="">Row-43-22</td> <td style="">Row-43-23</td> <td style="">Row-43-24</td> <td style="">Row-43-25</td> <td style="">Row-43-26</td> <td style="">Row-43-27</td> <td style="">Row-43-28</td> <td style="">Row-43-29</td> <td style="">Row-43-30</td> <td style="">Row-43-31</td> <td style="">Row-43-32</td> <td style="">Row-43-33</td> <td style="">Row-43-34</td> <td style="">Row-43-35</td> <td style="">Row-43-36</td> <td style="">Row-43-37</td> <td style="">Row-43-38</td> <td style="">Row-43-39</td> <td style="">Row-43-40</td> <td style="">Row-43-41</td> <td style="">Row-43-42</td> <td style="">Row-43-43</td> <td style="">Row-43-44</td> <td style="">Row-43-45</td> <td style="">Row-43-46</td> <td style="">Row-43-47</td> <td style="">Row-43-48</td> <td style="">Row-43-49</td> <td style="">Row-43-49</td> </tr><tr data-index="44"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-44-0</td> <td style="">Row-44-1</td> <td style="">Row-44-2</td> <td style="">Row-44-3</td> <td style="">Row-44-4</td> <td style="">Row-44-5</td> <td style="">Row-44-6</td> <td style="">Row-44-7</td> <td style="">Row-44-8</td> <td style="">Row-44-9</td> <td style="">Row-44-10</td> <td style="">Row-44-11</td> <td style="">Row-44-12</td> <td style="">Row-44-13</td> <td style="">Row-44-14</td> <td style="">Row-44-15</td> <td style="">Row-44-16</td> <td style="">Row-44-17</td> <td style="">Row-44-18</td> <td style="">Row-44-19</td> <td style="">Row-44-20</td> <td style="">Row-44-21</td> <td style="">Row-44-22</td> <td style="">Row-44-23</td> <td style="">Row-44-24</td> <td style="">Row-44-25</td> <td style="">Row-44-26</td> <td style="">Row-44-27</td> <td style="">Row-44-28</td> <td style="">Row-44-29</td> <td style="">Row-44-30</td> <td style="">Row-44-31</td> <td style="">Row-44-32</td> <td style="">Row-44-33</td> <td style="">Row-44-34</td> <td style="">Row-44-35</td> <td style="">Row-44-36</td> <td style="">Row-44-37</td> <td style="">Row-44-38</td> <td style="">Row-44-39</td> <td style="">Row-44-40</td> <td style="">Row-44-41</td> <td style="">Row-44-42</td> <td style="">Row-44-43</td> <td style="">Row-44-44</td> <td style="">Row-44-45</td> <td style="">Row-44-46</td> <td style="">Row-44-47</td> <td style="">Row-44-48</td> <td style="">Row-44-49</td> <td style="">Row-44-49</td> </tr><tr data-index="45"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-45-0</td> <td style="">Row-45-1</td> <td style="">Row-45-2</td> <td style="">Row-45-3</td> <td style="">Row-45-4</td> <td style="">Row-45-5</td> <td style="">Row-45-6</td> <td style="">Row-45-7</td> <td style="">Row-45-8</td> <td style="">Row-45-9</td> <td style="">Row-45-10</td> <td style="">Row-45-11</td> <td style="">Row-45-12</td> <td style="">Row-45-13</td> <td style="">Row-45-14</td> <td style="">Row-45-15</td> <td style="">Row-45-16</td> <td style="">Row-45-17</td> <td style="">Row-45-18</td> <td style="">Row-45-19</td> <td style="">Row-45-20</td> <td style="">Row-45-21</td> <td style="">Row-45-22</td> <td style="">Row-45-23</td> <td style="">Row-45-24</td> <td style="">Row-45-25</td> <td style="">Row-45-26</td> <td style="">Row-45-27</td> <td style="">Row-45-28</td> <td style="">Row-45-29</td> <td style="">Row-45-30</td> <td style="">Row-45-31</td> <td style="">Row-45-32</td> <td style="">Row-45-33</td> <td style="">Row-45-34</td> <td style="">Row-45-35</td> <td style="">Row-45-36</td> <td style="">Row-45-37</td> <td style="">Row-45-38</td> <td style="">Row-45-39</td> <td style="">Row-45-40</td> <td style="">Row-45-41</td> <td style="">Row-45-42</td> <td style="">Row-45-43</td> <td style="">Row-45-44</td> <td style="">Row-45-45</td> <td style="">Row-45-46</td> <td style="">Row-45-47</td> <td style="">Row-45-48</td> <td style="">Row-45-49</td> <td style="">Row-45-49</td> </tr><tr data-index="46"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-46-0</td> <td style="">Row-46-1</td> <td style="">Row-46-2</td> <td style="">Row-46-3</td> <td style="">Row-46-4</td> <td style="">Row-46-5</td> <td style="">Row-46-6</td> <td style="">Row-46-7</td> <td style="">Row-46-8</td> <td style="">Row-46-9</td> <td style="">Row-46-10</td> <td style="">Row-46-11</td> <td style="">Row-46-12</td> <td style="">Row-46-13</td> <td style="">Row-46-14</td> <td style="">Row-46-15</td> <td style="">Row-46-16</td> <td style="">Row-46-17</td> <td style="">Row-46-18</td> <td style="">Row-46-19</td> <td style="">Row-46-20</td> <td style="">Row-46-21</td> <td style="">Row-46-22</td> <td style="">Row-46-23</td> <td style="">Row-46-24</td> <td style="">Row-46-25</td> <td style="">Row-46-26</td> <td style="">Row-46-27</td> <td style="">Row-46-28</td> <td style="">Row-46-29</td> <td style="">Row-46-30</td> <td style="">Row-46-31</td> <td style="">Row-46-32</td> <td style="">Row-46-33</td> <td style="">Row-46-34</td> <td style="">Row-46-35</td> <td style="">Row-46-36</td> <td style="">Row-46-37</td> <td style="">Row-46-38</td> <td style="">Row-46-39</td> <td style="">Row-46-40</td> <td style="">Row-46-41</td> <td style="">Row-46-42</td> <td style="">Row-46-43</td> <td style="">Row-46-44</td> <td style="">Row-46-45</td> <td style="">Row-46-46</td> <td style="">Row-46-47</td> <td style="">Row-46-48</td> <td style="">Row-46-49</td> <td style="">Row-46-49</td> </tr><tr data-index="47"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-47-0</td> <td style="">Row-47-1</td> <td style="">Row-47-2</td> <td style="">Row-47-3</td> <td style="">Row-47-4</td> <td style="">Row-47-5</td> <td style="">Row-47-6</td> <td style="">Row-47-7</td> <td style="">Row-47-8</td> <td style="">Row-47-9</td> <td style="">Row-47-10</td> <td style="">Row-47-11</td> <td style="">Row-47-12</td> <td style="">Row-47-13</td> <td style="">Row-47-14</td> <td style="">Row-47-15</td> <td style="">Row-47-16</td> <td style="">Row-47-17</td> <td style="">Row-47-18</td> <td style="">Row-47-19</td> <td style="">Row-47-20</td> <td style="">Row-47-21</td> <td style="">Row-47-22</td> <td style="">Row-47-23</td> <td style="">Row-47-24</td> <td style="">Row-47-25</td> <td style="">Row-47-26</td> <td style="">Row-47-27</td> <td style="">Row-47-28</td> <td style="">Row-47-29</td> <td style="">Row-47-30</td> <td style="">Row-47-31</td> <td style="">Row-47-32</td> <td style="">Row-47-33</td> <td style="">Row-47-34</td> <td style="">Row-47-35</td> <td style="">Row-47-36</td> <td style="">Row-47-37</td> <td style="">Row-47-38</td> <td style="">Row-47-39</td> <td style="">Row-47-40</td> <td style="">Row-47-41</td> <td style="">Row-47-42</td> <td style="">Row-47-43</td> <td style="">Row-47-44</td> <td style="">Row-47-45</td> <td style="">Row-47-46</td> <td style="">Row-47-47</td> <td style="">Row-47-48</td> <td style="">Row-47-49</td> <td style="">Row-47-49</td> </tr><tr data-index="48"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-48-0</td> <td style="">Row-48-1</td> <td style="">Row-48-2</td> <td style="">Row-48-3</td> <td style="">Row-48-4</td> <td style="">Row-48-5</td> <td style="">Row-48-6</td> <td style="">Row-48-7</td> <td style="">Row-48-8</td> <td style="">Row-48-9</td> <td style="">Row-48-10</td> <td style="">Row-48-11</td> <td style="">Row-48-12</td> <td style="">Row-48-13</td> <td style="">Row-48-14</td> <td style="">Row-48-15</td> <td style="">Row-48-16</td> <td style="">Row-48-17</td> <td style="">Row-48-18</td> <td style="">Row-48-19</td> <td style="">Row-48-20</td> <td style="">Row-48-21</td> <td style="">Row-48-22</td> <td style="">Row-48-23</td> <td style="">Row-48-24</td> <td style="">Row-48-25</td> <td style="">Row-48-26</td> <td style="">Row-48-27</td> <td style="">Row-48-28</td> <td style="">Row-48-29</td> <td style="">Row-48-30</td> <td style="">Row-48-31</td> <td style="">Row-48-32</td> <td style="">Row-48-33</td> <td style="">Row-48-34</td> <td style="">Row-48-35</td> <td style="">Row-48-36</td> <td style="">Row-48-37</td> <td style="">Row-48-38</td> <td style="">Row-48-39</td> <td style="">Row-48-40</td> <td style="">Row-48-41</td> <td style="">Row-48-42</td> <td style="">Row-48-43</td> <td style="">Row-48-44</td> <td style="">Row-48-45</td> <td style="">Row-48-46</td> <td style="">Row-48-47</td> <td style="">Row-48-48</td> <td style="">Row-48-49</td> <td style="">Row-48-49</td> </tr><tr data-index="49"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-49-0</td> <td style="">Row-49-1</td> <td style="">Row-49-2</td> <td style="">Row-49-3</td> <td style="">Row-49-4</td> <td style="">Row-49-5</td> <td style="">Row-49-6</td> <td style="">Row-49-7</td> <td style="">Row-49-8</td> <td style="">Row-49-9</td> <td style="">Row-49-10</td> <td style="">Row-49-11</td> <td style="">Row-49-12</td> <td style="">Row-49-13</td> <td style="">Row-49-14</td> <td style="">Row-49-15</td> <td style="">Row-49-16</td> <td style="">Row-49-17</td> <td style="">Row-49-18</td> <td style="">Row-49-19</td> <td style="">Row-49-20</td> <td style="">Row-49-21</td> <td style="">Row-49-22</td> <td style="">Row-49-23</td> <td style="">Row-49-24</td> <td style="">Row-49-25</td> <td style="">Row-49-26</td> <td style="">Row-49-27</td> <td style="">Row-49-28</td> <td style="">Row-49-29</td> <td style="">Row-49-30</td> <td style="">Row-49-31</td> <td style="">Row-49-32</td> <td style="">Row-49-33</td> <td style="">Row-49-34</td> <td style="">Row-49-35</td> <td style="">Row-49-36</td> <td style="">Row-49-37</td> <td style="">Row-49-38</td> <td style="">Row-49-39</td> <td style="">Row-49-40</td> <td style="">Row-49-41</td> <td style="">Row-49-42</td> <td style="">Row-49-43</td> <td style="">Row-49-44</td> <td style="">Row-49-45</td> <td style="">Row-49-46</td> <td style="">Row-49-47</td> <td style="">Row-49-48</td> <td style="">Row-49-49</td> <td style="">Row-49-49</td> </tr></tbody>
                                                </table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div></div><div class="fixed-table-pagination" style="display: none;"></div></div><div class="clearfix"></div>
                                            </div>
                                            <div class="fixed-table-footer" style="display: none;">
                                                <table>
                                                    <tbody>
                                                        <tr></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fixed-table-pagination" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table with radio button</h4>
                                    <h6 class="card-subtitle">data with radiobutton</h6>
                                    <div>
                                        <div class="bootstrap-table">
                                            <div class="fixed-table-toolbar"></div>
                                            <div class="fixed-table-container" style="height: 295px; padding-bottom: 40.5px;">
                                                <div class="fixed-table-header" style="margin-right: 0px;">
                                                    <table class="table table-hover" style="width: 523px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="bs-checkbox " style="width: 36px; " data-field="state">
                                                                    <div class="th-inner "></div>
                                                                    <div class="fht-cell" style="width: 35.5px;"></div>
                                                                </th>
                                                                <th style="" data-field="name">
                                                                    <div class="th-inner ">Name</div>
                                                                    <div class="fht-cell" style="width: 161.047px;">
                                                                    </div>
                                                                </th>
                                                                <th style="" data-field="price">
                                                                    <div class="th-inner ">Price</div>
                                                                    <div class="fht-cell" style="width: 121.781px;">
                                                                    </div>
                                                                </th>
                                                                <th style="" data-field="column1">
                                                                    <div class="th-inner ">Columns1</div>
                                                                    <div class="fht-cell" style="width: 201.672px;">
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="fixed-table-body">
                                                    <div class="fixed-table-loading" style="top: 41.5px; display: none;">
                                                        正在努力地載入資料，請稍候……</div>
                                                    <table data-bs-toggle="table" data-url="../../dist/js/pages/tables/data1.json" data-click-to-select="true" data-select-item-name="myRadioName" data-height="295" class="table table-hover" style="margin-top: -40.5px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="bs-checkbox " style="width: 36px; " data-field="state">
                                                                    <div class="th-inner "></div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="" data-field="name">
                                                                    <div class="th-inner ">Name</div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="" data-field="price">
                                                                    <div class="th-inner ">Price</div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="" data-field="column1">
                                                                    <div class="th-inner ">Columns1</div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-index="0">
                                                                <td class="bs-checkbox "><input data-index="0" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 0</td>
                                                                <td style="">$0</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="1">
                                                                <td class="bs-checkbox "><input data-index="1" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 1</td>
                                                                <td style="">$1</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="2">
                                                                <td class="bs-checkbox "><input data-index="2" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 2</td>
                                                                <td style="">$2</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="3">
                                                                <td class="bs-checkbox "><input data-index="3" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 3</td>
                                                                <td style="">$3</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="4">
                                                                <td class="bs-checkbox "><input data-index="4" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 4</td>
                                                                <td style="">$4</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="5">
                                                                <td class="bs-checkbox "><input data-index="5" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 5</td>
                                                                <td style="">$5</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="6">
                                                                <td class="bs-checkbox "><input data-index="6" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 6</td>
                                                                <td style="">$6</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="7">
                                                                <td class="bs-checkbox "><input data-index="7" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 7</td>
                                                                <td style="">$7</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="8">
                                                                <td class="bs-checkbox "><input data-index="8" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 8</td>
                                                                <td style="">$8</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="9">
                                                                <td class="bs-checkbox "><input data-index="9" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 9</td>
                                                                <td style="">$9</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="10">
                                                                <td class="bs-checkbox "><input data-index="10" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 10</td>
                                                                <td style="">$10</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="11">
                                                                <td class="bs-checkbox "><input data-index="11" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 11</td>
                                                                <td style="">$11</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="12">
                                                                <td class="bs-checkbox "><input data-index="12" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 12</td>
                                                                <td style="">$12</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="13">
                                                                <td class="bs-checkbox "><input data-index="13" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 13</td>
                                                                <td style="">$13</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="14">
                                                                <td class="bs-checkbox "><input data-index="14" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 14</td>
                                                                <td style="">$14</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="15">
                                                                <td class="bs-checkbox "><input data-index="15" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 15</td>
                                                                <td style="">$15</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="16">
                                                                <td class="bs-checkbox "><input data-index="16" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 16</td>
                                                                <td style="">$16</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="17">
                                                                <td class="bs-checkbox "><input data-index="17" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 17</td>
                                                                <td style="">$17</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="18">
                                                                <td class="bs-checkbox "><input data-index="18" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 18</td>
                                                                <td style="">$18</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="19">
                                                                <td class="bs-checkbox "><input data-index="19" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 19</td>
                                                                <td style="">$19</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="20">
                                                                <td class="bs-checkbox "><input data-index="20" name="myRadioName" type="radio"></td>
                                                                <td style="">Item 20</td>
                                                                <td style="">$20</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fixed-table-footer" style="display: none;">
                                                    <table>
                                                        <tbody>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fixed-table-pagination" style="display: none;"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table with checkbox</h4>
                                    <h6 class="card-subtitle">data with checkbox</h6>
                                    <div>
                                        <div class="bootstrap-table">
                                            <div class="fixed-table-toolbar"></div>
                                            <div class="fixed-table-container" style="height: 295px; padding-bottom: 40.5px;">
                                                <div class="fixed-table-header" style="margin-right: 0px;">
                                                    <table class="table table-hover" style="width: 523px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="bs-checkbox " style="width: 36px; " data-field="state">
                                                                    <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                                                                    <div class="fht-cell" style="width: 35.5px;"></div>
                                                                </th>
                                                                <th style="" data-field="name">
                                                                    <div class="th-inner ">Name</div>
                                                                    <div class="fht-cell" style="width: 161.047px;">
                                                                    </div>
                                                                </th>
                                                                <th style="" data-field="price">
                                                                    <div class="th-inner ">Price</div>
                                                                    <div class="fht-cell" style="width: 121.781px;">
                                                                    </div>
                                                                </th>
                                                                <th style="" data-field="column1">
                                                                    <div class="th-inner ">Columns1</div>
                                                                    <div class="fht-cell" style="width: 201.672px;">
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="fixed-table-body">
                                                    <div class="fixed-table-loading" style="top: 41.5px; display: none;">
                                                        正在努力地載入資料，請稍候……</div>
                                                    <table data-bs-toggle="table" data-url="../../dist/js/pages/tables/data1.json" data-click-to-select="true" data-height="295" class="table table-hover" style="margin-top: -40.5px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="bs-checkbox " style="width: 36px; " data-field="state">
                                                                    <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="" data-field="name">
                                                                    <div class="th-inner ">Name</div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="" data-field="price">
                                                                    <div class="th-inner ">Price</div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                                <th style="" data-field="column1">
                                                                    <div class="th-inner ">Columns1</div>
                                                                    <div class="fht-cell"></div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-index="0">
                                                                <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 0</td>
                                                                <td style="">$0</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="1">
                                                                <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 1</td>
                                                                <td style="">$1</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="2">
                                                                <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 2</td>
                                                                <td style="">$2</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="3">
                                                                <td class="bs-checkbox "><input data-index="3" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 3</td>
                                                                <td style="">$3</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="4">
                                                                <td class="bs-checkbox "><input data-index="4" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 4</td>
                                                                <td style="">$4</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="5">
                                                                <td class="bs-checkbox "><input data-index="5" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 5</td>
                                                                <td style="">$5</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="6">
                                                                <td class="bs-checkbox "><input data-index="6" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 6</td>
                                                                <td style="">$6</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="7">
                                                                <td class="bs-checkbox "><input data-index="7" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 7</td>
                                                                <td style="">$7</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="8">
                                                                <td class="bs-checkbox "><input data-index="8" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 8</td>
                                                                <td style="">$8</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="9">
                                                                <td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 9</td>
                                                                <td style="">$9</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="10">
                                                                <td class="bs-checkbox "><input data-index="10" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 10</td>
                                                                <td style="">$10</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="11">
                                                                <td class="bs-checkbox "><input data-index="11" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 11</td>
                                                                <td style="">$11</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="12">
                                                                <td class="bs-checkbox "><input data-index="12" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 12</td>
                                                                <td style="">$12</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="13">
                                                                <td class="bs-checkbox "><input data-index="13" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 13</td>
                                                                <td style="">$13</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="14">
                                                                <td class="bs-checkbox "><input data-index="14" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 14</td>
                                                                <td style="">$14</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="15">
                                                                <td class="bs-checkbox "><input data-index="15" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 15</td>
                                                                <td style="">$15</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="16">
                                                                <td class="bs-checkbox "><input data-index="16" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 16</td>
                                                                <td style="">$16</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="17">
                                                                <td class="bs-checkbox "><input data-index="17" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 17</td>
                                                                <td style="">$17</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="18">
                                                                <td class="bs-checkbox "><input data-index="18" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 18</td>
                                                                <td style="">$18</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="19">
                                                                <td class="bs-checkbox "><input data-index="19" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 19</td>
                                                                <td style="">$19</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                            <tr data-index="20">
                                                                <td class="bs-checkbox "><input data-index="20" name="btSelectItem" type="checkbox"></td>
                                                                <td style="">Item 20</td>
                                                                <td style="">$20</td>
                                                                <td style="">-</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fixed-table-footer" style="display: none;">
                                                    <table>
                                                        <tbody>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fixed-table-pagination" style="display: none;"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body overflow-auto">
                                    <h4 class="card-title">Export Table</h4>
                                    <div class="select">
                                        <select class="form-control" id="locale">
                                            <option value="af-ZA">af-ZA</option>
                                            <option value="ar-SA">ar-SA</option>
                                            <option value="ca-ES">ca-ES</option>
                                            <option value="cs-CZ">cs-CZ</option>
                                            <option value="da-DK">da-DK</option>
                                            <option value="de-DE">de-DE</option>
                                            <option value="el-GR">el-GR</option>
                                            <option value="en-US" selected="">en-US</option>
                                            <option value="es-AR">es-AR</option>
                                            <option value="es-CL">es-CL</option>
                                            <option value="es-CR">es-CR</option>
                                            <option value="es-ES">es-ES</option>
                                            <option value="es-MX">es-MX</option>
                                            <option value="es-NI">es-NI</option>
                                            <option value="es-SP">es-SP</option>
                                            <option value="et-EE">et-EE</option>
                                            <option value="eu-EU">eu-EU</option>
                                            <option value="fa-IR">fa-IR</option>
                                            <option value="fi-FI">fi-FI</option>
                                            <option value="fr-BE">fr-BE</option>
                                            <option value="fr-FR">fr-FR</option>
                                            <option value="he-IL">he-IL</option>
                                            <option value="hr-HR">hr-HR</option>
                                            <option value="hu-HU">hu-HU</option>
                                            <option value="id-ID">id-ID</option>
                                            <option value="it-IT">it-IT</option>
                                            <option value="ja-JP">ja-JP</option>
                                            <option value="ka-GE">ka-GE</option>
                                            <option value="ko-KR">ko-KR</option>
                                            <option value="ms-MY">ms-MY</option>
                                            <option value="nb-NO">nb-NO</option>
                                            <option value="nl-NL">nl-NL</option>
                                            <option value="pl-PL">pl-PL</option>
                                            <option value="pt-BR">pt-BR</option>
                                            <option value="pt-PT">pt-PT</option>
                                            <option value="ro-RO">ro-RO</option>
                                            <option value="ru-RU">ru-RU</option>
                                            <option value="sk-SK">sk-SK</option>
                                            <option value="sv-SE">sv-SE</option>
                                            <option value="th-TH">th-TH</option>
                                            <option value="tr-TR">tr-TR</option>
                                            <option value="uk-UA">uk-UA</option>
                                            <option value="ur-PK">ur-PK</option>
                                            <option value="uz-Latn-UZ">uz-Latn-UZ</option>
                                            <option value="vi-VN">vi-VN</option>
                                            <option value="zh-CN">zh-CN</option>
                                            <option value="zh-TW">zh-TW</option>
                                        </select>
                                    </div>


                                    <div class="bootstrap-table">
                                        <div class="fixed-table-toolbar">
                                            <div class="bs-bars pull-left">
                                                <div id="toolbar">
                                                    <button id="remove" class="btn btn-primary text-white" disabled="">
                                                        <i class="ti-trash"></i> Delete
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="columns columns-right btn-group pull-right"><button class="btn btn-default" type="button" name="paginationSwitch" aria-label="pagination Switch" title="Hide/Show pagination"><i class="glyphicon far fa-caret-square-down"></i></button><button class="btn btn-default" type="button" name="refresh" aria-label="refresh" title="Refresh"><i class="glyphicon fas fa-history"></i></button><button class="btn btn-default" type="button" name="toggle" aria-label="toggle" title="Toggle"><i class="glyphicon fas fa-toggle-off"></i></button><button class="btn btn-default" type="button" name="fullscreen" aria-label="fullscreen" title="Pantalla completa"><i class="glyphicon fas fa-expand"></i></button>
                                                <div class="keep-open btn-group" title="Columns"><button type="button" aria-label="columns" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon fas fa-list"></i>
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="menuitem"><label><input type="checkbox" data-field="id" value="1" checked="checked"> Item
                                                                ID</label></li>
                                                        <li role="menuitem"><label><input type="checkbox" data-field="name" value="2" checked="checked"> Item
                                                                Name</label></li>
                                                        <li role="menuitem"><label><input type="checkbox" data-field="price" value="3" checked="checked"> Item
                                                                Price</label></li>
                                                        <li role="menuitem"><label><input type="checkbox" data-field="operate" value="4" checked="checked">
                                                                Item
                                                                Operate</label></li>
                                                    </ul>
                                                </div>
                                                <div class="export btn-group"><button class="btn btn-default dropdown-toggle" aria-label="export type" title="Export data" data-toggle="dropdown" type="button"><i class="glyphicon fas fa-share-alt"></i> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="menuitem" class="dropdown-item" data-type="json"><a href="javascript:void(0)">JSON</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="xml"><a href="javascript:void(0)">XML</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="csv"><a href="javascript:void(0)">CSV</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="txt"><a href="javascript:void(0)">TXT</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="sql"><a href="javascript:void(0)">SQL</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="excel"><a href="javascript:void(0)">MS-Excel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pull-right search"><input class="form-control" type="text" placeholder="Search"></div>
                                        </div>
                                        <div class="fixed-table-container" style="height: 287.656px; padding-bottom: 124.5px;">
                                            <div class="fixed-table-header" style="margin-right: 0px;">
                                                <table class="table table-hover" style="width: 485.594px;">
                                                    <thead>
                                                        <tr>
                                                            <th class="detail" rowspan="2">
                                                                <div class="fht-cell" style="width: 30.5px;"></div>
                                                            </th>
                                                            <th class="bs-checkbox " style="text-align: center; vertical-align: middle; width: 36px; " rowspan="2" data-field="state">
                                                                <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                                                                <div class="fht-cell" style="width: 29px;"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; " rowspan="2" data-field="id">
                                                                <div class="th-inner sortable both">Item ID</div>
                                                                <div class="fht-cell" style="width: 87.3594px;"></div>
                                                            </th>
                                                            <th style="text-align: center; " colspan="3">
                                                                <div class="th-inner ">Item Detail</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="text-align: center; " data-field="name" data-not-first-th="">
                                                                <div class="th-inner sortable both">Item Name</div>
                                                                <div class="fht-cell" style="width: 116.5px;"></div>
                                                            </th>
                                                            <th style="text-align: center; " data-field="price">
                                                                <div class="th-inner sortable both">Item Price</div>
                                                                <div class="fht-cell" style="width: 108.172px;"></div>
                                                            </th>
                                                            <th style="text-align: center; " data-field="operate">
                                                                <div class="th-inner ">Item Operate</div>
                                                                <div class="fht-cell" style="width: 109.562px;"></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="fixed-table-body">
                                                <div class="fixed-table-loading" style="top: 82.5px; display: none;">
                                                    Loading, please wait...</div>
                                                <div class="bootstrap-table"><div class="fixed-table-toolbar"></div><div class="fixed-table-container"><div class="fixed-table-header"><table></table></div><div class="fixed-table-body"><div class="fixed-table-loading">Loading, please wait...</div><table id="exporttable" data-toolbar="#toolbar" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-fullscreen="true" data-show-columns="true" data-detail-view="true" data-show-export="true" data-detail-formatter="detailFormatter" data-minimum-count-columns="2" data-show-pagination-switch="true" data-pagination="true" data-id-field="id" data-page-list="[10, 25, 50, 100, ALL]" data-show-footer="true" data-side-pagination="server" data-url="https://examples.wenzhixin.net.cn/examples/bootstrap_table/data" data-response-handler="responseHandler" class="table table-hover" style="margin-top: -81.5px;">
                                                    <thead>
                                                        <tr>
                                                            <th class="detail" rowspan="2">
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th class="bs-checkbox " style="text-align: center; vertical-align: middle; width: 36px; " rowspan="2" data-field="state">
                                                                <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; " rowspan="2" data-field="id">
                                                                <div class="th-inner sortable both">Item ID</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; " colspan="3">
                                                                <div class="th-inner ">Item Detail</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="text-align: center; " data-field="name" data-not-first-th="">
                                                                <div class="th-inner sortable both">Item Name</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; " data-field="price">
                                                                <div class="th-inner sortable both">Item Price</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; " data-field="operate">
                                                                <div class="th-inner ">Item Operate</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-index="0">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value="0"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">0
                                                            </td>
                                                            <td style="text-align: center; ">Item 0</td>
                                                            <td style="text-align: center; ">$0</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="1">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox" value="1"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">1
                                                            </td>
                                                            <td style="text-align: center; ">Item 1</td>
                                                            <td style="text-align: center; ">$1</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="2">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox" value="2"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">2
                                                            </td>
                                                            <td style="text-align: center; ">Item 2</td>
                                                            <td style="text-align: center; ">$2</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="3">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="3" name="btSelectItem" type="checkbox" value="3"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">3
                                                            </td>
                                                            <td style="text-align: center; ">Item 3</td>
                                                            <td style="text-align: center; ">$3</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="4">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="4" name="btSelectItem" type="checkbox" value="4"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">4
                                                            </td>
                                                            <td style="text-align: center; ">Item 4</td>
                                                            <td style="text-align: center; ">$4</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="5">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="5" name="btSelectItem" type="checkbox" value="5"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">5
                                                            </td>
                                                            <td style="text-align: center; ">Item 5</td>
                                                            <td style="text-align: center; ">$5</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="6">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="6" name="btSelectItem" type="checkbox" value="6"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">6
                                                            </td>
                                                            <td style="text-align: center; ">Item 6</td>
                                                            <td style="text-align: center; ">$6</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="7">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="7" name="btSelectItem" type="checkbox" value="7"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">7
                                                            </td>
                                                            <td style="text-align: center; ">Item 7</td>
                                                            <td style="text-align: center; ">$7</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="8">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="8" name="btSelectItem" type="checkbox" value="8"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">8
                                                            </td>
                                                            <td style="text-align: center; ">Item 8</td>
                                                            <td style="text-align: center; ">$8</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                        <tr data-index="9">
                                                            <td> <a class="detail-icon" href="#"> <i class="glyphicon fas fa-plus-circle"></i> </a>
                                                            </td>
                                                            <td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox" value="9"></td>
                                                            <td style="text-align: center; vertical-align: middle; ">9
                                                            </td>
                                                            <td style="text-align: center; ">Item 9</td>
                                                            <td style="text-align: center; ">$9</td>
                                                            <td style="text-align: center; "><a class="like" href="javascript:void(0)" title="Like"><i class="fas fa-heart"></i></a> <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table></div><div class="fixed-table-footer"><table><tbody><tr></tr></tbody></table></div></div><div class="fixed-table-pagination"></div></div><div class="clearfix"></div>
                                            </div>
                                            <div class="fixed-table-footer" style="margin-right: 0px;">
                                                <table class="table table-hover" style="width: 485.594px;">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="th-inner">&nbsp;</div>
                                                                <div class="fht-cell" style="width: 30.5px;"></div>
                                                            </td>
                                                            <td style="text-align: center; vertical-align: middle; ">
                                                                <div class="th-inner">&nbsp;</div>
                                                                <div class="fht-cell" style="width: 29px;"></div>
                                                            </td>
                                                            <td style="text-align: center; vertical-align: middle; ">
                                                                <div class="th-inner">Total</div>
                                                                <div class="fht-cell" style="width: 87.3594px;"></div>
                                                            </td>
                                                            <td style="text-align: center; ">
                                                                <div class="th-inner">10</div>
                                                                <div class="fht-cell" style="width: 116.5px;"></div>
                                                            </td>
                                                            <td style="text-align: center; ">
                                                                <div class="th-inner">$45</div>
                                                                <div class="fht-cell" style="width: 108.172px;"></div>
                                                            </td>
                                                            <td style="text-align: center; ">
                                                                <div class="th-inner">&nbsp;</div>
                                                                <div class="fht-cell" style="width: 109.062px;"></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fixed-table-pagination" style="">
                                            <div class="pull-left pagination-detail"><span class="pagination-info">Showing 1
                                                    to 10 of 800 rows</span><span class="page-list"><span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span>
                                                            <span class="caret"></span></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li role="menuitem" class="active"><a href="#">10</a></li>
                                                            <li role="menuitem" class=""><a href="#">25</a></li>
                                                            <li role="menuitem" class=""><a href="#">50</a></li>
                                                            <li role="menuitem" class=""><a href="#">100</a></li>
                                                            <li role="menuitem" class=""><a href="#">All</a></li>
                                                        </ul>
                                                    </span> rows per page</span></div>
                                            <div class="pull-right pagination">
                                                <ul class="pagination">
                                                    <li class="page-item page-pre"><a class="page-link" href="#">‹</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item page-last-separator disabled"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item page-last"><a class="page-link" href="#">80</a>
                                                    </li>
                                                    <li class="page-item page-next"><a class="page-link" href="#">›</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sub table</h4>
                                    <div class="bootstrap-table">
                                        <div class="fixed-table-toolbar"></div>
                                        <div class="fixed-table-container" style="padding-bottom: 0px;">
                                            <div class="fixed-table-header" style="display: none;">
                                                <table></table>
                                            </div>
                                            <div class="fixed-table-body">
                                                <div class="fixed-table-loading" style="top: 41.5px;">正在努力地載入資料，請稍候……
                                                </div>
                                                <div class="bootstrap-table"><div class="fixed-table-toolbar"></div><div class="fixed-table-container" style="padding-bottom: 0px;"><div class="fixed-table-header" style="display: none;"><table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 57.5px;">正在努力地載入資料，請稍候……</div><table id="subtable" data-detail-view="true" class="table table-hover">
                                                    <thead><tr><th class="detail" rowspan="1"><div class="fht-cell"></div></th><th class="detail" style="" rowspan="1" data-field="field0"><div class="th-inner sortable both">Cell0</div><div class="fht-cell"></div></th><th style="" data-field="field1"><div class="th-inner sortable both">Cell1</div><div class="fht-cell"></div></th><th style="" data-field="field2"><div class="th-inner sortable both">Cell2</div><div class="fht-cell"></div></th><th style="" data-field="field3"><div class="th-inner sortable both">Cell3</div><div class="fht-cell"></div></th><th style="" data-field="field4"><div class="th-inner sortable both">Cell4</div><div class="fht-cell"></div></th><th style="" data-field="field5"><div class="th-inner sortable both">Cell5</div><div class="fht-cell"></div></th><th style="" data-field="field6"><div class="th-inner sortable both">Cell6</div><div class="fht-cell"></div></th><th style="" data-field="field7"><div class="th-inner sortable both">Cell7</div><div class="fht-cell"></div></th><th style="" data-field="field7"><div class="th-inner ">
                                                                <div class="th-inner sortable both">Cell7</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th></tr></thead>
                                                    <tbody><tr data-index="0"> <td> <a class="detail-icon" href="#"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a> </td> <td class="detail" style="">Row-0-0</td> <td style="">Row-0-1</td> <td style="">Row-0-2</td> <td style="">Row-0-3</td> <td style="">Row-0-4</td> <td style="">Row-0-5</td> <td style="">Row-0-6</td> <td style="">Row-0-7</td> <td style="">Row-0-7</td> </tr></tbody>
                                                </table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div></div><div class="fixed-table-pagination" style="display: none;"></div></div><div class="clearfix"></div>
                                            </div>
                                            <div class="fixed-table-footer" style="display: none;">
                                                <table>
                                                    <tbody>
                                                        <tr></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fixed-table-pagination" style="display: none;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table Locale</h4>

                                    <div class="bootstrap-table">
                                        <div class="fixed-table-toolbar">
                                            <div class="bs-bars pull-left">
                                                
                                            </div>
                                            <div class="columns columns-right btn-group pull-right"><button class="btn btn-default" type="button" name="refresh" aria-label="refresh" title="重新整理"><i class="glyphicon fas fa-history"></i></button><button class="btn btn-default" type="button" name="toggle" aria-label="toggle" title="切換"><i class="glyphicon fas fa-toggle-off"></i></button>
                                                <div class="keep-open btn-group" title="列"><button type="button" aria-label="columns" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon fas fa-list"></i>
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="menuitem"><label><input type="checkbox" data-field="id" value="0" checked="checked">
                                                                ID</label></li>
                                                        <li role="menuitem"><label><input type="checkbox" data-field="name" value="1" checked="checked"> Item
                                                                Name</label></li>
                                                        <li role="menuitem"><label><input type="checkbox" data-field="price" value="2" checked="checked"> Item
                                                                Price</label></li>
                                                    </ul>
                                                </div>
                                                <div class="export btn-group"><button class="btn btn-default dropdown-toggle" aria-label="export type" title="Export data" data-toggle="dropdown" type="button"><i class="glyphicon fas fa-share-alt"></i> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="menuitem" class="dropdown-item" data-type="json"><a href="javascript:void(0)">JSON</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="xml"><a href="javascript:void(0)">XML</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="csv"><a href="javascript:void(0)">CSV</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="txt"><a href="javascript:void(0)">TXT</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="sql"><a href="javascript:void(0)">SQL</a></li>
                                                        <li role="menuitem" class="dropdown-item" data-type="excel"><a href="javascript:void(0)">MS-Excel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pull-right search"><input class="form-control" type="text" placeholder="搜尋"></div>
                                        </div>
                                        <div class="fixed-table-container" style="height: 254.328px; padding-bottom: 40.5px;">
                                            <div class="fixed-table-header" style="margin-right: 0px;">
                                                <table class="table table-hover" style="width: 997px;">
                                                    <thead>
                                                        <tr>
                                                            <th style="" data-field="id">
                                                                <div class="th-inner ">ID</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="" data-field="name">
                                                                <div class="th-inner ">Item Name</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="" data-field="price">
                                                                <div class="th-inner ">Item Price</div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="fixed-table-body">
                                                <div class="fixed-table-loading" style="top: 41.5px; display: none;">
                                                    正在努力地載入資料，請稍候……</div>
                                                <div class="bootstrap-table"><div class="fixed-table-toolbar"><div class="bs-bars pull-left"><div class="toolbar">
                                                    <select class="form-control" id="locale">
                                                        <option value="af-ZA">af-ZA</option>
                                                        <option value="ar-SA">ar-SA</option>
                                                        <option value="ca-ES">ca-ES</option>
                                                        <option value="cs-CZ">cs-CZ</option>
                                                        <option value="da-DK">da-DK</option>
                                                        <option value="de-DE">de-DE</option>
                                                        <option value="el-GR">el-GR</option>
                                                        <option value="en-US">en-US</option>
                                                        <option value="es-AR">es-AR</option>
                                                        <option value="es-CL">es-CL</option>
                                                        <option value="es-CR">es-CR</option>
                                                        <option value="es-ES">es-ES</option>
                                                        <option value="es-MX">es-MX</option>
                                                        <option value="es-NI">es-NI</option>
                                                        <option value="es-SP">es-SP</option>
                                                        <option value="et-EE">et-EE</option>
                                                        <option value="eu-EU">eu-EU</option>
                                                        <option value="fa-IR">fa-IR</option>
                                                        <option value="fi-FI">fi-FI</option>
                                                        <option value="fr-BE">fr-BE</option>
                                                        <option value="fr-FR">fr-FR</option>
                                                        <option value="he-IL">he-IL</option>
                                                        <option value="hr-HR">hr-HR</option>
                                                        <option value="hu-HU">hu-HU</option>
                                                        <option value="id-ID">id-ID</option>
                                                        <option value="it-IT">it-IT</option>
                                                        <option value="ja-JP">ja-JP</option>
                                                        <option value="ka-GE">ka-GE</option>
                                                        <option value="ko-KR">ko-KR</option>
                                                        <option value="ms-MY">ms-MY</option>
                                                        <option value="nb-NO">nb-NO</option>
                                                        <option value="nl-NL">nl-NL</option>
                                                        <option value="pl-PL">pl-PL</option>
                                                        <option value="pt-BR">pt-BR</option>
                                                        <option value="pt-PT">pt-PT</option>
                                                        <option value="ro-RO">ro-RO</option>
                                                        <option value="ru-RU">ru-RU</option>
                                                        <option value="sk-SK">sk-SK</option>
                                                        <option value="sv-SE">sv-SE</option>
                                                        <option value="th-TH">th-TH</option>
                                                        <option value="tr-TR">tr-TR</option>
                                                        <option value="uk-UA">uk-UA</option>
                                                        <option value="ur-PK">ur-PK</option>
                                                        <option value="uz-Latn-UZ">uz-Latn-UZ</option>
                                                        <option value="vi-VN">vi-VN</option>
                                                        <option value="zh-CN" selected="">zh-CN</option>
                                                        <option value="zh-TW">zh-TW</option>
                                                    </select>
                                                </div></div><div class="columns columns-right btn-group pull-right"><button class="btn btn-default" type="button" name="refresh" aria-label="refresh" title="重新整理"><i class="glyphicon fas fa-history"></i></button><button class="btn btn-default" type="button" name="toggle" aria-label="toggle" title="切換"><i class="glyphicon fas fa-toggle-off"></i></button><div class="keep-open btn-group" title="列"><button type="button" aria-label="columns" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon fas fa-list"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem"><label><input type="checkbox" data-field="id" value="0" checked="checked"> 
                                                                <div class="th-inner ">ID</div>
                                                                <div class="fht-cell"></div>
                                                            </label></li><li role="menuitem"><label><input type="checkbox" data-field="name" value="1" checked="checked"> 
                                                                <div class="th-inner ">Item Name</div>
                                                                <div class="fht-cell"></div>
                                                            </label></li><li role="menuitem"><label><input type="checkbox" data-field="price" value="2" checked="checked"> 
                                                                <div class="th-inner ">Item Price</div>
                                                                <div class="fht-cell"></div>
                                                            </label></li></ul></div><div class="export btn-group"><button class="btn btn-default dropdown-toggle" aria-label="export type" title="Export data" data-toggle="dropdown" type="button"><i class="glyphicon fas fa-share-alt"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem" class="dropdown-item" data-type="json"><a href="javascript:void(0)">JSON</a></li><li role="menuitem" class="dropdown-item" data-type="xml"><a href="javascript:void(0)">XML</a></li><li role="menuitem" class="dropdown-item" data-type="csv"><a href="javascript:void(0)">CSV</a></li><li role="menuitem" class="dropdown-item" data-type="txt"><a href="javascript:void(0)">TXT</a></li><li role="menuitem" class="dropdown-item" data-type="sql"><a href="javascript:void(0)">SQL</a></li><li role="menuitem" class="dropdown-item" data-type="excel"><a href="javascript:void(0)">MS-Excel</a></li></ul></div></div><div class="pull-right search"><input class="form-control" type="text" placeholder="搜尋"></div></div><div class="fixed-table-container" style="height: 254.328px; padding-bottom: 56.5px;"><div class="fixed-table-header" style="margin-right: 0px;"><table class="table table-hover" style="width: 868px;"><thead><tr><th style="" data-field="id"><div class="th-inner ">
                                                                <div class="th-inner ">ID</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th><th style="" data-field="name"><div class="th-inner ">
                                                                <div class="th-inner ">Item Name</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th><th style="" data-field="price"><div class="th-inner ">
                                                                <div class="th-inner ">Item Price</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th></tr></thead></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 57.5px; display: none;">正在努力地載入資料，請稍候……</div><table id="localetable" data-locale="zh-CN" data-height="460" data-toolbar=".toolbar" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-export="true" data-pagination="true" data-url="js/data1.json" class="table table-hover" style="margin-top: -56.5px;">
                                                    <thead><tr><th style="" data-field="id"><div class="th-inner ">
                                                                <div class="th-inner ">ID</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th><th style="" data-field="name"><div class="th-inner ">
                                                                <div class="th-inner ">Item Name</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th><th style="" data-field="price"><div class="th-inner ">
                                                                <div class="th-inner ">Item Price</div>
                                                                <div class="fht-cell"></div>
                                                            </div><div class="fht-cell"></div></th></tr></thead>
                                                    <tbody><tr class="no-records-found"><td colspan="3">沒有找到符合的結果</td></tr></tbody>
                                                </table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div></div><div class="fixed-table-pagination" style="display: none;"><div class="pull-left pagination-detail"><span class="pagination-info">顯示第 1 到第 0 項記錄，總共 0 項記錄</span><span class="page-list" style="display: none;">每頁顯示 <span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem" class="active"><a href="#">10</a></li></ul></span> 項記錄</span></div><div class="pull-right pagination" style="display: none;"><ul class="pagination"><li class="page-item page-pre"><a class="page-link" href="#">‹</a></li><li class="page-item page-next"><a class="page-link" href="#">›</a></li></ul></div></div></div><div class="clearfix"></div>
                                            </div>
                                            <div class="fixed-table-footer" style="display: none;">
                                                <table>
                                                    <tbody>
                                                        <tr></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fixed-table-pagination" style="display: none;">
                                            <div class="pull-left pagination-detail"><span class="pagination-info">顯示第 1
                                                    到第
                                                    0 項記錄，總共 0 項記錄</span><span class="page-list" style="display: none;">每頁顯示
                                                    <span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span>
                                                            <span class="caret"></span></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li role="menuitem" class="active"><a href="#">10</a></li>
                                                        </ul>
                                                    </span> 項記錄</span></div>
                                            <div class="pull-right pagination" style="display: none;">
                                                <ul class="pagination">
                                                    <li class="page-item page-pre"><a class="page-link" href="#">‹</a>
                                                    </li>
                                                    <li class="page-item page-next"><a class="page-link" href="#">›</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
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
    <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
    <script src="../assets/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="../assets/node_modules/bootstrap-table/dist/bootstrap-table-locale-all.min.js"></script>
    <script src="../assets/node_modules/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js"></script>
    <script src="dist/js/pages/bootstrap-table.init.js"></script>
</body>

</html>