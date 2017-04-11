<?php

	include("connect.php");

	$codigoVariables = $_POST['codigoVariables'];
	$codFactor = $_POST['codFactor'];
	$variable = $_POST['variable'];
	$descripcion = $_POST["descripcion"];

	if($result = $mysql->query("INSERT INTO variables VALUES ('".$codigoVariables."','".$codFactor."','".$variable."', '".$descripcion."')") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "Error: " .$mysql->error;
	}

?>