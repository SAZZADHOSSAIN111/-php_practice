<?php
$x=5;

function myFunction(){
    // echo $GLOBALS['x'];
    global $x;
    echo $x;
}
myFunction();

echo $_SERVER['PHP_SELF'];
echo "<br>";
$str ="the name of my home town is rangpur";
$search ="/me/i";

echo preg_match($search, $str);
echo "<br>";
echo preg_match_all($search, $str);
echo "<br>";
echo preg_replace($search, "be" , $str);

?>