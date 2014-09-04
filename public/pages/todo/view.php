<h1>ToDo List</h1>
<table>
	<tr>
		<td>Id:</td>
		<td><?php print_r($todo->id); ?></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><?php echo $todo->name; ?></td>
	</tr>
</table>
<a href="index.php?controller=todo&action=index">ToDo List</a>
<a href="index.php?controller=todo&action=add">Add ToDo</a>