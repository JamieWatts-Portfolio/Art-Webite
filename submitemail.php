<?php 
header("Refresh: 3; url=http://wat16211290.stu.local/Contact%20Page.html");
//Connects to the SQL server
$host="localhost";
$username="wat16211_Admin"; //username
$password="TWPD8NjT1%r~"; //password
$dbname="wat16211_Form"; //database name


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

$sql = "INSERT INTO Contacts (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
	echo "Sending successful";
}else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>