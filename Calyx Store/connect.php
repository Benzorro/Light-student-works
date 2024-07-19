<?php
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conn = new mysqli('localhost','root','','register');
if ($conn->connect_error) {
    die("Connection failed");
}
$stmt = $conn->prepare("INSERT INTO `form` (`id`, `username`, `email`, `pass`) VALUES (NULL, ?, ?, ?)");
$stmt->bind_param("ssi", $username, $email, $pass);
if ($stmt->execute()) {
    echo "Registration Successful";
} else {
    echo "Error...";
}
$stmt->close();
$conn->close();
?>
