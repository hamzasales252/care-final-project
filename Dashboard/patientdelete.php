<?php
include("connect.php");
$id=$_GET['id'];
$result=mysqli_query($connect,"DELETE FROM patient WHERE id=$id");
header("location:patientall.php");

?>