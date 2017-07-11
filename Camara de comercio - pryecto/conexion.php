<?php

   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "comer";

	$con = mysqli_connect($host,$user,$password,$database);

	// Comprobar la conexión
	if (mysqli_connect_errno($con))
	{
	   echo "No se pudo conectar a MySQL: " . mysqli_connect_error ();
	}
?>
