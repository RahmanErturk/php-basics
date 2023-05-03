<?php
declare(strict_types=1);
// Degisken Sayida Parametre Gönderimi

function sum (...$numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}

echo sum(15, 20, 25)."<br>";

function concatenate($transform, ...$strings) {
    $str = "";

    for ($i=0; $i < count($strings); $i++) { 

        if (!($i + 1 == count($strings))) {
            $str.= $strings[$i]." ";
        } else $str.= $strings[$i];

    }

    return $transform($str).".";
}

echo concatenate("ucfirst", "my", "name", "is", "Rahman")."<br>";
echo concatenate("strtoupper", "hello", "world")."<br>";

// Scopes

$x = "hello"; # global scope
function myTest() {

    $x = "world"; # local scope
    echo $x."<br>"; 
}
echo $x."<br>";
myTest();

$a = 10;
$b = 20; 
function myTest2() {
    global $a, $b; # global degiskeni sayesinde global olarak tanimlanmis variableleri lokalde de kullanabiliriz.
    return $a + $b;
}
echo myTest2()."<br>";

function myTest3() {
    $GLOBALS["b"] = $GLOBALS["a"] + $GLOBALS["b"];  # global degiskeni sayesinde global olarak tanimlanmis variableleri lokalde de kullanabiliriz.
}
myTest3();
echo $b."<br>";

    // function myTest4() {
    //     $x = 0;
    //     echo $x;
    //     $x++; 
    // }
    // myTest4();
    // myTest4();
    // myTest4();
    # Bu fonksiyon her zaman 0 sonucunu verir. Cunkü x hatirlanmaz ve x'i hep 0 olarak alir.
function myTest4() {
    static $x = 0; # static degiskeni x'in hatirlanmasini saglar.
    echo $x;
    $x++; 
}
myTest4();
myTest4();
myTest4();
echo "<br>";


// Referans Parametre Gönderimi => & operatorü
/* 
    function addFive($num) { 
        $num += 5;
        echo $num;
    }
    $originalNum = 10;

    addFive($originalNum); echo "<br>";   // Bu örnekte originalNum degiskeni degismez cunkü fonksiyon icerisine gönderilen originalNum
    echo $originalNum."<br>";             // degiskeni degil onun bir kopyasidir ve fonksiyon kendi scope'unu olusturur.   
*/
function addFive(&$num) { 
    $num += 5;
    echo $num;
}
$originalNum = 10;

addFive($originalNum); echo "<br>";   // Ancak fonksiyona gönderilen parametrenin basina & operatörü konuldugunda bu originalNum 
echo $originalNum."<br>";             // degiskenine Referans yapar ve onun bizzat kullanilmasini saglar.  


// Tanimsiz Parametre Gönderimi => func_get_args()
function intro() {
    $params = func_get_args();
    if ($params == 0) {
        echo "there is no parameter";
    } else {
        echo "These are from func_get_arg():<br>";
        echo func_get_arg(0)."<br>";
        echo func_get_arg(1).":<br>------------------------<br>";

        echo "These are from func_get_args():<br>";
        foreach ($params as $param) {
            echo $param."<br>";
        }
    }
}
intro("rahman", "germany", "roots48");



// Parametrelerin Veri Tiplerinin Tanimlanmasi => declare(strict_types=1)
/* 
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(10, "20")."<br>"; 
# Bu durumda 20 string olmasina ragmen int'e dönüstürülebilir oldugundan kabul edilir ancak bunun da engellenmesi isteniyorsa declare(strict_types=1) tanimlanir.
*/
// declare(strict_types=1); # strict_types declaration must be the very first statement in the script.
function addNumbers(int $a, int $b, bool $isActive): float {
    return $a + $b + 3.5;
}
echo addNumbers(10, 20, true)."<br>"; 

 
?>