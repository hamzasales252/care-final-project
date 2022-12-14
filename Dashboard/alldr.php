<?php include('config/config.php') ?>


<!DOCTYPE php>
<php lang="en">

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
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css" />

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
        </div>r
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
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
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
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
        <a class="nav-link" data-toggle="collapse" href="#form-elements2" aria-expanded="false" aria-controls="form-elements">
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
        <a class="nav-link" data-toggle="collapse" href="#form-elements2" aria-expanded="false" aria-controls="form-elements">
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

      <!-- partial -->
 
        <div class='main-panel'>
          <div class='content-wrapper'>
            <div class='row'>
              <div class='col-md-12'>
                <div class='card'>
                  <div class='table-responsive pt-3'>
                    <table class='table table-striped project-orders-table'>
                      <thead>
                        <tr>
                          <th class='ml-5'>ID</th>
                          <th>Doctor name</th>
                          <th>Specialization</th>
                          <th>Qualification</th>
                          <th>City </th>
                          <th>phone</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
      include("connect.php");
      $sql = "SELECT * FROM doctor";
      $result = mysqli_query($connect, $sql);
      if (!$result) {
        echo "Error while selecting doctor table";
      }
      while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                          <td><?php echo $row["id"] ?></td>
                          <td><?php echo $row["name"] ?></td>
                          <td><?php echo $row["specialization"] ?></td>
                          <td><?php echo $row["qualification"] ?></td>
                          <td><?php echo $row["city"] ?></td>
                         <td><?php echo $row["phone"] ?></td>
                          <td>
                            <div class='d-flex align-items-center'>
                              <button type='button' class='btn btn-success btn-sm btn-icon-text mr-3'>
                              <a href='updatendrform.php?id=<?php echo $row['id']?>'>Edit</a>
                             
                                <i class='typcn typcn-edit btn-icon-append'></i>
                              </button>
                              <button type='button' class='btn btn-danger btn-sm btn-icon-text'>
                                <a href='drdelete.php?id=<?php echo $row['id']?>'onclick="return confirm('Are You Sure you want to delete?')">Delete</a>
                                <i class='typcn typcn-delete-outline btn-icon-append'></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
      <?php mysqli_close($connect); ?>
                      </tbody>
                    </table>
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


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.php -->

    <footer class="footer">
      <div class="card">
        <div class="card-body">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ???? 2022 Care Group. All rights
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

</php>