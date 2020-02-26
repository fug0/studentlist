<?php

namespace Src;

use Src\Core\Di;
use Src\Core\App;

define ('ROOT_DIR', __DIR__);
define ('CONFIG_DIR', __DIR__.'/Config/');

require_once ROOT_DIR . '/../vendor/autoload.php';

try {
	$di = new Di();
	$app = new App($di);
	$app->run();
} catch (\ErrorException $e) {
	echo $e->getMessage();
}