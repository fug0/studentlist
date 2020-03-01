<?php

namespace Src\Core;

abstract class Controller
{
	protected $di;

	protected $db;

	protected $view;

	protected $request;

	public function __construct($di)
	{
		$this->di = $di;
		$this->db = $this->di->get('db');
		$this->view = $this->di->get('view');
		$this->request = $this->di->get('request');
	}
}