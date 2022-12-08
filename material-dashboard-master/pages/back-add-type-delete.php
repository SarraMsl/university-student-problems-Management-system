
<?php
// include database connection file

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "codershiyar";
$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}else{

	echo"";
}
if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM faculties WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:adminunivadd.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}


// After delete redirect to Home, so that latest user list will be displayed.
?>