<?php

namespace Src\Core\Service\Router;

use Src\Core\Service\AbstractProvider;


class Provider extends AbstractProvider
{
	public $serviceName = 'router';

	public function init()
	{
		$config = require_once CONFIG_DIR . 'config.php';
 
        $host = $config['global']['host'];

		$router = new Router($host);

		$this->di->set($this->serviceName, $router);
	}
}