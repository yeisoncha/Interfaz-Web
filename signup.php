<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['user']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (login, password) VALUES (:user, :password)";
    // prepare() ejecuta la consulta SQL
    $stmt = $conn->prepare($sql);
    // bindParam(Es para vincular los parámetros)
    $stmt->bindParam(':user', $_POST['user']);
    // password_hash,  codifica el parametro password
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">
      <label for="user"> Nombre de Usuario</label>
      <input name="user" type="text" placeholder="Ingrese su nombre de usuario">
      <label for="password">Ingrese Contraseña</label>
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <label for="confirm_password">Confirmar Contraseña</label>
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
      <button type="submit">Registrarse</button>
      
    </form>

  </body>
</html>