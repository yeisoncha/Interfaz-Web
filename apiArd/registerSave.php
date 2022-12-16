<?php
    include "conexion.php";
    $ID_TARJ = $_GET["ID_TARJ"];
    $hab1 = $_GET["hab1"];
    $hab2 = $_GET["hab2"];
    $hab3 = $_GET["hab3"];
    $new_status = array(
        0    => $hab1,
        1  => $hab2,
        2  => $hab3,
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

        for ($i = 0; $i <= 2; $i++) {
            //if($row[$i] != $new_status[$i]){
                $id_room = $i+1;
                $sql1 = "INSERT INTO rooms_state (ID_TARJ, id_room, fecha, hora, on_off) VALUES ('$ID_TARJ', '$id_room', '$fecha','$hora','$new_status[$i]')";
                $result = $mysqli->query($sql1);
            //}
        }
        $sql2 = "UPDATE estados SET hab1 = $new_status[0] , hab2 = $new_status[1] , hab3 = $new_status[2] WHERE ID_TARJ='$ID_TARJ'";
        $result = $mysqli->query($sql2);
    }
?>