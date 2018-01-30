<?php
/**
 *
 */
class funcionario
{
  public $matricula;
  public $nome;
  public $salario;
  

  public function beneficio(){
    return $this->salario * 0.01+500;
  }

}


 ?>
