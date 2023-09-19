<?php

function convertToUpperCase($arr) {
    return array_map('strtoupper', $arr);
}


$arrs1 = ['a', 'b', 'ABC'];
$convertedArrs1 = convertToUpperCase($arrs1);
print_r($convertedArrs1);


$arrs2 = ['1', 'b', 'c', 'd'];
$convertedArrs2 = convertToUpperCase($arrs2);
print_r($convertedArrs2);


$arrs3 = ['a', 0, null, false];
$convertedArrs3 = convertToUpperCase($arrs3);
print_r($convertedArrs3);
