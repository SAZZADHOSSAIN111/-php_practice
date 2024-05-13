<?php

echo "Today is " . date("y/m/d") . "<br>";
echo "Today is " . date("y.m.d") . "<br>";
echo "Today is " . date("y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "Today is " . date("H:i:sa") . "<br>";
// date_default_timezone_get("America/New_York"); // this take time from another area if that is a live server.
echo "Today is " . date("H:i:sa") . "<br>";
echo date("Y");
echo "<br>";

$d=mktime(23, 12, 24, 8, 13, 2003);
var_dump($d); 
echo "<br>";
echo "created date is " .date("Y.m.d.l h.i.sa.",$d);
echo "<br>";

$s=strtotime("May 5 2003 23:12 ");
echo "the date is " . date (" H:i:s Y/m/d",$s);
echo "<br>";

$s=strtotime("tomorrow");
echo "the date is " . date (" H:i:s Y/m/d",$s);
echo "<br>";

$s=strtotime("+5 years");
echo "the date is " . date (" H:i:s Y/m/d",$s);
echo "<br>";

$s=strtotime("+27 weeks");
echo "the date is " . date (" H:i:s Y/m/d",$s);
echo "<br>";