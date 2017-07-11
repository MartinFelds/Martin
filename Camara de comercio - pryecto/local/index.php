<?php
    $id_local = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Camara de Comercio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
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
	<?php
    session_start();
	if(isset($_SESSION['id'])){
		
		
?>	
<style>
.menu li {
float:left;
padding-left:21px;
}
</style>
<?php	
}?>	

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
                            <li><a href="../socios/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Socios</b></a></li>
                            <li><a href="../contacto/index.php" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Contacto</b></a></li>							
							<?php if(isset($_SESSION['id'])){  ?>
							<li><a href="../logout.php" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Cerrar Sesión</b></a></li>
							<?php }?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
         <img src="../images/logo.png" style="margin-bottom: -100px; margin-top: -26px; margin-left: 20px; position:fixed;z-index:2500"/>
         <br><br><br><br><br>
        
         <?php
            include "../conexion.php";
            $query = "SELECT nombre, imagen, descripcion, direccion FROM Local WHERE id='$id_local' ";
            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $nombre_local = $row['nombre'];
                $imagen_local = $row['imagen'];
                $descripcion_local = $row['descripcion'];
                $direccion_local = $row['direccion'];
            }

         ?>

        <center> <b style="font-family: 'Droid Sans'; font-size: 40px; color:#fff;"> <?php echo $nombre_local; ?> </b> </center>

        <center> <b style="font-family: 'Droid Sans'; font-size: 20px; color:#fff;"> <?php echo $descripcion_local; ?> </b> </center>
        <br><br>
                
    </header>
    <div style="margin-bottom: -30px;" ></div>
    <!--==============================content================================-->
    <section id="content"><div class="ic"></div>

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

        <div class="main">
            <div class="slider-wrapper">
                <div class="slider">
                    <ul class="items">
                        <li>
                            <img src= <?php echo "../locales/images/".$imagen_local.".jpg"; ?> />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>

        <center><iframe src= <?php echo $direccion_local; ?> style=" width: 400px; height: 200px;" ></iframe></center>

        <br><br>
    
        <div class="main">
            <div class="wrapper img-indent-bot">
                
                <?php
                    include "../conexion.php";
                    $query = "SELECT nombre, id, imagen, precio FROM Producto WHERE id_local='$id_local' ";
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>

                        <article class="col-2" style="margin-left:10px; margin-top: 10px;">
                            <a href="#"><img class="img-border" src= <?php echo "../productos/".$row['imagen'].".jpg"; ?> alt=""></a>
                            <center><b style="font-family: 'Droid Sans'; font-size: 15px; color:#fff;"> <?php echo $row['nombre']; ?> </b></center>
                            <center><b style="font-family: 'Droid Sans'; font-size: 20px; color:#fff;"> <?php if ($row['precio'] == 0){echo "No hay Precio";}else{echo $row['precio'];} ?>  </b></center>
                                                
                        </article>

                        
                   <?php ;}
                 ?>


            </div>
            <div class="wrapper">
                <center>
                <article class="aligncenter">
                    <div class="maxheight indent-bot">
                        
                    </div>
                </article>
                </center>
            </div>
        </div>

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
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.slider')._TMS({
                duration:1000,
                easing:'easeOutQuint',
                preset:'slideDown',
                slideshow:7000,
                banners:false,
                pauseOnHover:true,
                pagination:true,
                pagNums:false
            });
        });
    </script>
</body>
</html>
