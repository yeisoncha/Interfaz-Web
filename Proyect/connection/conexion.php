<?php
    function connect(){
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "newiot";
        return new mysqli($host, $user, $pw, $db); 
    }

?>
