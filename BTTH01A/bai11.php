<?php

$array = array(1, 2, 3, 4, 5);

array_splice($array, 2, 1);

foreach($array as $arr){
    echo $arr . "<br>";
}
