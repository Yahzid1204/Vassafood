<html>
<head>
	<title> REGISTRAR </title>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/estilos2.css">
	
</head>
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
		//Obtengo los datos del formulario
		$id = '';//No coloco nada porque se incrementa solo
		$rfc = $_POST['form-rfc'];
		$correo = $_POST['form-correo'];
		$nombre = $_POST['form-nom'];
		$tel = $_POST['form-tel'];
		$contra = $_POST['form-pass'];
		$contraR = $_POST['form-rep-pass'];
		//creo variable para insertar en la tabla que es registro
		$insertar = "INSERT into registro values('$id', '$rfc', '$correo', '$nombre', '$tel', '$contra', '$contraR')";
		//compruebo si se insertaron o no los datos
		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros");
		//cierro conexion
		mysqli_close($conexion);
		echo "Datos insertados correctamente / Gracias por registrarte :)";
		
	?>
	<form action = "index.html">
		<input type = "submit" value = "Regresar al menú" name = "btnRegresar"/>
	</form>
</body>
</html>