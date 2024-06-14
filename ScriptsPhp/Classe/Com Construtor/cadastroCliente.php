<?php
require_once 'Modelos\Cliente.php';


// Criação e uso da classe Cliente
$cliente1 = new Cliente("João Silva", "joao.silva@example.com", 30);
$cliente1->exibeInformacoes();

$cliente1->setEmail("novo.email@example.com");
$cliente1->exibeInformacoes();
?>