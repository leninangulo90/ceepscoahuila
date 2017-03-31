<?php

$conexionBD = mysql_connect('localhost', 'root', '') or die('No se pudo establecer la conexion con la base de datos');
  //conectar a base de datos
 mysql_select_db('admin') or die('No se puede abrir la base de datos imagen');

session_start();

$username = $_POST['Usuario'];
$password = $_POST['Password'];

$query = "SELECT Usuario, Password FROM usuarios 
			WHERE Usuario = '".$username."' AND Password ='".$password."'";
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
