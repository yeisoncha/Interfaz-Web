<?php
    
    function get_status($ID_TARJ , $mysqli){
        $sql = "SELECT modo from estados where ID_TARJ=$ID_TARJ";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array(MYSQLI_NUM);
        $mode =  $row[0];
        $room_status = get_room_status($ID_TARJ,$mysqli);
        $room_status_json = json_encode($room_status);
        header("Location: /Interfaz-Web/Proyect/index.php?mode=$mode&room_status=$room_status_json");
        
    }

    function get_room_status($ID_TARJ , $mysqli){
        $sql = "SELECT hab1,hab2,hab3 from estados where ID_TARJ=$ID_TARJ";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array(MYSQLI_NUM);
        return $row;
    }
?>