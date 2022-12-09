
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear viviendas</title>
</head>
<body>
    <form action="crear_viviendas.php" method="POST">
    <label name="direccion" for="direccion">Dirección</label>
    <input type="text" id="direccion" name="direccion">
    <label for="numero_habitaciones" name="numero_habitaciones"> Número de habitaciones</label>
    <input type="number" id="numero_habitaciones" name="numero_habitaciones">
    <label for="codigo_vivienda" name="codigo_vivienda" >Código de la vivienda</label>
    <input type="text" id="codigo_vivienda" name="codigo_vivienda">
    <button type="submit"> Crear Vivienda</button>
    
    </form>
    
 
</body>
</html>