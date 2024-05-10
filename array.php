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
echo "<br>";

function arrayFunc() {
    echo "xpeodfsjalksdjflaksjd";
}
$funcarray = array("a", "b", "message"=> "arrayFunc");

$funcarray["message"]();
echo "<br>";
$cars=array("brand"=>"bmw", "model"=>"M2", "age"=>2024);

foreach($cars as $x=>$y){
    echo "$x:$y <br>";
}
$cars3=array("brand", "model", "age");
unset($cars3[0], $cars3[1]);
// array_splice($cars3, 1, 2);
var_dump($cars3);
echo "<br>";
$cars4=array("brand"=>"bmw", "model"=>"M2", "age"=>2024);
unset ($cars4["brand"], $cars4["model"]);
var_dump($cars4);
echo "<br>";

$cars5=array("brand", "model", "age");
sort($cars5);
$ccars=count($cars5);
for ($t=0; $t<$ccars; $t++){
    echo "$cars5[$t]";
    echo "<br>";
}

$number = array(8, 9, 1, 2 , 3, 4, 5);
sort($number);
$numbers= count($number);
for($r=0; $r<$numbers; $r++){
    echo "$number[$r] <br>";
}
$number = array(8, 9, 1, 2 , 3, 4, 5);
rsort($number);
$numbers= count($number);
for($r=0; $r<$numbers; $r++){
    echo "$number[$r] <br>";
}
$cars6=array("brand"=>"Bmw", "model"=>"Z2", "year"=>2024);
krsort($cars6);
foreach ($cars6 as $r=>$title){
    echo "$r:$title <br>";
}

$multi = array(
    array("rich" , 22342, 2344),
    array("poor" , 22434, 4456),  
    array("gorib" , 232, 4454), 
    array("faul" , 232, 4546), 
);
echo $multi[0][0]." is the status ". $multi[0][1]. " is have money " . $multi[0][2]. " loan <br>";
echo $multi[1][0]." is the status ". $multi[1][1]. " is have money " . $multi[1][2]. " loan <br>";
echo $multi[2][0]." is the status ". $multi[2][1]. " is have money " . $multi[2][2]. " loan <br>";
echo $multi[3][0]." is the status ". $multi[3][1]. " is have money " . $multi[3][2]. " loan <br>";

?>