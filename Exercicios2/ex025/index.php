<?php
// Verifica se o script está sendo acessado de uma maneira não autorizada
if (php_sapi_name() === 'cli') {
    echo "Este script não deve ser executado a partir da linha de comando.";
    exit;
}

// Código PHP normal aqui
echo "O script PHP está sendo executado corretamente.";
?>
