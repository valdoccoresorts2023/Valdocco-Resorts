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
    <title>Sobre nosotros - Valdocco Resorts</title>
    <link rel="shortcut icon" href="./img/wayb.jpg">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Styleabout.css">
    <link rel="stylesheet" href="./css/Stylee.css">

    <link rel="stylesheet" href="../website design/css/style.css">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

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
                <li><a href="./abouut - copia.php">Sobre nosotros</a></li>
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
    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <?php
        if ($tiu==10)
                 { echo
                    '<main>
                        <section class="site-title">
                        <div class="site-background"  data-aos-delay="100">
                            <h3 style="color: white; font-family: var(--Lexend); font-size: xx-large;">Nuestro proposito como</h3>
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
                        <div class="site-background" data-aos-delay="100">
                        <h3 style="color: white; font-family: var(--Lexend); font-size: xx-large;">Nuestro proposito como</h3>
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

footer.footer{
    height: 100%;
    background: var(--bg-color);
    position: relative;
}

footer.footer .container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

footer.footer .container > div{
    flex-grow: 1;
    flex-basis: 0;
    padding: 3rem .9rem;
}

footer.footer .container h2{
    color: var(--white);
}

footer.footer .newsletter .form-element{
    background: black;
    display: inline-block;
}

footer.footer .newsletter .form-element input{
    padding: .5rem .7rem;
    border: none;
    background: transparent;
    color: white;
    font-family: var(--Josefin);
    font-size: 1rem;
    width: 74%;
}

footer.footer .newsletter .form-element span{
    background: var(--sky);
    padding: .5rem .7rem;
    cursor: pointer;
}

footer.footer .instagram div > img{
    display: inline-block;
    width: 25%;
    height: 50%;
    margin: .3rem .4rem;
}

footer.footer .follow div i{
    color: var(--white);
    padding: 0 .4rem;
}

footer.footer .rights{
    justify-content: center;
    font-family: var(--Josefin);
}

footer.footer .rights h4 a{
    color: var(--white);
}

footer.footer .move-up{
    position: absolute;
    right: 6%;
    top: 50%;
}

footer.footer .move-up span{
    color: var(--midnight);
}

footer.footer .move-up span:hover{
    color: var(--white);
    cursor: pointer;
}

/* ---------x------- Footer ----------x---------- */

</style>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Carousel ----------------- -->


        <!-- ----------x---------- FIN Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->
 
        <!-- About Start -->
        <div class="container-xxl py-5" data-wow-delay="0.3s"  data-aos-delay="200">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase" data-wow-delay="0.3s" data-aos-delay="200">Sobre Nosotros</h6>
                        <h1 class="mb-4">que proposito tiene<span class="text-primary text-uppercase"> Valdocco Resorts</span>?</h1>
                        <p class="mb-4">Desde mucho tiempo hemos visto como mucha gente se ha sentido muy estresada todos estos ultimos años, asi que noes hemos puesto manos a la obra para que todas esas personas que quieran tener un buen descanso puedan hacerlo de forma muy sencilla</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">60</h2>
                                        <p class="mb-0">Cuartos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">160</h2>
                                        <p class="mb-0">Personal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">10,000</h2>
                                        <p class="mb-0">Clientes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" style="background-color: #F0B439; border-color: #F0B439;" href="./rooms.php">Explorar cuartos</a>
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="./img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="./img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="./img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="./img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Explora</h6>
                    <h1 class="mb-5">nuestro<span class="text-primary text-uppercase"> Equipo</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos-delay="200">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/godrafoxd.png" alt="10px" >
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Rafael Alejandro Escorcia Siliezar</h5>
                                <small>Director Ejecutivo y propietario</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s" data-aos-delay="200">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/jefferxdd.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Jefferson Alexander Bonilla Lopez</h5>
                                <small>Coordinador de Operaciones</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.11s" data-aos-delay="200">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/totoxdd.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><br>Erick Isaac Lara Hernandez</h5>
                                <small>Coordinador de Servicio gastronomico</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.15s" data-aos-delay="200">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/hectorxd.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="" style="background-color: #F0B439; border-color: #F0B439;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><br>Hector Samuel Jovel Marin</h5>
                                <small>Director de Bienestar</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
        </section>

         <!-- Contact Start -->
         <div class="container-xxl bg-white p-0" data-wow-delay="0.15s" data-aos-delay="200">
         <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Si Tienes alguna incomodidad o algo importante que mencionar</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"></span>Contactanos</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">General</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Technical</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d496117.1892805754!2d-89.26714165928651!3d13.723563009508284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHoteles!5e0!3m2!1ses-419!2ssv!4v1681532650909!5m2!1ses-419!2ssv"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                            <form action="https://formsubmit.co/ValdocoResorts@gmail.com" method="POST"></form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" style="background-color: #F0B439; border-color: #F0B439;" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Contact End -->
        <!-- Team End -->


        <!-- Newsletter Start -->

        <!-- Newsletter Start -->
        


        <!-- Back to Top -->
    </div>
    <!-- --------------------------- Footer ---------------------------------------- -->

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>

      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="./js/wow.min.js"></script>
      <script src="./js/easing.min.js"></script>
      <script src="./js/waypoints.min.js"></script>
      <script src="./js/counterup.min.js"></script>
      <script src="./js/owlcarousel/owl.carousel.min.js"></script>
      <script src="./js/moment.min.js"></script>
      <script src="./js/moment-timezone.min.js"></script>
      <script src="./js/tempusdominus-bootstrap-4.min.js"></script>
  
      <!-- Template Javascript -->
      <script src="./js/maain.js"></script>
</main>

<section class="container">
        <div class="site-content">
        <div class="posts">
        <div class="pagination flex-row">
            <a href="./rooms.php"><i class="fas fa-chevron-left"></i></a>
            <a href="./home1.php" class="pages">1</a>
            <a href="./Nueva pagina de comodidades.php" class="pages">2</a>
            <a href="./Gatrooo.php" class="pages">3</a>
            <a href="./EventESPP.php" class="pages">4</a>
            <a href="./rooms.php" class="pages">5</a>
            <a href="#" class="pagina">6</a>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </div>
        </div>
        </div>
    </section>

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
<!-- Footer End -->
</body>

</html>