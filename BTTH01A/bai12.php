<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers); 

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị trong mảng
$maxNumber = max($numbers);
$minNumber = min($numbers);
$sumNumbers = array_sum($numbers);

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
$sortedAscending = $numbers;
asort($sortedAscending); // Sắp xếp theo chiều tăng các giá trị

$sortedDescending = $numbers;
arsort($sortedDescending); // Sắp xếp theo chiều giảm các giá trị

// Sắp xếp mảng theo chiều tăng và giảm các key
$sortedKeysAscending = $numbers;
ksort($sortedKeysAscending); // Sắp xếp theo chiều tăng các key

$sortedKeysDescending = $numbers;
krsort($sortedKeysDescending); // Sắp xếp theo chiều giảm các key


echo "Phần tử đầu tiên: " . $firstElement . "<br>";
echo "Phần tử cuối cùng: " . $lastElement . "<br>";
echo "Số lớn nhất: " . $maxNumber . "<br>";
echo "Số nhỏ nhất: " . $minNumber . "<br>";
echo "Tổng các giá trị: " . $sumNumbers . "<br>";

echo "Mảng theo chiều tăng các giá trị: ";
print_r($sortedAscending);

echo "<br>";
echo "Mảng theo chiều giảm các giá trị: ";
print_r($sortedDescending). "<br>";

echo "<br>";
echo "Mảng theo chiều tăng các key: ";
print_r($sortedKeysAscending). "<br>";

echo "<br>";
echo "Mảng theo chiều giảm các key: ";
print_r($sortedKeysDescending);
