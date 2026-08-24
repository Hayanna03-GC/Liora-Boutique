<?php
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LIORA BOUTIQUE</title>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	    <link rel="stylesheet" href="inicio.css">
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
			        <li><a href="index.php" class="activo" >Inicio</a></li>
			        <li><a href="tienda.php">Tienda</a></li>
			        <li><a href="nosotros.php">Nosotros</a></li>
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

    <section class="hero">

        <div>
            <p>NUEVA COLECCIÓN</p>
            <h1>PRIMAVERA / VERANO</h1>
            <P>Descubre prendas que te acompañan<br> en cada momento</P>
        </div>
        <a href="tienda.php" class="compra">COMPRAR AHORA</a>
        

    </section>

    <section>
        <h3 class="categorias">CATEGORIAS</h3>
		
		<div class="contenedores">
	        <div class="contenedor1">
	            <h3 class="cate">BLUSAS</h3>
	            <a  href="blusas.php" class="linksec">Ver colección</a>
	            

	        </div>

	        <div class="contenedor2">
	            <h3  class="cate">TOPS</h3>
	            <a href="tops.php" class="linksec">Ver colección</a>

	        </div>

	        <div class="contenedor3">
	            <h3  class="cate">BODIES</h3>
	            <a href="bodies.php" class="linksec">Ver colección</a>

	        </div>
		</div>


    </section>
	<br />
    <section>
        <h3>PRODUCTOS DESTACADOS</h3>
        
        <div class="destacados">
	        <div class="cuadro1">
	        	<img src="img-icon/blusa.raso.png" class="blusa-raso"/>
	            <h4>Blusa de raso.<br></br>₡8.000</h4><br />
	            <div class="colores">
				    <span class="color blanco"></span>
				    <span class="color negro"></span>
				    <span class="color cafe"></span>
				</div>
	        </div>
	        

	        <div class="cuadro2">
	        	<img class="topM" src="img-icon/topM.png"/>
	            <h4>Top con hombros Descubierto<br></br>
	            	₡11.000
	            </h4><br />
	            <div class="colores">
				    <span class="color blanco"></span>
				    <span class="color negro"></span>
				    <span class="color cafe"></span>
				</div>
	        </div>

	        <div class="cuadro3">
	        	<img class="bodyMan" src="img-icon/bodyMan.png"/>
	            <h4>Body Manga Larga.<br><br>₡6.500</h4><br />
	             <div class="colores">
				    <span class="color blanco"></span>
				    <span class="color negro"></span>
				    <span class="color cafe"></span>
				</div>
	            
	        </div>

	        <div class="cuadro4">
	        	<img class="topV" src="img-icon/topV.png"/>
	            <h4>Top Lencero Satinado.<br><br>₡15.000</h4><br />
	            <div class="colores">
				    <span class="color blanco"></span>
				    <span class="color negro"></span>
				    <span class="color cafe"></span>
				</div>
	        </div>

	        <div class="cuadro5">
	        	<img class="blusaN" src="img-icon/blusaN.png"/>
	            <h4>Blusa Escote V<br><br>₡20.000</h4>
	            <div class="colores">
				    <span class="color blanco"></span>
				    <span class="color negro"></span>
				    <span class="color cafe"></span>
				</div>
	        </div>
		</div>

    </section>
    <br>
    
   <a href="tienda.php" class="btn">VER TODOS LOS PRODUCTOS</a>
    
    
	<br />
    <section class="nosotros">
	   <div class="cuadro-nosotros">

	        <div class="imagen">
	            <img src="img-icon/perchero.jpg" class="perchero">
		    </div>

	        <div class="info">
	            <h3>SOBRE NOSOTROS</h3>

	            <p>
	                Somos una tienda de ropa femenina enfocada en ofrecer prendas de
	                calidad, con diseño moderno y versátil para cada ocasión.
	                Nuestro objetivo es que cada mujer se sienta segura, cómoda y
	                única con cada look.
	            </p>

	            <a href="nosotros.php" class="conoce">CONOCE MÁS</a>
	        </div>

	        <div class="beneficios">

	            <div class="beneficio">
	                <h4>ENVÍO A TODO COSTA RICA</h4>
	                <p>Recibe siempre y rápido.</p>
	            </div>

	            <div class="beneficio">
	                <h4>PAGO 100% SEGURO</h4>
	                <p>Compra con confianza.</p>
	            </div>

	            <div class="beneficio">
	                <h4>ATENCIÓN PERSONALIZADA</h4>
	                <p>Estamos para ayudarte.</p>
	            </div>

	        </div>

    	</div>
	</section>
	
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
	function mostrarMenu() {
		var menu = document.getElementById("menuPerfil");

		if(menu.style.display === "block"){
			menu.style.display = "none";
		}
		else{
			menu.style.display = "block";
		}
	 }
	</script>
	</body>
</html>