<?php

namespace Src\Core\Controller;

use Src\Core\Controller;
use Src\Core\Di;

class HomeController extends Controller
{
	public function __construct($di) {
        parent::__construct($di);
    }

	public function index()
	{
		$data = ['pageName' =>'Students'];
		$this->view->render('home', $data);
	}

	
}