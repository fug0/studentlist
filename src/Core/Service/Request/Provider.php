<?php

namespace Src\Core\Service\Request;

use Src\Core\Service\AbstractProvider;


class Provider extends AbstractProvider
{
	public $serviceName = 'request';

	public function init()
	{
		$request = new Request();

		$this->di->set($this->serviceName, $request);
	}
}