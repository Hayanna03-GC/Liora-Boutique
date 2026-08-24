<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blusas</title>
		<link rel="stylesheet" href="tienda.css">
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
   

    <header class="segundario">
        <img src="img-icon/logo.png" class="logo">
	        <ul>
		        <li><a href="index.php">Inicio</a></li>
		        <li><a href="tienda.php" class="activo">Tienda</a></li>
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
    
	 	 
	 	<div class="contenedor">

		    <aside class="filtros">

		        <h3>FILTRAR POR</h3>

		        <div class="grupo">
		            <h4>CATEGORÍA</h4>

		            <label><input type="radio" name="categoria" checked> Todas</label>
		            <label><input type="radio" name="categoria"> Blusas (5)</label>
		            <label><input type="radio" name="categoria"> Tops (5)</label>
		            <label><input type="radio" name="categoria"> Bodies (5)</label>
		        </div>

		        <div class="grupo">
		            <h4>TALLA</h4>

		            <label><input type="checkbox"> XS</label>
		            <label><input type="checkbox"> S</label>
		            <label><input type="checkbox"> M</label>
		            <label><input type="checkbox"> L</label>
		            <label><input type="checkbox"> XL</label>
		        </div>

		        <div class="grupo">
		            <h4>COLOR</h4>

		            <div class="colores">
		                <span class="color rosa"></span>
		                <span class="color beige"></span>
		                <span class="color blanco"></span>
		                <span class="color negro"></span>
		                <span class="color verde"></span>
		                <span class="color azul"></span>
		                <span class="color cafe"></span>
		            </div>
		        </div>

		        <div class="grupo">
		            <button>APLICAR FILTROS</button>
		        </div>

		    </aside>
		    
		    <div class="derecha">

			    <div class="titulo">
			        <h2>Blusas</h2>
			        <p>5 productos encontrados</p>
			    </div>
			


			    <div class="productos"> 
			    
			    
			    	  
			       <div class="cuadro">

					    <a href="blusa1.php" class="producto-link">
					        <img src="img-icon/blusa.raso.png" class="blusa-raso">
					        <h4>Blusa de raso.<br></br>₡8.000</h4><br />
					    </a>

					    <div class="colores2">
					        <span class="color blanco"></span>
					        <span class="color negro"></span>
					        <span class="color cafe"></span>
					    </div>

				   </div>


			        <div class="cuadro">
			            <a href="blusa2.php" class="producto-link">
				            <img class="blusaN" src="img-icon/blusaN.png">
				            <h4>Blusa Escote V<br></br>₡20.000</h4><br />
			            </a>

			            <div class="colores2">
			                <span class="color blanco"></span>
			                <span class="color negro"></span>
			                <span class="color cafe"></span>
			            </div>
			       </div>
			       
			        
			        <div class="cuadro">
				       	<a href="blusa3.php" class="producto-link">
					       	<img src="img-icon/img13.png" class="blusaEs"/>
					       	<h4>Blusa Estampada<br></br>₡10.000</h4><br />
				       	</a>
				       	
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color negro"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
			
			      
			       <div class="cuadro">
				      <a href="blusa4.php" class="producto-link">
				       	<img src="img-icon/img11.png" class="hombrera"/>
				       	<h4>Blusa Manga Larga y Hombreras<br></br>₡7.000</h4><br />
				       </a>
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color negro"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
			      
			       <div class="cuadro">
				       <a href="blusa5.php" class="producto-link">
					       	<img src="img-icon/img12.png" class="corta"/>
					       	<h4>Blusa Manga Corta Satinada<br></br>₡15.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color negro"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
		     </div>
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