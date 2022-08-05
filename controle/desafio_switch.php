<div class="titulo">Desadio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_FAHRENHEIT_CELSIUS = 1.8;

$param = $_POST['param'] ?? 0;
switch($_POST['conversao']){
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    case 'fahrenheit-celsius':
        $conversao = ($param - 32) / FATOR_FAHRENHEIT_CELSIUS;
        $mensagem = "{$param}° Farenheit = {$conversao}° Celsius";
        break;
    case 'celsius-fahrenheit':
        $conversao = $param * FATOR_FAHRENHEIT_CELSIUS + 32;
        $mensagem = "{$param}° Celsius = {$conversao}° Farenheit";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";

}

echo "<p>$mensagem</p>";