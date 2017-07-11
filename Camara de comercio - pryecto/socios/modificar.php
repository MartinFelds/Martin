<?php
include "../conexion.php";
session_start();


	if(isset($_SESSION['id'])){
	  	$nombre=$_POST['nombre'];
		$id=$_SESSION['id'];
		$des=$_POST['descripcion'];
		
		
		//************** Modifica el nombre ****************//
		if(isset($nombre) && !empty($nombre)){
		   
			
		  $quer = "SELECT * FROM local";
          $resultado = mysqli_query($con, $quer);
		  while ($row = mysqli_fetch_assoc($resultado)) {
			  if($row['nombre'] == $nombre){				 
				  header("Location:nom_error.php");
				  exit;
			  }
		  }
		
		$query = "UPDATE local SET nombre='$nombre' WHERE id='$id'";		 
		$result = mysqli_query($con, $query);				
		if(!$result){
			printf("Errormessage: %s\n", $con->error);
		}
		
		sleep(3);
		header ("Location:index.php");
		exit;				
		}
		//************** Modifica el descripcion ****************//
		
		if(isset($des) && !empty($des)){		   		   		 		
		$query = "UPDATE local SET descripcion='$des' WHERE id='$id'";		 
		$result = mysqli_query($con, $query);				
		if(!$result){
			printf("Errormessage: %s\n", $con->error);
		}
		
		sleep(3);
		header ("Location:index.php");
		exit;				
		}
		
		//************** Modifica la fotografia****************//
		
		
		
	}else{
			header ("Location:../index.php");
	}
	
	header ("Location:datos-local.php");
	?>