<div class="titulo">Valor vs Refêrencia</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br> $variavel";
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo "<br> $variavelValor";

// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';

echo "<br> $variavel $variavelReferencia";