<?php
	include("connect_sistemaestatal.php");

	$codigoFactor = $_POST['codigoFactor'];
	$factor = $_POST['factor'];

	if ($result = $mysql->query("INSERT INTO factores VALUES ('".$codigoFactor."','".$factor."')") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "Error: ".$mysql->error;
	}
?>