<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domotic System</title>
    <link rel="stylesheet"  href="css/inicio.css">
</head>
<header>
    <a href="#" class="logo">
        <span>Sistema domotico</span></a>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="crear">Crear casa</a>
            <a href="#Usuario123">Usuario123</a>
        </nav>
</header>
<body>
    <section class="inicio" id="inicio">
        <h1 class="heading">BUSCAR CASA</h1>
        <div>
            <form action="buscar.php" method="post">
                <input type="text" name="buscar" id="">
                <button class="btn" type="submit" value="buscar">Buscar</button>
                <a href="nuevo.php">nuevo</a>
            </form>
        </div>
    
        <div>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Direccion</td>
                    <td>Habitaciones</td>
                    <td>Codigo</td>
                    <td>Opciones</td>
                </tr>
                <?php
                    $cnx = mysqli_connect("localhost","root","","labnew");
                    $sql = "SELECT id, dirección, habitaciones, house_code from viviendas order by id asc";
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
                            dirección=<?php echo $mostrar['1']?>
                            habitaciones=<?php echo $mostrar['2']?>
                            house_code=<?php echo $mostrar['3']?>
                            ">Editar</a>
                            <a href="eliminar.php? <?php echo $mostrar['0']?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
    </section>  
</body>
</html>