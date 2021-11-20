<?php
spl_autoload_register(function (string $class){
    echo "Try load: $class";
    $path = __DIR__ . "/../src/{$class}.php";
    if (is_readable($path)) {
        echo "file wos found: $path";
        require $path;
    }
});
new Magic();
