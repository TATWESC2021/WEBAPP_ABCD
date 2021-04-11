<?php 
	
	$host = 'https://databases-auth.000webhost.com';
	$user = 'id16542862_abcd';
	$password = 'TorosTec2021+';
	$db = 'id16542862_paraissodb';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}

?>