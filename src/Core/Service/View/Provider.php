<?php

namespace Src\Core\Service\View;

use Src\Core\Service\AbstractProvider;


class Provider extends AbstractProvider
{
	public $serviceName = 'view';

	public function init()
	{
		$view = new View();

		$this->di->set($this->serviceName, $view);
	}
}