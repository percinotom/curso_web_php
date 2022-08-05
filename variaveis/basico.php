<div class="titulo">Váriáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

echo '<br>';
$variavel = 10;
echo $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Nomenclatura de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida, mas não é bom, melhor evitar!';
//$6var = 'invalida';
//$%var8 = 'invalida';
//var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);