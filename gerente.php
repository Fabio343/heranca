<?php


require_once 'funcionario.php';

class gerente extends funcionario //classe com herança(reutilização de codigo) maximo de  1 em php
{
  public $senha;
  public $usuario;

  public function beneficio(){
    return $this->salario*0.6+100;
  }
}

 ?>
