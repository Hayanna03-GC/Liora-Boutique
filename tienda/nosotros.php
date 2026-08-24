<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nosotros</title>
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
	
		<header>Envio a Todo Costa Rica</header>
	    <br>
	    <br>

	    <header class="segundario">
	        <img src="img-icon/logo.png" class="logo">
		        <ul>
			        <li><a href="index.php" >Inicio</a></li>
			        <li><a href="tienda.php">Tienda</a></li>
			        <li><a href="nosotros.php" class="activo">Nosotros</a></li>
			        <li><a href="contacto.php">Contacto</a></li>
			       
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
	    
		<div class="cap1">

		    <div class="cap2">

		        <h2>SOBRE NOSOTROS</h2>

		        <p>
		            Somos una tienda de ropa femenina creada con la idea de brindar
		            prendas modernas, elegantes y versátiles para mujeres que buscan
		            sentirse cómodas y seguras con su estilo.
		        </p>

		        <p>
		            Nos dedicamos a seleccionar cuidadosamente cada prenda, buscando
		            ofrecer diseños de calidad que se adapten a diferentes gustos,
		            ocasiones y personalidades. Creemos que la moda es una forma de
		            expresión que permite a cada mujer mostrar quién es.
		        </p>

		    </div>


		    <div class="cap3">

		        <h3>NUESTRA MISIÓN</h3>

		        <p>
		            Ofrecer prendas de calidad y diseños actuales, brindando una
		            experiencia de compra agradable donde cada cliente pueda encontrar
		            ropa que represente su estilo y personalidad.
		        </p>

		    </div>


		    <div class="cap4">

		        <h3>NUESTRA VISIÓN</h3>

		        <p>
		            Ser una tienda reconocida por nuestro compromiso con la calidad,
		            el estilo y la satisfacción de nuestras clientas, destacándonos
		            por ofrecer moda accesible y auténtica.
		        </p>

		    </div>


		    <div class="cap5">

		        <h3>NUESTROS VALORES</h3>

		        <p>
		            Calidad, compromiso, confianza y dedicación son los valores que
		            nos guían para ofrecer siempre lo mejor a nuestras clientes.
		        </p>

		    </div>

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
	</body>
</html>