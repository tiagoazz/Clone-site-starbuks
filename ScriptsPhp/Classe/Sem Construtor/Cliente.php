<?php
// Supondo que não estamos usando namespaces aqui, para simplificar.
class Cliente {
    private $nome;
    private $email;
    private $idade;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function exibeInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Idade: " . $this->idade . "<br>";
    }
}
?>