<?php
   include("./proceso_eventos/validarlogin.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domotic System</title>
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body>
    <div class="login-box">
        <img class="log"src="img/LogoDomotic.jpg" alt="Logo domotica">
        <h1>Ingresar</h1>
        <form  method="POST" action="./proceso_eventos/validarlogin.php">
            <!-- Usuario -->
            <label for="usuario" >Usuario</label>
            <input type="text" name="user" placeholder="Ingrese el usuario">

             <!-- Contraseña -->
             <label for="password" >Contraseña</label>
             <input type="password" name="password" placeholder="Ingrese la Contraseña">

             <button class="btn" type="submit">Log In</button>

        </form>
        

    </div>
    
</body>
</html>