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
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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
            $users  = Illuminate\Support\Facades\DB::select('select nom, prenom from membres where id = ?', [Session::get('id_CE')]);
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
                 $users  = Illuminate\Support\Facades\DB::select('select nom, prenom from membres where id = ?', [Session::get('id_CE')]);
                foreach($users as $user){
                ?>
                <b><?php echo $user->nom.' '.$user->prenom;?></b>
                <?php 
                }                  
                ?>
                  <small>
                  <?php  
                   $users  = Illuminate\Support\Facades\DB::select('select grade from membres where id = ?', [Session::get('id_CE')]);
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
                  <a href="{{url('Chef_Equipe/ConsulterProfilePerso')}}" class="btn btn-default btn-flat">Profile</a>
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

        
		<!-- 1ere fonction -->
        <li><a href="../Chef_Equipe"><i class="fa  fa-home"></i> <span>Menu</span></a></li>


        
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
        <small>Chef d'équipe</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://univ-constantine2.dz/laboratoires/lablire/index-2.html"><i class="fa fa-dashboard"></i> UC2</a></li>
        <li class="active">Menu</li>
      </ol>
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
                    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
                    <section class="content">

                      <div class="row">
                        <div class="col-md-6">
                
                          <!-- Profile Image -->
                          <div class="box box-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-green">
                              <div class="widget-user-image">
                                <img class="img-circle" src="../../dist/img/user7-128x128.jpg" alt="User Avatar">
                              </div>
                              <!-- /.widget-user-image -->
                
                              <?php   
                
                
                
                              $membres =  DB::select('select * from membres where id = ?', [Session::get('id_CE')]) ;
                             
                                 foreach($membres as $membre){
                   
                                     $nom = $membre->nom ;
                                     $prenom = $membre->prenom ;
                                     $grade = $membre->grade ;
                                     $etat_civil = $membre->etat_civil ;
                                     $numero_tel = $membre->num_telephone ;
                                     $address = $membre->address ;
                                     $date_naissance = $membre->date_naissance ; 
                                     $description_membre = $membre->description ;
                      
                                 }
                   
                   
                                 $users = DB::select('select * from users where id = ?', [Session::get('id_CE_user')]);
                   
                                 foreach($users as $user){
                   
                                    $email = $user->email ;
                   
                                 }
                             
                                 $equipes = DB::select('select id_equipe from appartenances where id_membre = ?', [Session::get('id_CE')]);
                
                
                                 foreach($equipes as $equipe){
                
                                    $id_equipe = $equipe->id_equipe ;
                
                                 }
                
                
                                 $equipes_data = DB::select('select * from equipes where id = ?', [$id_equipe]) ;
                
                                 foreach($equipes_data as $equipe_data){
                
                                  $nom_equipe = $equipe_data->nom ;
                
                
                                 }
                
                
                             ?>
                
                
                
                
                
                              <h3 class="widget-user-username"><?php echo $nom ."  " . $prenom ; ?></h3>
                              <h5 class="widget-user-desc"><?php echo 'Grade ' . $grade ; ?></h5>
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
                
                                     <!-- About Me Box -->
                
                
                
                
                
                
                
                
                
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
                              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                              <p></p>
                            </div>
                            <!-- /.box-body -->
                          </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                          
                            </div>
                
                
                
                <!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next -->
                
                
                
                
                        <div class="col-md-12">
                          <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#activity" data-toggle="tab">Description</a></li>
                              <li><a href="#timeline" data-toggle="tab">uploder les productions scientifiques</a></li>
                              <li><a href="#settings" data-toggle="tab">Modifier les informations</a></li>
                              <li><a href="#news" data-toggle="tab">Confirmer le demande de co-autheurs</a></li>
                            </ul>
                
                 <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane -->
                
                            <div class="tab-content">
                
                 <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane --> <!-- /.tab-pane -->
                
                              <div class="active tab-pane" id="activity">
                
                                <div class="post">
                                  <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                          <p> Votre Description:</p>
                                        </span>
                
                                        
                
                                  </div>
                                  <!-- /.user-block -->
                                  <p>
                
                                      <div class="alert alert-info"  id="alert1" style="display:none;" >
                                          <strong><span id="text1"> </span></strong> 
                                       </div>
                
                
                
                                    <form method="POST" id="description" action="{{ route('Chef_Equipe.ConsulterProfilePerso')}} "  class="form-horizontal">
                                    
                                      @csrf
                
                                      <textarea class="textarea" name="descmembre" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                   
                                      <?php 
                
                                      if($description_membre  == null){
                
                                        echo 'pas de description disponible' ;
                
                                      }else{
                
                                        echo $description_membre ;
                
                                      }
                
                
                
                                    ?>
                                   
                                    
                                    </textarea>
                
                
                                    <input type="hidden" class="form-control" id="inputh" name="hidden" value="description">
                
                                    <div class="form-group">
                                        <div class="col-sm-offset-5 col-sm-10">
                                      
                                           
                
                                          <button type="submit" class="btn btn-danger" id="submit3">Submit</button>
                                      
                                        </div>
                                      </div>
                                  </form>
                                   
                
                
                                  </p>
                                </div>
                
                
                              </div>
                
                 <!-- /.tab-pane --> <!-- /.tab-pane --> 
                 <!-- /.tab-pane --> <!-- /.tab-pane --> 
                 <!-- /.tab-pane --> <!-- /.tab-pane --> 
                 <!-- /.tab-pane --> 
                 <!-- /.tab-pane --> <!-- /.tab-pane --> 
                 <!-- /.tab-pane --> <!-- /.tab-pane --> 
                 <!-- /.tab-pane -->
                
                              <div class="tab-pane" id="timeline">
                
                                  <div class="alert alert-info"  id="alert2" style="display:none;" >
                                      <strong><span id="text2"> </span></strong> 
                                   </div>
                                
                              <form method="POST" id="production" action="{{ route('Chef_Equipe.ConsulterProfilePerso')}} "  class="form-horizontal" enctype="multipart/form-data">
                
                                    @csrf
                
                
                                    <div class="form-group">
                
                                        <label for="input1" class="col-sm-2 control-label">Intitule</label>
                    
                                        <div class="col-sm-10">
                                          <input type="text" name="intitule" class="form-control" id="input1" placeholder="Intitule" required>
                                        </div>
                                      </div>
                
                
                                    
                
                
                                    <div class="form-group">
                
                                        <label for="input2" class="col-sm-2 control-label">type de production</label>
                    
                                        <div class="col-sm-10">
                                          
                                          <select  class="form-control" id="input2" placeholder="" name="type" required>
                                            
                                            <option>Soutenance Doctorat</option>  
                                            <option>Soutenance Magister/Master</option>
                                            <option>Publications</option>
                                            <option>Communications</option>
                                           <!-- <option>Article</option>
                                            <option>Ouvrage</option>
                                            <option>Brevet</option>
                                           -->
                                              
                                              
                                             
                                          </select>
                                        </div>
                                      </div>
                
                
                
                
                                      <div class="form-group">
                
                                          <label for="input3" class="col-sm-2 control-label">Date</label>
                      
                                          <div class="col-sm-10">
                                            <input type="date"  name="date" class="form-control" id="input3" placeholder="format : Month/Year" required>
                                          </div>
                                        </div>
                
                                        <div class="form-group">
                
                                            <label for="input4" class="col-sm-2 control-label">Lieu</label>
                        
                                            <div class="col-sm-10">
                                              <input type="text"  name="lieu" class="form-control" id="input4" placeholder="Lieu" required>
                                            </div>
                                          </div>
                
                
                
                                    <div class="form-group">
                
                                        <label for="input5" class="col-sm-2 control-label">Justificatif</label>
                    
                                        <div class="col-sm-10">
                                          <input type="file"  name="justificatif" class="form-control" id="input5" placeholder="Uploader votre justificatif" required>
                                        </div>
                                      </div>
                
                                      <input type="hidden" class="form-control" id="inputh" name="hidden" value="upload">
                
                
                                      <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-10">
                                        
                                            <button type="submit" class="btn btn-danger" id="submit1">Submit</button>
                                        
                                          </div>
                                        </div>
                
                
                                </form>
                                
                
                
                
                
                              </div>
                
                
                
                              <!-- /.tab-pane -->
                 <!-- /.tab-pane --> <!-- /.tab-pane -->
                  <!-- /.tab-pane --> <!-- /.tab-pane --> 
                  <!-- /.tab-pane --> <!-- /.tab-pane -->
                   <!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                
                
                
                              <div class="tab-pane" id="settings">
                
                                  <div class="alert alert-info"  id="alert3" style="display:none;" >
                                      <strong><span id="text3"> </span></strong> 
                                   </div>
                
                
                              <form class="form-horizontal" id="perso"  method='POST' action="{{ route('Chef_Equipe.ConsulterProfilePerso')}}" >
                                  
                                @csrf
                
                                <div class="form-group">
                
                                    <label for="inputName" class="col-sm-2 control-label">Nom</label>
                
                                    <div class="col-sm-10">
                                      <input type="text" name="nom" class="form-control" id="inputName" placeholder="Nom">
                                    </div>
                                  </div>
                                 
                                 
                                  <div class="form-group">
                
                                      <label for="inputPrenom" class="col-sm-2 control-label">Prenom</label>
                  
                                      <div class="col-sm-10">
                                        <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prenom">
                                      </div>
                                    </div>
                
                
                
                                 
                                 
                                 
                                  <div class="form-group">
                                    <label for="inputpassword" class="col-sm-2 control-label">Mot de passe</label>
                
                                    <div class="col-sm-10">
                                      <input type="password" name="password" class="form-control" id="inputpassword" placeholder="Mot de passe"  minlength="6">
                                    </div>
                                  </div>
                                 
                                 
                                
                                 
                                 
                                 
                                  <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Etat civil</label>
                
                                    <div class="col-sm-10">
                                      <select name="etat" class="form-control" id="inputExperience" placeholder="Etat civil">
                                        <option></option>
                                        <option>Celibataire</option>
                                        <option>Marié</option>
                
                                      </select>
                                    </div>
                                  </div>
                                
                
                
                
                                  <div class="form-group">
                                      <label for="inputName" class="col-sm-2 control-label">Numero telephone</label>
                  
                                      <div class="col-sm-10">
                                        <input type="text" name="numero" class="form-control" id="inputName" placeholder="Numero telephone">
                                      </div>
                                    </div>
                
                
                
                
                
                
                                
                                  <div class="form-group">
                                    <label for="inputaddress" class="col-sm-2 control-label">Address</label>
                
                                    <div class="col-sm-10">
                                      <input type="text" name="address" class="form-control" id="inputaddress" placeholder="Address">
                                    </div>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                      <label for="inputdate_naissance" class="col-sm-2 control-label">Date Naissance</label>
                  
                                      <div class="col-sm-10">
                                        <input type="date" name="date_naissance" class="form-control" id="inputdate_naissance" placeholder="Date Naissance">
                                      </div>
                                    </div>
                                  
                
                
                
                                  
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <div class="checkbox">
                                        <label>
                
                                            <input type="hidden" name="hidden" value="info">
                
                                         <!-- <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>-->
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                 
                                 
                                 
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-danger" id="submit2">Submit</button>
                                    </div>
                                  </div>
                             
                             
                                </form>
                              
                              
                              </div>
                
                 <!-- /.tab-pane -->
                  <!-- /.tab-pane --> <!-- /.tab-pane --> 
                  <!-- /.tab-pane --> <!-- /.tab-pane --> 
                  <!-- /.tab-pane --> <!-- /.tab-pane -->
                   <!-- /.tab-pane -->
                
                
                         <!-- /.tab-pane -->
                         
                
                
                
                
                
                
                
                              <div class="tab-pane" id="news">
                                
                              <div class="box-body table-responsive no-padding">
                              
                
                                <?php 
                
                                  
                
                
                
                
                
                                ?>
                
                
                              
                              
                                <table class="table table-hover">
                                <tr>
                                  <th>ID</th>
                                  <th>Nom et prenom</th>
                                  <th>production demander</th>
                                  <th></th>
                                  <th></th>
                                </tr>
                
                                <!-- /.boocle -->
                                <tr>
                                  <td>183</td>
                                  <td>filayni l7ayawan</td>
                                  <td>rapport EDL</td>
                                  <td>
                                  <a type="button" class="btn btn-block btn-success">Confirmer</a>
                                  </td>
                                  <td>
                                  <a type="button" class="btn btn-block btn-danger">Rufuser</a>
                                  </td>
                                </tr>
                                <!-- /.boocle -->
                
                              </table>
                           
                           
                           
                           
                           
                            </div>
                
                              </div>
                
                
                              <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                          </div>
                
                                        <div class="box box-green">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Co-autheurs</h3>
                
                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                  </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                  <ul class="users-list clearfix">
                                    <li>
                                      <img src="../../dist/img/user1-128x128.jpg" alt="User Image">
                                      <a class="users-list-name" href="#">Alexander Pierce</a>
                                    </li>
                                  </ul>
                                  <!-- /.users-list -->
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box-footer -->
                              </div>
                          <!-- /.nav-tabs-custom -->
                        </div>
                
                
                
                
                
                
                
                
                <!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next --><!-- /.next -->
                
                        
                
                
                
                
                
                          <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                
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
                                      url: "{{ route('Chef_Equipe.ConsulterProfilePerso')}}",
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
                              url: "{{ route('Chef_Equipe.ConsulterProfilePerso')}}",
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
                              url: "{{ route('Chef_Equipe.ConsulterProfilePerso')}}",
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
                