<?php
include "conexion.php";
include "metodos.php";

 $direccion = $_POST['txtdireccion'];
 $habitaciones = $_POST['txthabitacion'];
 $codigo = $_POST['txtcode'];

 $datos = array($direccion, $habitaciones, $codigo);
 $obj= new metodos();
 if($obj->insertarDatos($datos)==1){
     header("location:nuevo.php");
 }else{
     echo "Fallo al agregar";
 }
 
?>