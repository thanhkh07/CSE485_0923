<?php

$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLengthString = $array[0];
$minLengthString = $array[0];

foreach ($array as $string) {
    $currentLength = strlen($string);
    
    if (strlen($maxLengthString) < $currentLength) {
        $maxLengthString = $string;
    }
    
    if (strlen($minLengthString) > $currentLength) {
        $minLengthString = $string;
    }
}

echo "Chuỗi lớn nhất là {$maxLengthString}, độ dài = " . strlen($maxLengthString) . "<br>";
echo "Chuỗi nhỏ nhất là {$minLengthString}, độ dài = " . strlen($minLengthString) . "<br>";
