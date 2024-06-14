<?php
// Definir o nome do cookie que você quer excluir
$cookie_name = "user";

// Definir o tempo de expiração do cookie para o passado
setcookie($cookie_name, "", time() - 3600, "/");

echo "Cookie '" . $cookie_name . "' excluído com sucesso!";
?>
