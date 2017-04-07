<?php

	include 'connect_sistemaestatal.php';
	if ($mysql->query("UPDATE registro_usuario SET nombre_usuario = '".$_POST['nombre_usuario']."', correo_usuario = '".$_POST['correo_usuario']."', usuario = '".$_POST['usuario']."',tipo_usuario = '".$_POST['tipo_usuario']."' WHERE id_user= '".$_POST['id_user']."'") === TRUE) {
		
		echo http_response_code(202);
	} else {
		echo "error al actualizar " . $mysql->error;
	}

?>