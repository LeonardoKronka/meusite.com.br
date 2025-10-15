<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $premio = $_POST['premio'];
        
        date_default_timezone_set("America/Sao_Paulo");
        $dataHora = date("d/m/Y H:i:s");

        $ip = $_SERVER['REMOTE_ADDR'];

        $numeroSorteado = rand(1, 1000);

        echo "<h2>Resultado do Sorteio</h2>";
        echo "<p>Prêmio: $premio</p><br>";
        echo "<p>Data e Hora do Sorteio: $dataHora </p><br>";
        echo "<p>IP do Participante: $ip </p><br>";
        echo "<p>Número Sorteado: $numeroSorteado </p><br>";
    }
?>