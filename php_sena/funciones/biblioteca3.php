<?php
function muestraListadoTabla($listado)
{
?>
    <table border="1">
        <thead>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Celular</td>
        </thead>
        <?php
        foreach ($listado as $list) {
        ?>
            <tr>
                <td><?php echo $list['nombre']; ?></td>
                <td><?php echo $list['apellido']; ?></td>
                <td><?php echo $list['celular']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
