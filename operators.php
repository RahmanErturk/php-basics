<?php

/*
    Operators in Php
        - Arithmetic Operators
        - Assignment Operators
        - Comparison Operators
        - Logical Operators
*/

// Arithmetic Operators

$a = 10;
$b = 15; 

echo $a + $b."<br>";
echo $a - $b."<br>"; 
echo $a / $b."<br>"; 
echo $a * $b."<br>"; 
echo $b % $a."<br>"; 
echo $a ** $b."<br>"; 
echo $a++."<br>"; // önce ekrana yazdirir sonra artirir.
echo ++$a."<br>"; // önce artirir sonra ekrana yazdirir.


// Assignment Operators

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
echo $a."<br>"; 


// Comparison Operators

$a = 10;
$b = 15; 

$result = $a == $b."<br>"; 
$result = $a != $b."<br>";
$result = $a < $b."<br>";
$result = $a <= $b."<br>";
$result = $a > $b."<br>";
$result = $a >= $b."<br>";
echo var_dump($result)."<br>"; 


// Logical Operators

$age = 26;
$study = "Law";

$sresult2 = ($age >= 18);
echo var_dump($sresult2)."<br>"; 
$sresult3 = ($study == "Law");	
echo var_dump($sresult3)."<br>"; 

// && veya and kullanilabilir. 
$resul4 = ($age >= 18 and $study == "Law");
echo var_dump($resul4)."<br>"; 
// || veya or kullanilabilir.
$resul5 = ($age >= 18 && ($study == "Law" || $study == "Business"));
echo var_dump($resul5)."<br>"; 


// Conditional Statements
if ($a == $b) {
    echo "a is equal to b<br>";
} else {
    echo "a is not equal to b<br>";
}

$db_username = "abcde";
$db_password = "12345";

if ($db_username !== "abcde") {
    echo "db_username is false<br>";
} elseif ($db_password !== "12345") {
    echo "db_password is false<br>";
} else {
    echo "datas are true<br>";
}

$names = ["ali","ahmet", "ayse", "canan"];

for ($i=0; $i < count($names) ; $i++) { 
    echo $names[$i]."<br>";
}

$products = [
    ["iphone 12", 800],
    ["iphone 13", 1100],
    ["iphone 14", 1500]
];

for ($i=0; $i < count($products) ; $i++) { 
    echo $products[$i][0]." = ".$products[$i][1]."<br>";
}

foreach ($products as $product) {
    echo $product[0]." = ".$product[1]."<br>";
}

?>