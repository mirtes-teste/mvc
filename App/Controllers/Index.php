<?php

namespace App\Controllers;

use SON\Controller\Action;

class Index extends Action
{
	
	public function index()
	{
		
		$nomes = array();
		$nomes[] = 'Wesley';
		$nomes[] = 'João';


		//atribuindo para a view
		$this->view->nomes = $nomes;

		//renderizando
		$this->render('index');
	}

	public function empresa()
	{
		$this->render('empresa');
	}
}