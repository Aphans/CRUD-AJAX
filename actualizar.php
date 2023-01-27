<?php
	// incluimos la conexión
	include "dbcon.php";

	// Variables para editar la tabla por id
	$id = $_POST['editar_id'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$pais = $_POST['pais'];
	$password = md5($_POST['password']);
	
	
	// SQL para actualizar un registro	
	$query = "UPDATE clientes SET nombre='{$nombre}',email='{$email}',pais='{$pais}', password='{$password}' WHERE id='{$id}'";
	if ($con->query($query)) {
		echo 1;
	}else{
		echo 0;
	}
?>