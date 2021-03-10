<?php 
echo"<pre>";
echo "Display the value that have the most number occurrence; in case of tie arrange it in alphabetical order<br><br>";
//Display the value that have the most number occurrence; in case of tie arrange it in alphabetical order

$array = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian");
sort($array);
// print_r($array);
foreach($array as $value){
    echo "$value ";
}

//////////////////////////////////////
echo "<br>";
echo "<br>";
echo "<br>";

echo "Sort the array in ascending order; if the value is an odd number, round it up to nearest tens<br><br>";
//Sort the array in ascending order; if the value is an odd number, round it up to nearest tens

$array = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($array);
foreach($array as $value){
    $round = round($value,-1);
    echo "$round ";
}


//////////////////////////////////////
echo "<br>";
echo "<br>";
echo "<br>";


echo "Display the item that is not repetitive.<br>";
//Display the item that is not repetitive. 
$array = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
foreach(array_unique($array) as $value){
    echo "$value ";
}
?>