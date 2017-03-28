<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: index.php");
}
?>
    <!DOCTYPE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <title></title>
    </head>

    <body>
        <?php
    include("menu.php");
    ?>
            <div class="container" style="margin-bottom:20px;">

                <!-------->
                <div id="content">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#users" data-toggle="tab">Usuarios</a></li>
                        <li><a href="#orange" data-toggle="tab">Orange</a></li>
                        <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
                        <li><a href="#green" data-toggle="tab">Green</a></li>
                        <li><a href="#blue" data-toggle="tab">Blue</a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="users">
                            <div class="container" style="background-color:white;padding:15px;">
                                <h2>Registro de Usuarios</h2>
                                <div class="col-sm-6">
                                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                        <label>Nombre:</label><br>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required><br>
                                        <label>Correo Electrónico:</label><br>
                                        <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required><br>
                                        <label>Usuario:</label><br>
                                        <input type="text" class="form-control" name="usuario" placeholder="Nombre de Usuario" required><br>
                                        <label>Contraseña:</label><br>
                                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required><br>
                                        <label>Tipo de Usuario:</label><br>
                                        <select class="form-control" name="tipo" required>
                                        <option value="Capturista">Capturista</option>
                                        <option value="Estandar">Estandar</option>
                                        <option value="Administrador">Administrador</option>
                                    </select><br>
                                        <button type="submit" class="btn btn-success" name="guardar"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                                    </form>
                                </div>
                                <div class="col-sm-12">
                                    <h2>Listado de Usuarios</h2>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <thead style="font-weight:bold;">
                                                <td>Nombre</td>
                                                <td>Correo Electrónico</td>
                                                <td>Usuario</td>
                                                <td>Tipo de Usuario</td>
                                                <td>Acciones</td>
                                            </thead>
                                        </tr>
                                        <?php
                                         include("lstusers.php");
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="orange">
                            <div class="container" style="background-color:white;">
                                <h1>Red</h1>
                                <p>red red red red red red</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="yellow">
                            <div class="container" style="background-color:white;">
                                <h1>Red</h1>
                                <p>red red red red red red</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="green">
                            <div class="container" style="background-color:white;">
                                <h1>Red</h1>
                                <p>red red red red red red</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="blue">
                            <div class="container" style="background-color:white;">
                                <h1>Red</h1>
                                <p>red red red red red red</p>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
    if(isset($_POST["guardar"])){
    require("connect.php");
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $tipo=$_POST["tipo"];
                          
    mysql_query("INSERT INTO usuarios VALUES('','$nombre','$email','$usuario','$password','$tipo')");
    echo "<script>alert('Los datos se guardaron correctamente')</script>";
    echo "<script>location.href='admon.php'</script>";   
        mysql_close($link);
    }
    ?>
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $('#tabs').tab();
                        });

                    </script>
            </div>
            <!-- container -->
    </body>

    </html>
