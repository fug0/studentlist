<?php

namespace Src\Core\Controller;

use Src\Core\Controller;
use Src\Core\Di;

class RegController extends Controller
{
	public function __construct($di) {
        parent::__construct($di);
    }
    
	public function index()
	{
		echo "registration";
	}
}