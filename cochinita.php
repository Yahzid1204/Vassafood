<html>
<head>
	<meta charset="UFT-8">
	<Title>Donas Registro</Title>
	<link rel="stylesheet" href="dise.css">
	<style type="text/css">
		lol{ color : Black; font family: Arial; }
	</style>
</head>
</head>
<Body background="img/Cochinita.JPG">
<table style="width:25%" align="center"  cellpadding="20" bgcolor="white">
	<form action="donas.php" method="POST"> <!--Aquí van a colocar el archivo al que se va a enviar los datos en la base de datos-->
	<tr><th colspan="1">COCHINITA</th></tr>
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
		$cant = $_POST['cantidad'];
		$pata = $_POST['pata'];
		$rfc = $_POST['RFC'];
		$nombre = $_POST['nom'];
		$mun = $_POST['mun'];
		$calle = $_POST['calle'];
		$col = $_POST['col'];
		$numE = $_POST['num'];
		$tel = $_POST['tel'];
		$fecha = $_POST['fecha'];
		//creo variable para insertar en la tabla que es donas
		$insertar = "INSERT into cochinita values('$id', '$cant', '$pata', '$rfc', '$nombre', '$mun', '$calle', '$col', '$numE', '$tel', '$fecha')";
		//compruebo si se insertaron o no los datos
		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros");
		//cierro conexion
		mysqli_close($conexion);
		echo "Pedido guardado gracias por comprar :)";
		
	?>
	</lol>	
	</form>
	<form action = "index.html">
		<input class="btn btn-gold" type = "submit" value = "Regresar al menú" name = "btnRegresar"/>
	</form>
</body>
</html>