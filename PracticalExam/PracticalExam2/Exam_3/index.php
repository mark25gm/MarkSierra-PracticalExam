<h1>Check if number is Fibonacci number</h1>
<form action="" method="GET">
    <input type="number" name="number">
    <input type="submit" name="submit">
</form>
<?php 
    if(isset($_GET['submit'])){
        $num = $_GET['number'];
        $x1 = 5*pow($num, 2)+4;
        $x2 = 5*pow($num, 2)-4;
        if(sqrt($x1) == floor(sqrt($x1)) OR sqrt($x2) == floor(sqrt($x2))){
            echo "$num is a Fibonacci number";
        }
    }


?>