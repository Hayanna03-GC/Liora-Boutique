
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LIORA BOUTIQUE - Administración</title>

	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	    <link rel="stylesheet" href="informacion.css">

	    <style>
	    	.menu-admin {
	    		width: 80%;
	    		margin: 60px auto;
	    		text-align: center;
	    	}

	    	.menu-admin h2 {
	    		color: #d86aa5;
	    		font-size: 32px;
	    		margin-bottom: 15px;
	    	}

	    	.menu-admin p {
	    		color: #555;
	    		margin-bottom: 40px;
	    	}

	    	.opciones-admin {
	    		display: flex;
	    		justify-content: center;
	    		gap: 30px;
	    		flex-wrap: wrap;
	    	}

	    	.opcion-admin {
	    		width: 250px;
	    		padding: 35px 20px;
	    		background: white;
	    		box-shadow: 0 10px 25px rgba(0,0,0,.12);
	    		text-decoration: none;
	    		color: #555;
	    		transition: 0.3s;
	    	}

	    	.opcion-admin:hover {
	    		transform: translateY(-5px);
	    		box-shadow: 0 15px 30px rgba(0,0,0,.18);
	    	}

	    	.opcion-admin i {
	    		font-size: 45px;
	    		color: #d86aa5;
	    		display: block;
	    		margin-bottom: 15px;
	    	}

	    	.opcion-admin h3 {
	    		color: #d86aa5;
	    		margin-bottom: 10px;
	    	}

	    	.opcion-admin p {
	    		margin: 0;
	    		color: #555;
	    	}
	    	
	    	.desarrollador{
	    		padding-top: 8%; 
	    	}
	    	
	    	body{
				 background: #f4eee8;
			}
	    </style>
	</head>

	<body>

		<header>Administración - Liora Boutique</header>



	    <header class="segundario">

	        <img src="../img-icon/logo.png" class="logo">

	        <ul>
		        <li>
		        	<a href="indexAdmin.php" class="activo">Administración</a>
		        </li>

		        <li>
		        	<a href="CerrarSesionAdmin.php">Cerrar sesión</a>
		        </li>
	        </ul>

	    </header>


	    <section class="menu-admin">

	    	<h2>ADMINISTRACIÓN</h2>

	    	<p>
	    		Bienvenido al área administrativa de Liora Boutique.
	    	</p>


	    	<div class="opciones-admin">

	    		<a href="registrosAdmin.php" class="opcion-admin">

	    			<i class="bi bi-people"></i>

	    			<h3>REGISTROS</h3>

	    			<p>
	    				Consultar los registros realizados por los clientes.
	    			</p>

	    		</a>

	    	</div>

	    </section>


	    <footer>


			<div class="desarrollador">
			    <p>© 2026 Liora Boutique | Desarrollado por Hayanna Gallo</p>
			</div>

		</footer>

	</body>
</html>

