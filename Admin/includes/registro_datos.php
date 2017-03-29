<?php
  include("connect_sistemaestatal.php");

  $codVariable = $_POST['codVariable'];
  $codiEstado = $_POST['codiEstado'];
  $ano = $_POST['ano'];
  $total = $_POST['total'];
  $unidad = $_POST['unidad'];
  $fuente = $_POST['fuente'];

  if($result = $mysql->query("INSERT INTO datos VALUES ('','".$codVariable."','".$codiEstado."','".$ano."','".$total."','".$unidad."','".$fuente."')") === TRUE) {
  	echo http_response_code(202);
  } else {
  	echo "Error: " .$mysql->error;
  }
?>