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
          <a class="nav-link text-white " href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person_add_alt</i>
            </div>
            <span class="nav-link-text ms-1">Teachers</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  active bg-gradient-primary" href="../pages/billing.php">
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
          <a class="nav-link text-white " href="../pages/profile.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">complaints</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">complaints</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="\Nouveau dossier\material-dashboard-master\pages\profile.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">admin</span>
              </a>
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
              
                <li>
       
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

              <div class="row">
                <div class="col-md-7 mt-4" style="margin-left:-3% ;display:flex;
">
                  <div class="card">
                    <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">complaints</h6>
                    </div>
                       
      
  
                    <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                      <?php
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "codershiyar";
    $conn  = mysqli_connect($sname, $uname, $password, $db_name);
    
    if (!$conn) {
      echo "Connection failed!";
    }
        $sql=$conn->query("select * from `complaints` ");
        while($row=$sql->fetch_array()){
          ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                          <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm"><?php echo $row['Type_complaint']; ?></h6>
                            <span class="mb-2 text-xs">First Name: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['First_Name']; ?></span></span>
                            <span class="mb-2 text-xs">Last Name: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Last_Name']; ?></span></span>
                            <span class="mb-2 text-xs">Facultie: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Facultie']; ?></span></span>
                            <span class="mb-2 text-xs">Department: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Department']; ?></span></span>
                            <span class="mb-2 text-xs">Speciality: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Speciality']; ?></span></span>
                            <span class="mb-2 text-xs">Date: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['Date']; ?></span></span>
                            <span class="mb-2 text-xs">Subject: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Subject']; ?></span></span>
                            <span class="mb-2 text-xs">complain: <span class="text-dark font-weight-bold ms-sm-2"><div class="bluediv"><?php echo $row['complaint']; ?></div></span></span>
                            <span class="mb-2 text-xs">file about complain: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['File']; ?></span></span>
            
                          </div>
                          <div class="ms-auto text-end">
                            <div class="form-check form-check-info text-start ps-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                seen
                              </label>
                            </div>
                            <div class="form-check form-check-info text-start ps-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                solved
                              </label>
                            </div> </div>
                        </li>
                  
                        <?php }
                        ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
        <div class="col-md-5 mt-4" style="height: 400px;">
          <div class="card h-100 mb-4" >
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
   
         
                </li>
              </ul>
    
                
                <div style="display: block;">
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
                              <h4 class="font-weight-bolder">Add Type of complain</h4>
                              <p class="mb-0">Enter type of complain </p>
                            </div>
                            <div class="card-body">
                              <form role="form" method="post" action="back-add-type-complain.php">
                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">complain</label>
                                  <input type="text" name="complain" class="form-control">
                                </div>
               
                                <div class="text-center">
                                  <button type="submit"  value="submitcp"  name="submitcp" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"> Add</button>
                                </div>
                              </form>
                          
                         
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
    <div class="container-fluid py-4">
      <div class="row" style="width:700px">
        <div class="col-12">
          <div class="card my-4" style="right:5%">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Authors table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">type of complain</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "codershiyar";
    $conn  = mysqli_connect($sname, $uname, $password, $db_name);

                    $sql=$conn->query("select * from `type_complaints`");
                    while($row=$sql->fetch_array()){
                      ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                  
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"> <?php echo $row['id']; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php echo $row['complain']; ?></p>
                      </td>
                      <td class="align-middle">&nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;

                        <a class="text-xs text-secondary mb-0">Edit</a>
&nbsp; &nbsp; &nbsp;


                        <a class="text-xs text-secondary mb-0">Delete</a>

                                 
                    <?php }
                    ?>

             
                   
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
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
     
          </a>
        </div>
      </div>
    </div>
  </div>
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