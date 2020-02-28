<?php

namespace Src\Core\Service\Router;

class UrlDispatcher
{
	private $routes = [
		'GET' => [],
		'POST' => []
	];

	public function register($method, $pattern, $controller)
	{
		$this->routes[strtoupper($method)][$pattern] = $controller;
	}

	public function dispatch($method, $uri)
	{

		$routes = isset($this->routes[$method]) ? $this->routes[$method] : [];

		if (array_key_exists($uri, $routes)) {
			return new DispatchedRoute($routes[$uri]);
		}

		return null;
	}
}