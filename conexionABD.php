<?php 
	
	
	
	function conectar($user, $pass){
		$host = "localhost";
		//$user = "tomas";
		//$pass = "tomas";
		$bd = "bdtrabajo";
	
		$conexion = mysqli_connect($host, $user, $pass, $bd);
		
		// Check connection
		if ( ! $conexion ) {
			echo "<script> alert('Este usuario no existe o contraseña incorrecta'); window.location='login.html' </script>";
			//die("La conexion ha fallado : " .mysqli_connect_error());
		}
		echo "<script> alert('Bienvenido $user'); window.location='principal.php' </script>";
		
		return $conexion;
		
	}
	
	
	
?>	