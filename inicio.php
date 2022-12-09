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
                <button class="btn" type="submit">Buscar</button>
                <a href="nuevo.php">nuevo</a>
            </form>
        </div>
    
        <div>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Direccion</td>
                    <td>Habitaciones</td>
                    <td>House Code</td>
                    <td>Opciones</td>
                </tr>
                <?php
                    $cnx = mysqli_connect("localhost","root","","newiot");
                    $sql = "SELECT id, direccion, habitacion, house_code from viviendas order by id desc";
                    $rta = mysqli_query($cnx,$sql);
                    while ($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['0']?></td>
                        <td><?php echo $mostrar['1']?></td>
                        <td><?php echo $mostrar['2']?></td>
                        <td><?php echo $mostrar['3']?></td>
                        <td>
                            <a href="editar.php">Editar</a>
                            <a href="eliminar.php">Eliminar</a>
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