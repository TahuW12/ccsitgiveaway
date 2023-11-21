<?php
$path = 'data.txt';
if (isset($_POST['nameInput'])){
    $fh = fopen($path, "a+");
    $string = $_POST['nameInput'].'\n';
    fwrite($fh, $string);
    fclose($fh)
}