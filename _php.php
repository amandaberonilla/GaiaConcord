<?php

if(isset($_POST["createSubmit"])) {
$un = $_POST["createUsername"];
$pw = $_POST["createPassword"];
$creds = $un . ":" . $pw;
$find = $un . ":";

$file = "-login.txt";
$text = fread($file, filesize($file));

if(strpos($text, $find)) {
    echo "no";
}
else {
    fwrite($file, $creds);
}

fclose($file);
}

?>