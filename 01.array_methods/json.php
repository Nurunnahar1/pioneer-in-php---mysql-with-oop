<?php


//=====array to string using json_encode=============
$variables = [
    "name" => "Nasrin",
    "age" => 29,
    "skill" => "Laravel developer"
];

$makeJsonData = json_encode($variables);
echo $makeJsonData; //output {"name":"Nasrin","age":29,"skill":"Laravel developer"}



//============string to array using json_decode============
$jsonData = '{"name":"Nasrin","age":29,"skill":"Laravel developer"}';
$stringToArray = json_decode($jsonData, true);
echo '<pre>';
print_r($stringToArray);
echo '</pre>';
/*
output
Array
(
[name] => Nasrin
[age] => 29
[skill] => Laravel developer
)

*/  