<?php

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

use Webmozart\Assert\Assert;
use function Hexlet\Tests\StringUtils\capitalize;

Assert::eq(capitalize('hello'), 'Hello');
Assert::eq(capitalize(''), '');
Assert::eq(capitalize('0123'), '0123');

echo 'Все тесты пройдены!';
