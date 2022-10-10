<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care group</title>
</head>
<body>
<!-- php for form-->
<?php
        include ('connect.php');
error_reporting(0);
$name=$email=$date=$department=$doctor=$phone="";
$nameError=$emailError=$dateError=$departmentError=$doctorError=$phoneError="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameError="Name is Required"; 
    }else{
        $name=refine_data($_POST["name"]);
        #var pattern=/^[a-zA-Z]*$/
        if(!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameError="Only Letters and white space allowed";
        }
    }
    if(empty($_POST["email"])){
        $emailError="Email is Required";
    }else{
        $email=refine_data($_POST["email"]);
    }
   
    if(empty($_POST["date"])){
      $dateError="date is Required";
  }else{
      $date=refine_data($_POST["date"]);
  }
  if(empty($_POST["department"])){
    $departmentError="Department field is Required";
}else{
    $department=refine_data($_POST["department"]);
}
if(empty($_POST["doctor"])){
  $doctorError="Doctor field is Required";
}else{
  $doctor=refine_data($_POST["doctor"]);
}
    if(empty($_POST["phone"])){
        $phoneError="Phone is Required";
    }else{
        $phone=refine_data($_POST["phone"]);
    }
      $sql="INSERT INTO appointment (name,email,date,department,doctor,phone) 
      VALUES ('$name','$email','$date','$department','$doctor','$phone')";
        $result=mysqli_query($connect,$sql);
       if(!$result){
        echo "<script>alert('Error')</script>";
       }
       else{
            move_uploaded_file($tempname,$folder) ;
            echo "<script>alert('Data Inserted Successfully')</script>";
        }
        
        
 }            
function refine_data($data){

  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data,ENT_QUOTES);
  return $data;
}
  
mysqli_close($connect);

?>


 


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date">
          </div>

          <div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          
          <select name="departement" id="departement" class="custom-select">
              <option value="">Specialization</option>
             <!-- <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option> -->
              
            </select>
          </div>
          </div>
          <div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="doctor" class="custom-select">
              <option value="">Doctor Name</option>
              <!-- <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option> -->
            </select>
          </div>
          </div>
             <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number.." name="phone">
          </div>
          
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms" style="width:120px;color:#6610f2">
            <input type="submit" class="form-control">
          </div>
        <!-- <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button> -->
      </form>
    </div>
  </div> <!-- .page-section -->
  
</body>
</html>