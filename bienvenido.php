<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'<script> alert ("por favor inicie sesion.");
                       window.location ="../index.php"; </script>';
    session_destroy();
    die();
}


?>
<html lang="en">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BIENVENIDOS A KILA</title>
    <link rel="stylesheet" href="assets/css/Menu.css">
     <link rel="stylesheet" href="assets/css/estilo3.css">
    <link rel="icon" type="image/png" href="assets/images/logomoda.png">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     

   </head>
    <body>
   <script src="https://cdn.jsdelivr.net/npm/@metamask/onboarding@1.0.1/dist/metamask-onboarding.bundle.js"></script>
   <script src="assets/js/app.js"></script>
   <header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a></li>
                <li>
                    <a href="php/cerrar_sesion.php">cerrar session</a>
                </li>
				<li><a href="#">Nosotros</a>
                <ul class="submenu">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">TikTok</a></li>
                        <li><a href="#">Pinterest</a></li>
                        <li><a href="#">YouTube</a></li>
					</ul>
                </li>

				<li><a href="productos hombres.html">Hombre</a></li>
				<li><a href="productos mujer.html">Mujer</a></li>
                <li><a href="productos.html">Ni&ntilde;os</a></li>
                <li><button class="wallet-btn btn" id="connectWallet"><span>Connect Wallet</span></button></li>

			</ul>
		</nav>
	</header>

           <div id= principal>
            <img  id ="oferta3" src=" assets/images/oferta1.png" alt="Workplace" usemap="#workmap3">
             <map name="workmap3">
              <area shape="default"  alt="larga" href="#">
               </map>
            <img  id ="oferta2" src=" assets/images/oferta2.png" alt="Workplace" usemap="#workmap2">
             <map name="workmap2">
              <area shape="default"  alt="larga" href="#">
               </map>

               <div id ="secciones"> 
                   <img id="Seccion1" src="assets/images/oferta3.png" alt="Workplace" usemap="#seccion1" />
                   <img id="Seccion2" src="assets/images/oferta4.png" alt="Workplace" usemap="#seccion2" />
                   <img id="Seccion3" src="assets/images/oferta5.png" alt="Workplace" usemap="#seccion3" />
                   <img id="Seccion4" src="assets/images/oferta6.png" alt="Workplace" usemap="#seccion4" />


                   <map name="seccion1">
                       <area shape="default" alt="C1" href="#" />
                   </map>
                   <map name="seccion2">
                       <area shape="default" alt="C2" href="#" />
                   </map>
                   <map name="seccion3">
                       <area shape="default" alt="C3" href="#" />
                   </map>
                   <map name="seccion4">
                       <area shape="default" alt="C4" href="#" />
                   </map>
               </div>

               </div>

        </body>
  </html>