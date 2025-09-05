<?php 

//define o fuso horário
date_default_timezone_set('America/Sao_Paulo');

//função para gravar os dados no arquivo
    function gravarChamada($nome, $sala, $rm) {
        $arquivo = fopen("lista_chamada.txt", "a");
        $horario = date("d/m/Y H:i:s");
        $linha = "==============================\nNome: $nome\n Sala: $sala \nR.M: $rm\n Horário de chegada: $horario \n==============================\n\n";
        fwrite($arquivo, $linha);
        fclose($arquivo);
    }

//função para listar os dados do arquivo
    function listarchamada() {
        $arquivo=fopen("lista_chamada.txt", "r");
        while(($linha=fgets($arquivo)) !== false) {
            $linha = trim($linha);
            if (!empty($linha)) {
                echo "<li>" . ($linha) . "</li>";
            }
        }
        fclose($arquivo);

    }
?>