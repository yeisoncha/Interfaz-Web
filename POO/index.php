<?php
include "conexion.php";
include "metodos.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>

<div>
<form action="buscar.php" method = "post">
<input type="search" placeholder="Buscar con php" name="busqueda">
<br>
<button type="submit" name="enviar"> <b>buscar</b> </button>
</form>
</div>
<br>
<form action="insertar.php" method="post">
 
    <label>Nombre</label>
    <br>
    <input type="text" name="txtnombre">
    <br>
    <label>Identificacion</label>
    <br>
    <input type="text" name ="txtidentificacion">
    <br>
    <label>Direccion</label>
    <br>
    <input type="text" name="txtdireccion">
    <br>
    <label>Fecha Nacimiento</label>
    <br>
    <input type="date" name="txtnacimiento">
    <br>
    <label>Login</label>
    <br>
    <input type="text" name="txtlogin">
    <br>
    <label>password</label>
    <br>
    <input type="password" name="txtpassword">
    <br>
    <label>Tipo usuario</label>
    <br>
    <input type="text" name="txttipo_usuario">
    <br>
    <label>Id Tarjeta</label>
    <br>
    <input type="text" name="txttarjeta">
    <br>
    <label>Activo</label>
    <br>
    <input type="text" name="txtactivo">
    <br>
    <label>Codigo</label>
    <br>
    <input type="text" name="txtcodigo">
    <br><br>
    <button>Agregar</button>


 
</form>
<br><br>
<table style="border-collapse: collapse;" border="1">
        <tr>    
            <td>id</td>
            <td>Nombre</td>
            <td>identificacion</td>
            <td>Direccion</td>
            <td>Fecha Nacimiento</td>
            <td>Login</td>
            <td>Password</td>
            <td>Tipo usuario</td>
            <td>id_tarjeta</td>
            <td>Activo</td>
            <td>Codigo</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
<?php
$obj = new metodos();
$sql = "SELECT * from usuarios";
$datos = $obj->mostrarDatos($sql);

foreach($datos as $key)
{ ?>
    <tr>
            <td><?php echo $key["id"]?></td>
            <td><?php echo $key["nombre_completo"]?></td>
            <td><?php echo $key["identificacion"]?></td>
            <td><?php echo $key["direccion"]?></td> 
            <td><?php echo $key["fecha_nacimiento"]?></td> 
            <td><?php echo $key["login"]?></td> 
            <td><?php echo $key["passwd"]?></td> 
            <td><?php echo $key["tipo_usuario"]?></td> 
            <td><?php echo $key["id_tarjeta"]?></td> 
            <td><?php echo $key["activo"]?></td> 
            <td><?php echo $key["house_code"]?></td> 
            <td><a href="editar.php?id=<?php echo $key['id']?>">Actualizar</a></td>   
            <td><a href="eliminar.php?id=<?php echo $key['id']?>">Eliminar</a></td>
        </tr>
<?php
}


        
        ?>
</table>
</body>
</html>