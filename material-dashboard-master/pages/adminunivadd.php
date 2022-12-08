

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
          <a class="nav-link text-white " href="../pages/adminunivdash.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="../pages/addadmin.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person_add_alt</i>
              </div>
              <span class="nav-link-text ms-1">Admin</span>
            </a>
          </li>
 
     <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary " href="../pages/adminunivadd.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">control_point_duplicate</i>
            </div>
            <span class="nav-link-text ms-1">Add Type </span>
          </a>
        </li>
    
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/adminprofile.html">
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
        <a class="btn bg-gradient-primary mt-4 w-100 " href="" type="button">
   <i class="material-icons opacity-10" style="margin-left: -45px">&nbsp   logout</i> LogOut</a>

      </div>
    </div>
  </aside>
  <main class="main-content position-relative "style="height:90%">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add Type</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Add Type</h6>
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
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
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
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
  
   <div style="display: flex;margin-left: -2%;">
    <div class="col-md-5 mt-4" style="height:510px;">
      <div class="card h-100 mb-4" style="width:70%;">
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
                          <h4 class="font-weight-bolder">Add Type of Faculties</h4>
                          <p class="mb-0">Enter Details Information Faculties </p>
                        </div>
                        <div class="card-body">
                          <form  method="post" action="back-type-add-fac.php">
                            <div class="input-group input-group-outline mb-3">
                              <label class="form-label">Faculties</label>
                              <input type="text" class="form-control" name="Facultie">
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="text-center">
                              <button type="submit" value="submit" name="submitf" class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" style="top: 30px;
"> Add</button>
                            </div>
                          </form>
                      
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        
          
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-5 mt-4" style="height:510px;">
  <div class="card h-100 mb-4" style="width:70%;margin-left:-7% ;">
    <div class="card-header pb-0 px-3">
      <div class="row">
        <div class="col-md-6">

 
        </li>
      </ul>

        
      <?php
$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$usrtable="faculties";
$columnname="Facultie";

$conn=mysqli_connect($servername,$username,$password,"$dbname")OR  die('Could not Connect My Sql');

$result = mysqli_query($conn, "select * from $usrtable");


?>
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
                      <h4 class="font-weight-bolder">Add Type of Department</h4>
                      <p class="mb-0">Enter Details Information Department </p>
                    </div>
                    <div class="card-body">
                      <form   method="POST" action="back-type-add-dep.php">
                        <div class="input-group input-group-outline mb-3">


                         
                          <select type="text" name="Facultie" class="form-control" >
                            
                            <option>Facultie</option>
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
                          <label class="form-label">Department</label>
                          <input type="text" name="Department" class="form-control">
                        </div>
                        
                  
                     <!---- <div class="form-check form-check-info text-start ps-0">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                          <label class="form-check-label" for="flexCheckDefault">
                            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                          </label>
                        </div>--->
                        <br>
                        
                        <div class="text-center">
                          <button type="submit" value="submitd" name="submitd" class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" style="top: 15px;
"> Add</button>
                        </div>
                      </form>
                  
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      
      
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-5 mt-4" style="height:510px;">
  <div class="card h-100 mb-4" style="width:70%;margin-left:-20% ;">
    <div class="card-header pb-0 px-3">
      <div class="row">
        <div class="col-md-6">

 
        </li>
      </ul>
      <?php
$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$usrtable="departmentes";
$columnnam="Facultie";

$conn=mysqli_connect($servername,$username,$password,"$dbname")OR  die('Could not Connect My Sql');

$result = mysqli_query($conn, "select * from $usrtable");


?>
      <?php
$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$usrtable="departmentes";
$columnname="Department";

$conn=mysqli_connect($servername,$username,$password,"$dbname")OR  die('Could not Connect My Sql');

$resul = mysqli_query($conn, "select * from $usrtable");


?>

         
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
                      <h4 class="font-weight-bolder">Add Type of Speciality</h4>
                      <p class="mb-0">Enter type of Speciality </p>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="back-type-add-spc.php">
                       <div class="input-group input-group-outline mb-3">


                         
                          <select type="text" name="Facultie" class="form-control" >
                            
                            <option>Facultie</option>
                            <?php
                            if($result)
                            {
                              while($row=mysqli_fetch_array($result))
                              {
                                $stnam=$row["$columnnam"];
                            echo"<option>$stnam <br></option>";
                            }

                            }
                            ?>
                          </select>
                        </div>
                     
                        <div class="input-group input-group-outline mb-3">
                          <select type="text" name="Department" class="form-control">
                    
                            <option>Department</option>
                            <?php
                            if($resul)
                            {
                              while($row=mysqli_fetch_array($resul))
                              {
                                $stname=$row["$columnname"];
                            echo"<option>$stname <br></option>";
                            }

                            }
                            ?>
                          </select>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Speciality</label>
                          <input type="text" name="Speciality" class="form-control">
                        </div>
                   
                     <!---- <div class="form-check form-check-info text-start ps-0">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                          <label class="form-check-label" for="flexCheckDefault">
                            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                          </label>
                        </div>--->
                    
                        <div class="text-center">
                          <button type="submit" value="submits" name="submits" class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" style="top: 15px;
"> Add</button>
                        </div>  </div>
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
   </div>
   <div style="display:flex ;">
   <div class="container-fluid py-4">
    <div class="row" style="width:600px;margin-left: -5%;">
      <div class="col-12">
        <div class="card my-4" style="left:60%">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Type of Faculties</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">

              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Type Of Faculties</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>

                  </tr>
                </thead>
                <tbody>
                <?php
				$sql=$conn->query("select * from `faculties`");
				while($row=$sql->fetch_array()){
					?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?php echo $row['id']; ?></h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-secondary mb-0"><?php echo $row['Facultie']; ?></p>
                    </td>
                    <td class="align-middle">&nbsp;
                      &nbsp;
               
                  
                      &nbsp; &nbsp; &nbsp;
                    

                      <a class="text-xs text-secondary mb-0"  onclick="document.getElementById('id02').style.display='block'">Edit</a>
&nbsp; &nbsp; &nbsp;


                      <a class="text-xs text-secondary mb-0" onclick="document.getElementById('id01').style.display='block'">Delete</a>
<?php }
?>
           
         

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-contentt" action="back-add-type-delete.php">
    <div class="container">
      <h1>Delete Facultie</h1>
      <p>Are you sure you want to delete your Facultie?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0">Cancel</button>
        <button type="button" name="deletef"  onclick="document.getElementById('id01').style.display='none'" class="btn btn-lg bk-gradient-primary btn-lg w-1p0 mt-4 mb-0">Delete</button>
      </div>
    </div>
  </form>
</div>



<!------------------------------------------------------------->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="back-add-type-delete.php">
    <div class="container">
    <div class="card card-plain">
                        <div class="card-header">
                          <h4 class="font-weight-bolder">Add Type of Faculties</h4>
                          <p class="mb-0">Enter Details Information Faculties </p>
                        </div>
                        <div class="card-body">
                          <form  method="post" action="back-type-add-fac.php">
                            <div class="input-group input-group-outline mb-3">
                              <label class="form-label">Faculties</label>
                              <input type="text" class="form-control" name="Facultie">
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="text-center">
                            <button type="button" onclick="document.getElementById('id02').style.display='none'"class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" >Cancel</button>

                              <button type="submit" value="submit" name="submitf" class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" > UPDATE</button>
                            </div>
                          </form>
                      
                     
                      </div>
                    </div>
                  </div>
                </div>

    </div>
  </form>
</div>



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
<div class="container-fluid py-4">
  <div class="row" style="width:610px;margin-left:8%;">
    <div class="col-12">
      <div class="card my-4" style="left:-15%">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Type of Department</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
         
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type of Department</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>

                </tr>
              </thead>
              <tbody>
              <?php
				$sql=$conn->query("select * from `departmentes`");
				while($row=$sql->fetch_array()){
					?>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
              
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm"><?php echo $row['id']; ?></h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs text-secondary mb-0"> <?php echo $row['Department']; ?></p>
                  </td>
                  <td class="align-middle">&nbsp;
                    &nbsp;
                    &nbsp;
                   
              

                    <a class="text-xs text-secondary mb-0"  onclick="document.getElementById('id03').style.display='block'">Edit</a>
&nbsp; &nbsp; &nbsp;


                    <a class="text-xs text-secondary mb-0"  onclick="document.getElementById('id04').style.display='block'">Delete</a>

                    <?php }
?>
               
               <div id="id04" class="modal">
  <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-contentt" action="/action_page.php">
    <div class="container">
      <h1>Delete Department</h1>
      <p>Are you sure you want to delete your Department?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0">Cancel</button>
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="btn btn-lg bk-gradient-primary btn-lg w-1p0 mt-4 mb-0">Delete</button>
      </div>
    </div>
  </form>
</div>



<!------------------------------------------------------------->
<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
    <?php
$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$usrtable="faculties";
$columnname="Facultie";

$conn=mysqli_connect($servername,$username,$password,"$dbname")OR  die('Could not Connect My Sql');

$result = mysqli_query($conn, "select * from $usrtable");


?>
                  <div class="card card-plain">
                    <div class="card-header" style="margin-left: -15;">
                      <h4 class="font-weight-bolder">update Type of Department</h4>
                      <p class="mb-0">update Details Information Department </p>
                    </div>
                    <div class="card-body">
                      <form   method="POST" action="back-type-add-dep.php">
                        <div class="input-group input-group-outline mb-3">


                         
                          <select type="text" name="Facultie" class="form-control" >
                            
                            <option>Facultie</option>
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
                          <label class="form-label">Department</label>
                          <input type="text" name="Department" class="form-control">
                        </div>
                        
                  
                     <!---- <div class="form-check form-check-info text-start ps-0">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                          <label class="form-check-label" for="flexCheckDefault">
                            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                          </label>
                        </div>--->
                        <br>
                        
                        <div class="text-center">
                        <button type="button" onclick="document.getElementById('id03').style.display='none'"class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" >Cancel</button>

                          <button type="submit" value="submitd" name="submitd"class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0"> update</button>
                        </div>
                      </form>
                  
                 
                  </div>
                </div>
              </div>
            </div>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0">Cancel</button>
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="btn btn-lg bk-gradient-primary btn-lg w-1p0 mt-4 mb-0">Delete</button>
      </div>
    </div>
  </form>
</div>


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
<div class="container-fluid py-4">
  <div class="row" style="width:600px;margin-left: 13%;">
    <div class="col-12">
      <div class="card my-4" style="left:-80%">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Type of Speciality</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type of Speciality</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>

                </tr>
              </thead>
              <tbody>
              <?php
				$sql=$conn->query("select * from `Specialityes`");
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
                    <p class="text-xs text-secondary mb-0"><?php echo $row['Speciality']; ?></p>
                  </td>
                  <td class="align-middle">&nbsp;
                    &nbsp;
                    &nbsp;
                    
             

                    <a class="text-xs text-secondary mb-0"  onclick="document.getElementById('id05').style.display='block'">Edit</a>
&nbsp; &nbsp; &nbsp;


                    <a class="text-xs text-secondary mb-0"  onclick="document.getElementById('id06').style.display='block'">Delete</a>

         
                    <?php }
?>
               
               <div id="id05" class="modal">
  <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
    <?php
$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$usrtable="departmentes";
$columnnam="Facultie";

$conn=mysqli_connect($servername,$username,$password,"$dbname")OR  die('Could not Connect My Sql');

$result = mysqli_query($conn, "select * from $usrtable");


?>
      <?php
$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$usrtable="departmentes";
$columnname="Department";

$conn=mysqli_connect($servername,$username,$password,"$dbname")OR  die('Could not Connect My Sql');

$resul = mysqli_query($conn, "select * from $usrtable");


?>
    <div class="card card-plain">
                    <div class="card-header">
                      <h4 class="font-weight-bolder">Add Type of Speciality</h4>
                      <p class="mb-0">Enter type of Speciality </p>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="back-type-add-spc.php">
                       <div class="input-group input-group-outline mb-3">


                         
                          <select type="text" name="Facultie" class="form-control" >
                            
                            <option>Facultie</option>
                            <?php
                            if($result)
                            {
                              while($row=mysqli_fetch_array($result))
                              {
                                $stnam=$row["$columnnam"];
                            echo"<option>$stnam <br></option>";
                            }

                            }
                            ?>
                          </select>
                        </div>
                     
                        <div class="input-group input-group-outline mb-3">
                          <select type="text" name="Department" class="form-control">
                    
                            <option>Department</option>
                            <?php
                            if($resul)
                            {
                              while($row=mysqli_fetch_array($resul))
                              {
                                $stname=$row["$columnname"];
                            echo"<option>$stname <br></option>";
                            }

                            }
                            ?>
                          </select>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Speciality</label>
                          <input type="text" name="Speciality" class="form-control">
                        </div>
                   
                     <!---- <div class="form-check form-check-info text-start ps-0">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                          <label class="form-check-label" for="flexCheckDefault">
                            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                          </label>
                        </div>--->
                    
                        <div class="text-center">
                        <button type="button" onclick="document.getElementById('id05').style.display='none'"class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" >Cancel</button>

                          <button type="submit" value="submits" name="submits"class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0"> UPDATE</button>
                        </div>  </div>
                      </form>
                  
                 
                  </div>
                </div>
              </div>
            </div>
    </div>
  </form>
</div>



<!------------------------------------------------------------->
<div id="id06" class="modal">
  <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-contentt" action="/action_page.php">
    <div class="container">
      <h1>Delete Speciality</h1>
      <p>Are you sure you want to delete your Speciality?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id06').style.display='none'"class="btn btn-lg bg-gradient-primary btn-lg w-1p0 mt-4 mb-0" >Cancel</button>
        <button type="button" onclick="document.getElementById('id06').style.display='none'"class="btn btn-lg bk-gradient-primary btn-lg w-1p0 mt-4 mb-0">Delete</button>
      </div>
    </div>
  </form>
</div>

               
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