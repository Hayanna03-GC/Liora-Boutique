<?php
include("DBConexion.php");

if (!isset($_GET['id'])) {
    die("No se encontró el mensaje.");
}

$id = $_GET['id'];


$sql = "SELECT * FROM usuario WHERE id_usuario = ?";
$stmt = $Conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$mensaje = $resultado->fetch_assoc();

if (!$mensaje) {
    die("El mensaje no existe.");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $estado = $_POST['estado'];

    $sql = "UPDATE usuario SET estado = ? WHERE id_usuario = ?";
    $stmt = $Conexion->prepare($sql);
    $stmt->bind_param("si", $estado, $id);

    if ($stmt->execute()) {
        header("Location: registrosAdmin.php");
        exit();
    } else {
        echo "Error al actualizar el estado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

	<head>
	    <meta charset="UTF-8">
	    <title>Modificar mensaje</title>
	    <link rel="stylesheet" href="modificaradmin.css">
	    <link rel="stylesheet" href="informacion.css">
	    
	  
	</head>

	<body>
	
		<header>Administración - Liora Boutique</header>

		<br>
		<br>

		<header class="segundario">

		    <img src="img-icon/logo.png" class="logo">

		    <ul>

		        <li>
		            <a href="indexAdmin.php">Inicio</a>
		        </li>

		        <li>
		            <a href="registrosAdmin.php">
		                Registros
		            </a>
		        </li>

		        <li>
		            <a href="CerrarSesionAdmin.php">
		                Cerrar sesión
		            </a>
		        </li>

		    </ul>

		</header>

	   <div class="form-registro">

		    <h2>Modificar mensaje</h2>

		    <p>
		        <strong>Nombre:</strong>
		        <?php echo htmlspecialchars($mensaje['nombre']); ?>
		    </p>

		    <p>
		        <strong>Correo:</strong>
		        <?php echo htmlspecialchars($mensaje['correo']); ?>
		    </p>

		    <p>
		        <strong>Mensaje:</strong>
		        <?php echo htmlspecialchars($mensaje['mensaje']); ?>
		    </p>

		    <form method="POST">

		        <label for="estado">Estado:</label>

		        <select name="estado" id="estado">

		            <option value="pendiente"
		                <?php if ($mensaje['estado'] == 'pendiente') echo 'selected'; ?>>
		                Pendiente
		            </option>

		            <option value="respondido"
		                <?php if ($mensaje['estado'] == 'respondido') echo 'selected'; ?>>
		                Respondido
		            </option>

		        </select>

		        <button type="submit">
		            Guardar cambios
		        </button>

		    </form>

		</div>

	</body>

</html>