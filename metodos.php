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

        $sql = "INSERT into viviendas(dirección,habitaciones,house_code) VALUES ('$datos[0]','$datos[1]','$datos[2]')";

        return $result = mysqli_query($conexion, $sql);
    }

    public function actualizarDatos($datos){
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE viviendas set dirección='$datos[0]',habitaciones='$datos[1]',house_code='$datos[2]' where id='$datos[3]'";
        return $result = mysqli_query($conexion, $sql);

    }

    public function eliminarDatos($id)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "DELETE from viviendas where id='$id'";
        return $result = mysqli_query($conexion, $sql);
    }
    public function buscar($usuario)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "SELECT from usuarios0 where usuario='$usuario'";
        return $result = mysqli_query($conexion, $sql);
    }
}
