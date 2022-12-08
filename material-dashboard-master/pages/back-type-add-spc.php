

<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submits']))
{	 
	 $Facultie = $_POST['Facultie'];
     $Department = $_POST['Department'];
     $Speciality = $_POST['Speciality'];


     $sql = "INSERT INTO  Specialityes(`Facultie`,`Department`,`Speciality`) VALUES ('$Facultie','$Department','$Speciality')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

     header("location:\codershiyar\Squadfree\material-dashboard-master\pages\adminunivadd.php");
	 mysqli_close($conn);
}
?>
