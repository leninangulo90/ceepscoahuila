<?php
	
	include 'connect_sistemaestatal.php';
	if ($mysql->query("UPDATE factores SET codigoFactor = '".$_POST['codigoFactor']."', factor = '".$_POST['factor']."' WHERE codigoFactor = '".$_POST['codigoFactor']."'") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "error al actualizar " . $mysql->error;
	}

?>  