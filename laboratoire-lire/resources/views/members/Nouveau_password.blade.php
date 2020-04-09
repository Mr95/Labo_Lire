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

  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


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
    //$('.sidebar-menu').tree();

    $("#show_pass").mouseenter(function(){
          $("#inputWarning3").prop('type','text') ;
      });

 
      $("#show_pass").mouseleave(function(){
          $("#inputWarning3").prop('type','password') ;
       });

  });

</script>


</head>

<body class="hold-transition skin-blue sidebar-mini" style="background-color:azure;">        
               

<div class="container">



<div style="margin:150px auto; width:450px;" class="col-xs">
       
    <form method="POST" action="{{ route('Membre.Nouveau') }}">

                @csrf
              
                      <div class="form-group has-warning col-xs-12">
                                <label class="control-label" for="inputWarning1"><i class="fa fa-user"></i>&nbsp;&nbsp; Nom</label>
                                <input type="text" class="form-control" id="inputWarning1" placeholder="Nom" name="nom" autocomplete="off" required>
                      </div>
                      
                      <div class="form-group has-warning col-xs-12">
                            <label class="control-label" for="inputWarning2"><i class="fa fa-user"></i> &nbsp;&nbsp;Prenom</label>
                            <input type="text" class="form-control" id="inputWarning2" placeholder="Prenom" name="prenom" autocomplete="off" required>
                     </div>

                     <div class="form-group has-warning col-xs-12">
                            <label class="control-label" for="inputWarning3"><i class="fa fa-eye" id="show_pass"></i>&nbsp;&nbsp; Nouveau Mot de passe</label>
                            <input type="password" class="form-control " id="inputWarning3" placeholder="Mot de passe" name="password" autocomplete="off" minlength="6" required>
                               
                     </div>
                        


                     
              
                            <div class="box-footer col-xs-12">
                               <input type="submit" class="btn btn-success pull-right col-xs-12" value="confirmer" >
              
                            </div>
              
              
              </form>
            
            </div> 
              

</div>



 
      
     
      
     





</body>
</html>
