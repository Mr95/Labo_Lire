<!doctype html>
<html lang="{{ app()->getLocale() }}">
        
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>AdminLTE 2 | Top Navigation</title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- Bootstrap 3.3.7 -->
          <link rel="stylesheet" href="layout/bower_components/bootstrap/dist/css/bootstrap.min.css">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="layout/bower_components/font-awesome/css/font-awesome.min.css">
          <!-- Ionicons -->
          <link rel="stylesheet" href="layout/bower_components/Ionicons/css/ionicons.min.css">
          <!-- Theme style -->
          <link rel="stylesheet" href="layout/dist/css/AdminLTE.min.css">
          <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
          <link rel="stylesheet" href="layout/dist/css/skins/_all-skins.min.css">
        
          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        
          <!-- Google Font -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
        <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
        <body class="hold-transition skin-blue layout-top-nav">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">

            <li ><a href="http://www.univ-constantine2.dz/">UC2 <span class="sr-only">(current)</span></a></li>

            <li class="active"><a href="{{ url('/') }}">ACCUEIL <span class="sr-only">(current)</span></a></li>

            <li class=""><a href="{{ url('/equipes') }}">EQUIPES DE RECH. <span class="sr-only">(current)</span></a></li>

            <li class=""><a href="{{ url('/productions') }}">PRODUCTION SC. <span class="sr-only">(current)</span></a></li>

            <li class=""><a href="{{ url('/projets') }}">PROJETS DE RECH. <span class="sr-only">(current)</span></a></li>

            <li class=""><a href="{{ url('/manifestation') }}">MANIFESTATIONS SC. <span class="sr-only">(current)</span></a></li>
            
            <li><a href="{{ url('/bilan') }}">BILAN DGRSDT <span class="sr-only">(current)</span></a></li>

            <li><a href="{{ url('/contact') }}">Contact <span class="sr-only">(current)</span></a></li>

            <a  class="btn bg-orange btn-flat margin" href="{{ route('login') }}"> Login</a>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">


          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
       
      </section>

    <div class="col-md-5"></div>
    <div class="col-md-4">
     <img src="layout/logo.jpg" alt="Cinque Terre">
     </div>
     <br><br>
     <div class="col-md-3"></div>
     <br><br>

      <!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content -->
      <section class="content"><br><br><br><br><br>

          <!-- /. start col div -->          
        <div class="col-md-8">
          <!-- /. start col div -->
          <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Présentation du laboratoire</h3>
          </div>
          <div class="box-body">
          <div id="HTMLtoPDF1">
          <?php  
            $descriptions  = Illuminate\Support\Facades\DB::select('select description from laboratoires where id = ?', [1]);  
             foreach($descriptions as $description){
             echo $description->description ;
              }                  
           ?>
           </div>
            <br></br>
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <a class="btn btn-block btn-success btn-sm" onclick="HTMLtoPDF1()">PDF</a>
            </div>

        </div>
          <!-- /.box-body -->
        </div>

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Mot du directeur</h3>
          </div>
          <div class="box-body">
          <div id="HTMLtoPDF">
          <?php  
            $mot_directeurs  = Illuminate\Support\Facades\DB::select('select mot_directeur from laboratoires where id = ?', [1]);  
             foreach($mot_directeurs as $mot_directeur){
             echo $mot_directeur->mot_directeur ;
              }                  
           ?>
           </div>
            <br></br>
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <a class="btn btn-block btn-success btn-sm" onclick="HTMLtoPDF()">PDF</a>
            </div>
          </div>
        </div>
        <!-- /. end col div -->
        </div>
        <!-- /. end col div -->

        <div class="col-md-4">

         
         <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>


        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          <a class="twitter-timeline" data-width="340" data-height="500" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
       </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content 
  https://developers.facebook.com/docs/plugins/page-plugin
  -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
      </div>
      <strong> 2017-2018 </strong> 
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="jsdownload/jquery-2.1.3.js"></script>
<script src="jsdownload/jspdf.js"></script>
<script src="jsdownload/pdfFromHTML.js"></script>

<script src="layout/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="layout/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="layout/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="layout/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="layout/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="layout/dist/js/demo.js"></script>

<script src="layout/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="layout/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="layout/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="layout/bower_components/raphael/raphael.min.js"></script>
<script src="layout/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="layout/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="layout/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="layout/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="layout/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="layout/bower_components/moment/min/moment.min.js"></script>
<script src="layout/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="layout/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="layout/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="layout/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="layout/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="layout/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="layout/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="layout/dist/js/demo.js"></script>




</body>
</html>