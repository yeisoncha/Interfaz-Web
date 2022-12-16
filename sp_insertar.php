<?php
 $Direccion = $_POST['dirección'];
 $Habitaciones = $_POST['habitaciones'];
 $Codigo = $_POST['house_code'];


 $cnx = mysqli_connect("localhost","root","","labnew");
 $sql = "INSERT INTO viviendas(dirección,habitaciones,house_code) VALUES('$Direccion','$Habitaciones','$Codigo')";
 $rta = mysqli_query($cnx,$sql);
 if (!rta){
    echo "No se inserto";
 }
 else{
    header("Location: inicio.php");
 }
?>