<?php
	
	require ('connect.php');
	
	$query = "SELECT * FROM estados ORDER BY Estados";
	$resultado = $mysqli->query($query);
	
	$html= "<option value='0'>Seleccionar Estado</option>";
	
	while($row = $resultado->fetch_assoc())
	{
		$html.= '<option value="' . $row['CodigoEstado']. '">' . $row['Estado'] . '</option>' . "\n";
	}
	
	echo $html;
?>
