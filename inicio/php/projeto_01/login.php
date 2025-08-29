<?php 
    require_once("funcoes.php");

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        conecta($usuario, $senha);
    }
?>

