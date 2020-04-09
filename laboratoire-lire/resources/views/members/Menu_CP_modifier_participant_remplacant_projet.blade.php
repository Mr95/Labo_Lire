<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LABO LIRE | designer participant projet</title>
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
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>IRE</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LABO</b>LIRE</span>
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
            $users  = Illuminate\Support\Facades\DB::select('select nom, prenom from membres where id = ?', [Session::get('id_CP')]);
             foreach($users as $user){
             echo $user->nom.' '.$user->prenom;
              }                  
           ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="../layout/logo.jpg" alt="Cinque Terre" height="125" width="125">
                <br><br>
                <p>
                <?php  
                 $users  = Illuminate\Support\Facades\DB::select('select nom, prenom from membres where id = ?', [Session::get('id_CP')]);
                foreach($users as $user){
                ?>
                <b><?php echo $user->nom.' '.$user->prenom;?></b>
                <?php 
                }                  
                ?>
                  <small>
                  <?php  
                   $users  = Illuminate\Support\Facades\DB::select('select grade from membres where id = ?', [Session::get('id_CP')]);
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
                  <a href="{{url('Chef_Projet/Profil')}}" class="btn btn-default btn-flat">Profile</a>
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
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>


		<!-- 2eme fonction -->
        <li>
            <a href="../Chef_Projet">
              <i class="fa fa-th"></i> <span>Menu</span>
              
            </a>
          </li>
		<!-- 4eme fonction -->
        

        
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
        <small>Chef de projet </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://univ-constantine2.dz/laboratoires/lablire/index-2.html"><i class="fa fa-dashboard"></i> UC2</a></li>
        <li class="active">Menu</li>
      </ol>
    </section>

    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Modifier participants</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         

          <?php
  

            $id_membre = Session::get('id_CP');
            
            $id_projet = Session::get('id_projet_concerner') ;

           /* $etats = DB::select('select * from projets where id = ?', [$id_projet]);

            foreach($etats as $e){

                $eprojets = $e->etat ;

            }*/


            $equipes  = DB::select('select * from appartenances where id_membre = ?', [$id_membre]);
  

            foreach($equipes as $equipe){

                $id_equipe = $equipe->id_equipe ;

            }


            $membres = DB::select('select * from equipes , membres , appartenances  where membres.id = appartenances.id_membre and equipes.id = appartenances.id_equipe and appartenances.id_equipe = ?  and membres.id != ? and membres.grade != ? and membres.grade != ? ' , [ $id_equipe,$id_membre,'CE','CP']);
  


    ?>

        @if (session('status'))
                 <div class="alert alert-info">
                     {{ session('status') }}
                 </div>
        @endif
       
        @if (session('status1'))
            <div class="alert alert-danger">
                {{ session('status1') }}
            </div>
        @endif
        

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nom </th>
                    <th>Prenom</th>
                    <th>Grade</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($membres as $membre){  ?>
                  
                    <?php
                          
                          $id = 0 ;
                          $etat_projet ='';
                             
                             $parts = DB::select('select * from projets,participations,membres where projets.id = participations.id_projet and membres.id = participations.id_membre and projets.id = ? and membres.id = ?', [Session::get('id_projet_concerner'),$membre->id_membre]);

                             foreach($parts as $part){

                              $id = $part->id ;

                             
                             }

                             if($id > 0){   ?>
                            
                             <?php }else{ ?>

                                <?php
                                   
                                   $check = 0 ;
                                    
                                     $checks_encours = DB::select('select * from projets,participations,membres where projets.id = participations.id_projet and membres.id = participations.id_membre  and projets.etat = ? and membres.id = ?', ['En cours',$membre->id_membre]);
                                     
                                     foreach($checks_encours as $check_encour){

                                        $check = $check_encour->id_projet ;
                                     }

                                     if($check > 0  ){}else{

                                     ?>

                                <tr>
                                        <td>
                                            <?php 
                                                if($membre->nom == ''){ 
                    
                                                    echo "profile non complet";
                    
                                                }else{
                                                    
                                                    echo $membre->nom ; 
                                                }
                                                
                                                ?>
                                        
                                        </td>
                                        <td>
                                            
                                                <?php 
                                                if($membre->prenom ==''){
                                                    echo "profile non complet";
                                                }else{
                                                   
                                                    echo $membre->prenom ;
                                                }
                                                
                                                ?>
                                        
                                        </td>
                                        <td><?php echo $membre->grade ;?></td>
                                        <td><?php 
                                                if($membre->nom=='' & $membre->prenom =='' ){  ?>
                                                   
                                                   <a href="#" class="btn btn-warning">Profile non complet &nbsp;&nbsp;<i class="fa fa-ban"></i></a>
                    
                    
                                             <?php   }else{  ?>
                                            
                                              
                                            <a href="ModifierParticipant/<?php echo Session::get('id_membre_a_remplacer') ; ?>/<?php echo Session::get('id_projet_concerner'); ?>/<?php echo $membre->id_membre ; ?>" class="btn btn-info">Designer &nbsp;&nbsp;<i class="fa fa-check-circle"></i></a>
                                                
                                            <?php   }?>
                                        
                                        </td>
                                      </tr>
                        
                            
                            <?php       } }?>



                  
                  
                    
                
                
                  <?php } ?>
                
                
                </tbody>
              </table>

































































        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
        <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
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
</body>
</html>
