<?php
function firstFunction(){
    echo "hello world";
}

firstFunction();

function firstname($name) {
    echo "$name Hossain. <br>";    
}

firstname("Roni");
firstname("rakib");
firstname("apon");
firstname("maruf");
firstname("kobir");

function doubleVar($name, $behave) {
    echo "$name Hossain $behave. <br>";    
}

doubleVar("Roni", "good");
doubleVar("rakib", "not good");
doubleVar("apon", "faltu");
doubleVar("maruf", "capabazz");
doubleVar("kobir", "don't know");

function unsetHeight($minheight = 20) {
    echo " The Height Is: $minheight <br>";
}

unsetHeight(150);
unsetHeight();
unsetHeight(300);

function plus($x, $y){
    $z = $x+$y;
    return $z;
}
echo "5+20= " . plus(5,20). "<br>";
echo "5+30= " . plus(5,30). "<br>";
echo "85+90= " . plus(85,90). "<br>";
echo "99+78= " . plus(99,78). "<br>";

function reffe(&$replace) {
    $replace += 20;
}
$target = 5;
reffe($target);
echo $target;
?>