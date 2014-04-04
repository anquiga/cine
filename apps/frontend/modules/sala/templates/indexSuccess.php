<table border="1">
    <tr>
        <th>Sala</th>
        <th>Tamaño de la patalla</th>
        <th>Cine</th>
        <th>Sesiones</th>
    </tr>
<?php foreach($salas as $sala): ?>
    <tr>
        <td>
            <?php echo $sala->id; ?>
        </td>
        <td>
            <?php echo $sala->tamanioPantalla; ?>
        </td>
        <td>
            <?php echo $sala->getCine()->id; ?>
        </td>
        <td>
            <?php echo link_to('Ver sesiones', 'sala/index', array('id'=>$sala->id)); ?>
        </td>
    </tr>
<?php endforeach;?>
</table>
