<?php 
require_once "usuario.php";
// Classe Filha - Professor
class Professor extends Usuario {
    private $disciplina;

    public function __construct($nome, $email, $disciplina) {
        parent::__construct($nome, $email);
        $this->disciplina = $disciplina;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function exibirInfo() {
        return parent::getInfo() . " | Disciplina: " . $this->getDisciplina();
    }

    public function darAula(){
        return $this->getNome() . " está dando aula de " . $this->getDisciplina();
    }
}

?>