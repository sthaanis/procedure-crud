 <!-- Header -->
<?php include 'templates/header.php' ?>

<body onload="hide()">
<div class="container">
	<div class="col-md-5">
	<h4>Student Details</h4>
	<!-- Message Initialization -->
	<?php include 'config/init.php'; ?> 
	<!-- navigation bar -->
	<?php include'templates/nav.php'; ?>
		<div class="jumbotron">
			<form role="form" action="process.php" method="post">
				<div class="form-group">
					<label>Student ID</label>
					<input type="text" id="student_id" name="student_id" placeholder="Student ID" class="form-control">
				</div>
				<div class="form-group">
					<label>First Name</label>
					<input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control">
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" id="email" name="email" placeholder="Email" class="form-control">
						</div>
				<button type="submit" name="save" class="btn btn-info">Save</button>
			</form>
		</div>
	</div>
</div>
	<script src="js/app.js"></script>
</body>
<?php include'templates/footer.php'; ?>
