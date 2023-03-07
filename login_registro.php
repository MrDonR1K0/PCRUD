<?php

	include("conexionABD.php");
	

	$user = $_POST["usuario"];
	$pass = $_POST["password"];
	
	
	//Login
	if(isset($_POST["btnLogin"])){
		
		$conn = conectar($user, $pass);
		
		/*$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()){
				echo "Usuario: " . $row["usuario"]. " - Password: " . $row["password"]. "<br>";
			}
		}else {
			echo "0 results";
		}*/
		
	}
	
	//Registro 
	if(isset($_POST["btnRegistro"])){
		
		$sqlRegistro = "insert into login(usuario,password) values ('$nombre','$pass')";
		
		if(mysqli_query($conn, $sqlRegistro)){
			echo "<script> alert('El uuario $user se ha registrado con éxito'); window.location='login.html' </script>";
		}else {
			echo "Error: ".$sqlRegistro."<br>".mysql_error($conexion);
		}
	}

 ?>