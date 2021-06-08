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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PetShop</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="icon" href="../img/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
  </head>

  <body>
      <header>
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="../img/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li>
                                 <a href="../index.html">Inicio</a>
                              </li>
                              <li>
                                 <a href="../about.html">Acerca</a>
                              </li>
                              <li class="active">
                                 <a href="index_tienda.php">Productos y Servicios</a>
                              </li>
                              <li>
                                 <a href="../contact.html">Contacto</a>
                              </li>
                              <li>
                                 <a href="login.php">Iniciar Sesión</a>
                              </li>
                              <li>
                                 <a href="signup.php">Registrarse</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
      <div class="container" id="main">
         <div class="row">
            <?php
              require '../admin/autoload.php';
              $producto = new Kawschool\Producto;
              $info_productos = $producto->mostrar();
              $cantidad = count($info_productos);
              if($cantidad > 0){
               for($x =0; $x < $cantidad; $x++){
               $item = $info_productos[$x];
            ?>
            <div class="col-md-3">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <P class="text-center titulo-producto"><?php print $item['titulo'] ?></P>  
                  </div>
                  <div class="panel-body">
                     <?php
                        $foto = '../upload/'.$item['foto'];
                        if(file_exists($foto)){
                     ?>
                     <img src="<?php print $foto; ?>" class="img-responsive">
                     <?php }else{?>
                        <img src="../img/notfound.png" class="img-responsive">
                     <?php }?>
                  </div>
                  
                  <div class="panel-footer">
                     <a href="signup.php?id=<?php print $item['id'] ?>" class="btn btn-success btn-block">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Agregar
                     </a>
                  </div>
               </div>
            </div>

            <?php
               }
               }else{
            ?>
            <h4>NO HAY REGISTROS</h4>
            <?php 
               }
            ?>
         </div>
      </div>
      
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/plugin.js"></script>
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
   </body>
</html>
