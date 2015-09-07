<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Agenda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- inject:bower:css -->
        <link rel="stylesheet" href="/vendor/datatables/media/css/jquery.dataTables.css">
        <link rel="stylesheet" href="/vendor/components-font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="/vendor/dropzone/dist/min/dropzone.min.css">
        <link rel="stylesheet" href="/vendor/angular-datatables/dist/plugins/bootstrap/datatables.bootstrap.css">
        <link rel="stylesheet" href="/vendor/angular-datepicker/dist/index.css">
        <link rel="stylesheet" href="/vendor/morris.js/morris.css">
        <link rel="stylesheet" href="/vendor/angular-ui-select/dist/select.css">
        <link rel="stylesheet" href="/vendor/angular-ui-tree/dist/angular-ui-tree.min.css">
        <link rel="stylesheet" href="/vendor/angular-xeditable/dist/css/xeditable.css">
        <!-- endinject -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
        <!-- libraries -->
        <link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css" />
        <!-- global styles -->
        <link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.min.css" />
        <link rel="stylesheet" type="text/css" href="css/libs/nifty-component.css" />
        <!-- this page specific styles -->
        <link rel="stylesheet" href="css/libs/fullcalendar.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/fullcalendar.print.css" type="text/css" media="print" />
        <link rel="stylesheet" href="css/compiled/calendar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/compiled/calendar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/libs/morris.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/daterangepicker.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/jquery-jvectormap-1.2.2.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/dataTables.fixedHeader.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/dataTables.tableTools.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/ns-default.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/ns-style-growl.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/ns-style-bar.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/ns-style-attached.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/ns-style-other.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/ns-style-theme.css" type="text/css" />
        <!-- Favicon -->
        <!-- <link type="image/x-icon" href="favicon.png" rel="shortcut icon" /> -->
        <!-- google font libraries -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
        <!-- Hoja de estilos personalizable-->
    </head>

    <body class="theme-blue" ng-app='remuneracion'>
        <div class="md-overlay"></div>
        <div id="theme-wrapper">
            <header class="navbar" id="header-navbar">
                <div class="container">
                    <a id="logo" class="navbar-brand">
                        <img src="/img/banner_superior.png" alt="" class="normal-logo" />
                    </a>
                    <div class="clearfix">
                        <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="nav-no-collapse pull-right" id="header-nav">
                            <ul class="nav navbar-nav pull-right">
                                <li class="dropdown profile-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="img/samples/scarlet-159.png" alt="" />
                                        <span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                    </ul>
                                </li>
                                <li class="hidden-xxs">
                                    <a class="btn" href="javascript:void(0);" ng-click='logout()'>
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <div id="page-wrapper" class="container">
                <div class="row">
                    <div id="nav-col">
                        <section id="col-left" class="col-left-nano">
                            <div id="col-left-inner" class="col-left-nano-content">
                                <div id="user-left-box" class="clearfix hidden-sm hidden-xs">
                                    <img alt="" src="img/samples/scarlet-159.png" />
                                    <div class="user-box">
                                        <span class="name">
                                    Bienvenido<br/>
                                    Scarlett
                                </span>
                                        <span class="status">
                                    <i class="fa fa-circle"></i> en linea
                                </span>
                                    </div>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                                    <ul class="nav nav-pills nav-stacked" nav-ctrl>
                                        <li>
                                            <a href="/contactos">
                                                <i class="fa fa-tachometer"></i>
                                                <span>Dasboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/empleados">
                                                <i class="fa fa-users"></i>
                                                <span>Contactos</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="make-small-nav">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="content-wrapper" ng-view></div>
                </div>
            </div>
        </div>
        <!-- /.main-container -->
        <!-- inject:bower:js -->
        <!-- endinject -->
        <script src="js/jquery.nanoscroller.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/snap.svg-min.js"></script>
        <script src="js/notificationFx.js"></script>
        <!-- this page specific scripts -->
        <!-- theme scripts -->
        <script src="js/scripts.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/dataTables.fixedHeader.js"></script>
        <script src="js/dataTables.tableTools.js"></script>
        <script src="js/jquery.dataTables.bootstrap.js"></script>
        <script src="/js/raphael-min.js"></script>
        <script src="/js/morris.min.js"></script>
        <script src="/js/jquery.nestable.js"></script>
    </body>

</html>
