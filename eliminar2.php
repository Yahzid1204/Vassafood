<html>
<head>
	<title> ELIMINAR </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body background="fondo.JPEG">
    <div class="cod-container">
        <div class="form-header">
            <img src="img/banner.jpeg" >
            <h1>Vasafood<span> login </span></h1>
        </div>
	<?php
		//Conexion a la BDD
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "bdd_vasafoods";//Varia segun la BDD
		
		$conexion = mysqli_connect($server,$usuario,$contrasena,$bd)
			or die ("error en la conexion");
		
		$rfc = $_POST['form-rfc'];
		
		mysqli_query($conexion,"DELETE from registro where RFC = '$rfc'")
			or die ("Error al eliminar datos");
			
		mysqli_close($conexion);
		echo "Datos eliminados correctamente :)";
	?>
	<form action = "index.html">
		<input type = "submit" value = "Regresar al menú" name = "btnRegresar"/>
	</form>
</body>
</html>