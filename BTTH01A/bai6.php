<?php

$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysOnly = array_values($keys);
$valuesOnly = array_values($values);
$keysAndValues = array_combine($keysOnly, $valuesOnly);

foreach($keysAndValues as $string){
    echo $string . "<br>";
}
