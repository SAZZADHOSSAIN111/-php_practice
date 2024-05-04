<?php 
if (7>3) {
    echo "hello world";
}
echo "<br>";
$x = 20;
if($x>10){
    echo "using variable in if";
}
echo "<br>";
$rr = 25;
if ($rr <"27"){
    echo "good night";
} else {
    echo "good evening";
}
echo "<br>";
$a = 20;
$b = 30;
$c = 40;

if ($a < $b){
    echo " if is true";
} elseif ($a <$b) {
    echo " this if true";
} else {
    echo " all are false";
}
echo "<br>";

if ($a > $b){
    echo " if is true";
} elseif ($a <$b) {
    echo " else if is true";
} else {
    echo " all are false";
}
echo "<br>";

if ($a > $b){
    echo " if is true";
} elseif ($a >$b) {
    echo " else if is true";
} else {
    echo " all are false";
}
echo "<br>";
if ($a< $b) $t = "if shorthand printed";
echo "$t";
echo "<br>";
$m = $b > $a ? "hello" : "good bye";
echo "$m";
echo "<br>";
$m = $b < $a ? "hello" : "good bye";
echo "$m";
echo "<br>";
if ( $a<$b){
    echo " b above 10 ";
    if ( $b > $c) {
        echo "b above 30";
    } else {
        echo " but not above 30";
    }
}
?>