<?php

namespace SON\Controller;

class Action
{
	protected $view;

	public function __construct()
	{
		$this->view = new \stdClass;
	}

	public function render($action)
	{
		$atual = get_class($this);
		$singleClassName = strtolower(str_replace("App\\Controllers\\", "", $atual));
		include_once '../App/views/'.$singleClassName.'/'.$action.'.phtml';

	}

}