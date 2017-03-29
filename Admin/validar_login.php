
<?php
		
	$conexionBD = mysql_connect('localhost','root','') or die ('No se pudo establecer la conexion con la base de datos');

	mysql_select_db('sistemaestatal') or die ('No se puede acceder a la base de datos');

	session_start();

	$username = $_POST['email_user']

?>