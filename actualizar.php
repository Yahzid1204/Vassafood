<html lang="es">

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
            <h1>Vasafood<span> Actualizar </span></h1>
        </div>
        
        <div class="form-content">
            <form name ="pagina para ingresar lo que sea" method="POST" action="actualizar2.php">
                <div class="form-title">
                    <h3>ACTUALIZAR DATOS</h3>
                </div>
				
				<div class="input-group">
                    <input type="text" class="form-input" name="form-rfc" id="Reg-rfc" required>
                    <label class="label" for="Reg-rfc">RFC(el RFC no cambiará)</label> 
					
                </div>

                <div class="input-group">
                    <input type="email" class="form-input" name="form-correo" id="Reg-correo" required>
                    <label class="label" for="Reg-correo">Correo</label> 
					
                </div>
				
                <div class="input-group">
                    <input type="tel" class="form-input" name="form-tel"  pattern="[0-9]+" minlength="10" maxlength="10" id="Reg-Tel"required>
                    <label class="label" for="Tel">Teléfono</label>  
                </div>
				
				 <div class="input-group">
                    <input type="password" class="form-input" name="form-pass" id="Reg-pass"required>
                    <label class="label" for="pass">Contraseña</label> 
                </div>

                <div class="input-group">
                    <input type="password" class="form-input" name="form-rep-pass" id="Reg-rep-pass"required>
                    <label class="label" for="pass-rep">Confirmar contraseña</label> 
                </div>
                <div class="input-group">
                    <input type="submit" class="form-input" value="Regístrate"/>
                </div>
			</form>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/form.js"></script>
</body>
</html>