<h1>Add ToDo</h1>
<?php echo isset($mensaje) ? $mensaje : null; ?>
<form action="index.php?controller=todo&action=add" method="post">
	<label>Name To Do
	    <input type="text" name="name" maxlength="50" required />
    </label>
	<input type="submit" value="Guardar">
		
	<input type="hidden" name="controller" value="todo">
	<input type="hidden" name="action" value="add">
</form>
<a href="index.php?controller=todo&action=index">ToDo List</a>