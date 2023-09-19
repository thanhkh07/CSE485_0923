<?php

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

function sumArray($arr) {
    return array_sum($arr);
}

function productArray($arr) {
    return array_product($arr);
}

function subtractArray($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result -= $arr[$i];
    }
    return $result;
}

function divideArray($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $result /= $arr[$i];
        }
    }
    return $result;
}

// Sử dụng hàm và in kết quả
echo "Tổng các phần tử: " . implode("+ ", $arrs) . sumArray($arrs) . "<br>";
echo "Tích các phần tử: " . implode("* ", $arrs) . productArray($arrs) . "<br>";
echo "Hiệu các phần tử: " . implode("- ", $arrs) . subtractArray($arrs) . "<br>";
echo "Thương các phần tử: " .implode("/", $arrs) . divideArray($arrs) . "<br>";
