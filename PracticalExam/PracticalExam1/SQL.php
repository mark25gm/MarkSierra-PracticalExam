<?php
$conn = mysqli_connect('localhost','root','','practicalexam') or die();
//A. Get all data of highest paid employee (without using LIMIT)
echo "A. Get all data of highest paid employee (without using LIMIT)<br><br>";

$qry = mysqli_query($conn,"SELECT `employees`.`name`,`employees`.`date_hired`,`departments`.`department`,`salary`.`salary` FROM `employees`,`departments`,`salary` WHERE `employees`.`department_id` = `departments`.`id` AND `employees`.`salary_id`=`salary`.`id` ORDER BY `salary`.`salary` DESC  ");
// print_r($qry);
$row = mysqli_fetch_assoc($qry);
foreach($row as $key=>$value){
    echo "$key = $value <br>";
}

///////////////////
echo "<br>";
echo "<br>";
echo "<br>";



//B. Get all employees that are hired from 2017-2018. 
echo "B. Get all employees that are hired from 2017-2018.<br><br>";

$qry = mysqli_query($conn,"SELECT `employees`.`name`, `employees`.`date_hired`, `departments`.`department`, `salary`.`salary` FROM `employees`,`departments`,`salary` WHERE `employees`.`department_id` = `departments`.`id` AND `employees`.`salary_id`=`salary`.`id` AND `employees`.`date_hired` BETWEEN '2017-01-01' AND '2018-12-31'");
while($row = mysqli_fetch_assoc($qry)){
    foreach($row as $key=>$value){
        echo "$key = $value |";
    }
    echo "<br>";
}


///////////////////
echo "<br>";
echo "<br>";
echo "<br>";


//C. Get all employees that belongs to IT  department AND hired 2018 onwards.
echo "C. Get all employees that belongs to IT  department AND hired 2018 onwards. <br><br>";

$qry = mysqli_query($conn,"SELECT `employees`.`name`, `employees`.`date_hired`, `departments`.`department`, `salary`.`salary` FROM `employees`,`departments`,`salary` WHERE `employees`.`department_id` = `departments`.`id` AND `employees`.`salary_id`=`salary`.`id` AND `employees`.`date_hired` >= '2018-01-01' AND `departments`.`department` = 'IT'");
while($row = mysqli_fetch_assoc($qry)){
    foreach($row as $key=>$value){
        echo "$key = $value |";
    }
    echo "<br>";
}

?>