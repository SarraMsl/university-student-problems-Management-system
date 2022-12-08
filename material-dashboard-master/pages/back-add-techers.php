



<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submith']))
{	 
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Department = $_POST['Department'];
    $Speciality = $_POST['Speciality'];
    $Facultie = $_POST['Facultie'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Mobile1 = $_POST['Mobile1'];
    $Mobile2 = $_POST['Mobile2'];
$Photo=addslashes(file_get_contents($_FILES['Photo']['tmp_name']));
$Photocont=getimagesize($_FILES['Photo']['tmp_name']);
     $sql = "INSERT INTO  teachers(`First_Name`,`Last_Name`,`Department`,`Speciality`,`Faculties`,`Email`,`Gender`,`Mobile1`,`Mobile2`,`Password`,`Photo`) VALUES ('$First_Name','$Last_Name','$Department','$Speciality','$Facultie','$Email','$Gender','$Mobile1','$Mobile2','$Password','$Photo')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

     header("location:/Nouveau dossier/material-dashboard-master/pages/tables.php");
	 mysqli_close($conn);
}
?>
