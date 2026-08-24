
<?php
session_start();
include_once("DBConexion.php");
?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <title>Mensajes de Clientes</title>
	    <link rel="stylesheet" href="inicio.css">
	
	    
	    <style>
	    	
	    	table{

			    width:90%;
			    max-width:1000px;
			    margin:40px auto;
			    border-collapse:separate;
			    border-spacing:0;
			    background:rgba(255,255,255,0.95);
			    backdrop-filter:blur(8px);
			    border-radius:18px;
			    overflow:hidden;
			    box-shadow:0 15px 35px rgba(0,0,0,0.15);

			}

			th{

			    background:#d88989;
			    color:white;
			    padding:18px;
			    font-size:16px;
			    letter-spacing:1px;
			    text-transform:uppercase;
			    border-bottom:2px solid #f2b6d2;

			}


			th, td{

			    border:2px solid white;
			    border-radius:9px;

			}


			td{

			    padding:15px;
			    text-align:center;
			    color:#555;
			    line-height:1.5;
			    vertical-align:middle;
			    border-bottom:1px solid #f1d5e3;

			}


			tr:nth-child(even){

			    background:#fff5fa;

			}


			tr{

			    transition:all 0.3s ease;

			}


			tr:hover{

			    background:#f8d6e7;
			    transform:translateY(-3px);
			    cursor:pointer;

			}


			tr:last-child td{

			    border-bottom:none;

			}
			
			h2{
			    font-size: 45px;
			    text-align: center;
			    color:#d86aa5;
			}

			p{
			    font-size: 18px;
			    text-align: center;
			    color:#555;
			}
			
			
			.modificar {
			    color: #b76e79;
			    text-decoration: none;
			    font-weight: bold;
			}

			.modificar:hover {
			    text-decoration: underline;
			}
			
			.desarrollador{
				padding-top:8%; 
			}
			
			body{
				 background: #f4eee8;
			}


	    </style>
	</head>

	<body>

		<header>Administración - Liora Boutique</header>

	
		<header class="segundario">

		    <img src="img-icon/logo.png" class="logo">

		    <ul>
		        <li>
		            <a href="indexAdmin.php">Inicio</a>
		        </li>

		        <li>
		            <a href="registrosAdmin.php" class="activo">
		                Mensajes de clientes
		            </a>
		        </li>

		        <li>
		            <a href="CerrarSesionAdmin.php">
		                Cerrar sesión
		            </a>
		        </li>
		    </ul>

		</header>

		<section>

		    <h2>Mensajes de Clientes</h2>

		    <p>
		        Consulta los mensajes enviados por los clientes.
		    </p>

		    <br>

		    <?php

		    $Sql = "SELECT id_usuario, nombre, correo, mensaje, estado
		            FROM usuario
		            ORDER BY id_usuario DESC";

		    $Resul = mysqli_query($Conexion, $Sql);

		    if(!$Resul){
		        die("Error en la consulta: " . mysqli_error($Conexion));
		    }

		    ?>

		    <table>

		        <tr>
		            <th>ID</th>
		            <th>Nombre</th>
		            <th>Correo</th>
		            <th>Mensaje</th>
		            <th>Estado</th>
		            <th>Acción</th>
		        </tr>

		        <?php

		        while($Fila = mysqli_fetch_assoc($Resul)){

		        ?>

		        <tr>

		            <td>
		                <?php echo $Fila["id_usuario"]; ?>
		            </td>

		            <td>
		                <?php echo $Fila["nombre"]; ?>
		            </td>

		            <td>
		                <?php echo $Fila["correo"]; ?>
		            </td>

		            <td>
		                <?php echo $Fila["mensaje"]; ?>
		            </td>

		            <td>
		                <?php echo $Fila["estado"]; ?>
		            </td>

		            <td>
		                <a href="modificaradmin.php?id=<?php echo $Fila["id_usuario"]; ?>" class="modificar">
		                    Modificar
		                </a>
		            </td>

		        </tr>

		        <?php

		        }

		        ?>

		    </table>

		</section>

		<footer>

		    <div class="desarrollador">
		        <p>© 2026 Liora Boutique | Área Administrativa</p>
		    </div>

		</footer>

	</body>
</html>

