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
$tvale1           = $_POST['consumo'];
$tvale2           = $_POST['valor2'];
$tpais            = $_POST['pais'];
$ttelefono        = $_POST['telefono'];
//echo $tdocum,$troom,$tidroom,$tvale1;

// actualiza la tabla rooms. 
$sql3  = "UPDATE rooms SET adulto='$tadulto1',documento='$tdocum',valor=$tvale1,valor2=$tvale2  
WHERE cuartoID LIKE '%$troom%' AND cuarto01 LIKE '%$tidroom%'";
mysqli_query($conn,$sql3);


//cambia alginos campos en la tabla reserva
$no='N';
$sql2 = "UPDATE reserva SET docum='$tdocum',adulto1='$tadulto1',adulto2='$tadulto2',kid1='$tkid1',kid2='$tkid2',valor=$tvale1,valor2=$tvale2,pais='$tpais',telefono='$ttelefono' 
WHERE room LIKE '%$troom%' AND idroom LIKE '%$tidroom%' AND liquida='N'";
mysqli_query($conn,$sql2);

?>

        <br><br><br>
        <footer class="footer">
        <div class="container"> <span class="text-muted">
        <div class="col-md-12">
        <div class="sep-long" style="margin:30px 0 20px 0"></div>
        <p style="text-align:center;"><a href="home1.php" role="button" class="btn btn-success btn-lg-small">RESERVA ACTUALIZADA CON EXITO</a></p>

        </div>
        </div>
        </div>
        </footer>
                                        
        </div>
        </div>
                            
<?  ?>