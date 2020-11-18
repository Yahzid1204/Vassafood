<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACTUALIZAR</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body background="fondo.JPEG">
    <div class="cod-container">
        <div class="form-header">
            <img src="img/banner.jpeg" >
            <h1>Vasafood<span> login </span></h1>
        </div>
	<?php
	//Creo la Conexxion ala BDD
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "bdd_vasafoods";
		
		$conexion = mysqli_connect($server,$usuario,$contrasena,$bd)
			or die ("error en la conexion");
		//Obtengo los datos que se vallan a actualizar
		$rfc = $_POST['form-rfc'];//esta es la importatnte para la actualizacion debe ser la misma
		$correo = $_POST['form-correo'];
		$tel = $_POST['form-tel'];
		$contra = $_POST['form-pass'];
		$contraR = $_POST['form-rep-pass'];
		//NOTA: Solo puse los que considere que pudiera haber un error y se deseara actualizar
		mysqli_query($conexion, "UPDATE registro set correo = '$correo' where RFC = '$rfc'")
			or die("error al actualizar");
		mysqli_query($conexion, "UPDATE registro set tel = '$tel' where RFC = '$rfc'")
			or die("error al actualizar");
		mysqli_query($conexion, "UPDATE registro set contra = '$contra' where RFC = '$rfc'")
			or die("error al actualizar");//si queremos mas solo añadimos mas
		mysqli_query($conexion, "UPDATE registro set concontra = '$contraR' where RFC = '$rfc'")
			or die("Error al actualizar");
		mysqli_close($conexion);
		echo "Datos actualizados correctamente :)";
		
	?>
	<form action = "index.html">
		<input type = "submit" value = "Regresar al menú" name = "btnRegresar"/>
	</form>
</body>
</html>