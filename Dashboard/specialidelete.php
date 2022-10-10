<?php
include("connect.php");
$id=$_GET['id'];
$result=mysqli_query($connect,"DELETE FROM specialization WHERE id=$id");
header("location:spcall.php");

?>