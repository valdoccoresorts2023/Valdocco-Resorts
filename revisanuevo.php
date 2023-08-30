<?php
	session_start();
	// LOS HORARIOS DE ENTRADA ESTAN RESTRINGIDOS A TODOS MENOS A LOS SUPERVISORES TIPUSER = 10
	// LOS REPORTES ESTAN RESTRINGIDOS A TODOS MENOS A LOS SUPERVISORES TIPUSER = 10

	// cambio horarios black friday 2021 de 3 a l media noche 

	date_default_timezone_set('America/El_Salvador');

	$inicio     = 6;  # si pongo a las 6 pueden entrar a partir de las 7.01 ya que es mayor 7 que 6 
	$fin        = 23; # Hasta las 23 horas de la tarde.(11 de la noche)
	$user       = 10; # usuario que si pueden pasar a cualquier hora
	$HoraActual = intval(date("H"));// Hora actual del Pais de residencia.

	include("conecta.php");
	$v1 = $_POST['nombre'];
	$v2 = $_POST['username'];
	$v3 = $_POST['password'];
	$tu = 1;
	//echo $v1,$v2,$v3,$tu;
	
    if ($conn->connect_error) 
	 {
	  die("La conexion fallo " . $conn->connect_error);
	 }
	  
	 $buscarUsuario = "SELECT * FROM usuarios WHERE email = '$_POST[username]' AND password = '$_POST[password]'";
	 $result = $conn->query($buscarUsuario);
	 $count = mysqli_num_rows($result);
	 
	 if ($count > 0) 
	 {
		 echo
			'
			<br><br><br><br><br>
			<div align=center>
			<h5>HOTEL VALDOCCO<h5>
			<br>
			<h5>ERROR: 001 - CUENTA DE CORREO YA EXISTE<h5>
			<br>
			<h5>Si es primera vez que esta creando esta cuenta, intente Nuevamente con otro correo.<h5>

			<ul>
			  <a class="active" href="index.php"> CUENTA DE CORREO YA EXISTE - REGRESAR</a>
			</ul>
			</div>
			';
	}
	 
	 else
	 
	 {
		 
		 $sqlnuevo2 = "INSERT INTO `usuarios` (`nomgestor`, `encargado`, `tipouser`, `email`, `password`, `fifo`) VALUES ('$v1','$v1', '1', '$v2', '$v3', '')";
		 mysqli_query($conn,sqlnuevo2);
		
		 if ($conn->query($sqlnuevo2) === TRUE) 
		 {
			include("index.php");
        } 
		 else 
		 {
		   echo "Error updating record: " . $conn->error;
		 }
}
	
?>