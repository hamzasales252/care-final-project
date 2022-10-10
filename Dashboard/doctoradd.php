
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Care group</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css"/>
  <style>.error{ color: red;}</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"  style="background: #00D9A5;">
      <div class="navbar-brand-wrapper d-flex justify-content-center"  style="background: #00D9A5;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100" >
          <a class="navbar-brand brand-logo" href="index.php"><img src="images/logo-mini.PNG" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.PNG" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
     </a>
     <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-links-wrapper d-flex align-items-stretch">
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Main Dahboard</p>
            </div>
          </li>
        </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
              aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
              aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
            aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn mdi mdi-account menu-icon"></i>
              <span class="menu-title">Doctor</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="alldr.php">Doctors</a></li>
                <li class="nav-item"> <a class="nav-link" href="doctoradd.php">New Doctor</a></li>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
              aria-controls="form-elements">
              <i class="mdi mdi-city menu-icon"></i>
              <span class="menu-title">City</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="allcity.php">Cities</a></li>
                <li class="nav-item"><a class="nav-link" href="addcity.php">Add City</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements2" aria-expanded="false"
              aria-controls="form-elements">
              <i class=" mdi mdi-account-circle menu-icon"></i>
              <span class="menu-title">Patient</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="patientall.php">Patients</a></li>
                <li class="nav-item"><a class="nav-link" href="patientadd.php">Add Patient</a></li>
              </ul>
            </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-calendar menu-icon"></i>
              <span class="menu-title">Appointment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="applist.php">List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements2" aria-expanded="false"
              aria-controls="form-elements">
              <i class=" mdi mdi-account-circle menu-icon"></i>
              <span class="menu-title">Specialization</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="spcadd.php">Add specialization</a></li>
                <li class="nav-item"><a class="nav-link" href="spcall.php">Specialization list</a></li>
              </ul>
            </div>
          </li>
      </nav>

        <!-- php for form-->
        <?php
        include ('connect.php');
error_reporting(0);
$name=$email=$password=$phone=$city=$specialization=$qualification="";
$nameError=$emailError=$passwordError=$phoneError=$cityError=$specializationError=$qualificationError="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
// if(isset($_POST["uploadData"])){
    // $name=test_data($_POST["name"]);
    // $email=test_data($_POST["email"]);
    // $password=test_data($_POST["password"]);
    // $phone=test_data($_POST["phone"]);
    // $city=test_data($_POST["city"]);
    // $specialization=test_data($_POST["specialization"]);
    // $qualification=test_data($_POST["qualification"]);

    // $filename=$_FILES["uploadfile"]["name"];
    // $tempname=$_FILES["uploadfile"]["tmp_name"];
    // $folder="./one-health/polluxui-free-admin-template-1.0.0/template/images/profileimage/".$filename;
    // $file_ext=strtolower(end(explode('.',$_FILES['uploadfile']['name'])));

   
// $sql="INSERT INTO tb_registration (fname,lname,email,password,username,phone,address,gender) 
// VALUES ('$name','$email','$password','$phone','$image','$city','$specialization','$qualification')";


    # $_POST["name"]==""
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
    if(empty($_POST["password"])){
        $passwordError="Password is Required";
    }else{
        $password=refine_data($_POST["password"]);

        if (strlen($_POST["password"]) <= '8') {
          $passwordError = "Your Password Must Contain At Least 8 Characters!";
      }
      elseif(!preg_match("#[0-9]+#",$password)) {
          $passwordError = "Your Password Must Contain At Least 1 Number!";
      }
      elseif(!preg_match("#[A-Z]+#",$password)) {
          $passwordError = "Your Password Must Contain At Least 1 Capital Letter!";
      }
      elseif(!preg_match("#[a-z]+#",$password)) {
          $passwordError = "Your Password Must Contain At Least 1 Lowercase Letter!";
      } 
    }
    if(empty($_POST["phone"])){
        $phoneError="Phone is Required";
    }else{
        $phone=refine_data($_POST["phone"]);
    }
    if(empty($_POST["city"])){
        $cityError="city is Required";
    }else{
        $city=refine_data($_POST["city"]);
    }
    if(empty($_POST["specialization"])){
        $specializationError="Specialization field is Required";
    }else{
        $specialization=refine_data($_POST["specialization"]);
    }
    if(empty($_POST["qualification"])){
        $qualificationError="Qualification field is Required";
    }else{
        $qualification=refine_data($_POST["qualification"]);
    }
 
   
     
      $sql="INSERT INTO doctor (name,email,qualification,specialization,phone,city,password,role)
      VALUES ('$name','$email','$qualification','$specialization','$phone','$city','$password','doctor')
      ";
      // $sql="INSERT INTO doctor (name,email,password,phone,city,specialization,qualification) 
      // VALUES ('$name','$email','$password','$phone','$city','$specialization','$qualification')";
        $result=mysqli_query($connect,$sql);
       if(!$result){
        echo "<script>alert('Failed to Upload Data')</script>";
       }
       else{
          $sql1="INSERT INTO user (email,password,role) VALUES ('$email','$password','doctor')";
           mysqli_query($connect,$sql1);
            // move_uploaded_file($tempname,$folder) ;
            echo "<script>alert('Data Inserted Successfully')</script>";
        }
        
        
      }else{
        echo "<script>alert('Please Insert Valid Data')</script>";
      }            
function refine_data($data){

  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data,ENT_QUOTES);
  return $data;
}
  
mysqli_close($connect);

?>
      <!-- partial -->
      <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Doctor Add Form</h4>
                 
                  <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name"><span class="error">*<?php echo $nameError?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email"><span class="error">*<?php echo $emailError?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password"><span class="error">*<?php echo $passwordError?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPhone">Phone</label>
                      <input type="text" class="form-control" id="exampleInputPhone" placeholder="Phone" name="phone"><span class="error">*<?php echo $phoneError?></span>
                      </div>
                    <!-- <div class="form-group">
                      <label>Image upload</label>
                      <input type="file" name="uploadfile" class="file-upload-default">
                      <div class="input-group col-xs-4">
                        <input type="file" class="form-control file-upload-info"  placeholder="Upload Image"><br><span class="error">*<?php echo $imageError?></span>
                        
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <select name="cityname" class="form-control">
                      <option value="">Select City</option>
                      <?php
                       include ('connect.php');
                      $query ="SELECT * FROM city";
                      $result = mysqli_query($connect,$query);
                      
                          while($optionData=mysqli_fetch_array($result)){
                          $option =$optionData['name'];
                      ?>
                      <option value="<?php echo $optionData['name']?>" ><?php echo $optionData['name'] ?> </option>
                      <?php
                        }
                        ?>
                      </select>
                      <!-- <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" name="city"><span class="error">*<?php echo $cityError?></span> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleSpecialization">Specialization</label>
                      <select name="specname" class="form-control">
                      <option value="">Select Specialization</option>
                      <?php
                       include ('connect.php');
                      $query ="SELECT * FROM specialization";
                      $result = mysqli_query($connect,$query);
                      
                          while($optionData=mysqli_fetch_array($result)){
                          $option =$optionData['name'];
                      ?>
                      <option value="<?php echo $optionData['name']?>" ><?php echo $optionData['name'] ?> </option>
                      <?php
                        }
                        ?>
                      </select>
                     </div>
                    <div class="form-group">
                      <label for="exampleQualification">Qualification</label>
                      <input type="text" class="form-control" id="exampleInputQualification" placeholder="Qualification" name="qualification"><span class="error">*<?php echo $qualificationError?></span>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="uploadData">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
    </div>

                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.php -->
  <footer class="footer">
    <div class="card">
      <div class="card-body">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright Â© 2022 Care Group. All rights
            reserved.</span>
         
        </div>
      </div>
    </div>
  </footer>
  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>