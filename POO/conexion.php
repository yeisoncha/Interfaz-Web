<?php
class conectar{
    private $host = "localhost:3307";
   private $user = "root";
    private $pw = "";
    private $db = "newiot";

   public function conexion()
    {
        $conexion = mysqli_connect($this->host, $this->user, $this->pw, $this->db);
        return $conexion;
    }
}
?>

