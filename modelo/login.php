<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: index.php");
    } else {
      $message = 'Usuario o contraseña incorrectos, intenta de nuevo';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/fevicon.png" type="image/gif" />
    <title>Iniciar Sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_login.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
  </head>
  <body>
    <?php require 'header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="content"> 
    <h1>Iniciar sesión</h1>
    <span>¿No tienes cuenta? <a href="signup.php">Crea una nueva</a></span>
    <br>
    <br>
    <span>Administrador <a href="../administrador/index.html" class="btn btn-info">Inicia Sesión</a></span>
    <br>
    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingrese su correo electrónico">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Ingresar">
    </form>
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