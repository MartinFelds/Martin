<?php

	include "../conexion.php";
	session_start();

	$mail=$_POST['mail'];
	$pass=$_POST['pass'];


	if(!isset($_SESSION['id']))
	{
		$query = "SELECT nombre, id, imagen, visitas, direccion FROM Local WHERE mail='$mail' AND pass='$pass' AND activo='1' ";
		$result = mysqli_query($con, $query);

		if(!$result){
			printf("Errormessage: %s\n", $con->error);
		}
		else
		{
			
			while ($row = mysqli_fetch_assoc($result)){
        		$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['imagen'] = $row['imagen'];
				$_SESSION['visitas'] = $row['visitas'];
				$_SESSION['direccion'] = $row['direccion'];
	    	}
			//******************* Cambiar nombre imagen en la carpeta como base de datos *****************//
						
			$_FILES['files']['name']=$_SESSION['id'];	
			$file_name = $_FILES['files']['name'];			
			$add="../locales/images/$file_name.jpg";
			move_uploaded_file($_FILES['files']['tmp_name'], $add); 

			$query = "INSERT INTO local (imagen) VALUE ('$add')";
			$result = mysqli_query($con, $query);
						
			Header ("Location: ../socios/");
			exit;
		}
	}
	else
	{
		echo "ya existe";
	}
?>