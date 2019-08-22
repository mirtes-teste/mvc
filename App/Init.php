<?php

namespace App;

class Init
{

	private $routes;

	public function __construct()
	{
		$this->initRoutes();
	}



	public function initRoutes()
	{
		$ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
		$ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
		$this->setRoutes($ar);
	}

	public function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	public function getUrl()
	{
		return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
	}

}



