<?php
session_start();
require 'funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
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
                              <li>
                                 <a href="about.php">Acerca</a>
                              </li>
                              <li>
                                 <a href="productos.php">Productos y Servicios</a>
                              </li>
                              <li class="active">
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
     
      <div class="contact-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="contactheading">
                     <h3>Contáctanos</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="index.php">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Nombre Completo" required="#" />
                                    <input type="email" name="email" placeholder="Correo Electrónico" required="#" />
                                     <input type="text" name="subject" placeholder="Asunto" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea class="wdt" placeholder="Comentario"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>Enviar</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60293.98980510462!2d-96.21133585708753!3d19.178844547997777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3414245ca78c5%3A0x18a4d642e936019b!2sVeracruz%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1620317330884!5m2!1ses-419!2smx" 
      width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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
                     <form action="index.html">
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