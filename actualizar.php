<?php 
	
	$servidor='localhost'; 
	$usuario='root';
	$clave='12345678';
	$bd='datos';

	$conexion=mysqli_connect($servidor,$usuario,$clave,$bd);

	$actulizar='UPDATE `usuario` SET `nombre`="' . $_POST['nombre'] . '" WHERE id ="' . $_POST['id'] .'"';

	mysqli_query($conexion,$actulizar);


	header('Location: index.php');
	
	
?>

