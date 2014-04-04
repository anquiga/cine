<?php

/**
 * Sala form.
 *
 * @package    cine
 * @subpackage form
<<<<<<< HEAD
<<<<<<< HEAD
 * @author     andres
=======
 * @author     grupocine
>>>>>>> 8b8f1a2053cf023ecaad21eb3944d2e352d02f97
=======
 * @author     andres
>>>>>>> 6eaa45c460819ebacddfb506dc87e4597108a491
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SalaForm extends BaseSalaForm
{
  public function configure()
  {
      unset(
        $this['created_at'], $this['updated_at']
     );

  }
}
