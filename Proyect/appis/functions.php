<?php
    
    function get_status($ID_TARJ , $mysqli){
        $sql = "SELECT modo from estados where ID_TARJ=$ID_TARJ";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array(MYSQLI_NUM);
        $mode =  $row[0];
        $room_status = get_room_status($ID_TARJ,$mysqli);
        $room_status_json = json_encode($room_status);
        header("Location: /Interfaz-Web/index.php?mode=$mode&room_status=$room_status_json");
        
    }

    function get_room_status($ID_TARJ , $mysqli){
        $sql = "SELECT hab1,hab2,hab3 from estados where ID_TARJ=$ID_TARJ";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array(MYSQLI_NUM);
        return $row;
    }

    function set_mode($ID_TARJ, $mode, $mysqli){
        $ID_TARJ = $_GET["ID_TARJ"];
        $mode = $_GET["mode"];
        $row = get_room_status($ID_TARJ,$mysqli);
        $hab1 = $row[0];
        $hab2 = $row[1];
        $hab3 = $row[2];
        if($hab1 == 0 && $hab2 == 0 && $hab3 == 0){
            $sql = "UPDATE estados SET modo=$mode WHERE ID_TARJ=$ID_TARJ";
            $result = $mysqli->query($sql);
            header("Location: /Interfaz-Web/index.php");
        }
        else{
            $message = "Todas la luces deben estar apagadas";
            header("Location: /Interfaz-Web/Proyect/index/index.php");
        }
    }
?>