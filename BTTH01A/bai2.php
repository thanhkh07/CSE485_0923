<?php

$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$nguoi = ['Anh','Sơn','Thắng','tôi'];


$yeu_thich_cua = [
    'Anh' => $arrs[0],
    'Sơn' => $arrs[3],
    'Thắng' => $arrs[2],
    'tôi' => $arrs[3],
];

$result = "";

foreach ($yeu_thich_cua as $nguoi => $mau) {
    $result .= "Màu " . $mau . " là màu yêu thích của " . $nguoi . "<br>";
}

echo $result;


echo "Màu " . $arrs[0] . " là màu yêu thích của " . $nguoi . "<br>";
