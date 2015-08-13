<!DOCTYPE html>
<html>

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>EXTEND</title>
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
        <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/validationEngine.jquery.css" type="text/css"/>
        <?= $this->fetch('addcss') ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $this->request->webroot; ?>img/favicon.ico">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/jquery-1.11.1.min.js"></script>
        <script>
          $.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
    options.async = true;
});
        </script>
    </head>

    <body class="blank-page">  

        <!-- Start: Main -->
        <div id="main">

            <!-- Start: Header -->
            <header class="navbar navbar-fixed-top bg-info">
                <div class="navbar-branding">
                    <a class="navbar-brand" href="dashboard.html"> <b>EXTEND </b> </a>
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
                        <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
                    </li>
                    <li class="hidden-xs">
                        <a class="request-fullscreen toggle-active" href="#">
                            <span class="octicon octicon-screen-full fs18"></span>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo $this->request->webroot; ?>img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">
                            <span><?= $this->request->session()->read('Auth.User.nombre');?></span>
                            <span class="caret caret-tp hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
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

                <!-- Begin: Content -->
                <?= $this->fetch('content') ?>  
                <script>
                    function cargarmodal(urll)
                    {
                        $("#spin-cargando-mod").addClass('show');
                        $('#modal-principal').modal('show', {backdrop: 'static'});
                        $("#divmodalimprenta").load(urll, function (responseText, textStatus, req) {
                            if (textStatus == "error")
                            {
                                alert("error!!!");
                            }
                            else {
                                $("#spin-cargando-mod").removeClass('show');
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

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        
        <script src="<?php echo $this->request->webroot; ?>js/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
        <script src="<?php echo $this->request->webroot; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

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