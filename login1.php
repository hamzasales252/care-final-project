<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
      <input type="text" placeholder="username" name="email"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
    <?php
    include("connect.php");
    session_start();
    error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $email=$_POST["email"];
        $pwd=$_POST["password"];
    
        $sql="SELECT * FROM user WHERE email='$email' AND password='$pwd'";
        $result=mysqli_query($connect,$sql);
        if($a=mysqli_fetch_array($result)){
            if($a["role"]=="admin"){
            $_SESSION["email"]=$a["email"];
            $_SESSION["id"]=$a["id"];
           // echo "<script>alert('Login')</script>";
           header("location:Dashboard/index.php");
            }
            if($a["role"]=="doctor"){
                
            $_SESSION["email"]=$a["email"];
            $_SESSION["id"]=$a["id"];
            header("location:Dashboard/doctordash.php");
            }
        }else{
            echo "Register First....";
            
        }
     mysqli_close($connect);  
        }
    ?>
  </div>
</div>
</body>
</html>