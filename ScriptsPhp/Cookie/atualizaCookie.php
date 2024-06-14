<?php
// Definir o novo valor do cookie
$cookie_name = "user";
$cookie_value = "Pedro";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 dia

echo "Cookie '" . $cookie_name . "' atualizado com sucesso!";
?>
