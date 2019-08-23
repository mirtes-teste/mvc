<?php

namespace App\Controllers;


class Index
{
	
	public function index()
	{
		include '../App/views/index/index.phtml';
	}

	public function empresa()
	{
		include '../App/views/index/empresa.phtml';	
	}
}