<?php 
$pessoa = [
    "nome" => "Leonardo", 
    "idade" => 16, 
    "cpf" => 82475427463, 
    "endereço" => "Rua Jacinto Pinto Aquino Rego, 69", 
    "peso" => 65
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Chave</th><th>Valor</th></tr>";

foreach ($pessoa as $chave => $valor) {
    echo "<tr>";
    echo "<td>" . ucfirst($chave) . "</td>"; // ucfirst deixa a primeira letra maiúscula
    echo "<td>" . $valor . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
