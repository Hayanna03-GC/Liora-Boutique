<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="productos.css">
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
	    	
	    	.opcion-color input,
			.opcion-talla input {
			    display: none;
			}

			.opcion-color {
			    display: inline-block;
			    cursor: pointer;
			}

			.opcion-color .color {
			    width: 18px;
			    height: 18px;
			    display: inline-block;
			    border-radius: 50%;
			    border: 2px solid #ddd;
			}

			.opcion-color input:checked + .color {
			    border: 3px solid #d86aa5;
			    transform: scale(1.15);
			}

			.opcion-talla {
			    display: inline-block;
			    cursor: pointer;
			}

			.opcion-talla span {
			    display: inline-block;
			    padding: 10px 15px;
			    border: 1px solid #ddd;
			    background: white;
			    border-radius: 5px;
			}

			.opcion-talla input:checked + span {
			    background: #ff80d9;
			    color: white;
			    border-color: #ff80d9
			}

	    </style>
		
	</head>
	<body>
		<header></header>
   
	    <header class="segundario">
	        <img src="img-icon/logo.png" class="logo">
		        <ul>
			        <li><a href="index.php">Inicio</a></li>
			        <li><a href="tienda.html" class="activo">Tienda</a></li>
			        <li><a href="nosotros.html">Nosotros</a></li>
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
	    
	     <section class="producto">
	    
	    <div>
	    		<img src="img-icon/CortaN.png" class="negra"/>
	    		<img src="img-icon/CortaC.png" class="bcafe"/>
	    </div>
	    <div class="imagen-producto">
	    	 <img src="img-icon/blusa-cele.png" class="corta"/>
	    </div>
	    
	    <div class="info">
	            <h3>Blusa Manga Corta Satinada<br></br>₡7.000</h3>

	            <p>
	            Blusa fluida de cuello alto con pliegues tipo<br /> 
	            cascada y detalle de broche, confeccionada<br /> 
	            en tela satinada de acabado sedoso.
	            </p>
	            
	             <h4>Tipo de tela</h4>
		        <p>Satinada.</p>
		        
		       <form action="carrito.php" method="POST">

			    <input type="hidden" name="accion" value="agregar">

			    <input type="hidden" name="producto" value="Blusa Manga Corta Satinada">

			    <input type="hidden" name="precio" value="7000">

			    <input type="hidden" name="imagen" value="img-icon/blusa-cele.png">


			    <h4>Colores disponibles</h4>

			    <div class="colores">

			        <label class="opcion-color">
			            <input type="radio" name="color" value="azul" required>
			            <span class="color azul"></span>
			        </label>

			        <label class="opcion-color">
			            <input type="radio" name="color" value="negro">
			            <span class="color negro"></span>
			        </label>

			        <label class="opcion-color">
			            <input type="radio" name="color" value="cafe">
			            <span class="color cafe"></span>
			        </label>

			    </div>


			    <h4>Tallas disponibles</h4>

			    <div class="tallas">

			        <label class="opcion-talla">
			            <input type="radio" name="talla" value="M" required>
			            <span>M</span>
			        </label>

			        <label class="opcion-talla">
			            <input type="radio" name="talla" value="L">
			            <span>L</span>
			        </label>

			        <label class="opcion-talla">
			            <input type="radio" name="talla" value="XL">
			            <span>XL</span>
			        </label>

			    </div>

			    <br>

			    <button type="submit" class="compra">
			        AGREGAR AL CARRITO
			    </button>

			</form>
	     </div>
	   </section>
	      
		
		
		 <footer>
		
			<h4 class="informacion">INFORMACIÓN</h4>
			
			<div class="footer">
				<a href="faq.html">FAQ</a>
				<a href="guia.html">Guía de tallas</a>
				<a href="envios.html">Envíos</a><br />
				<a href="privacidad.html">Política de Privacidad</a>
				<a href="terminos.html">Términos y Condiciones</a>
			</div>	
			
			<div class="desarrollador">
			    <p>© 2026 Liora Boutique | Desarrollado por Hayanna Gallo</p>
			</div>
		</footer>
	</body>
</html>