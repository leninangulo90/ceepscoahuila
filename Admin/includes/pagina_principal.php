
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/script/jquery-3.0.0.min.js"></script>
  <script src="bootstrap/script/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
  .img {
    height: 200px;
  }
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("#sistema_estatal").click(function (){
      $("#estatal").css("display","block");
      $("#municipal").css("display","none")
    })
    $("#sistema_municipal").click(function(){
      $("#municipal").css("display","block")
      $("#estatal").css("display","none");
    })
  })
</script>
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
