<h1>Check if word is a palindrome</h1>
<form action="" method="get">
    <input name="word" type="text">
    <input type="submit">
</form>
<?php
    if(isset($_GET['word'])){
        // echo $_GET['word'];
        $word = $_GET['word'];
        $rword = strrev($word);
        if($word == $rword){
            echo "<b>$word</b> is a palindrome";
        }else{
            echo "<b>$word</b> is not a palindrome";
        }
    }


?>
<h3>try using words like(madam,eye,noon)</h3>