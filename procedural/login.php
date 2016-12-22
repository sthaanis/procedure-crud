<?php include'templates/header.php' ?>

<body onload="hide()">
<div class="container">
	<div class="col-md-6">
		<?php include 'templates/heade.php'; ?>
		<?php include 'config/init.php' ?>
		<div class="jumbotron">
			<form class="form-horizontal" method="post" action="authentication.php">
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email" name = "email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
			  	</div>
			   <div class="form-group">
			    	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    	<div class="col-sm-10">
			      		<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
			    	</div>
			  </div>
			  <div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<div class="checkbox">
			        		<label>
			          			<input type="checkbox"> Remember me
			        		</label>
			      		</div>
			    	</div>
			  </div>
			  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      	<button type="submit" name="login" class="btn btn-success">Login</button>
				    </div>
			  </div>
			</form>
		</div>
	</div>
</div>
<script src="js/app.js"></script>
</body>
<?php include 'templates/footer.php'; ?>