<?php 
    $pessoa = ["nome" => "Leonardo", 
    "idade" => 16, 
    "cpf" => 82475427463, 
    "endereço" => "Rua Jacinto Pinto Aquino Rego, 69", 
    "peso" => 65];
    //echo "Nome: " . $pessoa["nome"] . "<br> 
    //    Idade: " . $pessoa["idade"] . "<br> 
    //    CPF: " . $pessoa["cpf"] . "<br> 
    //    Endereço: " . $pessoa["endereço"] . "<br> 
    //   Peso: " . $pessoa["peso"];

    foreach ($pessoa as $chave => $valor) {
        echo $chave . " : " . $valor . "<br>";
    }
    
?>