<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

		<br>
		<table class="table" border="6" width="50%" align="center">
			<tr>
				<th><h3>:::Title:::</h3></th>
				<th><h3>:::Author:::</h3></th>
				<th><h3>:::Description:::</h3></th>
				<th><h3>:::Edit:::</h3></th>
				<th><h3>:::Delete:::</h3></th>
			</tr>
<?php
		foreach($books as $book)
		{
?>			
			<tr>
				<td><h3><?php echo $book["title"]; ?></h3></th>
				<td><h3><?php echo $book["author"]; ?></h3></th>
				<td><h3><?php echo $book["description"]; ?></h3></th>
				<td><a href="index.php?page=book_edit&id=<?php echo $book["id"]; ?>">Edit</a></th>
				<td><a href="index.php?page=book_delete&id=<?php echo $book["id"]; ?>">Delete</a></th>
			</tr>
<?php
		}
?>
		</table>

<?php
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
