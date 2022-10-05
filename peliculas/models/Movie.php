<?php
require_once './confing/dataConnection.php';

class movie extends Conexion{

    public function _construct()
    {
        $this->conectar();
    }

    public function insertMovie($nombre, $categoria, $duracion){
        $sql =  "INSERT INTO peliculas (nobre, categoria, duracion) VALUES (`$nombre` , `$categoria` , `$duracion`)";
        $result =  mysqli_query($this->conectar(), $sql);
        if($result){
            return true;
        } else{
            return  false;
        }
            }


}
?>