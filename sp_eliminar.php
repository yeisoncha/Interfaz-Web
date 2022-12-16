<?php
 $ID = $_GET['id'];

 $cnx = mysqli_connect("localhost","root","","newiot");
 $sql = "DELETE  FROM viviendas where id like $ID";
 $rta = mysqli_query($cnx,$sql);
 if (!$rta){
    echo "No se elimino";
 }
 else{
    header("Location: inicio.php");
 }
?>