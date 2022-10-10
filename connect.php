<?php
    $username="root";
    $host="localhost";
    $password="";
    $db="care";
    $connect=mysqli_connect($host,$username,$password);
    if(!$connect){
        die("Connection Error");
    }
   mysqli_select_db($connect,$db);
    
   # mysqli_close($connect);
    ?>
