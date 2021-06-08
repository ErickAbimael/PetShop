<?php
session_start();
require 'funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <title>PetShop</title>

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../img/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
   </head>

   <body class="main-layout">
      <header>
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="../img/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                        <ul class="menu-area-main">
                              <li>
                                 <a href="index.php">Inicio</a>
                              </li>
                              <li class="active">
                                 <a href="about.php">Acerca</a>
                              </li>
                              <li>
                                 <a href="productos.php">Productos y Servicios</a>
                              </li>
                              <li>
                                 <a href="contact.php">Contacto</a>
                              </li>
                              <li>
                                 <a href="logout.php">Cerrar Sesión</a>
                              </li>
                              <li>
                                 <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadProducto(); ?></span></a>
                              </li> 
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
      <div class="About-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="aboutheading">
                     <h3>Acerca de <span class="orange_color">PetShop</span></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <img src="../img/blog1.png" alt="#" />
               </div>

               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>¿Quienes Somos?</h4>
                     <h5>27  ABRIL  2021</h5>
                     <p ALIGN="JUSTIFY">Estamos aquí para brindar algo más que suministros y servicios;  al ser la cadena de tiendas de mascotas líder en el mercado mexicano
                        y ofrecer la mayor variedad de animales, alimento, accesorios y medicinas para ellos, nos convertimos en los expertos del cuidado y bienestar
                        animal y lo compartimos con todos los dueños de mascotas en México.
                     </p>
                  </div>
               </div>

            </div>

            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="../img/blog2.png" alt="#" />
               </div>

               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>¿Qué ofrecemos?</h4>
                     <h5>27  ABRIL  2021</h5>
                     <p ALIGN="JUSTIFY">PetShop le ofrece servicios de baño y corte tanto para perros (pequeños, medianos, grandes y cachorros), gatos y conejos. Asimismo, 
                        ofrecemos hospedajes para mascotas y días de campo, que incluyen todo lo necesario para que tú y tu mascota puedan pasar momentos llenos de diversión 
                        y alegría. Asimismo, puedes encontrar otros productos como juguetes, ropa para cada tamaño de mascota, comedores y bebedores, artículos de cuidado e higiene, 
                        camas, casetas, collares, correas, entre otros.
                     </p>
                  </div>
               </div>

            </div>

            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="../img/blog3.jpg" alt="#" />
               </div>

               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Visión</h4>
                     <h5>27  ABRIL  2021</h5>
                     <p ALIGN="CENTER"><strong>Enriquecemos tu vida y la de tu maskota.</strong></p>
                     <p ALIGN="center">--------------------------------------------------</p>
                     <p ALIGN="JUSTIFY">Creemos que las mascotas nos hacen mejores personas porque 
                        enriquecen nuestras vidas y fortalecen nuestras bondades, así nace nuestra misión
                     </p>
                  </div>
               </div>
            </div>

            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="../img/blog4.jpg" alt="#" />
               </div>

               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Misión</h4>
                     <h5>27  ABRIL  2021</h5>
                     <p ALIGN="CENTER"><strong>Ser la cadena de tiendas especializada líder en el mercado de las mascotas en México.</strong></p>
                     <p ALIGN="center">--------------------------------------------------</p>
                     <p ALIGN="JUSTIFY">La familia PetShop está formada por amantes de las mascotas cuyo compromiso es ser siempre el mejor aliado de la relación que una
                         mascota tiene con su dueño, esto nos ha permitido lograr día a día nuestra visión.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="../img/footer_logo.png" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="../img/location_icon.png" alt="#" /></span><span class="text_cont">Constituyentes Veracruz<br>Veracruz</span></li>
                     <li><span><img src="../img/phone_icon.png" alt="#" /></span><span class="text_cont">005-307-0145<br>005-307-0146</span></li>
                     <li><span><img src="../img/mail_icon.png" alt="#" /></span><span class="text_cont">PetShop@gmail.com<br>support@gmail.com</span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>

               <div class="col-lg-4 col-md-6">
                  <div class="footer_links">
                  <h3>Navegación rapida</h3>
                     <ul>
                        <li><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Inicio</a></li>
                        <li><a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Acerca</a></li>
                        <li><a href="productos.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Productos y Servicios</a></li>
                        <li><a href="contact.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Contáctanos</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-lg-4 col-md-6">
                  <div class="footer_links">
                     <h3>Contáctanos</h3>
                     <form action="index.php">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Tu nombre" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Asunto" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Mensaje"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Enviar</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2021 Design by Equipo 1 - ITO</p>
               </div>
            </div>
         </div>
      </div>
      
      
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/plugin.js"></script>
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
   </body>
</html>