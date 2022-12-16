<?php
include("./conexion.php");

$mysqli = new mysqli($host,$user,$pw,$db);

$user = $_POST["user"];
$password = $_POST["password"];

$passwd_comp = md5($password);

session_start();
$_SESSION["user"] = $user;

$consulta = "SELECT * FROM usuarios where login='$user' and activo='1'";
$rs= $mysqli->query($consulta);
$row1 = $rs->fetch_array(MYSQLI_NUM);
$filas=$rs->num_rows;

if ($filas > 0)
  {
    $passwdc = $row1[6];

    if ($passwdc == $passwd_comp)
      {
        $_SESSION["autenticado"]= "SIx3";
        $tipo_usuario = $row1[7];
        $nombre_usuario = $row1[1];
        $sql2 = "SELECT * from tipo_usuario where id='$tipo_usuario'";
        $result2 = $mysqli->query($sql2);
        $row2 = $result2->fetch_array(MYSQLI_NUM);
        $desc_tipo_usu = $row2[1];
        $_SESSION["tipo_usuario"]= $desc_tipo_usu;
        $_SESSION["nombre_usuario"]= $nombre_usuario;  
        $_SESSION["id_usuario"]= $row1[0];;  
        
        if ($tipo_usuario == 1){
            header("Location: /Interfaz-Web/viviendas.php");
            //echo("administrador");
        }else if($tipo_usuario == 2){
            header("Location: /Interfaz-Web/index.php");
            //echo("habitante");
        }
            
      }
    else 
     {
      header('Location: /Interfaz-Web/Login.php?mensaje=1');
      //echo("password incorrecta");
     }
  }
else
  {
    header('Location: /Interfaz-Web/Login.php?mensaje=2');
    //echo("no exite");
 }  
?>
