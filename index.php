<?php
$region = getenv('REGION');
if ($region == "Tripoli") {
    $colour = "\033[92m";
} else {
    $colour = "\033[34m";
}
echo "App Server on \033[32m" . $_SERVER['SERVER_ADDR'] . "\033[0m in " . $colour . $region . "\033[0m region. Running version \033[33m 2.0.0 \033[0m\n";

?>