<?php
    if(isset($_GET['submit'])){
        $file = 'hello_there.php';

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }
?>
<form action="" method="GET" target="_blank">
    <label>Click the button to get to page two</label>
    <input type="submit" name="go">
</form>
