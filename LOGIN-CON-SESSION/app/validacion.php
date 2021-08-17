<?php
include 'conexion.php';
$user = $_POST['user'];
$pass = $_POST['pass'];


	$user = mysqli_real_escape_string($conexion, $user);
 	$pass = mysqli_real_escape_string($conexion, $pass);
 	

	$sesion ="SELECT * FROM usuarios where usuario ='$user' and password = '$pass'";
	$resultado_sesion =mysqli_query($conexion,$sesion);
	$row_session = mysqli_num_rows($resultado_sesion);
	if($row_session > 0)
	{
		
			while($row = mysqli_fetch_assoc($resultado_sesion)){

			session_start();
			$login = $row['usuario'];
			$_SESSION['user'] = $login;
			
			header ("Location: ../home.php");

	}
	}
	else
	{
			echo '<script language="javascript">alert("Usuario/Contraseña Incorrectos");window.location.href="../index.html"</script>';
	}


?>