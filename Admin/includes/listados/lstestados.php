
<script type="text/javascript">
  $(document).ready(function() {
    $('.btn-updt').on('click', function() {
      var id = $(this).parent().parent().children("#nose").text();
      $("#hidden_user_id").val(id);
      $.post("listados/get_data.php", {
        id: id
      }, function (data, status) {
        // PARSE json data
        var user = JSON.parse(data);
        // Assing existing values to the modal popup fields
        $("#codigo_estado").val(user.codigoEstado);
        $("#update_state").val(user.estado);
        // console.log(user)
      });
      $("#update_user_modal").modal("show");
    });

    $('#updt').submit(function(e) {
      var mensaje = confirm("Estas seguro de actualizar");
      if (mensaje) {
        var codigoEstado = $('#codigo_estado').val();
        var estado = $('#update_state').val();
        var response = $.ajax({
          type:'POST',
          url: 'actualizar_estados.php',
          data: {codigoEstado: codigoEstado,estado:estado}         
        });

        response.done(function(data,jqXHR,textStatus,errorThrown){
          console.log(data, jqXHR, textStatus, errorThrown)
           if (textStatus.status === 202) {
            alert("Registro Actualizado");
            window.location.replace("/ceepscoahuila/Admin/includes");
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
  // include Database connection file 
  include("db_connection.php");
  // Design initial table header 
  $data = '<table id = "table_estado" class="table table-bordered table-striped">
  <tr>
    <th>Código de Estado</th>
    <th>Estado</th>
    <th>Update</th>
  </tr>';
$query = "SELECT * FROM estados";
  if (!$result = mysql_query($query)) {
    exit(mysql_error());
  }
// if query results contains rows then featch those rows 
  if(mysql_num_rows($result) > 0)
  {
    while($row = mysql_fetch_assoc($result))
    {
      $data .= '
      <br>
      <tr>
        <td id="nose">'.$row['codigoEstado'].'</td>
        <td>'.$row['estado'].'</td>
        <td id="centrarbtn">
          <button type="button" class="btn-updt btn btn-warning"<span class="glyphicon glyphicon-pencil"></span> Editar</button>
          <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
        </td>
      </tr>';
    }
  } else {
  // records now found 
    $data .= '<tr><td colspan="6">Datos no encontrados!</td></tr>';
}
  $data .= '</table>';
  echo $data;
  ?>

<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form id="updt">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Update</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="update_codigo_estado">Codigo de Estado</label>
            <input type="text" id="codigo_estado" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="update_state">Nombre del Estado</label>
            <input type="text" id="update_state" placeholder="" class="form-control">
          </div>
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

<!-- <div class="modal fade" id="ventana2">
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
                <input type="text" class="form-control" id="codigo_estado" placeholder="Codigo de Estado" required="">
              </div>
              <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" id="estado" placeholder="Nombre de Estado" required="">
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
</div> -->

</body>

</html>
