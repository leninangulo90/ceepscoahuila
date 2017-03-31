<?php

	include("connect_sistemaestatal.php");

	if($result = $mysql->query("SELECT codigoEstado, estado FROM estados WHERE codigoEstado =" .$_POST['codigo_estado'])) {
	  if ($result->num_rows>0) {
	  	$jsontext = '[';
	  	while ($row = $result->fetch_assoc()) {
	  		$jsontext .= '{"codigoEstado": "'.$row["codigoEstado"].'","estados":"'.$row["estado"].'"}';
	  	}

	  	$jsontext .= "]";
	  	echo $jsontext;
	  } else {
	  	echo "No se puede actualizar";
	  }
	}

?>