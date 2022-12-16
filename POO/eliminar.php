<?php
include "conexion.php";
include "metodos.php";

$id = $_GET['id'];

$obj= new metodos();
if($obj->eliminarDatos($id)==1){
    header("location:index.php");
}else{
    echo "Fallo al agregar";
}
?>