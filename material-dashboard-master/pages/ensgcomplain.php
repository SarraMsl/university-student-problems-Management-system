
<?php
@ob_start();
session_start();
?>
<style>

  .bluediv {
    width:500px;
    word-wrap: break-word;
  }
  </style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    University Of Ghardia  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>
<script type="text/javascript">
    function prevenBack() {
      window.history.forward()
    };
    setTimeout("prevenBack()", 0);
    window.onunload = function() {
      null;
    }
  </script>
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/small-logos/logo-ug-center.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">University Of Ghardia</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/ensgdash.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white  active bg-gradient-primary" href="../pages/ensgcomplain.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Complaints</span>
          </a>
        </li>
        

 
    
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/ensgprofile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
    
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100 " href="logout0.php" type="button">
   <i class="material-icons opacity-10" style="margin-left: -45px">&nbsp   logout</i> LogOut</a>

      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Complain</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Complain</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <?php
      $sname = "localhost";
      $uname = "root";
      $password = "";
      $db_name = "codershiyar";
      $conn  = mysqli_connect($sname, $uname, $password, $db_name);
      
      if (!$conn) {
        echo "Connection failed!";
      }
      $var = $_SESSION["user_id"];

          $sql=$conn->query("select `First_Name` from `teachers` WHERE id=' $var'");
          while($row=$sql->fetch_array()){
            ?>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="\Nouveau dossier\material-dashboard-master\pages\ensgprofile.php" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none"><?php echo $row['First_Name']; ?></span>
                </a>   <?php }
                    ?>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
               
                  </li>
               
                  <li>

                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->



            <?php 


  $sname = "localhost";
  $uname = "root";
  $password = "";
  $db_name = "codershiyar";
  $conn  = mysqli_connect($sname, $uname, $password, $db_name);
  
  if (!$conn) {
    echo "Connection failed!";
  }

  $var = $_SESSION["user_id"];

            $sql = "SELECT * FROM teachers  where `id`= '$var' ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
      </div>
      
      <div class="col-md-5 mt-4" style="height: 750px;">
        
        <div class="card h-100 mb-4" style="margin-top:10%;height: 300px;margin-left:35%;width: 900px;">
          
          <div class="card-header pb-0 px-3">
            <div class="row">
              <div class="col-md-6">
 
          
              </li>
            </ul>

              
            <main class="main-content  mt-0">
              <section>
                <div class="">
                  <div class="container">
                    <div class="row">
                      
                      <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                          <div class="card-header">
                            <h4 class="font-weight-bolder">Add Complain </h4>
                            <p class="mb-0">Enter Details Information Complain</p>
                          </div>
                          <div class="card-body">
                            <form role="form" method="POST" action="back-add-cop.php">
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label" ></label>
                                <input type="text" name="First_Name"  value="<?php echo $row['First_Name']; ?>" class="form-control" disabled>
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label"></label>
                                <input type="text" name="Last_Name"  value="<?php echo $row['Last_Name']; ?>" class="form-control" disabled>
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label"></label>
                                <input type="text" name="Facultie"  value="<?php echo $row['Faculties']; ?>" class="form-control" disabled>
                              </div>    <div class="input-group input-group-outline mb-3">
                                <label class="form-label"></label>
                                <input type="text" name="Department"  value="<?php echo $row['Department']; ?>" class="form-control" disabled>
                              </div>    <div class="input-group input-group-outline mb-3">
                                <label class="form-label"></label>
                                <input type="text" name="Speciality"   value="<?php echo $row['Speciality']; ?>" class="form-control" disabled>
                                <?php
                              }
                          }
              
                          ?>
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" name="Subject" class="form-control">
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Type Of Complain</label>
                                <select type="text" name="Type_complaint" class="form-control">
                                <option> </option>";

                                <?php
            $servername='localhost';
            $username='root';
            $password='';
            $dbname = "codershiyar";
            $usrtable="type_complaints";
            $columnname="complain";
            
            $conn=mysqli_connect($servername,$username,$password,"$dbname")OR  die('Could not Connect My Sql');
            
            $result = mysqli_query($conn, "select * from $usrtable");
            
            
            ?>
                            <?php
                            if($result)
                            {
                              while($row=mysqli_fetch_array($result))
                              {
                                $stname=$row["$columnname"];
                            echo"<option>$stname <br></option>";
                            }

                            }
                            ?>
                                </select>
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Complain</label>
                                <textarea type="text" name="complaint" class="form-control " ></textarea>
                              </div>
                         
                     
              
                              <div class="text-center">
                                <button type="submit" value="submicomp" name="submicomp" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"> Add</button>
                              </div>
                            </form>
                          </div>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </main>
            
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</main>

    
    </div>
  </main>
</div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">University Of Ghardia</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info active" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        s
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>