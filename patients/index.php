<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<!-- echo de order op 2 manieren, de lange en de krot ( <?=$order?>  )-->
		<thead>
			<tr>
				<th><a href="index.php?column=patient.name&sort=<?php echo $order; ?>">Name</a></th> 
				<th>Species</th>
				<th>gender</th>
				<th><a href="">Status</a></th>
				<th>firstname</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['firstname']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>