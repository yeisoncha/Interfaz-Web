<?php
include "conexion.php";
include "metodos.php";

$nombre = $_POST["txtnombre"];
$identificacion = $_POST["txtidentificacion"];
$direccion = $_POST["txtdireccion"];
$nacimiento = $_POST["txtnacimiento"];
$login = $_POST["txtlogin"];
$password = $_POST["txtpassword"];
$tipo_usuario= $_POST["txttipo_usuario"];
$tarjeta = $_POST["txttarjeta"];
$activo = $_POST["txtactivo"];
$codigo = $_POST["txtcodigo"];
$id = $_POST['id'];

$datos = array($nombre, $identificacion, $direccion,$nacimiento,$login,$password,$tipo_usuario,$targeta,$codigo,$id);
$obj= new metodos();
if($obj->insertarDatos($datos)==1){
    header("location:index.php");
}else{
    echo "Fallo al agregar";
}
?>