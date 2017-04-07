ññ<!DOCTYPE html>  
<html lang="">

<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="../js/datatables.js"></script>

  <script type="text/javascript">
      
     $(document).ready(function(){ 
  $('.btn_update_datos').on('click', function(){ 

    var id = $(this).parent().parent().children("#update_datos").text(); 
    $.post("update_datos.php",{  
      id:id 
    }, function(data, status) { 
      
      var user = JSON.parse(data); 
      console.log(user.codVariable);
      $('#u_variabledato option').prop('selected', false);
      $('#u_variabledato > option[value="'+user.codVariable+'"]').attr('selected', 'selected');
      
/*      $("#u_iddatos").val(user.iddato)
      $("#u_variabledato").val(user.variable)
      $("#u_anodatos").val(user.ano)
      $("#u_totaldatos").val(user.total)]
      $("#u_fuentedatos").val(user.fuente)*/
    }); 
  }); 

  $("#updt_datos").submit(function(e){
    var mensaje = confirm("Esta seguro de actualizar los datos");

    if (mensaje) {
      var iddato = $("#u_iddatos").val();
      var variable = $("#u_variabledato").val();
      var estado = $("#u_estadodatos").val();
      var ano = $("#u_anodatos").val();
      var total = $("#u_totaldatos").val();
      var fuente = $("#u_fuentedatos").val();

      var response = $.ajax({
        type: 'POST',
        url: 'actualizar_datos.php',
        data: {iddato:iddato, variable:variable,estado:estado,ano:ano,total:total,fuente:fuente}
      });
      response.done(function(data,jqXHR,textStatus,errorThrown){
        console.log(data,jqXHR,textStatus,errorThrown)
      })
      e.preventDefault();
    }




  })
}); 

  </script>
  <title></title>
</head>

<body>
  <hr>
  <div class="col-sm-12">
    <h3>Listado de Datos Almacenados</h3>
    <div class="table-responsive">
      <table id="employee_data" class="table table-hover table-bordered">
        <thead style="font-weight:bold;">
          <tr>
            <td>Identificador</td>
            <td>Variable</td>
            <td>Estado</td>
            <td>Año</td>
            <td>Total</td>
            <td>Fuente</td>
            <td>Acciones</td>
          </tr>
        </thead>
        <?php  
        $connect = mysqli_connect("localhost", "root", "", "sistemaestatal");  
        $query = "SELECT iddato,variable, estado, ano, total,fuente from datos inner join variables on datos.codVariable = variables.codigoVariables inner join estados on datos.codiEstado = estados.codigoEstado";
        $result = mysqli_query($connect, $query);  
        while($row = mysqli_fetch_array($result))  
        {  
          echo '  
          <tr> 
            <td id="update_datos">'.$row["iddato"].'</td>
            <td>'.$row["variable"].'</td>
            <td>'.$row["estado"].'</td>  
            <td>'.$row["ano"].'</td>
            <td>'.$row["total"].'</td>
            <td>'.$row["fuente"].'</td>
            <td id="centrarbtn"> 
              <button type="button" class="btn_update_datos btn btn-warning" data-toggle="modal" data-target="#update_datos_modal">
                Editar
              </button>
              <button type = "button" class="btn_update_datos btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Borrar</button> 
            </td> 
          </tr>  
          ';  
        }  
        ?>
      </table>
    </div>
  </div>

<div class="modal fade" id="update_datos_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form id="updt_datos">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><&times;</span>></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
      </div>
        <div class="modal-body"> 
          <div class="form-group"> 
            <label for="update_id">Identificador</label> 
            <input type="text" id="u_iddatos" readonly="readonly" placeholder="" class="form-control"> 
          </div> 
          <div class="form-group"> 
            <?php
              require('connect_sistemaestatal.php');
              $query="SELECT * FROM variables";
              $resul = $mysql->query($query);
            ?>
            <label>Variable:</label><br>
              <select class="form-control" name="codVariable" id="u_variabledato" required>
                <?php while($row=$resul->fetch_assoc()) { ?>
                  <option value="<?php echo $row['codigoVariables']; ?>">
                    <?php echo $row['variable']; ?>
                  </option>
                <?php } ?>
              </select><br>

            <?php
              require('connect_sistemaestatal.php');
              $query="SELECT * FROM estados";
              $resul = $mysql->query($query);
            ?>
            <label>Estados:</label><br>
              <select class="form-control" name="codiEstado" id="u_estadodatos" required>
                <?php while($row=$resul->fetch_assoc()) { ?>
                  <option value="<?php echo $row['codigoEstado']; ?>">
                    <?php echo $row['estado']; ?>
                  </option>
                <?php } ?>
              </select>
        </div> 
        <div class="form-group"> 
          <label for="update_año">Año</label> 
          <input type="text" id="u_anodatos" placeholder="" class="form-control"> 
        </div> 
        <div class="form-group"> 
          <label for="update_total">Total</label> 
          <input type="text" id="u_totaldatos" placeholder="" class="form-control"> 
        </div>
        <div class="form-group"> 
          <label for="update_fuente">Fuente</label> 
          <input type="text" id="u_fuentedatos" placeholder="" class="form-control"> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>


</body>

</html>