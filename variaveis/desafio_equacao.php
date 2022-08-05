<div class="titulo">Desafio Equação</div>

<?php
$NumeradorPart1 = (6 * ( 3 + 2)) ** 2;
$DenominadorPart1 = 3 * 2;
$Part1 = $NumeradorPart1 / $DenominadorPart1;

$NumeradorPart2 = ((1 - 5) * (2 - 7));
$DenominadorPart2 = 2;
$Part2 = ($NumeradorPart2 / $DenominadorPart2) ** 2;

$NumeradorPart3 = ($Part1 - $Part2);

$NumeradorPart4 = $NumeradorPart3 ** 3;
$DenominadorPart4 = 10 ** 3;
$Result = $NumeradorPart4 / $DenominadorPart4;

echo "O resultado final é " . $Result . ".";

