<?php
include "../conexion.php";
session_start();

$nombre=$_POST['name'];
$precio=$_POST['precio'];
$des=$_POST['descripcion'];
$foto=$_POST['files'];
$id= $_SESSION['id'];


	if(isset($_SESSION['id'])){
	  if(isset($precio)){
		  if($precio <= 0){
			 header ("Location:fallo.php");
			 exit;
		  }
	  }		  	  
	if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['descripcion']) && !empty($_POST['descripcion']) && isset($_POST['files']) && !empty($_POST['files'])){
			
            
		$query = "INSERT INTO producto (nombre,precio,id_local) VALUE ('$nombre','$precio','$id')";		 
		$result = mysqli_query($con, $query);						
		if(!$result){
			printf("Errormessage: %s\n", $con->error);
		}
			if($_FILES['files']['name'] != ""){
						
					$uploadedfileload="true";
					$uploadedfile_size=$_FILES['files']['size'];
					
					if ($_FILES['files']['size']>200000)
					{$msg="El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";					
					$uploadedfileload="false";}

					if (($_FILES['files']['type'] == "productos/pjpeg" || $_FILES['files']['type'] =="productos/gif" || $_FILES['files']['type'] =="productos/png"))
					{
					$msg=" Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
					$uploadedfileload="false";}
						
						
					$file_name = $_FILES['files']['name'];
					$add="productos/$file_name.jpg";
					if($uploadedfileload=="true"){

					if(move_uploaded_file($_FILES['files']['tmp_name'], $add)){		
					
						
					
					}else{
						
						echo "Error al subir el archivo";}

					}else{
					   echo $msg;
					}			
					}
		
		
		
		sleep(3);
		header ("Location:index.php");
		
		
		}else{
			header ("Location:fallo.php");
		}
	}else{
			header ("Location:fallo.php");
	}
	
	
			







?>