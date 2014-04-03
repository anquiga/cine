<form>
<table>

<?php echo link_to('Anterior', 'cine/index'); ?> 

  <tr>
    <td>
      
    </td>
    <td>
      Titulo
    </td>
    <td>
      Duracion
    </td>
    <td>
      Director
    </td>
  </tr>

  <?php foreach($pelicula as $pelicula): ?>
  
  <tr>
    <td>
      <input type='radio' name='pelicula' value='$pelicula->id'>
    </td>
    <td>
      <?php echo $pelicula->titulo ; ?>
    </td>
    <td>
      <?php echo $pelicula->duracion ; ?>
    </td>
    <td>
      <?php echo $pelicula->director ; ?>
    </td>
    <td>
      <?php echo link_to('Siguiente', 'sesion/index', array('id'=>$pelicula->id)); ?>  
    </td>
  </tr>
  
  <?php endforeach; ?>
  
</table>
</form>
  

