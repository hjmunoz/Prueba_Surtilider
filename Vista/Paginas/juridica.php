<div class="d-flex justify-content-center">
    <form class="p-5 m-5 bg-light" action="" method="POST">
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center">Persona Juridica</h1>
                <div class="col-lg-6">
                    <div class="mb-3 mt-3">
                        <label for="nombre" class="form-label">Razon social:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el Nombre" name="nombre">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="correo" placeholder="example@gmail.com" name="correo">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="telefono" placeholder="Numero telefonico" name="telefono">
                        </div>
                    </div>
                    <?php

                    $sedes = ControladorSede::CtrSeleccionarSede();

                    ?>
                    <div class="mb-3 mt-3">
                        <label for="sede" class="form-label">Sede:</label>
                        <div class="input-group">
                            <select name="sede" id="" class="form-control">
                                <option value="">...</option>
                                <?php foreach ($sedes as $key => $sede) : ?>
                                    <option value="<?php echo $sede["id"]; ?>"><?php echo $sede["nombre_sede"]; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                    
                    <div class="mb-3 mt-3">
                        <label for="nit" class="form-label">Nit:</label>
                        <div class="input-group">
                            <input type="nit" class="form-control" id="nit" placeholder="Ingrese el nit" name="nit">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="direccion" placeholder="Ingrese la direccion" name="direccion">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <div class="input-group">
                            <select name="estado" id="estado" class="form-control">
                                <option value="">...</option>
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
            $registro = ControladorFormularios::CtrRegistrarJuridica();
        ?>
        <div class="text-center">
            <button type="submit" class="btn btn-primary text-center">Registrar</button>
        </div>
    </form>
</div>