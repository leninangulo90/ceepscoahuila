<?php
	$conexionBD = mysql_connect('localhost', 'root', '') or die('No se pudo establecer la conexion con la base de datos');
  //conectar a base de datos
 mysql_select_db('sistemaestatal') or die('No se puede abrir la base de datos imagen');

	$codigoFactor=$_REQUEST["codigoFactor"];
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="../images/factores/".$foto;
	copy($ruta,$destino);
	$factor = $_REQUEST["factor"];
	$descripcion = $_REQUEST["descripcion"];

	mysql_query("INSERT INTO factores (codigoFactor,factor,descripcion,foto) values ('$codigoFactor','$factor','$descripcion','$destino')");

	header("Location: /ceepscoahuila/Admin/includes/administracion");

?>