<table>
    <tr>
        <td>
        <?php foreach($sesiones as $sesion->getSalaId()): ?>  
        </td>      
            <?php foreach($sesiones as $sesion): ?>
                <tr>
                    <td>
                    <?php echo $sesion->hora; ?>
                    </td>        
                    <td>
                    <?php echo link_to('Ver sesiones', 'sesion/index', array('id'=>$sesion->id)); ?>       
                    </td>
                </tr>
     </tr>           
<?php endforeach;?>
</table>
