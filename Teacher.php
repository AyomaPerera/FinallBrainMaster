<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$encrypted_pwd = md5($password);
$cpassword = $_POST['cpassword'];
$encrypted_pwd = md5($cpassword);
$conn = new mysqli("localhost","root","","brain master");

if ($conn->connect_error) {
	die("connection failed :".$conn->connect_error);
}
else{
	$stmt = $conn->prepare("INSERT INTO admin (username, email, password, cpassword) VALUES (?,?,?,?)");
	$stmt ->bind_param("ssss",$username,$email,$password,$cpassword);
	$stmt -> execute();
    header("Location:home.html");
	$stmt -> close();
}

$conn -> close();


?>