<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Archivo EXCEL:</label><br>
        <input type="file" name="excel" value="" size="24"  enctype="multipart/form-data" />
        <button type="submit" name="importar">Importar</button>
    </form>
    <?php
        if(isset($_POST["importar"])){
    require("connect.php");
    $path = $_SERVER["DOCUMENT_ROOT"]; 
 $file = $_FILES['excel']['name']; 
 $completo = $path.$file;  
    mysql_query("LOAD DATA INFILE $archivo INTO TABLE poblacion");
    echo "<script>alert('Los datos se guardaron correctamente $archivo ')</script>";
    echo "<script>location.href='prueba.php'</script>";   
        mysql_close($link);
    }
          ?>
    </body>
</html>
