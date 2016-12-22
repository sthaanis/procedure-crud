<?php 
$mysqli = mysqli_connect("localhost","root","","example");
$sql = "SELECT * FROM tbl_example";
$res = mysqli_query($mysqli,$sql);
?>

<?php include'templates/header.php' ?>
<body onload="hide()">
	<div class="container">
		<div class="col-md-8">
			<h4>User Details</h4>
		<?php include'config/init.php'; ?>	
		<?php include'templates/nav.php';?>	
			<div class="jumbotron">
				<table class="table table-condensed">
					<thead>
						<th>Student ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Action</th>
					</thead>
					<tbody>
					<?php if($res) { ?>
					<?php while($data = mysqli_fetch_array($res,MYSQLI_ASSOC)) { ?>
						<tr>
							<td><?php echo $data["student_id"];?></td>
							<td><?php echo $data["first_name"];?></td>
							<td><?php echo $data["last_name"];?></td>
							<td><?php echo $data["email"];?></td>
							<td>
								<a href="edit.php?id=<?php echo $data["student_id"];?>"><button class="btn btn-sm btn-success" "><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</button></a>
								<a href="delete.php?id=<?php echo $data["student_id"];?>"><button onclick="javascript:return confirm('Are you absolutely sure you want to delete?')" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</button></a>
							</td>
						</tr>
					<?php } ?>
					<?php } ?>	
					</tbody>
				</table>
			</div>	
		</div>
	</div>
	<script src="js/app.js"></script>
</body>
<?php include'templates/footer.php' ?>