<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";

	if($status=="before_submission" or $status=="failure")
	{
?>
	<br>
	<h3>Please fill up the following form to retrieve password of your account</h3>
	<br>
	<form method="post">
		<fieldset>
			<center><div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header"> Forgot Password Form</div>
		<div class="card-body">
			<!--legend>Forgot Password Form</legend-->
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<input type="hidden" name="page" value="forgot_password">
			<input type="hidden" name="caller" value="self"> 
			<br>
			<input type="submit"  class="btn btn-primary" value="Retrieve Password">
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
		<h3>Please check your mail for new password</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
