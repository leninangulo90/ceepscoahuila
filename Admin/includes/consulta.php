<?php
require("connect_sistemaestatal.php");
if(isset($_POST["consultar"])){
$variables=$_POST["variables"];
$estados =$_POST["estados"];
$ages = $_POST["ages"];
$nvariables=implode('|', $variables);
if($estados=='gral'){
    $sql = "SELECT variable, estado, ano, total, unidad, fuente\n"
    . "FROM datos \n"
    . "INNER JOIN variables\n"
    . "ON datos.codVariable=variables.codigoVariables\n"
    . "INNER JOIN estados\n"
    . "ON datos.codiEstado=estados.codigoEstado\n"
    . "WHERE codVariable REGEXP '".$nvariables."' AND ano='".$ages."'";
}else{
    $sql = "SELECT variable, estado, ano, total, unidad, fuente\n"
    . "FROM datos \n"
    . "INNER JOIN variables\n"
    . "ON datos.codVariable=variables.codigoVariables\n"
    . "INNER JOIN estados\n"
    . "ON datos.codiEstado=estados.codigoEstado\n"
    . "WHERE codVariable REGEXP '".$nvariables."' AND codiEstado='".$estados."' AND ano='".$ages."'";
}
$result = $mysql->query($sql);
echo "<div class='col-sm-12'><table id='tabla' class='table table-hover table-bordered table-striped'><tr>";
if(mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
echo "<td style='background-color:lavender;'>Estado: <b>".$row["estado"]."</b></td>";
        echo "<td style='background-color:lavender;'>Año: <b>".$row["ano"]."</b></td></tr>";
echo "<tr style='background-color:whitesmoke;'><td>Variable: <b>".$row["variable"]. "</b></td>";
echo "<td style='background-color:gainsboro;'>"; echo number_format($row["total"]) ." ". $row["unidad"]. "</td></tr>";
echo "<tr style='border-bottom:2px solid darkgray;'><td colspan='2'>Fuente: ".$row["fuente"]."</td></tr>";
}
}else{
echo "<td>No hay datos</td>";
}
echo "<table></div>";
}
?>
