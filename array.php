<?php
$cook =array("rice", "wheat", "oil");
echo $cook[2] ."<br>";
var_dump($cook);
echo "<br>";

$took =array("rice", "wheat", "oil");
$took[0]=("bean");
var_dump($took);
echo "<br>";

$took =array("rice", "wheat", "oil");
foreach($took as $x){
    echo "$x <br>";
}

$cars[0]="bmw";
$cars[1]="vw";
$cars[2]="mercedes";

array_push($cars, "ford");
var_dump($cars);
echo "<br>";

$cars1[0]="bmw";
$cars1[23]="vw";
$cars1[43]="mercedes";

array_push($cars1, "ford");
var_dump($cars1);
echo "<br>";

$detailed=array("brand"=>"bmw", "model"=>"M2", "age"=>2024);
$detailed["age"] = 2012;
foreach($detailed as $x=>$y){
    echo "$x:$y <br>";
}
var_dump($detailed);
echo $detailed["model"];


?>