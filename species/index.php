<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>species</h1>
		<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($species as $specie):
?>
			<tr>
				<td><?=$specie['name']?></td>
				<td><?=$specie['species']?></td>
				<td><?=$specie['status']?></td>
				<td class="center"><a href="edit.php?id=<?=$specie['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$specie['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";6
?>
