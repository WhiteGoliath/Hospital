<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		
		// Prepare query and execute
		$query = "insert into client (firstname) values ('$name')";
		$result = $db->query($query);
		echo $query;
	    // Tell the browser to go back to the index page.
	    header("Location: ./");
	    exit();
	}

?>		