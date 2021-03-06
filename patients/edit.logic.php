<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			//--------------------------------

			$query = "select patient.*, species.species, client.firstname from patient
			inner join species
			on patient.species_id=species.id
			inner join client
			on patient.client_id=client.id
			where patient.id=$id";

			$result = $db->query($query);
			
			$patient = $result->fetch_assoc();	

			//--------------------------------

			$query = "select * FROM species";

			$result = $db->query($query);

			$species = $result->fetch_all(MYSQLI_ASSOC);

		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$gender = $db->escape_string($_POST["gender"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "update patient set name='$name', gender='$gender', species='$species', status='$status' where id='$id'";
		$result = $db->query($query);
		
    // Tell the browser to go back to the index page.
   header("Location: ./");
    exit();
	endif;

?>