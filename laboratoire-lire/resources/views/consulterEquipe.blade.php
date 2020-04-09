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

            <li > <img src="layout/logo.jpg" alt="Cinque Terre" style="height:40px;width:45px; padding:0px; margin-top:8px;"></li>

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

<br><br>
  <!--  <div class="col-md-5"></div>
    <div class="col-md-4">
     <img src="layout/logo.jpg" alt="Cinque Terre">
     </div>
     <br><br>
     <div class="col-md-3"></div>
     <br><br><br><br><br><br><br><br><br><br>

    -->

   <section class="content">

<div class="row">
<div class="col-xs-2"></div>
<div class="col-xs-8">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Profile Equipe</h3>

      <div class="box-tools">
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Nom</th>
          <th>Acronyme</th>
          <th>Etat</th>
          <th>date_creation </th>
        </tr>


<?php 
    $equipes  = DB::select('select * from equipes where id = ?',['1']);
    foreach($equipes as $equipe){                  
?>
        <tr>
          <td><span class="label label-primary"><?php  echo $equipe->nom ; ?></span></td>
          <td><?php  echo $equipe->acronyme ; ?></td>
          <td><?php  echo $equipe->etat ; ?></td>
          <td><?php  echo $equipe->date_creation ; ?></td>
        </tr>

      </table>
       <br><br>
       <td><span class="label label-danger">desciption :</span></td>
      <p><?php  echo $equipe->description ; ?></p>
 <?php 
    }                 
?>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<div class="col-xs-2"></div>
</div>


<div class="row">
<div class="col-xs-2"></div>
<div class="col-xs-8">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Les membres de l'equipe </h3>

      <div class="box-tools">
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Grade</th>
          <th>Email</th>
        </tr>


<?php 
    $membres  = DB::select('select * from appartenances, membres, users where appartenances.id_membre = membres.id and membres.id=users.id and appartenances.id_equipe = ?',['1']);
    foreach($membres as $membre){                  
?>
        <tr>
          <td><span class="label label-primary"><?php  echo $membre->nom ; ?></span></td>
          <td><?php  echo $membre->prenom ; ?></td>
          <td><?php  echo $membre->grade ; ?></td>
          <td><?php  echo $membre->email ; ?></td>
        </tr>


 <?php 
    }                 
?>
      </table>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<div class="col-xs-2"></div>
</div>























    </section>


  </div>
  <!-- /.content-wrapper -->
  <!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content --><!-- Main content 
  https://developers.facebook.com/docs/plugins/page-plugin
  -->
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




</body>
</html>