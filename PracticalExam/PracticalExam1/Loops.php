<?php
echo "Create a PHP function using WHILE loop that will sum all even numbers from 0-10<br><br>";
//Create a PHP function using WHILE loop that will sum all even numbers from 0-10
$number = range(0,10);
$i = 0;
$sum = 0;
while($i < count($number)){
//    echo $number[$i];
    if($number[$i] % 2 == 0){
        $sum += $number[$i];
    }
    $i++;
}
echo $sum;

//////////////////////////////////////////////////////
echo "<br>";
echo "<br>";
echo "<br>";

//Create a PHP function using DO WHILE loop that will display all odd number from 0-10 
echo "Create a PHP function using DO WHILE loop that will display all odd number from 0-10 <br><br>";

$number = range(0,10);
$i = 0;
do{
    if($number[$i] % 2 == 1){
        echo $number[$i]." "; 
    }
    $i++;
} while ($i <= 10);

/////////////////////////////////////////////////////////
echo "<br>";
echo "<br>";
echo "<br>";

//Create a PHP function using FOR loop that will display 10 numbers in fibonacci sequence
echo "Create a PHP function using FOR loop that will display 10 numbers in fibonacci sequence<br><br>";
$number1 = 0;
$number2 = 1;
for($i = 0;$i <= 10;$i++){
    echo $number1." "; 
    $number3 = $number2 + $number1; 
    $number1 = $number2; 
    $number2 = $number3; 
}


?>