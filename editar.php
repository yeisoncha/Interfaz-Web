<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/inicio.css">
    <title>Editar Casa</title>
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
<?php
$ID = $_GET['id'];
$Direccion = $_GET['dirección'];
$Habitaciones = $_GET['habitaciones'];
$Codigo = $_GET['house_code'];
?>
    <div>
        <form action="sp_editar.php" method="get">
            <table border="1">
                <tr>
                    <td>Ingresar Datos</td>
                    <td><input type="text" name="id" id="" value="<?=$ID?>"></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="dirección" id="" value="<?=$Direccion?>"></td>
                </tr>
                <tr>
                    <td>Numero De Habitaciones:</td>
                    <td><input type="text" name="habitaciones" id="" value="<?=$Habitaciones?>"></td>
                </tr>
                <tr>
                <td>Codigo:</td>
                    <td><input type="text" name="house_code" id="" value="<?=$Codigo?>"></td>
                </tr>
                <tr>
                    <td><button type="submit">Actualizar</button>
                    <td><a href="inicio.php">Cancelar</a></td>
                </tr>      
        </form>
    </div>
    
</body>
</html>