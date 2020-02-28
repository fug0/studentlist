<?php

namespace Src\Core;

use Src\Core\Helper\Common;
use Src\Core\Service\Router\DispatchedRoute;

class App
{
	private $di;
	public $router;

	public function __construct($di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}

	public function run()
	{
		echo "<pre>";
		try{

			require_once CONFIG_DIR.'routes.php';

			$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

			if($routerDispatch == null)
			{
				$routerDispatch = new DispatchedRoute('ErrorController:page404');
			}

			list($class, $action) = explode(":", $routerDispatch->getController(), 2);

			$controller = '\\Src\\Core\\Controller\\'.$class;

			//call_user_func([new $controller($this->di), $action]);

			var_dump($class);
			var_dump($action);

		}catch (\ErrorException $e)
		{
			echo $e->getMessage();
			exit;
		}	
	}
}