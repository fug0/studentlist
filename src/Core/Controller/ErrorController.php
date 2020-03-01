<?php

namespace Src\Core\Controller;

use Src\Core\Controller;
use Src\Core\Di;

class ErrorController extends Controller
{
	public function __construct($di) {
        parent::__construct($di);
    }

	public function page404()
	{
		echo "Error";
	}
}