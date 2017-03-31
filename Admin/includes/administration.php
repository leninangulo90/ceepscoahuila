<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/ceepscoahuila/Admin/includes">CEEPS COAHUILA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Sistema Estatal</a></li>
        <li><a href="#">Sistema Municipal</a></li>
        <li><a href="#">Sistema Grande</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> ¡Bienvenido <?php echo$_SESSION['user']; ?> 
        </a></li>
        <li><a href="disconnect.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="page-header">
    <h2>Administración del Sistema Estatal</h2>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel with-nav-tabs panel-default">
        <div class="panel-heading">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1default" data-toggle="tab">Datos Informativos</a></li>
            <li><a href="#tab2default" data-toggle="tab">Variables</a></li>
            <li><a href="#tab3default" data-toggle="tab">Factores</a></li>
            <li><a href="#tab4default" data-toggle="tab">Estados</a></li>
            <li><a href="#tab5default" data-toggle="tab">Usuarios</a></li>
          </ul>
        </div>
        <div class="panel-body">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1default">
              <div class="col-sm-6">

                <h3>Registro de Información de variables</h3>
                <form id="form_datos">

                  <?php
                  require('connect_sistemaestatal.php');
                  $query="SELECT * FROM variables";
                  $resul = $mysql->query($query);
                  ?>

                  <label>Variable:</label><br>
                  <select class="form-control" name="codVariable" id="codVariable" required>
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
                    <select class="form-control" name="codiEstado" id="codiEstado" required>
                      <?php while($row=$resul->fetch_assoc()) { ?>
                        <option value="<?php echo $row['codigoEstado']; ?>">
                          <?php echo $row['estado']; ?>
                        </option>
                        <?php } ?>
                      </select>

                      <br><label>Año:</label><br>
                      <input type="text" class="form-control" name="ano" id="ano" placeholder="Año de la información" required><br>
                      <label>Valor total:</label><br>
                      <input type="text" class="form-control" name="total" id="total" placeholder="Valor total de la variable"><br>
                      <label>Unidad:</label><br>
                      <input type="text" class="form-control" name="unidad" style="text-transform:uppercase" id="unidad" placeholder="Unidad"><br>
                      <label>Fuente:</label><br>
                      <input type="text" class="form-control" name="fuente" style="text-transform:uppercase" id="fuente" placeholder="Fuente donde se consultó la información, por ejemplo (INEGI)"><br> Importar desde Excel: <input name="excel" type="file" class="form-control" /><b style="color:darkred">Nota:</b> Si va a seleccionar archivo de Excel, verifique que lleve los mismos campos que están en el formulario (Sin títulos) para evitar cualquier problema de importación. <a> Ver imágen de ejemplo</a><br><br>

                      <button type="submit" class="btn btn-success" name="guardar_datos" id="guardar_datos" value="guardar_datos"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                    </form>
                  </div>

                  <?php
                  include("listados/datosvariables.php");
                  ?>

                  <?php
                  require('connect_sistemaestatal.php');

                  $query="SELECT * FROM factores";
                  $resul = $mysql->query($query);
                  ?>
                </div>
                <div class="tab-pane fade" id="tab2default">
                  <div class="col-sm-6">
                    <h3>Registro de Variables</h3>
                    <form id="form_variables">
                      <label>Código de Variable: </label><br>
                      <input type="text" name="codigoVariables" id="codigoVariables" class="form-control" required><br>

                      <label>Factor:</label><br>
                      <select class="form-control" name="codFactor" id="codFactor" required>
                        <?php while($row=$resul->fetch_assoc()) { ?>
                          <option value="<?php echo $row['codigoFactor']; ?>">
                            <?php echo $row['factor']; ?>
                          </option>
                          <?php } ?>

                        </select><br>

                        <label>Variable: </label><br>
                        <input type="text" name="variable" id="variable" class="form-control" required><br>

                        <button type="submit" class="btn btn-success" name="guardar_variable" id="guardar_variable"><span class="glyphicon glyphicon-ok"></span>Guardar</button>
                      </form>
                    </div>


                    <?php
                    include("listados/lstvariables.php");
                    ?>

                  </div>
                  <div class="tab-pane fade" id="tab3default">
                    <div class="col-sm-6">
                      <h3>Registro de Factores</h3>
                      <form id="form_factores">
                        <label>Código de Factor: </label><br>
                        <input type="number" id="codigoFactor" min="0" max="10" name="codigoFactor" id="codigoFactor" class="form-control"><br>
                        <label>Nombre del Factor: </label><br>
                        <input type="text" name="factor" id="factor" style="text-transform:uppercase" class="form-control"><br>
                        <button type="submit" class="btn btn-success" name="guardar_factor" id="guardar_factor"><span class="glyphicon glyphicon-ok"></span>Guardar</button>
                      </form>
                    </div>

                    <?php
                    include("listados/lstfactores.php");
                    ?>

                  </div>
                  <div class="tab-pane fade" id="tab4default">
                    <div class="col-sm-6">
                      <h3>Registro de Estados</h3>
                      <form id="form_estados">
                        <label>Código del Estado:</label><br>
                        <input type="text" class="form-control" name="codigoEstado" id="codigoEstado" placeholder="Código del Estado" required><br>
                        <label>Estado:</label><br>
                        <input type="text" class="form-control" name="estado" id="estado" style="text-transform:uppercase" placeholder="Nombre del Estado" required><br>
                        <button type="submit" name="guardar_estado" id="guardar_estado" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                      </form>
                    </div>

                    <?php
                    include("listados/lstestados.php");
                    ?>

                  </div>
                  <div class="tab-pane fade" id="tab5default">
                   <div class="col-sm-6">
                    <h3>Registro de Usuarios</h3>
                    <form id="form_usuarios" >
                     <label>Nombre:</label><br>
                     <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" style="text-transform:uppercase" placeholder="Nombre Completo" required><br>
                     <label>Correo Electrónico:</label><br>
                     <input type="email" class="form-control" name="correo_usuario" id="correo_usuario" style="text-transform:uppercase" placeholder="Correo Electrónico" required><br>
                     <label>Usuario:</label><br>
                     <input type="text" class="form-control" name="usuario" id="usuario" style="text-transform:uppercase" placeholder="Nombre de Usuario" required><br>
                     <label>Contraseña:</label><br>
                     <input type="password" class="form-control" name="pass_usuario" id="pass_usuario" placeholder="Contraseña" required><br>
                     <label>Tipo de Usuario:</label><br>
                     <select class="form-control" name="tipo_usuario" style="text-transform:uppercase" 
                      id="tipo_usuario" required>
                      <option value="Capturista">CAPTURISTA</option>
                      <option value="Estandar">ESTANDAR</option>
                      <option value="Administrador">ADMINISTRADOR</option>
                     </select><br>
                     <button type="submit" name="guardar_usuario" id="guardar_usuario" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                    </form>
                   </div>
             <?php
              include("listados/lstusers.php");
             ?>  
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>


