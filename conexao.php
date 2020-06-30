<?php 
	session_start ();

	$hotsname = "localhost";
	$user = "root";
	$password = "";
	$database = "trabalho";
	$conexao = mysqli_connect($hotsname, $user, $password, $database);
?>