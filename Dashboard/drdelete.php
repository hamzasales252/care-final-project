<?php
include("connect.php");
$id=$_GET['id'];
$result=mysqli_query($connect,"DELETE FROM doctor WHERE id=$id");
header("location:alldr.php");

?>