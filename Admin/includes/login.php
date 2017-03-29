<!-- <!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Administración</title>
</head>

<body> -->

<body style="background:url(../images/fondo1.png)fixed repeat center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;">

    <div class="container">
        <div class="row" align="center">
            <h3 style="font-family: calibri;font-size: 30px;padding: 10px;color: whitesmoke;font-family: calibri light;">
            Control de Información de Sistemas Administrativos</h3>
        </div>
        <div class="row" style="margin-bottom:56px;">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default" id="formlogin">
                    <div class="panel-body">
                        <form id="login">
                            <div class="form-group">
                                <label for="email">Usuario:</label>
                                <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña:</label>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Contraseña" required>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Recordarme</label>
                            </div><br>
                            <button type="submit" class="btn btn-danger btn-block btn-lg" name="login_user" id="login_user">Ingresar <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </body>
  <!--  -->