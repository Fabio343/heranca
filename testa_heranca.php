<?php

require 'gerente.php';
$gerente=new gerente();

$gerente->nome="Maria";
$gerente->matricula=1254;
$gerente->salario=2500;
$gerente->senha=357159258;

echo "$gerente->nome" . PHP_EOL;
echo "$gerente->matricula" . PHP_EOL;
echo "$gerente->salario" . PHP_EOL;
echo "$gerente->senha" . PHP_EOL;


 ?>
