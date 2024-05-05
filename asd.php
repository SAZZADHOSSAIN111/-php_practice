<?php
$x ="code love me";
$y ="I love to code";

// echo $x;

$a = "$x $y";
// echo $a;

var_dump(is_string($x));
echo "<br>";
echo substr ($x ,4);

// echo  trim("code is ok")
// echo $x + $y;

// $z =explode (" " , $y);
// print_r ($z)

$math = -6.50;
echo "<br>";
echo $math = (string) $math; //php casting

// php math

var_dump($math);
// echo(round($math));
echo "<br>";
echo(abs($math));
echo "<br>";

// php constant

define("web3", "1st define practiced");
echo web3;
echo "<br>";

const define = "define with const";
echo define;

echo "<br>";
// php magic constants

echo "this is in line number:" . __LINE__;
echo "<br>";
echo "this file from:" . __FILE__;
echo "<br>";
echo "this is the directory fo this file:" . __DIR__;
echo "<br>";

function robinhood(){
    echo "this function name is:" . __FUNCTION__;
}
robinhood();

echo "<br>";
//php oparators

$number = 10;
$number2 = 35;

echo $number + $number2;
echo "<br>";
echo $number - $number2;
echo "<br>";
echo $number * $number2;
echo "<br>";
echo $number2 / $number;
echo "<br>";
echo $number2 % $number;
echo "<br>";
echo $number2 ** $number;
echo "<br>";
echo $number2 += $number2;
echo "<br>";
echo $number2 /= $number2;
echo "<br>";
echo $number2 -= $number2;
echo "<br>";
echo $number2 %= $number;
echo "<br>";
$comp1 = 100;
$comp2 = "100";
$comp3 = "90";
var_dump ($comp1 == $comp2);
echo "<br>";
var_dump ($comp1 === $comp2);
echo "<br>";
var_dump ($comp1 != $comp2);
echo "<br>";
var_dump ($comp1 !== $comp2);
echo "<br>";
var_dump ($comp1 > $comp3);
echo "<br>";
var_dump ($comp1 < $comp3);
echo "<br>";
var_dump ($comp1 >= $comp3);
echo "<br>";
var_dump ($comp1 <= $comp2);
echo "<br>";
var_dump ($comp1 <=> $comp3);
echo "<br>";
var_dump ($comp3 <=> $comp2);
echo "<br>";
echo ++$comp1;
echo "<br>";
$comp1 = 100;
echo $comp1++;
echo "<br>";
$comp1 = 100;
echo --$comp1;
echo "<br>";
$comp1 = 100;
echo $comp1--;
echo "<br>";
$comp1 = 100;
$comp2 = "100";
if  ($comp1==100 and $comp2=="100"){
    echo "and";
}
echo "<br>";
if  ($comp1==100 or $comp2=="100"){
    echo "or";
}
echo "<br>";
$logic1 = 100;
$logic2 = "100";
if  ($logic1==100 xor $logic2==800){
    echo "xor";
}
echo "<br>";
if  ($logic1==100 && $logic2==100){
    echo "&&";
}
echo "<br>";
if  ($logic1==100 || $logic2==100){
    echo "||";
}
echo "<br>";
$yes = 100;
if (!($yes==90)) {
    echo "okey";
}
echo "<br>";
echo $logic1 . $logic2;
echo "<br>";
echo $logic1 .=$comp3;
echo "<br>";
$array = array( "a" => "green" , " b" => "orange" );
$array2 = array( "c" => "black" , " d" => "yellow" );
print_r($array + $array2);
echo "<br>";
var_dump($array == $array2);
echo "<br>";
var_dump($array === $array2);
echo "<br>";
var_dump($array != $array2);
echo "<br>";
var_dump($array <> $array2);
echo "<br>";
var_dump($array !== $array2);
?>