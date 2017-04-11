<script type="text/javascript"> 
$(document).ready(function(){ 
  $('.btn_update_factor').on('click', function(){ 

    var id = $(this).parent().parent().children("#update_factor").text(); 
    $.post("update_factores.php",{ 
      id:id 
    }, function(data, status) { 
      
      var user = JSON.parse(data); 

      $("#u_codigo_factor1").val(user.codigoFactor); 
      $("#u_factor").val(user.factor);  
    }); 
  }); 

$("#updt_factor").submit(function(e){ 
    var mensaje = confirm("Estas seguro de Actualizar el usuario"); 
      if (mensaje) { 
        var codigoFactor = $('#u_codigo_factor1').val(); 
        var factor = $('#u_factor').val(); 

        var response = $.ajax({ 
          type: 'POST', 
          url: 'actualizar_factores.php', 
          data: {codigoFactor:codigoFactor,factor:factor} 

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

  $data = '<table id="table_factores" class="table table-bordered table-stripered"> 

    <tr> 
      <th>Codigo de Factor</th> 
      <th>Factor</th> 
      <th>Acciones</th> 
    </tr>'; 

$query = "SELECT * FROM factores"; 
  if(!$result = mysql_query($query)) { 
    exit(mysql_error()); 
  } 

  if (mysql_num_rows($result) > 0) 
  { 
    while ($row = mysql_fetch_assoc($result)) 

    { 
      $data .= ' 
        <br> 
        <tr> 
        <td id="update_factor">' .$row['codigoFactor'].'</td> 
        <td>'.$row['factor'].'</td> 
        <td id="centrarbtn"> 
          <button type="button" class="btn_update_factor btn btn-warning" data-toggle="modal" data-target="#update_factor_modal">
            Editar
          </button>
          <button type = "button" class="btn btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Borrar</button> 
        </td>'; 
    } 

  } else { 
    $data .='<tr><td colspan="6">Datos no encontrados!</td></tr>'; 
  } 

    $data .='</table>'; 
    echo $data;  
?> 

<div class="modal fade" id="update_factor_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form id="updt_factor">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><&times;</span>></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
      </div>
        <div class="modal-body"> 
        <div class="form-group"> 
          <label for="update_codigo">Identificador de Factor</label> 
          <input type="text" readonly="readonly" id="u_codigo_factor1" placeholder="" class="form-control"> 
        </div> 
        <div class="form-group"> 
          <label for="update_factor">Nombre de Factor</label> 
          <input type="text" id="u_factor" placeholder="" class="form-control"> 
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


 