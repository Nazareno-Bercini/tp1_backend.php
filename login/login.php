<?php

$user = $_POST ["user"];
$password = $_POST ["pass"];

$ckuser = "potrero";
$ckpass = "php123";

if ($user == $ckuser && $password == $ckpass) {
    header ("location:https://www.potrerodigital.org/");
} else{
    header ("location:error.html");
}

?>