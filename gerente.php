<?php


require_once 'funcionario.php';

class gerente extends funcionario //classe com herança(reutilização de codigo) maximo de  1 em php
{
  public $senha;
  public $usuario;

  public function beneficio(){
    return parent::beneficio()+1500;
  }
}

 ?>
