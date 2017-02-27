<?php
require ('../../config.php');


// ======User Registration======
if (isset($_POST["createuser"])) {

$name =  $_POST["name"];
$password =  $_POST["password"];
$email =  $_POST["email"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

var_dump($name, $password, $email);

$sql = mysqli_query($con, "INSERT INTO user (name, email, password) VALUES ('".$name."', '".$email."', '".$hashed_password."')");
var_dump ($sql);
header("Location:../pages/index.php");

}

// =======User Login========
if (isset($_POST["userlog"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	var_dump($email, $password);
	// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
	// var_dump($hashed_password);
	$results = mysqli_query($con, "SELECT email, password FROM user WHERE email = '".$email."' ");
	var_dump($results);
	if ($results==!null) {
		session_start();
		$_SESSION['useremail'] = $email;
		// header("Location:../pages/index.php");
	}
	if(password_verify($password, $hashed_password)) {
    // If the password inputs matched the hashed password in the database
    // Do something, you know... log them in.
	} 

}
?>