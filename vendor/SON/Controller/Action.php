<?php

namespace SON\Controller;

class Action
{
	protected $view;
	protected $action;

	public function __construct()
	{
		$this->view = new \stdClass;
	}

	public function render($action, $layout = true)
	{
		$this->action = $action;
		if($layout == true && file_exists("../App/views/layout.phtml")){
			include_once '../App/views/layout.phtml';
		}

		else {
			$this->content();
		}
	}

	public function content()
	{
		$atual = get_class($this);
		$singleClassName = strtolower(str_replace("App\\Controllers\\", "", $atual));
		include_once '../App/views/'.$singleClassName.'/'.$this->action.'.phtml';
	}

}