<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = '¡Bienvenido, ya estas registrado!';
    } else {
      $message = 'Ya existe una cuenta con este usuario, Inicia sesión';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/fevicon.png" type="image/gif" />
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_login.css">
  </head>
  <body>

    <?php require 'header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="content"> 
      <h1>Registrarse</h1>
      <span>Ya tienes cuenta <a href="login.php"> Inicia Sesión</a></span>
      
      <form action="signup.php" method="POST">
        <input name="email" type="text" placeholder="Ingrese su correo electrónico">
        <input name="password" type="password" placeholder="Ingrese su contraseña">
        <input name="confirm_password" type="password" placeholder="Confirme su contraseña">
        <input type="submit" value="Registrarse">
      </form>
    </div>
  </body>
</html>
