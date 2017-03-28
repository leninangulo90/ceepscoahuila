<!DOCTYPE html>
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

<body>
    <div class="container">
        <div class="row" align="center">
            <h3>Control de Información de Sistemas Administrativos</h3>
        </div>
        <div class="row" style="margin-bottom:56px;">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default" id="formlogin">
                    <div class="panel-body">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <div class="form-group">
                                <label for="email">Usuario:</label>
                                <input type="text" class="form-control" id="user" name="user" placeholder="Nombre de Usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña:</label>
                                <input type="password" class="form-control" id="pwd" name="pass" placeholder="Contraseña" required>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Recordarme</label>
                            </div><br>
                            <button type="submit" class="btn btn-danger btn-block btn-lg" name="ingresar">Ingresar <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("includes/footer.php");
    ?>
    <?php
    if (isset($_POST["ingresar"])){
        try{
        $base = new PDO("mysql:host=localhost; dbname=admin" , "root", "");
        
        $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql ="SELECT * FROM Usuarios WHERE Usuario= :user AND Password= :pass";
        
        $result = $base->prepare($sql);
        
        $user=htmlentities(addslashes($_POST["user"]));
        $pass=htmlentities(addslashes($_POST["pass"]));
        
        $result->bindValue(":user", $user);
        $result->bindValue(":pass", $pass);
        
        $result->execute();
        
        $registros=$result->rowCount();
        
        if($registros!=0){
            session_start();
            $_SESSION["usuario"]=$_POST["user"];
            
            header ("location: includes/administration.php");
        }else{
            
            echo "<script>alert('El usuario o la contraseña son incorrectos')</script>";
;            
            //header ("location: index.php");
        }
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
    }
    }
    ?>
</body>

</html>
