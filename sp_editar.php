<?php
$ID = $_POST['id'];
 $Direccion = $_POST['dirección'];
 $Habitaciones = $_POST['habitaciones'];
 $Codigo = $_POST['house_code'];


 $cnx = mysqli_connect("localhost","root","","newiot");
 $sql = "UPDATE viviendas set dirección='$Direccion', habitaciones='$Habitaciones', house_code='$Codigo' where id like $ID";
 $rta = mysqli_query($cnx,$sql);
 if (!$rta){
    echo "No se Actualizó";
 }
 else{
    header("Location: inicio.php");
 }
?>