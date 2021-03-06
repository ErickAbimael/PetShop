
<?php
session_start();
require 'funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/estilos.css">
   </head>

   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="../img/loading.gif" alt="" /></div>
      </div>
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
                              <li class="active">
                                 <a href="index.php">Inicio</a>
                              </li>
                              <li>
                                 <a href="about.php">Acerca</a>
                              </li>
                              <li>
                                 <a href="productos.php">Productos y Servicios</a>
                              </li>
                              <li>
                                 <a href="contact.php">Contacto</a>
                              </li>
                              <li>
                                 <a href="logout.php">Cerrar Sesi??n</a>
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

      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="../img/slider_1.webp" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="../img/slider_2.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="../img/slider_3.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="../img/slider_4.jpg" alt="#" />
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>

               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h4>Lo m??s destacado</h4>
                     <h3>Productos y Servicios</h3>
                     <p ALIGN="JUSTIFY">Cuando se trata de mantener felices a las mascotas, la mayor??a estamos de acuerdo en que esto implica proporcionarles lo esencial: comida nutritiva, juguetes divertidos, una cama c??moda y mucho amor. </p>
                     <div class="button_section">
                        <a href="about.php">Leer M??s...</a>
                        <a href="contact.php">??Cont??ctanos!</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>Acerca <span class="orange_color">PetShop</span></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <img src="../img/blog1.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>??Quienes Somos?</h4>
                     <h5>27  ABRIL  2021</h5>
                     <p ALIGN="JUSTIFY">Estamos aqu?? para brindar algo m??s que suministros y servicios;  al ser la cadena de tiendas de mascotas l??der en el mercado mexicano
                        y ofrecer la mayor variedad de animales, alimento, accesorios y medicinas para ellos, nos convertimos en los expertos del cuidado y bienestar
                        animal y lo compartimos con todos los due??os de mascotas en M??xico.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="../img/blog2.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>??Qu?? ofrecemos?</h4>
                     <h5>27  ABRIL  2021</h5>
                     <p ALIGN="JUSTIFY">PetShop le ofrece servicios de ba??o y corte tanto para perros (peque??os, medianos, grandes y cachorros), gatos y conejos. Asimismo, 
                        ofrecemos hospedajes para mascotas y d??as de campo, que incluyen todo lo necesario para que t?? y tu mascota puedan pasar momentos llenos de diversi??n 
                        y alegr??a. Asimismo, puedes encontrar otros productos como juguetes, ropa para cada tama??o de mascota, comedores y bebedores, art??culos de cuidado e higiene, 
                        camas, casetas, collares, correas, entre otros.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="about.php">Conocer m??s</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="section layout_padding dark_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>??Qu?? comprar?</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <img src="../img/marketing_img.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3 class="white_font">Nuestros mejores productos y servicios</h3>
                     <h5 class="grey_font">27  ABRIL  2021</h5>
                     <p ALIGN="JUSTIFY" class="white_font">A trav??s de nuestro Petshop puedes otorgar a tu mascota la oportunidad de crecer
                        fuerte y sana al adquirir las mejores marcas de alimentos para perros, gatos, roedores y peces. Adquiere
                        alimentos especiales para cada etapa de vida de tu mascota, as?? como para cada raza...</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="section layout_padding">
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
                     <h3>Navegaci??n rapida</h3>
                     <ul>
                        <li><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Inicio</a></li>
                        <li><a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Acerca</a></li>
                        <li><a href="productos.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Productos y Servicios</a></li>
                        <li><a href="contact.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Cont??ctanos</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="footer_links">
                     <h3>Cont??ctanos</h3>
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
                  <p>Copyright ?? 2021 Design by Equipo 1 - ITO</p>
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