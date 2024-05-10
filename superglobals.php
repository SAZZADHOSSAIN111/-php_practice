<?php
$x=5;

function myFunction(){
    // echo $GLOBALS['x'];
    global $x;
    echo $x;
}
myFunction();

echo $_SERVER['PHP_SELF'];
?>