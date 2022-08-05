<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // false
var_dump(1 > 1); // false
var_dump(1 >= 1); //true
var_dump(4 < 23); //true
var_dump(1 <= 7); //true
var_dump(1 != 1); // false // diferente
var_dump(1 <> 1); // false // diferente

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false // igualdade estrita, leva em conta não só o valor mas também o tipo
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true // o mesmo acontece aqui, diferença estrita

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 80;
if($idade < 18){
    echo "Menor de idade = $idade anos!<br>";
}else if($idade <= 65){
    echo "Adulto = $idade anos!<br>";
}else{
    echo "Terceira idade = $idade anos!";
}

echo "<p class='divisao'>Spaceship</p><hr>";
var_dump(500 <=> 3);  // se o da direita for maior retorna 1
var_dump(50 <=> 50); // se for igual retorna 0
var_dump(5 <=> 50); // se o da esquerda for maior retorna -1 

echo "<p class='divisao'>Valores podem ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");