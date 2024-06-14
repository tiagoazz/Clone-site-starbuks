<?php
// Definir o valor do cookie
$cookie_name = "usuario";
$cookie_value = "Rodolfo";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 dia

echo "Cookie '" . $cookie_name . "' criado com sucesso!";
?>