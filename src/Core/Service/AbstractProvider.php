<?php

namespace Src\Core\Service;

use Src\Core\Di;

abstract class Abstractprovider 
{
	protected $di;

	public function __construct($di)
	{
		$this->di = $di;
	}

	abstract function init();

}