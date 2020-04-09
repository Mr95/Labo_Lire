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
    <a href="#" class="logo">
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
              <img src="../layout/logo.jpg" alt="Cinque Terre" height="125" width="125">
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
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
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
    <li><a href="../Directeur"><i class="fa  fa-home"></i> <span>Menu</span></a></li>


        
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
        <small>directeur laboratoire</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://univ-constantine2.dz/laboratoires/lablire/index-2.html"><i class="fa fa-dashboard"></i> UC2</a></li>
        <li class="active">description de laboration et mot du directeur</li>
      </ol>
    </section>

    <!-- Main content -->   
     <!-- Main content -->    <!-- Main content --> 
        <!-- Main content -->    <!-- Main content -->
            <!-- Main content -->    <!-- Main content -->    <!-- Main content -->   
             <!-- Main content -->    <!-- Main content -->    <!-- Main content -->  
               <!-- Main content -->    <!-- Main content -->    <!-- Main content -->  
                 <!-- Main content -->    <!-- Main content -->    <!-- Main content -->  
                   <!-- Main content -->    <!-- Main content -->    <!-- Main content -->  
                     <!-- Main content -->    <!-- Main content -->    <!-- Main content -->  
                       <!-- Main content -->    <!-- Main content -->    <!-- Main content --> 
                          <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
    <section class="content">

 
	<div class="col-md-6">

		  <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
            
             <img src="../layout/logo.jpg" alt="Cinque Terre" height="50" width="50">
             <br><br>


              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-suc">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         Description actuel de laboratoire
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">                 
                      <?php
               $descriptions = Illuminate\Support\Facades\DB::select('select description , mot_directeur from laboratoires where id = ?', [1]) ;
               foreach( $descriptions as $description){
                echo $description->description ;
               }          
                      ?>
                    </div>
                  </div>
                </div>
                <div class="panel box box-suc">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Mot actuel du directeur 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                      <?php
                      $mot_directeurs = Illuminate\Support\Facades\DB::select('select description , mot_directeur from laboratoires where id = ?', [1]) ;      
                      foreach( $mot_directeurs as $mot_directeur){
                       echo $mot_directeur->mot_directeur ;      
                      }                            
                             ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
    </div>

<div class="col-md-6">
        <div class="callout callout-success">
            <h4>Choisir le champ a modifier</h4>
          </div>


          <div class="alert alert-info"  id="alert" style="display:none;" >
              <strong><span id="text"> </span></strong> 
           </div>


        <form method="POST"  action="{{ route('Directeur.MotDescription')}}"   id="description_mot">


          @csrf

            <textarea class="textarea" name="motdesc" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    </textarea>

                      <div class="form-group">
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="description" checked>
                              Modifier description de laboratoire
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="mot">
                              Modifier mot directeur
                            </label>
                          </div>
                        </div>


            <input type="submit" class="btn btn-block btn-success btn-lg" id="send">
    </form>




</div>

    </section>
        <!-- Main content -->    <!-- Main content -->  
          <!-- Main content -->    <!-- Main content --> 
            <!-- Main content -->    <!-- Main content -->    
            <!-- Main content -->    <!-- Main content -->    <!-- Main content -->  
              <!-- Main content -->    <!-- Main content -->    <!-- Main content --> 
                 <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
                     <!-- Main content -->    <!-- Main content -->    <!-- Main content --> 
                        <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
                            <!-- Main content -->    <!-- Main content -->    <!-- Main content --> 
                               <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
                                   <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->    <!-- Main content -->
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



<script>

    $(document).ready( function (){ 
      
     
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    
    
         $("#send").click(function(event){
  
          event.preventDefault();
  //https://stackoverflow.com/questions/14393512/tinymce-textarea-and-post-form-using-ajax?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa
          tinyMCE.triggerSave();
         
         // Create an FormData object
         var form = $('#description_mot')[0];
         var data = new FormData(form)
    
             //$("#loader").show();
            
              $.ajax({
                      type: "POST",
                      url: "{{ route('Directeur.MotDescription')}}",
                      data: data  ,
                      processData: false,    
                      contentType: false,
                      //cache: false,
                     // timeout: 600000,
                    //  dataType: 'json',
                      success: function (data) {
                         $("#text").text(data);
                         $("#alert").show(); 
                        /* $("#loader").hide();*/
                          
                       
                    /* console.log("SUCCESS : ", data);
                     $("#send").prop("disabled", false);*/
  
                          }           
    
                      });
                
               });
    
    
    });
    </script>



</body>
</html>
