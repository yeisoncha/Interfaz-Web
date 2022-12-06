<?php
include 'conexion.php';


$mysqli = new mysqli($host,$user,$pw,$db);

//validamos por un if: si la variable que recibimos por POST llamada txtPrueba está asignada
if(isset($_POST['direccion'] ) && isset($_POST['numero_habitaciones'])){
    //Recibimos el valor del input
    //Para dejarlo en una variable sería:
    $direccion = $_POST['direccion'];
    $habitacion = $_POST['numero_habitaciones'];
    $sql = "INSERT INTO viviendas (id,dirección,habitaciones) VALUES ('','$direccion','$habitacion');";
    $rs= $mysqli->query($sql);
    
}else{
    //No se recibió valor del input
    echo("Dato no enviado");
}


?>