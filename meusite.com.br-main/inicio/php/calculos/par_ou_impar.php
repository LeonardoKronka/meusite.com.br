<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_REQUEST['num'];

    function parOuImpar($num) {
        if ($num % 2 == 0) {
            return "Par";
        } else {
            return "Ímpar";
        }
    }
    
    echo "O número $num é <strong>" . parOuImpar($num) . "</strong>";
} else {
    echo "Nenhum valor enviado.";
}

?>