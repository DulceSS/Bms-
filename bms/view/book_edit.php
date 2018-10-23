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
	<h3>Please fill up the following form to update book information</h3>
	<br>
	<form method="post">
		<fieldset>
			<center><div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header"> Book Update Form </div>
		<div class="card-body">
			<!--legend>Book Update Form</legend-->
			<label for="title">Title</label> <br>
			<input type="text" name="title" id="title" value="<?php echo $book[0]["title"]; ?>">
			<font color="red"><?php echo $errors["title"]; ?></font>
			<br>
			<label for="author">Author</label><br>
			<input type="text" name="author" id="author" value="<?php echo $book[0]["author"]; ?>">
			<font color="red"><?php echo $errors["author"]; ?></font>
			<br>
			<label for="description">Description</label>
			<input type="description" name="description" id="description" value="<?php echo $book[0]["description"]; ?>">
			<font color="red"><?php echo $errors["description"]; ?></font>
			<br>
			<input type="hidden" name="page" value="book_edit">
			<input type="hidden" name="caller" value="self">
			<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>"> <br>
			<input type="submit"  class="btn btn-primary" value="Update">

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
		<h3>Book Updated</h3>
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
