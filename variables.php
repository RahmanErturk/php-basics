<?php

$fName = "Rahman";
$lName = "Ertuerk";

echo $fName . " " . $lName;

echo "<br>";

$num1 = 123;
$num2 = 456;

echo ($num1 + $num2) . "<br>";
echo $num1 . $num2;

echo "<br>";

/* 
Degiskenler sayi ile baslayamaz.
$1num => false 
*/

/* 
PHP veri Tipleri

- String
- int
- double => 10.2
- boolean
- object
- array
- null
*/

$product = "Iphone14";
$price = 1500;
$vatRate = 0.19;

// $result = "The Product ".$product." is ".$price." €.";
$result = "The Product {$product} is {$price} €.";
// $vatPrice = $price + ($price * $vatRate);
$price = $price + ($price * $vatRate);

echo $result . "<br>" . $price;

// String Methods
echo $result[5] . "<br>";
echo strlen($result) . "<br>";
echo str_word_count($result) . "<br>";
echo strtolower($result) . "<br>";
echo strtoupper($result) . "<br>";

// int Methods
$num2 = 10.2;
echo true."<br>"; // returns 1
echo false."<br>"; // returns nothing
echo is_int($num1) . "<br>"; // if true, returns 1
echo is_int($num2) . "<br>"; // if false, returns nothing

// var_dump() methodu bir degiskenin türünü verir.
echo var_dump($num1)."<br>";
echo var_dump(is_int($num1))."<br>";
echo var_dump(is_numeric("10"))."<br>";
echo var_dump(is_numeric("a10"))."<br>";

echo ceil(4.3)."<br>"; // her zaman yukari yuvarlar.
echo floor(4.3)."<br>"; // her zaman asagi yuvarlar.
echo round(4.3)."<br>"; // her zaman en yakin tam sayiya yuvarlar.
echo sqrt(25)."<br>"; // karekökünü verir.
echo abs(-5)."<br>"; // mutlak degerini verir.


// Arrays
    // Numeric Arrays
    // Associative Arrays

        // Numeric arrays
        // php case sensitivedir asagidaki iki variable'i farkli variabeller olarak algilar.
        $students = array("ali", "veli", "deli");
        $Students = ["ayse", "fatma", "hayriye"];

        echo $students[0]."<br>";
        echo $students[1]."<br>";
        echo gettype($students)."<br>";

        // Associative Arrays
        $licensePlateInfos = array(
            "03" => "afyon",
            "06" => "ankara",
            "26" => "eskisehir"
        );
        echo $licensePlateInfos["26"]."<br>";

        $tel = [
            "ali" => "12345",
            "veli" => "23456",
            "deli" => "34567"
        ];
        echo $tel["ali"]."<br>";

        $productInfo = [
            "name" => "iphone",
            "type" => "telephone",
            "in_store" => true,
        ];
        echo $productInfo["name"]." ".$productInfo["type"]."<br>";

        $allProducts = [
            [
                "name" => "iphone",
                "type" => "telephone",
                "in_store" => true,
            ],
            [
                "name" => "samsung",
                "type" => "telephone",
                "in_store" => true, // this is associative array
            ],
            [
                "name" => "lg",
                "type" => "television",
                "in_store" => true,
            ]
        ]; // this is numeric array
        echo $allProducts[1]["name"]." ".$allProducts[1]["type"]."<br>";

?>
