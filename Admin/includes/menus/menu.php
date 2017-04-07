<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/ceepscoahuila/Admin/includes" style="color:whitesmoke;">CEEPS COAHUILA</a>
            </div>

            <ul class="nav navbar-nav">
                <li class="active"><a href="factores.php">Sistema Estatal</a></li>
                <li><a href="#">Sistema Municipal</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> ¡Bienvenido <?php echo $_SESSION["user"] ?>!</a></li>
                <li><a href="disconnect.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-inverse navbar-fixed-bottom" style="border-top:2px solid black;">
        <p style="margin:15px 0px;color:whitesmoke;font-size:15px;font-family:calibri light; padding:0px 20px;">CEEPS COAHUILA &copy; 2017. Todos los derechos reservados.</p>
    </nav>
</body>

</html>
