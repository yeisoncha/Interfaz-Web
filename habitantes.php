<?php
    include 'conexion.php';
    

?>
<?php 
          $mysqli = new mysqli($host, $user, $pw, $db);
          $sql11 = "SELECT * from estados";
          $result = $mysqli->query($sql11);
          $row = $result->fetch_array(MYSQLI_NUM);
          $modo = $row[5];
          if ($modo==0){
             $modo = " Modo Remoto";
             }
          if ($modo==1){
            $modo = " Modo Atomatico";
            }
         if ($modo==2){
                $modo = " Modo Sensado";
                }
           
            
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domotic System</title>
    <link rel="stylesheet"  type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>


<header>
    <a class="logo">
        <span>Sistema domótico</span></a>
        

        <div class="Iluminacion"><br>
        <li><a>Iluminacion: <span><?php echo $modo; ?></span></a></li>
        </a>
           
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
<section class="inicio">

            <form action="buscar.php">
                <input type="text" name="buscar" id="" placeholder="Buscar">
                <button class="btn" type="submit" value="buscar" >Buscar</button>
                <a></a>
                <button class="btn" type="submit" href="nuevo.php"> Nuevo   </button>
            </form>
            <br></br>


            <table id="customers">

                <tr>
                    <th>ID</th>
                    
                    <th>NOMBRE</th>
                   
                    <th>CASA</th>
                  
                    <th>TELEFONO</th>
                  
                    <th>OPCIONES</th>
                </tr>
                <?php
                    $cnx = mysqli_connect("localhost","root","","newiot");
                    $sql = "SELECT id, nombre, casa, telefono from habitantes order by id asc";
                    $rta = mysqli_query($cnx,$sql);
                    while ($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['0']?></td>
                      
                        <td><?php echo $mostrar['1']?></td>
                       
                        <td><?php echo $mostrar['2']?></td>
                    
                        <td><?php echo $mostrar['3']?></td>
                      
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar['0']?>
                            nombre=<?php echo $mostrar['1']?>
                            casa=<?php echo $mostrar['2']?>
                            telefono=<?php echo $mostrar['3']?>
                            "><img src="img/editar.png" width="25px" height="25px"></a>
                            <a>  </a>
                            <a href="eliminar.php? <?php echo $mostrar['0']?>"><img src="img/eliminar.png" width="25px" height="25px"></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </section>
</body>

<footer>
    
</footer>
</html>