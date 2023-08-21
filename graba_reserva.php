<?php
session_start();
date_default_timezone_set('America/El_Salvador');
$salir         = "no";
include("conecta.php");
$hoy             = date("Y-m-d H:i:s");
$empresa         = "Hotel Valdocco";

$fechain         = $_POST['fechain'];
$fechaout        = $_POST['fechaout'];
$latipoh         = $_POST['tipoh'];
$elroom          = $_POST['room'];

$ninos           = $_POST['niños'];
$adultos         = $_POST['adultos'];

$docum           = $_POST['docum'];
$adulto1         = $_POST['adulto1'];
$adulto2         = $_POST['adulto2'];
$nino1           = $_POST['niño1'];
$nino2           = $_POST['niño2'];

$valor           = $_POST['valor'];
$pais            = $_POST['pais'];
$telefono        = $_POST['telefono'];
$usuario         = $_POST['usuario'];


//echo $fechain,$fechaout,$tipoh,$room,$docum,$adulto1,$adulto2,$niño1,$niño2,$valor,$pais,$telefono,$usuario;
// actualiza la habitacion con datos del visitante, esto impide que la pueda habitar otra persona  

//$sql3  = "UPDATE rooms SET adulto=$adulto1 WHERE cuartoID LIKE '$latipoh' AND cuarto01 LIKE '$elroom'";

$sql3 = "UPDATE rooms". " SET adulto='$adulto1',documento='$docum' ". " WHERE cuartoID like '$latipoh' AND cuarto01 like '$elroom'";
mysqli_query($conn,$sql3);

if ($conn->query($sql3) === TRUE) 
{  echo "Record updated successfully";} 
else 
{  echo "Error updating record: " . $conn->error;}




//ya ingresa nuevo registro

$sql2 = "INSERT into reserva (fechareserva,docum,fechain,fechaout,adultos,ninos,adulto1,adulto2,kid1,kid2,idroom,room,valor,pais,telefono) 
values ('$hoy','$docum','$fechain','$fechaout','$adultos','$ninos','$adulto1','$adulto2','$nino1','$nino2','$tipoh','$room',$valor,'$pais','$telefono')";
mysqli_query($conn,$sql2);



?>

        <br>
                                    
        <footer class="footer">
        <div class="container"> <span class="text-muted">
        <div class="col-md-12">
        <div class="sep-long" style="margin:30px 0 20px 0"></div>
        <p style="text-align:center;"><a href="index.html" role="button" class="btn btn-success btn-lg-small">RESERVA COMPLETADA CON EXITO</a></p>

        </div>
        </div>
        </div>
        </footer>
                                        
        </div>
        </div>
                            
<?  ?>