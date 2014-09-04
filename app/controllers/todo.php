<?php  
require "app/models/todoModel.php";
class ToDo 
{
	public function index()
	{
		$todo = new TodoModel();
		$todos = R::findAll('todo');
		require ROOT_STATIC."pages/todo/index.php";
	}

	public function add($data = null)
	{
		if ($_REQUEST == $_POST) 
		{
			$todo = new TodoModel();
			$todo = R::dispense('todo');
			foreach ($data as $key => $value) 
			{
				$todo->$key = $value;
			}
        	R::store($todo);
			header("Location: index.php?controller=todo&action=index");
		}
        require ROOT_STATIC."pages/todo/add.php";
	}

	public function view($id = null)
	{
		if (empty($id)) {
            header("Location: index.php");
        }else{
			$todo = new TodoModel();
			if (R::load('todo', $id)) {
				$todo = R::load('todo', $id);
				require ROOT_STATIC."pages/todo/view.php";
			}
        }
	}

	public function edit($data = null)
	{
		if ($_REQUEST == $_POST) 
		{
			$todo = new TodoModel();
			$todo = R::load('todo', $data['id']);
			foreach ($data as $key => $value) 
			{
				$todo->$key = $value;
			}
        	R::store($todo);
			header("Location: index.php?controller=todo&action=index");
		}

		$id = $data;
		if (!empty($id)) 
		{
			$todo = new TodoModel();
			if (R::load('todo', $id)) 
			{
				$todo = R::load('todo', $id);
				require ROOT_STATIC."pages/todo/edit.php";
			}
		}
		else
		{
			header("Location: index.php");
		}
	}

	public function delete($id = null)
	{
		if (!empty($id)) 
		{
			$todo = new TodoModel();
			if (R::load('todo', $id)) 
			{
				$todo = R::load('todo', $id);
				R::trash($todo);
				header("Location: index.php?controller=todo&action=index");
			}
        }
        else
        {
        	header("Location: index.php");
        }
	}
}
