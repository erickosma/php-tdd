<?php
 require __DIR__ . '/vendor/autoload.php';

/*
spl_autoload_register(function ($class) {
    require_once(str_replace('\\', '/', $class . '.php'));
});

print_r(get_declared_classes());
exit;
*/
$useLib  = new \Outros\UseLib();

$useLib->imprime();
?>