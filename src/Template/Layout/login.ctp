<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>EXTENDS</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>css//admin-forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>

      <!-- Begin: Content -->
      <section id="content">

        <div class="admin-form theme-info" id="login1">

    

          <div class="panel panel-info mt10 br-n">

            <div class="panel-heading heading-border bg-white">
              <span class="panel-title hidden">
                <i class="fa fa-sign-in"></i>Register</span>
              <div class="section row mn">
                <div class="col-sm-4">
                  
                    
                </div>
                <div class="col-sm-4">
                  <img src="<?= $this->request->webroot; ?>img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                </div>
                <div class="col-sm-4">
                  
                </div>
              </div>
            </div>

            <!-- end .form-header section -->
            <?= $this->Flash->render() ?>
           <?= $this->fetch('content') ?>
          </div>
        </div>

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= $this->request->webroot; ?>js/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?= $this->request->webroot; ?>js/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="<?= $this->request->webroot; ?>js/vendor/plugins/canvasbg/canvasbg.js"></script>

  <!-- Theme Javascript -->
  <script src="<?= $this->request->webroot; ?>js/utility/utility.js"></script>
  <script src="<?= $this->request->webroot; ?>js/demo/demo.js"></script>
  <script src="<?= $this->request->webroot; ?>js/main.js"></script>

  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core      
    Core.init();

    // Init Demo JS
    Demo.init();

    // Init CanvasBG and pass target starting location
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2,
        y: window.innerHeight / 3.3
      },
    });

  });
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
