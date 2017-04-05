<body>
<style type="text/css">
    nav.navbar{
        background:rgba(0,0,0,0.8);
    }
</style>
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

        <nav class="navbar navbar-inverse navbar-fixed-bottom" style="border-top:2px solid black;"><p style="margin-top:35px;margin-bottom:20px;color:whitesmoke; font-size:15px;font-family:calibri light;">CEEPS COAHUILA &copy; 2017. Todos los derechos reservados.</p></nav>

        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <form class="navbar-form navbar-right" role="search">
                <div class="btn">
                <a href="#ventana1" class="btn btn-success" style="margin-top:20px;" data-toggle="modal">Sign In</a>
                </div>
            </form>
          </div>
          </nav>
          <center>
          <img  style="margin-top: 8%; width: 40%;" src="images/economia.png">
          </center>
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
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de Usuario" required>
            </div>
            </div>
            <div class="form-group">
            <label for="contact-password" class="col-lg-3 control-label">Password</label>
            <div class="col-lg-7">
            <input type="password" class="form-control" id="pass_usuario" name="pass_usuario" placeholder="Contraseña" required>
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

 <div id="footer">
            <div class="container">
                <p class="text-muted credit" style="margin-top:35px;margin-bottom:20px;color:whitesmoke;border-top: 2px solid black;font-size:15px;font-family:calibri light;">CEEPS COAHUILA &copy; 2017. Todos los derechos reservados.</p>
            </div>
        </div>
