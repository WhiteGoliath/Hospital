<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$sort = isset($_GET['column']) && 
			isset($_GET['sort'])?true:false;

	$order = isset($_GET['sort']) && 
					$_GET['sort'] == "desc"?"asc":"desc";
	if ($sort) {
		$sort = "ORDER BY ";
		$sort .= $_GET['column']. " ";
		$sort .= $_GET['sort'];
	} else {
		$sort ="";
	}


	$query = "select * from patient
	inner join species
	on patient.species_id=species.id
	inner join client
	on patient.client_id=client.id
 	 ".$sort;
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>