
<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submitcp']))
{	 
	$complain = $_POST['complain'];


     $sql = "INSERT INTO  type_complaints(`complain`) VALUES ('$complain')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

     header("location:\Nouveau dossier\material-dashboard-master\pages\billing.php");
	 mysqli_close($conn);
}
?>






