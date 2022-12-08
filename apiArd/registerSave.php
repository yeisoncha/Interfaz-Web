<?php
    include "conexion.php";
    $ID_TARJ = $_GET["ID_TARJ"];
    $sens1 = $_GET["sens1"];
    $sens2 = $_GET["sens2"];
    $sens3 = $_GET["sens3"];
    $new_status = array(
        1    => $sens1,
        2  => $sens2,
        3  => $sens3,
    );
    $mysqli = new mysqli($host, $user, $pw, $db);
    $sql = "SELECT hab1 , hab2 , hab3 from estados where ID_TARJ='$ID_TARJ'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);
    $num_row = count($row);
    if($num_row > 0 ){
        date_default_timezone_set('America/Bogota');
        $fecha = date("Y-m-d");
        $hora = date("h:i:s");

        for ($i = 1; $i <= 3; $i++) {
            if($row[$i+1] != $new_status[$i]){
                $sql1 = "INSERT INTO rooms_state (ID_TARJ, id_room, fecha, hora, on_off) VALUES ('$ID_TARJ', '$i', '$fecha','$hora','$new_status[$i]')";
                $result = $mysqli->query($sql1);
            }
        }
        $sql2 = "UPDATE estados SET hab1 = $new_status[1] , hab2 = $new_status[2] , hab3 = $new_status[3] WHERE ID_TARJ='$ID_TARJ'";
        $result = $mysqli->query($sql1);
    }
?>