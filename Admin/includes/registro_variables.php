<?php

	include("connect_sistemaestatal.php");

	$codigoVariables = $_POST['codigoVariables'];
	$codFactor = $_POST['codFactor'];
	$variable = $_POST['variable'];

	if($result = $mysql->query("INSERT INTO variables VALUES ('".$codigoVariables."','".$codFactor."','".$variable."')") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "Error: " .$mysql->error;
	}

?>