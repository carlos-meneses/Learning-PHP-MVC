<h1>ToDo List</h1>
<table>
<?php foreach ($todos as $key => $todo) : ?>
	<tr>
		<td>
			<a href="index.php?controller=todo&action=view&id=<?php echo $todo->id; ?>"><?php echo $todo->name; ?></a> 
		</td>
		<td>
			<a href="#" onclick="eliminar_todo(<?php echo $todo->id ?>)"><img src="<?php echo ROOT_STATIC; ?>images/delete.png" width="20"></a>
		</td>
		<td>
			<a href="index.php?controller=todo&action=edit&id=<?php echo $todo->id; ?>"><img src="<?php echo ROOT_STATIC; ?>images/edit.png" width="20"></a>
		</td>
	</tr>
<?php endforeach; ?>	
</table>
<br><br>
<a href="index.php?controller=todo&action=add">Add ToDo</a>
<a href="index.php">Principal</a>