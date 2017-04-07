<body>
<style type="text/css">
    nav.navbar{
        background:rgba(0,0,0,0.8);
    }
</style>
<?php include("menus/menu_login.php");?>
            <!--Formulario Iniciar Sesion-->
<div class="modal fade" id="ventana1">
    <div class="modal-dialog">
        <form class="form-horizontal" id="login">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><img style="max-width:100px; -7px" src="images/favicon.png"></a>   <h3 class="modal-title">Iniciar Sesión</h3></center><hr>
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
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" name="login_user" id="login_user">Ingresar <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a href="#"><div class="h4"><h4>Olvidaste tu cuenta?</h4></div></a>
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
