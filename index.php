<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domotic_ System</title>
    <link erl="stylesheet"  type="text/css" href="css/style.php">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<header>
    <a href="#" class="logo">
        <span>Sistema domótico</span></a>
        <div class="Iluminacion">
            <li><a href="#"> Modo de iluminacion actual: automatico</a>
                
        </div>
          <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
             <nav class="navbar">
                
            <a href="#inicio">inicio</a>
            <a href="#modo">habitaciones</a>
            <a href="#login">User123</a>
        </nav>
       
</header>
<body>
    <section class="inicio" id="inicio">
        <div class="content">
            <h3>ILUMINA<span> TU HOGAR</span></h3>
           <!-- <a href="#" class="btn">Cambiar habitacion</a>-->
           <ul class="navegacion">
                    <li><a href="#" >Modos de ilimunación</a>
                    <ul>     
                    <li><a href="#" class="btn">Modo remoto</a>
                             
                    
                        <li><a href="#" class="btn">Modo automatico</a>
                        <li><a href="#" class="btn">modo sensado</a>
                    </ul>
                    </li>
                    <li><a href="#">Encender bombilla</a>
                       <ul>
                           <li><a href="#">Habitación 1</a>
                                <ul>
                                    <li><a1 href="#" class="btn" name="ON">Encender</a1></li>
                                    <li><a1 href="#" class="btn" name="OFF">Apagar</a1></li>
                                </ul>
                            </li>
                            <li><a href="#">Habitación 2</a>
                               <ul>
                                    <li><a1 href="#" class="btn onhab2">Encender</a1></li>
                                    <li><a1 href="#" class="btn onhab2">Apagar</a1></li>
                                </ul>
                            </li>
                           <li><a href="#">Habitación 3</a>
                                <ul>
                                    <li><a1 href="#" class="btn onhab3">Encender</a1></li>
                                    <li><a1 href="#" class="btn onhab3">Apagar</a1></li>
                            </ul>
                        </li>
                       </ul>
                    </li>
                    </li>
                    
                    <li><a href="#">Estado de iluminación</a>
                    <ul>     
                    <li><a href="#" class="btn">Habitación 1: Encendido </a>
                        <li><a href="#" class="btn">Habitación 2:</a>
                        <li><a href="#" class="btn">Habitación 3:</a>
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
require("/proceso_eventos/conexion.php");
if(isset($_POST['ON']))			// If press ON
{	
			
			$sql = "UPDATE modos SET hab1   = 1";	// Update present status to database
			// If don't put this If , we can't change the value in database
			if ($conn->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
				//$_GET[] = 1;						// why i have to put this line but it still run when it's commented
			} 
}

if(isset($_POST['OFF']))		// If press OFF
{					
					
			$sql = "UPDATE modos SET hab2 = 0";	// Update present status to database
			// Echo "0" , equivalent with send data to App to toast OFF
			if ($conn->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
				//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
			} 
	
	
}			

?>