<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FAQ</title>
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

	    </style>
	</head>
	<body>
	
	
		<header></header>
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
		<div class="faq">

		    <h2>PREGUNTAS FRECUENTES</h2>

		    <div class="pregunta">
		        <h3>¿Cómo puedo comprar un producto?</h3>
		        <p>
		            Selecciona la prenda que deseas, elige la talla disponible y presiona
		            el botón "Comprar" para continuar con el proceso de compra.
		        </p>
		    </div>

		    <div class="pregunta">
		        <h3>¿Qué métodos de pago aceptan?</h3>
		        <p>
		            Aceptamos pagos en línea únicamente con tarjeta de crédito o débito.
		        </p>
		    </div>

		    <div class="pregunta">
		        <h3>¿Qué tallas tienen disponibles?</h3>
		        <p>
		            Cada prenda incluye la información de tallas disponibles. Además,
			        puedes consultar nuestra guía de tallas para elegir la opción que
			        mejor se adapte a ti.
		        </p>
		    </div>

		    <div class="pregunta">
		        <h3>¿Cómo puedo saber el precio de un producto?</h3>
		        <p>
		            Cada prenda cuenta con su precio indicado dentro de la descripción
		            del producto.
		        </p>
		    </div>

		    <div class="pregunta">
		        <h3>¿Realizan envíos?</h3>
		        <p>
		            Sí, realizamos envíos a todo Costa Rica. El tiempo de entrega dependerá
		            de la ubicación del cliente.
		        </p>
		    </div>

		</div>
		
		<footer>
		
		<h4 class="informacion">INFORMACIÓN</h4>
		
		<div class="footer">
			<a href="faq.php">FAQ</a>
			<a href="guia.php">Guía de tallas</a>
			<a href="envios.php">Envios</a><br />
			<a href="privacidad.php">Política de Privacidad</a>
			<a href="terminos.php">Terminos y Condiciones</a>
		</div>	
		
	</footer>
	</body>
</html>