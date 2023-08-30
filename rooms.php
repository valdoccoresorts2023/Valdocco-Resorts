<?php
session_start();
$navigator_user_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? strtolower($_SERVER['HTTP_USER_AGENT']):'';

include("conecta.php");

$empresa         = "Gran Hotel Valdocco";
$usuario         = $_POST['usuario'];
$clave           = $_POST['clave']; 
$idreserva       = $_SESSION['id'];
$tiu             = $_SESSION['tipou']; 
$total           = 0;

// 17/02/2022
$fifo               = $_SESSION['fifo'];
$nombre             = $_SESSION['user1'];
$id                 = $_SESSION['id'];
$_SESSION['estado'] ="Unavailable";

//echo 'Tipo de Usuario es:'.$tiu,$fifo,$idreserva;

	date_default_timezone_set('America/El_Salvador');
	$hoy        = date("Y-m-d");

    // si esta 30 minutos inactivo se sale de la session.... se bajo el valor para control de usuarios conectados 
    header('Content-Type: text/html; charset=ISO-8859-1');
    // visita real
    date_default_timezone_set('America/El_Salvador');
    $hoy         = date("Y-m-d H:i:s");
    $localIP     = $_SERVER['REMOTE_ADDR'];
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room's list - Valdocco Resorts</title>
    <link rel="shortcut icon" href="./img/wayb.jpg">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/Stylee.css">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="./css/scc/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="./css/scc/styleEP.css" rel="stylesheet">

        <link href="./css/scc/lib/animate/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../website design/css/style.css">

            <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body>
    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <!----------------------------- Main Site Section ------------------------------>
    <nav>  
        <div class="navbar  bg-white-500 md:bg-withe-500 lg:bg-white-500">
            <div class="flex-1">
              <a href="./home1.php" class="btn btn-ghost normal-case text-xl text-[#3f4954] sm:text-2xl   m ">Valdocco Resorts</a>
            </div>
            <div class="flex-none">
              <ul class="menu menu-horizontal px-1">
                <li><a href="./Nueva pagina de comodidades.php">Comodidades</a></li>
             
                        

        <?php
        if ($fifo=='' OR $tiu==10)
           { echo '
            <li><a href="./reserva_nueva.php"><i class="fa fa-calendar-alt fa-2x" style="color: rgb(214, 213, 213);"></i>Nueva Reserva</a></li>
          ';}
 
        if ($fifo=="S")
           {
           # Mostrar mensaje QUE YA TIENE 1 RESERVA DEBE LLAMAR AL HOTEL
           ?>
           <script type="text/javascript">
           window.alert("YA TIENE UNA RESERVA EN PROCESO *  Favor llamar al 715-699-0793 al Dpto de Reservas.");
           </script>
          <?php 
          }
       ?>
       
        <li><a href="./crud_pdte.php"  title="Habitaciones Libres" onkeypress="return event.keyCode != 13"><i class="fa fa-calendar-check-o" style="color: rgb(214, 213, 213);"></i>Disponibles</a></li>

        <?php
        if ($tiu==10)
           { echo '
           <li><a href="./crud_reserva.php"  title="Habitaciones Reservadas" onkeypress="return event.keyCode != 13"><span class="glyphicon glyphicon-search"></span>Reservados</a></li>
		   <li><a href="./crud_cancela.php"  title="Cancela Habitacion Ocupada" onkeypress="return event.keyCode != 13"><span class="glyphicon glyphicon-search"></span>Cancela/Liquida</a></li>
          ';}
        ?>

        <?php
        if ($tiu==1)
           { echo '
           <li><a href="./mis_reservas.php"  title="Mis Reservas" onkeypress="return event.keyCode != 13"><span class="glyphicon glyphicon-search"></span>Mis Reservas</a></li>
	      ';}
        ?>

             
             
             
                <li><a href="./rooms.php">Habitaciones</a></li>
                <li><a href="./Gatrooo.php">Gastronomia</a></li>
                <li><a href="./EventESPP.php">Eventos Especiales</a></li>
                <li><a href="./abouut.php">Sobre nosotros</a></li>
                <li>
                    <details>
                      <summary>
                        Lenguaje</i>
                      </summary>
                      <ul class="p-2 bg-base-100">
                        <li><a href="#">Español (ES)</a></li>
                        <li><a href="./home1 - EN.php">Ingles (EN)</a></li>
                      </ul>
                    </details>
                  </li>
                  <li><a href="./logout.php">Cerrar Sesion</a></li>
              </ul>
            </div>
          </div>
    </nav> 
        <!-- ------------x---------------  Navigation --------------------------x------------------- -->
<style>
:root{
/*      Theme colors        */
--text-gray: #3f4954;
--text-light : #6d6025da;
--bg-color: #0f0f0f;
--white: #ffffff;
--midnight: #B58E33;

/* gradient color   */
--sky: linear-gradient(120deg, #F0B439 0%, #F0CA45 100%);

/*      theme font-family   */
--Abel: 'Abel', cursive;
--Anton: 'Anton', cursive;
--Josefin : 'Josefin', cursive;
--Lexend: 'Lexend', cursive;
--Livvic : 'Livvic', cursive;
}

h1{
    font-family: var(--Lexend);
    font-size: 2.5rem;
}

h2{
    font-family: var(--Lexend);
}

h3{
    font-family: var(--Abel);
    font-size: 1.3rem;
}

</style>
<!------------------------ Site Title --------------------->
<main>
</main>
        <!------------x----------- Site Title ----------x----------->

        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chess-pawn text-primary mb-4"></i>
                            <h6 class="mb-3">"Sencilla Valdocco" and 
                                "San Francisco"</h6>
                            
                            <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>20x20 size </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>from 1 or 2 beds per room </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Wifi conection - room service</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chess-bishop text-primary mb-4"></i>
                            <h6 class="mb-3">Exclusive Suits 
                                Deluxe & Ultimate</h6>
                                <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>40x40 size </p>
                                <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>from 1 to 3 beds per room</p>
                                <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                                <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Wifi conection - room service </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>De 1 a 2 camas por cuarto</p>
                        
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chess-queen text-primary mb-4"></i>
                            <h6 class="mb-3">Presidential suite "Reina Isabel"</h6>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>20x20 de longitud </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>De 1 a 2 camas por cuarto</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>20x20 de longitud </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>De 1 a 2 camas por cuarto</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chess-king text-primary mb-4"></i>
                            <h6 class="mb-3">Presidential suite "Luis XV"</h6>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>20x20 de longitud </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>De 1 a 2 camas por cuarto</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>20x20 de longitud </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>De 1 a 2 camas por cuarto</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>20x20 de longitud </p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>De 1 a 2 camas por cuarto</p>
                        <p  class="mb-0"><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h6 class="section-title text-center text-primary text-uppercase">Valdocco Resorts</h6>
                    <h1 class="mb-5">Habitaciones <span class="text-primary text-uppercase">Valdocco</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img cuartos bishop/cuartico11.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$60</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>2 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Welcome to our spacious 20x20 hotel room. Choose from one or two beds, and enjoy free WiFi and room service for a comfortable and convenient stay.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop -1.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-up" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-2.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$55</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>3 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Welcome to our spacious 20x20 hotel room. Choose from one or two beds, and enjoy free WiFi and room service for a comfortable and convenient stay.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage - 1.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-1.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$45</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>2 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Welcome to our spacious 20x20 hotel room. Choose from one or two beds, and enjoy free WiFi and room service for a comfortable and convenient stay.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop -2.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    </div>

                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h6 class="section-title text-center text-primary text-uppercase">Valdocco Resorts</h6>
                    <h1 class="mb-5">Exclusive <span class="text-primary text-uppercase">Suits</span></h1>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-1.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$55</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>2 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Welcome to our spacious 20x20 hotel room. Choose from one or two beds, and enjoy free WiFi and room service for a comfortable and convenient stay.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop -3.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-up" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-1.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Exclusive Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$65</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>4 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">We welcome you to our spacious hotel rooms, with a generous 40x40 space. Choose from one, two or three beds for your comfort. Plus, enjoy free WiFi and the convenience of room service during your stay.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop -4.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-1.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Exclusive Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$70</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>4 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">We welcome you to our spacious hotel rooms, with a generous 40x40 space. Choose from one, two or three beds for your comfort. Plus, enjoy free WiFi and the convenience of room service during your stay.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop -5.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h6 class="section-title text-center text-primary text-uppercase">Valdocco Resorts</h6>
                    <h1 class="mb-5">Presidential <span class="text-primary text-uppercase">Suits</span></h1>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-1.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">dddExclusive Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$85</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>6 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">We welcome you to our spacious hotel rooms, with a generous 40x40 space. Choose from one, two or three beds for your comfort. Plus, enjoy free WiFi and the convenience of room service during your stay.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop - 6.php" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-up" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-1.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">"Reina Isabel"</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$150</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i> 1 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>3 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>3 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Step into the supreme luxury of our Exclusive Presidential Suite. This extraordinary space offers you an elegant and refined ambiance, designed to satisfy the most discerning tastes. With a spaciousness that spans 40x40, this suite is an oasis of privacy and comfort.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop - 7.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./css/aaa/img/room-1.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h6 class="mb-0">"Luis XV"</h6><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$220</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fas fa-user text-primary me-2"></i>2 max.</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Welcome to the pinnacle of luxury: our Ultra Exclusive Suite. With a 40x40 space, it redefines elegance with meticulously designed details. Choose from one, two or three beds, all with premium bedding. High-speed WiFi and room service complete this unparalleled experience.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./roomssubpage Bishop - 8.html" style="background-color: #F0B439; border-color: #F0B439;">Ver Detalles</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="./revisa_room_disponible.php" style="background-color: #161414; border-color: #161414; color: #ffffff;">Reservar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Room End -->

        <section class="container">
        <div class="site-content">
        <div class="posts">
        <div class="pagination flex-row">
            <a href="./EventESPP.php"><i class="fas fa-chevron-left"></i></a>
            <a href="./home1.php" class="pages">1</a>
            <a href="./Nueva pagina de comodidades.php" class="pages">2</a>
            <a href="./Gatrooo.php" class="pages">3</a>
            <a href="./EventESPP.php" class="pages">4</a>
            <a href="#" class="pagina">5</a>
            <a href="./abouut - copia.php" class="pages">6</a>
            <a href="./abouut - copia.php"><i class="fas fa-chevron-right"></i></a>
        </div>
        </div>
        </div>
    </section>


    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <div class="instagram">
        <img src="./img/wayb.jpg" height="100px" width="100px">
        </div>
        <div class="grid grid-flow-col gap-4">
          <a href="abouut - EN.html" class="link link-hover">About us</a> 
          <a href="./Gatrooo - EN.html" class="link link-hover">Our Gastronomy</a> 
          <a href="./Nueva pagina de comodidades - EN.html" class="link link-hover">Amenities</a> 
          <a href="./Index - EN.html" class="link link-hover">Homepage</a>
        </div> 
        <div>
          <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
          </div>
        </div> 
        <div>
          <p>Copyright © 2023 - All right reserved by Valdocco Resorts</p>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
      </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
    <script src="./css/aaa/js/main.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./css/scc/lib/wow/wow.min.js"></script>
    <script src="./css/scc/lib/easing/easing.min.js"></script>
    <script src="./css/scc/lib/waypoints/waypoints.min.js"></script>
    <script src="./css/scc/lib/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./css/scc/js/main.js"></script>

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>