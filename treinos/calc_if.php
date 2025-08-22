<?php 
$a = 10;
$b = 5;
$operacao = "*";

if ($operacao == "*") {
    $resultado = $a * $b;
    echo "$a x $b = $resultado";
} elseif ($operacao == "+") {
    $resultado = $a + $b;
    echo "$a + $b = $resultado";
} elseif ($operacao == "-") {
    $resultado = $a - $b;
    echo "$a - $b = $resultado";
} elseif ($operacao == "/") {
    $resultado = $a / $b;
    echo "$a / $b = $resultado";
} elseif ($operacao == "%") {
    $resultado = $a % $b;
    echo "$a % $b = $resultado";
} else {
    echo "Operador não existente";
}
?>