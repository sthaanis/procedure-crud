<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
	$id = $_GET["id"];
	$mysqli = mysqli_connect("localhost","root","","example");
	$sql = "DELETE FROM tbl_example WHERE student_id = ' ". $id ." ' ";
	
	$res = mysqli_query($mysqli,$sql);
	/*var_dump($res);exit;*/
	if($res) {
		header('Location:result.php?r=1');
		echo "Record Deleted" . "<br>";
	}
}