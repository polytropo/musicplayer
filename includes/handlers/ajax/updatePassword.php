<?php 
include("../../config.php");
if(!isset($_POST['username'])) {
	echo "ERROR: Could not set username";
	exit();
}

if(!isset($_POST['oldPassword']) || !isset($_POST['newPassword1']) || !isset($_POST['newPassword2'])) {
	echo "Not all password have been set!";
}

if($_POST['oldPassword'] == "" || $_POST['newPassword1'] == "" || $_POST['newPassword2'] == "") {
	echo "Please fill in all fields";
}

$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword1 = $_POST['newPassword1'];
$newPassword2 = $_POST['newPassword2'];

$oldMd5 = md5($oldPassword);

$passwordCheck = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password = '$oldMd5'");
if(mysqli_num_rows($passwordCheck) != 1) {
	echo "Password is incorrect";
	exit();
}

if($newPassword1 != $newPassword2) {
	echo "Your new passwords don't match";
	exit();
}

if(preg_match('/[^A-Za-z0-9]/', $newPassword1)) {
	echo "Your password must only ocntiant letter and/or numbers";
}

if(strlen($newPassword1) > 25 || strlen($newPassword1) < 6) {
	echo "Your password must be between 6 and 25 characters long";
	exit();
}

$newMd5 = md5($newPassword1);

$query = mysqli_query($con, "UPDATE users SET password = '$newMd5' WHERE username = '$username'");
echo "Update succesfful";
?>