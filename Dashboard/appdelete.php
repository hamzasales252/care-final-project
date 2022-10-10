<?php
include("connect.php");
$id=$_GET['id'];
$result=mysqli_query($connect,"DELETE FROM appointment WHERE id=$id");
header("location:applist.php");

?>