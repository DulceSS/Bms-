<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
	<br>
	<h3>Please fill up the following form to delete book</h3>
	<br>
	<form method="post">
		<fieldset>
			<center><div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header"> Book Delete Form </div>
		<div class="card-body">
			<!--legend>Book Delete Form</legend-->
			<label for="title">Do you really want to delete book <?php echo $book[0]["title"]; ?>?</label>
			<br>
			<select name="choice">
				<option value="yes">Yes</option>
				<option value="no" selected>No</option>
			</select>
			<br>
			<input type="hidden" name="page" value="book_delete">
			<input type="hidden" name="caller" value="self">
			<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>"> <br>
			<input type="submit" class="btn btn-primary" value="Delete">
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
		<h3>Book Deleted</h3>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<h3>Invalid Login!!! Try Again.</h3>
<?php
	}
	include_once "footer.php";
?>
