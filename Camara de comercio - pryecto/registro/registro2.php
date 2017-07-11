<!DOCTYPE html>
<html lang="en">
<head>
    <title>Camara de Comercio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="../socialbar/style.css" type="text/css" media="screen">
    <script src="../js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="../js/cufon-yui.js" type="text/javascript"></script>
    <script src="../js/cufon-replace.js" type="text/javascript"></script> 
    <script src="../js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="../js/FF-cash.js" type="text/javascript"></script>
    <script src="../js/tms-0.3.js" type="text/javascript"></script>
    <script src="../js/tms_presets.js" type="text/javascript"></script>
    <script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="../js/jquery.equalheights.js" type="text/javascript"></script>  


    <style>
          .thumb {
            width: 280px;           
          }
    </style>  

</head>
<body id="page1" >

    <br><br>
    <!--==============================header=================================-->
    <header>
        <div class="row-top" >
            <div class="main">
                <div class="wrapper" style="z-index:2">
                    <nav>
                        <ul class="menu">
                            <li><a href="../"><b style="font-family: 'Droid Sans'; font-size: 24px;">Inicio</b></a></li>
                            <li><a href="../quienes-somos/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Quienes Somos</b></a></li>
                            <li><a href="../locales/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Locales</b> </a></li>
                            <li><a href="../eventos/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Eventos</b> </a></li>
                            <li><a href="../empleos/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Empleos</b></a></li>
                            <li><a href="../socios/" class="active"  style="font-family: 'Droid Sans'; font-size: 24px;"><b>Socios</b></a></li>
                            <li><a href="../contacto/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Contacto</b></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
         <img src="../images/logo.png" style="margin-bottom: -100px; margin-top: -26px; margin-left: 20px; position:fixed;z-index:2500"/>
         <br><br><br>
    </header>
    <div style="margin-bottom: -30px;" ></div>
    <!--==============================content================================-->
    <section id="content">

        <!--==============================Social================================-->

        <div class="social">
            <ul>
                <li><a href="#" target="_blank" class="icon-facebook"></a></li>
                <li><a href="#" target="_blank" class="icon-youtube"></a></li>
                <li><a href="#" target="_blank" class="icon-google-plus"></a></li>
                <li><a href="#" target="_blank" class="icon-twitter"></a></li>
                <li><a href="#" target="_blank" class="icon-mail2"></a></li>
            
            </ul>
        </div>

            <!--==============================content================================-->
        <center>

              <section class="form">
            <center><h1>Imagen del Local</h1></center>
			<br><br><br><br>
		
            
                 <form enctype="multipart/form-data"  action="registro2.php" method="POST">
                            <b style="font-family: 'Droid Sans'; font-size: 30px; color:#fff;">  *OPCIONAL* </b> 
                            <br>
                            <b style="font-family: 'Droid Sans'; font-size: 15px; color:#fff;"> Solo se acepta formato .jpg </b> 
                             <div class="upload">
                                <input type="file" id="files" name="files" />
                            </div>
                           
                            <br>
                            <input style="background: #1D6A20 " name="submit" type="submit" value="Subir">
                 
				  
				  <?php
				  $esa=$_GET["nombre"];
				  echo $esa;
				  
					/*if(isset($_POST['submit'])){
						$contador = 0;
					if($_FILES['files']['name'] != ""){
						
					$uploadedfileload="true";
					$uploadedfile_size=$_FILES['files']['size'];
					
					if ($_FILES['files']['size']>200000)
					{$msg="El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";					
					$uploadedfileload="false";}

					if (($_FILES['files']['type'] == "images/pjpeg" || $_FILES['files']['type'] =="images/gif" || $_FILES['files']['type'] =="images/png"))
					{
					$msg=" Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
					$uploadedfileload="false";}
						
						
					$file_name = $_FILES['files']['name'];
					$add="../locales/images/$file_name.jpg";
					if($uploadedfileload=="true"){

					if(move_uploaded_file($_FILES['files']['tmp_name'], $add)){		
					
						header("Location: ../../socios/index.php");
					
					}else{
						
						echo "Error al subir el archivo";}

					}else
					   echo $msg;
					}			
					}		*/												 
					
					?>	
				</form>					
				<br>
				<form  action="../socios/index.php" method="post">
					
                    <input style="background: #1D6A20 " type="submit" value="Terminar">
                </form>
            </section>

       </center>

    </section>    
    
    <!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="aligncenter">
                <span>2014 © Cámara de Comercio Minorista de Villa Alemana y Peñablanca</span>
                <span>Visitas: 155</span>
            </div>
        </div>
    </footer>

    <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
    
    <script type="text/javascript"> Cufon.now(); </script>
   
</body>
</html>