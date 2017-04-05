  <?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="includes/css/style.css">

<script type="text/javascript">
 $(document).ready(function(){
	 $("#login").submit(function(e){
        var username = $("#Usuario").val();
        var password = $("#Password").val();

        var data = {Usuario:username, Password:password}

        var response5 = $.ajax({ 
          type:"POST",
          url:"validar_login.php", 
          data: data
      });
        response5.done(function(data, jqXHR,textStatus,errorThrown){
          if (textStatus.status === 202) {
            alert('Bienvenido');
            window.location.replace("/ceepscoahuila/Admin/includes");

          }
          else {
            alert('Usuario y/o Contraseña Invalidos');
          }
        });
        e.preventDefault();

      });
    });
</script>
<?php
  if(!isset($_SESSION['user'])){
    include('login.php');
  } else {
    include('pagina_principal.php');
  }
?>
<html>
<head>

    <meta charset= "utf-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>


    <link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">


</head>
<body>


<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar Informacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-form navbar-left" rel="home" href="#" ><img style="max-width:100px;margin-top:-5px;" src="images/favicon2.png"></a> <a class="navbar-brand" style="margin-top:20px;" href="#">Bienvenido</a>
    </div>    

        <nav class="navbar navbar-inverse navbar-fixed-bottom"></nav>

        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <form class="navbar-form navbar-right" role="search">
                <div class="btn">
                <a href="#ventana1" class="btn btn-success" style="margin-top:20px;" data-toggle="modal">Sign In</a>
                </div>
            </form>
          </div>
          </nav>
            <!--Formulario Iniciar Sesion-->
<div class="modal fade" id="ventana1">
    <div class="modal-dialog">
        <form class="form-horizontal" id="login">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <center><img style="max-width:100px; -7px" src="images/favicon.png"></a>   <h3 class="modal-title">Sign Up, It's free and always will be</h3></center><hr>
            <div class="modal-body">
            <div class="form">
            <div class="form-group">
            <label for="contact-email" class="col-lg-3 control-label">Username</label>
            <div class="col-lg-7">
            <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" required>
            </div>
            </div>
            <div class="form-group">
            <label for="contact-password" class="col-lg-3 control-label">Password</label>
            <div class="col-lg-7">
            <input type="password" class="form-control" id="Password" name="Password" placeholder="Contraseña" required>
            <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger" name="login_user" id="login_user">Ingresar <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
            </div>
            </div>
            </div>
            </div>
            <hr>
            <a href="#"><div class="h4"><h4>Forgot Account?</h4></div></a>
            </div>
            </div>
        </form>
    </div>
</div>


    </body>
    <script src="bootstrap/js/jquery-3.0.0.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/style_index.js"></script>
    </html> 

