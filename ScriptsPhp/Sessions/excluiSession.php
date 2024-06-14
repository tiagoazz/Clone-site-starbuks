<?php
// Iniciar a sessão
session_start();

// Definir variável de sessão
$_SESSION['username'] = 'john_doe';

// Excluir variável de sessão
unset($_SESSION['username']);

// Verificar se a variável foi excluída
if (!isset($_SESSION['username'])) {
    echo 'A variável de sessão foi excluída com sucesso!';
}

// Encerrar a sessão
session_destroy();
?>
