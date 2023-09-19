<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Tính toán giá trị trung bình của mảng
$average = array_sum($numbers) / count($numbers);

// Liệt kê các số có giá trị lớn hơn giá trị trung bình
$numbersAboveAverage = [];
foreach ($numbers as $number) {
    if ($number > $average) {
        $numbersAboveAverage[] = $number;
    }
}

// Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình
$numbersBelowOrEqualAverage = [];
foreach ($numbers as $number) {
    if ($number <= $average) {
        $numbersBelowOrEqualAverage[] = $number;
    }
}


echo "Giá trị trung bình của mảng: " . $average . "\n";

echo "<br>";
echo "Các số có giá trị lớn hơn giá trị trung bình: ";
print_r($numbersAboveAverage);

echo "<br>";
echo "Các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình: ";
print_r($numbersBelowOrEqualAverage);
