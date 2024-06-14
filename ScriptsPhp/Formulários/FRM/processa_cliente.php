<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $idade = isset($_POST['idade']) ? $_POST['idade'] : '';

    // Aqui você pode processar os dados, como salvar em um banco de dados ou enviar um email

    // Exibe os dados submetidos
    echo "<h1>Informações Recebidas</h1>";
    echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Idade: " . htmlspecialchars($idade) . "</p>";
} else {
    // Se o formulário não foi submetido, redireciona para o formulário HTML
    header("Location: formulario.html");
    exit();
}
?>