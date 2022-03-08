<?php

session_start();

$conex = mysqli_connect(
    $host = "localhost", 
    $user = "root", 
    $pw = "",
    $db = "final_pp1"
);

if($conex){
    return;
}
?>