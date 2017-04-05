<?php

	include 'connect_sistemaestatal.php';
	if ($mysql->query("UPDATE datos SET codVariable = '".$_POST['variable']."', codiEstado = '".$_POST['estado']."', ano = '".$_POST['ano']."',total = '".$_POST['total']."',fuente = '".$_POST['fuente']."' WHERE iddato= '".$_POST['iddato']."'") === TRUE) {
		
		echo http_response_code(202);
	} else {
		echo "error al actualizar " . $mysql->error;
	}

?>