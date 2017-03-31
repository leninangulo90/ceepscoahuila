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
    <table class="table table-hover table-bordered" id="tabla">
        <thead style="font-weight:bold;">
        <tr>
          

          <td>Nombre</td>
          <td>Correo Electrónico</td>
          <td>Usuario</td>
          <td>Tipo de Usuario</td>
          <td>Acciones</td>
        </tr>
        </thead>
        <tbody id="bodyTable">
          
      <?php
        $connect = mysqli_connect("localhost", "root", "", "sistemaestatal");
        $sql="SELECT * FROM registro_usuario";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_array($result)) 
        {  
          echo '  
            <tr>  
              <td>'.$row["nombre_usuario"].'</td>  
              <td>'.$row["correo_usuario"].'</td>  
              <td>'.$row["usuario"].'</td>  
              <td>'.$row["tipo_usuario"].'</td>
              <td id="centrarbtn">
                <button type="button" class="btn-updt btn btn-warning"<span class="glyphicon glyphicon-pencil"></span> Editar</button>
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
              </td>
            </tr>';  
        }  
      ?>
        </tbody>
    </table>
  </div>
</body>

</html>
