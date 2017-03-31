<?php
	 $mysql = new mysqli('localhost', 'root', '', 'sistemaestatal');
  if ($mysql->connect_errno) {
    printf('error al conectar a la BD');
    exit();
  }
?>