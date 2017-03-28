<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    <a class="navbar-brand" href="administration.php">CEEPS COAHUILA</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Sistema Estatal</a></li>
                        <li><a href="#">Sistema Municipal</a></li>
                        <li><a href="#">Sistema Grande</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> ¡Bienvenido <?php echo $_SESSION["usuario"]; ?>!</a></li>
                        <li><a href="disconnect.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</body>

</html>
