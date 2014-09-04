<?php
class front_controller
{
	private $data = array();
	private $param = array();
	
	function __construct()
	{

		if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['controller'])){
			if (file_exists("app/controllers/".$_GET['controller'].".php")) {
				require "app/controllers/".$_GET['controller'].".php";
				$urlController = new $_GET['controller']();
				extract($_REQUEST);
				foreach ($_GET as $key => $value) {
					if ($key != 'controller' && $key != 'action') {
						$this->param[] = $_GET[$key];
					}
				}
				if (method_exists($urlController, $action)) {
					if ($this->param != null)
					{
						if (count($this->param) == 3) {
							$urlController->{$action}($this->param[0], $this->param[1], $this->param[2]);
						}
						elseif(count($this->param) == 2)
						{
							$urlController->{$action}($this->param[0], $this->param[1]);
						}
						elseif (count($this->param) == 1) 
						{
							$urlController->{$action}($this->param[0]);
						}
					}
					else
					{
						$urlController->{$action}();
					}
				}
			}
			
		}elseif ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['controller'])) {
			if (file_exists("app/controllers/".$_POST['controller'].".php")) {
				require "app/controllers/".$_POST['controller'].".php";
				$urlController = new $_POST['controller']();
				extract($_REQUEST);
				foreach ($_POST as $key => $value) {
					if ($key != 'controller' && $key != 'action') {
						$this->data[$key] = $value;
					}
				}
				if (method_exists($urlController, $action)) 
				{
					if ($this->data == null) 
					{
						return false;
					}
					else
					{
						$urlController->{$action}($this->data);
					}
				}
			}
		}
		elseif(empty($_REQUEST))
		{
			header("Location: index.php?controller=home&action=index");
		}
	}
}