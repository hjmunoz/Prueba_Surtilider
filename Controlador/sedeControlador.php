<?php

class ControladorSede{

    static public function CtrRegistrarSede(){

        if (isset($_POST['nombre'])) {

            $tabla = "sede";
            $datos = array("nombre_sede"=>$_POST['nombre'],
                            "direccion"=>$_POST['direccion'],
                            "telefono"=>$_POST['telefono'],
                            "estado"=>$_POST['estado'],);

            $respuesta = ModeloSede::mdlRegistrarSede($tabla, $datos);

            return $respuesta;

        }


    }

    static public function CtrSeleccionarSede(){

        $tabla = "sede";
        $respuesta = ModeloSede::mdlSeleccionarSede($tabla);

        return $respuesta;


    }



}

?>