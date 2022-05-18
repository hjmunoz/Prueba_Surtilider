
<?php 

if (isset($_GET["id"])) {

    $item = "id";
    $valor = $_GET["id"];
    $usuario = ControladorFormularios::CtrSeleccionarRegistro($item, $valor);   
    
}

?>


<div class="d-flex justify-content-center">
    <form class="p-5 m-5 bg-light" action="" method="POST">
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center">Editar Persona Natural</h1>
                <div class="col-lg-6">
                    <div class="mb-3 mt-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <div class="input-group">
                            <input value="<?php echo $usuario["nombre"]; ?>" disabled type="text" class="form-control" id="nombre" placeholder="Ingrese el Nombre" name="nombre">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3 mt-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <div class="input-group">
                            <select name="actualizarestado" id="estado" class="form-control">
                                <option value="<?php echo $usuario['estado']; ?>"><?php echo $usuario['estado']; ?></option>
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            </div>
        </div>
        <?php
        $actualizar = new ControladorFormularios();
        $actualizar -> ctrActualizar();

        ?>

        <div class="text-center">
            <button type="submit" class="btn btn-primary text-center">Actualizar</button>
        </div>

    </form>
</div>