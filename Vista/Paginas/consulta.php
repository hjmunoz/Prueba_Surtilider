<?php
$usuarios = ControladorFormularios::CtrSeleccionarRegistros();
?>
<table class="table table-striped">
    <form action="" method="post">
        <div class="mb-3 mt-3">
            <div class="input-group">
                <input type="text" class="form-control" id="numero" placeholder="Numero de identificacion" name="numero">
                <input type="submit" value="Buscar" name="enviar" class="btn btn-primary">
            </div>
        </div>
    </form>
    <?php
    
        $consultas = ControladorFormularios::CtrBuscar(); 
        error_reporting(0);
    ?>
    <tbody>
            <tr>
                <td><?php echo $consultas["id"]; ?></td>
                <td><?php echo $consultas["identificacion"]; ?></td>
                <td><?php echo $consultas["nombre"]; ?></td>
                <td><?php echo $consultas["telefono"]; ?></td>
                <td><?php echo $consultas["estado"]; ?></td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?pagina=editar&id=<?php echo $consultas["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                </td>
            </tr>
    </tbody>
    
</table>
<br><br>
<table class="table table-striped">
    <h1 class="text-center">Terceros Registrados</h1>
<thead>
        <tr>
            <th>#</th>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $key => $usuario) : ?>

            <tr>
                <td><?php echo ($key + 1); ?></td>
                <td><?php echo $usuario["identificacion"]; ?></td>
                <td><?php echo $usuario["nombre"]; ?></td>
                <td><?php echo $usuario["telefono"]; ?></td>
                <td><?php echo $usuario["estado"]; ?></td>
                <!-- <td>
                    <div class="btn-group">
                        <a href="index.php?pagina=editar&id=<?php echo $usuario["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                </td> -->
            </tr>
        <?php endforeach ?>
    </tbody>
</table>