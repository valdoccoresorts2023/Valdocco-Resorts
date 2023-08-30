<?php
session_start();
date_default_timezone_set('America/El_Salvador');
$salir         = "no";
include("conecta.php");
$hoy             = date("Y-m-d H:i:s");
$empresa         = "Hotel Valdocco";

$fechain         = $_POST['fechain'];
$fechaout        = $_POST['fechaout'];
$latipohab       = $_POST['tipohab'];
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
$id              = $_SESSION['id'];

echo $id;


$tipoh=$_SESSION['tiph'];
//echo $elroom,$docum,$_SESSION['tiph'],$tipoh;

// actualiza tabla usuarios para que solo meta 1 reserva (sino reserva todo el hotle el solo.)
$sql33  = "UPDATE usuarios SET fifo='S' WHERE id == $id";
mysqli_query($conn,$sql33);


// actualiza la habitacion con datos del visitante, esto impide que la pueda habitar otra persona  
$sql3  = "UPDATE rooms SET fechain='$fechain',fechaout='$fechaout',adulto='$adulto1',documento='$docum' WHERE cuartoID LIKE '%$tipoh%' AND cuarto01 LIKE '%$elroom%'";
mysqli_query($conn,$sql3);


//ingresa nuevo registro en la tabla reserva
$no='N';
$sql2 = "INSERT into reserva (fechareserva,docum,fechain,fechaout,adultos,ninos,adulto1,adulto2,kid1,kid2,idroom,room,valor,pais,telefono,liquida,idreserva) 
values ('$hoy','$docum','$fechain','$fechaout','$adultos','$ninos','$adulto1','$adulto2','$nino1','$nino2','$elroom','$tipoh',$valor,'$pais','$telefono','$no',$id)";
mysqli_query($conn,$sql2);


// actualiza tabla usuarios para que solo meta 1 reserva (sino reserva todo el hotle el solo.)
$sql33  = "UPDATE usuarios SET fifo='S' WHERE id === $id";
mysqli_query($conn,$sql33);


?>

        <br>
                                    
        <footer class="footer">
        <div class="container"> <span class="text-muted">
        <div class="col-md-12">
        <div class="sep-long" style="margin:30px 0 20px 0"></div>
        <p style="text-align:center;"><a href="home1.php" role="button" class="btn btn-success btn-lg-small">RESERVA COMPLETADA CON EXITO</a></p>

        </div>
        </div>
        </div>
        </footer>
                                        
        </div>
        </div>
                            
<?  ?>