<?php

/**
 *
 */

require_once 'funcionario.php';

class secretaria extends funcionario
{
  public $ramal;

  public function beneficio(){
    return parent::beneficio()+1000;
  }
}

 ?>
