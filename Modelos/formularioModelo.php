<?php

require_once "conexion.php";

class ModeloFormulario
{


    static public function mdlRegistrar($table, $datos)
    {


        $sql = "insert into $table (nombre, apellido, tipo, identificacion, telefono, correo, direccion, estado, sede_id) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //$stmt = Conexion::conectar()->prepare("insert into $table (nombre, email, password) 
        //values (?, ?, ?)");
        $stmt = Conexion::conectar()->prepare($sql);

        //bindparam
        $stmt->bindParam(1, $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(2, $datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(3, $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(4, $datos["identificacion"], PDO::PARAM_STR);
        $stmt->bindParam(5, $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(6, $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(7, $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(8, $datos["estado"], PDO::PARAM_STR);
        $stmt->bindParam(9, $datos["sede_id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();
        $stmt->null;
    }


    static public function mdlRegistrarJuridico($table, $datos)
    {
        //statement es una declaracion;




        $sql = "insert into $table (nombre, null, null, identificacion, telefono, correo, direccion, estado, sede_id) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //$stmt = Conexion::conectar()->prepare("insert into $table (nombre, email, password) 
        //values (?, ?, ?)");
        $stmt = Conexion::conectar()->prepare($sql);

        //bindparam
        $stmt->bindParam(1, $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(2, $datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(3, $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(4, $datos["identificacion"], PDO::PARAM_STR);
        $stmt->bindParam(5, $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(6, $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(7, $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(8, $datos["estado"], PDO::PARAM_STR);
        $stmt->bindParam(9, $datos["sede_id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();
        $stmt->null;
    }

    static public function mdlSeleccionarRegistros($table)
    {


        $sql = "select * from $table";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->execute();

        //fetchAll se usa para devolver todos los registros. y fetch es solamente para retornar un solo registros.
        return $stmt->fetchAll();




        $stmt->closeCursor();
        $stmt->null;
    }

    static public function mdlSeleccionarRegistro($table, $item, $valor)
    {


        $sql = "select * from $table where $item = '$valor'";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->execute();

        //fetchAll se usa para devolver todos los registros. y fetch es solamente para retornar un solo registros.
        return $stmt->fetch();




        $stmt->closeCursor();
        $stmt->null;
    }

    static public function mdlActualizar($table, $datos)
    {


        $sql = "update $table set estado = ? where id = ?";

        //$stmt = Conexion::conectar()->prepare("insert into $table (nombre, email, password) 
        //values (?, ?, ?)");
        $stmt = Conexion::conectar()->prepare($sql);

        //bindparam
        
        $stmt->bindParam(1, $datos["estado"], PDO::PARAM_STR);
        $stmt->bindParam(2, $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();
        $stmt->null;
    }

    static public function mdlBuscar($table, $datos)
    {


        //$sql = "select * from $table where identificacion like '%$datos'";
        $sql = "select * from $table where identificacion = ?";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(1, $datos["identificacion"], PDO::PARAM_STR);

        $stmt->execute();

        //fetchAll se usa para devolver todos los registros. y fetch es solamente para retornar un solo registros.
        return $stmt->fetch();

        $stmt->closeCursor();
        $stmt->null;
    }


}
