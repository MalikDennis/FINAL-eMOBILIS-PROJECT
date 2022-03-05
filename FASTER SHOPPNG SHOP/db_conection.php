<?php
$host= "localhost";
$user="root";
$pass="";
$db_name="FASTER SHOPPING SHOP";

$connection = mysqli_connect($host,$user,$pass,$db_name);
//check if the connection is failed
if(!isset($connection)){
    die("DB CONNECTION FAILED")
}