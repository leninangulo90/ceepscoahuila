<?php
	include("connect_sistemaestatal.php");

	$codigoEstado = $_POST['codigoEstado'];
	$estado = $_POST['estado'];

	if ($result = $mysql->query("INSERT INTO estados VALUES ('".$codigoEstado."','".$estado."')") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "Error:" .$mysql->error;
	}

?>