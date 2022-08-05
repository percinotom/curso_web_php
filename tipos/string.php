<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); // O acento e o espaço conta como uma string também
echo '<br>';


// concatenação

echo("Nós também" . ' somos' . '<br>');
echo("Número é " . 123);
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra será maiúscula');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
//echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // seleciona da posição sete e seis linhas adiante
echo '<br>' . substr('Só uma parte mesmo', 7); // vai até o final a partir do 7
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');