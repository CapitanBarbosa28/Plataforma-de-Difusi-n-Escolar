<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudMaestro.php";
	$obj= new crudMaestro();

	$datos=array(
		$_POST['nombreU'],
		$_POST['domicilioU'],
		$_POST['telefonoU'],
		$_POST['correoU'],
		$_POST['fecha_ingresoU'],
		$_POST['grado_estudiosU'],
		$_POST['id_grupoU'],
		$_POST['idmaestro'],
		$_POST['contraseñaU']
				);

	echo $obj->actualizarMaestro($datos);

 ?>