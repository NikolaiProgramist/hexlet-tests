<?php

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

use function Hexlet\Tests\StringUtils\capitalize;

if (capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('0123') !== '0123') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
