<?php

namespace Src;

use Src\Core\Di;
use Src\Core\App;

define ('ROOT_DIR', __DIR__);
define ('CONFIG_DIR', __DIR__.'/Config/');

require_once ROOT_DIR . '/../vendor/autoload.php';

try {
	$di = new Di;

	$services = require CONFIG_DIR.'service.php';

	foreach ($services as $service) 
	{
		$provider = new $service($di);
		$provider->init();
	}

	$app = new App($di);
	$app->run();
} catch (\ErrorException $e) {
	echo $e->getMessage();
}