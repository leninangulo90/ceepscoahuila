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
                    <?php
    if(isset($_POST["guardare"])){
    require("connect.php");
    $code=$_POST["code"];
    $estado=$_POST["estado"];
                          
    mysql_query("INSERT INTO estados VALUES('$code','$estado')");
    echo "<script>alert('Los datos se guardaron correctamente')</script>";
    echo "<script>location.href='administration.php'</script>";   
        mysql_close($link);
    }
    ?>
                        <?php
    if(isset($_POST["guardarf"])){
    require("connect.php");
    $codf=$_POST["codf"];
    $factor=$_POST["factor"];
                          
    mysql_query("INSERT INTO factores VALUES('$codf','$factor')");
    echo "<script>alert('Los datos se guardaron correctamente')</script>";
    echo "<script>location.href='administration.php'</script>";   
        mysql_close($link);
    }
    ?>
                <?php
    if(isset($_POST["guardarv"])){
    require("connect.php");

    $codf=$_POST["codv"];
    $fac=$_POST["fac"];   
    $variable=$_POST["variable"];

    mysql_query("INSERT INTO variables VALUES('$codv','$variable','$fac')");
    echo "<script>alert('Los datos se guardaron correctamente')</script>";
    echo "<script>location.href='administration.php'</script>";   
        mysql_close($link);
    }
    ?>

   

