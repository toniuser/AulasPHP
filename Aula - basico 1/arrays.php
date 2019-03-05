<?php

// Array pode ser criados de duas formas 
// $array = array(); ou $array = [];


$array = array(
	139,
	59,
	600,
	99,
	489,
	"Despesas",
	true
);

echo $array[0];

echo "<br>";

echo $array[3];

echo "<br>";

echo $array[5];

echo "<br>";

echo $array[2]."<br>";

echo array("a","b","c","d")[0]."<br>";

$array2 = [
	2,
	3,
	5,
	4,
	8,
	9,
	"teste",
	false
];

echo $array2[6];





// chaves descritivas usando Arrays

$arraydescritivo = array(
	'toni' => 15,
	200,00,
	100.00,
	3000 => 13,
	"Paradoxo dos Gemeos"
);

echo $arraydescritivo[3001];


echo $arraydescritivo['toni'].'<br>';


echo $arraydescritivo[3000];

var_dump($arraydescritivo);