<?php

namespace Hexlet\PhpUnit\Utils;

// Эта функция переворачивает переданную строку
function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}
