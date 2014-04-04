<?php

/**
 * Sala form.
 *
 * @package    cine
 * @subpackage form
 * @author     grupocine
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
