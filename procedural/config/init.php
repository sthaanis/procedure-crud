<?php if(isset($_GET['insert'])) { ?>
	<div class="alert alert-success" id="hide">Record Inserted</div>
<?php } ?>

<?php if(isset($_GET['r'])) { ?>
	<div class="alert alert-success" id="hide">Record Deleted</div>
<?php } ?>
	
<?php if(isset($_GET['u'])) { ?>
	<div class="alert alert-success" id="hide">Record Updated</div>
<?php } ?>

<?php if(isset($_GET['success'])) { ?>
	<div class="alert alert-success" id="hide">Welcome to the dashboard</div>
<?php } ?>

<?php if(isset($_GET['error'])) { ?>
	<div class="alert alert-success" id="hide">Incorrect Authentication</div>
<?php } ?>