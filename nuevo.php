<?php
include "conexion.php";
include "metodos.php";
?>

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
 
    <label>Direccion</label>
    <p></p>
    <input type="text" name="txtdireccion">
    <p></p>
    <label>Habitaciones</label>
    <p></p>
    <input type="text" name ="txthabitacion">
    <p></p>
    <label>House_code</label>
    <p></p>
    <input type="text" name="txtcode">
    <p></p>
    <button>Agregar</button>


 
    </form>
    </div>
    <br><br>
    <table style="border-collapse: collapse;" border="1">
        <tr>    
            <td>id</td>
            <td>direccion</td>
            <td>Habitaciones</td>
            <td>Codigo</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
<?php
$obj = new metodos();
$sql = "SELECT id,dirección,habitaciones,house_code from viviendas";
$datos = $obj->mostrarDatos($sql);

foreach($datos as $key)
{ ?>
    <tr>
            <td><?php echo $key["id"]?></td>
            <td><?php echo $key["dirección"]?></td>
            <td><?php echo $key["habitaciones"]?></td>
            <td><?php echo $key["house_code"]?></td> 
            <td><a href="editar.php?id=<?php echo $key['id']?>">Editar</a></td>   
            <td><a href="sp_eliminar.php?id=<?php echo $key['id']?>">Eliminar</a></td>
        </tr>
<?php
}


        
        ?>
</table>
</body>
</html>