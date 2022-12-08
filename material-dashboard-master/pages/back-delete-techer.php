<?php
// include database connection file

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "codershiyar";
$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM teachers WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("location:/Nouveau dossier/material-dashboard-master/pages/tables.php");
?>