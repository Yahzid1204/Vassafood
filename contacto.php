<html>
<head>
	<title>CONTACTO</title>
		<link rel="stylesheet" type="text/css" href="css/contacto.css">
		<meta charset="utf-8">
</head>
</head>
	<body BGCOLOR="E7632D">
	<div id="principal">
			<header>
				<div id="logo">
					<h2 class="titulo">VASAFOODS</h2>
					<p class="sub-titulo"><I><B><U>NO DEJES PARA MAÑANA LO QUE PUEDES COMER HOY...</U></B></I></p>
				</div>

				<nav class="menu">
					<ul>
			<li class="menu__item"><a  class="menu__link" href='index.html'>INICIO</a></li>
            <li class="menu__item"><a  class="menu__link"  href='comienzo.html'> REGÍSTRATE</a></li>
            <li class="menu__item"><a  class="menu__link" href='contacto.html'>CONTACTO</a></li>
					</ul>
				</nav>
			</header>

			<section id="slide">
				<img src="img/banner.jpeg" width="900" height="250">
			</section>
			<section id="categorias">
				<section id="formulario">
					<h2 class="titulo-contacto">MENSAJE ENVIADO/ Siga disfrutando de nuestro contenido</h2>

					<div id="datos">
							Teléfono Fijo: <strong>2661-0290</strong><br>
							Teléfono Celular: <strong>7560-1234</strong><br>
							E-Mail: <strong>AaVS@hmail.com</strong><br>
							Dirección: <strong>Av. Sebastián Lerdo de Tejada S/N, Centro, 50000 Toluca de Lerdo, Méx.</strong><br>
						</div>
				</section>
				<section id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7531.5585483142695!2d-99.65278813754273!3d19.29196264987823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd89ea33402ba5%3A0x19fcd4be3a072f99!2sCosmovitral%20Jard%C3%ADn%20Bot%C3%A1nico!5e0!3m2!1ses-419!2smx!4v1604865826689!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</section>
			</section><!--/categorias-->
			<section id="info">
			<hr>
			<footer>
				<p>
					(c) Todos los derechos reservados a Aaron Vásquez Salgado|2020 <br>
				</p>
			</footer>
		</div>
	<?php
	//Conexion a la BDD
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "bdd_vasafoods";//Varia segun la BDD
		
		$conexion = mysqli_connect($server,$usuario,$contrasena,$bd)
			or die ("error en la conexion");
		//Obtengo los datos del formulario
		$id = '';//No coloco nada porque se incrementa solo
		$nombre = $_POST['nom'];
		$email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];
		//creo variable para insertar en la tabla que es registro
		$insertar = "INSERT into consulta values('$id', '$nombre', '$email', '$asunto', '$mensaje')";
		//compruebo si se insertaron o no los datos
		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros");
		//cierro conexion
		mysqli_close($conexion);
		echo "Gracias por consultar :)";
		
	?>
</body>
</html>