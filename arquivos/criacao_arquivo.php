<?php 
    $arquivo = fopen("dados.txt", "w");
    fwrite($arquivo, "Linha 1: Criando um arquivo de texto.\n");
    fclose($arquivo);
    echo "Arquivo criado com sucesso!";
?>