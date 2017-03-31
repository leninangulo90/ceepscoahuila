<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="col-sm-12">
        <h3>Listado de Variables</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <thead style="font-weight:bold;">
                    <td>Código de Variable</td>
                    <td>Factor</td>
                    <td>Variable</td>
                    <td>Acciones</td>
                </thead>
            </tr>
            <?php
$connect = mysqli_connect("localhost", "root", "", "sistemaestatal");
$sql="SELECT * FROM variables";
$result = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($result)) 
     {  
        echo '  
        <tr>  
          <td>'.$row["codigoVariables"].'</td>  
          <td>'.$row["codFactor"].'</td>
          <td>'.$row["variable"].'</td>
          <td id="centrarbtn3">
          <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
          <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
          </td>
        </tr>';  
      }  
?>
        </table>
    </div>
</body>

</html>
