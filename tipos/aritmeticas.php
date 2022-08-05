<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1.0);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // Divisão que retorna somente inteiro, tira as casas decimais...
echo round(7 / 4), '<br>'; // Arredonda para mais ou para menos a divisão
echo 7 % 4, '<br>'; // Pega o resto da divisão, 7/4 da um e resta 3
echo 7 / 0.0000001, '<br>';
//echo 7 / 0, '<br>'; // erro
//echo intdiv(7, 0), '<br>'; //erro
echo 4 ** 2, '<br>';

// Precedência de operadores: 
// () => ** => / * % => + -
echo '<p>Precedência<p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;