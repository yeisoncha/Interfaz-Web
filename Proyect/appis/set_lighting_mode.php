<?php
    include "conexion.php";
    include "functions.php";

    //$data = json_decode(file_get_contents("php://input"), true); 
    $ID_TARJ = $_GET["ID_TARJ"];
    $mode = $_GET["mode"];
    //$ID_TARJ = $data["ID_TARJ"];
    //$mode = $data["mode"];

    $mysqli = new mysqli($host, $user, $pw, $db);

    $row = get_room_status($ID_TARJ,$mysqli);
    $hab1 = $row[0];
    $hab2 = $row[1];
    $hab3 = $row[2];
    if($hab1 == 0 && $hab2 == 0 && $hab3 == 0){
        $sql = "UPDATE estados SET modo=$mode WHERE ID_TARJ=$ID_TARJ";
        $result = $mysqli->query($sql);
        header("Location: /Interfaz-Web/Proyect/index/index.php");
    }
    else{
        $message = "Todas la luces deben estar apagadas";
        header("Location: /Interfaz-Web/Proyect/index/index.php");
    }

?>