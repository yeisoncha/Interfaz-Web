<?php
include "conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();
$id = $_GET['id'];
$sql = "SELECT dirección,habitaciones,house_code from viviendas where id='$id'";
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
    <label>Direccion</label>
    <p></p>
    <input type="text" name="txtdireccion" value="<?php echo $ver[0] ?>">
    <p></p>
    <label>Habitaciones</label>
    <p></p>
    <input type="text" name ="txthabitacion"  value="<?php echo $ver[1] ?>">
    <p></p>
    <label>Codigo</label>
    <p></p>
    <input type="text" name="txtcode"  value="<?php echo $ver[2] ?>">
    <p></p>
    <button>Agregar</button>



</form>
</body>
</html>