<?php 
$a = 10;
$b = 5;
$operacao = "subtrcao";

$resultado = match($operacao) {
    "soma" => $a + $b,
    "subtracao" => $a - $b,
    "multiplicacao" => $a * $b,
    "divisao" => $a / $b,
    default => throw new InvalidArgumentException("Operação inválida")
};

echo "O resultado da $operacao é: $resultado";  
?>