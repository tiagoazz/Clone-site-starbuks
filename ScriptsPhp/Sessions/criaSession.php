<?php
// Iniciar a sessão
session_start();

// Definir variáveis de sessão
$_SESSION['username'] = 'Rodolfo';
$_SESSION['email'] = 'rozin@zn.com';

// Exibir variáveis de sessão
echo 'Usuário: ' . $_SESSION['username'] . '<br>';
echo 'Email: ' . $_SESSION['email'];

// Encerrar a sessão
session_destroy();
?>
