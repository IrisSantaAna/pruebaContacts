<?php
if($_POST["message"]) {
    mail("santaana.astrid@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Iris Santa Ana Portfolio</title>
		<meta name="author" content="Iris Santa Ana" />
		<link rel="shortcut icon" href="../favicon.ico"> <!-- icono de 16x16 para la pestana -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
<!--		<link rel="stylesheet" type="text/css" href="css/prueba/normalize.css" /> -->

		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

	</head>

	<body>
		<header>
			<nav id="header-nav" class="navbar navbar-default">
				<div class="container-fluid">
					
						 <!-- poner visible-md visible-lg y uno mini para small devices -->
					<div id="logo-main"><a href="index.html"><img src="images/logo1.png" width="230" alt="Iris Santa Ana Logo"></a></div>
						
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div><!-- .navbar-header -->

					<div id="collapsable-nav" class="collapse navbar-collapse">
						<ul id="nav-list" class="nav navbar-nav ">
							<li class="active">
								<a href="index.html">Inicio</a>
							</li> 
							<li>
								<a href="#">Portfolio</a>
							</li> 
							<li>
								<a href="#">Acerca de mí</a>
							</li>
							<li>
								<a href="#">Contacto</a>
							</li>
						</ul>
					</div> <!-- .collapse -->

				</div><!-- .container-fluid -->
			</nav>
		</header>



		<div id="main-content" class="container-fluid">
			<section class="grid-wrap">
				<ul class="grid swipe-right" id="grid">
					<li class="title-box">
						<h2>Portfolio 2017</h2>
						
					</li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Logos</h3></a></li>
					<li><a href="#"><img src="images/3d.jpg" width="500px" alt="dummy"><h3>Animación 3D</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Ilustración Digital</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Ilustración Tradicional</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>2D</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Fotografía</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Stop Motion</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Escultura</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Video</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Infografías</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Carteles</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Modelación 3D</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Rigging</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Render</h3></a></li>
					<li><a href="#"><img src="images/dummy.png" alt="dummy"><h3>Motion Graphics</h3></a></li>

				</ul>
			</section>
		</div> <!-- main-content -->

		<div id="about-me" class="container-fluid">
			<div id="contenedor">
				<h3>Acerca de mí</h3> 
				<span>¡Hola! Yo soy Iris y vivo en la Ciudad de México.</span> <br>
				<img src="images/iris.png" width="200" alt="Imagen Iris Santa Ana">
				<div>
				
			<!--	<img src="images/AstridSantaAna.jpg" width="150" alt="Imagen Iris Santa Ana"> -->
					<p> <br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>


		<div id="contacto" class="container-fluid">

			<h3>Contáctame</h3>
			<div class="row">
				<div class="col-lg-10">
			

   					<form method="post" action="contacts.php" class="input-group" >
       					<span class="input-group-addon" id="basic-addon1">Nombre</span>
        				<input type="text" name="sender" class="form-control" placeholder="Nombre y apellidos" aria-describedby="basic-addon1"> <!-- name="sender" for the php -->
					</form><br>
					<form method="post"  action="contacts.php" class="input-group">
        				<span class="input-group-addon" id="basic-addon2">Email</span>
        				<input type="text" name="sender" class="form-control" placeholder="hola@ejemplo.com" aria-describedby="basic-addon2">
        			</form><br>
        			<form method="post" action="contacts.php" class="input-group">
        				<span class="input-group-addon" id="basic-addon3">Asunto</span>
        				<input type="text" name="sender" class="form-control" aria-describedby="basic-addon3">
        			</form><br>
        			<form method="post" action="contacts.php" class="input-group col-lg-8 form-inline">
       				<!--	<span class="input-group-addon">Message:</span> <br> -->
        				<textarea rows="5" cols="86"  name="message" placeholder="Mensaje"></textarea>
        			</form> 
        			<input type="submit" name="Enviar">	
   					




				</div>
				<div class="circle">
  					<button type="submit" class="submit-with-icon">
    					<span class="glyphicon glyphicon-send"></span>
    				</button>
				</div>


				



			</div>
		</div>



		<div id="redes-sociales" class="container-fluid">
			<a href="#"><img src="images/iconos/facebook.png" width="50"></a>
			<a href="#"><img src="images/iconos/twitter.png" width="50"></a>
			<a href="#"><img src="images/iconos/instagram.png" width="50"></a>
			<a href="#"><img src="images/iconos/linkedin.png" width="50"></a>
			<a href="#"><img src="images/iconos/pinterest.png" width="50"></a>
			<a href="#"><img src="images/iconos/vimeo.png" width="50"></a>
		</div> <!-- #redes-sociales -->

		<footer class="panel-footer">
			<div class="container-fluid">
				<span>© 2017 Iris Santa Ana.  Todos los derechos reservados. | santaana.iris@gmail.com | Ciudad de México.</span>
			</div>
		</footer>

		<!-- jQuery -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"> </script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/colorfinder-1.1.js"></script>
		<script src="js/gridScrollFx.js"></script>
		<script>
			new GridScrollFx( document.getElementById( 'grid' ), {
				viewportFactor : 0.4
			} );
		</script>
		<script type="text/javascript" src="js/script.js"> </script>

	</body>
</html>