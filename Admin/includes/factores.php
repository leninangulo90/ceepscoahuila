<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Factores</title>
</head>

<body>
    <?php
    include("menus/menu.php");
    ?>
        <div class="container" style="margin-bottom:100px;">
            <div class="row">
                <div class="col-sm-12">
                    <hr class="textst1">
                    <h2>Nuestros Factores</h2>
                    <hr class="textst1">
                    <div class="row">
                        <?php
                    require_once("connect_sistemaestatal.php");
                    $sql = "SELECT * FROM factores ORDER BY codigoFactor ASC";
                    $result = $mysql->query($sql);
                    while($row = $result->fetch_assoc()){ ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 mt-4" style="margin-bottom:10px;">
                                <div class="card">
                                    <img class="card-img-top img" src="<?php echo $row["imagen"] ?>">
                                    <div class="card-block">
                                        <a href="consulta_variables.php?id=<?php echo $row["codigoFactor"] ?>">
                                            <button class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row["factor"]?> <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
