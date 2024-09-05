<?php

namespace Hexlet\Tests\StringUtils;

function capitalize(string $text): string
{
    if ($text === '') {
        return '';
    }

    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
