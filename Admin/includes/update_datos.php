<?php

include("listados/db_connection.php");

if (isset($_POST['id']) && isset($_POST['id']) != "")
{
	$user_id = $_POST['id'];

	$query = "SELECT iddato, codVariable, variable, estado, ano, total, fuente from datos inner join variables on datos.codVariable = variables.codigoVariables inner join estados on datos.codiEstado = estados.codigoEstado WHERE iddato = '$user_id' ";

	if (!$result = mysql_query($query)) {
		exit(mysql_error());
	}

	$response = array();
	if (mysql_num_rows($result) > 0) {
		while ($row = mysql_fetch_assoc($result)){
			$response = $row;
		}
	}
	else
	{
		$response['status'] = 200;
		$response['message'] = "Data not Found!";
	}

	echo json_encode($response);
}	
	else
	{
		$response['status'] = 200;
		$response['message'] = "Invalid Request!";
	}

?>
