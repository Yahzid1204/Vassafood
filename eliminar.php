<html lang="es">

<head>
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
            <h1>Vasafood<span> Eliminar </span></h1>
        </div>
        
        <div class="form-content">
            <form name ="pagina para ingresar lo que sea" method="POST" action="eliminar2.php">
                <div class="form-title">
                    <h3>Eliminar Registro </h3>
                </div>

                <div class="input-group">
                    <input type="text" class="form-input" name="form-rfc" id="Reg-rfc"required>
                    <label class="label" for="Reg-rfc">RFC (Coloque el RFC del cliente para eliminar su registro)</label> 
                </div>

                <div class="input-group">
                    <input type="submit" class="form-input" value="Eliminar"/>
                </div>
			</form>

        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/form.js"></script>
</body>
</html>