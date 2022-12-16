<?php
include "conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();
$id = $_GET['id'];
$sql = "SELECT * from usuarios where id='$id'";
$result = mysqli_query($conexion, $sql);
$ver = mysqli_fetch_row($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body>
<form action="actualizar.php" method="post">
    <input type="text" hidden="" value="<?php echo $id?>" name="id">
    <label>Nombre</label>
    <p></p>
    <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
    <p></p>
    <label>identificacion</label>
    <p></p>
    <input type="text" name ="txtidentificacion"  value="<?php echo $ver[1] ?>">
    <p></p>
    <label>Direccion</label>
    <p></p>
    <input type="text" name="txtdireccion"  value="<?php echo $ver[2] ?>">
    <p></p>
    <label>Nacimiento</label>
    <p></p>
    <input type="date" name="txtnacimiento"  value="<?php echo $ver[3] ?>">
    <p></p>
    <label>Login</label>
    <p></p>
    <input type="text" name="txtlogin"  value="<?php echo $ver[4] ?>">
    <p></p>
    <label>Password</label>
    <p></p>
    <input type="password" name="txtpassword"  value="<?php echo $ver[5] ?>">
    <p></p>
    <label>Tipo usuario</label>
    <p></p>
    <input type="text" name="txttipo_usuario"  value="<?php echo $ver[6] ?>">
    <p></p>
    <label>Tarjeta</label>
    <p></p>
    <input type="text" name="txttarjeta"  value="<?php echo $ver[7] ?>">
    <p></p>
    <label>codigo</label>
    <p></p>
    <input type="text" name="txtcodigo"  value="<?php echo $ver[8] ?>">
    <p></p>
    <button>Agregar</button>



</form>
</body>
</html>