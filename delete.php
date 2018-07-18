<?php 

	$servidor='localhost';
	$usuario='root';
	$clave='12345678';
	$bd='datos';

	$conexion= mysqli_connect($servidor,$usuario,$clave,$bd);

	$eliminar='DELETE FROM `usuario` WHERE `id`='. $_GET['identificacion'];

	mysqli_query($conexion, $eliminar);

	header('location:index.php'); 

?>
