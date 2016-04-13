<?php
	
	$db = new mysqli('localhost','root','','hospital');

	if( isset($_GET['sort1'])){
		$orderby = "ORDER BY ".$_GET['sort']." ASC";
		$orderby = "ORDER BY ".$_GET['column']." DESC";
	} else {
		$orderby = "";
	}
	$query = "select * from patient
	inner join species
	on patient.species_id=species.id
	inner join client
	on patient.client_id=client.id
 	 ".$orderby;
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>