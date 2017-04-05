<script type="text/javascript"> 
$(document).ready(function(){ 
  $('.btn_update_variable').on('click', function(){ 

    var id = $(this).parent().parent().children("#update_variable").text(); 
    $.post("update_variables.php",{ 
      id:id 
    }, function(data, status) { 
      
      var user = JSON.parse(data); 

      $("#u_codigo_variable").val(user.codigoVariables);
      $("#u_codigo_factor").val(user.factor);
      $("#u_nombre_variable").val(user.variable);

    }); 
  }); 

  $("#updt_variable").submit(function(e){
    var mensaje = confirm("Esta seguro de actualizar los datos");

    if(mensaje) {
      var codigoVariables = $('#u_codigo_variable').val();
      var variable = $('#u_nombre_variable').val();
      
      var response = $.ajax({
        type: 'POST',
        url: 'actualizar_variables.php',
        data: {codigoVariables:codigoVariables, variable:variable}
        }); 
 response.done(function(data,jqXHR,textStatus,errorThrown){ 
          console.log(data,jqXHR,textStatus,errorThrown) 
        if (textStatus.status === 202) { 
            alert("Registro Actualizado"); 
            $("#updt_factor")[0].reset(); 
          } else { 
            alert('Es posile que este usuario ya se encuentre registrado'); 
          } 
        }) 
      } else { 
        alert("Haz cancelado la actualizacipn"); 
      } 
      e.preventDefault(); 
    }) 
  }) 


</script>

<?php

  include("db_connection.php");

  $data = '<table id="table_variables" class="table table-bordered table-stripered"

    <tr>
      <th>Identificador de Variables</th>      
      <th>Nombre de Variable</th>
      <th>Nombre de Factor</th>
      <th>Acciones</th>
    </tr>';

  $query = "SELECT factor,codigoVariables,variable from factores inner join variables on factores.codigoFactor = variables.codFactor";
    if (!$result = mysql_query($query)) {
      exit(mysql_error());
    }

    if (mysql_num_rows($result) > 0) {
      while ($row = mysql_fetch_assoc($result))
   
      {
    $data .= '
      <br>
      <tr>
      <td id="update_variable">' .$row['codigoVariables'].'</td>
      <td>' .$row['variable'].'</td>
      <td>' .$row['factor'].'</td>
      <td id="centrarbtn">
        <button type="button" class="btn_update_variable btn btn-warning" data-toggle="modal" data-target="#update_variable_modal">Editar</button>
        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Borrar</button>
      </td>';
   }
} else {
  $data .= '<tr><td colspan ="6">Datos no encontrados!</td></tr>';
} 
  $data .= '</table>';
  echo $data;

?>

<div class="modal fade" id="update_variable_modal" tabindex="-1" role="dialog" aria-labelledy="myModalLabel">
  <div class="modal-dialog">
    <form id="updt_variable">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><&times;</span>></button>
          <h4 class="modal-title" id="myModalLabel">Actualizar Variables</h4>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <label for="update_codvariable">Codigo de Variable</label>
            <input type="text" readonly="readonly" id="u_codigo_variable" placeholder="" class="form-control">
          </div>
          <div class="form-group">
            <label for="update_nombrevariable">Nombre de la Variable</label>
            <input type="text" id="u_nombre_variable" placeholder="" class="form-control">
          </div>
          <div class="form-group">
            <label for="update_codigofactor">Nombre del Factor</label>
            <input type="text" readonly="readonly" id="u_codigo_factor" placeholder="" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>

      </div>
    </form>
  </div>  
</div>

