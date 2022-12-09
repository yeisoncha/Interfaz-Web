<?php

    include "conexion.php";

    $mode = $_GET["mode"];
    $id_tarj = $_GET["id_tarj"];
    $sql = "SELECT hab1,hab2,hab3 from estados where id_tarjeta=1";
    $mysqli = new mysqli($host, $user, $pw, $db);
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);
    $hab1 = $row[0]; 
    $hab2 = $row[1];
    $hab3 = $row[2];
    if($hab1 == 0 and $hab2 ==0 and $hab3 == 0){
        $sql2 = "UPDATE estados set modo=$mode where id_tarjeta=3";	// Update present status to database
        if($mysqli->query($sql2)===TRUE){
            echo("ok");
        }
        else{
            echo("failed");
        }
    }

?>