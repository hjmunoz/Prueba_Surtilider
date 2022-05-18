<?php

class Conexion{

    static public function conectar(){

        //PDO primer parametro->("nombre del servidor; nombre de la base de datos", "usuario", "contraseña"); 
        $link = new PDO("mysql:host=localhost;dbname=surtilider", "root", "");

        $link->exec("set names utf8");

        return $link;

    }

}


?>