<?php
class metodos
{
    public function mostrarDatos($sql)
    {
        $c = new conectar();
        $conectar = $c->conexion();

        $result = mysqli_query($conectar, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
    public function insertarDatos($datos){
        $c = new conectar();
        $conexion = $c->conexion();
        
        $sql = "INSERT into usuarios(nombre_completo,identificacion,direccion,fecha_nacimiento,login,passwd,tipo_usuario,id_tarjeta,activo,house_code) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]')";
        
        return $result = mysqli_query($conexion, $sql);
    }

    public function actualizarDatos($datos){
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE usuarios set nombre_completo='$datos[0]',identificacion='$datos[1]',direccion='$datos[2]',fecha_nacimiento='$datos[3]',login='$datos[4]',passwd='$datos[5]',tipo_usuario='$datos[6]',id_tarjeta='$datos[7]',activo='$datos[8]',house_code='$datos[9]'where id='$datos[10]'";
        return $result = mysqli_query($conexion, $sql);

    }

    public function eliminarDatos($id)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "DELETE from usuarios where id='$id'";
        return $result = mysqli_query($conexion, $sql);
    }
    public function buscar($usuario)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "SELECT from usuarios where usuario='$usuario'";
        return $result = mysqli_query($conexion, $sql);
    }
}
