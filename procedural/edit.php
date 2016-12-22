<?php 
if($_SERVER["REQUEST_METHOD"] == "GET") {
	$id = $_GET['id'];
	$mysqli = mysqli_connect("localhost","root","","example");
	$sql = "SELECT * FROM tbl_example WHERE student_id = ' ". $id ." ' ";
	$res = mysqli_query($mysqli,$sql);
	$data = mysqli_fetch_array($res,MYSQLI_ASSOC);
}
?>
<?php include'templates/header.php' ?>

<body>
<div class="container">
	<div class="col-md-5">
	<h4>Edit Details</h4>
		<nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
			    <div class="collapse navbar-collapse">
				    <ul class="nav navbar-nav">
					    <li><a href="index.php">New User</a></li>
					    <li><a href="result.php">User List</a></li>
				    </ul>
			    </div>
		  	</div>
		</nav>
		<div class="jumbotron">
			<form role="form" action="update.php" method="post">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $data['first_name'];?>">
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $data['last_name'];?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" id="email" name="email" class="form-control" value="<?php echo $data['email'];?>">
						</div>
				<button type="submit" name="save" class="btn btn-info">Save</button>

				<input type="hidden" name="id" value="<?php echo $id;?>">
			</form>
		</div>
	</div>
</div>
</body>
</html>
