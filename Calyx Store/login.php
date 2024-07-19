<?php
$username = $_POST['username'];
$pass = $_POST['pass'];

$conn = new mysqli('localhost','root','','register');
if ($conn->connect_error) {
    die("Connection failed");
}

$stmt = $conn->prepare("INSERT INTO `login` (`id`, `username`, `pass`) VALUES (NULL, ?, ?)");
$stmt->bind_param("si", $username, $pass);

if ($stmt->execute()) {
    echo "Login Successful";
} else {
    echo "Error...";
}

$stmt->close();
$conn->close();
?>
