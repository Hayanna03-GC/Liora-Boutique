
<?php
	include_once("DBConexion.php");

	$NomCompleto = "";
	$Email = "";
	$PwdUsuario = "";
	$PwdConfirmar="";
	$Resp = FALSE;
	$mensajeVentana = "";

	if(isset($_POST["NomCompleto"])){

	    $NomCompleto = $_POST["NomCompleto"];
	    $Email = $_POST["Email"];
	    $PwdUsuario = $_POST["PwdUsuario"];
	    $PwdConfirmar = $_POST["PwdConfirmar"];

	    $Sql = "INSERT INTO registro (NomCompleto, Email, PwdUsuario, PwdConfirmar)
	            VALUES ('$NomCompleto', '$Email', '$PwdUsuario', '$PwdConfirmar')";

	    $Resp = @mysqli_query($Conexion, $Sql);

	    if($Resp){
	        $mensajeVentana = "Se Registró Correctamente";
	    }
	    else{
	        $mensajeVentana = "Error al enviar el mensaje";
	    }
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<link rel="stylesheet" href="informacion.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
		<style>
		.iconos-derecha {
	    		display: flex;
	    		align-items: center;
	    		gap: 15px;
	    	}


	    	.btn-bolsa {
	    		display: flex;
	    		align-items: center;
	    		justify-content: center;
	    		width: 40px;
	    		height: 40px;
	    		color: #c8c8c8;
	    		text-decoration: none;
	    		font-size: 22px;
	    		transition: color 0.3s;
	    	}


	    	.btn-bolsa:hover {
	    		color: #888;
	    	}


	    	
	    	.perfil {
	    		position: relative;
	    		display: flex;
	    		align-items: center;
	    	}


	    	.btn-perfil {
	    		background: none;
	    		border: none;
	    		padding: 0;
	    		margin: 0;
	    		width: 40px;
	    		height: 40px;
	    		display: flex;
	    		justify-content: center;
	    		align-items: center;
	    		cursor: pointer;
	    		text-decoration: none;
	    	}


	    	.icono-persona {
	    		display: block;
	    		width: 22px;
	    		height: 22px;
	    		position: relative;
	    	}


	    	.icono-persona::before {
	    		content: "";
	    		position: absolute;
	    		width: 9px;
	    		height: 9px;
	    		background: #c8c8c8;
	    		border-radius: 50%;
	    		top: 1px;
	    		left: 7px;
	    	}


	    	.icono-persona::after {
	    		content: "";
	    		position: absolute;
	    		width: 17px;
	    		height: 11px;
	    		background: #c8c8c8;
	    		border-radius: 9px;
	    		bottom: 1px;
	    		left: 3px;
	    	}


	    	
	    	.btn-perfil:hover .icono-persona::before,
	    	.btn-perfil:hover .icono-persona::after {
	    		background: #888;
	    	}


	    	.menu-perfil {
	    		display: none;
	    		position: absolute;
	    		right: 0;
	    		top: 45px;
	    		width: 180px;
	    		background-color: white;
	    		border: 1px solid #ddd;
	    		box-shadow: 0 3px 8px rgba(0,0,0,0.2);
	    		z-index: 1000;
	    	}


	    	.nombre-usuario {
	    		padding: 15px;
	    		font-weight: bold;
	    		border-bottom: 1px solid #ddd;
	    		color: black;
	    	}


	    	.menu-perfil a {
	    		display: block;
	    		padding: 12px 15px;
	    		color: black;
	    		text-decoration: none;
	    	}


	    	.menu-perfil a:hover {
	    		background-color: #f2f2f2;
	    	}
		.ventana-fondo{
			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			display:flex;
			justify-content:center;
			align-items:center;
			background:rgba(0,0,0,0.5);
			z-index:9999;
		}

		.ventana-mensaje{
			width:400px;
			padding:30px;
			background:white;
			text-align:center;
			border-radius:10px;
			box-shadow:0 5px 20px rgba(0,0,0,0.3);
		}

		.icono-exito{
			font-size:50px;
			color:#d86aa5;
			margin-bottom:10px;
		}

		.ventana-mensaje h2{
			color:#d86aa5;
		}

		.ventana-mensaje p{
			color:#555;
		}

		.ventana-mensaje button{
			width:150px;
			padding:12px;
			margin-top:15px;
			background:#ff80d9;
			color:white;
			border:none;
			border-radius:5px;
			font-weight:bold;
			cursor:pointer;
		}

		.ventana-mensaje button:hover{
			background:#d86aa5;
		}
	</style>
	</head>
	<body>
		<?php if($mensajeVentana != ""){ ?>
		<div class="ventana-fondo" id="ventanaMensaje">

		    <div class="ventana-mensaje">

		        <div class="icono-exito">✓</div>

		        <h2>¡Registro Exitoso!</h2>

		        <p><?php echo($mensajeVentana); ?></p>

		        <button type="button" onclick="cerrarVentana()">ACEPTAR</button>

		    </div>

		</div>

		<?php } ?>
		
		<header>Envio a Todo Costa Rica</header>
	    <br>
	    <br>

	    <header class="segundario">
	        <img src="img-icon/logo.png" class="logo">
		        <ul>
			        <li><a href="index.php" >Inicio</a></li>
			        <li><a href="tienda.php">Tienda</a></li>
			        <li><a href="nosotros.php">Nosotros</a></li>
			        <li><a href="contacto.php" >Contacto</a></li>
		        </ul>
		        
		        <div class="iconos-derecha">
		        
		    	<a href="carrito.php" class="btn-bolsa" title="Bolsa de compras">
		    		<i class="bi bi-bag"></i>
		    	</a>

		    	<div class="perfil">

		    		<?php

		    		if(isset($_SESSION["NomCompleto"])){

		    		?>

		    		<button class="btn-perfil" onclick="mostrarMenu()" title="Mi perfil">

		    			<span class="icono-persona"></span>

		    		</button>


		    		<div id="menuPerfil" class="menu-perfil">

		    			<div class="nombre-usuario">
		    				<?php echo $_SESSION["NomCompleto"]; ?>
		    			</div>


		    			<a href="CerrarSesion.php">
		    				<i class="bi bi-box-arrow-right"></i>
		    					Cerrar sesión
		    			</a>

		    		</div>


		    		<?php

		    		} else {

		    		?>


		    			<a href="IniciarSesion.php"
		    			   class="btn-perfil"
		    			   title="Iniciar sesión">

		    				<span class="icono-persona"></span>

		    			</a>


		    		<?php

		    		}

		    		?>

		    	</div>

		    </div>
		        

	    </header>

		    <div class="form-registro">

		        <h2>CREAR CUENTA</h2>

		        <p>
		            Regístrate en nuestra tienda y disfruta de una experiencia de compra
		            más personalizada.
		        </p>
		        
		        <br />

		        <form action="Registro.php" method="POST">

				    <label>Nombre completo</label><br>
				    <input type="text" name="NomCompleto" placeholder="Ingrese su nombre" required><br>

				    <label>Correo electrónico</label><br>
				    <input type="email" name="Email" placeholder="Ingrese su correo" required><br>

				    <label>Contraseña</label><br>
				    <input type="password" name="PwdUsuario" placeholder="Ingrese una contraseña" required><br>

				    <label>Confirmar contraseña</label><br>
				    <input type="password" name="PwdConfirmar" placeholder="Repita su contraseña" required><br>

				    <button type="submit">Registrarse</button>

				</form>

		    </div>

		<footer>
		
			<h4 class="informacion">INFORMACIÓN</h4>
			
			<div class="footer">
				<a href="faq.php">FAQ</a>
				<a href="guia.php">Guía de tallas</a>
				<a href="envios.php">Envíos</a><br />
				<a href="privacidad.php">Política de Privacidad</a>
				<a href="terminos.php">Términos y Condiciones</a>
			</div>	
			
			<div class="desarrollador">
			    <p>© 2026 Liora Boutique | Desarrollado por Hayanna Gallo</p>
			</div>
	</footer>
	
	 <script>
		
		function cerrarVentana() {
		window.location.href = "IniciarSesion.php";
		}
	</script>

	</body>
</html>