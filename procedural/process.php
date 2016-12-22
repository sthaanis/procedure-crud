<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$studentId = $_POST['student_id'];
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$email = $_POST['email'];

	$mysqli = mysqli_connect("localhost","root","","example");
	$sql = "INSERT INTO tbl_example(student_id,first_name,last_name,email)VALUES('$studentId','$firstName','$lastName','$email')";
	$res = mysqli_query($mysqli,$sql);
	if($res) {
		header('Location:index.php?insert=1');
	} else {
		echo "Error: " . mysqli_error($mysqli);
	}
}


