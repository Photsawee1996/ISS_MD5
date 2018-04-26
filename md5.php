<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "iss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST[user];
$pass = md5($_POST[pass]);

$sql = "INSERT INTO md5 (name, pass) ";
$sql.= "VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
