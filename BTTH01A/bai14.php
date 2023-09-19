<?php
$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1', 'giá trị 2'
];

$resultArray = [];


for ($i = 0; $i < count($array1); $i++) {
    // Gán giá trị từ mảng thứ hai và mảng thứ nhất vào mảng kết quả
    $resultArray[] = array_merge([$array2[$i]], $array1[$i]);
}

print_r($resultArray);
