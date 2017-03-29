<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="col-sm-12">
        <h3>Listado de Factores</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <thead style="font-weight:bold;">
                    <td>Código de Factor</td>
                    <td>Factor</td>
                    <td>Acciones</td>
                </thead>
            </tr>
            <?php
$connect = mysqli_connect("localhost", "root", "", "sistemaestatal");
$sql="SELECT * FROM Factores";
$result = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($result)) 
     {  
        echo '  
        <tr>  
          <td>'.$row["codigoFactor"].'</td>  
          <td>'.$row["factor"].'</td>
          <td id="centrarbtn">
          <button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
          <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
          </td>
        </tr>';  
      }  
?>
        </table>
    </div>
</body>

</html>
