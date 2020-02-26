<?php

namespace Src\Core;

class App
{
	private $di;

	public function __construct($di)
	{
		$this->di = $di;
	}

	public function run()
	{
		$db = $this->di->get('db');
		var_dump($db->query('SELECT * FROM students'));
	}
}