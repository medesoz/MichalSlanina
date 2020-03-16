<?php

ini_set("xdebug.overload_var_dump", 1);

//Promene
echo '<b>Vypsane promene </b>';
$int = 8; //nedesetinne cislo
$float = 3.3; //desetine cislo
$string = "Ahoj"; //sting (text)
$boolean = true; //boolean (pravda x nepravda)
$null = null; //nulova hodnota
$array = array("Ahoj", array(1, 7.6, array(false))); //array


var_dump($int, $float, $string, $boolean, $null, $array);

//Operatory
echo '<b>Vypsane matematicke operace </b>';
echo "<br> <br>";

$a = 7;
$b = 5;

echo $a - $b; //Od a se odecte b
echo "<br>";
echo $a + $b; //K a se pricte b
echo "<br>";
echo $a * $b; //Nasobeni a krat b
echo "<br>";
echo $a / $b; //Deleni se zbytkem
echo "<br>";
echo $a % $b; //Cislo se vydeli ale zapise se pouze zbytek
echo "<br>";

//Podminky
echo '<b>Vypsane podminky </b>';
echo "<br> <br>";
$isTrue = false;
$a = 8;
$b= 6;

if ($isTrue) {
    echo "Je pravda";
} else if (!$isTrue) {
    echo "Nepravda";
} else {
    echo "Promena neni typu boolean";
}
echo "<br> <br>";

if($a>$b) {
    echo "promena a je vetsi nez b";
}
else if($a<$b) {
    echo "promena a je mensi nez b"; 
}
else if($a===$b) {
    echo "promena a je stejne cislo jako b"; 
}
echo "<br>";
//Porovnavaci operatory
echo '<b>Vypsane porovnavaci operatory </b>';
echo "<br> <br>";
$a= 3;
$b=4;
var_dump($a>$b);
var_dump($a<$b);
var_dump($a==$b);
var_dump($a===$b);
var_dump($a>=$b);
var_dump($a<=$b);
//Funkce
echo '<b>Vypsane Funkce </b>';
echo "<br> <br>";

function repeat(){
    for ($i = 0; $i <= 5; $i++) {
        echo $i;
        echo "<br>";
    }
    echo "<b>Vypsal si " .$i ." x</b>";
}
echo repeat();
echo "<br>";
echo round(5.9877);
echo "<br>";
echo "<br>";
// cykly
for($i = 1; $i<=5; $i++){
    echo $i;
    echo "<br>";
}
echo "<br>";
$array = array(prvni, druhy);
$value = 0;
foreach ($array as $value) {
    var_dump($array);
}

// Vlastni funkce

function heslo($cislo) {
    $heslo = "";
    $isTooLong = 16;
    $isTooShort = 4;
    $cislo = strlen($heslo);
    
    if ($heslo == 123456 || $heslo == 123456789 || $heslo == "qwerty1234" || $heslo == "heslo" || $heslo == "password") {
       echo "heslo neni bezpecne";
    }
    else if($isTooShort > $cislo){
       echo  "heslo";
       echo " je moc kratke";
    }
    else if($isTooLong < $cislo){
        echo "heslo";
        echo " je moc dlouhe";
        
    }

    else{
       echo "heslo";
       echo " splnuje parametry";
    }
}
echo heslo(strlen($heslo));
echo rand(heslo.Length);
echo "<br>";


 
// funkce ktera nachazi sprosta slova ve vete
ini_set("xdebug.overload_var_dump",1);

$veta = "Tato veta testuje zda se v textu nachazi sproste slovo 'kurva' ";
$not  = array('burger', 'melon', 'zmrd', 'kurva');

function isValid($veta, $not) {
    foreach($not as $hodnota) {
		if(strpos($veta, $hodnota) !== false){
		return true;
	} 
    }
    return false;
}

var_dump(isValid($veta, $not));


?>
