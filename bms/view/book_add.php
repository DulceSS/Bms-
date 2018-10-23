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
	<h3>Please fill up the following form to add new book</h3>
	<br>
	<form method="post">
		<fieldset>
			<center><div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header"> Book Add Form </div>
		<div class="card-body">
			<!--legend>Book Add Form</legend-->
			<label for="title">Title</label> <br>
			<input type="text" name="title" id="title" value="<?php echo $_REQUEST["title"]; ?>">
			<font color="red"><?php echo $errors["title"]; ?></font>
			<br>
			<label for="author">Author</label> <br>
			<input type="text" name="author" id="author" value="<?php echo $_REQUEST["author"]; ?>">
			<font color="red"><?php echo $errors["author"]; ?></font>
			<br>
			<label for="description">Description</label> <br>
			<input type="description" name="description" id="description" value="<?php echo $_REQUEST["description"]; ?>">
			<font color="red"><?php echo $errors["description"]; ?></font>
			<br>
			<input type="hidden" name="page" value="book_add">
			<input type="hidden" name="caller" value="self"> <br>
			<input type="submit" class="btn btn-primary" value="Save">
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
		<h3>Book Saved</h3>
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
