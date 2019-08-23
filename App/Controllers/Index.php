<?php

namespace App\Controllers;


class Index
{
	private $view;

	public function __construct()
	{
		$this->view = new \stdClass;
	}
	
	public function index()
	{
		$this->view->x = 1;
		$nomes = array();
		$nomes[] = 'Wesley';
		$nomes[] = 'João';

		$this->view->nomes = $nomes;
		include '../App/views/index/index.phtml';
	}

	public function empresa()
	{
		include '../App/views/index/empresa.phtml';	
	}
}