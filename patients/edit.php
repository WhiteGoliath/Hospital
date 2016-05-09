<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">Gender:</label>
			<input type="radio" id="gender" name="gender" value="male">Male
			<input type="radio" id="gender" name="gender" value="female">Female
		</div>
		<div>
			<label for="name">Species:</label>

				<select>
				<option selected=true></option>
			<?php 
			foreach ($species as $specie) {
			?>

					<option value="<?=$specie['id']?>"><?=$specie['species']?></option>

			<?php 
			}
			?>
			
				</select>

		</div>
		<div>
			<label for="name">Beschrijving:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>