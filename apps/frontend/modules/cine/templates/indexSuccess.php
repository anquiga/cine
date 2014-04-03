<table border="1">
    <tr>
        <th>Cine</th>
        <th>Dirección</th>
        <th>Sesiones</th>
    </tr>
<?php foreach($cines as $cine): ?>
    <tr>
        <td>
            <?php echo $cine->id; ?>
        </td>
        <td>
            <?php echo $cine->direccion; ?>
        </td>
        <td>
            <?php echo link_to('Ver sesiones', 'listar_sesiones_por_cine', array('id'=>$cine->id)); ?>
        </td>
    </tr>
<?php endforeach;?>
</table>
