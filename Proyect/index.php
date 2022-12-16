<?php
    include "connection/conexion.php";
    include "appis/functions.php";
    $mysqli = connect();
    $ID_TARJ = 1;
    if(!isset($_GET['mode'])){
        get_status($ID_TARJ,$mysqli);
    }
    $mode = $_GET['mode'];
    if($mode == 0){
        $mode = " Modo Remoto";
    }
    else if($mode == 1){

    }
    else if($mode == 2){

    }
    $room_status_json = $_GET['room_status'];
    $room_status = json_decode($room_status_json);
    $hab1 = $room_status[0];
    $hab2 = $room_status[1];
    $hab3 = $room_status[2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domotic_ System</title>
    <link rel="stylesheet"  type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<header>
    <a class="logo">
        <span>Sistema domótico</span></a>
        <div class="Iluminacion">
        <li><a>Modo de iluminacion actual: <span><?php echo($mode)?></span></a></li></p></a>
            
        </div>
          <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
             <nav class="navbar">
                
            <a href="#inicio">inicio</a>
            <a href="#modo">habitaciones</a>
            <a href="#login">User1</a>
        </nav>
       
</header>
<body>
    <section class="inicio" id="inicio">
        <div class="content">
            <h3>ILUMINA<span> TU HOGAR</span></h3>
           <!-- <a href="#" class="btn">Cambiar habitacion</a>-->
           <ul class="navegacion">
           <li>
            
            <a>Modos de Iluminación</a>   
            
            <ul>
            <form action="hola" method = "get">
                    <button class="btn" type="submit" name = "MODE" value="0">Modo Remoto</button>
                    <button class="btn" type="submit" name = "MODE" value="1">Modo Automatico</button>
                    <button class="btn" type="submit" name = "MODE" value="2">Modo Sensado</button>
            </form>
            </ul>
              
            
            
            </li>    
                    <li><a href="#">Encender bombilla</a>
                    <ul>
                           <li><a href="#2">Habitación 1</a>
                                <ul>
                                    <button class="btn" type="submit">ON</button>
                                    <button class="btn"  type="submit" name = "OFF1" >OFF</button>
                                </ul>
                            </li>
                            <li><a href="#">Habitación 2</a>
                               <ul>
                               <button class="btn" type="submit" name = "ON2" >ON</button>
                                <button class="btn"  type="submit" name = "OFF2" >OFF</button>
                                </ul>
                            </li>
                           <li><a href="#">Habitación 3</a>
                                <ul>
                                <button class="btn" type="submit" name = "ON3" >ON</button>
                                <button class="btn"  type="submit" name = "OFF3" >OFF</button>
                            </ul>
                        </li>
                       </ul>
                    </li>
                    </li>
                    
                    <li><a href="#">Estado de iluminación</a>
                    <ul>     
                        <li><a href="#"> Habitacion 1 <p><?php echo($hab1)?></p></a>
                        <li><a href="#"> Habitacion 2 <p><?php echo($hab2)?></p></a>
                        <li><a href="#"> Habitacion 3 <p><?php echo($hab3)?></p></a>
                    </ul>
                    </li>      
               </ul>
           </div>
           
         </div>
        
        <div class="img">
            <img src="img/ " width="" height="" alt="">
        </div>
    </section>
</body>
</html>
<?php
    if(!isset($_GET['mode'])){
        
    }
?>