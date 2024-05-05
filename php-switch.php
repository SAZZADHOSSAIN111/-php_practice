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
    if ($x===8)  continue;
    $x++;
    echo $x;
}
?>