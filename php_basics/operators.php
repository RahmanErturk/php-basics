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

    # switch

    $num = 5;

    switch ($num) {
        case 4:
            echo "four"; 
            break;
        case 5:
            echo "five"; 
            break;
        case 6:
            echo "six"; 
            break;
        default:
            echo "yanlis";
            break;
    }
    echo "<br>";

    $note = 60;

    switch (true) {
        case $note >= 0 && $note < 45:
            echo "your note is 1<br>";
            break;
        case $note >= 45 && $note < 55:
            echo "your note is 2<br>";
            break;
        case $note >= 55 && $note < 70:
            echo "your note is 3<br>";
            break;
        case $note >= 70 && $note < 85:
            echo "your note is 4<br>";
            break;
        case $note >= 85 && $note <= 100:
            echo "your note is 5<br>";
            break;
        
        default:
            echo "wrong value<br>";
            break;
    }

    $mounth = "january";

    switch ($mounth) {
        case 'december':
        case 'january':
        case 'february':
            echo "it is winter";
            break;
        case 'march':
        case 'april':
        case 'may':
            echo "it is spring";
            break;
        
        default:
            echo "wrong value";
            break;
    }
    echo "<br>";


    # ternary operator
    $age = 26;
    $salary = 1800;
    echo ($age >= 18) 
        ? ($salary >= 2000
            ? "kredi cekebilir"
            : "maas yetersiz")
        : "kredi cekemez";
    echo "<br>";


    # while loop
    $x = 1;

    while ($x <= 10) {
        if ($x == 10) echo $x."<br>";
        else echo $x.", ";
        $x++;
    }

    for ($i=0; $i <= 100 ; $i++) { 
        if ($i == 25) {
            break;
        }
        if ($i % 2 == 1) {
            continue;
        }
        echo $i." ";
    }
    echo "<br>";

    
    # date
    echo date("d/m/y")."<br>"; 

?>