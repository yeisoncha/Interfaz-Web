<?php


$server = "localhost";

$username = "root";

$password = "";

$database = "sistema_domotico";

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
}
    catch(PDOException $e){
    die('Connected failed: '.$e->getMessage());

}

?>