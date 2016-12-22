<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$studentId = $_POST['id'];
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$email = $_POST['email'];
	$mysqli = mysqli_connect("localhost","root","","example");
	$sql = "UPDATE tbl_example SET first_name = '$firstName' , last_name = '$lastName', email = '$email' WHERE student_id = ' ". $studentId ." ' ";
	$res = mysqli_query($mysqli,$sql);
	if($res) {
		header('Location:result.php?u=1');
	} else {
		echo "Error: " . mysqli_error($mysqli);
	}
}