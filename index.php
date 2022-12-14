<?php
    include "Proyect/connection/conexion.php";
    include "Proyect/appis/functions.php";
    $mysqli = connect();
    $ID_TARJ = 1;
    
    if(!isset($_GET['mode'])){
        get_status($ID_TARJ,$mysqli);
    }
    $mode = $_GET['mode'];

    if($mode == 0){
        $mode = " Modo Remoto";
    }
    elseif($mode == 1){
        $mode = " Modo Automatico";
    }
    elseif($mode == 2){
        $mode = " Modo Sensado";
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
        <div class="Iluminacion"><br>
        <li><a>Iluminacion: <span><?php echo $mode; ?></span></a></li>
            <?php
                // $mysqli = new mysqli($host, $user, $pw, $db);
                // $sql = "SELECT modo from estados where ID_TARJ=1";
                // $result = $mysqli->query($sql);
                // // $row = $result->fetch_array(MYSQLI_NUM);
                // $modo = $row[0];
                // switch($modo){
                //     case 0:
                //         $etiqueta = "REMOTO";
                //     break;
                //     case 1:
                //         $etiqueta = "AUTOMATICO";
                //     break;
                //     case 2:
                //         $etiqueta = "SENSADO";
                //     break;
                // }
                // echo($etiqueta);
            ?></p></a>
            
        </div>
          <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
             <nav class="navbar">
                
            <a href="index.php">Inicio</a>
            <a href="inicio.php">Casas</a>
            <a href="habitantes.php">Habitantes</a>
            <a href="#login">User1</a>
        </nav>
       
</header>
<body>
    <section class="inicio" id="inicio">
        <div class="content">
            <h3>ILUMINA TU HOGAR</span></h3>
           <!-- <a href="#" class="btn">Cambiar habitacion</a>-->
           <h4>Estado de iluminación</h4>
                        <br>
                        <a3> Habitación 1: </a3>

                        <?php
                             
                             switch($hab1){
                                 case 0:
                                     $etiqueta = "";?><img src="img/apagado.png" width="25px" height="25px"><?php
                                 break;
                                 case 1:
                                     $etiqueta = "";?><img src="img/encendido.png" width="25px" height="25px"><?php
                                 break;
                             }
                             echo($etiqueta);
                        ?>
                        <a3> Habitación 2: </a3><?php
                            
                             switch($hab2){
                                case 0:
                                    $etiqueta = "";?><img src="img/apagado.png" width="25px" height="25px"><?php
                                break;
                                case 1:
                                    $etiqueta = "";?><img src="img/encendido.png" width="25px" height="25px"><?php
                                break;
                            }
                             echo($etiqueta);
                        ?>
                        <a3> Habitación 3: </a3><?php
                        
                             switch($hab3){
                                case 0:
                                    $etiqueta = "";?><img src="img/apagado.png" width="25px" height="25px"><?php
                                break;
                                case 1:
                                    $etiqueta = "";?><img src="img/encendido.png" width="25px" height="25px"><?php
                                break;
                            }
                             echo($etiqueta);
                        ?>
            
           <ul class="navegacion">
           <br>
           <li>                
                 
            <a>Modos de Iluminación</a>     
            <ul>
            
                        <button class="btn" type="submit" name = "MODOREMOTO" >Modo Remoto</button>
                        <button class="btn" type="submit" name = "MODOAUTOMATICO" >Modo Automatico</button>
                        <button class="btn" type="submit" name = "MODOSENSADO" >Modo Sensado</button>
            
                    </ul>
            
            </li>    
                    <li><a href="#">Encender bombilla</a>
                    <ul>
                           <li><a href="#">Habitación 1</a>
                                <ul>
                                <button class="btn" type="submit" name = "ON1" >ON</button>
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
    
			
    $mysqli = new mysqli($host, $user, $pw, $db);
    if(isset($_POST['ON1']))			// If press ON
    {	
        $sql2 = "SELECT modo from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $modo = $row[0]; 
        if($modo == 0){
            $sql = "UPDATE estados set hab1='1' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            } 
        }      
        
    }
    if(isset($_POST['OFF1']))			// If press ON
    {	
        $sql2 = "SELECT modo from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $modo = $row[0];
        if($modo == 0){
            $sql = "UPDATE estados set hab1='0' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            } 
        }
        
    }

    if(isset($_POST['ON2']))			// If press ON
    {	
        $sql2 = "SELECT modo from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $modo = $row[0];
        if($modo == 0){
            $sql = "UPDATE estados set hab2='1' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            }
        }
         
    }
    if(isset($_POST['OFF2']))			// If press ON
    {	
        $sql2 = "SELECT modo from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $modo = $row[0];
        if($modo == 0){
            $sql = "UPDATE estados set hab2='0' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            } 
        }
        
    }
    if(isset($_POST['ON3']))			// If press ON
    {	
        $sql2 = "SELECT modo from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $modo = $row[0];
        if($modo == 0){
            $sql = "UPDATE estados set hab3='1' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            } 
        }
        
    }
    if(isset($_POST['OFF3']))			// If press ON
    {	
        $sql2 = "SELECT modo from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $modo = $row[0];
        if($modo == 0){
            $sql = "UPDATE estados set hab3='0' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            } 
        }
        
    }
    if(isset($_POST['MODOREMOTO']))			// If press ON
    {	
        $sql2 = "SELECT hab1,hab2,hab3 from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $hab1 = $row[0]; 
        $hab2 = $row[1];
        $hab3 = $row[2];
        if($hab1 == 0 and $hab2 ==0 and $hab3 == 0){
            $sql = "UPDATE estados set modo='0' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            }
        }

         
    }
    if(isset($_POST['MODOAUTOMATICO']))			// If press ON
    {	

        $sql2 = "SELECT hab1,hab2,hab3 from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $hab1 = $row[0]; 
        $hab2 = $row[1];
        $hab3 = $row[2];
        if($hab1 == 0 and $hab2 ==0 and $hab3 == 0){
            $sql = "UPDATE estados set modo='1' where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            } 
        }
        
    }
    if(isset($_POST['MODOSENSADO']))			// If press ON
    {	
        $sql2 = "SELECT hab1,hab2,hab3 from estados where ID_TARJ=1";
        $result = $mysqli->query($sql2);
        $row = $result->fetch_array(MYSQLI_NUM);
        $hab1 = $row[0]; 
        $hab2 = $row[1];
        $hab3 = $row[2];
        if($hab1 == 0 and $hab2 ==0 and $hab3 == 0){
            $sql = "UPDATE estados set modo=2 where ID_TARJ='1'";	// Update present status to database
    //             // If don't put this If , we can't change the value in database
            if ($mysqli->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
            //                 $_GET[] = 1;						// why i have to put this line but it still run when it's commented
            } 
        }
        
    }
?>
