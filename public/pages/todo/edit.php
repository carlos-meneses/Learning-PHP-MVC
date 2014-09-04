<h1>Add ToDo</h1>
<form action="index.php?controller=todo&action=edit" method="post">
	<label>Name To Do
	<input type="text" name="name" value="<?php echo $todo->name; ?>" maxlength="50" required>
    </label>
	<input type="hidden" name="id" value="<?php echo $todo->id; ?>">
	<input type="submit" value="Guardar">
		
	<input type="hidden" name="controller" value="todo">
	<input type="hidden" name="action" value="edit">
</form>
<a href="index.php?controller=todo&action=index">ToDo List</a>