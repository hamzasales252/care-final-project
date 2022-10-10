<?php
include("connect.php");
$id=$_GET['id'];
$result=mysqli_query($connect,"DELETE FROM city WHERE id=$id");
header("location:allcity.php");

?>