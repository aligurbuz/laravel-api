<!DOCTYPE html>
<html lang="en">
@php
    $user = \App\Facades\Support\Admin\Authenticate::user();
    $menus = \App\Libs\Postman::menus();
    $config = $config ?? [];
    $method = request()->method();
@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/morrisjs/morris.css"
          rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/toast-master/css/jquery.toast.css"
          rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/css/style.min.css"
          rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/css/pages/dashboard1.css"
          rel="stylesheet">
    <link href="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue fixed-layout">
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
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('admin.dashboard.index')}}">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-icon.png"
                             alt="homepage" class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-light-icon.png"
                             alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-text.png"
                              alt="homepage" class="dark-logo"/>
                        <!-- Light Logo text -->
                         <img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/logo-light-text.png"
                              class="light-logo" alt="homepage"/></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav me-auto">
                    <!-- This is  -->
                    <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <li class="nav-item"><a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle text-white"><i class="fa fa-link"></i>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span
                                                        class="mail-desc">Just see the my new admin!</span> <span
                                                        class="time">9:30 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-success btn-circle text-white"><i
                                                        class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span>
                                                <span class="time">9:10 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-info btn-circle text-white"><i class="ti-settings"></i>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span>
                                                <span class="time">9:08 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span
                                                        class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:02 AM</span></div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all
                                            notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="icon-note"></i>
                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"><img
                                                        src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status online pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span
                                                        class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:30 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"><img
                                                        src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span
                                                        class="mail-desc">I've sung a song! See you at</span> <span
                                                        class="time">9:10 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"><img
                                                        src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status away pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span
                                                        class="time">9:08 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"><img
                                                        src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status offline pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span
                                                        class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:02 AM</span></div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all
                                            e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg"
                                    alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i
                                        class="fa fa-angle-down"></i></span> </a>
                        <div class="dropdown-menu dropdown-menu-end animated flipInY">
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                                Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="{{route('admin.logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i>
                                Logout</a>
                            <!-- text-->
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            @include('admin.menu')
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
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
                    <h4 class="text-themecolor">Dashboard</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            @if(is_array($config) && count($config))
                @include('admin.pages.'.$method.'_pages', ['config' => $config])
            @else
                @include('admin.pages.home')
            @endif

            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                    </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                   class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark"
                                   class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark"
                                   class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg"
                                            alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/2.jpg"
                                            alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                                class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/3.jpg"
                                            alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                                class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/4.jpg"
                                            alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                                class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/5.jpg"
                                            alt="user-img" class="img-circle"> <span>Govinda Star <small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/6.jpg"
                                            alt="user-img" class="img-circle"> <span>John Abraham<small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/7.jpg"
                                            alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img
                                            src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/8.jpg"
                                            alt="user-img" class="img-circle"> <span>Pwandeep rajan <small
                                                class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
    <footer class="footer">
        © {{ date('Y') }} Admin
        </a>
    </footer>
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
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/raphael/raphael-min.js"></script>
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/eliteadmin/dist/js/dashboard1.js"></script>
<script src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>

<script>
    $(document).ready(function () {
        $(".posting").click(function(e) {
            e.preventDefault();

            var formData = $("#postPage").serialize();

            // Loading GIF ekle
            $("#loading").html('<img src="{{\App\Libs\AppContainer::get('public_path')}}/loading.gif" alt="Yükleniyor..." width="50">');

            $.ajax({
                url: "{{ route('admin.pages.store') }}", // Laravel rota ismi
                type: "POST",
                data: formData,
                success: function(response) {
                    console.log("Başarıyla gönderildi:", response);
                    if (response.status === false) {
                        // Eğer status false ise errorMessage'ı toastr ile göster
                        $.toast({
                            heading: 'Error'
                            , text: response.errorMessage
                            , position: 'top-right'
                            , loaderBg: '#ff6849'
                            , icon: 'error'
                            , hideAfter: 3500
                            , stack: 6
                        });
                    }
                    else{

                        $.toast({
                            heading: 'Success'
                            , text: 'Entry Success'
                            , position: 'top-right'
                            , loaderBg: '#ff6849'
                            , icon: 'success'
                            , hideAfter: 3500
                            , stack: 6
                        });

                        setTimeout(function() {
                            window.location.reload();
                        }, 1);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Hata oluştu:", xhr.responseText);
                },
                complete: function() {
                    // AJAX tamamlandığında loading GIF'i kaldır
                    $("#loading").html('');
                }
            });
        });

        function updateValues() {
            let has = [];
            let doesntHave = [];

            $(".ownerSelect").each(function() {
                let value = $(this).val();
                let name = $(this).attr("name");

                if (value === "1") {
                    has.push(name);
                } else if (value === "0") {
                    doesntHave.push(name);
                }
            });

            let hasStr = has.length > 0 ? "has=" + has.join(",") : "";
            let doesntHaveStr = doesntHave.length > 0 ? "doesntHave=" + doesntHave.join(",") : "";

            let finalValue = hasStr;
            if (doesntHaveStr) {
                finalValue += (hasStr ? "::" : "") + doesntHaveStr;
            }

            $(".ownerform").val(finalValue);
        }

        $(".ownerSelect").on("change", updateValues);

        $(".ranges").on("change", function () {
            var selectedValues = $(".ranges:checked").map(function () {
                return $(this).val();
            }).get().join(",");

            $(".rangeform").val(selectedValues);
        });
    });

    function updateQueryStringParameter(uri, key, value) {
        let urlParams = new URLSearchParams(window.location.search);
        urlParams.set(key, value);
        return window.location.pathname + '?' + urlParams.toString();
    }

    function updateQueryStringParameter(uri, key, value) {
        let urlParams = new URLSearchParams(window.location.search);
        urlParams.set(key, value);
        return window.location.pathname + '?' + urlParams.toString();
    }

    function updateQueryStringParameter(uri, key, value) {
        let urlParams = new URLSearchParams(window.location.search);
        urlParams.set(key, value);
        return window.location.pathname + '?' + urlParams.toString();
    }

    function getParameterByName(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return parseInt(urlParams.get(name)) || 1;
    }

    document.addEventListener("DOMContentLoaded", function() {
        const totalPages = parseInt(document.querySelector(".lastPage").textContent.trim()) || 5;
        const currentPage = getParameterByName("page");
        const maxVisiblePages = 5;
        let paginationHtml = '';

        if (totalPages > 1) {
            paginationHtml += `<li class="page-item ${currentPage <= 1 ? 'disabled' : ''}"><a class="page-link" href="${updateQueryStringParameter(window.location.href, 'page', currentPage - 1)}">Previous</a></li>`;
        }

        if (totalPages > maxVisiblePages && currentPage > maxVisiblePages) {
            paginationHtml += `<li class="page-item"><a class="page-link" href="${updateQueryStringParameter(window.location.href, 'page', 1)}">1</a></li>`;
            paginationHtml += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
        }

        let startPage = 1;
        let endPage = Math.min(totalPages, maxVisiblePages);

        if (totalPages > maxVisiblePages && currentPage > maxVisiblePages) {
            startPage = currentPage;
            endPage = Math.min(totalPages, currentPage + (maxVisiblePages - 1));
        }

        for (let i = startPage; i <= endPage; i++) {
            paginationHtml += `<li class="page-item ${i === currentPage ? 'active' : ''}"><a class="page-link" href="${updateQueryStringParameter(window.location.href, 'page', i)}">${i}</a></li>`;
        }

        if (totalPages > endPage) {
            paginationHtml += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
            paginationHtml += `<li class="page-item"><a class="page-link" href="${updateQueryStringParameter(window.location.href, 'page', totalPages)}">${totalPages}</a></li>`;
        }

        if (totalPages > 1) {
            paginationHtml += `<li class="page-item ${currentPage >= totalPages ? 'disabled' : ''}"><a class="page-link" href="${updateQueryStringParameter(window.location.href, 'page', currentPage + 1)}">Next</a></li>`;
        }

        document.getElementById("pagination").innerHTML = paginationHtml;
    });

</script>
</body>

</html>
