<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/inicio.css">
    <title>Nueva Casa</title>
</head>
<header>
<a href="#" class="logo">
        <span>Sistema domotico</span></a>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="crear">Crear casa</a>
            <a href="#Usuario123">Usuario123</a>
        </nav>
</header>
<body>
    <div>
        <form action="sp_insertar.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar Datos</td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="dirección" id=""></td>
                </tr>
                <tr>
                    <td>Numero De Habitaciones:</td>
                    <td><input type="text" name="habitaciones" id=""></td>
                </tr>
                <tr>
                <td>Codigo:</td>
                    <td><input type="text" name="house_code" id=""></td>
                </tr>
                <tr>
                    <td><button type="submit">Guardar</button>
                </tr>      
        </form>
    </div>
    
</body>
</html>