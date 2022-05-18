<?php

class ControladorFormularios{

    static public function CtrRegistrarNatural(){

        if (isset($_POST['nombre'])) {

            $tabla = "tercero";
            $datos = array("nombre"=>$_POST['nombre'],
                            "apellido"=>$_POST['apellido'],
                            "tipo"=>$_POST['tipo'],
                            "identificacion"=>$_POST['numero'],
                            "telefono"=>$_POST['telefono'],
                            "correo"=>$_POST['correo'],
                            "direccion"=>$_POST['direccion'],
                            "estado"=>$_POST['estado'],
                            "sede_id"=>$_POST['sede']);

            $respuesta = ModeloFormulario::mdlRegistrar($tabla, $datos);

            return $respuesta;

        }


    }

    static public function CtrRegistrarJuridica(){

        if (isset($_POST['nombre'])) {

            $tabla = "tercero";
            $datos = array("nombre"=>$_POST['nombre'],
                            "identificacion"=>$_POST['nit'],
                            "telefono"=>$_POST['telefono'],
                            "correo"=>$_POST['correo'],
                            "direccion"=>$_POST['direccion'],
                            "estado"=>$_POST['estado'],
                            "sede_id"=>$_POST['sede']);

            $respuesta = ModeloFormulario::mdlRegistrar($tabla, $datos);

            return $respuesta;

        }


    }

    static public function CtrSeleccionarRegistros() 
    {
        $tabla = "tercero";
        $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla);

        return $respuesta;
    }

    static public function CtrSeleccionarRegistro($item, $valor) 
    {
        $tabla = "tercero";
        $respuesta = ModeloFormulario::mdlSeleccionarRegistro($tabla, $item, $valor);

        return $respuesta;
    }

    public function ctrActualizar(){

        if (isset($_POST['actualizarestado'])) {

            

            $tabla = "tercero";
            $datos = array("id"=>$_POST['id'],
                            "estado"=>$_POST['actualizarestado']);

            $respuesta = ModeloFormulario::mdlActualizar($tabla, $datos);

            return $respuesta;

        }

    }

    static public function CtrBuscar(){

        if (isset($_POST['numero'])) {

            $tabla = "tercero";
            $datos = array("identificacion"=>$_POST['numero']);

            $respuesta = ModeloFormulario::mdlBuscar($tabla, $datos);

            return $respuesta;

        }


    }

    


}


?>