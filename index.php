<?php
$region = getenv('REGION');
echo "App Server on \033[32m" . $_SERVER['SERVER_ADDR'] . "\033[0m in \033[34m" . $region . "\033[0m region. Running version \033[33m 1.0.0 \033[0m\n";

?>