<?php
// $username="root";
// $host="localhost";
// $password="";
// $db="tb_registration";
// $connect=mysqli_connect($host,$username,$password);
// if(!$connect){
//     die("Connection Error");
// }

// mysqli_select_db($connect,$db);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "care";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>