<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LABO LIRE | Menu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../layout/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../layout/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../layout/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="Directeur" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>IRE</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>L</b>IRE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">
              <?php  
            $users  = Illuminate\Support\Facades\DB::select('select nom, prenom from membres where id = ?', [Session::get('id_DL')]);
             foreach($users as $user){
             echo $user->nom.' '.$user->prenom;
              }                  
           ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="layout/logo.jpg" alt="Cinque Terre" height="125" width="125">
                <br><br>
                <p>
                <?php  
                 $users  = Illuminate\Support\Facades\DB::select('select nom, prenom from membres where id = ?', [Session::get('id_DL')]);
                foreach($users as $user){
                ?>
                <b><?php echo $user->nom.' '.$user->prenom;?></b>
                <?php 
                }                  
                ?>
                  <small>
                  <?php  
                   $users  = Illuminate\Support\Facades\DB::select('select grade from membres where id = ?', [Session::get('id_DL')]);
                  foreach($users as $user){
                  echo $user->grade;
                   }                  
                   ?>
                  </small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
          <p>
          Directeur du Laboration<br>
          <?php  
            $users  = Illuminate\Support\Facades\DB::select('select nom, prenom from membres where id = ?', [Session::get('id_DL')]);
             foreach($users as $user){
             echo $user->nom.' '.$user->prenom;
              }                  
           ?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>

        
		<!-- 1ere fonction -->
        <li><a href="Directeur/MotDescription"><i class="fa fa-commenting-o"></i> <span>Description labo</span></a></li>

		<!-- 2eme fonction -->
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-folder"></i> <span>Consulation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Directeur/ConsulterEquipes"><i class="fa fa-users"></i> les équipes</a></li>
            <li><a href="Directeur/ConsulterMems"><i class="fa fa-user"></i>les membres</a></li>
          </ul>
        </li>

		<!-- 4eme fonction -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Gestion des équipes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Directeur/NouvelleEquipe"><i class="fa fa-circle-o"></i>nouvelle équipe</a></li>
            <li><a href="Directeur/LicenciementEquipe"><i class="fa fa-circle-o"></i>licenciement d'equipe</a></li>
            <li><a href="Directeur/ReactivationEquipe"><i class="fa fa-circle-o"></i>reactivation equipe</a></li>
            
          </ul>
        </li>

		<!-- 5eme fonction -->
        <li><a href="#"><i class="fa fa-book"></i> <span>Etablissement du bilan</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bonjour
        <small>Directeur laboratoire</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://univ-constantine2.dz/laboratoires/lablire/index-2.html"><i class="fa fa-dashboard"></i> UC2</a></li>
        <li class="active">Menu</li>
      </ol>
    </section>

    <!-- Main content -->    <!-- Main content --> 
       <!-- Main content -->    <!-- Main content -->  
         <!-- Main content -->    <!-- Main content -->    <!-- Main content --> 
            <!-- Main content -->    <!-- Main content -->    <!-- Main content -->  
              <!-- Main content -->    <!-- Main content -->    <!-- Main content --> 
                 <!-- Main content -->    <!-- Main content -->    <!-- Main content -->   
                  <!-- Main content -->    <!-- Main content -->    <!-- Main content -->   
                   <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
    <section class="content">


        <div class="row">
            <div class="col-md-6">
    
              <!-- Profile Image -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-green">
                  <!-- /.widget-user-image -->
    
                  <?php   
    
    
    
                  $membres =  DB::select('select * from membres where id = ?', [Session::get('id_profil')]) ;
                 
                     foreach($membres as $membre){
       
                         $nom = $membre->nom ;
                         $prenom = $membre->prenom ;
                         $grade = $membre->grade ;
                         $etat_civil = $membre->etat_civil ;
                         $numero_tel = $membre->num_telephone ;
                         $address = $membre->address ;
                         $date_naissance = $membre->date_naissance ; 
                         $description_membre = $membre->description ;
                         $iduserprofil = $membre->users_id;
          
                     }
       
       
                     $users = DB::select('select * from users where id = ?', [$iduserprofil]);
       
                     foreach($users as $user){
       
                        $email = $user->email ;
       
                     }
                 
                     $equipes = DB::select('select id_equipe from appartenances where id_membre = ?', [Session::get('id_profil')]);
    
    
                     foreach($equipes as $equipe){
    
                        $id_equipe = $equipe->id_equipe ;
    
                     }
    
    
                     $equipes_data = DB::select('select * from equipes where id = ?', [$id_equipe]) ;
    
                     foreach($equipes_data as $equipe_data){
    
                      $nom_equipe = $equipe_data->nom ;
    
    
                     }
    
    
                 ?>

                  <h3 class="widget-user-username"><?php echo $nom ."  " . $prenom ; ?></h3>
                  <h4 class="widget-user-desc"><?php echo 'Grade ' . $grade ; ?></h4>
                  <h5 class="widget-user-desc"><?php echo 'description: ' . $description_membre ; ?></h5>
                </div>
              </div>
    
    
             
    
    
              <div class="box box-green">
                <div class="box-body box-profile">
                  <p>Informations</p>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>NOM: </b> 
                      <p>
    
    
    
                     <span class="label label-warning pull-right"><?php echo $nom ;  ?></span>
                    </p>
                    </li>
    
    
                    <li class="list-group-item">
                      <b>PRENOM:</b> 
                     <p>
                     <span class="label label-warning pull-right"><?php echo $prenom ;  ?></span>
                    </p>
                    </li>
    
    
                    <li class="list-group-item">
                      <b>Email:</b> 
                     <p>
                     <span class="label label-warning pull-right"><?php echo $email ;  ?></span>
                    </p>
                    </li>
    
    
                    <li class="list-group-item">
                      <b>Equipe:</b> 
                      <p>
                     <span class="label label-warning pull-right"><?php  echo $nom_equipe ;  ?></span>
                    </p>
                    </li>
    
    
    
                  </ul>
    
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
    
     
              <!-- /.box -->
            </div>
            <!-- /.col -->
    
    
    
    
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next -->
    <!-- /.next --><!-- /.next -->
    
                <div class="col-md-6">
    
              <div class="box box-green">
                <div class="box-header with-border">
                  <h3 class="box-title">Informations Personnelle</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i> Etat civil</strong>
    
                  <p>
                    <span class="label label-danger"><?php
                    
                      if($etat_civil == null){
      
                        echo 'non indiqué' ;
      
                      }else{
      
                        echo $etat_civil ;
    
                      }
       
                      ?></span>
                  </p>
                  <hr>
    
    <!-- /.next -->
                  <strong><i class="fa fa-book margin-r-5"></i> NUM TELE</strong>
                  <p>
                    <span class="label label-danger"><?php
                    
                      if($numero_tel == null){
      
                        echo 'non indiqué' ;
      
                      }else{
      
                        echo $numero_tel ;
     
                      }
                          
                      ?></span>
                  </p>
                  <hr>
    
    <!-- /.next -->
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                  <p>
                    <span class="label label-danger"><?php
                    
                      if($address == null){
      
                        echo 'non indiqué' ;
      
                      }else{
      
      
                        echo $address ;
      
                      }
      
                      
                      ?></span>
                  </p>
                  <hr>
    
    <!-- /.next -->
                  <strong><i class="fa fa-pencil margin-r-5"></i> date naissance</strong>
                  <p>
                    <span class="label label-danger"><?php
                    
                      if( $date_naissance == null){
      
                        echo 'non indiqué' ;
      
                      }else{
      
                        echo  $date_naissance ;
      
                      }
      
      
                      
                      ?></span>
                  </p>
                  <hr>
    
    <!-- /.next -->
                  <strong><i class="fa fa-file-text-o margin-r-5"></i> les productions scientifique</strong>
                  <p><b>-</b> intitule</p><br>
                  <p><b>-</b> intitule</p><br>
                  
                </div>
                <!-- /.box-body -->
              </div>
    
            
                </div>
    
    
    
    <!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next -->
 
  
    <!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next -->
    
            
    
    
    
    
    
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
    
        </section>
            <!-- Main content -->    <!-- Main content -->  
              <!-- Main content -->    <!-- Main content --> 
              
              <!-- Main content -->    <!-- Main content -->    
              <!-- Main content -->    <!-- Main content -->  
                <!-- Main content -->    <!-- Main content -->  
                  <!-- Main content -->    <!-- Main content -->  
                    <!-- Main content -->    <!-- Main content -->  
                      <!-- Main content -->    <!-- Main content --> 
                         <!-- Main content -->    <!-- Main content -->
                             <!-- Main content -->    <!-- Main content --> 
                                <!-- Main content -->    <!-- Main content --> 
                                   <!-- Main content -->    <!-- Main content --> 
                <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
<div class="pull-right hidden-xs">
</div>
<strong>2017-2018
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Create the tabs --> 
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<!-- Home tab content -->
<div class="tab-pane" id="control-sidebar-home-tab">
<h3 class="control-sidebar-heading">Recent Activity</h3>
<ul class="control-sidebar-menu">
<li>
<a href="javascript:void(0)">
<i class="menu-icon fa fa-birthday-cake bg-red"></i>

<div class="menu-info">
<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

<p>Will be 23 on April 24th</p>
</div>
</a>
</li>
<li>
<a href="javascript:void(0)">
<i class="menu-icon fa fa-user bg-yellow"></i>

<div class="menu-info">
<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

<p>New phone +1(800)555-1234</p>
</div>
</a>
</li>
<li>
<a href="javascript:void(0)">
<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

<div class="menu-info">
<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

<p>nora@example.com</p>
</div>
</a>
</li>
<li>
<a href="javascript:void(0)">
<i class="menu-icon fa fa-file-code-o bg-green"></i>

<div class="menu-info">
<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

<p>Execution time 5 seconds</p>
</div>
</a>
</li>
</ul>
<!-- /.control-sidebar-menu -->

<h3 class="control-sidebar-heading">Tasks Progress</h3>
<ul class="control-sidebar-menu">
<li>
<a href="javascript:void(0)">
<h4 class="control-sidebar-subheading">
Custom Template Design
<span class="label label-danger pull-right">70%</span>
</h4>

<div class="progress progress-xxs">
<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0)">
<h4 class="control-sidebar-subheading">
Update Resume
<span class="label label-success pull-right">95%</span>
</h4>

<div class="progress progress-xxs">
<div class="progress-bar progress-bar-success" style="width: 95%"></div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0)">
<h4 class="control-sidebar-subheading">
Laravel Integration
<span class="label label-warning pull-right">50%</span>
</h4>

<div class="progress progress-xxs">
<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0)">
<h4 class="control-sidebar-subheading">
Back End Framework
<span class="label label-primary pull-right">68%</span>
</h4>

<div class="progress progress-xxs">
<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
</div>
</a>
</li>
</ul>
<!-- /.control-sidebar-menu -->

</div>
<!-- /.tab-pane -->
<!-- Stats tab content -->
<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
<!-- /.tab-pane -->
<!-- Settings tab content -->
<div class="tab-pane" id="control-sidebar-settings-tab">
<form method="post">
<h3 class="control-sidebar-heading">General Settings</h3>

<div class="form-group">
<label class="control-sidebar-subheading">
Report panel usage
<input type="checkbox" class="pull-right" checked>
</label>

<p>
Some information about this general settings option
</p>
</div>
<!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Allow mail redirect
<input type="checkbox" class="pull-right" checked>
</label>

<p>
Other sets of options are available
</p>
</div>
<!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Expose author name in posts
<input type="checkbox" class="pull-right" checked>
</label>

<p>
Allow the user to show his name in blog posts
</p>
</div>
<!-- /.form-group -->

<h3 class="control-sidebar-heading">Chat Settings</h3>

<div class="form-group">
<label class="control-sidebar-subheading">
Show me as online
<input type="checkbox" class="pull-right" checked>
</label>
</div>
<!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Turn off notifications
<input type="checkbox" class="pull-right">
</label>
</div>
<!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Delete chat history
<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
</label>
</div>
<!-- /.form-group -->
</form>
</div>
<!-- /.tab-pane -->
</div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->




<script src="../layout/tinymce/js/tinymce/tinymce.min.js"></script>

<script>
tinymce.init
({
selector: 'textarea',
plugins: [
'advlist autolink lists link image charmap print preview hr anchor pagebreak',
'searchreplace wordcount visualblocks visualchars code fullscreen',
'insertdatetime media nonbreaking save table contextmenu directionality',
'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
],
toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
image_advtab: true,
templates: [
{ title: 'Test template 1', content: 'Test 1' },
{ title: 'Test template 2', content: 'Test 2' }
],
content_css: [
'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
'//www.tinymce.com/css/codepen.min.css'
]
});﻿
</script>






























<!-- jQuery 3 -->
<script src="../layout/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../layout/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../layout/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../layout/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../layout/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../layout/dist/js/demo.js"></script>
<script>
$(document).ready(function () {
$('.sidebar-menu').tree()
})
</script>



<script>

$(document).ready( function (){ 


$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

/***********************description****************************/
$("#submit3").click(function(event){

event.preventDefault();

tinyMCE.triggerSave();

// Create an FormData object
var form = $('#description')[0];
var data = new FormData(form);

//$("#loader").show();

$.ajax({
    type: "POST",
    url: "{{ route('Membre.Profile')}}",
    data: data  ,
    processData: false,    
    contentType: false,
    //cache: false,
   // timeout: 600000,
  //  dataType: 'json',
    success: function (data) {
       
       $("#text1").text(data);
       $("#alert1").show(); 
      /*$("#loader").hide();*/
  

        }           

    });

});




/******************production********************/


$("#submit1").click(function(event){

event.preventDefault();


// Create an FormData object
var form = $('#production')[0];
var data = new FormData(form);

//$("#loader").show();

$.ajax({
type: "POST",
enctype: 'multipart/form-data',
url: "{{ route('Membre.Profile')}}",
data: data  ,
processData: false,    
contentType: false,
//cache: false,
// timeout: 600000,
//  dataType: 'json',
success: function (data) {
$("#text2").text(data);
$("#alert2").show(); 
/*$("#loader").hide();*/


}           

});

});





/******************perso********************/

$("#submit2").click(function(event){

event.preventDefault();



// Create an FormData object
var form = $('#perso')[0];
var data = new FormData(form) ;

//$("#loader").show();

$.ajax({
type: "POST",
url: "{{ route('Membre.Profile')}}",
data: data  ,
processData: false,    
contentType: false,
//cache: false,
// timeout: 600000,
//  dataType: 'json',
success: function (data) {
$("#text3").text(data);
$("#alert3").show(); 
/*$("#loader").hide();*/


}           

});

});


});

</script>


</body>
</html>
