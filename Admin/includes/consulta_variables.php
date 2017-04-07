<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location:/ceepscoahuila/Admin/includes");
}
?>
<?php
require_once("connect_sistemaestatal.php");
$id=($_GET['id']);
if (!$_GET['id']){
    header("Location:/ceepscoahuila/Admin/includes");
}
$sql = "SELECT * FROM variables WHERE codFactor='$id'";
$sql2 = "SELECT * FROM factores WHERE codigoFactor='$id'";
$result = $mysql->query($sql);
$result2 = $mysql->query($sql2);
$row2 = $result2->fetch_assoc();
?>
    <!DOCTYPE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="plugins/select2/select2.min.css">
        <title>Variables del Factor</title>
    </head>
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $("#enlace_tabla").click(function(e){
                e.preventDefault()
                $("#destino").load("consulta.php");
            })
        })
        
    </script>
    <body>
        <?php include("menus/menu_variables.php"); ?>
        <div class="container" style="margin-bottom:100px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>Variables del factor:
                                <?php echo $row2["factor"] ?>
                            </h4>
                            <hr class="textst1">
                        </div>
                    </div>
                    <div class="row">
                        <form action="consulta.php" method="post">
                            <?php
                if(mysqli_num_rows($result)>0){
                while($row = $result->fetch_assoc()){ ?>
                                <div class="col-sm-6">
                                    <div class="well well-sm">
                                        <b><?php echo $row["variable"]; 
                            $query ="SELECT periodo, MIN(ano), MAX(ano) FROM datos WHERE codVariable=$row[codigoVariables]";
                            $resultado = $mysql->query($query);
                            $list = $resultado->fetch_assoc();
                            ?> (Período:
                                    <?php echo $list["periodo"]. " " .$list["MIN(ano)"]. " - " .$list["MAX(ano)"] ?>)</b>

                                        <div class="alert alert-info fade in alert-dismissable" style="margin:2px;padding:5px 30px;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a>
                                            <strong>Nota: <?php echo $row["descripcion"]?></strong>
                                        </div>

                                    </div>
                                </div>
                                <?php    
                }
                }else{ ?>
                                <div class="col-sm-12">
                                    <div class="alert alert-warning">
                                        <strong>Información!</strong> No se han encontrado variables del factor
                                        <?php echo $row2["factor"] ?>.
                                    </div>
                                </div>
                                <?php
                }
                ?>
                    </div>
                    
                    </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="/ceepscoahuila/Admin/includes"><button class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Regresar</button></a>
                        </div>
                </div>
            </div>
        </div>
    </body>

    </html>
