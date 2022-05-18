<?php

class ModeloSede{


    static public function mdlRegistrarSede($table, $datos){
        //statement es una declaracion;
        



        $sql = "insert into $table (nombre_sede, direccion, telefono, estado) 
        values (?, ?, ?, ?)";
        
        //$stmt = Conexion::conectar()->prepare("insert into $table (nombre, email, password) 
        //values (?, ?, ?)");
        $stmt = Conexion::conectar()->prepare($sql);

        //bindparam
        $stmt->bindParam(1, $datos["nombre_sede"], PDO::PARAM_STR);
        $stmt->bindParam(2, $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(3, $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(4, $datos["estado"], PDO::PARAM_STR);
       

        if ($stmt->execute()) {
            return "ok";
        }else {
            
            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->closeCursor();
        $stmt->null;
    }

    static public function mdlSeleccionarSede($table)
    {


        $sql = "select * from $table";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->execute();

        //fetchAll se usa para devolver todos los registros. y fetch es solamente para retornar un solo registros.
        return $stmt->fetchAll();




        $stmt->closeCursor();
        $stmt->null;
    }

}

?>