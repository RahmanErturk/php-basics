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
$result = "The product $product is {$price} €.";
// $vatPrice = $price + ($price * $vatRate);
$price = $price + ($price * $vatRate);

echo $result."<br>".$price."<br>";

// String Methods
echo $result[5] . "<br>";
echo strlen($result) . "<br>";
echo str_word_count($result) . "<br>";
echo strtolower($result) . "<br>";
echo strtoupper($result) . "<br>";
echo ucfirst($result). "<br>"; // Bas harfi büyük harfe cevirir.
echo str_replace("Iphone", "Samsung", $result). "<br>"; // Bir text icindeki kelimeyi verilen kelime ile degistirir.
echo str_replace(["Iphone", "1500"], ["Samsung", "1200"], $result). "<br>"; // Bir text icinde birden fazla kelimeyi degistirmek icin kullanilir.
echo substr($result, 0, 15)."...<br>"; 


// int Methods
$num2 = 10.2;
echo true."<br>"; // returns 1
echo false."<br>"; // returns nothing
echo is_int($num1) . "<br>"; // if true, returns 1
echo is_int($num2) . "<br>"; // if false, returns nothing

// var_dump() methodu bir degiskenin türünü verir.
echo var_dump($num1)."<br>";
echo var_dump(is_int($num1))."<br>";
echo var_dump(is_float($num1))."<br>";
echo var_dump(is_numeric("10"))."<br>";
echo var_dump(is_numeric("a10"))."<br>";

echo ceil(4.3)."<br>"; // her zaman yukari yuvarlar.
echo floor(4.3)."<br>"; // her zaman asagi yuvarlar.
echo round(4.3)."<br>"; // her zaman en yakin tam sayiya yuvarlar.
echo sqrt(25)."<br>"; // karekökünü verir.
echo abs(-5)."<br>"; // mutlak degerini verir.
echo pow(2, 5)."<br>"; // üssünü alir.
echo max(5, 15, 2, 45, 23)."<br>"; // max degeri verir.
echo min(5, 15, 2, 45, 23)."<br>"; // min degeri verir.


// Constants

# Constants veri saklamak icin kullanilir ancak atanan deger daha sonra degistirilemez. JS > const 

define("username", "King26"); // define ile veya const ile tanimlanabilir.
const password = "pass26!"; 
echo username."<br>".password."<br>";




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

        // Array Methods
        # count => length
        echo "Tüm ürünler ".count($allProducts)." adet ürün barindirmaktadir.<br>"; 


        # sort => siralama
        $numbers = [12, 24, 36, 23, 55, 1, 74];
        $names = ["furkan", "mahmut", "ezgi", "tugba", "rümeysa"];
        $users = [
            "dönüs" => "35",
            "murat" => "36",
            "rahman" => "26",
        ];

        #artan
        sort($numbers); 
        print_r($numbers); 
        echo "<br>";
        sort($names);
        print_r($names);
        echo "<br>";
        asort($users); # value'ye göre siralar.
        print_r($users);
        echo "<br>";
        ksort($users); # key'e göre siralar.
        print_r($users);
        echo "<br>";

        #azalan
        rsort($numbers); // rsort => reverse sort
        print_r($numbers);
        echo "<br>";
        rsort($names);
        print_r($names);
        echo "<br>";
        arsort($users); # value'ye göre siralar.
        print_r($users);
        echo "<br>";
        krsort($users); # key'e göre siralar.
        print_r($users);
        echo "<br>";


        # string to array => explode
        $string = "rahman|ertuerk|26";
        $array = explode("|", $string);
        print_r($array);
        echo "<br>";

        # array to string => implode
        $array = ["rahman", "ertuerk", "26"];
        $string = implode(">", $array);
        print_r($string);
        echo "<br>";

        # diziyi rastgele karistirma => shuffle
        print_r($names);
        echo "<br>";
        shuffle($names);
        print_r($names);
        echo "<br>";


        # arrayleri birlestirme
            # array_combine() -> aasociative array yapar
        $notes = [75, 80, 90];
        $students2 = ["faruk", "hasan", "sinem"];
        $arr = array_combine($students2, $notes);
        print_r($arr);
        echo "<br>";
            # array_merge() -> numeric array yapar
        $cities1 = ["istanbul", "eskisehir"];
        $cities2 = ["afyon", "antalya"];
        $arr = array_merge($cities1, $cities2);
        print_r($arr);
        echo "<br>";


        # tekrarlanan eleman sayisini alma
        $arr2 = ["izmir", "manisa", "izmir", "mugla", "manisa", "manisa", "kilis"];
        $arr = array_count_values($arr2);
        print_r($arr);
        echo "<br>";


        # arrayin sonuna eleman ekleme => array_push()
        array_push($cities1, "afyon");
        print_r($cities1);
        echo "<br>";
        # arrayin basina eleman ekleme => array_unshift()
        array_unshift($cities1, "bursa");
        print_r($cities1);
        echo "<br>";
?>
