<?php
include "conexion.php";
include "metodos.php";

$direccion= $_POST["txtdireccion"];
$habitacion = $_POST["txthabitacion"];
$codigo= $_POST["txtcode"];
$id = $_POST['id'];


$datos = array($direccion, $habitacion, $codigo,$id);
$obj= new metodos();
if($obj->actualizarDatos($datos)==1){
    header("location:nuevo.php");
}else{
    echo "Fallo al agregar";
}
?>