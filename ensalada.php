<html>
<head>
	<title> REGISTRAR COMPRA</title>
	<meta charset="UFT-8">
	<link rel="stylesheet" href="dise.css">
	<style type="text/css">
		lol{ color : BLACK; font family: Arial; }
	</style>
</head>
</head>
<Body background="img/Ensalada.JPG">
<table style="width:25%" align="center"  cellpadding="20" bgcolor="white">
	<form action="ensalada.php" method="POST"> <!--Aquí van a colocar el archivo al que se va a enviar los datos en la base de datos-->
	<tr><th colspan="1">Compra</th></tr>
	<tr>
	<br><br>
	<lol>
		<tr><td colspan="2">
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
		$ensalada = $_POST['txtEnsalada'];
		$rfc = $_POST['RFC'];
		$nombre = $_POST['nom'];
		$mun = $_POST['mun'];
		$calle = $_POST['calle'];
		$col = $_POST['col'];
		$numE = $_POST['num'];
		$tel = $_POST['tel'];
		$fecha = $_POST['fecha'];
		$comentarios = $_POST['comentarios'];
		//creo variable para insertar en la tabla que es registro
		$insertar = "INSERT into ensalada values('$id', '$ensalada', '$rfc', '$nombre', '$mun', '$calle', '$col', '$numE', '$tel', '$fecha', '$comentarios')";
		//compruebo si se insertaron o no los datos
		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros");
		//cierro conexion
		mysqli_close($conexion);
		echo "Pedido aceptado / Gracias por comprar en VasaFoods :)";
		
	?>
	<br>
	</form>
		<form action = "index.html">
			<input type="submit" class="btn btn-gold" value="Regresar al Inicio"/>
		</form>
		<form action = "ensalada.html">
			<input type="submit" class="btn btn-gold" value="Pedir otra ensalda"/>
		</form>
	
</body>
</html>