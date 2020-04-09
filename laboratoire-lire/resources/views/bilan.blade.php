<!doctype html>
<html lang="{{ app()->getLocale() }}">
        
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Bilan</title>
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
            <i class="fa fa-home"></i>
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
    


<h3></h3>

<div class="row">

  <div class="col-md-1"></div>

<div class="col-md-10" >

<table class="table table-striped">
    <thead>
      <tr style="background-color:dodgerblue;font-family:Tahoma;color:white; ">
        <th>Equipe</th>
        <th>Acronyme</th>
        <th>Communications</th>
        <th>Sout.Magister/Master</th>
        <th>Sout.Doctorat</th>
        <th>Publications</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php  

        $labos = DB::select('select * from laboratoires where id = ?', [1]) ;

        foreach($labos as $lab){

         $bil = $lab->bilan ;

        }

        if($bil == 'oui'){
        
      $Equipes =  DB::select('select * from equipes'); 
        
        foreach($Equipes as $equipe){ ?>

      <tr>
        <td><?php echo $equipe->nom ; ?></td>
        <td><?php echo  $equipe->acronyme ; ?></td>
        <td><?php 
        
                            
        $count_communication = 0 ;

         $apparts = DB::select('select * from membres , appartenances , equipes where membres.id = appartenances.id_membre and equipes.id = appartenances.id_equipe and appartenances.id_equipe = ?', [$equipe->id]);

         foreach($apparts as $appart){

          
            

          $Communications = DB::select('select * from  membres , auteurs , production_scientifiques where membres.id = auteurs.id_membre and production_scientifiques.id = auteurs.id_production and auteurs.id_membre = ? and auteurs.rang_auteur = ? and production_scientifiques.type = ? ', [$appart->id_membre,1,'Communications']);

          foreach($Communications as $com){

            

            if( $com->id > 0 ) {

              $count_communication = $count_communication + 1 ;
            
            }

          }

         }

         echo $count_communication ;
        
        ?></td>
        
        <td><?php
       
        $count_Master = 0 ;

        $apparts1 = DB::select('select * from membres,appartenances,equipes where membres.id = appartenances.id_membre and equipes.id = appartenances.id_equipe and equipes.id = ?', [$equipe->id]);

         foreach($apparts1 as $appart1){



          $Master = DB::select('select * from  membres , auteurs , production_scientifiques where membres.id = auteurs.id_membre and production_scientifiques.id = auteurs.id_production and auteurs.id_membre = ? and auteurs.rang_auteur = ? and production_scientifiques.type = ? ', [$appart1->id_membre,1,'Soutenance Magister/Master']);

          foreach($Master as $mas){

            if($mas->id > 0 ) {
              
              $count_Master = $count_Master + 1 ;
            
            }

          }

         }

        echo  $count_Master ;


        ?></td>
        
        <td><?php
        
        $count_Doctorat = 0 ;
        $apparts2 = DB::select('select * from membres,appartenances,equipes where membres.id = appartenances.id_membre and equipes.id = appartenances.id_equipe and equipes.id = ?', [$equipe->id]);

         foreach($apparts2 as $appart2){

          $Doctorat = DB::select('select * from  membres , auteurs , production_scientifiques where membres.id = auteurs.id_membre and production_scientifiques.id = auteurs.id_production and auteurs.id_membre = ? and auteurs.rang_auteur = ? and production_scientifiques.type = ? ', [$appart2->id_membre,1,'Soutenance Doctorat']);

          foreach($Doctorat as $Doc){

            if($Doc->id > 0 ) {
              
              $count_Doctorat =  $count_Doctorat + 1 ;
            
            }

          }

         }

         echo  $count_Doctorat  ;


        ?></td>

        <td>

            <?php
        
            $publication = 0 ;
          
            $apparts3 = DB::select('select * from membres,appartenances,equipes where membres.id = appartenances.id_membre and equipes.id = appartenances.id_equipe and equipes.id = ?', [$equipe->id]);
    
             foreach($apparts3 as $appart3){
    
              $publis = DB::select('select * from  membres , auteurs , production_scientifiques where membres.id = auteurs.id_membre and production_scientifiques.id = auteurs.id_production and auteurs.id_membre = ? and auteurs.rang_auteur = ? and production_scientifiques.type = ? ', [$appart3->id_membre,1,'Publications']);
    
              foreach($publis as $publi){
    
                if($publi->id > 0 ) {
                  
                  $publication =  $publication + 1 ;
                
                }
    
              }
    
             }
    
             echo  $publication  ;
    
    
            ?>




        </td>
        
        <td><a href="bilan/<?php  echo $equipe->id ;?>"class="btn btn-info">Consulter</a></td>
      </tr>

    <?php }
    
    }else{ ?>


      <h1>Bilan non disponible</h1>


   <?php }

    ?>
    
  </tbody>
  </table>

</div>

<!--

                       
                            <option>Publications</option>

-->

<div class="col-md-1"></div>

</div>










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




</body>
</html>