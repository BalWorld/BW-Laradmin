<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>BW Jobs {{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Design and Developed by Bal Sankar" name="description" />
    <meta content="Bal Sankar" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

</head>

<body data-topbar="colored">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO 
                    <div class="navbar-brand-box d-none d-lg-block">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/images/logo-sm-dark.png" alt="" height="22">
                            </span>
                        </a>
                    </div> -->

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item ml-2" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- App Search-->
                    <div class=" d-none d-lg-block pt-3">

                        <div class="nav">
                            <li class="nav-item">
                                <img src="/images/logo-light.png" alt="" height="40">
                            </li>
                            <li class="nav-item pl-4">
                                <a class="nav-link text-white" href="/">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/about-us">About VNC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/solutions">Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/careers">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/contact" tabindex="-1">Contact</a>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button class="btn header-item noti-icon waves-effect" onclick="window.open('/');">
                            <i class="mdi mdi-tune"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="ml-1">
                                {{ Auth::user()->name }}
                            </span>
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" data-toggle="modal" data-target="#userprofile"><i
                                    class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="dashboard" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-layout-grid2 px-1"></i></div>
                                <span class="badge badge-pill badge-success float-right">3</span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="responses" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-view-list-alt px-1"></i></div>
                                <span>Job Responses</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-bag px-1"></i></div>
                                <span>Careers</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="jobs">View all Job Lisiting</a></li>
                                <li><a href="add">Add a New Job</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Email Services</li>


                        <li>
                            <a href="#" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-view-list-alt px-1"></i></div>
                                <span>MS Office Online</span>
                            </a>
                        </li>


                        <li>
                            <a href="#" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-view-list-alt px-1"></i></div>
                                <span>Webmail</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div>
                                <span>Bootstrap UI</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-badge.html">Badge</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-navs.html">Navs</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-video.html">Video</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Developer</li>

                        <li>
                            <a data-toggle="modal" data-target="#about" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-info"></i>
                                </div>
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-exclamation-circle"></i>
                                </div>
                                <span>Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-exclamation-circle"></i>
                                </div>
                                <span>Github</span>
                            </a>

                        </li>
                        <li>
                            <a href="calendar.html" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-exclamation-circle"></i>
                                </div>
                                <span>Report a Bug</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @yield('content')
            </div>
            <!-- End Page-content -->


            <!--  modal Profile -->
            <div id="userprofile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">User Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 mb-3">
                                    <label for="profilename">Name</label>
                                    <input type="text" class="form-control" id="profilename" name="name"
                                        placeholder="name" value="{{ Auth::user()->name }}" disabled>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="profileemail">Email</label>
                                    <input type="email" class="form-control" id="profileemail" name="email"
                                        placeholder="email" value="{{ Auth::user()->email }}" disabled>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="profileprovider">Login Auth</label>
                                    <input type="text" class="form-control" id="profileprovider" name="provider"
                                        placeholder="InApp Login" value="{{ Auth::user()->provider }}" disabled>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <input type="submit" name="submit" class="btn btn-secondary waves-effect"
                                        value="Update Status">
                                </div>

                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->


            <!--  modal About -->
            <div id="about" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">About</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div>
                                <p>Based on BW-Laradmin<br>Laravel 7.3</p>
                                <p>Theme Engine : Bal World ModernAdmin</p>
                                <p>Designed and Developed by Bal Sankar. <br> Made with Love in Thrissur.</p>
                                <div class="col-12 p-0 mb-2" id="bw-showupdate"
                                    style="display:none;padding-left:-15px;">
                                    <iframe name="bw-updatecheck" id="bw-updatecheck" width="100%" style="border:none;"
                                        height="150px;"></iframe>
                                </div>
                                <a class="btn btn-success btn-rounded dropdown-toggle"
                                    href="https://balworld.in/applications/updates/BW-laradmin" target="bw-updatecheck"
                                    onclick="javascript:showDiv();">Check
                                    for Updates
                                </a>
                                <a class="btn btn-dark btn-rounded dropdown-toggle"
                                    href="https://balworld.in/applications/updates/BW-laradmin" target="_blank">View on
                                    Github
                                </a>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <script>
            function showDiv() {
                div = document.getElementById('bw-showupdate');
                div.style.display = "block";
                document.getElementById('bw-updatecheck').onload = function() {
                    alert('Check Successful');
                };
            }
            </script>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            ©2020 VNC Digital Services. Powered by BW-Laradmin.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Designed and Developed by <a href="https://www.balworld.in" target="_blank">Bal
                                    Sankar</a> with <i class="mdi mdi-heart text-danger"></i> in
                                Thrissur
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="/libs/jquery/jquery.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/metismenu/metisMenu.min.js"></script>
    <script src="/libs/simplebar/simplebar.min.js"></script>
    <script src="/libs/node-waves/waves.min.js"></script>

    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

    <!-- Required datatable js -->
    <script src="/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/libs/jszip/jszip.min.js"></script>
    <script src="/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="/js/pages/form-validation.init.js"></script>

    <!-- Datatable init js -->
    <script src="/js/pages/datatables.init.js"></script>

    <script src="/js/main.js"></script>
    <script src="/js/balworld_laravel.js"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

</body>

</html>
