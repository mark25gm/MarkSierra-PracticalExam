<h1>Check the difference of two dates</h1>
<form method="POST" action="">
    <input name="date1" type="date">
    <input name="date2" type="date">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    
     $d1 = date_create($_POST['date1']);
     
     $d2 = date_create($_POST['date2']);
    // date_diff()
    $datediff = date_diff($d1, $d2);
    echo "Date1: ".date('Y-m-d' , strtotime($_POST['date1']));
    echo "<br>";
    echo "Date2: ".date('Y-m-d' , strtotime($_POST['date2']));
    echo "<br>";
    echo $datediff->format('%y Years %m Months %d Days' );
}

?>