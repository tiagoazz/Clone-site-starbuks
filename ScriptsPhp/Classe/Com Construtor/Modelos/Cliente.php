<?php

class Cliente {
    private $nome;
    private $email;
    private $idade;

    public function __construct($nome, $email, $idade) {
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function exibeInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Idade: " . $this->idade . "<br>";
    }
}
?>