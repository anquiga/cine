<?php

/**
 * Cine form.
 *
 * @package    cine
 * @subpackage form
<<<<<<< HEAD
 * @author     andres
=======
 * @author     grupocine
>>>>>>> 8b8f1a2053cf023ecaad21eb3944d2e352d02f97
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CineForm extends BaseCineForm
{
  public function configure()
  {
     unset(
        $this['created_at'], $this['updated_at']
     );
  }
}
