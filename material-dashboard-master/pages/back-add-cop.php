<?php
@ob_start();
session_start();
?>
<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submicomp']))
{	 
	 $First_Name = $_POST['First_Name'];
     $Last_Name = $_POST['Last_Name'];
     $Department = $_POST['Department'];
     $Speciality = $_POST['Speciality'];
     $Facultie = $_POST['Facultie'];
     $Subject = $_POST['Subject'];
     $Type_complaint = $_POST['Type_complaint'];
     $complaint = $_POST['complaint'];

     $var= $_SESSION["user_id"];
     $sql = "INSERT INTO  complaints(`First_Name`,`Last_Name`,`Department`,`Speciality`,`Facultie`,`Subject`,`Type_complaint`,`complaint`,`Type`) VALUES ('$First_Name','$Last_Name','$Department','$Speciality','$Facultie','$Subject','$Type_complaint','$complaint','$var')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

     header("location:/Nouveau dossier/material-dashboard-master/pages/ensgdash.php");
	 mysqli_close($conn);
}
?>
