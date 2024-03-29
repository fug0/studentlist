<?php

namespace Src\Core\Service\Database;

use Src\Core\Service\AbstractProvider;


class Provider extends AbstractProvider
{
	public $serviceName = 'db';

	public function init()
	{
		$db = new Connection();

		$this->di->set($this->serviceName, $db);
	}
}