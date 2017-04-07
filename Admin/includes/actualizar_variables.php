<?php

	include 'connect_sistemaestatal.php';
	if ($mysql->query("UPDATE variables SET codigoVariables = '".$_POST['codigoVariables']."', variable = '".$_POST['variable']."' WHERE codigoVariables= '".$_POST['codigoVariables']."'") === TRUE) {
		
		echo http_response_code(202);
	} else {
		echo "error al actualizar " . $mysql->error;
	}

?>