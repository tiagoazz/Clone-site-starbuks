<?php
// Inclui a classe Cliente
require_once 'Cliente.php';

// Criação de um objeto da classe Cliente
$cliente1 = new Cliente();

// Definindo as propriedades do cliente
$cliente1->setNome("João Silva");
$cliente1->setEmail("joao.silva@example.com");
$cliente1->setIdade(30);

// Exibindo as informações do cliente
$cliente1->exibeInformacoes();

// Alterando o email do cliente
$cliente1->setEmail("novo.email@example.com");

// Exibindo as novas informações com o email atualizado
$cliente1->exibeInformacoes();
?>