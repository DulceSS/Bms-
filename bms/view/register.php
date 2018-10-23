<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<br>
	<h3>Please fill up the following form to register yourself</h3>
	<br>

	<!--center><div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header"> Header </div>
		<div class="card-body">
			<h5 class="card-title"> Light card title</h5>
			<p class="card-text">aaahhh</p>
		</div>
		
	</div>
</center-->

	<form method="post" >
		<fieldset>
			<center><div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header"> Registration Form </div>
		<div class="card-body">
			<!--h3><legend>Registration Form</legend></h3-->

			<!--div class="form-group" -->
			
			<label for="name">Name</label><br>
			<input type="text" name="name" id="name" value="<?php echo $_REQUEST["name"]; ?>">
			<font color="red"><?php echo $errors["name"]; ?></font>
			
			<br>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			<br>
			<input type="hidden" name="page" value="register">
			<input type="hidden" name="caller" value="self">
			<br>
			<input type="submit" class="btn btn-primary" value="Sign Up">
			</div>
		
	</div>
</center>
		</fieldset>
	</form>
<?php
	}
	else
	{
?>
		<h3>Registration Successful</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
