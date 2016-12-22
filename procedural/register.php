<?php include'templates/header.php' ?>
<body>
<div class="container">
	<div class="col-md-8">
		<?php include 'templates/heade.php'; ?>
		<div class="jumbotron">
			<form class="form-horizontal">
			  	<div class="form-group">
			    	<label for="first_name" class="col-sm-2 control-label">First Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="email" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
				    </div>
			  	</div>
			   <div class="form-group">
			    	<label for="password" class="col-sm-2 control-label">Password</label>
			    	<div class="col-sm-10">
			      		<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			    	</div>
			  </div>
			  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      	<button type="submit" class="btn btn-success">Register</button>
				    </div>
			  </div>
			</form>
		</div>
	</div>
</div>
</body>
<?php include 'templates/footer.php' ?>