<?php
require 'funcionario.php';
require 'gerente.php';
require 'secretaria.php';
require 'telefonista.php';

$gerente=new gerente();
$secretaria=new secretaria();
$telefonista=new telefonista();

$gerente->nome="Maria";
$gerente->matricula=1254;
$gerente->usuario="Mari123";
$gerente->salario=2500;
$gerente->senha=357159258;
$gerente->beneficio=beneficio();

echo "$gerente->nome" . PHP_EOL;
echo "$gerente->matricula" . PHP_EOL;
echo "$gerente->salario" . PHP_EOL;
echo "$gerente->senha" . PHP_EOL;
echo $gerente->beneficio() . PHP_EOL;

$secretaria->nome="Mariana";
$secretaria->matricula=11254;
$secretaria->salario=2000;
$secretaria->ramal=1254255;
$secretaria->beneficio=beneficio();


echo "$secretaria->nome" . PHP_EOL;
echo "$secretaria->matricula" . PHP_EOL;
echo "$secretaria->salario" . PHP_EOL;
echo "$secretaria->ramal" . PHP_EOL;
echo $secretaria->beneficio() . PHP_EOL;


$telefonista->nome="Mari";
$telefonista->matricula=11254;
$telefonista->salario=2000;
$telefonista->trabalho=11;
$telefonista->beneficio=beneficio();

echo "$telefonista->nome" . PHP_EOL;
echo "$telefonista->matricula" . PHP_EOL;
echo "$telefonista->salario" . PHP_EOL;
echo "$telefonista->trabalho" . PHP_EOL;
echo $telefonista->beneficio()  . PHP_EOL;

 ?>
