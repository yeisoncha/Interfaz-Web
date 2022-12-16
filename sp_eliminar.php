<?php
include "conexion.php";
include "metodos.php";

 $id = $_GET['id'];

 $obj = new metodos();
 if($obj->eliminarDatos($id)==1){
   header("location:nuevo.php");
 }else{
   echo "Fallo";
 }


?>