<script type="text/javascript">
  $(document).ready(function() {
    $('.btn_update_user').on('click', function() {
      var id = $(this).parent().parent().children("#update_user").text();
      $("#hidden_user_id").val(id);
      $.post("update_usuarios.php", {
        id: id
      }, function (data, status) {
        // PARSE json data
        var user = JSON.parse(data);
        // Assing existing values to the modal popup fields
        $("#u_id_user").val(user.id_user);
        $("#u_nombre_usuario").val(user.nombre_usuario);
        $("#u_correo_usuario").val(user.correo_usuario);
        $("#u_usuario").val(user.usuario);
        $("#u_tipo_usuario").val(user.tipo_usuario);
        // console.log(user)
      });
      $("#update_user_modal").modal("show");
    });

    $("#update_user_modal").submit(function(e){
      var mensaje = confirm("Estas seguro de Actualizar el usuario");
      if (mensaje) {
        var id_user = $('#u_id_user').val();
        var nombre_usuario = $('#u_nombre_usuario').val();
        var correo_usuario = $('#u_correo_usuario').val();
        var usuario = $('#u_usuario').val();
        var tipo_usuario = $('#u_tipo_usuario').val();

        var response = $.ajax({
          type: 'POST',
          url: 'actualizar_usuarios.php',
          data: {id_user:id_user,nombre_usuario:nombre_usuario,correo_usuario:correo_usuario,usuario:usuario,tipo_usuario:tipo_usuario}
        });
        response.done(function(data,jqXHR,textStatus,errorThrown){
          console.log(data,jqXHR,textStatus,errorThrown)
        if (textStatus.status === 202) {
            alert("Registro Actualizado");
            window.location("/ceepscoahuila/Admin/includes")
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

  $data = '<table id = "table_users" class="table table-bordered table-stripered">

    <tr>
      <th>Identificador de Usuario</th>
      <th>Nombre de Usuario</th>
      <th>Correo Electronico</th>
      <th>Usuario</th>
      <th>Tipo de Usuario></th>
      <th>Acciones</th>
    </tr>';

  $query = "SELECT * FROM registro_usuario";
    if (!$result = mysql_query($query)) {
       exit(mysql_error());
     } 

    if (mysql_num_rows($result) > 0 )
    {
      while($row = mysql_fetch_assoc($result))
      {
        $data .= '
        <br>
        <tr>
          <td id= "update_user">' .$row['id_user'].'</td>
          <td>'.$row['nombre_usuario'].'</td>
          <td>' .$row['correo_usuario'].'</td>
          <td>' .$row['usuario']. '</td>
          <td>' .$row['tipo_usuario']. '</td>
          <td id="centratbtn">
            <button type = "button" class="btn_update_user btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>Editar</button>
            <button type = "button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Borrar</button>
          </td>
          </td>';
      }
    } else {
      $data .='<tr><td colspan="6">Datos no encontrados!</td></tr>';
    }
      $data .='</table>';
      echo $data;
?>

<div class="modal fade" id="update_user_modal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form id="updt_user">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><&times;</span>></button>
        <h4 class="modal-title" id="myModalLablel">Update</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="update_id">Identificador de Usuario</label>
          <input type="text" readonly="readonly" id="u_id_user" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="update_nombre_usuario">Nombre de Usuario</label>
          <input type="text" id="u_nombre_usuario" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="update_correo_usuario">Correo Electronico</label>
          <input type="text" id="u_correo_usuario" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="update_usuario">Usuario</label>
          <input type="text" id="u_usuario" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label>Tipo de Usuario</label>
          <label for="update_usuario">Usuario</label>
          <input type="text" id="u_tipo_usuario" placeholder="" class="form-control">
        </div>       
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <input type="hidden" id="hidden_user_id">
      </div>
      </div>
    </form>
  </div>
</div>