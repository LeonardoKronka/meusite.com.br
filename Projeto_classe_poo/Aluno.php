<?php 
require_once "usuario.php";

// Classe Filha - Aluno
class Aluno extends Usuario {
    private $matricula;

    public function __construct($nome, $email, $matricula) {
        parent::__construct($nome, $email);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function exibirInfo() {
        return parent::getInfo() . " | Matrícula: " . $this->getMatricula();
    }

    public function estudar(){
        return $this->getNome() . " está estudando " . $this->getMatricula();
    }
}


?>