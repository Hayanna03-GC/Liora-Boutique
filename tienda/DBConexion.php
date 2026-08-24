<?php
	$Conexion = @mysqli_connect("localhost", "root", "", "tienda");
	if(@mysqli_connect_errno()>0){
		echo("<h1>Error de Conexión ".@mysqli_connect_errno()."</h1");
	}
?>