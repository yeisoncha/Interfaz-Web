<?php
    session_start();
    require "database.php";
    if(!empty($_POST['user'])&& !empty($_POST['password'])){
        // Realizamos la consulta a la base de datos
        $user = $_POST['user'];
        $records =  $conn ->prepare('SELECT id,login,password FROM usuarios WHERE login=:user');
        $records->bindParam(':user', $_POST['user']);
        echo ($_POST['password']);
        echo ($_POST['user']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $message = '';
        // echo (count($results));
        // echo ($results[0]);
        // echo $results[1];
        // echo $results[2];
        if(count($results)>0 && password_verify($_POST['password'],$results['password'])){
            $_SESSION['user_id']= $results['id'];
            header('Locationn: /php-login');
        }else{
            $message = 'Usuario no registrado';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php require 'partials/header.php' ?>
    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>
    <form action="login.php" method="POST">
    <label for="user"> Ingrese Usuario</label>
    <input name="user" type="text" placeholder="Ingrese su nombre de usuario">
    <label for="password">Ingrese Contraseña</label>
    <input name="password" type="password" placeholder="Ingrese su contraseña">
    <button type="submit">Iniciar Sesión</button>
    

    </form>
</body>
</html>