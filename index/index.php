
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
            <li><a href="#"> Modo de iluminacion actual: <p></p></a>
            
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
            <form method="POST" action = "check_status.php">
                        <button class="btn" type="submit" name = "MODOREMOTO" >Modo Remoto</button>
                        <button class="btn" type="submit" name = "MODOAUTOMATICO" >Modo Automatico</button>
                        <button class="btn" type="submit" name = "MODOSENSADO" >Modo Sensado</button>
            </form>
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
                    
                    <li><a href="#">Estado de iluminación</a>
                        <ul>     
                            <li><a href="#"> Habitacion 1 <p></p></a>
                            <li><a href="#"> Habitacion 2 <p></p></a>
                            <li><a href="#"> Habitacion 3 <p></p></a>
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