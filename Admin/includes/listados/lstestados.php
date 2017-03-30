<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <script type="text/javascript">
  $(document).on('click','.btn-updt', function(){
      var ucodigo_estado = $(this).parent().parent().children("#codigo_estado").text()
      var response = $.ajax({
        url: 'update_estado.php',
        type: 'POST',
        data: {codigo_estado: ucodigo_estado}
      });

      response.done(function(data,jqXHR, textStatus, errorThrown){
        var arr = $.parseJSON(data)

        console.log(arr);
      })
  })
  </script>
</head>

<body>
  <div class="col-sm-12">
    <h3>Listado de Estados</h3>
    <table class="table table-hover table-bordered" id="table">
      <tr>
        <thead style="font-weight:bold;">
          <td>Código de Estado</td>
          <td>Estado</td>
          <td>Acciones</td>
        </thead>
      </tr>
      <?php
      $connect = mysqli_connect("localhost", "root", "", "sistemaestatal");
      $sql="SELECT * FROM estados";
      $result = mysqli_query($connect, $sql);
      while($row = mysqli_fetch_array($result)) 
      {  
        echo '  
        <tr>  
          <td id="codigo_estado">'.$row["codigoEstado"].'</td>  
          <td>'.$row["estado"].'</td>
          <td id="centrarbtn">
            <button data-toggle="modal" data-target="#ventana2" class="btn btn-primary btn-sm btn-updt"><span class="glyphicon glyphicon-pencil"></span>Editar</button> 
            <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
          </td>
        </tr>';  
      }  
      ?>
    </table>
  </div>

<div class="modal fade" id="ventana2">
  <div class="modal-dialog">
    <form class="form-horizontal" class="col-lg-8 col-lg-offset-2" id="form_updt" novalidate>
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <center>
            <img style="width:100%;" src="">
            <h3 class="modal-title">Actualizar Registro</h3>
          </center>
          <div class="modal-body">
            <div class="form">
              <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" id="ucodigoEstado" name="u_codigoEstado" placeholder="Codigo de Estado" required="">
              </div>
              <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" id="uestado" name="u_estado" placeholder="Nombre de Estado" required="">
              </div>
              <br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-default btn-lg" id="updBTN">Actualizar</button>
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Salir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

</body>

</html>
