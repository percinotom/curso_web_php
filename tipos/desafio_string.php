<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// qual o métodos que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

echo '<br>' .  strpos('!AbcaBcabc', 'abc'); // pega string considerando as letras maiúsculas
echo '<br>' .  stripos('!AbcaBcabc', 'abc'); // pega string desconsiderando letras maiúsculas e minúsculas

echo '<br>' .  strpos(strtolower('!AbcaBcabc'), 'abc'); 
echo '<br>' .  strpos(strtolower('!AbcaBcabc'), strtolower('ABC')); 
