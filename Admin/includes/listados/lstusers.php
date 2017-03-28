<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="col-sm-12">
        <h3>Listado de Usuarios</h3>
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
$connect = mysqli_connect("localhost", "root", "", "Admin");
$sql="SELECT * FROM Usuarios";
$result = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($result)) 
     {  
        echo '  
        <tr>  
          <td>'.$row["Nombre"].'</td>  
          <td>'.$row["Email"].'</td>  
          <td>'.$row["Usuario"].'</td>  
          <td>'.$row["TipoUsuario"].'</td>
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
