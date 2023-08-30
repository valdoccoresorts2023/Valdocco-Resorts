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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comodidades</title>
    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/Stylee.css">

    <link rel="stylesheet" href="../website design/css/style.css">
    <link rel="shortcut icon" href="./img/wayb.jpg">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../www/css/aaa/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../www/css/aaa/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../www/css/aaa/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
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

<?php
if ($tiu==10)
         { echo
            '<main>
                <section class="site-title">
                <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: white; font-family: var(--Lexend); font-size: xx-large;">Bienvenidos a</h3>
                    <h1 style="color: white;">Valdocco Resorts</h1>
                    <h6 style="color: white;">- -</h6>
                    <h3 style="color: white;">Administrador: '.$_SESSION['user1'].'</h3>
                    <h6 style="color: white;">- -</h6>
                    <h2 style="color: white;"><i class="fas fa-clock"></i> Fecha y Hora Local:'.$hoy. ',' .$time.'GMT -6</h2>
                </div>
                </section>
            </main>
        ';
        }
        
        else
        
        {
        
        echo
        '
                <main>
                <section class="site-title">
                <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3 style="color: white; font-family: var(--Lexend); font-size: xx-large;">Bienvenidos a</h3>
                <h1 style="color: white;">Valdocco Resorts</h1>
                <br>
                <br>
                
                <h3 style="color: white;">'.$_SESSION['user1'].'</h3>
                
                <br>
                <br>
                <h2 style="color: white;"><i class="fas fa-clock"></i> Fecha y Hora Local:'.$hoy. ',' .$time.'GMT -6</h2>
                </div>
                </section>
                </main>
        '; 
        }


?>
   

        

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Valdocco Resorts</h6>
                    <h1 class="mb-5">Explora todas las <span class="text-primary text-uppercase">Comodidades</span> que te brindamos</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Servicio al Cuarto</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Comida, restaurantes y bar</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Spa </h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-swimmer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Piscinas y jacuzzi</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Eventos Especiales y fiestas</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Gimnasio y Yoga</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        <div class="hero min-h-screen bg-base-150 wow fadeInUp" data-wow-delay="0.6s">
            <div class="hero-content flex-col lg:flex-row" >
              <img src="./img/toallitados.jpg" class="max-w-sm rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-5xl font-bold" style="text-align: center;"> Spa</h1>
                <p class="py-6" style="text-align: center;">Descubra serenidad y lujo en nuestro sofisticado spa, donde la relajación y la renovación se fusionan en tratamientos indulgentes y un ambiente excepcional.</p>
              </div>
              <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="./img/toallita.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                  <h1 class="text-5xl font-bold"></h1>
                  <p class="py-6"></p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/spasito.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/oil.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/manicura.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero min-h-screen bg-base-150 wow fadeInUp" data-wow-delay="0.6s">
            <div class="hero-content flex-col lg:flex-row" >
              <img src="./img/noseee.jpg" class="max-w-sm rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-5xl font-bold" style="text-align: center;">Servicio al Cuarto</h1>
                <p class="py-6" style="text-align: center;">Descubra la delicia en su habitación con nuestro servicio de habitaciones: platos excepcionales entregados con atención personalizada, para una experiencia gastronómica sin igual en la comodidad de su espacio.</p>
                </p>
                <p  class="mb-0" style="text-align: center;"><i class="fa fa-check text-primary me-3"></i>20x20 size </p>
                        <p  class="mb-0" style="text-align: center;"><i class="fa fa-check text-primary me-3"></i>from 1 or 2 beds per room </p>
                        <p  class="mb-0" style="text-align: center;"><i class="fa fa-check text-primary me-3"></i>Wifi conection - room service</p>
                        </a>
                </p>
              </div>
              <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="./img/noseeedos.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                  <h1 class="text-5xl font-bold"></h1>
                  <p class="py-6"></p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/limpieza.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/mantenimiento.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/comidita.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero min-h-screen bg-base-150 wow fadeInUp" data-wow-delay="0.6s">
            <div class="hero-content flex-col lg:flex-row" >
              <img src="./img/resta.jpg" class="max-w-sm rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-5xl font-bold" style="text-align: center;">Restaurante</h1>
                <p class="py-6" style="text-align: center;">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
              </div>
              <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="./img/restados.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                  <h1 class="text-5xl font-bold"></h1>
                  <p class="py-6"></p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/vinito.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/restaurantito.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/sillita.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero min-h-screen bg-base-150 wow fadeInUp" data-wow-delay="0.6s">
            <div class="hero-content flex-col lg:flex-row" >
              <img src="./img/gym.jpg" class="max-w-sm rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-5xl font-bold" style="text-align: center;">Gimnasio y Yoga</h1>
                <p class="py-6" style="text-align: center;">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
              </div>
              <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="./img/gymdos.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                  <h1 class="text-5xl font-bold"></h1>
                  <p class="py-6"></p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/pesa.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/amiguis.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/yoga.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero min-h-screen bg-base-150 wow fadeInUp" data-wow-delay="0.6s">
            <div class="hero-content flex-col lg:flex-row" >
              <img src="./img/pisiii.jpg" class="max-w-sm rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-5xl font-bold" style="text-align: center;">Piscinas y jacuzzi</h1>
                <p class="py-6" style="text-align: center;">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
              </div>
              <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="./img/pisiiidos.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                  <h1 class="text-5xl font-bold"></h1>
                  <p class="py-6"></p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/pisinaso.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/fiesticapisi.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/jacuzzii.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero min-h-screen bg-base-150 wow fadeInUp" data-wow-delay="0.6s">
            <div class="hero-content flex-col lg:flex-row" >
              <img src="./img/telon.jpg" class="max-w-sm rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-5xl font-bold" style="text-align: center;">Eventos Especiales</h1>
                <p class="py-6" style="text-align: center;">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
             </div>
              <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="./img/telondos.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                  <h1 class="text-5xl font-bold"></h1>
                  <p class="py-6"></p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/fiessta.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/boda.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/recicla.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero min-h-screen bg-base-150 wow fadeInUp" data-wow-delay="0.6s">
            <div class="hero-content flex-col lg:flex-row" >
              <img src="./img/todito.jpg" class="max-w-sm rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-5xl font-bold" style="text-align: center;">Otros</h1>
                <p class="py-6" style="text-align: center;">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
             </div>
              <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="./img/toditodos.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                  <h1 class="text-5xl font-bold"></h1>
                  <p class="py-6"></p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/fiessta.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/boda.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/recicla.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5><h5 class="mb-0" style="color: #ffffff;">------------</h5><h5 class="mb-0"><i class="far fa-clock text-primary me-2"></i>$50</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5"><span class="text-primary text-uppercase section-title text-center text-primary text-uppercase">Reseñas</span></h1>
                </div>
            </div>
        </div>
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px; background-color: #ffffff;">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="../www/css/aaa/img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="../www/css/aaa/img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="../www/css/aaa/img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </main>
    
    <section class="container">
        <div class="site-content">
        <div class="posts">
        <div class="pagination flex-row">
            <a href="./home1.php"><i class="fas fa-chevron-left"></i></a>
            <a href="./home1.php" class="pages">1</a>
            <a href="#" class="pagina">2</a>
            <a href="./Gatrooo.php" class="pages">3</a>
            <a href="./EventESPP.php" class="pages">4</a>
            <a href="./room.php" class="pages">5</a>
            <a href="./abouut - copia.php" class="pages">6</a>
            <a href="./Gatrooo.php"><i class="fas fa-chevron-right"></i></a>
        </div>
        </div>
        </div>
    </section>

      <!-- Room End -->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <div class="instagram">
            <img src="./assets/VRpequeño.png" height="100px" width="100px">
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


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src=".js/wow.min.js"></script>
    <script src=".js/easing.min.js"></script>
    <script src=".js/waypoints.min.js"></script>
    <script src=".js/counterup.min.js"></script>
    <script src=".js/owl.carousel.min.js"></script>
    <script src=".js/moment.min.js"></script>
    <script src=".js/moment-timezone.min.js"></script>
    <script src=".js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src=".js/maain.js"></script>
</body>
</html>