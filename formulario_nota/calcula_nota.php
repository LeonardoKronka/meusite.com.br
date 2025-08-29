<?php 
    $disciplina = $_POST['disciplina'];
    $nota = $_POST['nota'] ?? 0;
    if ($nota >= 7) {
        echo "Parabéns, você foi aprovado em $disciplina!";
        echo "<br><p> Sua nota foi: $nota<p>";
    } elseif ($nota >= 5 and $nota < 7) {
        echo "Você está de recuperação em $disciplina.";
        echo "<br><p> Sua nota foi: $nota<p>";
    } else {
        echo "Infelizmente, você foi reprovado em $disciplina.";
        echo "<br><p> Sua nota foi: $nota<p>";
    }
?>