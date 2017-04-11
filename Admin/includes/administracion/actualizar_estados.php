<?php
	
	include 'connect_sistemaestatal.php';
	if ($mysql->query("UPDATE estados SET codigoEstado = '".$_POST['codigoEstado']."', estado = '".$_POST['estado']."' WHERE codigoEstado = '".$_POST['codigoEstado']."'") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "error al actualizar " . $mysql->error;
	}

?>  