<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio Sesión Administrador</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
		<link rel="stylesheet" href="informacion.css">

		 <style>
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

		<header>Envio a Todo Costa Rica</header>

	   <header class="segundario">

        <img src="img-icon/logo.png" class="logo">

	    </header>


	    <div class="form-registro">

	        <h2>Inicio Sesión Administrador</h2>

	        <p>
	            Ingresa al sitio administrativo.
	        </p>

	        <br>

	        <form action="ValidarAdmin.php" method="POST">

	            <label>Correo electrónico</label><br>

	            <input
	                type="email"
	                name="txtEmail"
	                placeholder="Ingrese su correo"
	                required
	            >

	            <br>

	            <label>Contraseña</label><br>

	            <input
	                type="password"
	                name="txtPwd"
	                placeholder="Ingrese su contraseña"
	                required
	            >

	            <br>

	            <button type="submit">
	                Iniciar Sesión
	            </button>

	        </form>

	    </div>


	    <footer>

	        <div class="desarrollador">

	            <p>
	                © 2026 Liora Boutique | Área Administrativa
	            </p>

	        </div>

	    </footer>

	</body>
</html>