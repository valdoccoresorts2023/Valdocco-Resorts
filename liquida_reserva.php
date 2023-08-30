<?php
session_start();
date_default_timezone_set('America/El_Salvador');
$salir         = "no";
include("conecta.php");
$hoy             = date("Y-m-d H:i:s");

$troom            = $_POST['room'];
$tidroom          = $_POST['idroom'];
$tdocum           = $_POST['docum'];
$tadulto1         = $_POST['adulto1'];
$tadulto2         = $_POST['adulto2'];
$tkid1            = $_POST['kid1'];
$tkid2            = $_POST['kid2'];
$tvale1           = $_POST['vale1'];
$tpais            = $_POST['pais'];
$ttelefono        = $_POST['telefono'];
$tipoh            = $_SESSION['tiph'];
$vacio            = "";
$ff               = '0000-00-00';
$vale             = 100;
$tiu              = $_SESSION['tipou']; 

//echo $tdocum,$troom,$tidroom,$tvale1;

// se le quita la marca para que pueda hacer otra reserva **** CANCELACIONES SOLO SON EL OFICINAS DEL HOTEL
$sql3  = "UPDATE usuarios SET fifo='' WHERE id==$tiu '";
mysqli_query($conn,$sql3);


// actualiza la tabla rooms. 
$sql3  = "UPDATE rooms SET fechain='$ff',fechaout='$ff',adulto='$vacio',documento='$vacio'
WHERE cuartoID LIKE '%$troom%' AND cuarto01 LIKE '%$tidroom%'";
mysqli_query($conn,$sql3);


//cambia alginos campos en la tabla reserva
$no='N';
$sql2 = "UPDATE reserva SET liquida='S' WHERE room LIKE '%$troom%' AND idroom LIKE '%$tidroom%' AND liquida='N'";
mysqli_query($conn,$sql2);

?>

        <br>
        <footer class="footer">
        <div class="container"> <span class="text-muted">
        <div class="col-md-12">
        <div class="sep-long" style="margin:30px 0 20px 0"></div>
        <p style="text-align:center;"><a href="home1.php" role="button" class="btn btn-success btn-lg-small">RESERVA LIQUIDIDA POR COMPLETO</a></p>

        </div>
        </div>
        </div>
        </footer>
                                        
        </div>
        </div>
                            
<?  ?>