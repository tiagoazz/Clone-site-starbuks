<?php
// Iniciar a sessão
session_start();

// Definir variáveis de sessão
$_SESSION['username'] = 'Jony Bravo';

// Modificar variável de sessão
$_SESSION['username'] = 'Francisvaldo';

// Exibir variável de sessão modificada
echo 'Novo usuário: ' . $_SESSION['username'];

// Encerrar a sessão
session_destroy();
?>
