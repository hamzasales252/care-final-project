<?php
$username="root";
$host="localhost";
$password="";
$db="tb_registration";
$connect=mysqli_connect($host,$username,$password);
if(!$connect){
    die("Connection Error");
}

mysqli_select_db($connect,$db);
?>