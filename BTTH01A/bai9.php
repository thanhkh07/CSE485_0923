<?php

function convertToLowerCase($arr) {
    return array_map('strtolower', $arr);
}

$arrs1 = ['a', 'b', 'ABC'];
$convertedArrs1 = convertToLowerCase($arrs1);
print_r($convertedArrs1)."<br>";


$arrs2 = ['1', 'B', 'C', 'E'];
$convertedArrs2 = convertToLowerCase($arrs2);
print_r($convertedArrs2)."<br>";


$arrs3 = ['a', 0, null, false];
$convertedArrs3 = convertToLowerCase($arrs3);
print_r($convertedArrs3);

