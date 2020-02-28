<?php

namespace Src\Core\Service\Router;

class DispatchedRoute
{
	private $controller;

	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	public function getController()
	{
		return $this->controller;
	}
}