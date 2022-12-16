<?php
    function connect(){
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "labiii";
        return new mysqli($host, $user, $pw, $db); 
    }

?>
