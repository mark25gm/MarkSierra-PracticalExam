<h1>Reverse the word</h1>
<form action="" method="get">
    <input name="word" type="text">
    <input type="submit">
</form>
<?php
    if(isset($_GET['word'])){
        // echo $_GET['word'];
        $word = $_GET['word'];
        echo $rword = strrev($word);
    }


?>