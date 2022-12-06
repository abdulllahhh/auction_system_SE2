<?php

if (isset($_POST["submit"])) {

	// $info['username'] = $_POST['username'];
	// $info['password'] = $_POST['password'];
	// $info['type'] = 'user';
	// $info['fname'] = $_POST['name'];
	// $info['lname'] = $_POST['L_name'];
	// $info['phone'] = $_POST['phone-number'];
	// $info['address'] = $_POST['country'];
	// $info['email'] = $_POST['email'];
	// $info['age'] = $_POST['BOD'];
	// $info['city'] = $_POST['city'];

	include '../models/UsersClass.php';
	$user = new users();
	$user = $user->Register($username = $_POST['username'], $password = $_POST['password'], $fname  = $_POST['name'], $email = $_POST['email'], $phone = $_POST['phone-number'], $lname = $_POST['L_name'], $age = $_POST['BOD'], $address = $_POST['country'], $city = $_POST['city']);

	if ($user) {
		echo 'Data is stored!';
		header("location: ../../login.php");
	} else {
		echo 'Data is not stored!. The username is already used.';
	}
}
