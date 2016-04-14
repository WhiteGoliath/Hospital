<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete species</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<input type="hidden" name="id" value="<?=$species['id']?>">

		<div>
			<label for="name">Species:</label>
			<span><?=$species['species']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>