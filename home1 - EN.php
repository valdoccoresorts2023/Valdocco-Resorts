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
    <title>Pagina principal - Valdocco Resorts</title>
    <link rel="shortcut icon" href="./assets/VRpequeño.png">

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
              <a href="./home1 - EN.php" class="btn btn-ghost normal-case text-xl text-[#3f4954] sm:text-2xl   m ">Valdocco Resorts</a>
            </div>
            <div class="flex-none">
              <ul class="menu menu-horizontal px-1">
                <li><a href="./Nueva pagina de comodidades - EN.php">Comodidades</a></li>
             
                        

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

             
             
             
                <li><a href="./rooms - EN.php">Habitaciones</a></li>
                <li><a href="./Gatrooo - EN.php">Gastronomia</a></li>
                <li><a href="./EventESPP - EN.php">Eventos Especiales</a></li>
                <li><a href="./abouut - EN.php">Sobre nosotros</a></li>
                <li>
                    <details>
                      <summary>
                        Lenguaje</i>
                      </summary>
                      <ul class="p-2 bg-base-100">
                        <li><a href="#">Español (ES)</a></li>
                        <li><a href="./Index - EN.html">Ingles (EN)</a></li>
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
    <main>

        <!------------------------ Site Title ---------------------->

        <!--<main>
            <section class="site-title">
                <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: white; font-family: var(--Lexend); font-size: xx-large;">Bienvenidos a</h3>
                    <h1 style="color: white;">Valdocco Resorts</h1>
                    <h6 style="color: white;">- -</h6>
                    <h3 style="color: white;"><?//$_SESSION['user1']; ?></h3>
                    <h6 style="color: white;">- -</h6>
                    <h2 style="color: white;"><i class="fas fa-clock"></i> Fecha y Hora Local: <?//date("Y-m-d (H:i:s)", $time); ?>  GMT -6</h2>
                    
                    
                </div>
            </section>
        </main>-->

       
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

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/imggpiscinaso.jpg" alt="post-1" height="100" width="100">
                            <div class="blog-title">
                                <h3>Grandes piscinas y jacuzzis</h3>
                                <span>para que te diviertas</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/Blog-post/imgcuartoo.jpg" alt="post-1" height="100" width="100">
                            <div class="blog-title">
                                <h3>Cuartos Comodos</h3>
                                <span>de todos los tipos</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/Blog-post/imgjardin.jpg" alt="post-1" height="100" width="100">
                            <div class="blog-title">
                                <h3>Areas verdes con un aire puro</h3>
                                <span>y gozes con la naturaleza</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/imggym.jpg" alt="post-1" height="100" width="100">
                            <div class="blog-title">
                                <h3>Nuestro Gimnasio muy bien equipado</h3>
                                <span>Te espera</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/imgevento.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Nuestro servicio de Eventos Especiales</h3>
                                <span>para memorias inolvidables</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/imgresta.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Lujoso Restaurante</h3>
                                <span>para probar nuestra comida exquisita</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/presii.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Te ofrecemos un buen servicio al cuarto</h3>
                                <span>estaremos a tu disposicion todo el tiempo</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- FIN Carousel --------x-------- -->
        <div class="container-xxl bg-white p-0">
            <!-- Service Start -->
<div class="container-xxl py-5">
<div class="container">
   <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
       <h1 class="mb-5">Our main services <span class="text-primary text-uppercase"></span></h1>
   </div>
   <div class="row g-4">
       <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
           <a class="service-item rounded" href="./rooms.html">
               <div class="service-icon bg-transparent border rounded p-1">
                   <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                       <i class="fa fa-hotel fa-2x text-primary"></i>
                   </div>
               </div>
               <h5 class="mb-3">Rooms & Appartment</h5>
               <p class="text-body mb-0">Welcome to our exquisite hotel, where comfort and luxury intertwine to create an unforgettable experience. 
                Each room and apartment in our establishment is meticulously designed with your ultimate relaxation in mind.</p>
           </a>
       </div>
       <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" data-wow-delay="0.3s" data-aos="fade-in" data-aos-delay="200">
           <a class="service-item rounded" href="./Gatrooo.html">
               <div class="service-icon bg-transparent border rounded p-1">
                   <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                       <i class="fa fa-utensils fa-2x text-primary"></i>
                   </div>
               </div>
               <h5 class="mb-3">Food & Restaurant</h5>
               <p class="text-body mb-0">Indulge your palate in a culinary journey like no other at our esteemed hotel's exquisite restaurant. A true haven for food enthusiasts, 
                our dining establishment is a fusion of delectable flavors, impeccable service, and an inviting ambiance.</p>
           </a>
       </div>
       <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-delay="0.3s" data-aos="fade-left" data-aos-delay="200">
           <a class="service-item rounded" href="./Nueva pagina de comodidades.html">
               <div class="service-icon bg-transparent border rounded p-1">
                   <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                       <i class="fa fa-spa fa-2x text-primary"></i>
                   </div>
               </div>
               <h5 class="mb-3">Spa & Fitness</h5>
               <p class="text-body mb-0">Our spa is a sanctuary designed to restore your body and mind. From the moment you step inside, 
                you'll be enveloped in an ambiance of serenity. Indulge in a range of revitalizing treatments</p>
           </a>
       </div>
       </div>
        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/restaurante.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Up to 45 people</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Open from 6AM to 10PM</span>
                                <span></span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="./Gatrooo.html">Step into an ambiance of refined elegance with our restaurant</a>
                            <p>Our renowned chefs are passionate artisans, dedicated to crafting dishes that tantalize your taste buds and elevate dining to an art form. 
                                With a focus on locally sourced, seasonal ingredients, each plate tells a story of flavors that dance in harmony. Whether you're a connoisseur 
                                of international cuisine or prefer to savor regional specialties, our diverse menu offers a symphony of options to cater to every preference.
                            </p>
            
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/pisinados.jpeg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;More than +1000</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;24 hours open</span>
                                <span>7 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Immerse yourself in the inviting waters of our pools or slip into the luxurious comfort of our jacuzzis</a>
                            <p>Our pools are more than just bodies of water. They're serene retreats designed to cater to your every aquatic desire. 
                                Whether you're seeking a refreshing swim to start your day or a leisurely afternoon lounging by the water's edge, our pools provide 
                                a tranquil sanctuary. With crystal-clear waters that invite you to submerge yourself and let your worries drift away, our pool areas are carefully designed for both comfort and aesthetics.
                            </p>
                            
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/cuarto3.jpg" class="img" alt="blog1">
                            </div>
                            
                        </div>
                        <div class="post-title">
                            <a href="#"> Each room and apartment in our establishment is meticulously designed with your ultimate relaxation in mind</a>
                            <p>Indulge in the convenience of modern amenities that effortlessly enhance your stay. Stay connected with high-speed Wi-Fi, 
                                catch your favorite shows on a state-of-the-art flat-screen TV, and unwind with a refreshing drink from the minibar. 
                                Our commitment to your well-being extends to the impeccably maintained en-suite bathrooms, where you can rejuvenate with premium toiletries and plush towels.
                            </p>

                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <section class="contact" id="contact">
                            <div class="row">
                    
                                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d496117.1892805754!2d-89.26714165928651!3d13.723563009508284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHoteles!5e0!3m2!1ses-419!2ssv!4v1681532650909!5m2!1ses-419!2ssv" allowfullscreen="" loading="lazy" width="600px" height="400px">

                                </iframe>
                        
                            </div>
                        </section>
                        <div class="post-title">
                            <a href="#">At Valdocco Resorts we are in an exactly special location for you so that you can rest and easy to find
                            </p>
                        </div>
                    </div>
                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="./Index - EN.html" class="pagina">1</a>
                        <a href="./Nueva pagina de comodidades - EN.html" class="pages">2</a>
                        <a href="./Gatrooo - EN.html" class="pages">3</a>
                        <a href="./rooms - EN.html" class="pages">4</a>
                        <a href="./abouut - EN.html" class="pages">5</a>
                        <a href="./Nueva pagina de comodidades - EN.html"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Other services</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Bar</a>
                                <span></span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Gardens</a>
                                <span></span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Church</a>
                                <span></span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Event planner</a>
                                <span></span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Retirment House</a>
                                <span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Offers that may interest you</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/oferr - EN.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;October 31,
                                        2023</span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Enjoy your stancy and also a good price</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/oferta - EN.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;December 20,
                                        2023</span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Aplies on Summer</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/ofertoooon - EN.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Mayo 10,
                                        2023</span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Nothing better than give some good vacations to mom</a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-post">
                        <h2>Special Event</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/semana_santa.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;April 2 - april 9, 
                                        2023</span>
                                    <span>FINALIZED</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Easter celebration</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <!--<footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>En Valdoco Resorts Colocamos a nuestros huéspedes en el corazón y como prioridad ante todo lo que hacemos, con la salesianidad por delante y siguiendo la mision de Don Bosco</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2></h2>
                <p></p>
                <div class="form-element">
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Nuestros Patrocinadores</h2>
                <div class="flex-row">
                    <img src="./assets/Blog-post/patro 1.png" alt="insta1">
                    <img src="./assets/Blog-post/patro 2.png" alt="insta2">
                    <img src="./assets/Blog-post/patro 3.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="./assets/Blog-post/patro 4.png" alt="insta4">
                    <img src="./assets/Blog-post/patro 5.png" alt="insta5">
                    <img src="./assets/Blog-post/patro 6.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Nuestras Redes</h2>
                <p>.</p>
                <div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h6 class="text-gray">
                Copyright ©2023 All rights reserved | Valdocco Resorts
            </h6>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>-->

    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <div class="instagram">
            <img src="./assets/VRpequeño.png" height="100px" width="100px">
        </div>
        <div class="grid grid-flow-col gap-4">
          <a href="./abouut - EN.html" class="link link-hover">About us</a> 
          <a href="./Gatrooo.html" class="link link-hover">Our Gastronomy</a> 
          <a href="./Nueva pagina de comodidades.html" class="link link-hover">Amenities</a> 
          <a href="#" class="link link-hover">Homepage</a>
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
</body>

</html>