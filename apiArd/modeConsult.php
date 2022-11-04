<?php
    include "conexion.php";  // Conexi�n tiene la informaci�n sobre la conexi�n de la base de datos.

    $ID_TARJ = $_GET["ID_TARJ"];// 
    $mysqli = new mysqli($host, $user, $pw, $db); // Aqu� se hace la conexi�n a la base de datos.
    $sql = "SELECT modo from estados where ID_TARJ='$ID_TARJ'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);
    $modo = $row[0];
    echo($modo);

?>