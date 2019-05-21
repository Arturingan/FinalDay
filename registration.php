<!-- Connect with Sign up, Log in and database -->

<?php

session_start();

header('location:login.php');


$con = mysqli_connect('localhost', 'root', '123456');

mysqli_select_db($con, 'userregistration');



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$name = $_POST['user'];
$pass = $_POST['password'];




$s = "SELECT * FROM usertable WHERE name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	echo "Username Already Taken";

} else {
	$reg = "INSERT INTO usertable(name, password, first_name, last_name, email) values ('$name', '$pass', '$first_name', '$last_name', '$email')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
	
}
?>