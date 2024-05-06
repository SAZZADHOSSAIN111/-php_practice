<?php
$favoritebike = "suzuki";

switch ($favoritebike) {
    case "suzuki":
        echo "my favorite bike is suzuki gixxer";
        echo "<br>";
        echo "this a line before break reaches";
        break;
    case "yamaha":
        echo "favorite bike is yamaha R15";
    default:
        echo "no bike is chossen by me";
}
echo "<br>";
$x =1;
while($x < 10) { 
    if ($x===8) break ;
    $x++;
    echo $x;
}
echo "<br>";
while($x < 10) { 
    $x++;
    if ($x==8)  continue;
    echo $x;
}
echo "<br>";

while ($x < 100) {
    $x+=10;
    echo "$x <br>";
}
$x =10;

do{
    echo "$x <br>";
    $x++;
} while ($x<15);

$x =10;
do{
    if ($x == 30) break;
    echo "$x ";
    $x++;
} while ($x<31);
$x =10;
do{
    $x++;
    if ($x == 30) continue;
    echo "$x <br>";
} while ($x<31);

for ($x=3; $x <=10; $x++) {
    echo "the number is :$x <br>";
}
for ($x=5; $x <=10; $x++) {
    if ($x ==8) break;
    echo "the number is :$x <br>";
}
for ($x=5; $x <=10; $x++) {
    if ($x ==8) continue;
    echo "continue the number is :$x <br>";
}
for ($x=5; $x <=50; $x+=12) {
    if ($x ==8) ;
    echo "step 12 the number is :$x <br>";
}

$cars = array ("bmw" , "mercedes", "ford");

foreach ($cars as $x){
    echo "$x <br>";
}

$marbell = array ( "black"=> "35", "blue" => "50", "green"=> "60");

foreach( $marbell as $x=>$y) {
    echo "$x:$y <br>";
}
?>