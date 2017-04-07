<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: ../includes");
}
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Comparativa de Variables</title>
</head>
<!--

<script type="text/javascript">
    $(document).ready(function() {
        $("#cons").submit(function(e) {
            var variables = $("#variables").val();
            var estados = $("#estados").val();
            var ages = $("#ages").val();
            
            var response = $.ajax({
                type : "POST",
                url : "consulta.php",
                data : {variables:variables,estados:estados,ages:ages}
            })
            response.done(function(data,jqXHR,textStatus,errorThrown){                        $("#tabla").append($('<tr/>').append($('<td/>').text(estados)).append($('<td/>').text(variables)).append($('<td/>').text(ages)));
                          })
            e.preventDefault();
            
        })
    })

</script>
-->
<script languaje="javascript">
    var num_opciones = 5;
    var numcheckbox = 0;
    function habilitaDeshabilita(esto)
    {
        if (esto.checked) {
            if (numcheckbox >= num_opciones) {
                esto.checked = false;
                alert("No puedes elegir más de 5 variables");
            } else {
                numcheckbox++;
            }
        } else {
            numcheckbox--;
        }
    }
</script>

<body>
    <?php
    require("connect_sistemaestatal.php");
    
    $sql = "SELECT DISTINCT codigoVariables,codFactor, variable, codVariable\n"
    . "FROM datos\n"
    . "INNER JOIN variables\n"
    . "ON datos.codVariable=variables.codigoVariables";
    $result= $mysql->query($sql);
    ?>
        <?php include("menus/menu_variables.php"); ?>
        <div class="container" style="margin-bottom:100px;">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Comparativa de variables</h3>
                    <hr class="textst1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Selección de Variables Activas</div>
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-danger alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Instrucciones!</strong> Selecciona una o hasta 5 variables por un estado para realizar su consulta.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form id="cons" action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                            <div class="col-sm-4">
                                                <b>Variables:</b><br>
                                                <?php
                                            while($row = $result->fetch_assoc()){ ?>
                                                    <label><input type="checkbox" onchange="habilitaDeshabilita(this)" id="variables" name="variables[]" value="<?php echo $row["codigoVariables"] ?>"> <?php echo $row["variable"] ?></label><br>
                                                    <?php
                                            }
                                            ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <b>Estados:</b>
                                                <select name="estados" id="estados" class="form-control">
                                            <option>Selecciona</option>
                                            <?php
                                            require("connect_sistemaestatal.php");
                                            $query = "SELECT * FROM estados";
                                            $res = $mysql->query($query);
                                            while($lista = $res->fetch_assoc()){
                                                    echo '<option value='.$lista["codigoEstado"].'>'.$lista["estado"].'</option>';
                                            }
                                            ?>
                                            <option value="gral">Todos los estados</option>
                                        </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <b>Años:</b>
                                                <select name="ages" id="ages" class="form-control">
                                            <option>Selecciona</option>
                                            <?php
                                            require("connect_sistemaestatal.php");
                                            $query = "SELECT DISTINCT ano FROM datos";
                                            $res = $mysql->query($query);
                                            while($lista = $res->fetch_assoc()){
                                                    echo '<option value='.$lista["ano"].'>'.$lista["ano"].'</option>';
                                            }
                                            ?>
                                        </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="submit" name="consultar" class="btn btn-success btn-block" style="margin-top:20px;">Consultar <span class="glyphicon glyphicon-share-alt"></span></button>

                                                <a href="viewfactor.php" type="button" class="btn btn-warning btn-block" style="margin-top:20px;">Reiniciar <span class="glyphicon glyphicon-refresh"></span></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-7">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">Resultado de la Consulta</div>
                                                <div class="panel-body">
                                                    <div>
                                                        <table>
                                                            <?php include("consulta.php"); ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">Gráfica</div>
                                                <div class="panel-body"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="consulta_variables.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Regresar</button></a>
                </div>
            </div>
        </div>
</body>

</html>
