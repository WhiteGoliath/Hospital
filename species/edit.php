<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit species</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$species['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$species['name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" value="<?=$species['species']?>">
		</div>
		<div>
			<label for="name">Beschrijving:</label>
			<textarea id="status" name="status"><?=$species['status']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>