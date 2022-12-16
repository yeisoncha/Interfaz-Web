<?php
        include "conexion.php";
        include "functions.php";

        $ID_TARJ = $_GET["ID_TARJ"];
        $ID_TARJ = 1;

        $mysqli = new mysqli($host, $user, $pw, $db);
        
        $mode = get_mode_status($ID_TARJ,$mysqli);
        $room_status = get_room_status($ID_TARJ,$mysqli);
        

        header("Location: /Interfaz-Web/Proyect/index/index.php?mode=$mode&room_status=$room_status[0]");
    
?>