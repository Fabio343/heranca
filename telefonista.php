<?php

/**
 *
 */
require_once 'funcionario.php';

class telefonista extends funcionario
{
public $trabalho;
public function beneficio(){
  return parent::beneficio()+1000; //acessando metodo da classe pai 
}
}

 ?>
