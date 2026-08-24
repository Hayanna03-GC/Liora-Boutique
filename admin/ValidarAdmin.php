<?php
	session_start();
	include_once("DBConexion.php");

	$txtEmail = "";
	$txtPwd = "";

	if(isset($_POST["txtEmail"])){
		$txtEmail = $_POST["txtEmail"];
	}

	if(isset($_POST["txtPwd"])){
		$txtPwd = $_POST["txtPwd"];
	}

	$Sql = "SELECT NomCompleto, Email, rol
			FROM registro
			WHERE Email = '$txtEmail'
			AND PwdUsuario = '$txtPwd'
			AND rol = 'admin'";

	$Resul = mysqli_query($Conexion, $Sql);

	if(!$Resul){
		die("Error en la consulta: " . mysqli_error($Conexion));
	}

	$Fila = mysqli_fetch_array($Resul, MYSQLI_ASSOC);

	if($Fila){

		$_SESSION["NomCompleto"] = $Fila["NomCompleto"];
		$_SESSION["Email"] = $Fila["Email"];
		$_SESSION["rol"] = $Fila["rol"];

		header("Location: indexAdmin.php");
		exit();

	}
	else{

		header("Location: LoginAdmin.php");
		exit();

	}
?>