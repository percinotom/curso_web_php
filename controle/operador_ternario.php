<div class="titulo">Operador Ternário</div>

<?php
$idade = 70;
$status;

if($idade > 18){
    $status = 'Maior de idade';
}else{
    $status = 'Menor de idade';
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

// Operador ternário dentro do outro (não é muito interessante)

// pode ser assim
//$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';

// ou assim separado também
$tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de idade';
$status = $idade >= 18 ? $tipoMaiorIdade  : 'Menor de idade';