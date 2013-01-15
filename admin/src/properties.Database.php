<?php
if ($_SERVER["SERVER_NAME"] == "localhost") {
    define("DB_NAME", "virtour");
    define("DB_HOST", "127.0.0.1");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
}
else {
    define("DB_NAME", "virtour");
    define("DB_HOST", "mysql08.redehost.com.br");
    define("DB_USER", "u_app");
    define("DB_PASSWORD", "Cocadaboa01");
}
?>