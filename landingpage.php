<?php
session_start();
require "database.php";
    if(isset($_SESSION['user_id'])){
        $records = $conn -> prepare('SELECT id,login,password FROM usuarios WHERE id=:id');
        $records-> bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records-> fetch(PDO::FETCH_ASSOC);
        
        $user = null;
        
        if(count($results)>0){
            $user = $results;
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'partials/header.php' ?>
    <?php if(!empty($user)): ?>
    <br>Bienvenido. <?= $user['user']?>
    <br>Usted ha iniciado sesión
    <a href="logout.php">Cerrar sesión</a>
    <?php else: ?>
        <h1>Please login or signup</h1>
        <a href="login.php">Login</a> or
        <a href="signup.php">SignUp</a>
    <?php endif; ?>
    
</body>
</html>