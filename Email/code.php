<?php 
include("dbcon.php");
if (isset($_POST['register_btn'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
	$check_email_query_run = mysqli_query($con, $check_email_query);

if (mysqli_num_rows($check_email_query_run) > 0) {
	$_SESSION['status'] = "Email is already exsists";
} else {
	// code...
}


}

 ?>