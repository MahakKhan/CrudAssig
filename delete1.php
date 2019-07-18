<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="login";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$id=$_GET['id'];

$sql = "DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	echo header('location:display.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

?>