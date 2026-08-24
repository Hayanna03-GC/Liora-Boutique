<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tienda</title>
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

			        <label>
			            <input type="radio" name="categoria" value="todas" checked>
			            Todas
			        </label>

			        <label>
			            <input type="radio" name="categoria" value="blusas">
			            Blusas (5)
			        </label>

			        <label>
			            <input type="radio" name="categoria" value="tops">
			            Tops (5)
			        </label>

			        <label>
			            <input type="radio" name="categoria" value="bodies">
			            Bodies (5)
			        </label>
			    </div>

			    <div class="grupo">
			        <h4>TALLA</h4>

			        <label>
			            <input type="checkbox" name="talla" value="S">
			            S
			        </label>

			        <label>
			            <input type="checkbox" name="talla" value="M">
			            M
			        </label>

			        <label>
			            <input type="checkbox" name="talla" value="L">
			            L
			        </label>

			        <label>
			            <input type="checkbox" name="talla" value="XL">
			            XL
			        </label>
			    </div>

			    <div class="grupo">
			        <h4>COLOR</h4>

			        <div class="colores">
			            <span class="color blanco" data-color="blanco"></span>
			            <span class="color negro" data-color="negro"></span>
			            <span class="color verde" data-color="verde"></span>
			            <span class="color azul" data-color="azul"></span>
			            <span class="color cafe" data-color="cafe"></span>
			        </div>
			    </div>

			    <div class="grupo">
			        <button type="button" onclick="filtrarProductos()">
			            APLICAR FILTROS
			        </button>
			    </div>

			</aside>
		    <div class="derecha">

			    <div class="titulo">
			        <h2 id="tituloProductos">Todos los productos</h2>
    				<p id="cantidadProductos">15 productos encontrados</p>
			    </div>
			


			    <div class="productos">
			    
			    
			    	  
			        <div class="cuadro" data-categoria="blusas" data-tallas="S M L XL"
                    data-colores="blanco negro cafe">
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

			        <div class="cuadro" data-categoria="tops" data-tallas="S M L XL"
                    data-colores="blanco negro cafe">
			        	<a href="top1.php" class="producto-link">
				            <img class="topM" src="img-icon/topM.png">
				            <h4>Top con hombros Descubierto<br></br>₡11.000</h4><br />
			            </a>

			            <div class="colores2">
			                <span class="color blanco"></span>
			                <span class="color negro"></span>
			                <span class="color cafe"></span>
			            </div>
			        </div>

			        <div class="cuadro" data-categoria="bodies" data-tallas="S M L XL"
                     data-colores="blanco negro cafe">
			        	<a href="body1.php" class="producto-link">
				            <img class="bodyMan" src="img-icon/bodyMan.png">
				            <h4>Body Manga Larga.<br></br>₡6.500</h4><br />
			            </a>

			            <div class="colores2">
			                <span class="color blanco"></span>
			                <span class="color negro"></span>
			                <span class="color cafe"></span>
			            </div>
			        </div>

			        <div class="cuadro" data-categoria="tops" data-tallas="S"
                    data-colores="blanco negro verde">
                    
			        	<a href="top2.php" class="producto-link">
				            <img class="topV" src="img-icon/topV.png">
				            <h4>Top Lencero Satinado.<br></br>₡15.000</h4><br />
			            </a>

			            <div class="colores2">
			                <span class="color blanco"></span>
			                <span class="color negro"></span>
			                <span class="color verde"></span>
			            </div>
			        </div>

			        <div class="cuadro" data-categoria="blusas" data-tallas="M L XL"
                    data-colores="blanco negro cafe">
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
			       
			       <div class="cuadro" data-categoria="bodies" data-tallas="S M L"
                   data-colores="blanco negro cafe">
			       	 <a href="body2.php" class="producto-link">
					     <img src="img-icon/img16.png" class="bodyblan"/>
					     <h4>Body Cuello Alto <br></br>₡11.000</h4><br />
				     </a>
			       	
			       	 <div class="colores2">
			                <span class="color blanco"></span>
			                <span class="color negro"></span>
			                <span class="color cafe"></span>
			        </div>
			      </div>
			        
			        <div class="cuadro" data-categoria="blusas" data-tallas="S M XL"
                    data-colores="blanco negro cafe">
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
			      
			      <div class="cuadro" data-categoria="tops" data-tallas="S M L XL"
                       data-colores="blanco negro cafe">
			      		<a href="top3.php" class="producto-link">
					       	<img src="img-icon/img7.png" class="topC"/>
					       	<h4>Top Cuello Alto<br></br>₡8.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color negro"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
			       <div class="cuadro" data-categoria="bodies" data-tallas="M XL"
                        data-colores="blanco negro cafe">
			       		<a href="body3.php" class="producto-link">
					       	<img src="img-icon/img18.png" class="bodyT"/>
					       	<h4>Body De Tirantes Con Abertura<br></br>₡15.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color negro"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
			       <div class="cuadro" data-categoria="blusas" data-tallas="S M L XL"
                        data-colores="blanco negro cafe">
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
			      
			       <div class="cuadro" data-categoria="tops" data-tallas="S M L XL"
                        data-colores="blanco negro cafe">
			       		<a href="top4.php" class="producto-link">
				       	<img src="img-icon/img17.png" class="basico"/>
				       	<h4>Top Básico<br></br>₡5.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color negro"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
			       <div class="cuadro" data-categoria="blusas" data-tallas="M L XL"
                        data-colores="blanco negro azul">
			       		<a href="blusa5.php" class="producto-link">
					       	<img src="img-icon/img12.png" class="corta"/>
					       	<h4>Blusa Manga Corta Satinada<br></br>₡15.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color azul"></span>
				                <span class="color negro"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
			        <div class="cuadro" data-categoria="tops" data-tallas="S M L XL"
                        data-colores="blanco verde cafe">
			        	<a href="top5.php" class="producto-link">
				       	<img src="img-icon/img9.png" class="topLa"/>
				       	<h4>Top Manga Larga<br></br>₡15.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color verde"></span>
				                <span class="color cafe"></span>
				        </div>
			      </div>
			      
			       <div class="cuadro" data-categoria="bodies" data-tallas="S M"
                    data-colores="negro azul">
			       		<a href="body4.php" class="producto-link">
				       	<img src="img-icon/img19.png" class="encaje"/>
				       	<h4>Body De Encaje<br></br>₡20.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color negro"></span>
				                <span class="color azul"></span>
				        </div>
			      </div>
			      
			      <div class="cuadro" data-categoria="bodies" data-tallas="S M L XL"
                       data-colores="blanco negro verde">
			      		<a href="body5.php" class="producto-link">
				       	<img src="img-icon/img20.png" class="pelo"/>
				       	<h4>Body De Terciopelo<br></br>₡22.000</h4><br />
				       	</a>
				       	
				       	 <div class="colores2">
				                <span class="color blanco"></span>
				                <span class="color negro"></span>
				                <span class="color verde"></span>
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
	
	<script>

		 function filtrarProductos() {

        // Categoría seleccionada
        let categoriaSeleccionada =
            document.querySelector('input[name="categoria"]:checked').value;

        // Tallas seleccionadas
        let tallasSeleccionadas = [];

        document.querySelectorAll('input[name="talla"]:checked')
            .forEach(function(talla) {
                tallasSeleccionadas.push(talla.value);
            });

        // Color seleccionado
        let colorSeleccionado = "";

        let colorActivo = document.querySelector('.colores .seleccionado');

        if (colorActivo) {
            colorSeleccionado = colorActivo.dataset.color;
        }

        // Contar productos que se muestran
        let cantidad = 0;

        // Recorrer productos
        document.querySelectorAll('.cuadro').forEach(function(producto) {

            let categoria = producto.dataset.categoria;
            let tallas = producto.dataset.tallas.split(" ");
            let colores = producto.dataset.colores.split(" ");

            // Revisar categoría
            let categoriaCorrecta =
                categoriaSeleccionada === "todas" ||
                categoria === categoriaSeleccionada;

            // Revisar talla
            let tallaCorrecta =
                tallasSeleccionadas.length === 0 ||
                tallasSeleccionadas.some(function(talla) {
                    return tallas.includes(talla);
                });

            // Revisar color
            let colorCorrecto =
                colorSeleccionado === "" ||
                colores.includes(colorSeleccionado);

            // Mostrar u ocultar producto
            if (categoriaCorrecta && tallaCorrecta && colorCorrecto) {

                producto.style.display = "";
                cantidad++;

            } else {

                producto.style.display = "none";

            }

        });

        // Cambiar título según categoría
        let titulo = document.getElementById("tituloProductos");

        if (categoriaSeleccionada === "todas") {

            titulo.textContent = "Todos los productos";

        } else if (categoriaSeleccionada === "blusas") {

            titulo.textContent = "Blusas";

        } else if (categoriaSeleccionada === "tops") {

            titulo.textContent = "Tops";

        } else if (categoriaSeleccionada === "bodies") {

            titulo.textContent = "Bodies";

        }

        // Cambiar cantidad de productos
        let cantidadProductos =
            document.getElementById("cantidadProductos");

        cantidadProductos.textContent =
            cantidad +
            (cantidad === 1
                ? " producto encontrado"
                : " productos encontrados");

		    }


		    // Seleccionar color
		    document.querySelectorAll('.colores .color').forEach(function(color) {

		        color.addEventListener('click', function() {

		            document.querySelectorAll('.colores .color')
		                .forEach(function(c) {
		                    c.classList.remove('seleccionado');
		                });

		            this.classList.add('seleccionado');

		        });

		    });

		</script>
	</body>
</html>