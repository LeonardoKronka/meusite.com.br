<?php 
    $frutas = ["Maçã", "Banana", "Laranja"];
    echo "<br>";
    echo " Exemplo com a função COUNT <br>";
    echo "<br>";
    for ($i = 0; $i < count($frutas) ; $i++){
       echo "Fruta " . $i+1 . " : ". $frutas[$i] . "<br>";
    }
    echo "<br>";
    echo "Exemplo com a incrementação de uma 2ª variável, rezetando (i) <br>";
    echo "<br>";
    $i = 0;
    for ($i = $i; $i <= 3; $i++){
       $n = $i + 1;
       echo "Fruta $n: ".$frutas[$i]."<br>";
    }
?>

