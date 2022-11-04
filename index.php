<<<<<<< HEAD
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domotic System</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<header>
    <a href="#" class="logo">
        <span>Sistema domotico</span></a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
        <nav class="navbar">
            <a href="#inicio">inicio</a>
            <a href="#modo">habitaciones</a>
            <a href="#login">login</a>
        </nav>
=======
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
       
>>>>>>> de2d7df92775c0c20758b9d83adb28aaa9cee222
</header>
<body>
    <section class="inicio" id="inicio">
        <div class="content">
            <h3>ILUMINA<span> TU HOGAR</span></h3>
           <!-- <a href="#" class="btn">Cambiar habitacion</a>-->
           <ul class="navegacion">
<<<<<<< HEAD
                    <li><a href="#">Modos de ilimunacion</a>
                    <ul>     
                    <li><a href="#">Modo remoto</a>
                             
                    
                        <li><a href="#">Modo Automatico</a>
                        <li><a href="#">modo Sensado</a>
=======
                    <li><a href="#" >Modos de ilimunación</a>
                    <ul>     
                    <li><a href="#" class="btn">Modo remoto</a>
                             
                    
                        <li><a href="#" class="btn">Modo automatico</a>
                        <li><a href="#" class="btn">modo sensado</a>
>>>>>>> de2d7df92775c0c20758b9d83adb28aaa9cee222
                    </ul>
                    </li>
                    <li><a href="#">Encender bombilla</a>
                       <ul>
<<<<<<< HEAD
                           <li><a href="#">Habitacion 1</a>
                                <ul>
                                    <li><a1 href="#">Encender</a1></li>
                                    <li><a1 href="#">Apagar</a1></li>
                                </ul>
                            </li>
                            <li><a href="#">Habitacion 2</a>
                               <ul>
                                    <li><a1 href="#">Encender</a1></li>
                                    <li><a1 href="#">Apagar</a1></li>
                                </ul>
                            </li>
                           <li><a href="#">Habitacion 3</a>
                                <ul>
                                    <li><a1 href="#">Encender</a1></li>
                                    <li><a1 href="#">Apagar</a1></li>
=======
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
>>>>>>> de2d7df92775c0c20758b9d83adb28aaa9cee222
                            </ul>
                        </li>
                       </ul>
                    </li>
                    </li>
                    
<<<<<<< HEAD
                    <li><a href="#">Estado de habitaciones</a>
                    <ul>     
                    <li><a href="#">Modo remoto</a>
                        <li><a href="#">Modo Automatico</a>
                        <li><a href="#">modo Sensado</a>
                    </ul>
                    </li>
                         <li><a href="#"> Modo de Iluminacion Actual</a>
                        <ul>     
                            <li><a href="#"> modo de Iluminacion</a>
                        </ul>
=======
                    <li><a href="#">Estado de iluminación</a>
                    <ul>     
                    <li><a href="#" class="btn">Habitación 1: Encendido </a>
                        <li><a href="#" class="btn">Habitación 2:</a>
                        <li><a href="#" class="btn">Habitación 3:</a>
                    </ul>
                    </li>

>>>>>>> de2d7df92775c0c20758b9d83adb28aaa9cee222
                 
               </ul>
           </div>
           
         </div>
        
        <div class="img">
            <img src="img/ " width="" height="" alt="">
        </div>
    </section>
</body>
<<<<<<< HEAD
</html>
=======
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
>>>>>>> de2d7df92775c0c20758b9d83adb28aaa9cee222
