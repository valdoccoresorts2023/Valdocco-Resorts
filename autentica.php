<?php
session_start();
// LOS HORARIOS DE ENTRADA ESTAN RESTRINGIDOS A TODOS MENOS A LOS SUPERVISORES TIPUSER = 10
// LOS REPORTES ESTAN RESTRINGIDOS A TODOS MENOS A LOS SUPERVISORES TIPUSER = 10

// cambio horarios black friday 2021 de 3 a l media noche 

date_default_timezone_set('America/El_Salvador');

$inicio     = 1;  # si pongo a las 6 pueden entrar a partir de las 7.01 ya que es mayor 7 que 6 
$fin        = 23; # Hasta las 23 horas de la tarde.(11 de la noche)
$user       = 10; # usuario que si pueden pasar a cualquier hora
$HoraActual = intval(date("H"));// Hora actual del Pais de residencia.

include("conecta.php");

$empresa         = 'Gran Hotel Valdocco';

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) 
{
	// Could not get the data that should have been sent.
	die ('Conexion Exitosa !!!');
}
    
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
            
if ($stmt = $conn->prepare('SELECT password,tipouser,fifo,encargado,id FROM usuarios WHERE email = ?')) 
   {    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    	$stmt->bind_param('s', $_POST['username']);
   	    $stmt->execute();
    	// Store the result so we can check if the account exists in the database.
        $stmt->store_result();
   }
            
if ($stmt->num_rows > 0) 
{
 	$stmt->bind_result($password, $tipouser,$fifo,$encargado,$id);
	$stmt->fetch();
   // Account exists, now we verify the password.
   if (trim($_POST['password']) === trim($password)) 
    {
            		// Verification success! User has loggedin!
            		//session_regenerate_id();
            		$_SESSION['loggedin']       = TRUE;
            		$_SESSION['name']           = $_POST['username'];
            		$_SESSION['tipou']          = $tipouser;
            		$_SESSION['fifo']           = $fifo;
					   $_SESSION['user1']          = $encargado;
					   $_SESSION['id']             = $id;
                                    
                    // LOS  OTROS
                    if ($tipouser==$user) 
                       {include("home1.php");} 
                       //include 'home.php';
        
                    else 
 
                       {
                          //if ($HoraActual > $inicio && $HoraActual < $fin) 
                          if (1==1) 
                             {include("home1.php");} 
                             //include 'home.php';
                          else 
                            {
                            # Mostrar mensaje de sistema bloqueado, etc.
                            ?>
                            <script type="text/javascript">
                                   window.alert("Horario de Acceso: 7:00 AM hasta 7:00 PM");
                            </script>
                            <?php
                            include("index.php");
                            }
                       }

            	} else {
            		echo 'Password Incorrecto !';
            	}
            } else {
            	echo 'Usuario Incorrecto !';
            }
?>