<?php
include "conexion.php";  // Conexi�n tiene la informaci�n sobre la conexi�n de la base de datos.

$hab1 = $_GET["hab1"];
$hab1 = $_GET["hab2"];
$hab1 = $_GET["hab3"];
$modo = $_GET["modo"]; 
$ID_TARJ = $_GET["ID_TARJ"];// el dato de humedad que se recibe aqu� con GET denominado humedad, es enviado como 
//parametro en la solicitud que realiza la tarjeta microcontrolada



$mysqli = new mysqli($host, $user, $pw, $db); // Aqu� se hace la conexi�n a la base de datos.

//date_default_timezone_set('America/Bogota'); // esta l�nea es importante cuando el servidor es REMOTO y est� 
//ubicado en otros pa�ses como USA o Europa. Fija la hora de Colombia para que grabe correctamente el dato de fecha y
// hora con CURDATE y CURTIME, en la base de datos.

//$fecha = date("Y-m-d");
//$hora = date("h:i:s");

$sql1 = "INSERT into modos (ID_TARJ,hab1,hab2,hab3,modo,fecha,hora) VALUES ('$ID_TARJ', '$hab1','$hab2','$hab3', '$modo', CURDATE(),CURTIME())"; // Aqu� se ingresa el valor recibido a la base de datos.
echo "sql1...".$sql1; // Se imprime la cadena sql enviada a la base de datos, se utiliza para depurar el programa php, en caso de alg�n error.
$result1 = $mysqli->query($sql1);
echo "result es...".$result1; // Si result es 1, quiere decir que el ingreso a la base de datos fue correcto.

?>
