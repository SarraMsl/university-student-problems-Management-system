


<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submitf']))
{	 
	 $Facultie = $_POST['Facultie'];

     $sql = "INSERT INTO  faculties(`Facultie`) VALUES ('$Facultie')";

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



<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submitd']))
{	 
	 $Facultie = $_POST['Facultie'];

     $Department = $_POST['Department'];

     $sql = "INSERT INTO  departmentes(`Facultie`,`Department`) VALUES ('$Facultie','$Department')";

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
