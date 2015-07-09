<!DOCTYPE html>
<html>

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>EXTENDS</title>
        <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
        <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
        <meta name="author" content="AdminDesigns">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font CSS (Via CDN) -->
        <!--<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">-->

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/theme.css">
        
        <!-- icons -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>/fonts/glyphicons-pro/glyphicons-pro.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $this->request->webroot; ?>img/favicon.ico">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/jquery-1.11.1.min.js"></script>
    </head>

    <body class="blank-page">  

        <!-- Start: Main -->
        <div id="main">

            <!-- Start: Header -->
            <header class="navbar navbar-fixed-top bg-info">
                <div class="navbar-branding">
                    <a class="navbar-brand" href="dashboard.html"> <b>EXTENDS </b> </a>
                    <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                    <ul class="nav navbar-nav pull-right hidden">
                        <li>
                            <a href="#" class="sidebar-menu-toggle">
                                <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="sidebar-menu-toggle" href="#">
                            <span class="octicon octicon-ruby fs18"></span>
                        </a>
                    </li>
                    <li>
                        <a class="topbar-menu-toggle" href="#">
                            <span class="glyphicons glyphicons-magic fs16"></span>
                        </a>
                    </li>
                    <li>
                        <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
                    </li>
                    <li class="dropdown hidden">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicons glyphicons-settings fs14"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>
                            </li>
                            <li class="divider mv5"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a class="request-fullscreen toggle-active" href="#">
                            <span class="octicon octicon-screen-full fs18"></span>
                        </a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left navbar-search ml5" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="" value="">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-item-slide">
                        <a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">
                            <span class="octicon octicon-radio-tower fs18"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn" role="menu">
                            <li class="bg-light p8">
                                <span class="fw600 pl5 lh30"> Notifications</span>
                                <span class="label label-warning label-sm pull-right lh20 h-20 mt5 mr5">12</span>
                            </li>
                            <li class="p10 br-t item-1">
                                <div class="media">
                                    <a class="media-left" href="#"> <img src="<?php echo $this->request->webroot; ?>img/avatars/2.jpg" class="mw40" alt="holder-img"> </a>
                                    <div class="media-body va-m">
                                        <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                        <a class="text-system" href="#"> Max </a>
                                    </div>
                                </div>
                            </li>
                            <li class="p10 br-t item-2">
                                <div class="media">
                                    <a class="media-left" href="#"> <img src="<?php echo $this->request->webroot; ?>img/avatars/3.jpg" class="mw40" alt="holder-img"> </a>
                                    <div class="media-body va-m">
                                        <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                        <a class="text-system" href="#"> Max </a>
                                    </div>
                                </div>
                            </li>
                            <li class="p10 br-t item-3">
                                <div class="media">
                                    <a class="media-left" href="#"> <img src="<?php echo $this->request->webroot; ?>img/avatars/4.jpg" class="mw40" alt="holder-img"> </a>
                                    <div class="media-body va-m">
                                        <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                        <a class="text-system" href="#"> Max </a>
                                    </div>
                                </div>
                            </li>
                            <li class="p10 br-t item-4">
                                <div class="media">
                                    <a class="media-left" href="#"> <img src="<?php echo $this->request->webroot; ?>img/avatars/5.jpg" class="mw40" alt="holder-img"> </a>
                                    <div class="media-body va-m">
                                        <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                        <a class="text-system" href="#"> Max </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="flag-xs flag-us"></span>
                            <span class="fw600">US</span>
                        </a>
                        <ul class="dropdown-menu animated animated-short flipInX" role="menu">
                            <li>
                                <a href="javascript:void(0);" class="fw600">
                                    <span class="flag-xs flag-in mr10"></span> Hindu </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="fw600">
                                    <span class="flag-xs flag-tr mr10"></span> Turkish </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="fw600">
                                    <span class="flag-xs flag-es mr10"></span> Spanish </a>
                            </li>
                        </ul>
                    </li>
                    <li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo $this->request->webroot; ?>img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">
                            <span>John.Smith</span>
                            <span class="caret caret-tp hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                            <li class="bg-light br-b br-light p8">
                                <span class="pull-left ml10">
                                    <select id="user-status">
                                        <optgroup label="Current Status:">
                                            <option value="1-1">Away</option>
                                            <option value="1-2">Offline</option>
                                            <option value="1-3" selected="selected">Online</option>
                                        </optgroup>
                                    </select>
                                </span>

                                <span class="pull-right mr10">
                                    <select id="user-role">
                                        <optgroup label="Logged in As:">
                                            <option value="1-1">Client</option>
                                            <option value="1-2">Editor</option>
                                            <option value="1-3" selected="selected">Admin</option>
                                        </optgroup>
                                    </select>
                                </span>
                                <div class="clearfix"></div>

                            </li>
                            <li class="of-h">
                                <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                                    <span class="fa fa-envelope pr5"></span> Messages
                                    <span class="pull-right lh20 h-20 label label-warning label-sm">2</span>
                                </a>
                            </li>
                            <li class="br-t of-h">
                                <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                                    <span class="fa fa-user pr5"></span> Friends
                                    <span class="pull-right lh20 h-20 label label-warning label-sm">6</span>
                                </a>
                            </li>
                            <li class="br-t of-h">
                                <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                                    <span class="fa fa-gear pr5"></span> Account Settings </a>
                            </li>
                            <li class="br-t of-h">
                                <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                                    <span class="fa fa-power-off pr5"></span> Logout </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <!-- End: Header -->

            <!-- Start: Sidebar -->
            <?php echo $this->element('sidebar/admin'); ?>

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">

                <!-- Start: Topbar-Dropdown -->
                <div id="topbar-dropmenu">
                    <div class="topbar-menu row">
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-success">
                                <span class="metro-icon glyphicons glyphicons-inbox"></span>
                                <p class="metro-title">Messages</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-info">
                                <span class="metro-icon glyphicons glyphicons-parents"></span>
                                <p class="metro-title">Users</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-alert">
                                <span class="metro-icon glyphicons glyphicons-headset"></span>
                                <p class="metro-title">Support</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-primary">
                                <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                                <p class="metro-title">Settings</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-warning">
                                <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                                <p class="metro-title">Videos</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-system">
                                <span class="metro-icon glyphicons glyphicons-picture"></span>
                                <p class="metro-title">Pictures</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End: Topbar-Dropdown -->

                <!-- Start: Topbar -->
                <header id="topbar">
                    <div class="topbar-left">
                        <ol class="breadcrumb">
                            <li class="crumb-active">
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li class="crumb-icon">
                                <a href="dashboard.html">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li class="crumb-link">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="crumb-trail">Dashboard</li>
                        </ol>
                    </div>
                    <div class="topbar-right">
                        <div class="ib topbar-dropdown">
                            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
                            <select id="topbar-multiple" class="hidden" multiple="multiple">
                                <optgroup label="Filter By:">
                                    <option value="1-1">Last 30 Days</option>
                                    <option value="1-2" selected="selected">Last 60 Days</option>
                                    <option value="1-3">Last Year</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                            <a href="#" class="pl5"> <i class="fa fa-sign-in fs22 text-primary"></i>
                                <span class="badge badge-hero badge-danger">3</span>
                            </a>
                        </div>
                    </div>
                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <?= $this->fetch('content') ?>  
                <script>
                    function cargarmodal(urll)
                    {
                        jQuery("#spin-cargando-mod").addClass('show');
                        jQuery('#modal-principal').modal('show', {backdrop: 'static'});
                        jQuery("#divmodalimprenta").load(urll, function (responseText, textStatus, req) {
                            if (textStatus == "error")
                            {
                                alert("error!!!");
                            }
                            else {
                                jQuery("#spin-cargando-mod").removeClass('show');
                            }
                        });

                    }
                </script>
                <div id="modal-principal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div id="spin-cargando-mod" class="indicator"><span class="spinner spinner3"></span></div>
                            <div id="divmodalimprenta">

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>            
                <!-- End: Content -->

            </section>

            <!-- Start: Right Sidebar -->
            <aside id="sidebar_right" class="nano">
                <div class="sidebar_right_content nano-content">
                    <div class="tab-block sidebar-block br-n">
                        <ul class="nav nav-tabs tabs-border nav-justified hidden">
                            <li class="active">
                                <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                            </li>
                            <li>
                                <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                            </li>
                            <li>
                                <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                            </li>
                        </ul>
                        <div class="tab-content br-n">
                            <div id="sidebar-right-tab1" class="tab-pane active">

                                <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                                <div class="progress mh5">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                        <span class="fs11">DB Request</span>
                                    </div>
                                </div>
                                <div class="progress mh5">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                        <span class="fs11 text-left">Server Load</span>
                                    </div>
                                </div>
                                <div class="progress mh5">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                        <span class="fs11 text-left">Server Connections</span>
                                    </div>
                                </div>

                                <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5">132</h3>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                    </div>
                                </div>

                                <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5">212</h3>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                    </div>
                                </div>

                                <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5">82.5</h3>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                    </div>
                                </div>

                                <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                                <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                            </div>
                            <div id="sidebar-right-tab2" class="tab-pane"></div>
                            <div id="sidebar-right-tab3" class="tab-pane"></div>
                        </div>
                        <!-- end: .tab-content -->
                    </div>
                </div>
            </aside>
            <!-- End: Right Sidebar -->

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->

        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/jquery_ui/jquery-ui.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/bootstrap/bootstrap.min.js"></script>

        <!-- Theme Javascript -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/utility/utility.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/main.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/demo.js"></script>    

        <?php echo $this->fetch('scriptjs'); ?>
        <script type="text/javascript">
          jQuery(document).ready(function () {

              "use strict";

              // Init Theme Core    
              Core.init();

              // Init Theme Core    
              Demo.init();

          });
        </script>
        <!-- END: PAGE SCRIPTS -->

    </body>

</html>