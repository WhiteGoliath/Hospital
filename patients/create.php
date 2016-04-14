<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Gender:</label>
			<input type="radio" id="gender" name="gender" value="male">Male
			<input type="radio" id="gender" name="gender" value="female">Female
		</div>
		
		<div>
			<label for="name">Species:</label>
			<select name="species" id="species">

				<option value="1">Kat</option>
				<option value="2" selected="true">Hond</option>

			</select>
		</div>
		
		<div>
			<label for="name">Beschrijving:</label>
			<textarea id="status" name="status"></textarea>
		</div>

		<div>
			<label for="client">Client:</label>
			<select name="client" id="client">
				
				<option value="1">Marc</option>
				<option value="2">Maarten</option>

			</select>
		</div>

		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>