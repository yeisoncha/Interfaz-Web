<?php

    include "conexion.php";
    $ID_TARJ = $_GET["ID_TARJ"];

    $sql = "SELECT hab1,hab2,hab3 from estados where ID_TARJ=1";
    $mysqli = new mysqli($host, $user, $pw, $db); // Aqu� se hace la conexi�n a la base de datos.
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);
    $data = array("hab1" => $row[0], "hab2" => $row[1], "hab3" => $row[2]);
    $json = json_encode($data);
    echo($json);
?>