<?php

$conexionBD = mysql_connect('localhost', 'root', '') or die('No se pudo establecer la conexion con la base de datos');
  //conectar a base de datos
 mysql_select_db('sistemaestatal') or die('No se puede abrir la base de datos imagen');

session_start();

$usuario = $_POST['usuario'];
$pass_usuario = $_POST['pass_usuario'];

$query = "SELECT usuario, pass_usuario FROM registro_usuario
			WHERE usuario = '".$usuario."' AND pass_usuario ='".$pass_usuario."'";
$q = mysql_query($query,$conexionBD);

	if(mysql_num_rows($q) > 0)
	{
		$result = mysql_result($q,0);

		session_start();
		$_SESSION['user'] = $username;
		echo (http_response_code(202));
	} else {
		echo (http_response_code(200));
	}
mysql_close($conexionBD);

?>
