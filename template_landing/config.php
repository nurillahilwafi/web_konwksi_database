<?php

$Server="localhost";
$user="root";
$password="";
$database="praktikum_lab";

$db=mysqli_connect($Server, $user, $password, $database);
if(!$db){
    die("database tidak terhubung :".mysqli_connect_error());
}
?>