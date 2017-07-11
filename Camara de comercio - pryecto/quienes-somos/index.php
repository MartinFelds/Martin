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
                            <li><a href="" class="active" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Quienes Somos</b></a></li>
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
         <br><br><br>
        
    </header>
    <br><br>
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

        <div class="main">
            <div class="wrapper">
                <article class="col-1">
                    <div class="indent-left">
                        <div class="p2">
                            <h3 class="p1" style="color: #fff;">Misión</h3>
                            <dl class="list-2">
                                <em align="justify" style="color: #fff;">El objeto de la Cámara es promover la racionalización, desarrollo y protección de las actividades que son propios del comercio y, en general las que sean comunes a sus asociados en razón de su profesión u oficio.</em>                    
                            </dl>
                        </div>
                        <h3 class="p1" style="color: #fff;">Historia</h3>
                        <dl class="list-2">
                            <li align="justify" style="color: #fff;">Su fecha de creación es el 24 de Agosto de 1954, con el Nombre Club Social y de Propaganda de la Cámara de Comercio Minorista , Seccional Villa Alemana y Peñablanca.</li>
                            <li align="justify" style="color: #fff;">Con fecha 18 de Febrero de 1978, se construye el Actual Edificio donde funciona actualmente la Cámara de Comercio.</li>
                            <li align="justify" style="color: #fff;">Con fecha 26 de Agosto de 1980, se aprueba los Actuales Estatutos que rigen a la Cámara y pasa a llamarse “Cámara de Comercio de Villa Alemana y Peñablanca, Asociación Gremial”.</li>
                                       
                        </dl>
                    </div>
                </article>
                <article class="col-2">
                    <h3 class="p1" style="color: #fff;">Visión</h3>
                    <p style="color: #fff;">Deberán propender a la agrupación de todas las personas que ejerzan la actividad de comerciante dentro de su radio jurisdiccional y velar por la dignidad y respeto de sus asociados.</p>
                    <figure class="img-indent-bot">
                        <img class="img-border" src="images/directorio-actual.jpg" alt="">
                    </figure>
                   
                </article>
            </div>
        </div>
    </section>
    
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper img-indent-bot">
                <article class="col-3">
                    <img class="img-border" src="images/historia-1.jpg" alt="" >
                     <center><p class="p2" style="color: #fff;">1979 - 1980</p></center>
                </article>
                <article class="col-3">
                    <img class="img-border" src="images/historia-2.jpg" alt="">
                    <center><p class="p2" style="color: #fff;">1990 - 1991</p></center>
                </article>
                <article class="col-3">
                    <img class="img-border" src="images/historia-3.jpg" alt="" >
                    <center><p class="p2" style="color: #fff;">2005 - 2006</p></center>
                </article>
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
