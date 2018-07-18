
<?php 
	
	$servidor='localhost'; 
	$usuario='root';
	$clave='12345678';
	$bd='datos';

	$conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
	$insertar ='INSERT usuario SET 
		nombre="'.$_POST['nombre'].'"';	
	
	
	mysqli_query($conexion,$insertar);

	header('location: index.php')			

 ?>

