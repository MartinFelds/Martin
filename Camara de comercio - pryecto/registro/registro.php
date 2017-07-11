<?php

	include "../conexion.php";
	session_start();

	$nombre=$_POST['nombre'];
	$rut=$_POST['rut'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$pas2=$_POST['pass2'];
	$dire=$_POST['direccion'];
	$desn=$_POST['descripcion'];
	
	
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['pass']) && !empty($_POST['pass'])&& isset($_POST['rut']) && !empty($_POST['rut'])){

//Verifico si la contraseña son iguales
if($pass != $pas2){
header ("Location:fallo.php");
exit;
}
// verifica si ya existe un nombre igual
		$quer = "SELECT * FROM local";
		$resultado = mysqli_query($con, $quer);
			while ($row = mysqli_fetch_assoc($resultado)) {
			  if($row['nombre'] == $nombre){				 
				  header("Location:fallo.php");
				  exit;
			  }
		  }
		  
		
	$query = "INSERT INTO Local (nombre, rut, mail, pass, direccion, descripcion) VALUES ('$nombre','$rut','$mail','$pass','$direccion','$descripcion') ";
	$result = mysqli_query($con, $query);

	header ("Location: registro2.php?nombre=$nombre");
	exit;
}else{

	
	header("Location:registro.php");
	exit;
	}

	

	
	

?>