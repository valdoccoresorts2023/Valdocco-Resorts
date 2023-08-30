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
    <title>Gastronomy - Valdocco Resorts</title>
    <link rel="shortcut icon" href="./assets/VRpequeño.png">

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

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    
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

             
             
             
                <li><a href="./rooms - EN.php">Habitaciones</a></li>
                <li><a href="./Gatrooo - EN.php">Gastronomia</a></li>
                <li><a href="./EventESPP.php">Eventos Especiales</a></li>
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
                            <h3 style="color: white; font-family: var(--Lexend); font-size: xx-large;">Bienvenidos a la</h3>
                            <h1 style="color: white;">Gastronomia de Valdocco Resorts</h1>
                            <br>
                            <br>
                            
                            <h3 style="color: white;">Administrador: '.$_SESSION['user1'].'</h3>
                            
                            <br>
                            <br>
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
                        <h6 style="color: white;">- -</h6>
                        <h3 style="color: white;">'.$_SESSION['user1'].'</h3>
                        <h6 style="color: white;">- -</h6>
                        <h2 style="color: white;"><i class="fas fa-clock"></i> Fecha y Hora Local:'.$hoy. ',' .$time.'GMT -6</h2>
                        </div>
                        </section>
                        </main>
                '; 
                }
       
       
       ?>


    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <!------------------------ Site Title ---------------------->
<main>
    <section id="sabores" data-wow-delay="0.3s" data-aos="fade-in" data-aos-delay="200">
        <h2>Menu</h2>
        <div class="fila">
            <div class="item" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                <div class="icono">
                    <img src="img/1.jpg" alt="">
                </div>
                <div class="info">
                    <h3>Breakfast</h3>
                    <p>Sunrise Delights: A Gourmet Start to Your Day</p>
                </div>
            </div>
            <div class="item" data-wow-delay="0.3s" data-aos="fade-in" data-aos-delay="200">
                <div class="icono">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="info">
                    <h3>Lunch</h3>
                    <p>Midday Temptations: Culinary Explorations to Savo</p>
                </div>
            </div>
            <div class="item" data-wow-delay="0.3s" data-aos="fade-left" data-aos-delay="200">
                <div class="icono">
                    <img src="img/3.jpg" alt="">
                </div>
                <div class="info">
                    <h3>Dinner</h3>
                    <p>Evening Elegance: Indulge in Exquisite Nighttime Flavors</p>
                </div>
            </div>
        </div>

        <div class="fila">
            <div class="item" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                <div class="icono">
                    <img src="img/4.jpg" alt="">
                </div>
                <div class="info">
                    <h3>Bevarages</h3>
                    <p>Sip and Savor: A Medley of Refreshing Libations</p>
                </div>
            </div>
            <div class="item" data-wow-delay="0.3s" data-aos="fade-in" data-aos-delay="200">
                <div class="icono">
                    <img src="img/5.jpeg" alt="">
                </div>
                <div class="info">
                    <h3>Cravings</h3>
                    <p>Whims of the Palate: Satisfy Your Culinary Desires</p>
                </div>
            </div>
            <div class="item" data-wow-delay="0.3s" data-aos="fade-left" data-aos-delay="200">
                <div class="icono">
                    <img src="img/6.jpg" alt="">
                </div>
                <div class="info">
                    <h3>Desserts</h3>
                    <p>Sweet Symphony: Decadence in Every Delectable Bite</p>
                </div>
            </div>
        </div>


    </section>
</main>
        <!------------x----------- Site Title ----------x----------->

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h4 class="section-title text-center text-primary text-uppercase">Breakfast</h4>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://hips.hearstapps.com/hmg-prod/images/desayuno-rico-saciante-sano-receta-aguacate-1592922190.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$5.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">fried egg with bread</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Try our rich egg bathed in sauce and served with bread and strawberries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://assets.unileversolutions.com/recipes-v2/230468.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$10.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Typical</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Typical breakfast of the house accompanied with bananas, beans and eggs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://www.clara.es/medio/2022/05/11/desayunos-sin-pan_daff90d9_1280x853.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$13.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Pancakes</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Rich Pancakes accompanied with fruits and honey to taste </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://img-global.cpcdn.com/recipes/320c360e31cb6bad/1200x630cq70/photo.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$9.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">fried egg with ham</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                            <p class="text-body mb-3">Delicious fried egg with ham accompanied with salad and tomato sauce </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://i0.wp.com/granvita.com/wp-content/uploads/2020/09/header_desayunosfaciles.jpg?fit=1920%2C1005&ssl=1" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$8.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Waffles</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Delicious waffles accompanied with fruits and maple syrup</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://buenazo.cronosmedia.glr.pe/original/2021/06/19/60ce595738c8d27673611edd.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$20.00</small>
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">OFERTA</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Grilled chicken pieces </h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Grilled chicken accompanied with tamales, potatoes and French</p>
                                <div class="d-flex justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
            <h4 class="section-title text-center text-primary text-uppercase">Lunch</h4>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://elucabista.com/wp-content/uploads/2016/11/Men%C3%BA_almuerzos.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$9.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Espaguetti</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Delicious spaghetti with meat and chili bathed in white sauce</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://gastronomiafeliz.com/wp-content/uploads/2023/01/18-3-1080x650.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$12.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Fried fish</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Fish accompanied with rice and chimol including lettuce and lemon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://cocina-casera.com/wp-content/uploads/2023/01/pollo-frito-crujiente-770x485.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$11.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">fried chicken</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Traditional fried chicken accompanied with ketchup sauce and French fries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://images.ctfassets.net/n7hs0hadu6ro/6kUb64UEfJR4BGAYkVfdfu/04e6e32488b47bd6ab3eecf14dac43f8/comida_china_agridulce.png?w=1024&h=683&fl=progressive&q=50&fm=jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$10.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">BBQ Chicken Spaghetti</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Spaghetti combined with barbecue chicken balls accompanied with salad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://cdn.sanity.io/images/jsdrzfkj/production-esmx/f4e2c09fadb6448eeac86dc6b680a46aefb6d54c-1200x800.jpg?w=800&h=533&fit=crop" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$12.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">chicken rolls</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Fried chicken stuffed rolls includes rice and salad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://www.guiaderecetas.com/static/images/categorias/normal/internacionales.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$13.00</small>
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">OFERTA</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Sushi</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Exquisite sushi with vegetables accompanied with wasabi and soy sauce </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h4 class="section-title text-center text-primary text-uppercase">Dinner</h4>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://cocina-casera.com/wp-content/uploads/2022/01/ensalada-de-pollo-casera.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$13.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Chicken in cream</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Cream chicken accompanied with mushroom salad </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://s1.abcstatics.com/media/gurmesevilla/2013/08/ensalada-caribena.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$11.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Chicken salad </h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Chicken salad with hearts of palm included with vegetables</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://laroussecocina.mx/wp-content/uploads/2022/03/040322_COVER.png" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$10.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Tacos</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Tacos with a diverse variety, beef, chicken and tongue</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://lacocinademasito.com/wp-content/uploads/2023/02/Burritos-de-carne-1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$10.99</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Burritos</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Delicious burritos filled with meat and vegetables, including beans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://img77.uenicdn.com/image/upload/v1661301725/business/dad4b121-b112-4824-809f-6489271c2e0d.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$13.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Tortas</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Delicious beef, chicken or mixed tortas accompanied with chili</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://assets.unileversolutions.com/recipes-v2/240600.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$10.00</small>
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">OFERTA</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">lasagna</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Delicious meat, beef, chicken or mushroom lasagna with melted cheese</p>
                                <div class="d-flex justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h4 class="section-title text-center text-primary text-uppercase">Craving</h4>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://comidasparaguayas.com/wp-content/uploads/2019/11/empanada-de-carne-paraguaya_700x465.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$3.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Salvadoran Pastries</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Salvadoran pastries stuffed with meat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://cdn.kiwilimon.com/brightcove/8463/8463.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$3.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Salvadoran Enchiladas</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Salvadoran beef or chicken enchiladas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://www.cocinavital.mx/wp-content/uploads/2018/08/tamal-de-elote-y-champin%CC%83ones-e1548083207880.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$4.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Corn tamal</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Corn tamales with cheese and cream</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://www.elsalvadormipais.com/wp-content/uploads/2017/01/tamales-pisques-salvadorenos.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$5.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Pisque tamales</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Pisque tamales stuffed with beans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://exclusivadigital.com.sv/wp-content/uploads/2021/03/FB_IMG_1615931078454.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$2.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Empanadas</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Bean or milk empanadas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://unareceta.com/wp-content/uploads/2015/01/yuca-frita.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$1.00</small>
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">OFERTA</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Fried yucca</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Fried yucca with pepesca or pork</p>
                                <div class="d-flex justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h4 class="section-title text-center text-primary text-uppercase">Bevarages</h4>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://www.196flavors.com/wp-content/uploads/2018/09/horchata-1-FP-500x375.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$1.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Horchata</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Coconut or morro horchata</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://cdn.elcocinerocasero.com/imagen/receta/1000/2022-06-04-12-18-12/limonada-casera.jpeg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$1.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Lemonade</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Fresh artisan limer lemonade</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://www.102nueve.com/wp-content/uploads/2019/07/taza-te-verde.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$1.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Tea</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Lemon, peach or orange tea.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://lacocinadevero.com/wp-content/uploads/2020/06/daiquiri-de-fresa1-1024x732.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$1.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Frozen</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Strawberry, mango or peach frozen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://cdn.elcocinerocasero.com/imagen/receta/1000/2022-11-29-18-04-45/chocolate-a-la-taza-casero.jpeg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$1.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Chocolate</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">hot chocolate </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/4/45/A_small_cup_of_coffee.JPG" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">OFERTA</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Coffee</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">artisan coffee</p>
                                <div class="d-flex justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                    <h4 class="section-title text-center text-primary text-uppercase">Desserts</h4>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://assets.elgourmet.com/wp-content/uploads/2023/03/cover_w57l6qc9hj_iv-29-dic-54-1024x683.jpg.webp" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$5.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Cheesecake</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">A piece of cheesecake</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://cdn-3.expansion.mx/dims4/default/230f918/2147483647/strip/true/crop/1254x836+0+0/resize/1200x800!/format/webp/quality/60/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F2c%2F79%2F5163d9ea4de28ba0335ae014855b%2Fistock-682136912.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$1.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Ice Cream</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Many flavors of Ice cream</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://assets.unileversolutions.com/recipes-v2/217393.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$6.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Chocolate Cake</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">A piece of chocolate cake </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-left" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://img-global.cpcdn.com/recipes/320c360e31cb6bad/1200x630cq70/photo.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$9.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">fried egg with ham</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                            </div>
                            <p class="text-body mb-3">Delicious fried egg with ham accompanied with salad and tomato sauce </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-in" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://i0.wp.com/granvita.com/wp-content/uploads/2020/09/header_desayunosfaciles.jpg?fit=1920%2C1005&ssl=1" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$8.00</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Waffles</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Delicious waffles accompanied with fruits and maple syrup</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-right" data-aos-delay="200">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="https://buenazo.cronosmedia.glr.pe/original/2021/06/19/60ce595738c8d27673611edd.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$20.00</small>
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">OFERTA</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Grilled chicken pieces </h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Grilled chicken accompanied with tamales, potatoes and French</p>
                                <div class="d-flex justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        

    <section class="container">
        <div class="site-content">
        <div class="posts">
        <div class="pagination flex-row">
            <a href="./Nueva pagina de comodidades - EN.html"><i class="fas fa-chevron-left"></i></a>
            <a href="./Index - EN.html" class="pages">1</a>
            <a href="./Nueva pagina de comodidades - EN.html" class="pages">2</a>
            <a href="#" class="pagina">3</a>
            <a href="./rooms - EN.html.html" class="pages">4</a>
            <a href="./abouut - EN.html" class="pages">5</a>
            <a href="./rooms - EN.html.html"><i class="fas fa-chevron-right"></i></a>
        </div>
        </div>
        </div>
    </section>
        <!-- Room End -->


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
          <a href="./Gatrooo - EN.html" class="link link-hover">Our Gastronomy</a> 
          <a href="./Nueva pagina de comodidades.html" class="link link-hover">Amenities</a> 
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
</body>

</html>