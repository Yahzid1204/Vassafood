<html>
<head>
	<title> CONSULTAR </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body background="fondo.JPEG">
    <div class="cod-container">
        <div class="form-header">
            <img src="img/banner.jpeg" >
            <h1>Vasafood<span> Registros </span></h1>
        </div>
	</div>
	<?php
	//Conexion a la BDD
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "bdd_vasafoods";//Varia segun la BDD
		
		$conexion = mysqli_connect($server,$usuario,$contrasena,$bd)
			or die ("error en la conexion");
		//Creo variable para realizar la conexion de consulta
		$consulta = mysqli_query($conexion,"SELECT * from registro")
			or die ("Error al traer los datos");
		//Creo la tabla para mostrar datos
		echo '<table border="1">';
		echo '<tr>';//primer fila
		echo '<th id="nombre"> RFC </th>';
		echo '<th id="apell"> Correo </th>';
		echo '<th id="fecha"> Nombre </th>';
		echo '<th id="producto"> Teléfono </th>';
		echo '</th>';//cierro primera fila
		//la variable columna va a tener lo que tiene el array que ahora es la variable consulta
		while($columna = mysqli_fetch_array($consulta))
		{
			//con el while un ciclo para insertar los datos en las columnas
			echo '<tr>';//segunda fila
			echo '<td>'.$columna['RFC'].'</td>';//nota:RFC es como se llama la columna de la BDD
			echo '<td>'.$columna['correo'].'</td>';
			echo '<td>'.$columna['nombre'].'</td>';
			echo '<td>'.$columna['tel'].'</td>';
			echo '</tr>';//cierro segunda fila
		}
		//Cierro conexion a la BDD
		mysqli_close($conexion);
		echo "</table>";
	?>
	<form action = "index.html">
	<br>
		<input type = "submit" value = "Regresar al menú" name = "btnRegresar"/>
	</form>
</body>
</html>