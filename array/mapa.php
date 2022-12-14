<div class="titulo">Mapa</div>

<?php

use function PHPSTORM_META\map;

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>';
var_dump($dados["outra_informação"]);

$lista =  array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

$lista[false] = 'tentei indexar com false';
echo '<br>';
print_r($lista);

$lista[true] = 'tentei indexar com true';
echo '<br>';
print_r($lista);